<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;


class Student extends Model
{
   public function Students()
   {
   	return $this->hasMany('App\Student');
   }
}
