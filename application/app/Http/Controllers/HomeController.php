<?php

namespace App\Http\Controllers;

use App\Library\Services\PageService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HomeController extends Controller {
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
     * @return Response
     */
    public function index(PageService $pageService)
    {

        echo $pageService->doSomethingUseful();

        return view('home');
    }
}
