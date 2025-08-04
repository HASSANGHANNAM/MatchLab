<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabWorkingHour extends Model
{
    use HasFactory;
        protected $fillable = [
        'lab_id',
        'day_of_week',
        'start_time',
        'end_time',
        'patients_per_hour'
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
