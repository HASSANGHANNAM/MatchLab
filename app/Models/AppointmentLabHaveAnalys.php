<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentLabHaveAnalys extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "appointment_lab_have_analys";
    protected $fillable = ['result', 'lab_have_analys_id', 'appointment_id'];
    public $timestamps = true;
    public function lab_have_analyses()
    {
        return $this->belongsTo(lab_have_analyses::class,'lab_have_analys_id','id');
    }
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
