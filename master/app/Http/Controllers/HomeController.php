<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Services\PageService;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PageService $pageService)
    {

        echo $pageService->doSomethingUseful();

        return view('home');
    }
}
