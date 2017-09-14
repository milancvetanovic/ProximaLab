<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifiedDevice extends Model
{
    protected $fillable = [
        'generic_name', 'manufacturer', 'model', 'serial'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verifications(){
        return $this->hasMany(Verification::class);
    }
}
