<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Item;

class ItemService
{

    protected $type;

    /**
     * Return all items filtered by type data
     *
     * @return void
     */
    public function getAllByType()
    {

        $items = Item::whereHas('types', function ($q) {
            $q->where('data', $this->getType());
        })->get();


        return $items;

    }

    /**
     * return one item by slug and type
     *
     * @param [string] $slug
     * @return void
     */
    public function getOne($slug)
    {

        $item = Item::where('slug', $slug)->whereHas('types', function ($q) {
            $q->where('data', $this->getType());
        })->get()->first();


        //get the contents items into obvious attributes
        foreach($item->contents as $content) {
            $item[$content->type->data] = $content->data;
        }


        return $item;

    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}
