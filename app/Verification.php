<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        'dateOfVerification', 'status', 'testReport'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function measuring_device(){
        return $this->belongsTo(MeasuringDevice::class);
    }

    public function verified_device(){
        return $this->belongsTo(VerifiedDevice::class);
    }
}
