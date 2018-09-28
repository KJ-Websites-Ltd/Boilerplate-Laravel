<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      /**
     * The items that belong to the tag.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
