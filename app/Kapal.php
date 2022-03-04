<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}
