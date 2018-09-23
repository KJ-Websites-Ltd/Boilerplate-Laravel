<?php

namespace App\Services;

use App\Item;


class ItemService  {


    protected $type;


    /**
     * Return all items filtered by type data
     *
     * @return void
     */
    public function getAllByType() {

        return Item::whereHas('types', function ($q) {
            $q->where('data', $this->getType());
        })->get();

    }


    /**
     * return one item by slug and type
     *
     * @param [string] $slug
     * @return void
     */
    public function getOne($slug) {
       
       return Item::where('slug', $slug)->whereHas('types', function($q) {
        $q->where('data', $this->getType());
       })->get();

    }



    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

}
