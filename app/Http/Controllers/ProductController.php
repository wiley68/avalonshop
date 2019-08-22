<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsCategories;
use App\Tagsp;
use Illuminate\Support\Facades\DB;
use App\ProductsTagsp;
use App\Manufacturer;
use App\ProductsAttributes;
use App\Review;

class ProductController extends Controller
{
    public function viewProducts()
    {
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
            if ($tagsp_counter < 20) {
                $tags_working[] = $tagp->tagsp_id;
                $tagsp_counter++;
            } else {
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
        $products = Product::where('id', '>', 0);

        // get paginate
        if (!empty(request('paginate_by'))) {
            $paginate_by = request('paginate_by');
        } else {
            $paginate_by = 9;
        }
        $paginate = $paginate_by;
        $queries = [];

        // Get search requests
        if (!empty(request('search_text'))) {
            // save queries
            $queries['search_text'] = request('search_text');

            // filter products
            $products = $products->where('name', 'LIKE', '%' . request('search_text') . '%')->orWhere('description', 'LIKE', '%' . request('search_text') . '%');
            $search_text = request('search_text');
        } else {
            $search_text = '';
        }

        // Get category requests
        if (!empty(request('category_id'))) {
            // Get root category and parent categories
            foreach (request('category_id') as $item) {
                $categories_parent = Category::where(['parent_id' => $item])->get();
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
        } else {
            $category_id = [];
        }

        // Get tag requests
        $tags_in = [];
        if (!empty(request('tag_id'))) {
            // Get products_tagsp
            $products_tags = ProductsTagsp::where(['tagsp_id' => request('tag_id')])->get();
            foreach ($products_tags as $product_tag) {
                $tags_in[] = $product_tag->product_id;
            }
            // filter products
            $products = $products->whereIn('id', $tags_in);
            // save queries
            $queries['tag'] = request('tag_id');
            $tag_id = request('tag_id');
        } else {
            $tag_id = '';
        }

        // Get manufacturer request
        if (!empty(request('manufacturer_id'))) {
            // Get products by manufacturer
            $manufacturer_id = request('manufacturer_id');
            $products = $products->where('manufacturer_id', $manufacturer_id);
        } else {
            $manufacturer_id = '';
        }

        // sorting
        // Sorting products
        if (request()->has('order_by')) {
            if (request('order_by') == 'order_by_price_desc') {
                $products = $products->orderBy('price', 'asc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_price_asc') {
                $products = $products->orderBy('price', 'desc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_name_asc') {
                $products = $products->orderBy('name', 'asc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_name_desc') {
                $products = $products->orderBy('name', 'desc');
                $queries['order_by'] = request('order_by');
            }
            $order_by = request('order_by');
        } else {
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
            'manufacturer_id' => $manufacturer_id,
            'search_text' => $search_text
        ]);
    }

    /** start view product */
    public function isProductInCategories($categories_id = array(), $prod_categories_id = array())
    {
        if ($categories_id[0] != "") {
            if ($prod_categories_id[0] != 0) {
                foreach ($prod_categories_id as $prod_category_id) {
                    if (in_array($prod_category_id, $categories_id)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function viewProduct(Request $request, $id = null)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $product = Product::where(['id' => $id])->first();
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

        // get manufacturer
        $manufacturer = Manufacturer::where(['id' => $product->manufacturer_id])->first();
        if (!empty($manufacturer)) {
            $manufacturer_name = $manufacturer->name;
            $manufacturer_id = $manufacturer->id;
        } else {
            $manufacturer_name = '';
            $manufacturer_id = 0;
        }

        // get attributes
        $products_attributes = ProductsAttributes::where(['product_id' => $product->id])->get();

        // get reviews
        $reviews = Review::where(['product_id' => $product->id])->get();

        // get featured products
        $featured_products = Product::where(['isfeatured' => 1])->take(10)->get();

        return view('products.view_product')->with([
            'title' => $product->meta_title . ' | Авалон',
            'description' => $product->meta_description,
            'keywords' => $product->meta_keywords,
            'root_categories' => $root_categories,
            'product' => $product,
            'tagsp' => $tagsp,
            'all_tagsp' => $all_tagsp,
            'product_category' => $product_category,
            'manufacturer_name' => $manufacturer_name,
            'manufacturer_id' => $manufacturer_id,
            'products_attributes' => $products_attributes,
            'reviews' => $reviews,
            'featured_products' => $featured_products
        ]);
    }
    /** end view product */

    public function addToCart(Request $request)
    {
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_quantity'))) {
            $product_id = $request->input('product_id');
            $product_quantity = $request->input('product_quantity');
            $product = Product::where(['id' => $product_id])->first();

            $cart_session = array();

            if (null != $request->session()->get('cart_session')) { //ima nalicna cart
                $cart_session = $request->session()->get('cart_session'); //get current cart info
                $cart_id = $cart_session['cart_id'];
                //add new item
                // check if exist
                if (!empty($cart_session['items'])) {
                    $current_item = 0;
                    $iscart = true;
                    foreach ($cart_session['items'] as $cart_item) {
                        if ($cart_item['product_id'] == $product_id) {
                            $cart_session['items'][$current_item]['total_price'] = floatval($cart_item['total_price']) + floatval($product_quantity) * floatval($product->price); //add new item total_price
                            $cart_session['items'][$current_item]['product_quantity'] = intval($cart_item['product_quantity']) + intval($product_quantity); //add new item product_quantity
                            $iscart = false;
                        }
                        $current_item++;
                    }
                    if ($iscart) {
                        $item['total_price'] = floatval($product_quantity) * floatval($product->price); //add new item total_price
                        $item['product_name'] = $product->name; //add new item product_name
                        $item['product_quantity'] = intval($product_quantity); //add new item product_quantity
                        $item['product_description'] = $product->description; //add new item product_description
                        $item['product_code'] = $product->code; //add new item product_code
                        $item['product_id'] = $product_id; //add new item product_code
                        //add new item
                        $cart_session['items'][] = $item;
                    }
                } else {
                    $item['total_price'] = floatval($product_quantity) * floatval($product->price); //add new item total_price
                    $item['product_name'] = $product->name; //add new item product_name
                    $item['product_quantity'] = intval($product_quantity); //add new item product_quantity
                    $item['product_description'] = $product->description; //add new item product_description
                    $item['product_code'] = $product->code; //add new item product_code
                    $item['product_id'] = $product_id; //add new item product_code
                    //add new item
                    $cart_session['items'][] = $item;
                }
            } else { // niama nalicna cart
                $cart_id = $request->session()->getId(); //set new cart info
                $cart_session['cart_id'] = $cart_id; //set new cart id
                //set new item
                $item['total_price'] = floatval($product_quantity) * floatval($product->price); //add new item total_price
                $item['product_name'] = $product->name; //add new item product_name
                $item['product_quantity'] = intval($product_quantity); //add new item product_quantity
                $item['product_description'] = $product->description; //add new item product_description
                $item['product_code'] = $product->code; //add new item product_code
                $item['product_id'] = $product_id; //add new item product_code
                $cart_session['items'][] = $item; //add new item
            }
            $request->session()->put('cart_session', $cart_session);
            $response = array(
                'status' => 'success'
            );
        } else {
            $response = array(
                'status' => 'unsuccess'
            );
        }

        return response()->json($response);
    }

    public function changeCartQuantity(Request $request)
    {
        $response = array(
            'status' => 'unsuccess'
        );
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_quantity')) && ($request->input('product_quantity') > 0)) {
            $product_id = $request->input('product_id');
            $product_quantity = $request->input('product_quantity');
            $product = Product::where(['id' => $product_id])->first();

            $cart_session = array();

            if (null != $request->session()->get('cart_session')) { //ima nalicna cart
                $cart_session = $request->session()->get('cart_session'); //get current cart info
                $cart_id = $cart_session['cart_id'];
                // check if exist
                if (!empty($cart_session['items'])) {
                    $current_item = 0;
                    foreach ($cart_session['items'] as $cart_item) {
                        if ($cart_item['product_id'] == $product_id) {
                            $cart_session['items'][$current_item]['total_price'] = floatval($product_quantity) * floatval($product->price); //add new item total_price
                            $cart_session['items'][$current_item]['product_name'] = $product->name; //add new item product_name
                            $cart_session['items'][$current_item]['product_quantity'] = intval($product_quantity); //add new item product_quantity
                            $cart_session['items'][$current_item]['product_description'] = $product->description;
                            $cart_session['items'][$current_item]['product_code'] = $product->code;
                            $cart_session['items'][$current_item]['product_id'] = $product_id;
                        }
                        $current_item++;
                    }
                    $request->session()->put('cart_session', $cart_session);
                    $response = array(
                        'status' => 'success'
                    );
                }
            }
        }

        return response()->json($response);
    }
}
