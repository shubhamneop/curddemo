<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
     protected $table = 'orderdetails';
   public function user(){

   	return $this->belongsToMany('App\User','user_orders');
   }

 }
