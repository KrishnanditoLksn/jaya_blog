<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    public function contact_me(): View
    {
        return view('contact', ['title' => 'Contact Us']);
    }
}
