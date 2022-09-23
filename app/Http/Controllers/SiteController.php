<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homeview()
    {
        return view('home');
    }
    public function creatorsview()
    {
        return view('creators');
    }
    public function contactview()
    {
        return view('contact');
    }
    public function majornoticesview()
    {
        return view('majornotices');
    }
    public function profileview()
    {
        return view('profile');
    }
}
