<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "payments";
    protected $fillable = ['payment_status', 'total_Price', 'appointment_id'];
    public $timestamps = true;
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
