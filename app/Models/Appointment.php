<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    //  use HasFactory, HasApiTokens;
    protected $table = "appointments";
    protected $fillable = ['type', 'patient_name', 'patient_phone', 'patient_id_number', 'patient_id', 'lab_id', 'location_id', 'status', 'date_time', 'total_Price'];
    public $timestamps = true;
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
