<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;


class BookController extends Controller
{
    

    private $bookService;
    

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
        $this->middleware('auth');
    }

    public function index(BookService $bookService) {

        $allBooks = $this->bookService->getAllByType();
        print_r($allBooks);

        //return view with books
        return null;

    }


    public function single($slug) {

        $oneBook = $this->bookService->getOne($slug);
        print_r($oneBook);

       
        //return view with single book
        return null;

    }






}
