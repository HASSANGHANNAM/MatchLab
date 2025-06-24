<?php

namespace Database\Seeders;

use App\Models\Sample;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class samplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $samples = [
            ['sample_name' => "Amniotic Fluid"],
            ['sample_name' => "Articular Fluid  "],
            ['sample_name' => "Blood"],
            ['sample_name' => "Body Fluid"],
            ['sample_name' => "Bone Marrow"],
            ['sample_name' => "Faeces"],
            ['sample_name' => "Microbiological Sample"],
            ['sample_name' => "Cerebrospinal Fluid"],
            ['sample_name' => "Plasma"],
            ['sample_name' => "Serum"],
            ['sample_name' => "Seminal Fluid"],
            ['sample_name' => "Urine"]
        ];
        foreach ($samples as $sample) {
            Sample::create($sample);
        }
    }
}
