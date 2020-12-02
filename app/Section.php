<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function subjects(){
    	return $this->hasMany('App\Subject')->withDefault();
	}

	public function students(){
		return $this->hasManh('App\Student')->withDefault();
	}

}
