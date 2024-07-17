<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }

    public function movies(){
        return view('pages.movies');
    }
}