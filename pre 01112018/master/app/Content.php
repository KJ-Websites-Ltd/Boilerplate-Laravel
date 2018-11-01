<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    

    public function items() {
        return $this->belongsToMany(\App\Item::class);
    }

    public function types() {
        return $this->belongsToMany(\App\Type::class);
    }

}
