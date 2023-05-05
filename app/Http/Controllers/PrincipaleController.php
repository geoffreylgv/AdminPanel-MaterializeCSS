<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipaleController extends Controller
{
    // 1 return the index guess page by default all news and posts `the home page`
    public function index() {
        return view('home');
    }

    public function news() {
        return view('news');
    }
}
