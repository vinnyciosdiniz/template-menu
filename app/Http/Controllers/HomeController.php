<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function menu2(){
        return view('menu2');
    }

    public function menu3(){
        return view('menu3');
    }
}

