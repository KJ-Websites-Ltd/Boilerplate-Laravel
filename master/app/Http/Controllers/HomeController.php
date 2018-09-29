<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Services\ItemService;


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
    public function index(ItemService $itemService)
    {

        echo $itemService->doSomethingUseful();

        return view('home');
    }
}
