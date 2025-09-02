<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAnalysis extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "lab_analyses";
    protected $fillable = ['lab_analyses_name', 'global_price', 'discipline', 'preconditions'];
    public $timestamps = true;
    public function lab_have_analyses()
    {
        return $this->hasMany(lab_have_analyses::class, 'lab_analys_id');
    }
    public function labs()
    {
        return $this->belongsToMany(Lab::class, 'lab_have_analyses', 'lab_analys_id', 'lab_id');
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    // public function samples()
    // {
    //     return $this->hasMany(Sample::class);
    // }
    public function samples()
    {
        return $this->belongsToMany(Sample::class, 'lab_analys_have_samples', 'lab_analys_id', 'sample_id');
    }
    public function range()
    {
        return $this->hasOne(Range::class, 'lab_analys_id')->withDefault([
            'newborns_min' => null,
            'newborns_max' => null,
            'children_min' => null,
            'children_max' => null,
            'adults_min' => null,
            'adults_max' => null,
            'women_min' => null,
            'women_max' => null,
            'men_min' => null,
            'men_max' => null,
            'unit' => null
        ]);
    }
}
