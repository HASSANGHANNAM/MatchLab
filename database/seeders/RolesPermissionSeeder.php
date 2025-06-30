<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'LabOwner']);
        $patientRole = Role::create(['name' => 'Patient']);
        $superAdminRole = Role::create(['name' => 'SuperAdmin']);

        $permissions = [ //منعرف كلشي permissions
            'delete.lab',
            'update.lab',
            'create.lab',
        ];

        foreach ($permissions as $permissionsname) { // اذا موجودة تركها
            Permission::findOrCreate($permissionsname,/* guardName:*/ 'web');
        }

        //assign permissions to role
        $superAdminRole->syncPermissions($permissions);
        $adminRole->givePermissionTo(['delete.lab', 'update.lab', 'create.lab']);
        $patientRole->givePermissionTo([]);

        // //crete users and assign roles
        // $adminUser = User::factory()->create([
        //     'first_name' => 'admin',
        //     'last_name' => 'admin',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('admin1234'),
        // ]);
        // $adminUser->assignRole($adminRole); //اسند الرول لهذا الادمن

        // give the permissions to adminrole
        // $permissions = $adminRole->permissions()->pluck('name')->toArray();
        // $adminUser->givePermissionTo($permissions);

        //اول شي بتعرف الادمن بعدا بتضيف الرول الي عرفتا وبعدا بتضيف الصلاحيات الي عطيتا لهذالرول
        //////////////////////////////////////////////////////////////////////////////////////////////

        // $patientUser =  User::factory()->create([
        //     'first_name' => 'patient',
        //     'last_name' => '2',
        //     'email' => 'patient@gmail.com',
        //     'password' => bcrypt('patient123'),
        // ]);

        // $patientUser->assignRole($patientRole);

        // $permissions = $patientRole->permissions()->pluck('name')->toArray();
        // $patientUser->givePermissionTo($permissions);

        ////////////////////////////////////////////////////////////////////////////

        $superAdminUser =  User::factory()->create([
            'first_name' => 'super',
            'last_name' => 'super',
            'email' => 'superAdmin@gmail.com',
            'password' => bcrypt('super1234'),
        ]);

        $superAdminUser->assignRole($superAdminRole);

        $permissions = $superAdminRole->permissions()->pluck('name')->toArray();
        $superAdminUser->givePermissionTo($permissions);
    }
}
