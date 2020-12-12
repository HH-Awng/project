<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function department(){
    	return $this->belongsTo('App\department', 'dep_id');
    }

    public function section(){
    	return $this->belongsTo('App\Section');
    }

    public function subject(){
    	return $this->belongsTo('App\Subject');
    }

    public function attdances(){
    	return $this->hasMany('App\Attdance');
    }


}
