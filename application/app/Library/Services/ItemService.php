<?php
namespace App\Library\Services;
  
use App\Library\Interfaces\Item\ItemInterface;

class ItemService implements ItemInterface
{
    

  private $test;
  
  public function __construct($test='item') {
    $this->test = $test;
  }
  
  public function doSomethingUseful()
    {
      return $this->test;
    }
}
