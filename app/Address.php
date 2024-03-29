<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address1', 'address2', 'zipcode', 'country', 'state', 'fullname', 'phoneno', 'mobileno'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
