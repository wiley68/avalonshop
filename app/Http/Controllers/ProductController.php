<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsCategories;
use Illuminate\Support\Facades\DB;
use App\Manufacturer;
use App\News;
use App\ProductsAttributes;
use App\Property;
use App\Review;
use App\Support;

class ProductController extends Controller
{
    public function viewProducts(){
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
        if (!empty(request('category_id'))) {
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
        $instock = ['в наличност', 'минимално количество'];
        if (!empty(request('instock'))) {
            // Get products by instock
            $instock = json_decode(request('instock'));
        }
        $products = $products->whereIn('instock' , $instock);
        // save queries
        $queries['instock'] = request('instock');

        // Get price
        $products_min = $products->min('price');
        $products_max = $products->max('price');
        if (!empty(request('price_min')) && !empty(request('price_max'))) {
            // Get products by price_min
            $price_min = request('price_min');
            $price_max = request('price_max');
            $products = $products->where('price' , '>=' , $price_min)->where('price' , '<=' , $price_max);
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
        $featured_products = Product::where(['isfeatured' => 1])->where(['instock' => 'в наличност'])->take(10)->get();

        // get images
        $imgsrc1 = $product->imgurl1;
        $imgsrc2 = $product->imgurl2;
        $imgsrc3 = $product->imgurl3;
        $imgsrc4 = $product->imgurl4;

        $result_tbi['tbipayment_meseci_new'] = 0;
        $result_tbi['tbipayment_mesecna'] = 0;
        $properties = Property::where('id', '>', 0)->first();
        if ($properties->calculators && $properties->tbibank) {
            $result_tbi = $this->changeCreditVnoskaStatic($product->id, 1);
        }

        $support = Support::all()->random();
        $news = News::all()->random();

        return view('products.view_product')->with([
            'title' => $product->meta_title . ' | Авалон',
            'description' => $product->meta_description,
            'keywords' => $product->meta_keywords,
            'root_categories' => $root_categories,
            'product' => $product,
            'product_category' => $product_category,
            'manufacturer_name' => $manufacturer_name,
            'manufacturer_id' => $manufacturer_id,
            'products_attributes' => $products_attributes,
            'reviews' => $reviews,
            'featured_products' => $featured_products,
            'imgsrc1' => $imgsrc1,
            'imgsrc2' => $imgsrc2,
            'imgsrc3' => $imgsrc3,
            'imgsrc4' => $imgsrc4,
            'tbipayment_meseci_new' => $result_tbi['tbipayment_meseci_new'],
            'tbipayment_mesecna' => $result_tbi['tbipayment_mesecna'],
            'properties' => $properties,
            'support' => $support,
            'news' => $news
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

    public function changeCreditVnoskaAjax(Request $request)
    {
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_quantity'))) {
            $result = $this->changeCreditVnoskaStatic($request->input('product_id'), $request->input('product_quantity'));
            $tbipayment_mesecna = number_format($result['tbipayment_mesecna'], 2, ".", "");
            $tbipayment_meseci_new = $result['tbipayment_meseci_new'];

            $response = array(
                'status' => 'success',
                'tbipayment_mesecna' => $tbipayment_mesecna,
                'tbipayment_meseci_new' => $tbipayment_meseci_new
            );
        } else {
            $response = array(
                'status' => 'unsuccess',
                'tbipayment_mesecna' => 0,
                'tbipayment_meseci_new' => 0
            );
        }

        return response()->json($response);
    }

    public function changeCreditVnoska($product_id=null, $product_quantity=null)
    {
        if (($product_id != null) && ($product_quantity != null)) {
            $tbipayment_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';
            $product = Product::where(['id' => $product_id])->first();
            $tbipayment_price = $product->price;
            $tbipayment_product_quantity = $product_quantity;
            $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $product_id])->first()->category_id])->first();
            $tbipayment_product_cats = $product_category->id;
            if (!defined('TBIPAYMENT_LIVEURL'))
                define('TBIPAYMENT_LIVEURL', 'https://api.tbibank.support');
            if (!defined('TBIPAYMENT_MOD_VERSION'))
                define('TBIPAYMENT_MOD_VERSION', '1.0.4');

            $tbi_ch = curl_init();
            curl_setopt($tbi_ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($tbi_ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($tbi_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/getparameters.php?cid=' . $tbipayment_unicid);
            $paramstbi = json_decode(curl_exec($tbi_ch), true);
            curl_close($tbi_ch);

            $tbi_4m = $paramstbi['tbi_4m'];
            $tbi_4m_min = $paramstbi['tbi_4m_min'];
            $tbi_4m_max = $paramstbi['tbi_4m_max'];
            $tbi_4m_pv = $paramstbi['tbi_4m_pv'];
            $tbi_5m = $paramstbi['tbi_5m'];
            $tbi_5m_min = $paramstbi['tbi_5m_min'];
            $tbi_5m_max = $paramstbi['tbi_5m_max'];
            $tbi_5m_pv = $paramstbi['tbi_5m_pv'];
            $tbi_6m = $paramstbi['tbi_6m'];
            $tbi_6m_min = $paramstbi['tbi_6m_min'];
            $tbi_6m_max = $paramstbi['tbi_6m_max'];
            $tbi_6m_pv = $paramstbi['tbi_6m_pv'];
            $tbi_9m = $paramstbi['tbi_9m'];
            $tbi_9m_min = $paramstbi['tbi_9m_min'];
            $tbi_9m_max = $paramstbi['tbi_9m_max'];
            $tbi_9m_pv = $paramstbi['tbi_9m_pv'];
            $tbi_purcent_default = $paramstbi['tbi_purcent_default'];

            $tbipayment_price = floatval($tbipayment_price) * floatval($tbipayment_product_quantity);

            if ($tbi_4m == "Yes") {
                $categories = explode('_', $paramstbi['tbi_4m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is4m = 'Yes';
                } else {
                    if (($tbi_4m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_4m_max)) {
                        $is4m = 'Yes';
                    } else {
                        $is4m = 'No';
                    }
                }
            } else {
                $is4m = 'No';
            }
            if ($tbi_4m_pv == "Yes") {
                $categories = explode('_', $paramstbi['tbi_4m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is4m_pv = 'Yes';
                } else {
                    if (($tbi_4m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_4m_max)) {
                        $is4m_pv = 'Yes';
                    } else {
                        $is4m_pv = 'No';
                    }
                }
            } else {
                $is4m_pv = 'No';
            }
            if ($tbi_5m == "Yes") {
                $categories = explode('_', $paramstbi['tbi_5m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is5m = 'Yes';
                } else {
                    if (($tbi_5m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_5m_max)) {
                        $is5m = 'Yes';
                    } else {
                        $is5m = 'No';
                    }
                }
            } else {
                $is5m = 'No';
            }
            if ($tbi_5m_pv == "Yes") {
                $categories = explode('_', $paramstbi['tbi_5m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is5m_pv = 'Yes';
                } else {
                    if (($tbi_5m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_5m_max)) {
                        $is5m_pv = 'Yes';
                    } else {
                        $is5m_pv = 'No';
                    }
                }
            } else {
                $is5m_pv = 'No';
            }
            if ($tbi_6m == "Yes") {
                $categories = explode('_', $paramstbi['tbi_6m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is6m = 'Yes';
                } else {
                    if (($tbi_6m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_6m_max)) {
                        $is6m = 'Yes';
                    } else {
                        $is6m = 'No';
                    }
                }
            } else {
                $is6m = 'No';
            }
            if ($tbi_6m_pv == "Yes") {
                $categories = explode('_', $paramstbi['tbi_6m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is6m_pv = 'Yes';
                } else {
                    if (($tbi_6m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_6m_max)) {
                        $is6m_pv = 'Yes';
                    } else {
                        $is6m_pv = 'No';
                    }
                }
            } else {
                $is6m_pv = 'No';
            }
            if ($tbi_9m == "Yes") {
                $categories = explode('_', $paramstbi['tbi_9m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is9m = 'Yes';
                } else {
                    if (($tbi_9m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_9m_max)) {
                        $is9m = 'Yes';
                    } else {
                        $is9m = 'No';
                    }
                }
            } else {
                $is9m = 'No';
            }
            if ($tbi_9m_pv == "Yes") {
                $categories = explode('_', $paramstbi['tbi_9m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)) {
                    $is9m_pv = 'Yes';
                } else {
                    if (($tbi_9m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_9m_max)) {
                        $is9m_pv = 'Yes';
                    } else {
                        $is9m_pv = 'No';
                    }
                }
            } else {
                $is9m_pv = 'No';
            }

            $useragent = $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
                $deviceis = "mobile";
            } else {
                $deviceis = "pc";
            }

            ///////////////////////////////////////////////////////////////////////////
            $tbipayment_ch = curl_init();
            curl_setopt($tbipayment_ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($tbipayment_ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($tbipayment_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/getcalculation.php?cid=' . $tbipayment_unicid . '&tbipayment_price=' . $tbipayment_price . '&is4m=' . $is4m . '&is4m_pv=' . $is4m_pv . '&is5m=' . $is5m . '&is5m_pv=' . $is5m_pv . '&is6m=' . $is6m . '&is6m_pv=' . $is6m_pv . '&is9m=' . $is9m . '&is9m_pv=' . $is9m_pv . '&tbi_purcent_default=' . $tbi_purcent_default . '&deviceis=' . $deviceis);
            $paramstbipayment = json_decode(curl_exec($tbipayment_ch), true);
            curl_close($tbipayment_ch);

            $tbipayment_mesecna = number_format($paramstbipayment['tbipayment_mesecna'], 2, ".", "");
            $tbipayment_meseci_new = $paramstbipayment['tbipayment_meseci_new'];

            $response = array(
                'status' => 'success',
                'tbipayment_mesecna' => $tbipayment_mesecna,
                'tbipayment_meseci_new' => $tbipayment_meseci_new
            );
        } else {
            $response = array(
                'status' => 'unsuccess',
                'tbipayment_mesecna' => 0,
                'tbipayment_meseci_new' => 0
            );
        }

        return $response;
    }

    public function changeCreditVnoskaStatic($product_id=null, $product_quantity=null)
    {
        if (($product_id != null) && ($product_quantity != null)) {
            $product = Product::where(['id' => $product_id])->first();
            $oskapiavane_12 = 0.015;
            $vnoska = (floatval($product->price) * floatval($product_quantity) * (1 + $oskapiavane_12 * 12)) / 12;
            $response = array(
                'status' => 'success',
                'tbipayment_mesecna' => number_format($vnoska, 2, ".", ""),
                'tbipayment_meseci_new' => 12
            );
        } else {
            $response = array(
                'status' => 'unsuccess',
                'tbipayment_mesecna' => 0,
                'tbipayment_meseci_new' => 0
            );
        }

        return $response;
    }

}
