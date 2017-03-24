<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];
    
    public function adverts(){
        return $this->hasMany('App\models\Advert');
    }
}
