<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function licenses(){
        return view('licenses');
    }

    public function contact(){
        return view('contact');
    }

    public function features(){
        return view('features');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function appointment(){
        return view('appointment');
    }
}
