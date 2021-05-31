<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexView(){
        $movies = Movies::all();

        return view('pages.index', compact('movies'));
    }

    public function movieView($id){
        $movie = Movies::findOrFail($id);
        return view('pages.movie', compact('movie'));
    }
}
