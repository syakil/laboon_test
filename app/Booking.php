<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'no_tlpn',
        'alamat',
        'kapal_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kapal(){
        return $this->hasMany(Kapal::class);
    }
}
