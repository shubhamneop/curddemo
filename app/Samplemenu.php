<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samplemenu extends Model
{
    protected $table = 'samplemenus';

    protected $fillable = ['name','url','target','parent_id','order'];

    public function parent()
    {
        return $this->belongsTo('App\Samplemenu','parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Samplemenu','parent_id');
    }
}
