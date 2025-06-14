<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "locations";
    protected $fillable = ['address', 'city_id'];
    public $timestamps = true;
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function lab()
    {
        return $this->hasOne(Lab::class);
    }
}
