<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', ['title' => 'Home']);
    }

    public function home(): View
    {
        return view('home', ['title' => 'Home Page']);
    }
}
