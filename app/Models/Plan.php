<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "plans";
    protected $fillable = ['plan_name', 'price', 'number_of_days'];
    public $timestamps = true;
}
