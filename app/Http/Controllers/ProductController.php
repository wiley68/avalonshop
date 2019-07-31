<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsCategories;
use App\Tagsp;
use Illuminate\Support\Facades\DB;
use App\ProductsTagsp;

class ProductController extends Controller
{
    public function viewProducts(){
        // get root categories
        $root_categories = Category::where(['parent_id' => 0])->get();
        // get working tags
        $tags_working = [];
        $products_tagsp = DB::table('products_tagsp')
            ->select('tagsp_id', DB::raw('count(*) as total'))
            ->groupBy('tagsp_id')
            ->orderBy('total', 'DESC')
            ->get();
        $tagsp_counter = 0;
        foreach ($products_tagsp as $tagp) {
            if ($tagsp_counter < 30){
                $tags_working[] = $tagp->tagsp_id;
                $tagsp_counter++;
            }else{
                break;
            }
        }
        $tagsp = Tagsp::whereIn('id', $tags_working)->get();
        
        // get products
        $products = Product::where('id' ,'>' ,0);

        // get paginate
        if (!empty(request('paginate_by'))){
            $paginate_by = request('paginate_by');
        }else{
            $paginate_by = 9;
        }
        $paginate = $paginate_by;
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
            $products_categories = ProductsCategories::whereIn('category_id', $categories_in)->get();
            foreach ($products_categories as $product_category) {
                $products_in[] = $product_category->product_id;
            }
            // save queries
            $queries['category_id'] = request('category_id');

            // filter products
            $products = $products->whereIn('id', $products_in);
            $category_id = request('category_id');
        }else{
            $category_id = [];
        }

        // Get tag requests
        $tags_in = [];
        if (!empty(request('tag_id'))){
            // Get products_tagsp
            $products_tags = ProductsTagsp::where(['tagsp_id'=>request('tag_id')])->get();
            foreach ($products_tags as $product_tag) {
                $tags_in[] = $product_tag->product_id;
            }
            // filter products
            $products = $products->whereIn('id', $tags_in);
            // save queries
            $queries['tag'] = request('tag_id');
            $tag_id = request('tag_id');
        }else{
            $tag_id = '';
        }

        // sorting
        // Sorting products
        if (request()->has('order_by')){
            if (request('order_by') == 'order_by_price_desc'){
                $products = $products->orderBy('price', 'asc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_price_asc'){
                $products = $products->orderBy('price', 'desc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_name_asc'){
                $products = $products->orderBy('name', 'asc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_name_desc'){
                $products = $products->orderBy('name', 'desc');
                $queries['order_by'] = request('order_by');
            }
            $order_by = request('order_by');
        }else{
            $order_by = 'Въвеждане';
        }

        $products = $products->paginate($paginate)->appends($queries);
        
        return view('/products/view_products')->with([
            'title' => 'Продуктов филтър. Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Продуктов филтър. Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, продукти',
            'root_categories' => $root_categories,
            'paginate' => $paginate,
            'products' => $products,
            'queries' => $queries,
            'tagsp' => $tagsp,
            'category_id' => $category_id,
            'tag_id' => $tag_id,
            'order_by' => $order_by
        ]);
    }

}
