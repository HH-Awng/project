<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{

    public function subjects(){
    	return $this->hasMany('App\Subject');
	}



	 public function sections(){
    	return $this->hasMany('App\Section');
	}

	


}
