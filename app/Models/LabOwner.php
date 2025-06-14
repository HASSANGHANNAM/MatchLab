<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabOwner extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "lab_owners";
    protected $fillable = ['user_id', 'lab_id'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
