<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return "vvvvvvvvvvvvvvvvvvv";
       // dd(Auth::user());

        if(Auth::user()->type == 'client'){
            return redirect()->route('Cats.index');


        }else{
            return redirect()->route('home');
        }
    }
}
