<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Evaluation;
use App\Models\FavoriteLab;
use App\Models\Lab;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $labs = Lab::all();

        $ratings = [
            'Great service! The results were delivered faster than expected.',
            'Professional staff and accurate results. Highly recommended.',
            'The waiting time was longer than I expected, but the service was good.',
            'Excellent experience. Will definitely use their services again.',
            'The technician was very skilled and made the blood draw painless.',
            'Results were clear and easy to understand. Good explanation from the doctor.',
            'Had some issues with appointment scheduling, but the test itself was fine.',
            'Prices are reasonable compared to other labs in the area.',
            'The facility was clean and modern. Staff was friendly and helpful.',
            'Disappointed with the turnaround time. Took 3 days longer than promised.',
            'Accurate results and professional consultation. Worth the price.',
            'The home collection service was punctual and efficient.',
            'Had to wait 45 minutes past my appointment time. Unacceptable.',
            'Best lab in town! Their comprehensive packages are great value.',
            'Confusing report format. Had to call multiple times for clarification.',
            'Impressed with their COVID testing service. Results in 12 hours!',
            'Technical issues with their online portal. Couldnot access my reports.',
            'The staff needs more training in customer service skills.',
            'Reliable results. I have been using this lab for years.',
            'Overpriced for the quality of service received.'
        ];

        $patients = [
            [
                'first_name' => "Hassan",
                'last_name' => "Ghanam",
                'email' => "hasgha12345@gmail.com",
                'password' => Hash::make("hassan123"),
                'phone' => "0934519102",
                'gender' => "male",
                'dob' => "2003-06-01",
                'Health_Problems' => "no thing",
            ],
            [
                'first_name' => "hoda",
                'last_name' => "samed",
                'email' => "hodasamid@gmail.com",
                'password' => Hash::make("12345678"),
                'phone' => "0956467677",
                'gender' => "female",
                'dob' => "2015-01-06",
                'Health_Problems' => "no thing",
            ]
        ];
        foreach ($patients as $patient) {
            $user = User::query()->create([
                'first_name' => $patient['first_name'],
                'last_name' => $patient['last_name'],
                'email' => $patient['email'],
                'password' => $patient['password']
            ]);
            $patientRole = Role::query()->where('name', 'patient')->first();
            $user->assignRole($patientRole);
            $permissions = $patientRole->permissions()->pluck('name')->toArray();
            $user->givePermissionTo($permissions);
            $user->patient()->create([
                'phone' => $patient['phone'],
                'gender' => $patient['gender'],
                'dob' => $patient['dob'],
                'Health_Problems' => $patient['Health_Problems']
            ]);
            // event(new Registered($user));

            $patientId = Patient::query()->where('user_id', $user['id'])->value('id');
            foreach ($labs as $lab) {
                Evaluation::create([
                    'patient_id' => $patientId,
                    'lab_id' => $lab['id'],
                    'rate' =>  mt_rand(0, 10) * 0.5,
                    'review' => $ratings[array_rand($ratings)],
                ]);
            }



            $favoriteCount = rand(0, 5);
            $randomLabs = Arr::random(Lab::pluck('id')->toArray(), min($favoriteCount, count($labs)));
            foreach ($randomLabs as $lab) {
                FavoriteLab::create([
                    'patient_id' => $patientId,
                    'lab_id' => $lab
                ]);
            }
        }
    }
}
