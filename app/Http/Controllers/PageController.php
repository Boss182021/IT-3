<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function skills()
    {
        return view('skills');
    }

    public function projects()
    {
        return view('projects');
    }

    public function experience()
    {
        return view('experience');
    }

    public function rate()
    {
        return view('rate');
    }
}
