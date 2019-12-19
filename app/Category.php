<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    
     public function product(){

     	return $this->belongsTOMany(Product::class,'product__categories');
     }
}
