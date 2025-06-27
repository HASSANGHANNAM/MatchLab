<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAnalysis extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "lab_analyses";
    protected $fillable = ['lab_analyses_name', 'global_price', 'discipline', 'preconditions'];
    public $timestamps = true;
    public function lab_have_analyses()
    {
        return $this->hasMany(lab_have_analyses::class);
    }
}
