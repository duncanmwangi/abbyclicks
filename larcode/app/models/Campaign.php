<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    public function advertiser(){
        return $this->belongsTo('App\models\Advertiser');
    }
}
