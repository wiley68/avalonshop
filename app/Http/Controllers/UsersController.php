<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loginRegisterUsers(){
        $root_categories = Category::where(['parent_id' => 0])->get();

        return view('users.login_register')->with([
            'title' => '' . ' | Авалон',
            'description' => '',
            'keywords' => '',
            'root_categories' => $root_categories
        ]);
    }
}
