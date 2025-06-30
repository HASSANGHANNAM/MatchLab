<?php

namespace App\Services;

use App\Models\Lab;
use App\Models\LabAnalysis;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class AnalysesServices
{
    public function AnalysesSearchLabOwner($request): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $query = LabAnalysis::whereHas('labs', function ($query) use ($labId) {
                $query->where('labs.id', $labId);
            })
                ->select('lab_analyses.id', 'lab_analyses_name', 'discipline', 'global_price', 'preconditions');
            if (isset($request['lab_analyses_name'])) {
                $query->where('lab_analyses_name', 'like', '%' . $request['lab_analyses_name'] . '%');
            }
            if (isset($request['discipline'])) {
                $query->where('discipline', 'like', '%' . $request['discipline'] . '%');
            }
            if (isset($request['sample_id'])) {
                $sampleId = $request['sample_id'];
                $query->whereHas('samples', function ($query) use ($sampleId) {
                    $query->where('sample_id', $sampleId);
                });
            }
            $data['analyses'] = $query->get();
            if ($data['analyses']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no analyses found!';
            }
        } else {
            $message = 'Unauthorized access!';
        }
        return ['message' => $message, 'user' => $data];
    }

    public function AnalysesLabOwnerById($id): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $analysis = LabAnalysis::where('id', $id)
                ->whereHas('labs', function ($query) use ($labId) {
                    $query->where('labs.id', $labId);
                })
                ->with([
                    'samples' => function ($query) {
                        $query->select('samples.id', 'samples.sample_name');
                    },
                    'range' => function ($query) {
                        $query->select([
                            'id',
                            'lab_analys_id',
                            'newborns_min',
                            'newborns_max',
                            'children_min',
                            'children_max',
                            'adults_min',
                            'adults_max',
                            'women_min',
                            'women_max',
                            'men_min',
                            'men_max',
                            'unit'
                        ]);
                    }
                ])
                ->select('lab_analyses.id', 'lab_analyses_name', 'discipline', 'global_price', 'preconditions')
                ->first();
            if ($analysis != null) {
                $analysis->samples->each->setHidden(['pivot']);
                $data['analyses'] = $analysis;
                $message = 'successfully!';
            } else {
                $data = null;
                $message = 'analys not found in your lab!';
            }
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function AnalysesSearchSuperAdmin($request): array
    {
        if (Auth::user()->hasRole('SuperAdmin')) {
            $query = LabAnalysis::query()
                ->select('lab_analyses.id', 'lab_analyses_name', 'discipline', 'global_price', 'preconditions');
            if (isset($request['lab_analyses_name'])) {
                $query->where('lab_analyses_name', 'like', '%' . $request['lab_analyses_name'] . '%');
            }
            if (isset($request['discipline'])) {
                $query->where('discipline', 'like', '%' . $request['discipline'] . '%');
            }
            if (isset($request['sample_id'])) {
                $sampleId = $request['sample_id'];
                $query->whereHas('samples', function ($query) use ($sampleId) {
                    $query->where('sample_id', $sampleId);
                });
            }
            $data['analyses'] = $query->get();
            if ($data['analyses']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no analyses found!';
            }
        } else {
            $message = 'Unauthorized access!';
            $data = null;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function AnalysesSuperAdminById($id): array
    {
        if (Auth::user()->hasRole('SuperAdmin')) {
            $analysis = LabAnalysis::where('id', $id)
                ->with([
                    'samples' => function ($query) {
                        $query->select('samples.id', 'samples.sample_name');
                    },
                    'range' => function ($query) {
                        $query->select([
                            'id',
                            'lab_analys_id',
                            'newborns_min',
                            'newborns_max',
                            'children_min',
                            'children_max',
                            'adults_min',
                            'adults_max',
                            'women_min',
                            'women_max',
                            'men_min',
                            'men_max',
                            'unit'
                        ]);
                    }
                ])
                ->select('lab_analyses.id', 'lab_analyses_name', 'discipline', 'global_price', 'preconditions')
                ->first();
            if ($analysis != null) {
                $analysis->samples->each->setHidden(['pivot']);
                $data['analyses'] = $analysis;
                $message = 'successfully!';
            } else {
                $data = null;
                $message = 'analys not found in your lab!';
            }
        } else {
            $message = 'Unauthorized access!';
            $data = null;
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
}
