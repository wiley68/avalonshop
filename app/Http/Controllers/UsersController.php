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
use App\Mail\PasswordReset;
use App\Review;
use App\Product;
use App\Software;
use App\Manufacturer;
use App\Property;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function getBaseUrl(){
        $hostName = $_SERVER['HTTP_HOST']; 
        return 'https://'.$hostName;
    }

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
                //$user->sendEmailVerificationNotification();
                return redirect('/home.html');
            }
        }
    }

    public function passwordReset(Request $request){
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'reset_email' => 'required'
            ],
            [
                'reset_email.required' => 'Задължително е въвеждането на вашия e-mail адрес!'
            ]);

            $token = Str::random(120);
            $email = $request->input('reset_email');
            $user = User::where(['email' => $email])->first();
            $user_id = $user->id;
            $name = $user->name;
            $user->reset_token = $token;
            $user->save();

            //to user
            $objMailUser = new \stdClass();
            $objMailUser->app_name = env('APP_NAME', 'Авалон Магазин');
            $objMailUser->email = $email;
            $objMailUser->id = $user_id;
            $objMailUser->name = $name;
            $objMailUser->token = $token;
            $objMailUser->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');

            Mail::to($email)->send(new PasswordReset($objMailUser));
        }

        $root_categories = Category::where(['parent_id' => 0])->get();

        return view('users.password_reset')->with([
            'title' => 'Вход или регистрация в електронния магазин' . ' | Авалон',
            'description' => 'Вход или регистрация в електронния магазин',
            'keywords' => 'вход, регистрация, онлайн магазин',
            'root_categories' => $root_categories
        ]);
    }

    public function passwordChange(Request $request, $id, $token){

        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'new_password' => 'required',
                'register_password_again' => 'required'
            ],
            [
                'new_password.required' => 'Задължително е въвеждането на нова парола!',
                'register_password_again.required' => 'Задължително е потвърждаването на новата парола!'
            ]);

            return redirect('/login-register.html');
        }

        if(($id && $token) && ($id!=0) && ($token!="")){
            $user = User::where(['id' => $id])->firstOrFail();
            if($user->reset_token == $request->token){
                $root_categories = Category::where(['parent_id' => 0])->get();

                return view('users.new_password')->with([
                    'title' => 'Забравена парола' . ' | Авалон',
                    'description' => 'Забравена парола за електронния магазин',
                    'keywords' => 'вход, регистрация, онлайн магазин, парола, забравена',
                    'root_categories' => $root_categories
                ]);        
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
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

                $root_categories = Category::where(['parent_id' => 0])->get();
                $webprojects = Project::all();
                $supports_gamings = Support::where(['category_id' => 'gamings'])->get();
                $supports_offices = Support::where(['category_id' => 'offices'])->get();
                $supports_printers = Support::where(['category_id' => 'printers'])->get();
                $supports_instalations = Support::where(['category_id' => 'instalations'])->get();
                $supports_networks = Support::where(['category_id' => 'networks'])->get();
                $supports_cameras = Support::where(['category_id' => 'cameras'])->get();
                $supports_softwares = Support::where(['category_id' => 'softwares'])->get();
                $manufacturers = Manufacturer::all();
                $properties = Property::first();

                $deviceis = "";
                $tbi_container_status = "";
                $tbi_picture = "";
                $tbi_container_txt1 = "";
                $tbi_container_txt2 = "";
                $tbi_backurl = "";
                $uni_logo = "";
                $uni_picture = "";
                $uni_container_txt1 = "";
                $uni_container_txt2 = "";
                $uni_backurl = "";
                $tbiyes = $properties->tbibank;
                $uniyes = $properties->unicredit;

                $useragent = $_SERVER['HTTP_USER_AGENT'];
                if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
                    $deviceis = "mobile";
                } else {
                    $deviceis = "pc";
                }

                /** Credit */
                /** TBI Bank */
                if ($tbiyes) {
                    $tbi_data = array(
                        'name' => 'getAdvertising',
                        'param' => array(
                            'unicid' => '1af4d77b-70a2-4771-a04b-1c6d63f07680'
                        )
                    );
                    // Encript data
                    $tbi_plaintext = json_encode($tbi_data);
                    $tbi_publicKey = openssl_pkey_get_public(file_get_contents('keys/pub.pem'));
                    $tbi_a_key = openssl_pkey_get_details($tbi_publicKey);
                    $tbi_chunkSize = ceil($tbi_a_key['bits'] / 8) - 11;
                    $tbi_output = '';
                    while ($tbi_plaintext) {
                        $tbi_chunk = substr($tbi_plaintext, 0, $tbi_chunkSize);
                        $tbi_plaintext = substr($tbi_plaintext, $tbi_chunkSize);
                        $tbi_encrypted = '';
                        if (!openssl_public_encrypt($tbi_chunk, $tbi_encrypted, $tbi_publicKey)) {
                            die('Failed to encrypt data');
                        }
                        $tbi_output .= $tbi_encrypted;
                    }
                    openssl_free_key($tbi_publicKey);
                    $tbi_output64 = base64_encode($tbi_output);
                    // Encript data
                    $tbi_ch = curl_init();
                    curl_setopt_array($tbi_ch, array(
                        CURLOPT_URL => "https://tbibank.support/api/index.php",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 2,
                        CURLOPT_TIMEOUT => 5,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS =>     json_encode(array('data' => $tbi_output64)),
                        CURLOPT_HTTPHEADER => array(
                            "Content-Type: application/json",
                            "cache-control: no-cache"
                        ),
                    ));
                    $responseapi = curl_exec($tbi_ch);
                    $err = curl_error($tbi_ch);
                    curl_close($tbi_ch);

                    $api_obj = json_decode($responseapi);

                    $tbi_container_status = $api_obj->data->result->advertising;
                    $tbi_picture = $api_obj->data->result->picture;
                    $tbi_container_txt1 = $api_obj->data->result->advertising_title;
                    $tbi_container_txt2 = $api_obj->data->result->advertising_text;
                    $tbi_backurl = $api_obj->data->result->url;
                }

                /** UNI Credit */
                if ($uniyes) {
                    $credituni_unicid = '9ce5287c-c8d1-4a22-878c-1a9d42d7160a';

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_URL, 'https://unicreditconsumerfinancing.info/function/getparameters.php?cid=' . $credituni_unicid);
                    $paramsuni = json_decode(curl_exec($ch), true);
                    curl_close($ch);

                    $uni_logo = 'https://unicreditconsumerfinancing.info/dist/img/uni_logo.jpg';
                    $uni_backurl = $paramsuni['uni_backurl'];
                    $uni_picture = 'https://unicreditconsumerfinancing.info/calculators/assets/img/unim' . $paramsuni['uni_container_reklama'] . '.png';
                    $uni_container_txt1 = $paramsuni['uni_container_txt1'];
                    $uni_container_txt2 = $paramsuni['uni_container_txt2'];
                    $uni_container_status = $paramsuni['uni_container_status'];
                }

                $software_desktop = Software::where(['category_id' => 'desktop'])->get();
                $software_modules = Software::where(['category_id' => 'modules'])->get();
                $software_websoftware = Software::where(['category_id' => 'websoftware'])->get();
                $software_webservice = Software::where(['category_id' => 'webservice'])->get();
                $software_mobile = Software::where(['category_id' => 'mobile'])->get();
                $software_industry = Software::where(['category_id' => 'industry'])->get();
                /** Credit */

                $product1 = Product::where('instock', '!=', 'няма наличност')->orderByRaw("RAND()")->first();
                $product2 = Product::where('instock', '!=', 'няма наличност')->orderByRaw("RAND()")->first();
                $product3 = Product::where('instock', '!=', 'няма наличност')->orderByRaw("RAND()")->first();

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
                    'message' => 'Успешно се записахте за получаване на новини!',
                    'product1' => $product1,
                    'product2' => $product2,
                    'product3' => $product3,
                    'baseurl' => $this->getBaseUrl(),
                    'software_desktop' => $software_desktop,
                    'software_modules' => $software_modules,
                    'software_websoftware' => $software_websoftware,
                    'software_webservice' => $software_webservice,
                    'software_mobile' => $software_mobile,
                    'software_industry' => $software_industry,
                    'manufacturers' => $manufacturers,
                    'tbiyes' => $tbiyes,
                    'tbi_container_status' => $tbi_container_status,
                    'tbi_picture' => $tbi_picture,
                    'tbi_container_txt1' => $tbi_container_txt1,
                    'tbi_container_txt2' => $tbi_container_txt2,
                    'tbi_backurl' => $tbi_backurl,
                    'uni_container_status' => $uni_container_status,
                    'uni_logo' => $uni_logo,
                    'uni_picture' => $uni_picture,
                    'uni_container_txt1' => $uni_container_txt1,
                    'uni_container_txt2' => $uni_container_txt2,
                    'uni_backurl' => $uni_backurl,
                    'deviceis' => $deviceis,
                    'uniyes' => $uniyes
                ]);
            }else{
                return redirect('/')->withErrors(['Грешка при запис за новини:', 'Необходимо е да имате създаден профил в магазина за да използвате услугата!']);
            }
        }
    }

    public function googleCallback(){
        $root_categories = Category::where(['parent_id' => 0])->get();

        return view('users.google_callback')->with([
            'title' => 'Вход или регистрация в електронния магазин' . ' | Авалон',
            'description' => 'Вход или регистрация в електронния магазин',
            'keywords' => 'вход, регистрация, онлайн магазин',
            'root_categories' => $root_categories
        ]);
    }


}
