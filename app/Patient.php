<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
