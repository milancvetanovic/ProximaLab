<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasuringDevice extends Model
{
    protected $fillable = [
        'manufacturer', 'model', 'serialNumber'
    ];

    public function verifications(){
        return $this->hasMany(Verification::class);
    }
}
