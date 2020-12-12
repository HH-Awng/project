<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function teacher(){

    	return $this->belongsTo('App\Teacher');
    }

     public function section(){
    	return $this->belongsTo('App\Section');
    }


    public function studnets(){
    	return $this->hasMany('App\Student');
    }
    

    
}
