<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "cities";
    protected $fillable = ['city_name'];
    public $timestamps = true;
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
