<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mlslisting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mlslistings';

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
    protected $fillable = ['name', 'location', 'description', 'image', 'link'];

    
}
