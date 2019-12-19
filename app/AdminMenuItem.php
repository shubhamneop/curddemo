<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMenuItem extends Model
{
        protected $fillable = ['menu_id','title','url','parent_id','order'];
         public function menu(){
             return $this->belongsTo('App\Adminmenu');
         }
         public function children()
         {

        return $this->hasMany('App\AdminMenuItem','id','parent_id')
            ->with('children')
            ->orderBy('order');
        }

}
