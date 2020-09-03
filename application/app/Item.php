<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{



    public function types() {
        return $this->belongsToMany( Type::class );
    }

    public function tags() {
        return $this->hasMany( Tags::class );
    }

    public function contents() {
        return $this->hasMany( Contents::class );
    }




}
