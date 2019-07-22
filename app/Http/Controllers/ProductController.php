<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsCategories;

class ProductController extends Controller
{
    public function viewProducts(){
        $root_categories = Category::where(['parent_id' => 0])->get();

        $products = Product::all();
        $paginate = 8;
        $queries = [];

        // Get category requests
        if (!empty(request('category_id'))){
            // Get root category and parent categories
            foreach (request('category_id') as $item) {
                $categories_parent = Category::where(['parent_id'=>$item])->get();
                $categories_in[] = $item;
                foreach ($categories_parent as $category_parent) {
                    $categories_in[] = $category_parent->id;
                }
            }
            // get products array by categories
            $products_in = [];
            $products_categories = ProductsCategories::whereIn('category_id', $categories_in);
            foreach ($products_categories as $product_category) {
                $products_in[] = $product_category->product_id;
            }
            // filter products
            $products = $products->whereIn('id', $products_in);
            // save queries
            $queries['category_id'] = request('category_id');
        }
        
        return view('/products/view_products')->with([
            'title' => 'Продуктов филтър. Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Продуктов филтър. Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, продукти',
            'root_categories' => $root_categories,
            'paginate' => $paginate,
            'products' => $products
        ]);
    }

}
