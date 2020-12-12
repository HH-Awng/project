<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
   
   public function students(){
   		return $this->hasMany("App\Student", 'dep_id');
   }
}
