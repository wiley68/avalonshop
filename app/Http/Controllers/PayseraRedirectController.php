<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebToPay;

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
        dd($request);
    }

    public function cancel(Request $request){
        dd($request);
    }

    public function callback(Request $request){
        dd($request);
    }
}
