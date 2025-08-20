<?php

namespace App\Services;

use App\Models\Evaluation;
use App\Models\FavoriteLab;
use App\Models\Lab;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class ReportServices
{
    public function labReport(): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $labRegistrationDate = DB::table('labs')
                ->where('id', $labId)
                ->value('created_at');
            $registrationDate = Carbon::parse($labRegistrationDate);
            $currentDate = Carbon::now();
            $monthsSinceRegistration = $registrationDate->diffInMonths($currentDate) + 1;
            $monthlyReports = [];
            for ($i = 0; $i < $monthsSinceRegistration; $i++) {
                $startOfMonth = $registrationDate->copy()->addMonths($i)->startOfMonth();
                $endOfMonth = $registrationDate->copy()->addMonths($i)->endOfMonth();
                $report = DB::table('appointments')
                    ->join('labs', 'appointments.lab_id', '=', 'labs.id')
                    ->where('appointments.lab_id', $labId)
                    ->whereBetween('appointments.date_time', [$startOfMonth, $endOfMonth])
                    ->where('appointments.status', '!=', 'cancelled')
                    ->select(
                        DB::raw('COUNT(appointments.id) as total_appointments'),
                        DB::raw('COALESCE(SUM(appointments.total_Price), 0) as total_revenue'),
                        DB::raw('SUM(CASE WHEN appointments.type = "IN_HOME" THEN 1 ELSE 0 END) as in_home_appointments'),
                        DB::raw('SUM(CASE WHEN appointments.type = "IN_LAB" THEN 1 ELSE 0 END) as in_lab_appointments')
                    )
                    ->groupBy('labs.id')
                    ->first();
                if (!$report) {
                    $report = (object) [
                        'total_appointments' => 0,
                        'total_revenue' => 0,
                        'in_home_appointments' => 0,
                        'in_lab_appointments' => 0
                    ];
                }

                $monthlyReports[] = [
                    'month' => $startOfMonth->format('Y-m'),
                    'total_appointments' => $report->total_appointments,
                    'total_revenue' => (float) $report->total_revenue,
                    'appointment_types' => [
                        'in_home' => $report->in_home_appointments,
                        'in_lab' => $report->in_lab_appointments
                    ]
                ];
            }
            $totalAppointments = array_sum(array_column($monthlyReports, 'total_appointments'));
            $totalRevenue = array_sum(array_column($monthlyReports, 'total_revenue'));
            $totalInHome = array_sum(array_map(function ($report) {
                return $report['appointment_types']['in_home'];
            }, $monthlyReports));
            $totalInLab = array_sum(array_map(function ($report) {
                return $report['appointment_types']['in_lab'];
            }, $monthlyReports));
            $totalPaid = DB::table('lab_have__plans')
                ->join('plans', 'lab_have__plans.plan_id', '=', 'plans.id')
                ->where('lab_have__plans.lab_id', $labId)
                ->sum('plans.price');
            $data = [
                'registration_date' => $registrationDate->format('Y-m-d'),
                'total_months' => $monthsSinceRegistration,
                'monthly_reports' => $monthlyReports,
                'totals' => [
                    'total_appointments' => $totalAppointments,
                    'total_revenue' => $totalRevenue,
                    'appointment_types' => [
                        'in_home' => $totalInHome,
                        'in_lab' => $totalInLab
                    ],
                    'total_paid' => $totalPaid,
                    'difference_between_payment_revenue' => $totalRevenue - $totalPaid
                ]
            ];
            return ['message' => 'succsesfully!', 'data' => $data];
        } else {
            $message = 'Unauthorized access!';
        }
        return ['message' => $message, 'data' => null];
    }
}
