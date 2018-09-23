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

/*
Route::get('/', function () {

    $items = \App\Item::all();


    foreach($items as $item) {

        echo $item->title;
        echo '<br>';
        foreach($item->types as $type) {
            echo 'type=>' . $type->data . '<br>';
        }
        foreach($item->tags as $tag) {
            echo 'tag=>' . $tag->data . '<br>';
        }
        foreach($item->contents as $content) {
            echo 'content=>' . $content->data . '<br>';
            echo 'content_type=>'.$content->type->data.'<br>';
        }

    }


    return view('welcome', ['items' => $items]);
});
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/books/', 'BookController@index')->name('books');
Route::get('/book/{slug}', 'BookController@single')->name('books');
