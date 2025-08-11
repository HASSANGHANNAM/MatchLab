<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LabWorkingHour;
use Illuminate\Support\Facades\DB;

class LabWorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                'day_of_week' => 'Saturday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Sunday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Monday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Tuesday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Wednesday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Thursday',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'patients_per_hour' => 5,
            ],
            [
                'day_of_week' => 'Friday',
                'start_time' => '08:00:00',
                'end_time' => '14:00:00',
                'patients_per_hour' => 3,
            ],
        ];

        foreach ([1, 2] as $labId) {
            DB::transaction(function () use ($schedules, $labId) {
                LabWorkingHour::where('lab_id', $labId)->delete();
                foreach ($schedules as $schedule) {
                    LabWorkingHour::create([
                        'lab_id' => $labId,
                        'day_of_week' => ucfirst(strtolower($schedule['day_of_week'])),
                        'start_time' => $schedule['start_time'],
                        'end_time' => $schedule['end_time'],
                        'patients_per_hour' => $schedule['patients_per_hour'],
                    ]);
                }
            });
        }
    }

}
