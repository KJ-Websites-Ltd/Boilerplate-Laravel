<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use Illuminate\Foundation\Console\Presets\React;


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
        //$this->middleware('auth');
    }

    public function index(BookService $bookService) {

        $data = $this->bookService->getAllByType();
    
        return view('list', ['data' => $data]);

    }


    public function single($slug, Request $request) {


        $res = false;
        $data = $this->bookService->getOne($slug);


        if ($request->isMethod('post')) {

            //add this book to the bought session and then redirect to homepage
            $request->session()->push('book.bought', $slug);
            $res = redirect('/');

        } else {

            //add this book to the book viewed session array, display the book details
            $request->session()->push('book.viewed', $slug);
            $res= view('book', ['data' => $data]);

        }


        return $res;
        

    }






}
