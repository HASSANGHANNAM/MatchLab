<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_analys_have_sample extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "lab_analys_have_samples";
    protected $fillable = ['sample_id', 'lab_analys_id'];
    public $timestamps = true;
    // public function appointment()
    // {
    //     return $this->belongsTo(Appointment::class);
    // }
}
