<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{


     /**
     * The items that this content belongs to.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }

    /**
     * Get the type record associated with the item.
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
