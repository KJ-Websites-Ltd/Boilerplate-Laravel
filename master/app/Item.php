<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The roles that belong to the user.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

     /**
     * The roles that belong to the user.
     */
    public function contents()
    {
        return $this->belongsToMany('App\Content');
    }

}
