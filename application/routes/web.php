<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {




    $items = App\Item::whereHas('types', function ($q) {
        $q->where('data', 'page');
    })->get();
    
   
    foreach($items as $item) {

        echo $item->title.'<br>';
        
        
        foreach($item->types as $type) {
            echo $type->data;
        } 

        //echo $item->types->data.'<br>';
        echo '<hr>';

    }



    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
