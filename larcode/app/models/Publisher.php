<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }
}
