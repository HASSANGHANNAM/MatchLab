<?php

namespace App\Services;

use App\Models\Evaluation;
use App\Models\FavoriteLab;
use App\Models\Lab;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class LabServices
{
    public function labSearchPatient($request): array
    {
        if (Auth::user()->hasRole('Patient')) {
            $patient = Patient::where('user_id', Auth::id())->first();
            $patientId = $patient['id'];
            $query = Lab::query();
            if (isset($request['lab_name'])) {
                $query->where('lab_name', 'like', '%' . $request['lab_name'] . '%');
            }
            if (isset($request['subscriptions_status'])) {
                $query->where('subscriptions_status',  $request['subscriptions_status']);
            }
            if (isset($request['city_id'])) {
                $query->whereHas('location.city', function ($cityQuery) use ($request) {
                    $cityQuery->where('id',  $request['city_id']);
                });
            }
            if (isset($request['isfavorite']) && $request['isfavorite'] == 1) {
                $data['labs'] = $query
                    ->whereHas('favoritedByPatients', function ($query) use ($patientId) {
                        $query->where('patients.id', $patientId);
                    })
                    ->with([
                        'location' => function ($query) {
                            $query->select('id', 'address', 'city_id');
                        },
                        'location.city' => function ($query) {
                            $query->select('id', 'city_name');
                        }
                    ])
                    ->select('id', 'lab_name', 'image_path', 'subscriptions_status', 'location_id')
                    ->get()
                    ->each(function ($lab) {
                        $lab['isfavorite'] = true;
                        $lab->makeHidden(['location_id']);
                        $lab->location->makeHidden(['city_id']);
                    });
            } else {
                $data['labs'] = $query
                    ->with([
                        'location' => function ($query) {
                            $query->select('id', 'address', 'city_id');
                        },
                        'location.city' => function ($query) {
                            $query->select('id', 'city_name');
                        }
                    ])
                    ->select('id', 'lab_name', 'image_path', 'subscriptions_status', 'location_id')
                    ->get()
                    ->each(function ($lab) {
                        $patient = Patient::where('user_id', Auth::id())->first();
                        $patientId = $patient['id'];
                        $lab['isfavorite'] =  $lab->isFavorite($patientId);
                        $lab->makeHidden(['location_id']);
                        $lab->location->makeHidden(['city_id']);
                    });
            }
            if ($data['labs']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no labs found!';
            }
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function labSearchSuperAdmin($request): array
    {
        if (Auth::user()->hasRole('SuperAdmin')) {
            $query = Lab::query();
            if (isset($request['lab_name'])) {
                $query->where('lab_name', 'like', '%' . $request['lab_name'] . '%');
            }
            if (isset($request['subscriptions_status'])) {
                $query->where('subscriptions_status',  $request['subscriptions_status']);
            }
            if (isset($request['city_id'])) {
                $query->whereHas('location.city', function ($cityQuery) use ($request) {
                    $cityQuery->where('id',  $request['city_id']);
                });
            }
            $data['labs'] = $query
                ->with([
                    'location' => function ($query) {
                        $query->select('id', 'address', 'city_id');
                    },
                    'location.city' => function ($query) {
                        $query->select('id', 'city_name');
                    }
                ])
                ->select('id', 'lab_name', 'image_path', 'subscriptions_status', 'location_id')
                ->get()
                ->each(function ($lab) {
                    $lab->makeHidden(['location_id']);
                    $lab->location->makeHidden(['city_id']);
                });
            if ($data['labs']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no labs found!';
            }
        } else {
            $message = 'Unauthorized access!';
        }
        return ['message' => $message, 'user' => $data];
    }

    public function labById($id): array
    {
        $lab = Lab::find($id);
        if (!is_null($lab)) {
            if (Auth::user()->hasRole('SuperAdmin')) {
                $lab = Lab::query()
                    ->with([
                        'location' => function ($query) {
                            $query->select('id', 'address', 'city_id');
                        },
                        'location.city' => function ($query) {
                            $query->select('id', 'city_name');
                        },
                        'advertisements' => function ($query) {
                            $query->select('id', 'title', 'descriptions', 'lab_id');
                        },
                        'analyses' => fn($q) => $q->select('lab_analyses.id', 'lab_analyses_name', 'global_price', 'preconditions'),
                        'evaluations' => function ($query) {
                            $query->select('lab_id', DB::raw('AVG(rate) as average_rating'))
                                ->groupBy('lab_id');
                        },
                        'evaluations' => function ($query) {
                            $query->select('lab_id', DB::raw('AVG(rate) as rate'))
                                ->groupBy('lab_id');
                        }
                    ])
                    ->select('id', 'lab_name', 'image_path', 'subscriptions_status', 'location_id')
                    ->where('id', $id)
                    ->first();
                if ($lab) {

                    $rate = $lab->evaluations->isNotEmpty()
                        ? round($lab->evaluations->first()->rate, 2)
                        : 0;
                    $lab->rate = $rate;
                    unset($lab->evaluations);

                    $lab->makeHidden(['location_id']);
                    if ($lab->location) {
                        $lab->location->makeHidden(['city_id']);
                    }
                    $lab->advertisements->each->makeHidden('lab_id');
                    $lab->analyses->each->makeHidden('pivot');
                }
                $message = 'successfully!';
                $code = 200;
            } elseif (Auth::user()->hasRole('Patient')) {
                $lab = Lab::query()
                    ->with([
                        'location' => function ($query) {
                            $query->select('id', 'address', 'city_id');
                        },
                        'location.city' => function ($query) {
                            $query->select('id', 'city_name');
                        },
                        'advertisements' => function ($query) {
                            $query->select('id', 'title', 'descriptions', 'lab_id');
                        },
                        'analyses' => fn($q) => $q->select('lab_analyses.id', 'lab_analyses_name', 'global_price', 'preconditions'),

                        'evaluations' => function ($query) {
                            $query->select('lab_id', DB::raw('AVG(rate) as rate'))
                                ->groupBy('lab_id');
                        }
                    ])
                    ->select('id', 'lab_name', 'image_path', 'subscriptions_status', 'location_id', 'price_of_global_unit')
                    ->where('id', $id)
                    ->first();
                if ($lab) {
                    $patient = Patient::where('user_id', Auth::id())->first();
                    $patientId = $patient ? $patient->id : null;

                    $lab->isfavorite = $patientId
                        ? $lab->isFavorite($patientId)
                        : false;

                    $rate = $lab->evaluations->isNotEmpty()
                        ? round($lab->evaluations->first()->rate, 2)
                        : 0;
                    $lab->rate = $rate;
                    unset($lab->evaluations);

                    $lab->makeHidden(['location_id', 'price_of_global_unit']);

                    if ($lab->location) {
                        $lab->location->makeHidden(['city_id']);
                    }
                    $lab->advertisements->each->makeHidden('lab_id');

                    $lab->analyses->transform(function ($analysis) use ($lab) {
                        $analysis->price = $analysis->global_price * $lab->price_of_global_unit;
                        unset($analysis->global_price);
                        unset($analysis->pivot);
                        return $analysis;
                    });
                }
                $message = 'successfully!';
                $code = 200;
            } else {
                $message = 'Unauthorized access!';
                $code = 403;
                $lab = null;
            }
        } else {
            $message = 'Lab Not Found!';
            $code = 404;
        }

        return ['message' => $message, 'lab' => $lab, 'code' => $code];
    }

    public function  patientPutDeleteFavoriteLab($id): array
    {
        $lab = Lab::find($id);
        if (!is_null($lab)) {
            if (Auth::user()->hasRole('Patient')) {
                $patient = DB::table('patients')->where('user_id', Auth::id())->first();
                $chekeFavorite = DB::table('favorite_labs')->where(
                    [
                        ['patient_id', '=', $patient->id],
                        ['lab_id', '=', $id]
                    ]
                )->first();
                if ($chekeFavorite == null) {
                    FavoriteLab::create([
                        "patient_id" =>  $patient->id,
                        "lab_id" => $id
                    ]);
                    $message = "Success put lab in favorite";
                    $code = 200;
                } else {
                    DB::table('favorite_labs')->where(
                        [
                            ['patient_id', '=', $patient->id],
                            ['lab_id', '=', $id]
                        ]
                    )->delete();
                    $message = "Success delete lab from favorite";
                    $code = 200;
                }
            } else {
                $message = 'Unauthorized access!';
                $code = 403;
            }
        } else {
            $message = 'Lab Not Found!';
            $code = 404;
        }
        return ['message' => $message, 'data' => null, 'code' => $code];
    }
}
