<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = config('db.movies');

        return view('main', compact('movies'));
    }
}
