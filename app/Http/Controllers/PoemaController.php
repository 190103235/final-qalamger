<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poema;
use App\Category;

class PoemaController extends Controller
{
    public function poema() {
        $poemas=Poema::all();
        $categories=Category::all();
        return view('poema', [
            'poemas'=>$poemas,
            'categories'=>$categories
        ]);
    }

    public function create(){
        
        return view('poemacreate');
    }

    public function store(Request $request) {
        $poema=Poema::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'category_id'=>$request->input('category_id'),
            'text'=>$request->input('text'),
            'user_id'=>$request->input('user_id')
        ]);
        return redirect('/');
    }
}
