<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
        /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'modified_at',
    ];
}
