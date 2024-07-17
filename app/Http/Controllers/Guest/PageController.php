<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }

    public function movies(){
        $movies = Movie::all();
        return view('pages.movies', compact('movies'));
    }
};
