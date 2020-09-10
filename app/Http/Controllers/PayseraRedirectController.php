<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebToPayController;

class PayseraRedirectController extends Controller
{
    private function get_self_url()
    {
        $s = substr(
            strtolower($_SERVER['SERVER_PROTOCOL']),
            0,
            strpos($_SERVER['SERVER_PROTOCOL'], '/')
        );

        if (!empty($_SERVER["HTTPS"])) {
            $s .= ($_SERVER["HTTPS"] == "on") ? "s" : "";
        }

        $s .= '://' . $_SERVER['HTTP_HOST'];

        if (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') {
            $s .= ':' . $_SERVER['SERVER_PORT'];
        }

        $s .= dirname($_SERVER['SCRIPT_NAME']);

        return $s;
    }

    public static function index()
    {
        return 1;
        // try {
        //     $self_url = get_self_url();
        //     $request = WebToPayController::redirectToPayment(array(
        //         'projectid'     => 0,
        //         'sign_password' => 'd41d8cd98f00b204e9800998ecf8427e',
        //         'orderid'       => 0,
        //         'amount'        => 1000,
        //         'currency'      => 'EUR',
        //         'country'       => 'LT',
        //         'accepturl'     => $self_url . '/accept-paysera.html',
        //         'cancelurl'     => $self_url . '/cancel-paysera.html',
        //         'callbackurl'   => $self_url . '/callback-paysera.html',
        //         'test'          => 0,
        //     ));
        // } catch (WebToPayException $e) {
        //     // handle exception
        // }
    }

    public function accept(){
        return 1;
    }

    public function cancel(){
        return 0;
    }

    public function callback(){
        return 2;
    }
}
