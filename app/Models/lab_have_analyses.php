<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_have_analyses extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "lab_have_analyses";
    protected $fillable = ['lab_id', 'lab_analys_id'];
    public $timestamps = true;
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    public function labAnalysis()
    {
        return $this->belongsTo(LabAnalysis::class);
    }
}
