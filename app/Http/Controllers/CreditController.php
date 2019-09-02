<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Request;
use App\ProductsCategories;

class CreditController extends Controller
{
    public function index(Request $request, $product_id = null, $product_qt = null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        if ($product_id != null){
            $product = Product::where(['id' => $product_id])->first();
        }else{
            $product = null;
        }

        $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $product_id])->first()->category_id])->first();

        /** TBI Bank */
        if ($product != null){
            $tbipayment_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';
            $tbipayment_price = $product->price;
            $tbipayment_product_quantity = $product_qt;
            $tbipayment_product_cats = $product_category->id;
            if (!defined('TBIPAYMENT_LIVEURL'))
                define('TBIPAYMENT_LIVEURL', 'https://api.tbibank.support');
    
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
    
            if ($tbi_4m == "Yes"){
                $categories = explode('_', $paramstbi['tbi_4m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is4m = 'Yes';
                }else{
                    if (($tbi_4m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_4m_max)){
                        $is4m = 'Yes';
                    }else{
                        $is4m = 'No';
                    }
                }
            }else{
                $is4m = 'No';
            }
            if ($tbi_4m_pv == "Yes"){
                $categories = explode('_', $paramstbi['tbi_4m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is4m_pv = 'Yes';
                }else{
                    if (($tbi_4m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_4m_max)){
                        $is4m_pv = 'Yes';
                    }else{
                        $is4m_pv = 'No';
                    }
                }
            }else{
                $is4m_pv = 'No';
            }
            if ($tbi_5m == "Yes"){
                $categories = explode('_', $paramstbi['tbi_5m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is5m = 'Yes';
                }else{
                    if (($tbi_5m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_5m_max)){
                        $is5m = 'Yes';
                    }else{
                        $is5m = 'No';
                    }
                }
            }else{
                $is5m = 'No';
            }
            if ($tbi_5m_pv == "Yes"){
                $categories = explode('_', $paramstbi['tbi_5m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is5m_pv = 'Yes';
                }else{
                    if (($tbi_5m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_5m_max)){
                        $is5m_pv = 'Yes';
                    }else{
                        $is5m_pv = 'No';
                    }
                }
            }else{
                $is5m_pv = 'No';
            }
            if ($tbi_6m == "Yes"){
                $categories = explode('_', $paramstbi['tbi_6m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is6m = 'Yes';
                }else{
                    if (($tbi_6m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_6m_max)){
                        $is6m = 'Yes';
                    }else{
                        $is6m = 'No';
                    }
                }
            }else{
                $is6m = 'No';
            }
            if ($tbi_6m_pv == "Yes"){
                $categories = explode('_', $paramstbi['tbi_6m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is6m_pv = 'Yes';
                }else{
                    if (($tbi_6m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_6m_max)){
                        $is6m_pv = 'Yes';
                    }else{
                        $is6m_pv = 'No';
                    }
                }
            }else{
                $is6m_pv = 'No';
            }
            if ($tbi_9m == "Yes"){
                $categories = explode('_', $paramstbi['tbi_9m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is9m = 'Yes';
                }else{
                    if (($tbi_9m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_9m_max)){
                        $is9m = 'Yes';
                    }else{
                        $is9m = 'No';
                    }
                }
            }else{
                $is9m = 'No';
            }
            if ($tbi_9m_pv == "Yes"){
                $categories = explode('_', $paramstbi['tbi_9m_categories']);
                if (CategoryController::isProductInCategories($categories, $tbipayment_product_cats)){
                    $is9m_pv = 'Yes';
                }else{
                    if (($tbi_9m_min <= $tbipayment_price) && ($tbipayment_price <= $tbi_9m_max)){
                        $is9m_pv = 'Yes';
                    }else{
                        $is9m_pv = 'No';
                    }
                }
            }else{
                $is9m_pv = 'No';
            }
    
            $useragent=$_SERVER['HTTP_USER_AGENT'];
            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
                $deviceis = "mobile";
            }else{
                $deviceis = "pc";
            }
    
            ///////////////////////////////////////////////////////////////////////////
            $result3 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, 1000, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 3, $deviceis);
            //dd(TBIPAYMENT_LIVEURL,$tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 3, $deviceis);
            //dd($result3);
            $tbipayment_mesecna_3 = $result3['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_3 = $result3['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_3 = $result3['tbipayment_gpr'];

            $result6 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 6, $deviceis);
            $tbipayment_mesecna_6 = $result6['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_6 = $result6['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_6 = $result6['tbipayment_gpr'];

            $result9 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 9, $deviceis);
            $tbipayment_mesecna_9 = $result9['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_9 = $result9['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_9 = $result9['tbipayment_gpr'];

            $result12 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 12, $deviceis);
            $tbipayment_mesecna_12 = $result12['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_12 = $result12['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_12 = $result12['tbipayment_gpr'];

            $result15 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 15, $deviceis);
            $tbipayment_mesecna_15 = $result15['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_15 = $result15['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_15 = $result15['tbipayment_gpr'];

            $result18 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 18, $deviceis);
            $tbipayment_mesecna_18 = $result18['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_18 = $result18['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_18 = $result18['tbipayment_gpr'];

            $result24 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 24, $deviceis);
            $tbipayment_mesecna_24 = $result24['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_24 = $result24['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_24 = $result24['tbipayment_gpr'];

            $result30 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 30, $deviceis);
            $tbipayment_mesecna_30 = $result30['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_30 = $result30['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_30 = $result30['tbipayment_gpr'];

            $result36 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 36, $deviceis);
            $tbipayment_mesecna_36 = $result36['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_36 = $result36['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_36 = $result36['tbipayment_gpr'];
        }
        /** TBI Bank */

        return view('credit.credit')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор',
            'root_categories' => $root_categories,
            'product' => $product,
            'product_qt' => $product_qt,
            'tbipayment_mesecna_3' => $tbipayment_mesecna_3,
            'tbipayment_obshtozaplashtane_input_3' => $tbipayment_obshtozaplashtane_input_3,
            'tbipayment_gpr_3' => $tbipayment_gpr_3,
            'tbipayment_mesecna_6' => $tbipayment_mesecna_6,
            'tbipayment_obshtozaplashtane_input_6' => $tbipayment_obshtozaplashtane_input_6,
            'tbipayment_gpr_6' => $tbipayment_gpr_6,
            'tbipayment_mesecna_9' => $tbipayment_mesecna_9,
            'tbipayment_obshtozaplashtane_input_9' => $tbipayment_obshtozaplashtane_input_9,
            'tbipayment_gpr_9' => $tbipayment_gpr_9,
            'tbipayment_mesecna_12' => $tbipayment_mesecna_12,
            'tbipayment_obshtozaplashtane_input_12' => $tbipayment_obshtozaplashtane_input_12,
            'tbipayment_gpr_12' => $tbipayment_gpr_12,
            'tbipayment_mesecna_15' => $tbipayment_mesecna_15,
            'tbipayment_obshtozaplashtane_input_15' => $tbipayment_obshtozaplashtane_input_15,
            'tbipayment_gpr_15' => $tbipayment_gpr_15,
            'tbipayment_mesecna_18' => $tbipayment_mesecna_18,
            'tbipayment_obshtozaplashtane_input_18' => $tbipayment_obshtozaplashtane_input_18,
            'tbipayment_gpr_18' => $tbipayment_gpr_18,
            'tbipayment_mesecna_24' => $tbipayment_mesecna_24,
            'tbipayment_obshtozaplashtane_input_24' => $tbipayment_obshtozaplashtane_input_24,
            'tbipayment_gpr_24' => $tbipayment_gpr_24,
            'tbipayment_mesecna_30' => $tbipayment_mesecna_30,
            'tbipayment_obshtozaplashtane_input_30' => $tbipayment_obshtozaplashtane_input_30,
            'tbipayment_gpr_30' => $tbipayment_gpr_30,
            'tbipayment_mesecna_36' => $tbipayment_mesecna_36,
            'tbipayment_obshtozaplashtane_input_36' => $tbipayment_obshtozaplashtane_input_36,
            'tbipayment_gpr_36' => $tbipayment_gpr_36
        ]);
    }

    public function getTbiCalculation($tbi_liveurl, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, $tbi_purcent_default, $deviceis){
        $tbipayment_ch = curl_init();
        curl_setopt($tbipayment_ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($tbipayment_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($tbipayment_ch, CURLOPT_URL, $tbi_liveurl . '/function/getcalculation.php?cid='.$tbipayment_unicid.'&tbipayment_price='.$tbipayment_price.'&is4m='.$is4m.'&is4m_pv='.$is4m_pv.'&is5m='.$is5m.'&is5m_pv='.$is5m_pv.'&is6m='.$is6m.'&is6m_pv='.$is6m_pv.'&is9m='.$is9m.'&is9m_pv='.$is9m_pv.'&tbi_purcent_default='.$tbi_purcent_default.'&deviceis='.$deviceis);
        $paramstbipayment = json_decode(curl_exec($tbipayment_ch), true);
        curl_close($tbipayment_ch);
        return [
            'tbipayment_mesecna' => number_format($paramstbipayment['tbipayment_mesecna'], 2, ".", ""),
            'tbipayment_oskapiavane' => number_format($paramstbipayment['tbipayment_oskapiavane'], 2, ".", ""),
            'tbipayment_obshto_input' => number_format($paramstbipayment['tbipayment_obshto_input'], 2, ".", ""),
            'tbipayment_obshtozaplashtane_input' => number_format($paramstbipayment['tbipayment_obshtozaplashtane_input'], 2, ".", ""),
            'tpaymentpurcent' => $paramstbipayment['tpaymentpurcent'],
            'tbipayment_gpr' => number_format($paramstbipayment['tbipayment_gpr'], 2, ".", "")
        ];
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
