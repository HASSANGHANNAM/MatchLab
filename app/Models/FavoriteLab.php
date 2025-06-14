<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteLab extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "favorite_labs";
    protected $fillable = ['patient_id', 'lab_id'];
    public $timestamps = true;
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
