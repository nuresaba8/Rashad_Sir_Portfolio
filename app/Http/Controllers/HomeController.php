<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function experience()
    {
        return view('experience');
    }

    public function contribution()
    {
        return view('contribution');
    }

    public function articles()
    {
        return view('articles');
    }

    public function tv_shows()
    {
        return view('tv_shows');
    }

    public function news()
    {
        return view('news');
    }

    public function international()
    {
        return view('international');
    }

    public function awards()
    {
        return view('awards');
    }

    public function contact()
    {
        return view('contact');
    }
}
