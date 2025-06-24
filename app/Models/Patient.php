<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "patients";
    protected $fillable = [
        'user_id',
        'phone',
        'gender',
        'dob',
        'Health_Problems',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
