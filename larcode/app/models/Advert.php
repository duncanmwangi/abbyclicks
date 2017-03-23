<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    public function campaign(){
        return $this->belongsTo('App\models\Campaign');
    }
}
