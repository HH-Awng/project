<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function subjects(){
    	return $this->hasMany('App\Subject');
	}

	public function students(){
		return $this->hasMany('App\Student');
	}


	public function teacher(){
		return $this->belongsTo('App\Teacher');
	}

}
