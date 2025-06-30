<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "samples";
    protected $fillable = ['sample_name'];
    public $timestamps = true;
    // public function appointment()
    // {
    //     return $this->belongsTo(Appointment::class);
    // }

    public function analyses()
    {
        return $this->belongsToMany(LabAnalysis::class, 'lab_analys_have_samples', 'sample_id', 'lab_analys_id');
    }
}
