<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "subscriptions";
    protected $fillable = ['start_subscription', 'end_subscription', 'lab_id', 'subscription_status'];
    public $timestamps = true;
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
