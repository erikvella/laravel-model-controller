<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }


    public function mieiFilm(){
        return view('mieifilm');
    }


    public function migliorifilm(){
        return view('migliorifilm');
    }
}
