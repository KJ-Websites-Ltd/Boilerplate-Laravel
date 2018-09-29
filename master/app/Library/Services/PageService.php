<?php
namespace App\Library\Services;
  
use App\Library\Interfaces\Item\ItemInterface;

class PageService implements ItemInterface
{
    public function doSomethingUseful()
    {
      return 'Output from PageService';
    }
}
