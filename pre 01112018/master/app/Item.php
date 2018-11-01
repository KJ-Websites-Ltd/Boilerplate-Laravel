<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    


    public function types() {
        return $this->belongsToMany(\App\Type::class);
    }

    public function tags() {
        return $this->hasMany(\App\Tags::class);
    }

    public function contents() {
        return $this->hasMany(\App\Contents::class);
    }




}
