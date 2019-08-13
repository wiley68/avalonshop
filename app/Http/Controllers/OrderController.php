<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrders(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $orders = Order::where(['user_id' => Auth::user()->id])->orderBy('id', 'DESC')->get();
        return view('users.show_orders')->with([
            'title' => 'Панел за управление на потребител - поръчки' . ' | Авалон',
            'description' => 'Панел за управление на потребител - поръчки',
            'keywords' => 'панел, управление, потребител, поръчки',
            'root_categories' => $root_categories,
            'orders' => $orders
        ]);
    }

    public function delOrder(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $order = Order::where(['user_id' => Auth::user()->id, 'id' => $request->input('id')])->first();
                if (!empty($order)){
                    $order->delete();
                    return response()->json(['result' => 'del']);
                }else{
                    return response()->json(['result' => 'not']);
                }
            }    
        }
    }

    public function showOrder(Request $request, $id = null)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $order = Order::where(['id' => $id])->first();

        return view('users.show_order')->with([
            'title' => 'Информация за моите поръчки' . ' | Авалон',
            'description' => 'Информация за моите поръчки',
            'keywords' => 'панел, управление, потребител, поръчка',
            'root_categories' => $root_categories,
            'order' => $order
        ]);
    }

}
