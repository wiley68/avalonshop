<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\ProductsCategories;
use App\Property;
use Auth;
use App\Order;
use App\Suborder;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderOk;
use App\Mail\OrderUser;

class CreditController extends Controller
{
    public $jet_merchantId = '459024';
    //public $creditjetapi_env_server = 'https://ws.bnpparibas-pf.bg/ServicesPricing/';
    public $creditjetapi_env_server = 'https://ws-test.bnpparibas-pf.bg/ServicesPricing/';

    public $uni_unicid = "9ce5287c-c8d1-4a22-878c-1a9d42d7160a";
    public $uni_user = "Wiley68";
    public $uni_password = "Avatest";
    public $uni_categories_kop = 'POS COM 50';
    public $UNIPAYMENT_LIVEURL = 'https://unicreditconsumerfinancing.info';
    public $uni_service = "https://onlinetest.ucfin.bg/suos/api/otp/";
    //public $uni_service = "https://online.ucfin.bg/suos/api/otp/";
    public $uni_application = "https://onlinetest.ucfin.bg/sucf-online/Request/Start";
    //public $uni_application = "https://online.ucfin.bg/sucf-online/Request/Start";


    public function index(Request $request)
    {
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_qt'))) {
            $root_categories = Category::where(['parent_id' => 0])->get();
            $product = Product::where(['id' => $request->input('product_id')])->first();

            $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $request->input('product_id')])->first()->category_id])->first();
            $property = Property::where('id', '>', 0)->first();

            $tbipayment_mesecna_3 = 0;
            $tbipayment_obshtozaplashtane_input_3 = 0;
            $tbipayment_gpr_3 = 0;
            $tbipayment_glp_3 = 0;
            $tbipayment_mesecna_6 = 0;
            $tbipayment_obshtozaplashtane_input_6 = 0;
            $tbipayment_gpr_6 = 0;
            $tbipayment_glp_6 = 0;
            $tbipayment_mesecna_9 = 0;
            $tbipayment_obshtozaplashtane_input_9 = 0;
            $tbipayment_gpr_9 = 0;
            $tbipayment_glp_9 = 0;
            $tbipayment_mesecna_12 = 0;
            $tbipayment_obshtozaplashtane_input_12 = 0;
            $tbipayment_gpr_12 = 0;
            $tbipayment_glp_12 = 0;
            $tbipayment_mesecna_15 = 0;
            $tbipayment_obshtozaplashtane_input_15 = 0;
            $tbipayment_gpr_15 = 0;
            $tbipayment_glp_15 = 0;
            $tbipayment_mesecna_18 = 0;
            $tbipayment_obshtozaplashtane_input_18 = 0;
            $tbipayment_gpr_18 = 0;
            $tbipayment_glp_18 = 0;
            $tbipayment_mesecna_24 = 0;
            $tbipayment_obshtozaplashtane_input_24 = 0;
            $tbipayment_gpr_24 = 0;
            $tbipayment_glp_24 = 0;
            $tbipayment_mesecna_30 = 0;
            $tbipayment_obshtozaplashtane_input_30 = 0;
            $tbipayment_gpr_30 = 0;
            $tbipayment_glp_30 = 0;
            $tbipayment_mesecna_36 = 0;
            $tbipayment_obshtozaplashtane_input_36 = 0;
            $tbipayment_gpr_36 = 0;
            $tbipayment_glp_36 = 0;

            $jet_gpr_3 = 0;
            $jet_glp_3 = 0;
            $jet_obshtozaplashtane_input_3 = 0;
            $jet_mesecna_3 = 0;
            $jet_gpr_6 = 0;
            $jet_glp_6 = 0;
            $jet_obshtozaplashtane_input_6 = 0;
            $jet_mesecna_6 = 0;
            $jet_gpr_9 = 0;
            $jet_glp_9 = 0;
            $jet_obshtozaplashtane_input_9 = 0;
            $jet_mesecna_9 = 0;
            $jet_gpr_12 = 0;
            $jet_glp_12 = 0;
            $jet_obshtozaplashtane_input_12 = 0;
            $jet_mesecna_12 = 0;
            $jet_gpr_15 = 0;
            $jet_glp_15 = 0;
            $jet_obshtozaplashtane_input_15 = 0;
            $jet_mesecna_15 = 0;
            $jet_gpr_18 = 0;
            $jet_glp_18 = 0;
            $jet_obshtozaplashtane_input_18 = 0;
            $jet_mesecna_18 = 0;
            $jet_gpr_24 = 0;
            $jet_glp_24 = 0;
            $jet_obshtozaplashtane_input_24 = 0;
            $jet_mesecna_24 = 0;
            $jet_gpr_30 = 0;
            $jet_glp_30 = 0;
            $jet_obshtozaplashtane_input_30 = 0;
            $jet_mesecna_30 = 0;
            $jet_gpr_36 = 0;
            $jet_glp_36 = 0;
            $jet_obshtozaplashtane_input_36 = 0;
            $jet_mesecna_36 = 0;

            $uni_gpr_3 = 0;
            $uni_glp_3 = 0;
            $uni_obshtozaplashtane_input_3 = 0;
            $uni_mesecna_3 = 0;
            $uni_gpr_6 = 0;
            $uni_glp_6 = 0;
            $uni_obshtozaplashtane_input_6 = 0;
            $uni_mesecna_6 = 0;
            $uni_gpr_9 = 0;
            $uni_glp_9 = 0;
            $uni_obshtozaplashtane_input_9 = 0;
            $uni_mesecna_9 = 0;
            $uni_gpr_12 = 0;
            $uni_glp_12 = 0;
            $uni_obshtozaplashtane_input_12 = 0;
            $uni_mesecna_12 = 0;
            $uni_gpr_15 = 0;
            $uni_glp_15 = 0;
            $uni_obshtozaplashtane_input_15 = 0;
            $uni_mesecna_15 = 0;
            $uni_gpr_18 = 0;
            $uni_glp_18 = 0;
            $uni_obshtozaplashtane_input_18 = 0;
            $uni_mesecna_18 = 0;
            $uni_gpr_24 = 0;
            $uni_glp_24 = 0;
            $uni_obshtozaplashtane_input_24 = 0;
            $uni_mesecna_24 = 0;
            $uni_gpr_30 = 0;
            $uni_glp_30 = 0;
            $uni_obshtozaplashtane_input_30 = 0;
            $uni_mesecna_30 = 0;
            $uni_gpr_36 = 0;
            $uni_glp_36 = 0;
            $uni_obshtozaplashtane_input_36 = 0;
            $uni_mesecna_36 = 0;

            if ($property->calculators != 0) {
                if ($property->tbibank != 0) {
                    /** TBI Bank */
                    if ($product != null) {
                        $tbipayment_price = $product->price;
                        $tbipayment_product_quantity = $request->input('product_qt');
                        $tbipayment_product_cats = $product_category->id;

                        $tbi_data = array(
                            'name' => 'getCalculationForAllSchemes',
                            'param' => array(
                                'unicid' => '1af4d77b-70a2-4771-a04b-1c6d63f07680',
                                'price' => $tbipayment_price,
                                'product_category' => "$tbipayment_product_cats",
                                'insurance' => 'n',
                                'initial_payment' => '0'
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

                        ///////////////////////////////////////////////////////////////////////////
                        foreach ($api_obj->data->result as $scheme) {
                            switch ($scheme->id) {
                                case '3':
                                    $tbipayment_mesecna_3 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_3 = $scheme->total_amount_due;
                                    $tbipayment_gpr_3 = $scheme->gpr;
                                    $tbipayment_glp_3 = $scheme->glp;
                                    break;
                                case '6':
                                    $tbipayment_mesecna_6 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_6 = $scheme->total_amount_due;
                                    $tbipayment_gpr_6 = $scheme->gpr;
                                    $tbipayment_glp_6 = $scheme->glp;
                                    break;
                                case '9':
                                    $tbipayment_mesecna_9 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_9 = $scheme->total_amount_due;
                                    $tbipayment_gpr_9 = $scheme->gpr;
                                    $tbipayment_glp_9 = $scheme->glp;
                                    break;
                                case '12':
                                    $tbipayment_mesecna_12 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_12 = $scheme->total_amount_due;
                                    $tbipayment_gpr_12 = $scheme->gpr;
                                    $tbipayment_glp_12 = $scheme->glp;
                                    break;
                                case '15':
                                    $tbipayment_mesecna_15 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_15 = $scheme->total_amount_due;
                                    $tbipayment_gpr_15 = $scheme->gpr;
                                    $tbipayment_glp_15 = $scheme->glp;
                                    break;
                                case '18':
                                    $tbipayment_mesecna_18 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_18 = $scheme->total_amount_due;
                                    $tbipayment_gpr_18 = $scheme->gpr;
                                    $tbipayment_glp_18 = $scheme->glp;
                                    break;
                                case '24':
                                    $tbipayment_mesecna_24 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_24 = $scheme->total_amount_due;
                                    $tbipayment_gpr_24 = $scheme->gpr;
                                    $tbipayment_glp_24 = $scheme->glp;
                                    break;
                                case '30':
                                    $tbipayment_mesecna_30 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_30 = $scheme->total_amount_due;
                                    $tbipayment_gpr_30 = $scheme->gpr;
                                    $tbipayment_glp_30 = $scheme->glp;
                                    break;
                                case '36':
                                    $tbipayment_mesecna_36 = $scheme->monthly_payment;
                                    $tbipayment_obshtozaplashtane_input_36 = $scheme->total_amount_due;
                                    $tbipayment_gpr_36 = $scheme->gpr;
                                    $tbipayment_glp_36 = $scheme->glp;
                                    break;
                            }
                        }
                    }
                    /** TBI Bank */
                }
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////
                if ($property->bnpparibas != 0) {
                    /** Pariba */
                    $PricingSchemes = null;
                    $PricingVariants = null;
                    $PricingVariantId = null;
                    $CreditPropositions = null;
                    $CurrentCreditProposition = null;
                    $cert = public_path() . '/keys/key.pem';
                    $key = public_path() . '/keys/privatekey.pem';
                    $password = '123456';
                    $downpayment = "0.00";
                    $installment = "0.00";

                    $goods = '';
                    $category_id = '40';
                    $goods_objects = $this->CalculateGoodTypes($category_id);

                    if ($goods_objects == null) {
                        return abort(404);
                    }

                    foreach ($goods_objects as $good_object) {
                        $goods .= (string) $good_object->GoodTypeId . ',';
                    }
                    $goods = rtrim($goods, ',');

                    $price = number_format($product->price, 2, '.', '');
                    $price = floatval($price) * floatval($request->input('product_qt'));
                    $downpayment = "0.00";
                    $installment = "0.00";

                    $PricingSchemes = $this->CalculatePricingSchemes($goods, $price, $downpayment);
                    if (sizeof($PricingSchemes) > 0) {
                        $curr_shemaId = (string) $PricingSchemes[0]->PricingSchemeId;
                        foreach ($PricingSchemes as $PricingScheme) {

                            if ((string) $PricingScheme->PricingSchemeId == '1967') {
                                $curr_shemaId = '1967';
                            }
                        }
                    } else {
                        $curr_shemaId = '0';
                    }

                    $creditjetapi_env = $this->creditjetapi_env_server . 'GetAvailablePricingVariants/';
                    $schemeId = $curr_shemaId;
                    $url = $creditjetapi_env . $this->jet_merchantId . '/' . $goods . '/' . $price . '/' . $downpayment . '/' . $installment . '/' . $schemeId;
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
                            foreach ($CreditPropositions as $CreditProposition) {
                                if ((string) $CreditProposition->Maturity == '3') {
                                    $jet_gpr_3 = (float) $CreditProposition->APR;
                                    $jet_glp_3 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_3 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_3 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '6') {
                                    $jet_gpr_6 = (float) $CreditProposition->APR;
                                    $jet_glp_6 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_6 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_6 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '9') {
                                    $jet_gpr_9 = (float) $CreditProposition->APR;
                                    $jet_glp_9 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_9 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_9 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '12') {
                                    $jet_gpr_12 = (float) $CreditProposition->APR;
                                    $jet_glp_12 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_12 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_12 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '15') {
                                    $jet_gpr_15 = (float) $CreditProposition->APR;
                                    $jet_glp_15 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_15 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_15 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '18') {
                                    $jet_gpr_18 = (float) $CreditProposition->APR;
                                    $jet_glp_18 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_18 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_18 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '24') {
                                    $jet_gpr_24 = (float) $CreditProposition->APR;
                                    $jet_glp_24 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_24 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_24 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '30') {
                                    $jet_gpr_30 = (float) $CreditProposition->APR;
                                    $jet_glp_30 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_30 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_30 = (float) $CreditProposition->InstallmentAmount;
                                }
                                if ((string) $CreditProposition->Maturity == '36') {
                                    $jet_gpr_36 = (float) $CreditProposition->APR;
                                    $jet_glp_36 = (float) $CreditProposition->NIR;
                                    $jet_obshtozaplashtane_input_36 = (float) $CreditProposition->TotalRepaymentAmount;
                                    $jet_mesecna_36 = (float) $CreditProposition->InstallmentAmount;
                                }
                            }
                        }
                    }
                    curl_close($curl);
                    // Get AvailablePricingVariants//
                    /** Pariba */
                }
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////
                if ($property->unicredit != 0) {
                    /** UniCredit */
                    define('FINANCIAL_PRECISION', 1.0e-08);
                    define('FINANCIAL_MAX_ITERATIONS', 128);

                    $uni_ch = curl_init();
                    curl_setopt($uni_ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($uni_ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($uni_ch, CURLOPT_MAXREDIRS, 3);
                    curl_setopt($uni_ch, CURLOPT_TIMEOUT, 6);
                    curl_setopt($uni_ch, CURLOPT_URL, $this->UNIPAYMENT_LIVEURL . '/function/getparameters.php?cid=' . $this->uni_unicid);
                    $paramsuni = json_decode(curl_exec($uni_ch), true);
                    curl_close($uni_ch);
                    $this->uni_user = $paramsuni["uni_user"];
                    $this->uni_password = $paramsuni["uni_password"];

                    $url_key = $this->UNIPAYMENT_LIVEURL . '/calculators/key/avalon_private_key.pem';
                    $curl_key = curl_init();
                    curl_setopt($curl_key, CURLOPT_URL, $url_key);
                    curl_setopt($curl_key, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl_key, CURLOPT_HEADER, false);
                    $keyFileContents = curl_exec($curl_key);
                    curl_close($curl_key);
                    $keyFileHandle = fopen(public_path() . "/keys/avalon_private_key.pem", "w") or die("Unable to open file!");
                    fwrite($keyFileHandle, $keyFileContents);
                    fclose($keyFileHandle);

                    $url_cert = $this->UNIPAYMENT_LIVEURL . '/calculators/key/avalon_cert.pem';
                    $curl_cert = curl_init();
                    curl_setopt($curl_cert, CURLOPT_URL, $url_cert);
                    curl_setopt($curl_cert, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl_cert, CURLOPT_HEADER, false);
                    $certFileContents = curl_exec($curl_cert);
                    curl_close($curl_cert);
                    $certFileHandle = fopen(public_path() . "/keys/avalon_cert.pem", "w") or die("Unable to open file!");
                    fwrite($certFileHandle, $certFileContents);
                    fclose($certFileHandle);

                    $price = number_format($product->price, 2, '.', '');
                    $price = floatval($price) * floatval($request->input('product_qt'));

                    $uni_3 = $this->getUniCalculation(3, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_6 = $this->getUniCalculation(6, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_9 = $this->getUniCalculation(9, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_12 = $this->getUniCalculation(12, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_15 = $this->getUniCalculation(15, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_18 = $this->getUniCalculation(18, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_24 = $this->getUniCalculation(24, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_30 = $this->getUniCalculation(30, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_36 = $this->getUniCalculation(36, $price, $this->uni_service, 0, $this->uni_user, $this->uni_password, $paramsuni['uni_sertificat'], $this->UNIPAYMENT_LIVEURL);
                    $uni_gpr_3 = $uni_3['gpr'];
                    $uni_glp_3 = $uni_3['glp'];
                    $uni_obshtozaplashtane_input_3 = $uni_3['obshtozaplashtane_input'];
                    $uni_mesecna_3 = $uni_3['mesecna'];
                    $uni_gpr_6 = $uni_6['gpr'];
                    $uni_glp_6 = $uni_6['glp'];
                    $uni_obshtozaplashtane_input_6 = $uni_6['obshtozaplashtane_input'];
                    $uni_mesecna_6 = $uni_6['mesecna'];
                    $uni_gpr_9 = $uni_9['gpr'];
                    $uni_glp_9 = $uni_9['glp'];
                    $uni_obshtozaplashtane_input_9 = $uni_9['obshtozaplashtane_input'];
                    $uni_mesecna_9 = $uni_9['mesecna'];
                    $uni_gpr_12 = $uni_12['gpr'];
                    $uni_glp_12 = $uni_12['glp'];
                    $uni_obshtozaplashtane_input_12 = $uni_12['obshtozaplashtane_input'];
                    $uni_mesecna_12 = $uni_12['mesecna'];
                    $uni_gpr_15 = $uni_15['gpr'];
                    $uni_glp_15 = $uni_15['glp'];
                    $uni_obshtozaplashtane_input_15 = $uni_15['obshtozaplashtane_input'];
                    $uni_mesecna_15 = $uni_15['mesecna'];
                    $uni_gpr_18 = $uni_18['gpr'];
                    $uni_glp_18 = $uni_18['glp'];
                    $uni_obshtozaplashtane_input_18 = $uni_18['obshtozaplashtane_input'];
                    $uni_mesecna_18 = $uni_18['mesecna'];
                    $uni_gpr_24 = $uni_24['gpr'];
                    $uni_glp_24 = $uni_24['glp'];
                    $uni_obshtozaplashtane_input_24 = $uni_24['obshtozaplashtane_input'];
                    $uni_mesecna_24 = $uni_24['mesecna'];
                    $uni_gpr_30 = $uni_30['gpr'];
                    $uni_glp_30 = $uni_30['glp'];
                    $uni_obshtozaplashtane_input_30 = $uni_30['obshtozaplashtane_input'];
                    $uni_mesecna_30 = $uni_30['mesecna'];
                    $uni_gpr_36 = $uni_36['gpr'];
                    $uni_glp_36 = $uni_36['glp'];
                    $uni_obshtozaplashtane_input_36 = $uni_36['obshtozaplashtane_input'];
                    $uni_mesecna_36 = $uni_36['mesecna'];
                    /** UniCredit */
                }
                if (($tbipayment_mesecna_12 <= $jet_mesecna_12) && ($tbipayment_mesecna_12 <= $uni_mesecna_12)) {
                    $first = 'tbipayment';
                    $first_name = 'ТБИ Банка';
                    $first_logo = 'tbi_bank_logo.png';
                    if ($property->tbibank == 0) {
                        $first_visible = false;
                    } else {
                        $first_visible = true;
                    }
                    if ($uni_mesecna_12 <= $jet_mesecna_12) {
                        $second = 'uni';
                        $second_name = 'УНИ Кредит';
                        $second_logo = 'unicredit_logo.png';
                        if ($property->unicredit == 0) {
                            $second_visible = false;
                        } else {
                            $second_visible = true;
                        }
                        $third = 'jet';
                        $third_name = 'Париба';
                        $third_logo = 'pariba_logo.png';
                        if ($property->bnpparibas == 0) {
                            $third_visible = false;
                        } else {
                            $third_visible = true;
                        }
                    } else {
                        $second = 'jet';
                        $second_name = 'Париба';
                        $second_logo = 'pariba_logo.png';
                        if ($property->bnpparibas == 0) {
                            $second_visible = false;
                        } else {
                            $second_visible = true;
                        }
                        $third = 'uni';
                        $third_name = 'УНИ Кредит';
                        $third_logo = 'unicredit_logo.png';
                        if ($property->unicredit == 0) {
                            $third_visible = false;
                        } else {
                            $third_visible = true;
                        }
                    }
                } else {
                    if (($uni_mesecna_12 <= $tbipayment_mesecna_12) && ($uni_mesecna_12 <= $jet_mesecna_12)) {
                        $first = 'uni';
                        $first_name = 'УНИ Кредит';
                        $first_logo = 'unicredit_logo.png';
                        if ($property->unicredit == 0) {
                            $first_visible = false;
                        } else {
                            $first_visible = true;
                        }
                        if ($tbipayment_mesecna_12 <= $jet_mesecna_12) {
                            $second = 'tbipayment';
                            $second_name = 'ТБИ Банка';
                            $second_logo = 'tbi_bank_logo.png';
                            if ($property->tbibank == 0) {
                                $second_visible = false;
                            } else {
                                $second_visible = true;
                            }
                            $third = 'jet';
                            $third_name = 'Париба';
                            $third_logo = 'pariba_logo.png';
                            if ($property->bnpparibas == 0) {
                                $third_visible = false;
                            } else {
                                $third_visible = true;
                            }
                        } else {
                            $second = 'jet';
                            $second_name = 'Париба';
                            $second_logo = 'pariba_logo.png';
                            if ($property->bnpparibas == 0) {
                                $second_visible = false;
                            } else {
                                $second_visible = true;
                            }
                            $third = 'tbipayment';
                            $third_name = 'ТБИ Банка';
                            $third_logo = 'tbi_bank_logo.png';
                            if ($property->tbibank == 0) {
                                $third_visible = false;
                            } else {
                                $third_visible = true;
                            }
                        }
                    } else {
                        if (($jet_mesecna_12 <= $tbipayment_mesecna_12) && ($jet_mesecna_12 <= $uni_mesecna_12)) {
                            $first = 'jet';
                            $first_name = 'Париба';
                            $first_logo = 'pariba_logo.png';
                            if ($property->bnpparibas == 0) {
                                $first_visible = false;
                            } else {
                                $first_visible = true;
                            }
                            if ($tbipayment_mesecna_12 <= $uni_mesecna_12) {
                                $second = 'tbipayment';
                                $second_name = 'ТБИ Банка';
                                $second_logo = 'tbi_bank_logo.png';
                                if ($property->tbibank == 0) {
                                    $second_visible = false;
                                } else {
                                    $second_visible = true;
                                }
                                $third = 'uni';
                                $third_name = 'УНИ Кредит';
                                $third_logo = 'unicredit_logo.png';
                                if ($property->unicredit == 0) {
                                    $third_visible = false;
                                } else {
                                    $third_visible = true;
                                }
                            } else {
                                $second = 'uni';
                                $second_name = 'УНИ Кредит';
                                $second_logo = 'unicredit_logo.png';
                                if ($property->unicredit == 0) {
                                    $second_visible = false;
                                } else {
                                    $second_visible = true;
                                }
                                $third = 'tbipayment';
                                $third_name = 'ТБИ Банка';
                                $third_logo = 'tbi_bank_logo.png';
                                if ($property->tbibank == 0) {
                                    $third_visible = false;
                                } else {
                                    $third_visible = true;
                                }
                            }
                        }
                    }
                }
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }

        return view('credit.credit')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор',
            'root_categories' => $root_categories,
            'product' => $product,
            'product_qt' => $request->input('product_qt'),
            'tbipayment_mesecna_3' => $tbipayment_mesecna_3,
            'tbipayment_obshtozaplashtane_input_3' => $tbipayment_obshtozaplashtane_input_3,
            'tbipayment_gpr_3' => $tbipayment_gpr_3,
            'tbipayment_glp_3' => $tbipayment_glp_3,
            'tbipayment_mesecna_6' => $tbipayment_mesecna_6,
            'tbipayment_obshtozaplashtane_input_6' => $tbipayment_obshtozaplashtane_input_6,
            'tbipayment_gpr_6' => $tbipayment_gpr_6,
            'tbipayment_glp_6' => $tbipayment_glp_6,
            'tbipayment_mesecna_9' => $tbipayment_mesecna_9,
            'tbipayment_obshtozaplashtane_input_9' => $tbipayment_obshtozaplashtane_input_9,
            'tbipayment_gpr_9' => $tbipayment_gpr_9,
            'tbipayment_glp_9' => $tbipayment_glp_9,
            'tbipayment_mesecna_12' => $tbipayment_mesecna_12,
            'tbipayment_obshtozaplashtane_input_12' => $tbipayment_obshtozaplashtane_input_12,
            'tbipayment_gpr_12' => $tbipayment_gpr_12,
            'tbipayment_glp_12' => $tbipayment_glp_12,
            'tbipayment_mesecna_15' => $tbipayment_mesecna_15,
            'tbipayment_obshtozaplashtane_input_15' => $tbipayment_obshtozaplashtane_input_15,
            'tbipayment_gpr_15' => $tbipayment_gpr_15,
            'tbipayment_glp_15' => $tbipayment_glp_15,
            'tbipayment_mesecna_18' => $tbipayment_mesecna_18,
            'tbipayment_obshtozaplashtane_input_18' => $tbipayment_obshtozaplashtane_input_18,
            'tbipayment_gpr_18' => $tbipayment_gpr_18,
            'tbipayment_glp_18' => $tbipayment_glp_18,
            'tbipayment_mesecna_24' => $tbipayment_mesecna_24,
            'tbipayment_obshtozaplashtane_input_24' => $tbipayment_obshtozaplashtane_input_24,
            'tbipayment_gpr_24' => $tbipayment_gpr_24,
            'tbipayment_glp_24' => $tbipayment_glp_24,
            'tbipayment_mesecna_30' => $tbipayment_mesecna_30,
            'tbipayment_obshtozaplashtane_input_30' => $tbipayment_obshtozaplashtane_input_30,
            'tbipayment_gpr_30' => $tbipayment_gpr_30,
            'tbipayment_glp_30' => $tbipayment_glp_30,
            'tbipayment_mesecna_36' => $tbipayment_mesecna_36,
            'tbipayment_obshtozaplashtane_input_36' => $tbipayment_obshtozaplashtane_input_36,
            'tbipayment_gpr_36' => $tbipayment_gpr_36,
            'tbipayment_glp_36' => $tbipayment_glp_36,
            'jet_gpr_3' => $jet_gpr_3,
            'jet_glp_3' => $jet_glp_3,
            'jet_obshtozaplashtane_input_3' => $jet_obshtozaplashtane_input_3,
            'jet_mesecna_3' => $jet_mesecna_3,
            'jet_gpr_6' => $jet_gpr_6,
            'jet_glp_6' => $jet_glp_6,
            'jet_obshtozaplashtane_input_6' => $jet_obshtozaplashtane_input_6,
            'jet_mesecna_6' => $jet_mesecna_6,
            'jet_gpr_9' => $jet_gpr_9,
            'jet_glp_9' => $jet_glp_9,
            'jet_obshtozaplashtane_input_9' => $jet_obshtozaplashtane_input_9,
            'jet_mesecna_9' => $jet_mesecna_9,
            'jet_gpr_12' => $jet_gpr_12,
            'jet_glp_12' => $jet_glp_12,
            'jet_obshtozaplashtane_input_12' => $jet_obshtozaplashtane_input_12,
            'jet_mesecna_12' => $jet_mesecna_12,
            'jet_gpr_15' => $jet_gpr_15,
            'jet_glp_15' => $jet_glp_15,
            'jet_obshtozaplashtane_input_15' => $jet_obshtozaplashtane_input_15,
            'jet_mesecna_15' => $jet_mesecna_15,
            'jet_gpr_18' => $jet_gpr_18,
            'jet_glp_18' => $jet_glp_18,
            'jet_obshtozaplashtane_input_18' => $jet_obshtozaplashtane_input_18,
            'jet_mesecna_18' => $jet_mesecna_18,
            'jet_gpr_24' => $jet_gpr_24,
            'jet_glp_24' => $jet_glp_24,
            'jet_obshtozaplashtane_input_24' => $jet_obshtozaplashtane_input_24,
            'jet_mesecna_24' => $jet_mesecna_24,
            'jet_gpr_30' => $jet_gpr_30,
            'jet_glp_30' => $jet_glp_30,
            'jet_obshtozaplashtane_input_30' => $jet_obshtozaplashtane_input_30,
            'jet_mesecna_30' => $jet_mesecna_30,
            'jet_gpr_36' => $jet_gpr_36,
            'jet_glp_36' => $jet_glp_36,
            'jet_obshtozaplashtane_input_36' => $jet_obshtozaplashtane_input_36,
            'jet_mesecna_36' => $jet_mesecna_36,
            'uni_gpr_3' => $uni_gpr_3,
            'uni_glp_3' => $uni_glp_3,
            'uni_obshtozaplashtane_input_3' => $uni_obshtozaplashtane_input_3,
            'uni_mesecna_3' => $uni_mesecna_3,
            'uni_gpr_6' => $uni_gpr_6,
            'uni_glp_6' => $uni_glp_6,
            'uni_obshtozaplashtane_input_6' => $uni_obshtozaplashtane_input_6,
            'uni_mesecna_6' => $uni_mesecna_6,
            'uni_gpr_9' => $uni_gpr_9,
            'uni_glp_9' => $uni_glp_9,
            'uni_obshtozaplashtane_input_9' => $uni_obshtozaplashtane_input_9,
            'uni_mesecna_9' => $uni_mesecna_9,
            'uni_gpr_12' => $uni_gpr_12,
            'uni_glp_12' => $uni_glp_12,
            'uni_obshtozaplashtane_input_12' => $uni_obshtozaplashtane_input_12,
            'uni_mesecna_12' => $uni_mesecna_12,
            'uni_gpr_15' => $uni_gpr_15,
            'uni_glp_15' => $uni_glp_15,
            'uni_obshtozaplashtane_input_15' => $uni_obshtozaplashtane_input_15,
            'uni_mesecna_15' => $uni_mesecna_15,
            'uni_gpr_18' => $uni_gpr_18,
            'uni_glp_18' => $uni_glp_18,
            'uni_obshtozaplashtane_input_18' => $uni_obshtozaplashtane_input_18,
            'uni_mesecna_18' => $uni_mesecna_18,
            'uni_gpr_24' => $uni_gpr_24,
            'uni_glp_24' => $uni_glp_24,
            'uni_obshtozaplashtane_input_24' => $uni_obshtozaplashtane_input_24,
            'uni_mesecna_24' => $uni_mesecna_24,
            'uni_gpr_30' => $uni_gpr_30,
            'uni_glp_30' => $uni_glp_30,
            'uni_obshtozaplashtane_input_30' => $uni_obshtozaplashtane_input_30,
            'uni_mesecna_30' => $uni_mesecna_30,
            'uni_gpr_36' => $uni_gpr_36,
            'uni_glp_36' => $uni_glp_36,
            'uni_obshtozaplashtane_input_36' => $uni_obshtozaplashtane_input_36,
            'uni_mesecna_36' => $uni_mesecna_36,
            'first' => $first,
            'first_name' => $first_name,
            'first_logo' => $first_logo,
            'first_visible' => $first_visible,
            'second' => $second,
            'second_name' => $second_name,
            'second_logo' => $second_logo,
            'second_visible' => $second_visible,
            'third' => $third,
            'third_name' => $third_name,
            'third_logo' => $third_logo,
            'third_visible' => $third_visible
        ]);
    }

    public function CalculateGoodTypes($category)
    {
        $creditjetapi_env = $this->creditjetapi_env_server . 'GetGoodTypes/';

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
        $creditjetapi_env = $this->creditjetapi_env_server . 'GetAvailablePricingSchemes/';

        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';

        // AvailablePricingSchemes//
        $url = $creditjetapi_env . $this->jet_merchantId . '/' . $goods . '/' . $price . '/' . $downpayment;
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
        $creditjetapi_env = $this->creditjetapi_env_server . 'CalculateLoan/';

        $cert = public_path() . '/keys/key.pem';
        $key = public_path() . '/keys/privatekey.pem';
        $password = '123456';

        // CalculateLoan//
        $url = $creditjetapi_env . $this->jet_merchantId . '/' . $goods . '/' . $price . '/' . $downpayment . '/' . $variantId;
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
        $CreditPropositions = null;
        if ($code == 200) {
            $oXML = new \SimpleXMLElement($content);
            if ($oXML->ErrorCode == 0) {
                $CreditPropositions = $oXML->Data->CreditProposition;
                return $CreditPropositions;
            }
        }
        curl_close($curl);
        return $CreditPropositions;
        // CalculateLoan//
    }

    public function getUniCalculation($uni_meseci, $uni_total_price, $uni_service, $uni_parva, $uni_user, $uni_password, $uni_sertificat, $uni_liveurl)
    {
        $keyFile = public_path() . "/keys/avalon_private_key.pem";
        $certFile = public_path() . "/keys/avalon_cert.pem";
        $uni_kimb = curl_init();
        curl_setopt_array($uni_kimb, array(
            CURLOPT_URL => $uni_service . "getCoeff",
            // името на файл, съдържащ само личен SSL ключ в текстови формат (PEM)
            CURLOPT_SSLKEY => $keyFile,
            CURLOPT_SSLKEYPASSWD => "1234",
            // името на файл, съдържащ само клиентския сартификат в текстови формат (PEM)
            CURLOPT_SSLCERT => $certFile,
            CURLOPT_SSLCERTPASSWD => "1234",

            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 2,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>     "user=" . $uni_user .
                "&pass=" . $uni_password .
                "&onlineProductCode=" . $this->uni_categories_kop .
                "&installmentCount=" . $uni_meseci,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "cache-control: no-cache"
            ),
        ));
        $responsekimb = curl_exec($uni_kimb);
        $err = curl_error($uni_kimb);
        curl_close($uni_kimb);
        $kimb_obj = json_decode($responsekimb);
        $kimb = 0;
        $glp = 0;

        if (!empty($kimb_obj->coeffList)) {
            if (!empty($kimb_obj->coeffList[0])) {
                $kimb = floatval($kimb_obj->coeffList[0]->coeff);
                $glp = number_format(floatval($kimb_obj->coeffList[0]->interestPercent), 2, ".", "");
            }
        }
        $uni_obshto = number_format(floatval($uni_total_price) - floatval($uni_parva), 2, ".", "");
        $uni_mesecna = number_format(floatval($uni_obshto) * $kimb, 2, ".", "");
        $uni_obshtozaplashtane = number_format(floatval($uni_mesecna) * intval($uni_meseci), 2, ".", "");
        $uni_gprm = (($this->RATE(intval($uni_meseci), -1 * (floatval($uni_mesecna)), floatval($uni_obshto)) * intval($uni_meseci))) / (intval($uni_meseci) / 12);
        $uni_gpr = number_format((pow((1 + floatval($uni_gprm) / 12), 12) - 1) * 100, 2, ".", "");

        $result = [];
        $result['gpr'] = $uni_gpr;
        $result['glp'] = $glp;
        $result['obshtozaplashtane_input'] = $uni_obshtozaplashtane;
        $result['mesecna'] = $uni_mesecna;

        return $result;
    }

    public function RATE($nper, $pmt, $pv, $fv = 0.0, $type = 0, $guess = 0.1)
    {
        $rate = $guess;
        if (abs($rate) < FINANCIAL_PRECISION) {
            $y = $pv * (1 + $nper * $rate) + $pmt * (1 + $rate * $type) * $nper + $fv;
        } else {
            $f = exp($nper * log(1 + $rate));
            $y = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;
        }
        $y0 = $pv + $pmt * $nper + $fv;
        $y1 = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;
        // find root by secant method
        $i  = $x0 = 0.0;
        $x1 = $rate;
        while ((abs($y0 - $y1) > FINANCIAL_PRECISION) && ($i < FINANCIAL_MAX_ITERATIONS)) {
            $rate = ($y1 * $x0 - $y0 * $x1) / ($y1 - $y0);
            $x0 = $x1;
            $x1 = $rate;
            if (abs($rate) < FINANCIAL_PRECISION) {
                $y = $pv * (1 + $nper * $rate) + $pmt * (1 + $rate * $type) * $nper + $fv;
            } else {
                $f = exp($nper * log(1 + $rate));
                $y = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;
            }
            $y0 = $y1;
            $y1 = $y;
            ++$i;
        }
        return $rate;
    }

    public function danni(Request $request)
    {
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_qt'))) {
            $root_categories = Category::where(['parent_id' => 0])->get();

            $product = Product::where(['id' => $request->input('product_id')])->first();

            if ($request->has('current_sheme')) {
                $current_sheme = $request->input('current_sheme');
            } else {
                $current_sheme = "";
            }
            if ($request->has('current_meseci')) {
                $current_meseci = $request->input('current_meseci');
            } else {
                $current_meseci = "";
            }
            if ($request->has('mesecna')) {
                $mesecna = $request->input('mesecna');
            } else {
                $mesecna = "";
            }
            if ($request->has('gpr')) {
                $gpr = $request->input('gpr');
            } else {
                $gpr = "";
            }
            if ($request->has('glp')) {
                $glp = $request->input('glp');
            } else {
                $glp = "";
            }
            if ($request->has('obshtozaplashtane')) {
                $obshtozaplashtane = $request->input('obshtozaplashtane');
            } else {
                $obshtozaplashtane = "";
            }

            if ($user = Auth::user()) {
                $credit_fname = (explode(" ", $user->name))[0];
                $credit_lname = (explode(" ", $user->name))[1];
                $credit_email = $user->email;
                $credit_phone = $user->phone;
                $billingAddress = $user->address;
                $billingCity = $user->city;
                $billingCounty = "";
                $deliveryAddress = $user->address2;
                $deliveryCity = $user->city2;
                $deliveryCounty = "";
            } else {
                $credit_fname = "";
                $credit_lname = "";
                $credit_email = "";
                $credit_phone = "";
                $billingAddress = "";
                $billingCity = "";
                $billingCounty = "";
                $deliveryAddress = "";
                $deliveryCity = "";
                $deliveryCounty = "";
            }

            return view('credit.danni')->with([
                'title' => 'Продажба на техника на изплащане, кредитен калкулатор, лични данни | Авалон',
                'description' => 'Продажба на техника на изплащане, кредитен калкулатор, лични данни.',
                'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор, данни',
                'root_categories' => $root_categories,
                'product' => $product,
                'product_qt' => $request->input('product_qt'),
                'current_sheme' => $current_sheme,
                'current_meseci' => $current_meseci,
                'mesecna' => $mesecna,
                'gpr' => $gpr,
                'glp' => $glp,
                'obshtozaplashtane' => $obshtozaplashtane,
                'credit_fname' => $credit_fname,
                'credit_lname' => $credit_lname,
                'credit_email' => $credit_email,
                'credit_phone' => $credit_phone,
                'billingAddress' => $billingAddress,
                'billingCity' => $billingCity,
                'billingCounty' => $billingCounty,
                'deliveryAddress' => $deliveryAddress,
                'deliveryCity' => $deliveryCity,
                'deliveryCounty' => $deliveryCounty
            ]);
        } else {
            return abort(404);
        }
    }

    public function yes()
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('credit.yes')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор, успешен резултат | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор, успешен резултат.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор, успешен резултат',
            'root_categories' => $root_categories
        ]);
    }

    public function no()
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('credit.no')->with([
            'title' => 'Продажба на техника на изплащане, кредитен калкулатор, неуспешен резултат | Авалон',
            'description' => 'Продажба на техника на изплащане, кредитен калкулатор, неуспешен резултат.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор, неуспешен резултат',
            'root_categories' => $root_categories
        ]);
    }

    public function ok(Request $request)
    {
        if (($request->isMethod('post')) && ($request->has('product_id')) && ($request->has('product_qt'))) {
            $root_categories = Category::where(['parent_id' => 0])->get();

            $product = Product::where(['id' => $request->input('product_id')])->first();

            if ($request->has('current_sheme')) {
                $current_sheme = $request->input('current_sheme');
            } else {
                $current_sheme = "";
            }
            if ($request->has('current_meseci')) {
                $current_meseci = $request->input('current_meseci');
            } else {
                $current_meseci = "";
            }
            if ($request->has('mesecna')) {
                $mesecna = $request->input('mesecna');
            } else {
                $mesecna = "";
            }
            if ($request->has('gpr')) {
                $gpr = $request->input('gpr');
            } else {
                $gpr = "";
            }
            if ($request->has('glp')) {
                $glp = $request->input('glp');
            } else {
                $glp = "";
            }
            if ($request->has('obshtozaplashtane')) {
                $obshtozaplashtane = $request->input('obshtozaplashtane');
            } else {
                $obshtozaplashtane = "";
            }
            if ($request->has('credit_fname')) {
                $credit_fname = $request->input('credit_fname');
            } else {
                $credit_fname = "";
            }
            if ($request->has('credit_lname')) {
                $credit_lname = $request->input('credit_lname');
            } else {
                $credit_lname = "";
            }
            if ($request->has('credit_email')) {
                $credit_email = $request->input('credit_email');
            } else {
                $credit_email = "";
            }
            if ($request->has('credit_phone')) {
                $credit_phone = $request->input('credit_phone');
            } else {
                $credit_phone = "";
            }
            if ($request->has('credit_phone2')) {
                $credit_phone2 = $request->input('credit_phone2');
            } else {
                $credit_phone2 = "";
            }
            if ($request->has('credit_egn')) {
                $credit_egn = $request->input('credit_egn');
            } else {
                $credit_egn = "";
            }
            if ($request->has('billingAddress')) {
                $billingAddress = $request->input('billingAddress');
            } else {
                $billingAddress = "";
            }
            if ($request->has('billingCity')) {
                $billingCity = $request->input('billingCity');
            } else {
                $billingCity = "";
            }
            if ($request->has('billingCounty')) {
                $billingCounty = $request->input('billingCounty');
            } else {
                $billingCounty = "";
            }
            if ($request->has('deliveryAddress')) {
                $deliveryAddress = $request->input('deliveryAddress');
            } else {
                $deliveryAddress = "";
            }
            if ($request->has('deliveryCity')) {
                $deliveryCity = $request->input('deliveryCity');
            } else {
                $deliveryCity = "";
            }
            if ($request->has('deliveryCounty')) {
                $deliveryCounty = $request->input('deliveryCounty');
            } else {
                $deliveryCounty = "";
            }

            if ((floatval($product->price) * floatval($request->input('product_qt'))) >= 400) {
                $shipping = "free";
            } else {
                $shipping = "spedy";
            }
            $product_category = Category::where(['id' => ProductsCategories::where(['product_id' => $product->id])->first()->category_id])->first();
            $uni_api = 0;

            /** JET */
            if ($current_sheme == "jet") {
                //create order
                $order_id = $this->createOrderSingle(
                    $credit_fname,
                    $credit_email,
                    $billingAddress,
                    $billingCity,
                    $credit_phone,
                    $credit_lname,
                    $deliveryAddress,
                    $deliveryCity,
                    $shipping,
                    "jet",
                    $request->input('product_id'),
                    $request->input('product_qt'),
                    $product->price,
                    $current_meseci,
                    $mesecna,
                    $gpr,
                    $glp,
                    $obshtozaplashtane,
                    $credit_egn
                );
            }
            /** UNI */
            if ($current_sheme == "uni") {
                //create order
                $order_id = $this->createOrderSingle(
                    $credit_fname . " " . $credit_lname,
                    $credit_email,
                    $billingAddress,
                    $billingCity,
                    $credit_phone,
                    $credit_fname . " " . $credit_lname,
                    $deliveryAddress,
                    $deliveryCity,
                    $shipping,
                    "uni",
                    $request->input('product_id'),
                    $request->input('product_qt'),
                    $product->price,
                    $current_meseci,
                    $mesecna,
                    $gpr,
                    $glp,
                    $obshtozaplashtane,
                    $credit_egn
                );
                /** create Kontroll Panel order */
                $uni_add_ch = curl_init();
                curl_setopt($uni_add_ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($uni_add_ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($uni_add_ch, CURLOPT_MAXREDIRS, 2);
                curl_setopt($uni_add_ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($uni_add_ch, CURLOPT_URL, $this->UNIPAYMENT_LIVEURL . '/function/addorders.php?cid=' . $this->uni_unicid);
                curl_setopt($uni_add_ch, CURLOPT_POST, 1);
                $useragent = $_SERVER['HTTP_USER_AGENT'];
                if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
                    $devices = "МОБИЛЕН ТЕЛЕФОН";
                } else {
                    $devices = "НАСТОЛЕН КОМПЮТЪР";
                }
                $uni_items = array();
                $uni_items[0]['name'] = $product->name;
                $uni_items[0]['code'] = $product->code;
                $uni_items[0]['type'] = $product_category->id;
                $uni_items[0]['count'] = intval($request->input('product_qt'));
                $uni_items[0]['singlePrice'] = (float) $product->price;

                $uni_post = [
                    'orderId' => $order_id,
                    'orderTotal' => floatval($product->price) * floatval($request->input('product_qt')),
                    'vnoska' => $mesecna,
                    'gpr' => $gpr,
                    'glp' => $glp,
                    'vnoski' => $current_meseci,
                    'parva' => "",
                    'devices' => $devices,
                    'customer' => [
                        'firstName' => $credit_fname,
                        'lastName' => $credit_lname,
                        'email' => $credit_email,
                        'phone' => $credit_phone,
                        'billingAddress' => $billingAddress,
                        'billingCity' => $billingCity,
                        'billingCounty' => $billingCounty,
                        'deliveryAddress' => $deliveryAddress,
                        'deliveryCity' => $deliveryCity,
                        'deliveryCounty' => $deliveryCounty
                    ],
                    'items' => $uni_items
                ];

                curl_setopt($uni_add_ch, CURLOPT_POSTFIELDS, http_build_query($uni_post));
                $paramsuniadd = json_decode(curl_exec($uni_add_ch), true);
                curl_close($uni_add_ch);

                /** redirect to UNI Credit */
                $uni_data = [
                    'user' => $this->uni_user,
                    'pass' => $this->uni_password,
                    'orderNo' => $paramsuniadd['newid'],
                    'clientFirstName' => $credit_fname,
                    'clientLastName' => $credit_lname,
                    'clientPhone' => $credit_phone,
                    'clientEmail' => $credit_email,
                    'clientDeliveryAddress' => $billingAddress,
                    'onlineProductCode' => $this->uni_categories_kop,
                    'totalPrice' => floatval($product->price) * floatval($request->input('product_qt')),
                    'initialPayment' => 0,
                    'installmentCount' => $current_meseci,
                    'monthlyPayment' => $mesecna,
                    'items' => $uni_items
                ];
                $keyFile = public_path() . "/keys/avalon_private_key.pem";
                $certFile = public_path() . "/keys/avalon_cert.pem";
                $uni_api_ch = curl_init();
                curl_setopt_array($uni_api_ch, array(
                    CURLOPT_URL => $this->uni_service . "sucfOnlineSessionStart",
                    // името на файл, съдържащ само личен SSL ключ в текстови формат (PEM)
                    CURLOPT_SSLKEY => $keyFile,
                    CURLOPT_SSLKEYPASSWD => "1234",
                    // името на файл, съдържащ само клиентския сартификат в текстови формат (PEM)
                    CURLOPT_SSLCERT => $certFile,
                    CURLOPT_SSLCERTPASSWD => "1234",

                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 2,
                    CURLOPT_TIMEOUT => 5,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS =>     json_encode($uni_data),
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "cache-control: no-cache"
                    ),
                ));
                $responseapi = curl_exec($uni_api_ch);
                $err = curl_error($uni_api_ch);
                curl_close($uni_api_ch);
                $api_obj = json_decode($responseapi);
                if (!empty($api_obj->sucfOnlineSessionID)) {
                    $uni_api = $api_obj->sucfOnlineSessionID;
                }
            }
            /** TBI */
            if ($current_sheme == "tbipayment") {
                //create order
                $order_id = $this->createOrderSingle(
                    $credit_fname . " " . $credit_lname,
                    $credit_email,
                    $billingAddress,
                    $billingCity,
                    $credit_phone,
                    $credit_fname . " " . $credit_lname,
                    $deliveryAddress,
                    $deliveryCity,
                    $shipping,
                    "tbi",
                    $request->input('product_id'),
                    $request->input('product_qt'),
                    $product->price,
                    $current_meseci,
                    $mesecna,
                    $gpr,
                    "",
                    $obshtozaplashtane,
                    $credit_egn
                );

                /** create Kontroll Panel order */
                $tbi_data = array(
                    'name' => 'sendOrder',
                    'param' => array(
                        'unicid' => '1af4d77b-70a2-4771-a04b-1c6d63f07680',
                        'name' => $credit_fname . " " . $credit_lname,
                        'phone' => $credit_phone,
                        'email' => $credit_email,
                        'address_delivery' => $deliveryAddress,
                        'price' => $product->price,
                        'insurance' => 'n',
                        'installment' => $mesecna,
                        'gpr' => $gpr,
                        'egn' => $credit_egn,
                        'address_id_card' => $billingAddress,
                        'scheme' => $current_meseci,
                        'initial_payment' => '',
                        'items' => array(
                            array(
                                'products_id' => $product->id,
                                'products_name' => $product->name,
                                'products_q' => $request->input('product_qt'),
                                'products_p' => $product->price
                            )
                        )
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
            }

            return view('credit.ok')->with([
                'title' => 'Продажба на техника на изплащане, кредитен калкулатор, покупка | Авалон',
                'description' => 'Продажба на техника на изплащане, кредитен калкулатор, покупка.',
                'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане, калкулатор, покупка',
                'root_categories' => $root_categories,
                'product' => $product,
                'product_qt' => $request->input('product_qt'),
                'current_sheme' => $current_sheme,
                'current_meseci' => $current_meseci,
                'mesecna' => $mesecna,
                'gpr' => $gpr,
                'glp' => $glp,
                'obshtozaplashtane' => $obshtozaplashtane,
                'credit_fname' => $credit_fname,
                'credit_lname' => $credit_lname,
                'credit_email' => $credit_email,
                'credit_phone' => $credit_phone,
                'credit_phone2' => $credit_phone2,
                'credit_egn' => $credit_egn,
                'billingAddress' => $billingAddress,
                'billingCity' => $billingCity,
                'billingCounty' => $billingCounty,
                'deliveryAddress' => $deliveryAddress,
                'deliveryCity' => $deliveryCity,
                'deliveryCounty' => $deliveryCounty,
                'order_id' => $order_id,
                'uni_api' => $uni_api,
                'uni_application' => $this->uni_application
            ]);
        } else {
            return abort(404);
        }
    }

    public function createOrderSingle(
        $user_name,
        $user_email,
        $user_address,
        $user_city,
        $user_phone,
        $user_name2,
        $user_address2,
        $user_city2,
        $shipping,
        $payment,
        $product_id,
        $product_qt,
        $product_price,
        $current_meseci,
        $mesecna,
        $gpr,
        $glp,
        $obshtozaplashtane,
        $credit_egn
    ) {

        $order = new Order();
        $order->user_id = 0;
        $order->firm = "";
        $order->eik = "";
        $order->mol = "";
        $order->postcode = "";
        if (!empty(Auth::user())) {
            $order->user_id = Auth::user()->id;
            $order->firm = Auth::user()->firm;
            $order->eik = Auth::user()->eik;
            $order->mol = Auth::user()->mol;
            $order->postcode = Auth::user()->postcode;
        }
        $order->user_name = $user_name;
        $order->email = $user_email;
        $order->address = $user_address;
        $order->city = $user_city;
        $order->phone = $user_phone;
        $order->shipping = $shipping;
        $order->payment = $payment;
        $order->save();

        $suborder = new Suborder();
        $suborder->order_id = $order->id;
        $suborder->product_id = $product_id;
        $suborder->product_quantity = $product_qt;
        $suborder->total_price = floatval($product_price) * floatval($product_qt);
        $suborder->save();

        /** Send mails */
        //to admin
        $objMailAdmin = new \stdClass();
		$objMailAdmin->name = $order->user_name;
        $objMailAdmin->email = $order->email;
        $objMailAdmin->order = $order->id;
        $objMailAdmin->shipping = $order->shipping;
        $objMailAdmin->payment = $order->payment;

        Mail::to('home@avalonbg.com')
            ->send(new OrderOk($objMailAdmin, 'контрагент-04569-0000, онлайн заявка по поръчка - ' . $order->id));

        //to user
        $objMailUser = new \stdClass();
        $objMailUser->app_name = env('APP_NAME', 'Авалон Магазин');
        $objMailUser->name = $order->user_name;
        $objMailUser->email = $order->email;
        $objMailUser->order = $order->id;
        $objMailUser->shipping = $order->shipping;
        $objMailUser->payment = $order->payment;
        $objMailUser->current_meseci = $current_meseci;
        $objMailUser->mesecna = $mesecna;
        $objMailUser->gpr = $gpr;
        $objMailUser->glp = $glp;
        $objMailUser->obshtozaplashtane = $obshtozaplashtane;
        $objMailUser->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');

        $suborders = Suborder::where(['order_id' => $order->id])->get();
        $objMailUser->suborders = $suborders;

        Mail::to($order->email)->send(new OrderUser($objMailUser));

        return $order->id;
    }
}
