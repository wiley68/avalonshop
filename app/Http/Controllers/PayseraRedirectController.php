<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebToPay;
use App\Category;

class PayseraRedirectController extends Controller
{
	public function payseraSend($order_id, $order_total)
    {
        try {
            $request = WebToPay::redirectToPayment(array(
                'projectid'     => 181928,
                'sign_password' => '47da00bdd38a0f2a32f08eeb620070c3',
                'orderid'       => $order_id,
                'amount'        => $order_total,
                'currency'      => 'BGN',
                'country'       => 'BG',
                'accepturl'     => 'https://avalonbg.com/accept-paysera.html',
                'cancelurl'     => 'https://avalonbg.com/cancel-paysera.html',
                'callbackurl'   => 'https://avalonbg.com/callback-paysera.html',
                'test'          => 1,
            ));
        } catch (WebToPayException $e) {
            
        }
    }
	
    public function accept(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('paysera.accept')->with([
            'title' => 'Успешно плащане | Авалон',
            'description' => 'Успешно плащане.',
            'keywords' => 'плащане, софтуер, програми, компютри, продажба, сервиз, консумативи, общи условия',
            'root_categories' => $root_categories
        ]);
    }

    public function cancel(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('paysera.cancel')->with([
            'title' => 'Отказано плащане | Авалон',
            'description' => 'Отказано плащане.',
            'keywords' => 'плащане, софтуер, програми, компютри, продажба, сервиз, консумативи, общи условия',
            'root_categories' => $root_categories
        ]);
    }

    public function callback(Request $request){
        return response()->json('OK');
    }
}
