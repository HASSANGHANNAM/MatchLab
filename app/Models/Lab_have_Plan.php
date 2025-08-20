<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab_have_Plan extends Model
{
    use HasFactory;
    protected $table = "lab_have__plans";
    protected $fillable = ['plan_id', 'lab_id'];
    public $timestamps = true;
}
