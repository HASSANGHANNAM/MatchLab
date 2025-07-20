<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Lab;
use App\Models\lab_have_analyses;
use App\Models\LabAnalysis;
use App\Models\Location;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ownerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $titles = [
            "Special Offers on Lab Tests",
            "Home Testing at Competitive Prices",
            "30% Discount on Comprehensive Health Packages",
            "New: Vitamin D Tests with 40% Off",
            "Early Diabetes Detection Campaign",
            "Pre-Marriage Screening Packages",
            "Special Women's Health Checkups",
            "Free Protein Powder with Sports Tests",
            "Rapid COVID-19 Tests with Instant Results",
            "Advanced Genetic Testing Now Available",
            "Allergy Testing Special - Limited Time Offer",
            "Senior Citizen Discounts on Health Screenings"
        ];
        $owners = [
            [
                'first_name' => "Basel",
                'last_name' => "Alrefaai",
                'email' => "BaselAlrefaai@gmail.com",
                'password' => Hash::make("12345678"),
                'address' => "Altal",
                'city_id' => 2,
                'lab_name' => "BaselAlrefaai",
                'contact_info' => "0965654544",
                'image_path' => "/lab_images/BaselAlrefaai.jpg",
                'price_of_global_unit' => 1,
                'subscriptions_status' => false,
                'home_service' => false,
            ],
            [
                'first_name' => "Gaith",
                'last_name' => "Abo Rashed",
                'email' => "GaithAboRashed@gmail.com",
                'password' => Hash::make("12345678"),
                'address' => "Alhamra street",
                'city_id' => 1,
                'lab_name' => "GaithAboRashed",
                'contact_info' => "0934543566",
                'image_path' => "/lab_images/GaithAboRashed.jpg",
                'price_of_global_unit' => 1,
                'subscriptions_status' => false,
                'home_service' => false,
            ]
        ];
        foreach ($owners as $ow) {
            $user = User::query()->create([
                'first_name' => $ow['first_name'],
                'last_name' => $ow['last_name'],
                'email' => $ow['email'],
                'password' => $ow['password']
            ]);
            $ownerRole = Role::query()->where('name', 'LabOwner')->first();
            $user->assignRole($ownerRole);
            $permissions = $ownerRole->permissions()->pluck('name')->toArray();
            $user->givePermissionTo($permissions);
            $location = Location::query()->create([
                'address' => $ow['address'],
                'city_id' => $ow['city_id']
            ]);
            $lab = Lab::query()->create([
                'lab_name' => $ow['lab_name'],
                'contact_info' => $ow['contact_info'],
                'location_id' => $location['id'],
                'image_path' => $ow['image_path'],
                'price_of_global_unit' =>  $ow['price_of_global_unit'],
                'subscriptions_status' =>  $ow['subscriptions_status'],
                'home_service' =>  $ow['home_service'],
            ]);
            $user->LabOwner()->create([
                'user_id' => $user['id'],
                'lab_id' => $lab['id'],
            ]);
            // event(new Registered($user));


            $start = Carbon::today()->subDays(rand(0, 60));
            $duration = [7, 30, 365][rand(0, 2)];
            $end = $start->copy()->addDays($duration);
            $status = false;
            if (!$end->lt(now())) {
                $status = true;
            }
            DB::table('labs')->where(
                [
                    ['id', '=',  $lab['id']]
                ]
            )->update(
                [
                    'subscriptions_status' => $status,
                    'expiry_time' => $end
                ]
            );






            $adCount = rand(1, 5);
            for ($i = 0; $i < $adCount; $i++) {
                $title = $titles[array_rand($titles)];
                $description = $this->generateDescription($faker);

                Advertisement::create([
                    'lab_id' => $lab['id'],
                    'title' => $title,
                    'descriptions' => $description,
                ]);
            }


            $analyses = LabAnalysis::all();

            $analysisCount = rand(50, min(100, $analyses->count()));

            $randomAnalyses = $analyses->random($analysisCount);

            foreach ($randomAnalyses as $analysis) {
                lab_have_analyses::create([
                    'lab_id' => $lab['id'],
                    'lab_analys_id' => $analysis->id
                ]);
            }
        }
    }

    protected function generateDescription($faker)
    {
        $paragraphs = [];

        $intros = [
            "We're excited to offer exclusive promotions to our valued customers.",
            "Celebrating the opening of our new branch with special discounts.",
            "Committed to your health, we're introducing affordable testing options.",
            "As part of our continuous service improvement initiative,",
            "Taking care of your health has never been more accessible."
        ];

        $contents = [
            "Enjoy discounts up to 50% on a wide range of advanced laboratory tests with results delivered within 24-48 hours.",
            "Book our home collection service and receive accurate results through our secure online portal.",
            "These limited-time offers are valid until the end of the month - don't miss this opportunity!",
            "Our comprehensive testing packages use cutting-edge technology supervised by certified medical professionals.",
            "All tests are performed in our accredited facilities following international quality standards.",
            "Get reliable, ministry-approved results with our express same-day testing service."
        ];

        $closings = [
            "For inquiries and appointments: Call 065432100 or visit our website.",
            "Book your appointment now through our mobile app or online portal.",
            "Offer valid while supplies last. Terms and conditions apply.",
            "Limited slots available. Reserve your testing package today!"
        ];

        $paragraphs[] = $intros[array_rand($intros)];
        $paragraphs[] = $contents[array_rand($contents)];
        $paragraphs[] = $closings[array_rand($closings)];

        return implode("\n\n", $paragraphs);
    }
}
