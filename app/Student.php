<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function department(){
    	return $this->belongsTo('App\department', 'Dep_id')->withDefault();
    }

    public function section(){
    	return $this->belongsTo('App\Section')->withDefault();
    }
}
