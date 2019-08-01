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
            if ($tagsp_counter < 20){
                $tags_working[] = $tagp->tagsp_id;
                $tagsp_counter++;
            }else{
                break;
            }
        }

        // get manufacturers
        $products_manufacturers = DB::table('products')
            ->select('manufacturer_id', DB::raw('count(*) as total'))
            ->groupBy('manufacturer_id')
            ->orderBy('total', 'DESC')
            ->take(20)
            ->get();
    
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

        // Get manufacturer request
        if (!empty(request('manufacturer_id'))){
            // Get products by manufacturer
            $manufacturer_id = request('manufacturer_id');
            $products = $products->where('manufacturer_id', $manufacturer_id);
        }else{
            $manufacturer_id = '';
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
            'tags_working' => $tags_working,
            'category_id' => $category_id,
            'tag_id' => $tag_id,
            'order_by' => $order_by,
            'products_manufacturers' => $products_manufacturers,
            'manufacturer_id' => $manufacturer_id
        ]);
    }

    /** start view product */
    public function viewProduct(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $product = Product::where(['id'=>$id])->first();
        $product->visits += 1;
        $product->save();

        $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $id])->first()->category_id])->first();
        
        $tagsp_ids = [];
        $products_tagsp = ProductsTagsp::where(['product_id' => $id])->get();
        foreach ($products_tagsp as $product_tagp) {
            $tagsp_ids[] = $product_tagp->tagsp_id;
        }
        $tagsp = Tagsp::whereIn('id', $tagsp_ids)->get();

        $all_tagsp_ids = [];
        $all_products_tagsp = ProductsTagsp::all();
        foreach ($all_products_tagsp as $all_product_tag) {
            $all_tagsp_ids[] = $all_product_tag->tagsp_id;
        }
        $all_tagsp = Tagsp::whereIn('id', $all_tagsp_ids)->get();

        return view('products.view_product')->with([
            'title' => $product->name . ' | Авалон',
            'description' => $product->name . '.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка, софтуер',
            'root_categories' => $root_categories,
            'product'=>$product,
            'tagsp' => $tagsp,
            'all_tagsp' => $all_tagsp,
            'product_category' => $product_category
        ]);
    }
    /** end view product */

}
