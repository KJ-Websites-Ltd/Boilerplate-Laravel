<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      /**
     * The roles that belong to the user.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
