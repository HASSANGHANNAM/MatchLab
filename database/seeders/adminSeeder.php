<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = ([
            "email" => "adminadmin@gmail.com",
            "password" => "admin12345",
            "user_name" => "Admin"
        ]);
        $user['password'] = Hash::make($user['password']);
        $user = User::create($user);
        $super_admin = ([
            "user_id" => "Admin"
        ]);
        $super_admin = SuperAdmin::create($super_admin);
        $accessToken = $super_admin->createToken('authToken')->accessToken;
    }
}
