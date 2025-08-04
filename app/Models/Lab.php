<?php

namespace App\Models;

use Doctrine\Inflector\Rules\Substitutions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    //      use HasFactory, HasApiTokens;
    protected $table = "labs";
    protected $fillable = ['lab_name', 'contact_info', 'image_path', 'price_of_global_unit', 'subscriptions_status', 'home_service', 'location_id', 'subscription_id'];
    public $timestamps = true;
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function lab_owner()
    {
        return $this->hasOne(LabOwner::class);
    }
    public function favoritedByPatients()
    {
        return $this->belongsToMany(Patient::class, 'favorite_labs', 'lab_id', 'patient_id');
    }
    public function favorite_labs()
    {
        return $this->hasMany(FavoriteLab::class);
    }
    public function isFavorite($patientId)
    {
        return $this->favorite_labs()
            ->where('patient_id', $patientId)
            ->exists();
    }
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
    public function lab_have_analyses()
    {
        return $this->hasMany(lab_have_analyses::class);
    }
    // public function analyses()
    // {
    //     return $this->belongsToMany(LabAnalysis::class, 'lab_have_analyses', 'lab_id', 'lab_analys_id');
    // }
    public function analyses()
    {
        return $this->belongsToMany(LabAnalysis::class, 'lab_have_analyses', 'lab_id', 'lab_analys_id');
    }
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
        public function workingHours()
    {
        return $this->hasMany(LabWorkingHour::class);
    }

}
