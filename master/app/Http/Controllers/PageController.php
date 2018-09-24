<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use App\Services\BookService;

class PageController extends Controller
{

    private $pageService;
    private $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageService $pageService, BookService $bookService)
    {
        
        //if some books have been bought the force a login or register
        $booksBought = session('book.bought');
        if (!empty($booksBought)) {
            $this->middleware('auth');
        }

        
        $this->pageService = $pageService;
        $this->bookService = $bookService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = $this->pageService->getOne('home');       
        $data['book_bought'] = $this->bookService->get_multiple_by_slug(session('book.bought'));
         
        return view('home', ['data' => $data]);
    }



    public function single($slug) {

        $data = $this->pageService->getOne($slug)->first();
        if (empty($data)) {
            $data = $this->pageService->getOne('404');
        }

        $data['books.viewed'] = session('book.viewed');
      

        return view('page', ['data' => $data]);
    }
}
