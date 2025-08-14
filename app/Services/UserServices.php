<?php

namespace App\Services;

use App\Models\Lab;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Models\LabOwner;
use App\Models\Location;
use App\Services\NotificationService;
use Illuminate\Auth\Events\Registered;


class UserServices
{
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

            // إنشاء سجل المريض
            $user->patient()->create([
                'phone' => $request['phone'] ?? null,
                'gender' => $request['gender'] ?? null,
                'dob' => $request['dob'] ?? null,
                // 'location' => $request['location'] ?? null,
                'Health_Problems' => $request['Health_Problems'] ?? null
            ]);

            event(new Registered($user));

            $user->load('roles', 'permissions');
            $user = User::query()->find($user->id);
            $user = $this->appendRolesAndPermissions($user);


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
            event(new Registered($user));


            $user->load('roles', 'permissions');
            $user = User::query()->find($user->id);
            $user = $this->appendRolesAndPermissions($user);

            $user['token'] = $user->createToken("token")->plainTextToken;

            $data['token'] = $user['token'];
            $data['roles'] = $user['roles'];

             $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تم إنشاء حساب ادمن ",
                "مرحباً {$user->first_name}، تم إنشاء حسابك كادمن بنجاح."
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

                $user = $this->appendRolesAndPermissions($user);
                $user['token'] = $user->createToken("token")->plainTextToken;
                $data['token'] = $user['token'];
                $data['roles'] = $user['roles'];
                $notificationService = new NotificationService();
                $notificationService->send(
                    $user,
                    "تم تسجيل دخولك ",
                    "مرحباً {$user->first_name}،"
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

        $user->update([
            'first_name' => $request['first_name'] ?? $user->first_name ?? null,
            'last_name' => $request['last_name'] ?? $user->last_name,
            'email' => $request['email'] ?? $user->email ?? null,
            'password' => isset($request['password']) ? Hash::make($request['password']) : $user->password,
            'fcm_token' => $request['fcm_token'] ?? $user->fcm_token,
        ]);

        $user->patient()->update([
            'phone' => $request['phone'] ?? $user->patient->phone,
            'gender' => $request['gender'] ?? $user->patient->gender,
            'dob' => $request['dob'] ?? $user->patient->dob,
            'Health_Problems' => $request['Health_Problems'] ?? $user->patient->Health_Problems,
        ]);
            $notificationService = new NotificationService();
            $notificationService->send(
                $user,
                "تحديث الملف الشخصي",
                "تم تحديث معلومات حسابك كمريض بنجاح."
            );

        $message = 'Patient information updated successfully!';
        $code =200;
        return ['user' => $user, 'message' => $message, 'code' => $code];
    });
}

public function updateLabOwner($request): array
{
    return DB::transaction(function () use ($request) {
        $user = auth()->user();

        $user->update([
            'first_name' => $request['first_name'] ?? $user->first_name,
            'last_name' => $request['last_name'] ?? $user->last_name,
            'email' => $request['email'] ?? $user->email,
            'password' => isset($request['password']) ? Hash::make($request['password']) : $user->password,
            'fcm_token' => $request['fcm_token'] ?? $user->fcm_token,

        ]);

        $labOwner = $user->LabOwner;
        $lab = $labOwner->lab;

        $lab->update([
            'lab_name' => $request['lab_name'] ?? $lab->lab_name,
            'contact_info' => $request['contact_info'] ?? $lab->contact_info,
            'price_of_global_unit' => $request['price_of_global_unit'] ?? $lab->price_of_global_unit,
            'subscriptions_status' => $request['subscriptions_status'] ?? $lab->subscriptions_status,
            'home_service' => $request['home_service'] ?? $lab->home_service,
        ]);

        $lab->location()->update([
            'address' => $request['address'] ?? $lab->location->address,
            'city_id' => $request['city_id'] ?? $lab->location->city_id,
        ]);

        if (isset($request['image']) && $request['image'] instanceof \Illuminate\Http\UploadedFile) {
            $fileName = $request['image']->getClientOriginalName();
            $request['image']->move(public_path('lab_images'), $fileName);
            $lab->update(['image_path' => "/lab_images/" . $fileName]);
        }

        // return [
        //     'user' => $user->load('LabOwner.lab.location'),
        //     'message' => 'Lab Owner information updated successfully!'
        // ];

        $user = $user->load('LabOwner.lab.location');

        $notificationService = new NotificationService();
        $notificationService->send(
            $user,
            "تحديث بيانات المختبر",
            "تم تحديث معلومات المختبر الخاصة بك بنجاح."
        );

        $message = 'Lab Owner information updated successfully!';
        $code = 200 ;
        return ['user' => $user, 'message' => $message, 'code' => $code];
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
                    'price_of_global_unit'=> $lab->price_of_global_unit ?? null,
                    'subscriptions_status'=> $lab->subscriptions_status ?? null,
                    'home_service'        => $lab->home_service ?? null,
                    'location' => [
                        'address' => $lab->location->address ?? null,
                        'city'    => $lab->location->city->name ?? null,
                    ],
                ]
            ];

            $message = 'OwnerLab data retrieved successfully!';
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
}
