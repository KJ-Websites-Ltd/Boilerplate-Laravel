<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    public function items() {
        return $this->belongsToMany( Item::class );
    }

    public function tags() {
        return $this->belongsToMany( Tags::class );
    }

    public function contents() {
        return $this->belongsToMany( Content::class );
    }

}
