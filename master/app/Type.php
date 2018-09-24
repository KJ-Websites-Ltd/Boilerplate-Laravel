<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     /**
     * The items that belong to the type.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
