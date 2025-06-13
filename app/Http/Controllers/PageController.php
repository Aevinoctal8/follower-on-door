<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }
}
