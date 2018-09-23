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
        $this->middleware('auth');
        $this->pageService = $pageService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $homePage = $this->pageService->getOne('home');
        print_r($homePage);
        
        return view('home');
    }

    public function single($slug) {

        $onePage = $this->pageService->getOne($slug);
        print_r($onePage);

        return null;
    }
}
