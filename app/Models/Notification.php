<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "notifications";
    protected $fillable = ['patient_id', 'lab_owner_id', 'message', 'type', 'send_at'];
    public $timestamps = true;
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function labOwner()
    {
        return $this->belongsTo(LabOwner::class);
    }
   
}
