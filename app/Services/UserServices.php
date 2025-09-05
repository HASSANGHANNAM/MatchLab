<?php

namespace App\Services;

use App\Models\Lab;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Models\EmailVerification;
use App\Models\LabOwner;
use Carbon\Carbon;
use App\Models\Location;
use Illuminate\Support\Str;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;


class UserServices
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function registerPatient($request): array
    {


        return DB::transaction(function () use ($request) {
            $user = User::query()->create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'fcm_token' => $request['fcm_token'] ?? null,

            ]);

            $patientRole = Role::query()->where('name', 'patient')->first();
            $user->assignRole($patientRole);

            $permissions = $patientRole->permissions()->pluck('name')->toArray();
            $user->givePermissionTo($permissions);

            $user->patient()->create([
                'phone' => $request['phone'] ?? null,
                'gender' => $request['gender'] ?? null,
                'dob' => $request['dob'] ?? null,
                // 'location' => $request['location'] ?? null,
                'Health_Problems' => $request['Health_Problems'] ?? null
            ]);

            $this->sendVerificationCode($user);

            $user->load('roles', 'permissions');
            $user = User::query()->find($user->id);
            $user = $this->appendRolesAndPermissions($user);

            // stripe
            $patientStripeAccount = $this->stripeService->createStripeAccount(
                $request['email'],
                $request['first_name'],
                $request['last_name']
            );
            if ($patientStripeAccount['code'] == 200) {
                DB::table('users')->where('id', $user->id)->update(['stripe_account_id' => $patientStripeAccount['data']['Account_id']]);
                $user->stripe_account_id = $patientStripeAccount['data']['Account_id'];
            } else {
                DB::rollBack();
                $message = 'Patient user created fail! because stripe account do not created ';
                return ['user' => null, 'message' => $message];
            }
            //strip end
            $user['token'] = $user->createToken("token")->plainTextToken;
            $data['token'] = $user['token'];

            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تم إنشاء حساب مريض",
                "مرحباً {$user->first_name}، تم إنشاء حسابك كمريض بنجاح."
            );

            $message = 'Patient user created successfully!';
            return ['user' => $data, 'message' => $message];
        });
    }

    public function registerOwnerLab($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = User::query()->create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'fcm_token' => $request['fcm_token'] ?? null,

            ]);

            $ownerRole = Role::query()->where('name', 'LabOwner')->first();
            $user->assignRole($ownerRole);

            $permissions = $ownerRole->permissions()->pluck('name')->toArray();
            $user->givePermissionTo($permissions);
            $location = Location::query()->create([
                'address' => $request['address'] ?? null,
                'longitude' => $request['longitude'] ?? null,
                'latitude' => $request['latitude'] ?? null,
                'city_id' => $request['city_id'] ?? null,
            ]);
            if (isset($request['image']) && $request['image'] instanceof \Illuminate\Http\UploadedFile) {
                $fileName = $request['image']->getClientOriginalName();
                $request['image']->move(public_path('lab_images'), $fileName);
                $image_path = "/lab_images/" . $fileName;
                unset($request['image']);
            }
            $lab = Lab::query()->create([
                'lab_name' => $request['lab_name'] ?? null,
                'contact_info' => $request['contact_info'] ?? null,
                'location_id' => $location['id'] ?? null,
                'image_path' => $image_path ?? null,
                'price_of_global_unit' => 1,
                'subscriptions_status' => false,
                'home_service' => false
            ]);
            $user->LabOwner()->create([
                'user_id' => $user['id'] ?? null,
                'lab_id' => $lab['id'] ?? null,
            ]);
            $this->sendVerificationCode($user);
            $user->load('roles', 'permissions');
            $user = User::query()->find($user->id);
            $user = $this->appendRolesAndPermissions($user);
            // stripe
            $LabOwnerStripeAccount = $this->stripeService->createStripeAccount(
                $request['email'],
                $request['first_name'],
                $request['last_name']
            );
            if ($LabOwnerStripeAccount['code'] == 200) {
                DB::table('users')->where('id', $user->id)->update(['stripe_account_id' => $LabOwnerStripeAccount['data']['Account_id']]);
                $user->stripe_account_id = $LabOwnerStripeAccount['data']['Account_id'];
            } else {
                DB::rollBack();
                $message = 'LabOwner user created fail! because stripe account do not created ';
                return ['user' => null, 'message' => $message];
            }
            //strip end
            $user['token'] = $user->createToken("token")->plainTextToken;

            $data['token'] = $user['token'];
            $data['roles'] = $user['roles'];

            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تم إنشاء حساب ادمن ",
                "مرحباً {$user->first_name}، تم إنشاء حسابك كادمن بنجاح.",
            );


            $message = 'OwnerLab user created successfully!';
            return ['user' => $data, 'message' => $message];
        });
    }

    public function login($request)
    {
        $user = User::query()->where('email', $request['email'])->first();
        if (!is_null($user)) {
            if (!Auth::attempt($request->only(['email', 'password']))) {
                $data = null;
                $message = 'User email & password does not match with our record';
                $code = 401;
            } else {
                if (isset($request['fcm_token'])) {
                    $user->update(['fcm_token' => $request['fcm_token']]);
                }

                if ($user->email_verified_at === null) {
                    return [
                        'user' => null,
                        'message' => 'يجب تفعيل البريد الإلكتروني الجديد قبل تسجيل الدخول.',
                        'code' => 403
                    ];
                }


                $user = $this->appendRolesAndPermissions($user);
                $user['token'] = $user->createToken("token")->plainTextToken;
                $data['token'] = $user['token'];
                $data['roles'] = $user['roles'];
                $notificationService = new NotificationService();
                $notificationService->send(
                    $user,
                    "تم تسجيل دخولك",
                    "مرحباً {$user->first_name}،",
                    "wallet"
                );

                $message = 'User login successfully';
                $code = 200;
            }
        } else {
            $data = null;
            $message = 'User Email not found';
            $code = 404;
        }
        return ['user' => $data, 'message' => $message, 'code' => $code];
    }

    public function logout()
    {
        $user = Auth::user();
        if (!is_null(Auth::user())) {
            Auth::user()->tokens()->delete();
            $message = 'ueser logout successfully';
            $code = 200;
        } else {
            $message = 'invaild token ';
            $code = 404;
        }
        return ['user' => $user, 'message' => $message, 'code' => $code];
    }

    public function details()
    {
        return auth()->user();
    }

    public function updatePatient($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = auth()->user();

            $oldEmail = $user->email;
            $newEmail = $request['email'] ?? $oldEmail;

            $user->update([
                'first_name' => $request['first_name'] ?? $user->first_name,
                'last_name'  => $request['last_name'] ?? $user->last_name,
                'fcm_token'  => $request['fcm_token'] ?? $user->fcm_token,
            ]);

            $user->patient()->update([
                'phone'           => $request['phone'] ?? $user->patient->phone,
                'gender'          => $request['gender'] ?? $user->patient->gender,
                'dob'             => $request['dob'] ?? $user->patient->dob,
                'Health_Problems' => $request['Health_Problems'] ?? $user->patient->Health_Problems,
            ]);

            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تحديث الملف الشخصي",
                "تم تحديث معلومات حسابك كمريض بنجاح."
            );

            $message = 'Patient information updated successfully!';

            return ['user' => $user, 'message' => $message, 'code' => 200];
        });
    }

    public function updateLabOwner($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = auth()->user();
            $user->update([
                'first_name' => $request['first_name'] ?? $user->first_name,
                'last_name' => $request['last_name'] ?? $user->last_name,
                'password' => isset($request['password']) ? Hash::make($request['password']) : $user->password,
            ]);

            $labOwner = $user->LabOwner;
            $lab = $labOwner->lab;

            $lab->update([
                'lab_name' => $request['lab_name'] ?? $lab->lab_name,
                'contact_info' => $request['contact_info'] ?? $lab->contact_info,
                'home_service' => $request['home_service'] ?? $lab->home_service,
            ]);
            $lab->location()->update([
                'address' => $request['address'] ?? $lab->location->address,
                'latitude' => $request['latitude'] ?? $lab->location->latitude,
                'longitude' => $request['longitude'] ?? $lab->location->longitude,
                'city_id' => $request['city_id'] ?? $lab->location->city_id,
            ]);

            if (isset($request['image']) && $request['image'] instanceof \Illuminate\Http\UploadedFile) {
                $fileName = $request['image']->getClientOriginalName();
                $request['image']->move(public_path('lab_images'), $fileName);
                $lab->update(['image_path' => "/lab_images/" . $fileName]);
            }

            $user = $user->load('LabOwner.lab.location');

            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تحديث بيانات المختبر",
                "تم تحديث معلومات المختبر الخاصة بك بنجاح."
            );
            $user->save();
            $lab->save();
            $message = 'Lab Owner information updated successfully!';
            $code = 200;
            return ['user' => null, 'message' => $message, 'code' => $code];
        });
    }
    public function getOwnerLabInfo(): array
    {
        return DB::transaction(function () {

            $user = auth()->user();
            $user->load([
                'LabOwner.lab.location.city',
            ]);

            if (!$user->LabOwner) {
                throw new \Exception('هذا المستخدم ليس صاحب مختبر.');
            }

            $lab = $user->LabOwner->lab ?? null;
            $data = [
                'user' => [
                    'id'         => $user->id,
                    'first_name' => $user->first_name,
                    'last_name'  => $user->last_name,
                    'email'      => $user->email,
                ],
                'lab' => [
                    'lab_name'            => $lab->lab_name ?? null,
                    'contact_info'        => $lab->contact_info ?? null,
                    'image_path'          => $lab->image_path ?? null,
                    'price_of_global_unit' => $lab->price_of_global_unit ?? null,
                    'subscriptions_status' => $lab->subscriptions_status ?? null,
                    'expiry_time'         => $lab->expiry_time ?? null,
                    'price_of_global_unit' => $lab->price_of_global_unit ?? null,
                    'subscriptions_status' => $lab->subscriptions_status ?? null,
                    'home_service'        => $lab->home_service ?? null,
                    'location' => [
                        'address' => $lab->location->address ?? null,
                        'city'    => $lab->location->city->city_name ?? null,
                    ],
                ]
            ];

            $message = 'OwnerLab data retrieved successfully!';
            return ['data' => $data, 'message' => $message];
        });
    }
    public function getPatientInfo(): array
    {
        return DB::transaction(function () {

            $user = auth()->user();
            $user->load([
                'patient'
            ]);
            if (!$user->patient) {
                throw new \Exception('هذا المستخدم ليس صاحب مختبر.');
            }

            $data = [
                'patient' => [
                    'user_id'         => $user->id,
                    'first_name' => $user->first_name,
                    'last_name'  => $user->last_name,
                    'email'      => $user->email,
                    'fcm_token'      => $user->fcm_token,
                    'patient_id'         => $user->patient->id ?? null,
                    'phone'         => $user->patient->phone ?? null,
                    'gender'         => $user->patient->gender ?? null,
                    'dob'         => $user->patient->dob ?? null,
                    'Health_Problems'         => $user->patient->Health_Problems ?? null
                ]
            ];

            $message = 'Patient data retrieved successfully!';
            return ['data' => $data, 'message' => $message];
        });
    }
    private function appendRolesAndPermissions($user)
    {
        $roles = [];
        foreach ($user->roles as $role) {
            $roles[] = $role->name;
        }
        unset($user['roles']);
        $user['roles'] = $roles;
        $permissions = [];
        foreach ($user->permissions as $permission) {
            $permissions[] = $permission->name;
        }
        unset($user['permissions']);
        $user['permissions'] = $permissions;

        return $user;
    }
    public function getUsersWithRoles(): array
    {
        $data['users'] = null;
        if (Auth::user()->hasRole('SuperAdmin')) {
            $users = User::with('roles:id,name')->get();
            $data['users'] = $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'roles' => $user->roles->pluck('name')
                ];
            });
            return ['data' => $data, 'message' => 'succesfully!'];
        } else {
            return ['data' => $data, 'message' => 'Unauthorized access!'];
        }
    }

    private function sendVerificationCode($user)
    {
        $code = rand(100000, 999999);
        EmailVerification::create([
            'user_id' => $user->id,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);

        Mail::raw("كود التحقق الخاص بك هو: {$code}", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('رمز التحقق لحسابك');
        });
    }

    public function resendVerificationCode($email)
    {
        $user = User::where('email', $email)->first();

        if (!$user) {
            throw new \Exception('البريد الإلكتروني غير موجود');
        }

        if ($user->email_verified_at) {
            throw new \Exception('تم تفعيل البريد الإلكتروني مسبقًا');
        }


        $lastCode = EmailVerification::where('user_id', $user->id)
            ->where('is_verified', false)
            ->latest()
            ->first();

        if ($lastCode && $lastCode->created_at->diffInSeconds(now()) < 60) {
            throw new \Exception('يمكنك إعادة الإرسال بعد دقيقة واحدة فقط');
        }


        EmailVerification::where('user_id', $user->id)
            ->where('is_verified', false)
            ->delete();


        $code = rand(100000, 999999);
        EmailVerification::create([
            'user_id' => $user->id,
            'code' => $code,
            'expires_at' => now()->addMinutes(10),
        ]);


        Mail::raw("رمز التحقق الجديد الخاص بك هو: {$code}", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('رمز التحقق الجديد لحسابك');
        });

        return 'تم إرسال رمز تحقق جديد إلى بريدك الإلكتروني';
    }


    public function updatePatientPassword($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = auth()->user();
            // dd(!Hash::check($request['old_password'], auth()->user()->password));
            if (!Hash::check($request['old_password'], auth()->user()->password)) {
                $user->update([
                    'password'   =>  Hash::make($request['old_password']),
                ]);
                $notificationService = new NotificationService();
                $notificationService->send(
                    $user,
                    "تحديث كلمة المرور",
                    "تم تحديث كلمة مرور حسابك كمريض بنجاح."
                );
                $message = 'success update password';
            } else {
                $message = 'fail update password the old password incorrect';
            }
            return ['user' => null, 'message' => $message, 'code' => 200];
        });
    }
    public function updatePatientEmail($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = auth()->user();

            $oldEmail = $user->email;
            $newEmail = $request['email'] ?? $oldEmail;

            $user->update([
                'email'      => $newEmail
            ]);

            $user->email_verified_at = null;
            $user->save();
            $this->sendVerificationCode($user);


            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تحديث ايميل ",
                "تم تحديث إيميل حسابك كمريض بنجاح."
            );

            $message = 'your email updated successfully! you must verfid it';

            return ['user' => $user, 'message' => $message, 'code' => 200];
        });
    }
}
