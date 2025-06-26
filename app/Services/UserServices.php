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
use Illuminate\Auth\Events\Registered;



class UserServices
{
    public function registerPatient($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = User::query()->create([
                // 'name' => $request['name'],
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
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

            $message = 'Patient user created successfully!';
            return ['user' => $data, 'message' => $message];
        });
    }

    public function registerOwnerLab($request): array
    {
        return DB::transaction(function () use ($request) {
            $user = User::query()->create([
                // 'name' => $request['name'],
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
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
            ]);
            $user->LabOwner()->create([
                'user_id' => $user['lab_name'] ?? null,
                'lab_id' => $lab['id'] ?? null,
            ]);
            event(new Registered($user));

            $user->load('roles', 'permissions');
            $user = User::query()->find($user->id);
            $user = $this->appendRolesAndPermissions($user);

            $user['token'] = $user->createToken("token")->plainTextToken;

            $data['token'] = $user['token'];
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
                $user = $this->appendRolesAndPermissions($user);
                $user['token'] = $user->createToken("token")->plainTextToken;
                $data['token'] = $user['token'];
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
