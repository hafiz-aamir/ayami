<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sellwithayami extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sellwithayamis';

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
     
    protected $fillable = ['receive_a_home', 'property_type', 'property_address', 'unit', 'how_soon_are_you', 'condition_property', 'name' , 'email' , 'phone'];
    
}
