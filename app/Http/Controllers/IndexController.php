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

    public function service_printeri(){
        return view('service-printeri');
    }

    public function mrezi(){
        return view('mrezi');
    }

    public function web(){
        return view('web');
    }

    public function news(){
        return view('news');
    }

    public function sitemap(){
        return view('sitemap');
    }

    public function terms(){
        return view('terms');
    }

    public function gdpr(){
        return view('gdpr');
    }

    public function politika(){
        return view('politika');
    }

    public function dostavka(){
        return view('dostavka');
    }

    public function vrashtane(){
        return view('vrashtane');
    }

    public function maxtrade_change(){
        return view('desktop.maxtrade_change');
    }

    public function maxtrade_cmr(){
        return view('desktop.maxtrade_cmr');
    }
}
