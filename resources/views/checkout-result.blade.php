@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
                <div class="secondary_page_wrapper">
                    <div class="container">
                        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">Начало</a></li>
                            <li>Направена поръчка</li>
                        </ul>
                        <h1 class="page_title">Поръчка № {{ $order->id }}</h1>
                        <p>Благодарим Ви за направената поръчка!</p>
                        <p>Ще се свържем с Вас за уточняване и потвърждение на направената поръчка.</p>
                        @auth
                        <p>Междувременно можете да използвате следния линк за проследяване на състоянието на Вашата поръчка.&nbsp;<a href="{{ route('show-order', ['id' => $order->id]) }}">Към поръчката</a></p>
                        @endauth
                        <!-- show tbi info -->
                        @if ($order->payment == 'tbi')
                        <!-- За вмъкване в страницата Потвърждение на поръчката -->
                        @php
                        $username = explode(" ", $order->user_name);
                        $fname = '';
                        if(!empty($username[0])){
                            $fname = $username[0];
                        }
                        $lname = '';
                        if(!empty($username[1])){
                            $lname = $username[1];
                        }
                        /* ######################### Зареждане на параметри ######################## */
                        $tbipayment_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';// Уникален идентификатор на магазина, получен от TBI Контролния Панел
                        $tbipayment_store_id = '3793';// Код на магазина Ви в eCommerce TBI Bank системата. Необходим за удостоверяване пред системата.
                        $tbipayment_username = 'avalonbg_sys';// Потребителско име в eCommerce TBI Bank системата. Необходим за удостоверяване пред системата.
                        $tbipayment_password = 'avalon2019';// Парола в eCommerce TBI Bank системата. Необходима за удостоверяване пред системата.
                        $tbipayment_fname = $fname;// Име на клиента
                        $tbipayment_lname = $lname;// Фамилия на клиента
                        $tbipayment_email = $order->email;// E-mail на клиента
                        $tbipayment_phone = $order->phone;// Телефон на клиента във формат 0XXXXXXXXX
                        $tbipayment_billing_address = $order->address;// Адрес за документи
                        $tbipayment_billing_city = $order->city;// Населено място за документи
                        $tbipayment_billing_county = '';// Регион за документи
                        $tbipayment_shipping_address = $order->address2;// Адрес за документи
                        $tbipayment_shipping_city = $order->city2;// Населено място за документи
                        $tbipayment_shipping_county = '';// Регион за документи
                        /* ######################### Зареждане на параметри ######################## */

	/* ######################### Параметри получени от страницата с продукта ######################## */
	if (isset($_POST['tbipayment_mesecna'])){
		$tbipayment_mesecna = floatval($_POST['tbipayment_mesecna']);
	}else{
		$tbipayment_mesecna = 0.00;
	}
	if (isset($_POST['tbipayment_gpr_input'])){
		$tbipayment_gpr_input = floatval($_POST['tbipayment_gpr_input']);
	}else{
		$tbipayment_gpr_input = 0.00;
	}
	if (isset($_POST['tbipayment_obshtozaplashtane_input'])){
		$tbipayment_obshtozaplashtane_input = floatval($_POST['tbipayment_obshtozaplashtane_input']);
	}else{
		$tbipayment_obshtozaplashtane_input = 0.00;
	}
	if (isset($_POST['tpaymentpurcent'])){
		$tpaymentpurcent = intval($_POST['tpaymentpurcent']);
	}else{
		$tpaymentpurcent = 12;
	}
	if (isset($_POST['product_id'])){
		$product_id = intval($_POST['product_id']);
	}else{
		$product_id = 0;
	}
	if (isset($_POST['tbipayment_price'])){
		$tbipayment_price = floatval($_POST['tbipayment_price']);
	}else{
		$tbipayment_price = 0.00;
	}
	if (isset($_POST['product_quantity'])){
		$product_quantity = intval($_POST['product_quantity']);
	}else{
		$product_quantity = 0;
	}
	if (isset($_POST['tbipayment_product_name'])){
		$tbipayment_product_name = $_POST['tbipayment_product_name'];
	}else{
		$tbipayment_product_name = 0;
	}
	if (isset($_POST['tbipayment_product_image'])){
		$tbipayment_product_image = $_POST['tbipayment_product_image'];
	}else{
		$tbipayment_product_image = 0;
	}
	/* ######################### Параметри получени от страницата с продукта ######################## */

	if (!defined('TBIPAYMENT_LIVEURL'))
		define('TBIPAYMENT_LIVEURL', 'https://api.tbibank.support');
	if (!defined('TBIPAYMENT_MOD_VERSION'))
		define('TBIPAYMENT_MOD_VERSION', '1.0.3');

	$tbipayment_ch = curl_init();
	curl_setopt($tbipayment_ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($tbipayment_ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($tbipayment_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/getparameters.php?cid='.$tbipayment_unicid);
	$paramstbipayment = json_decode(curl_exec($tbipayment_ch), true);
	curl_close($tbipayment_ch);

	$tbipayments_testenv = intval($paramstbipayment['tbi_testenv']);
	$tbipayments_testportal = $paramstbipayment['tbi_testportal'];
	$tbipayments_liveportal = $paramstbipayment['tbi_liveportal'];
	$tbipayments_interest = $paramstbipayment['tbi_interest'];
	$tbipayments_promo = intval($paramstbipayment['tbi_promo']);
	if ($tbipayments_testenv ==  1){
		$tbipayments_portal = $tbipayments_testportal;
		$tbipayment_envurl = $paramstbipayment['tbi_testurl'];
		$subscription_key = '250078af85d54d2bab6af1170f7d648c';
	}else{
		$tbipayments_portal = $tbipayments_liveportal;
		$tbipayment_envurl = $paramstbipayment['tbi_liveurl'];
		$subscription_key = 'd2304c1fe5de43d8837d081192a9a39b';
	}

	$tbipayment_items[0]['name'] = $tbipayment_product_name;
	$tbipayment_items[0]['quantity'] = $product_quantity;
	$tbipayment_price_one = $tbipayment_price / $product_quantity;
	$tbipayment_items[0]['price'] = $tbipayment_price_one;
	$tbipayment_items[0]['category'] = "0";
	$tbipayment_items[0]['sku'] = "";
	$tbipayment_items[0]['imagelink'] = $tbipayment_product_image;

	$tbipayment_url = TBIPAYMENT_LIVEURL . "/function/status.php";
	$tbipayment_cnp = '';

	// Create tbi order i data base
	$tbipayment_add_ch = curl_init();
	curl_setopt($tbipayment_add_ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($tbipayment_add_ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($tbipayment_add_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/addorders.php?cid='.$tbipayment_unicid);
	curl_setopt($tbipayment_add_ch, CURLOPT_POST, 1);
	$tbipayment_post = [
		'resellerCode'      => $tbipayment_store_id,
		'orderId'      =>  '',
		'backRef'      =>  $tbipayment_url,
		'orderTotal'   =>  $tbipayment_price,
		'username'	=> $tbipayment_username,
		'password'	=> $tbipayment_password,
		'vnoska' => $tbipayment_mesecna,
		'gpr' => $tbipayment_gpr_input,
		'vnoski' => $tpaymentpurcent,
		'parva' => $tbipayment_parva_input,
		'obshtozaplashtane' => $tbipayment_obshtozaplashtane_input,
		'customer'      =>  [
			'firstName'         => $tbipayment_fname,
			'lastName'         => $tbipayment_lname,
			'pin'           => $tbipayment_cnp, //$tbipayment_cnp,
			'email'         => $tbipayment_email,
			'phone'         => $tbipayment_phone,
			'billingAddress'      => $tbipayment_billing_address,
			'billingCity'          => $tbipayment_billing_city,
			'billingCounty'        => $tbipayment_billing_county,
			'deliveryAddress'      => $tbipayment_shipping_address,
			'deliveryCity'          => $tbipayment_shipping_city,
			'deliveryCounty'        => $tbipayment_shipping_county,
			'installments'		=>	$tpaymentpurcent,
			'interestRate'		=>	$tbipayments_interest,
			'promo'		=>	$tbipayments_promo
		],
		'items' => $tbipayment_items
	];
	curl_setopt($tbipayment_add_ch, CURLOPT_POSTFIELDS, http_build_query($tbipayment_post));
	$paramstbiadd=json_decode(curl_exec($tbipayment_add_ch), true);
	curl_close($tbipayment_add_ch);
	// Create tbi order i data base

	if (isset($paramstbiadd['status']) && ($paramstbiadd['status'] == 'Yes')){
		// send to softinteligens
		$tbipayment_post = [
			'resellerCode'      => $tbipayment_store_id,
			'orderId'      =>  $paramstbiadd['newid'],
			'backRef'      =>  $tbipayment_url,
			'orderTotal'   =>  $tbipayment_price,
			'username'	=> $tbipayment_username,
			'password'	=> $tbipayment_password,
			'customer'      =>  [
				'firstName'         => $tbipayment_fname,
				'lastName'         => $tbipayment_lname,
				'pin'           => $tbipayment_cnp, //$tbipayment_cnp,
				'email'         => $tbipayment_email,
				'phone'         => $tbipayment_phone,
				'billingAddress'      => $tbipayment_billing_address,
				'billingCity'          => $tbipayment_billing_city,
				'billingCounty'        => $tbipayment_billing_county,
				'deliveryAddress'      => $tbipayment_shipping_address,
				'deliveryCity'          => $tbipayment_shipping_city,
				'deliveryCounty'        => $tbipayment_shipping_county,
				'installments'		=>	$tpaymentpurcent,
				'interestRate'		=>	$tbipayments_interest,
				'promo'		=>	$tbipayments_promo
			],
			'items' => $tbipayment_items
		];

		$tbipayment_plaintext = json_encode($tbipayment_post);

		$tbipayment_publicKey = openssl_pkey_get_public(
'-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1nHhsSdpXtPGfLf62yX9
Tdmf9baXk65xenypDy+V7I6aLXIexsH39noWACkJw1L2Y9ANJE8hgdf6Zsgx0J3B
62efLmZYpQVJHOz+Ck4vZnY8gAdIeTlCT+J+1IX90k/0r1tW1ejHbEBA51u9lzSR
MCx387NEDTMOx84qnYWu1NOGj1IJjQufy2qcjmq8Vnw6DvLEr+k7iUJ6pKcZE3Fu
+rfL2qQSY51yWkkTshu0FcjXWKfKijWmC+mQSBJjIUhfyy0ogjJ67RbXEXIj90mG
ROhdznoeV5ivA/ncCiUPdR5S6vw2u6I/LT5p/P06ET9zTzJugD0BGBfUuFDmJfGh
8QIDAQAB
-----END PUBLIC KEY-----'
		);
		$tbipayment_a_key = openssl_pkey_get_details($tbipayment_publicKey);
		$tbipayment_chunkSize = ceil($tbipayment_a_key['bits'] / 8) - 11;
		$tbipayment_output = '';

		while ($tbipayment_plaintext) {
			$tbipayment_chunk = substr($tbipayment_plaintext, 0, $tbipayment_chunkSize);
			$tbipayment_plaintext = substr($tbipayment_plaintext, $tbipayment_chunkSize);
			$tbipayment_encrypted = '';
			if (!openssl_public_encrypt($tbipayment_chunk, $tbipayment_encrypted, $tbipayment_publicKey)) {
				die('Failed to encrypt data');
			}
			$tbipayment_output .= $tbipayment_encrypted;
		}
		openssl_free_key($tbipayment_publicKey);
		$tbipayment_output64 = base64_encode($tbipayment_output);

		$tbipayment_pause_txt = $paramstbipayment['tbi_pause_txt'];
		$tbi_order_id = $paramstbiadd['newid'];
                            @endphp
		<style>
		/* loader panel */
		#tbiloaderpanel {
			display: none;
			position: fixed;
			top:calc(100% / 2);
			left:calc(100% / 2 - 200px);
			background: white;
			z-index:999;
			border: 2px solid #f3f3f3;
			width: 400px;
			height: 90px;
		}
		#tbiloader {
			position: absolute;
			top:10px;
			left:10px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #f07524;
			width: 70px;
			height: 70px;
			-webkit-animation: spin 2s linear infinite; /* Safari */
			animation: spin 2s linear infinite;
		}
		#tbiloadertext {
			position: absolute;
			top: 0px;
			left: 90px;
			padding:10px;
			width: 100% - 90px;
			font-size: 12px;
			font-weight: bold;
			text-align: center;
			color: #f07524;
		}
		#tbiloaderimg {
			position: absolute;
			top:45px;
			width: 100%;
			text-align: center;
		}
		/* Safari */
		@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		/* loader panel */
		</style>
		<div id="tbiloaderpanel">
		<div id="tbiloader"></div>
		<div id="tbiloadertext"><?php echo $tbipayment_pause_txt; ?></div>
		<div id="tbiloaderimg"><img src="<?php echo TBIPAYMENT_LIVEURL . '/dist/img/logo.png'; ?>" alt="TBI" /></div>
		</div>
<?php

		//send request
		$tbipayment_url = TBIPAYMENT_LIVEURL . "/function/status.php";

		$data_array = array("orderData" => $tbipayment_output64, "encryptCode" => 'avalon_bg');
		$data_string = json_encode($data_array);
		$request_headers = array();
		$request_headers[] = 'Content-Type: application/json';
		$request_headers[] = 'Ocp-Apim-Trace: true';
		$request_headers[] = 'Ocp-Apim-Subscription-Key: 250078af85d54d2bab6af1170f7d648c';
		$chr = curl_init();
		//curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($chr, CURLOPT_URL, $tbipayment_envurl);
		curl_setopt($chr, CURLOPT_CUSTOMREQUEST, "POST");
		//curl_setopt($chr, CURLOPT_POST, 1);
		curl_setopt($chr, CURLOPT_HTTPHEADER, $request_headers);
		curl_setopt($chr, CURLOPT_POSTFIELDS, $data_string);
		$response_body = curl_exec($chr);
		curl_close($chr);

		$responce_array = json_decode($response_body);
		if (isset($responce_array->creditApplicationId)){
			$send_redy = "Yes";
			$tbipayment_guid = $responce_array->creditApplicationId;
		}else{
			$send_redy = "No";
			$tbipayment_guid = "";
		}

		if ($send_redy == 'Yes'){
		?>
			<script>
			var tbiloaderpanel = document.getElementById("tbiloaderpanel");
			tbiloaderpanel.style.display = "block";
			window.location.href = '<?php echo $tbipayments_portal . $tbipayment_guid; ?>';
			</script>
		<?php
		}

	}
	?>
<!-- За вмъкване в страницата Потвърждение на поръчката -->
                        @endif
                        <!-- show tbi info -->
                    </div>
                    <!--/ .container-->
                </div>
                <!--/ .page_wrapper-->
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - -->
            </div>
        </div>
    </div>
</div>

@endsection
