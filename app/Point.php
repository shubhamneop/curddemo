<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    
  protected $table = 'points';

  protected $fillable = ['user_id','points'];

 }
