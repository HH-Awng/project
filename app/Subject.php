<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function teacher(){

    	return $this->belongsTo('App\Teacher')->withDefault();
    }

     public function section(){
    	return $this->belongsTo('App\Section')->withDefault();
    }
}
