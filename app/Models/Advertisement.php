<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    //  use HasFactory, HasApiTokens;
    protected $table = "advertisements";
    protected $fillable = ['lab_id', 'title', 'descriptions'];
    public $timestamps = true;
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
