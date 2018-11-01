<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The types that this item has.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    /**
     * The tags that belong to the item.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

     /**
     * The contents that belong to the item.
     */
    public function contents()
    {
        return $this->belongsToMany('App\Content');
    }

}
