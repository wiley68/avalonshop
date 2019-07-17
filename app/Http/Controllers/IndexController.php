<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function forUs(){
        return view('for_us');
    }

    public function contact(){
        return view('contact');
    }

    public function shop(){
        return view('shop');
    }

    public function service(){
        return view('service');
    }
}
