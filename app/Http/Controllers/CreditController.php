<?php

namespace App\Http\Controllers;

use App\Category;

class CreditController extends Controller
{
    public function index(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('credit.credit')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор',
            'root_categories' => $root_categories
        ]);
    }
}
