<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PageService;

class PageController extends Controller
{


    private $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageService $pageService)
    {
        //$this->middleware('auth');
        $this->pageService = $pageService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = $this->pageService->getOne('home');       
        $data['books.viewed'] = $request->session()->get('book.viewed');

         
        return view('home', ['data' => $data]);
    }

    public function single($slug, Request $request) {

        $data = $this->pageService->getOne($slug)->first();
        if (empty($data)) {
            $data = $this->pageService->getOne('404');
        }

        $data['books.viewed'] = $request->session()->get('book.viewed');
      

        return view('page', ['data' => $data]);
    }
}
