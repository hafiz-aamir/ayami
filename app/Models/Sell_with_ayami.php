<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell_with_ayami extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sell_with_ayamis';

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
    protected $fillable = ['receive_a_home', 'property_type1', 'unit', 'property_type2', 'condition_property', 'property_type3'];

    
}
