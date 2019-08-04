<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function loginRegisterUsers(){
        $root_categories = Category::where(['parent_id' => 0])->get();

        return view('users.login_register')->with([
            'title' => 'Вход или регистрация в електронния магазин' . ' | Авалон',
            'description' => 'Вход или регистрация в електронния магазин',
            'keywords' => 'вход, регистрация, онлайн магазин',
            'root_categories' => $root_categories
        ]);
    }

    public function dashboard(){
        $root_categories = Category::where(['parent_id' => 0])->get();

        return view('users.dashboard')->with([
            'title' => '' . ' | Авалон',
            'description' => '',
            'keywords' => '',
            'root_categories' => $root_categories
        ]);
    }

    public function registerUser(Request $request){
        $this->validate($request, [
            'register_name' => 'required',
            'register_email' => 'required',
            'register_password' => 'min:6|required_with:register_password_again|same:register_password_again',
            'register_password_again' => 'min:6',
            'checkedall' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ],
        [
            'register_name.required' => 'Задължително е въвеждането на Вашето име!',
            'register_email.required' => 'Задължително е въвеждането на вашия e-mail адрес!',
            'register_password.min' => 'Минималната дължина на паролата е 6 символа!',
            'register_password.required_with' => 'Трябва да въведете два пъти паролата!',
            'register_password.same' => 'Повторната парола трябва да съответства на въведената първа!',
            'register_password_again.min' => 'Минималната дължина на паролата е 6 символа!',
            'checkedall.required' => 'Задължително е да приемете Общите ни условия за да се регистрирате!',
            'g-recaptcha-response.required' => 'Задължително е да преминете проверката за бот!',
            'g-recaptcha-response.recaptcha' => 'Неуспешна проверка за бот!'
        ]);

        // Add user
        if($request->isMethod('post')){
            $user = new User;
            $user->name = $request->input('register_name');
            $user->email = $request->input('register_email');
            $user->password = bcrypt($request->input('register_password'));
            $user->save();
            // Login new user
            if(Auth::attempt(['email' => $request->input('register_email'), 'password' => $request->input('register_password')])){
                Session::put('frontUserLogin', $request->input('register_email'));
                return redirect('/home.html');
            }
        }
    }

    public function loginUser(Request $request){
        $this->validate($request, [
            'login_email' => 'required',
            'login_password' => 'required'
        ],
        [
            'login_email.required' => 'Задължително е въвеждането на вашия e-mail адрес!',
            'login_password.required' => 'Задължително е въвеждането на вашата парола!'
        ]);

        // Add user
        if($request->isMethod('post')){
            // Login new user
            if(Auth::attempt(['email' => $request->input('login_email'), 'password' => $request->input('login_password')])){
                Session::put('frontUserLogin', $request->input('login_email'));
                return redirect('/home.html');
            }else{
                return redirect()->back()->withErrors(['Грешка при вход:', 'Грешни email или парола!']);
            }
        }
    }

    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
