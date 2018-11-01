<?php

namespace App\Services;

use App\Item;
use Illuminate\Support\Facades\Cache;

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

        //check if the results from this query are in the cache, if not generate them
        $cacheKey          = 'get_all_by_type_' . $this->getType();
        $items             = Cache::get($cacheKey);
        $bookViewedSession = session('book.viewed');

        if (empty($items)) {

            $items = Item::whereHas('types', function ($q) {
                $q->where('data', $this->getType());
            })->get();

            //store the items in the cache for one minute - whilst in dev
            Cache::put($cacheKey, $items, 1);

        }


        //check if a book has been viewed based on session set
        foreach ($items as $id => $book) {
            $items[$id]['viewed'] = 'false';
            if (!empty($bookViewedSession) && in_array($book->slug, $bookViewedSession)) {
                $items[$id]['viewed'] = 'true';
            };
        }

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

        $cacheKey = 'get_one_' . $this->getType();
        $item     = Cache::get($cacheKey);

        if (empty($items)) {

            $item = Item::where('slug', $slug)->whereHas('types', function ($q) {
                $q->where('data', $this->getType());
            })->get()->first();

            //get the contents linked items into more obvious named attributes
            foreach ($item->contents as $content) {
                $item[$content->type->data] = $content->data;
            }

            //store the items in the cache for one minute - whilst in dev
            Cache::put($cacheKey, $item, 1);

        }

        return $item;

    }


    /**
     * return multiple items based on an array of slugs
     *
     * @param [type] $array
     * @return void
     */
    public function get_multiple_by_slug($array) {

        $res = [];
        if (!empty($array)) {
            foreach($array as $slug) {
                $res[$slug] = $this->getOne($slug);
            }
        }
        
        return $res;

        
    }

    /**
     * Get the item type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * set the item type
     *
     * @param [type] $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}
