<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }


    public function mieiFilm(){
        $movies = Movie::all();
         dump($movies);
        return view('mieifilm' , compact('movies'));
    }


    public function migliorifilm(){
        return view('migliorifilm');
    }
}
