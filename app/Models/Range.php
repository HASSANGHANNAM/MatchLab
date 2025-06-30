<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "ranges";
    protected $fillable = ['lab_analys_id', 'newborns_min', 'newborns_max', 'children_min', 'children_max', 'adults_min', 'adults_max', 'women_min', 'women_max', 'men_min', 'men_max', 'unit'];
    public $timestamps = true;
    public function range()
    {
        return $this->hasOne(Range::class, 'lab_analys_id');
    }
}
