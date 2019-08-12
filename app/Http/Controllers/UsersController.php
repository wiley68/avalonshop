<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Project;
use App\Support;
use App\Favorite;
use App\Order;
use App\Review;

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
            'title' => 'Панел за управление на потребител' . ' | Авалон',
            'description' => 'Панел за управление на потребител',
            'keywords' => 'панел, управление, потребител',
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

    public function loginCheckoutUser(Request $request){
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
                return redirect('/checkout.html');
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

    public function changePassword(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();

        // Add user
        if($request->isMethod('post')){
            $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'min:6|required_with:register_password_again|same:register_password_again',
                'register_password_again' => 'min:6'
            ],
            [
                'old_password.required' => 'Задължително е въвеждането на Старата парола!',
                'new_password.min' => 'Минималната дължина на паролата е 6 символа!',
                'new_password.required_with' => 'Трябва да въведете два пъти паролата!',
                'new_password.same' => 'Повторната парола трябва да съответства на въведената първа!',
                'register_password_again.min' => 'Минималната дължина на паролата е 6 символа!'
            ]);
    
            if (Hash::check($request->input('old_password'), User::where(['email'=>Auth::user()->email])->first()->password)){
                $password = bcrypt($request->input('new_password'));
                User::where(['email'=>Auth::user()->email])->update(['password'=>$password]);
                return redirect('/home.html')->with('message', 'Успешно променихте вашата парола!');
            }else{
                return redirect('/change-password.html')->withErrors(['Грешка при вход:', 'Грешни email или парола!']);
            }
        }

        return view('users.change_password')->with([
            'title' => 'Панел за управление на потребител' . ' | Авалон',
            'description' => 'Панел за управление на потребител',
            'keywords' => 'панел, управление, потребител',
            'root_categories' => $root_categories
        ]);
    }

    public function changeData(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();

        // Add user
        if($request->isMethod('POST')){
            $this->validate($request, [
                'user_name' => 'required'
            ],
            [
                'user_name.required' => 'Задължително е въвеждането на Вашите имена!'
            ]);
    
            $user = Auth::user();
            $user->name = $request->input('user_name');
            if (!empty($request->input('user_phone'))){
                $user->phone = $request->input('user_phone');
            }
            if (!empty($request->input('user_city'))){
                $user->city = $request->input('user_city');
            }
            if (!empty($request->input('user_postcode'))){
                $user->postcode = $request->input('user_postcode');
            }
            if (!empty($request->input('user_address'))){
                $user->address = $request->input('user_address');
            }
            if (!empty($request->input('user_phone2'))){
                $user->phone2 = $request->input('user_phone2');
            }
            if (!empty($request->input('user_city2'))){
                $user->city2 = $request->input('user_city2');
            }
            if (!empty($request->input('user_postcode2'))){
                $user->postcode2 = $request->input('user_postcode2');
            }
            if (!empty($request->input('user_address2'))){
                $user->address2 = $request->input('user_address2');
            }
            if (!empty($request->input('user_firm'))){
                $user->firm = $request->input('user_firm');
            }
            if (!empty($request->input('user_eik'))){
                $user->eik = $request->input('user_eik');
            }
            if (!empty($request->input('user_mol'))){
                $user->mol = $request->input('user_mol');
            }
            $user->save();
            return redirect('/change-data.html')->with('message', 'Успешно променихте вашите данни!');
        }

        return view('users.change_data')->with([
            'title' => 'Смяна на данните на текущия потребител' . ' | Авалон',
            'description' => 'Смяна на данните на текущия потребител',
            'keywords' => 'панел, управление, потребител, данни',
            'root_categories' => $root_categories
        ]);
    }

    public function showReviews(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $reviews = Review::where(['user_id' => Auth::user()->id])->get();

        return view('users.show_reviews')->with([
            'title' => 'Моите отзиви' . ' | Авалон',
            'description' => 'Моите отзиви',
            'keywords' => 'панел, управление, отзиви, продукти',
            'root_categories' => $root_categories,
            'reviews' => $reviews
        ]);
    }

    public function showFavorites(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $favorites = Favorite::where(['user_id' => Auth::user()->id])->get();

        return view('users.show_favorites')->with([
            'title' => 'Любими продукти' . ' | Авалон',
            'description' => 'Любими продукти',
            'keywords' => 'панел, управление, любими, продукти',
            'root_categories' => $root_categories,
            'favorites' => $favorites
        ]);
    }

    public function editNews(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();

        // Add user
        if($request->isMethod('post')){
            $user = Auth::user();
            if ($request->input('isnews') == 'on'){
                $user->isnews = 1;
            }else{
                $user->isnews = 0;
            }
            $user->save();
            return redirect('/edit-news.html')->with('message', 'Успешно променихте вашите данни!');
        }

        return view('users.edit_news')->with([
            'title' => 'Записване за новини' . ' | Авалон',
            'description' => 'Записване за новини',
            'keywords' => 'панел, управление, потребител, новини',
            'root_categories' => $root_categories
        ]);
    }

    public function personSettings(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();

        // Add user
        if($request->isMethod('post')){
            $this->validate($request, [
                'g-recaptcha-response' => 'required|recaptcha'
            ],
            [
                'g-recaptcha-response.required' => 'Задължително е да преминете проверката за бот!',
                'g-recaptcha-response.recaptcha' => 'Неуспешна проверка за бот!'
            ]);
        
            // delete users
            Review::where(['user_id' => Auth::user()->id])->delete();
            Favorite::where(['user_id' => Auth::user()->id])->delete();
            User::where(['id' => Auth::user()->id])->delete();
            return redirect('/');
        }

        return view('users.person_settings')->with([
            'title' => 'Панел за управление на лични настройки' . ' | Авалон',
            'description' => 'Панел за управление на лични настройки',
            'keywords' => 'панел, управление, потребител, лични настройки',
            'root_categories' => $root_categories
        ]);
    }

    public function newsSuscribe(Request $request){
        $this->validate($request, [
            'sc_email' => 'required'
        ],
        [
            'sc_email.required' => 'Задължително е въвеждането на Вашия e-mail адрес!'
        ]);

        // Add user
        if($request->isMethod('post')){
            $user = User::where(['email' => $request->input('sc_email')])->first();
            if (!empty($user)){
                $user->isnews = 1;
                $user->save();
                $root_categories = Category::where(['parent_id' => 0])->get();
                
                $webprojects = Project::all();
                $supports_gamings = Support::where(['category_id' => 'gamings'])->get();
                $supports_offices = Support::where(['category_id' => 'offices'])->get();
                $supports_printers = Support::where(['category_id' => 'printers'])->get();
                $supports_instalations = Support::where(['category_id' => 'instalations'])->get();
                $supports_networks = Support::where(['category_id' => 'networks'])->get();
                $supports_cameras = Support::where(['category_id' => 'cameras'])->get();
                $supports_softwares = Support::where(['category_id' => 'softwares'])->get();
                return view('index')->with([
                    'title' => 'Софтуер - продажба на компютърна техника | Авалон',
                    'description' => 'Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
                    'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи',
                    'root_categories' => $root_categories,
                    'webprojects' => $webprojects,
                    'supports_gamings' => $supports_gamings,
                    'supports_offices' => $supports_offices,
                    'supports_printers' => $supports_printers,
                    'supports_instalations' => $supports_instalations,
                    'supports_networks' => $supports_networks,
                    'supports_cameras' => $supports_cameras,
                    'supports_softwares' => $supports_softwares,
                    'message' => 'Успешно се записахте за получаване на новини!'
                ]);
            }else{
                return redirect('/')->withErrors(['Грешка при запис за новини:', 'Необходимо е да имате създаден профил в магазина за да използвате услугата!']);
            }
        }
    }

}
