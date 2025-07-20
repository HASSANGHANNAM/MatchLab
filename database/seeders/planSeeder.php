<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $plans = [
            ['plan_name' => "Trial", 'price' => 0, 'number_of_days' => 7],
            ['plan_name' => "Month", 'price' => 50, 'number_of_days' => 30],
            ['plan_name' => "Year", 'price' => 500, 'number_of_days' => 365]
        ];
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
