<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Request;

class CreditController extends Controller
{
    public function index(Request $request, $product_id = null, $product_qt = null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        if ($product_id != null){
            $product = Product::where(['id' => $product_id])->first();
        }else{
            $product = null;
        }

        return view('credit.credit')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор',
            'root_categories' => $root_categories,
            'product' => $product,
            'product_qt' => $product_qt
        ]);
    }

    public static function isProductInCategories($categories_id=array(), $products_id) {
        if ($categories_id[0] != ""){
            if ($products_id != ""){
                if (in_array(strval($products_id), $categories_id)){
                    return true;
                }
            }
        }
        return false;
    }

}
