<?php

namespace App;
use App\Fees;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
     public function Fees()
   {
   	return $this->belongsTo('App\Student');
   }
}
