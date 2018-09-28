<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    public function items() {
        return $this->belongsToMany(\App\Item::class);
    }

    public function tags() {
        return $this->belongsToMany(\App\Tags::class);
    }

    public function contents() {
        return $this->belongsToMany(\App\Content::class);
    }

}
