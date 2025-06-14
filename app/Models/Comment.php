<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "comments";
    protected $fillable = ['comment', 'patient_id', 'lab_id'];
    public $timestamps = true;
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
