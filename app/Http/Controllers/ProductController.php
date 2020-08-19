<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Mail\OneClickMail;
use App\ProductsCategories;
use Illuminate\Support\Facades\DB;
use App\Manufacturer;
use App\News;
use App\ProductsAttributes;
use App\Property;
use App\Review;
use App\Support;
use Illuminate\Support\Facades\Mail;
use App\OneClick;
use App\OneclicksProducts;

class ProductController extends Controller
{

    public function getBaseUrl(){
        $hostName = $_SERVER['HTTP_HOST']; 
        return 'https://'.$hostName;
    }

    public function viewProducts()
    {
        // get root categories
        $root_categories = Category::where(['parent_id' => 0])->get();

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
            $paginate_by = 15;
        }
        $paginate = $paginate_by;
        $queries = [];

        // Get search requests
        if (!empty(request('search_text'))) {
            // save queries
            $queries['search_text'] = request('search_text');

            // filter products
            $products = $products->where('name', 'LIKE', '%' . request('search_text') . '%')
                ->orWhere('description', 'LIKE', '%' . request('search_text') . '%')
                ->orWhere('code', 'LIKE', '%' . request('search_text') . '%')
                ->orWhere('short_description', 'LIKE', '%' . request('search_text') . '%');
            $search_text = request('search_text');
        } else {
            $search_text = '';
        }

        // Get category requests
        if (!empty(request('category_id')) && is_string(request('category_id'))) {
            // Get root category and parent categories
            $item = request('category_id');
            $categories_parent = Category::where(['parent_id' => $item])->get();
            $categories_in[] = $item;
            foreach ($categories_parent as $category_parent) {
                $categories_in[] = $category_parent->id;
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
            $category_id = "";
        }

        // Get manufacturer request
        if (!empty(request('manufacturer_id'))) {
            // Get products by manufacturer
            $manufacturer_id = request('manufacturer_id');
            $products = $products->where('manufacturer_id', $manufacturer_id);
            // save queries
            $queries['manufacturer_id'] = request('manufacturer_id');
        } else {
            $manufacturer_id = '';
        }

        // Get featured request
        if (!empty(request('featured'))) {
            // Get products by featured
            $featured = request('featured');
            $products = $products->where(['isfeatured' => 1]);
        } else {
            $featured = 0;
        }

        // Get instock request
        $instock = ['в наличност', 'ограничено количество'];
        if (!empty(request('instock'))) {
            // Get products by instock
            $instock = json_decode(request('instock'));
        }
        $products = $products->whereIn('instock', $instock);
        // save queries
        $queries['instock'] = request('instock');

        // Get price
        $products_min = $products->min('price');
        $products_max = $products->max('price');
        if (!empty(request('price_min')) && !empty(request('price_max'))) {
            // Get products by price_min
            $price_min = request('price_min');
            $price_max = request('price_max');
            $products = $products->where('price', '>=', $price_min)->where('price', '<=', $price_max);
            // save queries
            $queries['price_min'] = request('price_min');
            $queries['price_max'] = request('price_max');
        } else {
            $price_min = $products->min('price');
            $price_max = $products->max('price');
        }

        // sorting
        // Sorting products
        if (request()->has('order_by')) {
            if (request('order_by') == 'order_by_price_desc') {
                $products = $products->orderBy('price', 'desc');
                $queries['order_by'] = request('order_by');
            }
            if (request('order_by') == 'order_by_price_asc') {
                $products = $products->orderBy('price', 'asc');
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
            $products = $products->orderBy('price', 'asc');
            $queries['order_by'] = 'order_by_price_asc';
            $order_by = 'order_by_price_asc';
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
            'category_id' => $category_id,
            'order_by' => $order_by,
            'products_manufacturers' => $products_manufacturers,
            'manufacturer_id' => $manufacturer_id,
            'featured' => $featured,
            'search_text' => $search_text,
            'instock' => $instock,
            'products_min' => $products_min,
            'products_max' => $products_max,
            'price_min' => $price_min,
            'price_max' => $price_max
        ]);
    }

    /** start view product */
    public function viewProduct(Request $request, $id = null)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $product = Product::where(['code' => $id])->first();
        if (empty($product)) {
            return abort(404);
        }
        // test for me
        $ips = explode(",", env('MYIP'));
        if (!in_array(HelpController::getUserIP(), $ips)) {
            $product->visits += 1;
            $product->save();
        }

        $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $product->id])->first()->category_id])->first();

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
        $product_category = ProductsCategories::where(['product_id' => $product->id])->first()->category_id;
        $category = Category::where(['id' => $product_category])->first();
        $products_in = [];
        $products_categories = ProductsCategories::where(['category_id' => $product_category])->get();
        foreach ($products_categories as $product_category) {
            $products_in[] = $product_category->product_id;
        }
        $featured_products = Product::whereIn('id', $products_in)->orderBy('isfeatured', 'DESC')->take(10)->get();

        // get images
        $imgsrc1 = $product->imgurl1;
        $imgsrc2 = $product->imgurl2;
        $imgsrc3 = $product->imgurl3;
        $imgsrc4 = $product->imgurl4;

        $tbi_installment = 0;
        $tbi_installment_count = 0;
        $properties = Property::where('id', '>', 0)->first();
        if ($properties->calculators && $properties->tbibank) {
            $tbi_data = array(
                'name' => 'getParamsWithCalculations',
                'param' => array(
                    'unicid' => '1af4d77b-70a2-4771-a04b-1c6d63f07680',
                    'price' => $product->price,
                    'product_category' => '10'
                )
            );
            // Encript data
            $tbi_plaintext = json_encode($tbi_data);
            $tbi_publicKey = openssl_pkey_get_public(file_get_contents('keys/pub.pem'));
            $tbi_a_key = openssl_pkey_get_details($tbi_publicKey);
            $tbi_chunkSize = ceil($tbi_a_key['bits'] / 8) - 11;
            $tbi_output = '';
            while ($tbi_plaintext) {
                $tbi_chunk = substr($tbi_plaintext, 0, $tbi_chunkSize);
                $tbi_plaintext = substr($tbi_plaintext, $tbi_chunkSize);
                $tbi_encrypted = '';
                if (!openssl_public_encrypt($tbi_chunk, $tbi_encrypted, $tbi_publicKey)) {
                    die('Failed to encrypt data');
                }
                $tbi_output .= $tbi_encrypted;
            }
            openssl_free_key($tbi_publicKey);
            $tbi_output64 = base64_encode($tbi_output);
            // Encript data
            $tbi_ch = curl_init();
            curl_setopt_array($tbi_ch, array(
                CURLOPT_URL => "https://tbibank.support/api/index.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 2,
                CURLOPT_TIMEOUT => 5,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>     json_encode(array('data' => $tbi_output64)),
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "cache-control: no-cache"
                ),
            ));
            $responseapi = curl_exec($tbi_ch);
            $err = curl_error($tbi_ch);
            curl_close($tbi_ch);

            $api_obj = json_decode($responseapi);

            $tbi_installment = $api_obj->data->result->installment;
            $tbi_installment_count = $api_obj->data->result->installment_count;
        }

        $support = Support::all()->random();
        $news = News::all()->random();

        return view('products.view_product')->with([
            'title' => $product->meta_title . ' | Авалон',
            'description' => $product->meta_description,
            'keywords' => $product->meta_keywords,
            'root_categories' => $root_categories,
            'product' => $product,
            'product_category_id' => $category == null ? "" : $category->id,
            'product_category_name' => $category == null ? "" : $category->name,
            'manufacturer_name' => $manufacturer_name,
            'manufacturer_id' => $manufacturer_id,
            'products_attributes' => $products_attributes,
            'reviews' => $reviews,
            'featured_products' => $featured_products,
            'imgsrc1' => $imgsrc1,
            'imgsrc2' => $imgsrc2,
            'imgsrc3' => $imgsrc3,
            'imgsrc4' => $imgsrc4,
            'tbi_installment_count' => $tbi_installment_count,
            'tbi_installment' => $tbi_installment,
            'properties' => $properties,
            'support' => $support,
            'news' => $news,
            'baseurl' => $this->getBaseUrl()
        ]);
    }
    /** end view product */

    public function isProductInCategories($categories_id = array(), $products_id = array())
    {
        if ($categories_id[0] != "") {
            if ($products_id[0] != "") {
                foreach ($products_id as $product_id) {
                    if (in_array(strval($product_id->term_id), $categories_id)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

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

    public function oneClick(Request $request)
    {
        if ($request->method('post')) {
            if (!empty($request->input('phone'))) {
                if($request->input('product_id') && !empty($request->input('product_id'))){
                    $product = Product::where(['id' => $request->input('product_id')])->first();
                    // add oneclick to base
                    $oneclick = new OneClick();
                    $oneclick->phone = $request->input('phone');
                    $oneclick->save();
                    //add all
                    $oneclick_product = new OneclicksProducts();
                    $oneclick_product->product_id = $product->id;
                    $oneclick_product->oneclick_id = $oneclick->id;
                    $oneclick_product->quantity = 1;
                    $oneclick_product->save();
                    //to admin
                    $objMailAdmin = new \stdClass();
                    $objMailAdmin->receiver = 'Администратор Авалон Магазин';
                    $objMailAdmin->phone = $request->input('phone');
                    $objMailAdmin->product_name = $product->name;
                    $objMailAdmin->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');

                    Mail::to('home@avalonbg.com')->send(new OneClickMail($objMailAdmin));

                    return response()->json(['result' => 'success']);
                }
                if($request->input('product_ids') && !empty($request->input('product_ids'))){
                    $products = explode(" ", $request->input('product_ids'));
                    foreach($products as $product){
                        $product_info = Product::where(['id' => $product])->first();
                        $oneclick = new OneClick();
                        $oneclick->phone = $request->input('phone');
                        $oneclick->save();
                        //add all
                        $oneclick_product = new OneclicksProducts();
                        $oneclick_product->product_id = 1;
                        $oneclick_product->oneclick_id = $oneclick->id;
                        $oneclick_product->quantity = 1;
                        $oneclick_product->save();
                    }
                    return response()->json(['result' => 'success']);
                }
            }
        }
    }
}