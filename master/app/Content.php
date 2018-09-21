<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{


     /**
     * The roles that belong to the user.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
    
    /**
     * Get the phone record associated with the user.
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
