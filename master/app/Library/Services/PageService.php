<?php
namespace App\Library\Services;
  
use App\Library\Interfaces\Item\ItemInterface;

class PageService implements ItemInterface
{
    

  private $test;
  
  public function __construct($test='bbb') {
    $this->test = $test;
  }
  
  public function doSomethingUseful()
    {
      return $this->test;
    }
}
