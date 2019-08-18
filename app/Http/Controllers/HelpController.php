<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Category;
use App\Mail\OrderOk;
use App\Mail\OrderUser;
use App\Project;
use App\Support;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Suborder;

class HelpController extends Controller
{
    public static function getExcerpt($str, $startPos = 0, $maxLength = 100)
    {
        if (strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength - 3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }

        return $excerpt;
    }

    public function submit_contactus(Request $request)
    {
        $this->validate($request, [
            'cf_name' => 'required',
            'cf_email' => 'required',
            'cf_message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ],
        [
            'cf_name.required' => 'Задължително е въвеждането на Вашето име!',
            'cf_email.required' => 'Задължително е въвеждането на вашия e-mail адрес!',
            'cf_message.required' => 'Задължително е въвеждането на съобщение!',
            'g-recaptcha-response.required' => 'Задължително е да преминете проверката за бот!',
            'g-recaptcha-response.recaptcha' => 'Неуспешна проверка за бот!'
        ]);

        $name = $request->input('cf_name');
        $email = $request->input('cf_email');
        $message = $request->input('cf_message');

        //to admin
        $objMailAdmin = new \stdClass();
        $objMailAdmin->app_name = env('APP_NAME', 'Авалон Магазин');
        $objMailAdmin->name = $name;
        $objMailAdmin->email = $email;
        $objMailAdmin->message = $message;
        $objMailAdmin->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');
        $objMailAdmin->receiver = 'Администратор Авалон Магазин';

        Mail::to('home@avalonbg.com')->send(new ContactUs($objMailAdmin));

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
            'message' => '<b>Благодарим Ви!</b> Вашето съобщение е получено от екипа на Авалон ООД.'
        ]);
    }

    public function submit_contactform(Request $request)
    {
        $this->validate($request, [
            'cf_name' => 'required',
            'cf_email' => 'required',
            'cf_message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ],
        [
            'cf_name.required' => 'Задължително е въвеждането на Вашето име!',
            'cf_email.required' => 'Задължително е въвеждането на вашия e-mail адрес!',
            'cf_message.required' => 'Задължително е въвеждането на съобщение!',
            'g-recaptcha-response.required' => 'Задължително е да преминете проверката за бот!',
            'g-recaptcha-response.recaptcha' => 'Неуспешна проверка за бот!'
        ]);

        $name = $request->input('cf_name');
        $email = $request->input('cf_email');
        $message = $request->input('cf_message');

        //to admin
        $objMailAdmin = new \stdClass();
        $objMailAdmin->app_name = env('APP_NAME', 'Авалон Магазин');
        $objMailAdmin->name = $name;
        $objMailAdmin->email = $email;
        $objMailAdmin->message = $message;
        $objMailAdmin->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');
        $objMailAdmin->receiver = 'Администратор Авалон Магазин';

        Mail::to('home@avalonbg.com')->send(new ContactUs($objMailAdmin));

        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('contact')->with([
            'title' => 'За контакт с нас | Авалон',
            'description' => 'За контакт с нас.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, контакти',
            'root_categories' => $root_categories,
            'message' => '<b>Благодарим Ви!</b> Вашето съобщение е получено от екипа на Авалон ООД.'
        ]);
    }

    public function cart(Request $request)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('cart')->with([
            'title' => 'Продуктова кошница | Авалон',
            'description' => 'Продуктова кошница.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кошница',
            'root_categories' => $root_categories
        ]);
    }

    public function cartClear(Request $request)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $request->session()->flush();
        return view('cart')->with([
            'title' => 'Продуктова кошница | Авалон',
            'description' => 'Продуктова кошница.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кошница',
            'root_categories' => $root_categories
        ]);
    }

    public function cartRemoveProduct(Request $request, $id=null)
    {
        if ($id != null){
            $cart_session = $request->session()->get('cart_session'); //get current cart info
            if (!empty($cart_session['items'])){
                foreach($cart_session['items'] as $elementKey => $element) {
                    foreach($element as $valueKey => $value) {
                        if($valueKey == 'product_id' && $value == $id){
                            //delete this particular object from the $array
                            unset($cart_session['items'][$elementKey]);
                            $request->session()->put('cart_session', $cart_session);
                        }
                    }
                }
            }
        }
        return redirect('/cart.html');
    }

    public function checkout(Request $request)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();

        // Add order
        if($request->isMethod('POST')){
            $this->validate($request, [
                'user_name' => 'required',
                'user_email' => 'required',
                'user_address' => 'required',
                'user_city' => 'required',
                'user_postcode' => 'required',
                'user_phone' => 'required',
                'user_name2' => 'required',
                'user_address2' => 'required',
                'user_city2' => 'required',
                'user_postcode2' => 'required',
                'user_phone2' => 'required'
            ],
            [
                'user_name.required' => 'Задължително е въвеждането на Вашите имена!',
                'user_email.required' => 'Задължително е въвеждането на Вашия e-mail адрес!',
                'user_address.required' => 'Задължително е въвеждането на Вашия адрес!',
                'user_city.required' => 'Задължително е въвеждането на Вашето населено място!',
                'user_postcode.required' => 'Задължително е въвеждането на Вашия пощенски код!',
                'user_phone.required' => 'Задължително е въвеждането на Вашия телефон!',
                'user_name2.required' => 'Задължително е въвеждането на Вашите имена за доставка!',
                'user_address2.required' => 'Задължително е въвеждането на Вашия адрес!',
                'user_city2.required' => 'Задължително е въвеждането на Вашето населено място!',
                'user_postcode2.required' => 'Задължително е въвеждането на Вашия пощенски код!',
                'user_phone2.required' => 'Задължително е въвеждането на Вашия телефон!'
            ]);

            $order = new Order();

            if (!empty(Auth::user())){
                $order->user_id = Auth::user()->id;
            }
            $order->user_name = $request->input('user_name');
            if (!empty($request->input('user_firm'))){
                $order->firm = $request->input('user_firm');
            }
            $order->email = $request->input('user_email');
            if (!empty($request->input('user_eik'))){
                $order->eik = $request->input('user_eik');
            }
            if (!empty($request->input('user_mol'))){
                $order->mol = $request->input('user_mol');
            }
            $order->address = $request->input('user_address');
            $order->city = $request->input('user_city');
            $order->postcode = $request->input('user_postcode');
            $order->phone = $request->input('user_phone');
            $order->user_name2 = $request->input('user_name2');
            $order->address2 = $request->input('user_address2');
            $order->city2 = $request->input('user_city2');
            $order->postcode2 = $request->input('user_postcode2');
            $order->phone2 = $request->input('user_phone2');
            if ($request->input('type_shipping') == 'shipping_free'){
                $order->shipping = 'free';
            }else{
                $order->shipping = 'spedy';
            }
            if ($request->input('type_payment') == 'payment_nalozen'){
                $order->payment = 'platez';
            }else{
                $order->payment = 'bank';
            }

            $order->save();

            //save suborders
            if (null != $request->session()->get('cart_session')){ //ima nalicna cart
                $cart_session = $request->session()->get('cart_session'); //get current cart info
                // check if exist
                if (!empty($cart_session['items'])){
                    foreach ($cart_session['items'] as $cart_item) {
                        $suborder = new Suborder();
                        $suborder->order_id = $order->id;
                        $suborder->product_id = $cart_item['product_id'];
                        $suborder->product_quantity = $cart_item['product_quantity'];
                        $suborder->total_price = $cart_item['total_price'];
                        $suborder->save();
                    }
                }
            }

            // delete cart
            $request->session()->forget('cart_session');

            return redirect()->route('checkout-result', ['id' => $order->id]);
        }

        return view('checkout')->with([
            'title' => 'Продуктова кошница | Авалон',
            'description' => 'Продуктова кошница.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кошница',
            'root_categories' => $root_categories
        ]);
    }

    public function checkoutResult(Request $request, $id=0)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $order = Order::where(['id' => $id])->first();

        // send mail
        //to admin
        $objMailAdmin = new \stdClass();
        $objMailAdmin->app_name = env('APP_NAME', 'Авалон Магазин');
        $objMailAdmin->name = $order->user_name;
        $objMailAdmin->email = $order->email;
        $objMailAdmin->order = $order->id;
        $objMailAdmin->shipping = $order->shipping;
        $objMailAdmin->payment = $order->payment;
        $objMailAdmin->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');
        $objMailAdmin->receiver = 'Администратор Авалон Магазин';

        Mail::to('home@avalonbg.com')->send(new OrderOk($objMailAdmin));

        //to user
        $objMailUser = new \stdClass();
        $objMailUser->app_name = env('APP_NAME', 'Авалон Магазин');
        $objMailUser->name = $order->user_name;
        $objMailUser->email = $order->email;
        $objMailUser->order = $order->id;
        $objMailUser->shipping = $order->shipping;
        $objMailUser->payment = $order->payment;
        $objMailUser->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');

        $suborders = Suborder::where(['order_id' => $order->id])->get();
        $objMailUser->suborders = $suborders;

        Mail::to($order->email)->send(new OrderUser($objMailUser));

        return view('checkout-result')->with([
            'title' => 'Продуктова кошница | Авалон',
            'description' => 'Продуктова кошница.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кошница',
            'root_categories' => $root_categories,
            'order' => $order
        ]);
    }

    public function addDownload(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $product = Product::where(['id' => $request->input('id')])->first();
                if (!empty($product)){
                    $product->downloads += 1;
                    $product->save();
                    return response()->json(['result' => 'success']);
                }
            }
        }
    }

}
