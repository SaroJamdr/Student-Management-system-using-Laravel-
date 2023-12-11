<?php

namespace App\Http\Controllers\Sample2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mypage()
    {
        return view('sample2');
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
}
