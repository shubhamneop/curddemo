<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $table = 'user_orders';

    protected $fillable = ['user_id','order_id']
}
