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
        
        $this->pageService = $pageService;
        $this->bookService = $bookService;
    }

    /**
     * Show the homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = $this->pageService->getOne('home');       
        $data['book_bought'] = $this->bookService->get_multiple_by_slug(session('book.bought'));
        $res = false;

        //if user isnt logged in redirect them to login if any books are in basket        
        if (\Auth::user() === null && !empty($data['book_bought'])) {
            $res = redirect('login');
        } else {
            $res = view('home', ['data' => $data]);
        }
        
        return $res;
    }


    /**
     * show each single page
     *
     * @param [type] $slug
     * @return void
     */
    public function single($slug) {

        $data = $this->pageService->getOne($slug)->first();
        if (empty($data)) {
            $data = $this->pageService->getOne('404');
        }

        $data['book.viewed'] = session('book.viewed');
      

        return view('page', ['data' => $data]);
    }
}
