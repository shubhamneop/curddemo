<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminmenu extends Model
{
    

    protected $fillable = ['name'];
    
    public function submenu(){
    	return $this->hasMany('App\AdminMenuItem','menu_id');
    }
    public function parent_items()
    {
        return $this->hasMany('App\AdminMenuItem')
            ->whereNull('parent_id');
    }
}
