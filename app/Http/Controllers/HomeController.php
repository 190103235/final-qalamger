<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Poema;

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
        $poemas=Poema::all();
        return view('home', [
            'poemas'=>$poemas
        ]);
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}
