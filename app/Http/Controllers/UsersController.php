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

    public function registerUser(Request $request){
        // Add user
        if($request->isMethod('post')){
            $user = new User;
            $user->name = $request->input('register_name');
            $user->email = $request->input('register_email');
            $user->admin = 0;
            $user->password = bcrypt($request->input('register_password'));
            $user->save();
            // Login new user
            if(Auth::attempt(['email' => $request->input('register_email'), 'password' => $request->input('register_password')])){
                Session::put('frontUserLogin', $request->input('register_email'));
                return redirect('/home');
            }
        }
    }

    public function loginUser(Request $request){
        // Add user
        if($request->isMethod('post')){
            // Login new user
            if(Auth::attempt(['email' => $request->input('login_email'), 'password' => $request->input('login_password'), 'admin' => 0])){
                Session::put('frontUserLogin', $request->input('login_email'));
                return redirect('/home');
            }else{
                return redirect()->back()->with('flash_message_error', 'Грешни email или парола!');
            }
        }
    }
}
