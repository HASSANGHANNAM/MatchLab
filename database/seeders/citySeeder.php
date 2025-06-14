<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['city_name' => "Damascus"],
            ['city_name' => "RefDamascus"],
            ['city_name' => "Quneitra"],
            ['city_name' => "Daraa"],
            ['city_name' => "Al-Suwayda"],
            ['city_name' => "Homs"],
            ['city_name' => "Tartus"],
            ['city_name' => "Latakia"],
            ['city_name' => "Hama"],
            ['city_name' => "Idlib"],
            ['city_name' => "Aleppo"],
            ['city_name' => "Raqqa"],
            ['city_name' => "Deir ez-Zor"],
            ['city_name' => "Al-Hasakah"]
        ];
        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
