<?php

namespace App\models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    

    public function user(){
        return $this->hasOne('App\User');
    }

    public function campaigns(){
        return $this->hasMany('App\models\Campaign');
    }
    public static function currentAdvertiser(){
    	
        return User::find(auth()->id())->advertiser;
    }
}
