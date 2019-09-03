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
    
            ///////////////////////////////////////////////////////////////////////////
            $result3 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 1, 0);
            $tbipayment_mesecna_3 = $result3['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_3 = $result3['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_3 = $result3['tbipayment_gpr'];

            $result6 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 3, 0);
            $tbipayment_mesecna_6 = $result6['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_6 = $result6['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_6 = $result6['tbipayment_gpr'];

            $result9 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 4, 0);
            $tbipayment_mesecna_9 = $result9['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_9 = $result9['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_9 = $result9['tbipayment_gpr'];

            $result12 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 5, 0);
            $tbipayment_mesecna_12 = $result12['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_12 = $result12['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_12 = $result12['tbipayment_gpr'];

            $result15 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 6, 0);
            $tbipayment_mesecna_15 = $result15['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_15 = $result15['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_15 = $result15['tbipayment_gpr'];

            $result18 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 7, 0);
            $tbipayment_mesecna_18 = $result18['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_18 = $result18['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_18 = $result18['tbipayment_gpr'];

            $result24 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 8, 0);
            $tbipayment_mesecna_24 = $result24['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_24 = $result24['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_24 = $result24['tbipayment_gpr'];

            $result30 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 9, 0);
            $tbipayment_mesecna_30 = $result30['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_30 = $result30['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_30 = $result30['tbipayment_gpr'];

            $result36 = $this->getTbiCalculation(TBIPAYMENT_LIVEURL, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, 10, 0);
            $tbipayment_mesecna_36 = $result36['tbipayment_mesecna'];
            $tbipayment_obshtozaplashtane_input_36 = $result36['tbipayment_obshtozaplashtane_input'];
            $tbipayment_gpr_36 = $result36['tbipayment_gpr'];
        }
        /** TBI Bank */

        /** Pariba */
        $PricingSchemes = null;
        $PricingVariants = null;
        $PricingVariantId = null;
        $CreditPropositions = null;
        $CurrentCreditProposition = null;
        $merchantId = '421370';
        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';
        $downpayment = "0.00";
        $installment = "0.00";

        $goods = '';
        $category_id = '40';
        $goods_objects = $this->CalculateGoodTypes($category_id);
        foreach ($goods_objects as $good_object) {
            $goods .= (string) $good_object->GoodTypeId . ',';
        }
        $goods = rtrim($goods, ',');

        $price = number_format($product->price, 2, '.', '');
        $downpayment = "0.00";
        $installment = "0.00";

        $PricingSchemes = $this->CalculatePricingSchemes($goods, $price, $downpayment);
        
        if (sizeof($PricingSchemes) > 0) {
            $curr_shemaId = (string) $PricingSchemes[0]->PricingSchemeId;
            foreach ($PricingSchemes as $PricingScheme) {
                
                if ((string) $PricingScheme->PricingSchemeId == '1967'){
                    $curr_shemaId = '1967';
                }
            }
        } else {
            $curr_shemaId = '0';
        }
        
        /** test */
        $creditjetapi_env = 'https://ws-test.bnpparibas-pf.bg/ServicesPricing/GetAvailablePricingVariants/';
        /** real */
        //$creditjetapi_env = 'https://ws.bnpparibas-pf.bg/ServicesPricing/GetAvailablePricingVariants/';
        $schemeId = $curr_shemaId;
        $url = $creditjetapi_env . $merchantId . '/' . $goods . '/' . $price . '/' . $downpayment . '/' . $installment . '/' . $schemeId;
        $curl = curl_init();
        $options = array(
            CURLOPT_RETURNTRANSFER => TRUE, // Връщане на орговор
            CURLOPT_HEADER => FALSE, // Не връщай headers
            CURLOPT_FOLLOWLOCATION => FALSE, // Следвай пренасочвания
            CURLOPT_ENCODING => '', // Всички кодировки
            CURLOPT_USERAGENT => 'MerchantPos', // Представяне
            CURLOPT_AUTOREFERER => FALSE, // Показвай референция при пренасочване
            CURLOPT_SSL_VERIFYHOST => FALSE, // SSL верифициране на host
            CURLOPT_SSL_VERIFYPEER => FALSE, // SSL верифициране peer
            CURLOPT_NOBODY => FALSE,
            CURLOPT_CONNECTTIMEOUT => 3, // Време за изчакване при свързване
            CURLOPT_TIMEOUT => 5, // Време за изчакване на отговор
            CURLOPT_SSLCERT => $cert, // Клиентски сертификат
            CURLOPT_SSLCERTTYPE => 'PEM', // Разширение на клиентски сертификат
            CURLOPT_SSLCERTPASSWD => '',
            CURLOPT_SSLKEY => $key, // Клиентски частен ключ
            CURLOPT_SSLKEYTYPE => 'PEM', // Разширение на клиентски ключ
            CURLOPT_SSLKEYPASSWD => $password, // Парола на клиентски ключ
            CURLOPT_SSLVERSION => 1,
            CURLOPT_URL => $url
        );
        curl_setopt_array($curl, $options);
        $content = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($code == 200) {
            $oXML = new \SimpleXMLElement($content);
            
            if ($oXML->ErrorCode == 0) {
                $PricingVariants = $oXML->Data->PricingVariant;
                foreach ($PricingVariants as $variant) {
                    $Maturity = $variant->Maturity;
                    $PricingVariantId = $variant->PricingVariantId;
                    $CreditPropositions[] = $this->CalculateLoan($goods, $price, "0.00", $PricingVariantId);
                    // //////////////////////// todo
                }
                $jet_gpr_3 = 0;
                $jet_obshtozaplashtane_input_3 = 0;
                $jet_mesecna_3 = 0;
                $jet_gpr_6 = 0;
                $jet_obshtozaplashtane_input_6 = 0;
                $jet_mesecna_6 = 0;
                $jet_gpr_9 = 0;
                $jet_obshtozaplashtane_input_9 = 0;
                $jet_mesecna_9 = 0;
                $jet_gpr_12 = 0;
                $jet_obshtozaplashtane_input_12 = 0;
                $jet_mesecna_12 = 0;
                $jet_gpr_15 = 0;
                $jet_obshtozaplashtane_input_15 = 0;
                $jet_mesecna_15 = 0;
                $jet_gpr_18 = 0;
                $jet_obshtozaplashtane_input_18 = 0;
                $jet_mesecna_18 = 0;
                $jet_gpr_24 = 0;
                $jet_obshtozaplashtane_input_24 = 0;
                $jet_mesecna_24 = 0;
                $jet_gpr_30 = 0;
                $jet_obshtozaplashtane_input_30 = 0;
                $jet_mesecna_30 = 0;
                $jet_gpr_36 = 0;
                $jet_obshtozaplashtane_input_36 = 0;
                $jet_mesecna_36 = 0;
                foreach ($CreditPropositions as $CreditProposition) {
                    if ((string)$CreditProposition->Maturity == '3'){
                        $jet_gpr_3 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_3 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_3 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '6'){
                        $jet_gpr_6 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_6 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_6 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '9'){
                        $jet_gpr_9 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_9 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_9 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '12'){
                        $jet_gpr_12 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_12 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_12 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '15'){
                        $jet_gpr_15 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_15 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_15 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '18'){
                        $jet_gpr_18 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_18 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_18 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '24'){
                        $jet_gpr_24 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_24 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_24 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '30'){
                        $jet_gpr_30 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_30 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_30 = (float)$CreditProposition->InstallmentAmount;
                    }
                    if ((string)$CreditProposition->Maturity == '36'){
                        $jet_gpr_36 = (float)$CreditProposition->APR;
                        $jet_obshtozaplashtane_input_36 = (float)$CreditProposition->TotalRepaymentAmount;
                        $jet_mesecna_36 = (float)$CreditProposition->InstallmentAmount;
                    }
                }
            }
        }
        curl_close($curl);
        // Get AvailablePricingVariants//

        /** Pariba */

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
            'tbipayment_gpr_36' => $tbipayment_gpr_36,
            'jet_gpr_3' => $jet_gpr_3,
            'jet_obshtozaplashtane_input_3' => $jet_obshtozaplashtane_input_3,
            'jet_mesecna_3' => $jet_mesecna_3,
            'jet_gpr_6' => $jet_gpr_6,
            'jet_obshtozaplashtane_input_6' => $jet_obshtozaplashtane_input_6,
            'jet_mesecna_6' => $jet_mesecna_6,
            'jet_gpr_9' => $jet_gpr_9,
            'jet_obshtozaplashtane_input_9' => $jet_obshtozaplashtane_input_9,
            'jet_mesecna_9' => $jet_mesecna_9,
            'jet_gpr_12' => $jet_gpr_12,
            'jet_obshtozaplashtane_input_12' => $jet_obshtozaplashtane_input_12,
            'jet_mesecna_12' => $jet_mesecna_12,
            'jet_gpr_15' => $jet_gpr_15,
            'jet_obshtozaplashtane_input_15' => $jet_obshtozaplashtane_input_15,
            'jet_mesecna_15' => $jet_mesecna_15,
            'jet_gpr_18' => $jet_gpr_18,
            'jet_obshtozaplashtane_input_18' => $jet_obshtozaplashtane_input_18,
            'jet_mesecna_18' => $jet_mesecna_18,
            'jet_gpr_24' => $jet_gpr_24,
            'jet_obshtozaplashtane_input_24' => $jet_obshtozaplashtane_input_24,
            'jet_mesecna_24' => $jet_mesecna_24,
            'jet_gpr_30' => $jet_gpr_30,
            'jet_obshtozaplashtane_input_30' => $jet_obshtozaplashtane_input_30,
            'jet_mesecna_30' => $jet_mesecna_30,
            'jet_gpr_36' => $jet_gpr_36,
            'jet_obshtozaplashtane_input_36' => $jet_obshtozaplashtane_input_36,
            'jet_mesecna_36' => $jet_mesecna_36
        ]);
    }

    public function getTbiCalculation($tbi_liveurl, $tbipayment_unicid, $tbipayment_price, $is4m, $is4m_pv, $is5m, $is5m_pv, $is6m, $is6m_pv, $is9m, $is9m_pv, $tbi_purcent_default, $tbipayment_parva_input){
        $tbipayment_ch = curl_init();
        curl_setopt($tbipayment_ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($tbipayment_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($tbipayment_ch, CURLOPT_URL, $tbi_liveurl . '/function/getcalculation.php?cid='.$tbipayment_unicid.'&tbipayment_price='.$tbipayment_price.'&is4m='.$is4m.'&is4m_pv='.$is4m_pv.'&is5m='.$is5m.'&is5m_pv='.$is5m_pv.'&is6m='.$is6m.'&is6m_pv='.$is6m_pv.'&is9m='.$is9m.'&is9m_pv='.$is9m_pv.'&tbi_purcent_default='.$tbi_purcent_default.'&tbipayment_parva_input='.$tbipayment_parva_input);
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

    public function CalculateGoodTypes($category)
    {
        /** test */
        $creditjetapi_env = 'https://ws-test.bnpparibas-pf.bg/ServicesPricing/GetGoodTypes/';
        /** real */
        //$creditjetapi_env = 'https://ws.bnpparibas-pf.bg/ServicesPricing/GetGoodTypes/';
        
        $merchantId = '421370';
        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';

        // AvailablePricingSchemes//
        $url = $creditjetapi_env . $category;
        $curl = curl_init();
        $options = array(
            CURLOPT_RETURNTRANSFER => TRUE, // Връщане на орговор
            CURLOPT_HEADER => FALSE, // Не връщай headers
            CURLOPT_FOLLOWLOCATION => FALSE, // Следвай пренасочвания
            CURLOPT_ENCODING => '', // Всички кодировки
            CURLOPT_USERAGENT => 'MerchantPos', // Представяне
            CURLOPT_AUTOREFERER => FALSE, // Показвай референция при пренасочване
            CURLOPT_SSL_VERIFYHOST => FALSE, // SSL верифициране на host
            CURLOPT_SSL_VERIFYPEER => FALSE, // SSL верифициране peer
            CURLOPT_NOBODY => FALSE,
            CURLOPT_CONNECTTIMEOUT => 3, // Време за изчакване при свързване
            CURLOPT_TIMEOUT => 5, // Време за изчакване на отговор
            CURLOPT_SSLCERT => $cert, // Клиентски сертификат
            CURLOPT_SSLCERTTYPE => 'PEM', // Разширение на клиентски сертификат
            CURLOPT_SSLCERTPASSWD => '',
            CURLOPT_SSLKEY => $key, // Клиентски частен ключ
            CURLOPT_SSLKEYTYPE => 'PEM', // Разширение на клиентски ключ
            CURLOPT_SSLKEYPASSWD => $password, // Парола на клиентски ключ
            CURLOPT_SSLVERSION => 1,
            CURLOPT_URL => $url
        );
        curl_setopt_array($curl, $options);
        $content = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $AvailableGoodTypes = null;
        if ($code == 200) {
            $oXML = new \SimpleXMLElement($content);
            if ($oXML->ErrorCode == 0) {
                $AvailableGoodTypes = $oXML->Data->GoodType;
                return $AvailableGoodTypes;
            }
        }
        curl_close($curl);
        return $AvailableGoodTypes;
    }

    public function CalculatePricingSchemes($goods, $price, $downpayment)
    {
        /** test */
        $creditjetapi_env = 'https://ws-test.bnpparibas-pf.bg/ServicesPricing/GetAvailablePricingSchemes/';
        /** real */
        //$creditjetapi_env = 'https://ws.bnpparibas-pf.bg/ServicesPricing/GetAvailablePricingSchemes/';

        $merchantId = '421370';
        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';

        // AvailablePricingSchemes//
        $url = $creditjetapi_env . $merchantId . '/' . $goods . '/' . $price . '/' . $downpayment;
        $curl = curl_init();
        $options = array(
            CURLOPT_RETURNTRANSFER => TRUE, // Връщане на орговор
            CURLOPT_HEADER => FALSE, // Не връщай headers
            CURLOPT_FOLLOWLOCATION => FALSE, // Следвай пренасочвания
            CURLOPT_ENCODING => '', // Всички кодировки
            CURLOPT_USERAGENT => 'MerchantPos', // Представяне
            CURLOPT_AUTOREFERER => FALSE, // Показвай референция при пренасочване
            CURLOPT_SSL_VERIFYHOST => FALSE, // SSL верифициране на host
            CURLOPT_SSL_VERIFYPEER => FALSE, // SSL верифициране peer
            CURLOPT_NOBODY => FALSE,
            CURLOPT_CONNECTTIMEOUT => 3, // Време за изчакване при свързване
            CURLOPT_TIMEOUT => 5, // Време за изчакване на отговор
            CURLOPT_SSLCERT => $cert, // Клиентски сертификат
            CURLOPT_SSLCERTTYPE => 'PEM', // Разширение на клиентски сертификат
            CURLOPT_SSLCERTPASSWD => '',
            CURLOPT_SSLKEY => $key, // Клиентски частен ключ
            CURLOPT_SSLKEYTYPE => 'PEM', // Разширение на клиентски ключ
            CURLOPT_SSLKEYPASSWD => $password, // Парола на клиентски ключ
            CURLOPT_SSLVERSION => 1,
            CURLOPT_URL => $url
        );
        curl_setopt_array($curl, $options);
        $content = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $AvailablePricingSchemes = [];
        if ($code == 200) {
            $oXML = new \SimpleXMLElement($content);
            if ($oXML->ErrorCode == 0) {
                foreach ($oXML->Data->PricingScheme as $PricingScheme) {
                    $AvailablePricingSchemes[] = $PricingScheme;
                }
                return $AvailablePricingSchemes;
            }
        }
        curl_close($curl);
        return $AvailablePricingSchemes;
        // AvailablePricingSchemes//
    }

    public function CalculateLoan($goods, $price, $downpayment, $variantId)
    {
        /** test */
        $creditjetapi_env = 'https://ws-test.bnpparibas-pf.bg/ServicesPricing/CalculateLoan/';
        /** real */
        //$creditjetapi_env = 'https://ws.bnpparibas-pf.bg/ServicesPricing/CalculateLoan/';

        $merchantId = '421370';
        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';

        // CalculateLoan//
        $url = $creditjetapi_env . $merchantId . '/' . $goods . '/' . $price . '/' . $downpayment . '/' . $variantId;
        $curl = curl_init();
        $options = array(
            CURLOPT_RETURNTRANSFER => TRUE, // Връщане на орговор
            CURLOPT_HEADER => FALSE, // Не връщай headers
            CURLOPT_FOLLOWLOCATION => FALSE, // Следвай пренасочвания
            CURLOPT_ENCODING => '', // Всички кодировки
            CURLOPT_USERAGENT => 'MerchantPos', // Представяне
            CURLOPT_AUTOREFERER => FALSE, // Показвай референция при пренасочване
            CURLOPT_SSL_VERIFYHOST => FALSE, // SSL верифициране на host
            CURLOPT_SSL_VERIFYPEER => FALSE, // SSL верифициране peer
            CURLOPT_NOBODY => FALSE,
            CURLOPT_CONNECTTIMEOUT => 3, // Време за изчакване при свързване
            CURLOPT_TIMEOUT => 5, // Време за изчакване на отговор
            CURLOPT_SSLCERT => $cert, // Клиентски сертификат
            CURLOPT_SSLCERTTYPE => 'PEM', // Разширение на клиентски сертификат
            CURLOPT_SSLCERTPASSWD => '',
            CURLOPT_SSLKEY => $key, // Клиентски частен ключ
            CURLOPT_SSLKEYTYPE => 'PEM', // Разширение на клиентски ключ
            CURLOPT_SSLKEYPASSWD => $password, // Парола на клиентски ключ
            CURLOPT_SSLVERSION => 1,
            CURLOPT_URL => $url
        );
        curl_setopt_array($curl, $options);
        $content = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($code == 200) {
            $oXML = new \SimpleXMLElement($content);
            $CreditPropositions = null;
            if ($oXML->ErrorCode == 0) {
                $CreditPropositions = $oXML->Data->CreditProposition;
                return $CreditPropositions;
            }
        }
        curl_close($curl);
        return $CreditPropositions;
        // CalculateLoan//
    }

}
