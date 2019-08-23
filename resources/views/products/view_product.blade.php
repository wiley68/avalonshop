<?php use App\Attribute; ?>
<?php use App\AttributeValues; ?>
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
                            @php
                            $category_id = [];
                            $category_id[] = $product_category->id;
                            @endphp
                            <li><a
                                    href="{{ route('products', ['category_id' => $category_id]) }}">{{ $product_category->name }}</a>
                            </li>
                            <li>{{ $product->name }}</li>
                        </ul>
                        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <div class="clearfix">
                                <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->
                                <div class="single_product">
                                    <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->
                                    <div class="image_preview_container">
                                        <img id="img_zoom"
                                            data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png"
                                            src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png"
                                            alt="">
                                        <button class="button_grey_2 icon_btn middle_btn open_qv"><i
                                                class="icon-resize-full-6"></i></button>
                                    </div>
                                    <!--/ .image_preview_container-->
                                    <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                                    <div class="product_preview">
                                        <div class="owl_carousel" id="thumbnails">
                                            <a href="#"
                                                data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png"
                                                data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png"
                                                    data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png"
                                                    alt="{{ $product->name }}-1"
                                                    onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#"
                                                data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png"
                                                data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png"
                                                    data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png"
                                                    alt="{{ $product->name }}-2"
                                                    onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#"
                                                data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png"
                                                data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png"
                                                    data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png"
                                                    alt="{{ $product->name }}-3"
                                                    onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#"
                                                data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_4.png"
                                                data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_4.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_4.png"
                                                    data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_4.png"
                                                    alt="{{ $product->name }}-4"
                                                    onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                        </div>
                                        <!--/ .owl-carousel-->
                                    </div>
                                    <!--/ .product_preview-->
                                    <!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                                </div>
                                <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->
                                <div class="single_product_description">
                                    <h3 class="offset_title"><a
                                            href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                    </h3>
                                    <!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->
                                    <div class="page-nav">
                                        <a href="#" class="page-prev"></a>
                                        <a href="#" class="page-next"></a>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->
                                    <div class="description_section v_centered">
                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                        @php
                                        $all_rev = 0;
                                        foreach ($reviews as $review){
                                        $all_rev += $review->price + $review->value + $review->quantity;
                                        }
                                        if ($reviews->count() > 0){
                                        $all_rev = floor($all_rev / $reviews->count() * 3);
                                        }
                                        @endphp
                                        <ul class="rating">
                                            <li @if ($all_rev> 0) class="active" @endif></li>
                                            <li @if ($all_rev> 1) class="active" @endif></li>
                                            <li @if ($all_rev> 2) class="active" @endif></li>
                                            <li @if ($all_rev> 3) class="active" @endif></li>
                                            <li @if ($all_rev> 4) class="active" @endif></li>
                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                        <ul class="topbar">
                                            <li>{{ $reviews->count() }} Отзив(а)</li>
                                            <li>{{ $product->visits }}&nbsp;посещения</li>
                                        </ul>
                                        <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <div class="description_section">
                                        <table class="product_info">
                                            <tbody>
                                                <tr>
                                                    <td>Производител: </td>
                                                    <td><a
                                                            href="{{ route('products', ['manufacturer_id'=>$manufacturer_id]) }}">{{ $manufacturer_name }}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Наличност: </td>
                                                    <td><span class="in_stock">{{ $product->instock }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Продуктов код: </td>
                                                    <td>{{ $product->code }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="description_section">
                                        <p>{!! $product->short_description !!}</p>
                                    </div>
                                    <hr>
                                    <p class="product_price"><b id="total_price"
                                        class="theme_color">{{ number_format($product->price, 2, ".", "") }}</b>&nbsp;лв.
                                    </p>
                                    <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->
                                    <div class="description_section_2 v_centered">

                                        <span class="title">Количество:</span>
                                        <div class="qty min clearfix">
                                            <button id="minus" class="theme_button" data-direction="minus">&#45;</button>
                                            <input type="text" id="quantity" value="1">
                                            <button id="plus" class="theme_button" data-direction="plus">&#43;</button>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                    <div class="buttons_row">
                                        <button id="btn_buy" class="button_blue middle_btn">Купи</button>
                                        <button
                                            class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"
                                            onclick="clickBtnAddFavorite(event, {{ $product->id }})"><span
                                                class="tooltip top">Добави към любими</span></button>
                                    </div>
                                    <!-- TBI Bank -->
		                            @php
                                    /* ######################### Зареждане на параметри ######################## */
                                    $tbipayment_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';// Уникален идентификатор на магазина, получен от TBI Контролния Панел
                                    $product_id = $product->id; // Задайте променливата на PHP, която определя продуктовия id на продукта в страницата
                                    $tbipayment_price = $product->price; // Задайте променливата на PHP, която определя продуктовата цена на продукта в страницата
                                    $product_quantity = '1'; // Задайте променливата на PHP, която определя продуктовата бройка на продукта в страницата
                                    $tbipayment_product_name = $product->name; // Задайте променливата на PHP, която определя продуктовото име на продукта в страницата
                                    $tbipayment_product_image = Config::get('settings.backend') . '/dist/img/products/product_' . $product->id . '_1.png'; // Задайте променливата на PHP, която определя URL на снимката на продукта
                                    $product_cats = null; // Тази променлива е масив от категориите в които влиза Вашия продукт (незадължителна)
                                    /* ######################### Зареждане на параметри ######################## */

                                    /* ######################### Параметър на адрес за пренасочване след избиране на бутона "Добави в количката" ######################## */
                                    /* Този параметър Ви дава възможност да изберете към кой адрес от Вашия магазин да прехвърлите данните събрани от калкулатора. */
                                    /* Обикновенно това е Вашата страница за потвърждение на покупката */
                                    /* Можете да прехвърлите към Вашата кошница като едновременно с това добавите избрания продукт в нея */
                                    /* Ако изберете адреса на кошницата можете от там последователно да прехвърляте получените от адреса данни към вашата страница за потвърждение на покупката */
                                    /* Данните които ще получи посочения тук от Вас адрес са изпратени с POST метод и са както следва: */
                                    /* $tbipayment_mesecna - Указва месечната вноска */
                                    /* $tbipayment_gpr_input - Стойността на GPR */
                                    /* $tbipayment_parva_input - Първоначална вноска */
                                    /* $tbipayment_obshtozaplashtane_input - Общо за плащане */
                                    /* $tpaymentpurcent = Брой вноски */
                                    /* $product_id - Продуктов идентификатор */
                                    /* $tbipayment_price - Обща цена за продукта */
                                    /* $product_quantity - Брой продукти */
                                    /* $tbipayment_product_name - Име на продукта */
                                    $tbipayment_confirm = "/product/add-to-cart.html";
                                    /* ######################### Параметър на адрес за пренасочване след избиране на бутона "Добави в количката" ######################## */

                                    if (!defined('TBIPAYMENT_LIVEURL'))
                                        define('TBIPAYMENT_LIVEURL', 'https://api.tbibank.support');
                                    if (!defined('TBIPAYMENT_MOD_VERSION'))
                                        define('TBIPAYMENT_MOD_VERSION', '1.0.4');

                                    $tbi_ch = curl_init();
                                    curl_setopt($tbi_ch, CURLOPT_SSL_VERIFYPEER, false);
                                    curl_setopt($tbi_ch, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($tbi_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/getparameters.php?cid='.$tbipayment_unicid);
                                    $paramstbi = json_decode(curl_exec($tbi_ch), true);
                                    curl_close($tbi_ch);

                                    $tbi_4m = $paramstbi['tbi_4m'];
                                    $tbi_4m_categories = $paramstbi['tbi_4m_categories'];
                                    $tbi_4m_manufacturers = $paramstbi['tbi_4m_manufacturers'];
                                    $tbi_4m_min = $paramstbi['tbi_4m_min'];
                                    $tbi_4m_max = $paramstbi['tbi_4m_max'];
                                    $tbi_4m_pv = $paramstbi['tbi_4m_pv'];
                                    $tbi_5m = $paramstbi['tbi_5m'];
                                    $tbi_5m_categories = $paramstbi['tbi_5m_categories'];
                                    $tbi_5m_manufacturers = $paramstbi['tbi_5m_manufacturers'];
                                    $tbi_5m_min = $paramstbi['tbi_5m_min'];
                                    $tbi_5m_max = $paramstbi['tbi_5m_max'];
                                    $tbi_5m_pv = $paramstbi['tbi_5m_pv'];
                                    $tbi_6m = $paramstbi['tbi_6m'];
                                    $tbi_6m_categories = $paramstbi['tbi_6m_categories'];
                                    $tbi_6m_manufacturers = $paramstbi['tbi_6m_manufacturers'];
                                    $tbi_6m_min = $paramstbi['tbi_6m_min'];
                                    $tbi_6m_max = $paramstbi['tbi_6m_max'];
                                    $tbi_6m_pv = $paramstbi['tbi_6m_pv'];
                                    $tbi_9m = $paramstbi['tbi_9m'];
                                    $tbi_9m_categories = $paramstbi['tbi_9m_categories'];
                                    $tbi_9m_manufacturers = $paramstbi['tbi_9m_manufacturers'];
                                    $tbi_9m_min = $paramstbi['tbi_9m_min'];
                                    $tbi_9m_max = $paramstbi['tbi_9m_max'];
                                    $tbi_9m_pv = $paramstbi['tbi_9m_pv'];
                                    $tbi_purcent_default = $paramstbi['tbi_purcent_default'];
                                    $tbi_btnvisible = $paramstbi['tbi_btnvisible'];
                                    $tbipayment_zaglavie = $paramstbi['tbi_zaglavie'];
                                    $tbipayment_backurl = $paramstbi['tbi_backurl'];
                                    $tbipayment_pokazi = intval($paramstbi['tbi_pokazi']);

                                    $tbipayment_price = floatval($tbipayment_price) * floatval($product_quantity);

                                    if ($tbi_4m == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_4m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is4m = 'No';
                                    }

                                    if ($tbi_4m_pv == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_4m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is4m_pv = 'No';
                                    }

                                    if ($tbi_5m == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_5m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is5m = 'No';
                                    }

                                    if ($tbi_5m_pv == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_5m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is5m_pv = 'No';
                                    }

                                    if ($tbi_6m == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_6m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is6m = 'No';
                                    }

                                    if ($tbi_6m_pv == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_6m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is6m_pv = 'No';
                                    }

                                    if ($tbi_9m == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_9m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                        }else{
                                        $is9m = 'No';
                                    }

                                    if ($tbi_9m_pv == "Yes"){
                                        if (is_numeric($product_id)){
                                            $categories = explode('_', $paramstbi['tbi_9m_categories']);
                                            if (isProductInCategories($categories, $product_cats)){
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
                                    $tbipayment_ch = curl_init();
                                    curl_setopt($tbipayment_ch, CURLOPT_SSL_VERIFYPEER, false);
                                    curl_setopt($tbipayment_ch, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($tbipayment_ch, CURLOPT_URL, TBIPAYMENT_LIVEURL . '/function/getcalculation.php?cid='.$tbipayment_unicid.'&tbipayment_price='.$tbipayment_price.'&is4m='.$is4m.'&is4m_pv='.$is4m_pv.'&is5m='.$is5m.'&is5m_pv='.$is5m_pv.'&is6m='.$is6m.'&is6m_pv='.$is6m_pv.'&is9m='.$is9m.'&is9m_pv='.$is9m_pv.'&tbi_purcent_default='.$tbi_purcent_default.'&deviceis='.$deviceis);
                                    $paramstbipayment = json_decode(curl_exec($tbipayment_ch), true);
                                    curl_close($tbipayment_ch);

                                    $tbipayment_picture = $paramstbipayment['tbipayment_picture'];
                                    $tbipayment_reklama_url = $paramstbipayment['tbipayment_reklama_url'];
                                    $str4m = $paramstbipayment['str4m'];
                                    $str5m = $paramstbipayment['str5m'];
                                    $str6m = $paramstbipayment['str6m'];
                                    $str9m = $paramstbipayment['str9m'];
                                    $tbipayment_parva_input = $paramstbipayment['tbipayment_parva_input'];
                                    $tbipayment_obshto_input = number_format($paramstbipayment['tbipayment_obshto_input'], 2, ".", "");
                                    $tbipayment_obshtozaplashtane_input = number_format($paramstbipayment['tbipayment_obshtozaplashtane_input'], 2, ".", "");
                                    $tpaymentpurcent = $paramstbipayment['tpaymentpurcent'];
                                    $tbipayment_mesecna = number_format($paramstbipayment['tbipayment_mesecna'], 2, ".", "");
                                    $tbipayment_gpr = number_format($paramstbipayment['tbipayment_gpr'], 2, ".", "");
                                    $tbipayment_gpr_color = $paramstbipayment['tbipayment_gpr_color'];
                                    $tbipayment_meseci_new = $paramstbipayment['tbipayment_meseci_new'];

                                    //test 0%
                                    if ((($is4m == 'Yes' || $is4m_pv == 'Yes') && $tbi_purcent_default == 2) || (($is6m == 'Yes' || $is6m_pv == 'Yes') && $tbi_purcent_default == 3) || (($is9m == 'Yes' || $is9m_pv == 'Yes') && $tbi_purcent_default == 4)){
                                        $iszerrolihva = 'Yes';
                                    }else{
                                        $iszerrolihva = 'No';
                                    }
                                    @endphp

                                    @if ($tbi_btnvisible == 'Yes')
                                        <div style="padding-bottom:10px;"></div>
                                        <hr />
                                        @if ($tbipayment_zaglavie != '')
                                            <table class="tbi_table" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td class="tbi_button_div_table" style="background-color:#F8F8F8 !important;padding-left:0px !important;">
                                                        <div class="tbi_button_div_txt">
                                                            {{$tbipayment_zaglavie}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        @endif
                                        <table class="tbi_table" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="tbi_table_td" style="background-color:#F8F8F8 !important;padding-left:0px !important;">
                                                    <div id="btn_tbipayment" class="tbi_button_div">
                                                        <div class="tbi_button_head"></div>
                                                        <div class="tbi_button_body">
                                                            @if ($iszerrolihva == 'Yes')
                                                            0% лихва
                                                            @endif
                                                            на {{$tbipayment_meseci_new}} вноски по {{$tbipayment_mesecna}} лв.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--  Show panel -->
                                        <style>
                                            /* calculator popup */
                                            .modalpayment {
                                            display: none;
                                            position: fixed;
                                            z-index: 999999 !important;
                                            left: 0;
                                            top: 0;
                                            width: 100%;
                                            height: 100%;
                                            overflow: auto;
                                            background-color: rgb(0,0,0);
                                            background-color: rgba(0,0,0,0.4);
                                            font-family: 'Arial', sans-serif;
                                            font-size: 14px;
                                            }

                                            .modalpayment-content {
                                            position: relative;
                                            background-color: #fefefe;
                                            margin: auto;
                                            padding: 0;
                                            border: 1px solid #888;
                                            max-width: 50%;
                                            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                                            }

                                            .tbipayment_body{
                                            padding: 10px;
                                            font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
                                            font-size: 14px;
                                            font-style: normal;
                                            color: #696969;
                                            }

                                            .tbipayment_title{
                                            background:#F5F5F5;
                                            padding: 8px 15px 8px 15px;
                                            color:#EE7423;
                                            font-size:14px;
                                            }

                                            .tbipayment_product_title{
                                            font-size:18px;
                                            font-weight:bold;
                                            }

                                            .tbipayment_table{
                                            width:100% !important;
                                            font-size:14px !important;
                                            padding:0px !important;
                                            margin:0px !important;
                                            }

                                            .tbipayment_row_title{
                                            font-size:14px !important;
                                            width:60% !important;
                                            padding:2px !important;
                                            background:transparent !important;
                                            border:0px none white !important;
                                            }

                                            .tbipayment_row_input{
                                            width:40% !important;
                                            padding:2px !important;
                                            background:transparent !important;
                                            border:0px none white !important;
                                            }

                                            .tbipayment_row{
                                            font-size:14px !important;
                                            padding:2px !important;
                                            background:transparent !important;
                                            border:0px none white !important;
                                            }

                                            .tbipayment_input{
                                            font-size:14px !important;
                                            width:100% !important;
                                            border: 1px solid #696969 !important;
                                            padding:0px !important;
                                            margin:0px !important;
                                            max-height:22px !important;
                                            color:black !important;
                                            }

                                            .passive{
                                            background:#F5F5F5 !important;
                                            }

                                            .tbipayment_btn_pre{
                                            cursor:pointer !important;
                                            text-align:center !important;
                                            border: 1px solid #708090 !important;
                                            background: #EE7423 !important;
                                            color:white;width:100px !important;
                                            }

                                            .tbipayment_hr{
                                            border-top:0px solid white !important;
                                            border-right:0px solid white !important;
                                            border-bottom:1px solid #DCDCDC !important;
                                            border-left:0px solid white !important;
                                            }

                                            .tbipayment_btn_primary{
                                            cursor:pointer !important;
                                            text-align:center !important;
                                            border: 1px solid #708090 !important;
                                            background: #EE7423 !important;
                                            color:white !important;
                                            width:100% !important;
                                            font-size:14px !important;
                                            padding-top:8px !important;
                                            height:40px !important;
                                            }

                                            .tbipayment_btn_seccondary{
                                            cursor:pointer !important;
                                            text-align:center !important;
                                            border: 1px solid #708090 !important;
                                            background: #848789 !important;
                                            color:white !important;
                                            width:100% !important;
                                            font-size:14px !important;
                                            padding-top:8px !important;
                                            height:40px !important;
                                            }

                                            .tbipayment_image{
                                            vertical-align:bottom !important;
                                            max-height:100% !important;
                                            max-width:100% !important;
                                            }

                                            .tbipayment_text_cc{
                                            text-align:right !important;
                                            font-size:11px !important;
                                            }

                                            @media (max-width: 1199px)
                                            {
                                            .modalpayment-content {
                                            max-width: 600px;
                                            }
                                            }
                                            /* calculator popup */
                                            .tbi_button_mess{
                                            width:252px !important;
                                            white-space: nowrap !important;
                                            font-size:14px !important;
                                            color:#EC7423 !important;
                                            font-weight:bold !important;
                                            }
                                            .tbi_button_div{
                                            border:1px solid #EC7423 !important;
                                            cursor:pointer !important;
                                            width:252px !important;
                                            height:52px !important;
                                            box-sizing: border-box !important;
                                            }
                                            .tbi_button_div_txt{
                                            width:252px !important;
                                            color:#EC7423 !important;
                                            font-size:14px !important;
                                            font-weight:bold !important;
                                            vertical-align: bottom !important;
                                            text-align:center !important;
                                            line-height: 20px !important;
                                            }
                                            .tbi_button_div_table{
                                            padding-right:5px;
                                            padding-top:0px;
                                            padding-bottom:0px;
                                            background: white !important;
                                            }
                                            .tbi_button_head{
                                            height:30px !important;
                                            background: url('https://tbibank.support/calculators/assets/img/buttons/tbi_head.png');
                                            }
                                            .tbi_button_head:hover{
                                            background: url('https://tbibank.support/calculators/assets/img/buttons/tbi_head_hover.png');
                                            }
                                            .tbi_button_body{
                                            height:20px !important;
                                            background-color:#EC7423 !important;
                                            text-align:center !important;
                                            color:white !important;
                                            font-size:14px !important;
                                            font-weight:normal !important;
                                            vertical-align: middle !important;
                                            line-height: 20px !important;
                                            }
                                            .tbi_table{
                                            border: 0px none white !important;
                                            background: white !important;
                                            padding: 0px;
                                            margin: 0px;
                                            }
                                            .tbi_table_td{
                                            padding-right:5px !important;
                                            padding-bottom:5px !important;
                                            padding-top:0px !important;
                                            background: white !important;
                                            }
                                        </style>

                                        <input type="hidden" name="tbipayment_liveurl" id="tbipayment_liveurl" value="<?php echo TBIPAYMENT_LIVEURL; ?>" />
                                        <input type="hidden" name="tbipayment_unicid" id="tbipayment_unicid" value="<?php echo $tbipayment_unicid; ?>" />
                                        <input type="hidden" name="is4m" id="is4m" value="<?php echo $is4m; ?>" />
                                        <input type="hidden" name="is4m_pv" id="is4m_pv" value="<?php echo $is4m_pv; ?>" />
                                        <input type="hidden" name="is5m" id="is5m" value="<?php echo $is5m; ?>" />
                                        <input type="hidden" name="is5m_pv" id="is5m_pv" value="<?php echo $is5m_pv; ?>" />
                                        <input type="hidden" name="is6m" id="is6m" value="<?php echo $is6m; ?>" />
                                        <input type="hidden" name="is6m_pv" id="is6m_pv" value="<?php echo $is6m_pv; ?>" />
                                        <input type="hidden" name="is9m" id="is9m" value="<?php echo $is9m; ?>" />
                                        <input type="hidden" name="is9m_pv" id="is9m_pv" value="<?php echo $is9m_pv; ?>" />
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>" />
                                        <div id="tbipayment_box" class="modalpayment">
                                            <div class="modalpayment-content">
                                                <div id="tbipayment_body" class="modal-body">
                                                    <div>
                                                        <div class="tbipayment_body">
                                                            <a target="_blank" href="<?php echo $tbipayment_reklama_url; ?>"><img class="tbipayment_image" title="Кредитен калкулатор TBI Bank <?php echo TBIPAYMENT_MOD_VERSION; ?>" src="<?php echo $tbipayment_picture; ?>" alt="Кредитен калкулатор TBI Bank <?php echo TBIPAYMENT_MOD_VERSION; ?>"></a>
                                                            <div style="padding-bottom:5px;"></div>
                                                            <div class="tbipayment_title">Вземи желания продукт сега, с няколко лесни стъпки! <a href="<?php echo $tbipayment_backurl; ?>" target="_blank" style="color:#4682B4;text-decoration: underline;">Виж детайли!</a></div>
                                                            <div style="padding-bottom:5px;"></div>
                                                            <span class="tbipayment_product_title"><?php echo $tbipayment_product_name; ?></span>
                                                            <div style="padding-bottom:5px;"></div>
                                                            <table class="tbipayment_table">
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        Цена на продукта/лв./
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input id="tbipayment_price" type="text" class="tbipayment_input passive" readonly="readonly" value="<?php echo number_format($tbipayment_price, 2, ".", ""); ?>" />
                                                                    </td>
                                                                </tr>
                                                                <input type="hidden" name="tpaymentpurcent" id="tpaymentpurcent" value="<?php echo $tpaymentpurcent; ?>" />
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        Срок на кредита/месеца/
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <select class="tbipayment_input" name="tbipayment_pogasitelni_vnoski_input" id="tbipayment_pogasitelni_vnoski_input" >
                                                                            <?php if ($tbipayment_pokazi & 2048){ ?>
                                                                                <?php if ($tpaymentpurcent == 7){ ?>
                                                                                    <option value="12" selected>8 месеца, ПРОМОЦИЯ-първа вноска гратис</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="12">8 месеца, ПРОМОЦИЯ-първа вноска гратис</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 1024){ ?>
                                                                                <?php if ($tpaymentpurcent == 10){ ?>
                                                                                    <option value="11" selected>11 месеца, ПРОМОЦИЯ-с ПВ и 1.1% оскъпяване</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="11">11 месеца, ПРОМОЦИЯ-с ПВ и 1.1% оскъпяване</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 8192){ ?>
                                                                                <?php if ($tpaymentpurcent == 14){ ?>
                                                                                    <option value="14" selected>12 месеца, ПРОМОЦИЯ-минус 5% от цената</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="14">12 месеца, ПРОМОЦИЯ-минус 5% от цената</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 4096){ ?>
                                                                                <?php if ($tpaymentpurcent == 11){ ?>
                                                                                    <option value="13" selected>13 месеца, ПРОМОЦИЯ-първите 2 вноски гратис</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="13">13 месеца, ПРОМОЦИЯ-първите 2 вноски гратис</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <option style="font-size: 1pt; background-color: Silver;" disabled>&nbsp;</option>
                                                                            <?php if ($tbipayment_pokazi & 512){ ?>
                                                                                <?php if ($tpaymentpurcent == 36){ ?>
                                                                                    <option value="10" selected>36 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="10">36 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 256){ ?>
                                                                                <?php if ($tpaymentpurcent == 30){ ?>
                                                                                    <option value="9" selected>30 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="9">30 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 128){ ?>
                                                                                <?php if ($tpaymentpurcent == 24){ ?>
                                                                                    <option value="8" selected>24 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="8">24 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 64){ ?>
                                                                                <?php if ($tpaymentpurcent == 18){ ?>
                                                                                    <option value="7" selected>18 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="7">18 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 32){ ?>
                                                                                <?php if ($tpaymentpurcent == 15){ ?>
                                                                                    <option value="6" selected>15 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="6">15 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 16){ ?>
                                                                                <?php if ($tpaymentpurcent == 12){ ?>
                                                                                    <option value="5" selected>12 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="5">12 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 8){ ?>
                                                                                <?php if ($tpaymentpurcent == 9){ ?>
                                                                                    <option value="4" selected>9 месеца<?php echo $str9m; ?></option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="4">9 месеца<?php echo $str9m; ?></option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 4){ ?>
                                                                                <?php if ($tpaymentpurcent == 6){ ?>
                                                                                    <option value="3" selected>6 месеца<?php echo $str6m; ?></option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="3">6 месеца<?php echo $str6m; ?></option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($str5m != ''){ ?>
                                                                                <?php if ($tpaymentpurcent == 5){ ?>
                                                                                    <option value="15" selected>5 месеца<?php echo $str5m; ?></option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="15">5 месеца<?php echo $str5m; ?></option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 2){ ?>
                                                                                <?php if ($tpaymentpurcent == 4){ ?>
                                                                                    <option value="2" selected>4 месеца<?php echo $str4m; ?></option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="2">4 месеца<?php echo $str4m; ?></option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                            <?php if ($tbipayment_pokazi & 1){ ?>
                                                                                <?php if ($tpaymentpurcent == 3){ ?>
                                                                                    <option value="1" selected>3 месеца</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="1">3 месеца</option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        <div class="form_el">
                                                                            <input type="checkbox" title="Ако искате да използвате полето за Първоначална Вноска, моля отбележете тази отметка!" id="tbipayment_parva_chec">
                                                                            <label for="tbipayment_parva_chec">Първоначална вноска към търговеца/лв./</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input class="tbipayment_input" type="text" readonly="readonly" name="tbipayment_parva_input" id="tbipayment_parva_input" value="<?php echo number_format($tbipayment_parva_input, 2, ".", ""); ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">&nbsp;</td>
                                                                    <td class="tbipayment_row_input">
                                                                        <div class="tbipayment_btn_pre" id="tbipayment_parva_button">Преизчисли</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        Общ размер на кредита/лв./
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input class="tbipayment_input passive" type="text" name="tbipayment_obshto_input" id="tbipayment_obshto_input" readonly="readonly" value="<?php echo $tbipayment_obshto_input; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        Месечна вноска/лв./
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input class="tbipayment_input passive" type="text" name="tbipayment_mesecna" id="tbipayment_mesecna" readonly="readonly" value="<?php echo $tbipayment_mesecna; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        Обща дължима сума/лв./
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input class="tbipayment_input passive" type="text" name="tbipayment_obshtozaplashtane_input" id="tbipayment_obshtozaplashtane_input" readonly="readonly" value="<?php echo $tbipayment_obshtozaplashtane_input; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tbipayment_row_title">
                                                                        ГПР/%/
                                                                    </td>
                                                                    <td class="tbipayment_row_input">
                                                                        <input class="tbipayment_input passive" style="color:<?php echo $tbipayment_gpr_color; ?>;" type="text" name="tbipayment_gpr_input" id="tbipayment_gpr_input" readonly="readonly" value="<?php echo $tbipayment_gpr; ?>" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <div class="tbipayment_hr">&nbsp;</div>
                                                            <div style="padding-bottom:5px;"></div>
                                                            <div class="form_el">
                                                                <input type="checkbox" name="tbipayment_uslovia" id="tbipayment_uslovia" value="tbipayment_uslovia">
                                                                <label style="font-size:12px;" for="tbipayment_uslovia">Приемам <a href="https://api.tbibank.support/calculators/assets/img/iskane_tbi.pdf" title="Общи Условия на TBI Bank за онлайн кредитиране." target="_blank" style="color:#4682B4;text-decoration: underline;">Общите Условия на TBI Bank за онлайн кредитиране</a></label>
                                                            </div>
                                                            <div style="padding-bottom:5px;"></div>
                                                            <div style="display:flex;flex-direction:row;padding:5px;">
                                                            <div class="tbipayment_btn_primary" id="tbipayment_buy_tbicredit" style="flex:2;margin:5px;" >Добави в количката</div>
                                                            <div style="padding-bottom:2px;"></div>
                                                            <div class="tbipayment_btn_seccondary" id="tbipayment_back_tbicredit" style="flex:1;margin:5px;" >Откажи</div>
                                                            </div>
                                                            <div class="tbipayment_hr">&nbsp;</div>
                                                            <div class="tbipayment_text_cc">C.C.Ver. <?php echo TBIPAYMENT_MOD_VERSION; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Show panel -->
                                        @endif
                                        <!-- / За вмъкване в продуктовата страница на магазина -->
                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                </div>
                                <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->
                            </div>
                        </section>
                        <!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
                        <div class="section_offset">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-thumbs-up-1"></i>
                                            <h4 class="caption">Най-добро качество</h4>
                                        </div>
                                        <p>Всички предлагани от нас продукти имат гаранция и са тествани и подбрани от
                                            нашия екип. Гарантираме за доброто им качество.</p>
                                    </section>
                                    <!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ [col]-->
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-money"></i>
                                            <h4 class="caption">Безплатна доставка</h4>
                                        </div>
                                        <p>Безплатна доставка в страната. Важи за закупени стоки над 400 лв. Доставя се
                                            до офис на куриер избран от клиента.</a></p>
                                    </section>
                                    <!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ [col]-->
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-lock"></i>
                                            <h4 class="caption">Поверителност</h4>
                                        </div>
                                        <p>Авалон ООД се задължава да използва получените от клиентите лични данни само
                                            за нуждите на доставка на продуктите.</p>
                                    </section>
                                    <!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ [col]-->
                            </div>
                            <!--/ .row -->
                        </div>
                        <!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->
                        <div class="section_offset">
                            <div class="tabs type_2">
                                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
                                <ul class="tabs_nav clearfix">
                                    <li><a href="#tab-1">Описание</a></li>
                                    <li><a href="#tab-2">Спецификация</a></li>
                                    <li><a href="#tab-3">Отзиви ({{ $reviews->count() }})</a></li>
                                    <li><a href="#tab-4">Допълнителна информация</a></li>
                                </ul>

                                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
                                <div class="tab_containers_wrap">
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-1" class="tab_container">
                                        {!! html_entity_decode($product->description) !!}
                                    </div>
                                    <!--/ #tab-1-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-2" class="tab_container">
                                        <ul class="specifications">
                                            @foreach ($products_attributes as $product_attribute)
                                            <li><span>{{ Attribute::where(['id' => $product_attribute->attribute_id])->first()->name }}
                                                    :</span>{{ AttributeValues::where(['id' => $product_attribute->attribute_value_id])->first()->value }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!--/ #tab-2-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-3" class="tab_container">
                                        <section class="section_offset">
                                            <h3>Потребителски отзиви</h3>
                                            <ul class="reviews">
                                                @foreach ($reviews as $review)
                                                <li>
                                                    <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                                    <article class="review">
                                                        <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->
                                                        <ul class="review-rates">
                                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                <span class="name">Цена</span>
                                                                <ul class="rating">
                                                                    <li @if ($review->price > 0) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->price > 1) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->price > 2) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->price > 3) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->price > 4) class="active" @endif>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                <span class="name">Функционалност</span>
                                                                <ul class="rating">
                                                                    <li @if ($review->value > 0) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->value > 1) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->value > 2) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->value > 3) class="active" @endif>
                                                                    </li>
                                                                    <li @if ($review->value > 4) class="active" @endif>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                <span class="name">Качество</span>
                                                                <ul class="rating">
                                                                    <li @if ($review->quantity > 0) class="active"
                                                                        @endif></li>
                                                                    <li @if ($review->quantity > 1) class="active"
                                                                        @endif></li>
                                                                    <li @if ($review->quantity > 2) class="active"
                                                                        @endif></li>
                                                                    <li @if ($review->quantity > 3) class="active"
                                                                        @endif></li>
                                                                    <li @if ($review->quantity > 4) class="active"
                                                                        @endif></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->
                                                        </ul>
                                                        <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->
                                                        <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->
                                                        <div class="review-body">
                                                            <div class="review-meta">
                                                                <h5 class="bold">{{ $review->subject }}</h5>
                                                                @php
                                                                $date = new DateTime($review->created_at);
                                                                @endphp
                                                                Отзив от <span class="bold">{{ $review->name }}</span>
                                                                на {{ $date->format('d.m.Y H:i:s') }}
                                                            </div>
                                                            <p>{{ $review->review }}</p>
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->
                                                    </article>
                                                    <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->
                                                </li>
                                                @endforeach
                                            </ul>
                                        </section>
                                        <!--/ .section_offset -->
                                        @auth
                                        <section class="section_offset">
                                            <h3>Напишете отзив за този продукт</h3>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6">
                                                    <p>Вие оценявате: <a
                                                            href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a><br>Каква
                                                        оценка ще дадете за този продукт? *</p>
                                                    <!-- - - - - - - - - - - - - - Rate the - - - - - - - - - - - - - - - - -->
                                                    <div class="table_wrap rate_table">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>1 звезда</th>
                                                                    <th>2 звезди</th>
                                                                    <th>3 звезди</th>
                                                                    <th>4 звезди</th>
                                                                    <th>5 звезди</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Цена</td>
                                                                    <td>
                                                                        <input type="radio" name="price_rate"
                                                                            id="rate_1" value="1">
                                                                        <label for="rate_1"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="price_rate"
                                                                            id="rate_2" value="2">
                                                                        <label for="rate_2"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="price_rate"
                                                                            id="rate_3" value="3">
                                                                        <label for="rate_3"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="price_rate"
                                                                            id="rate_4" value="4">
                                                                        <label for="rate_4"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input checked type="radio" name="price_rate"
                                                                            id="rate_5" value="5">
                                                                        <label for="rate_5"></label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Функцион.</td>
                                                                    <td>
                                                                        <input type="radio" name="value_rate"
                                                                            id="rate_6" value="1">
                                                                        <label for="rate_6"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="value_rate"
                                                                            id="rate_7" value="2">
                                                                        <label for="rate_7"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="value_rate"
                                                                            id="rate_8" value="3">
                                                                        <label for="rate_8"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="value_rate"
                                                                            id="rate_9" value="4">
                                                                        <label for="rate_9"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input checked type="radio" name="value_rate"
                                                                            id="rate_10" value="5">
                                                                        <label for="rate_10"></label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Качество</td>
                                                                    <td>
                                                                        <input type="radio" name="quality_rate"
                                                                            id="rate_11" value="1">
                                                                        <label for="rate_11"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality_rate"
                                                                            id="rate_12" value="2">
                                                                        <label for="rate_12"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality_rate"
                                                                            id="rate_13" value="3">
                                                                        <label for="rate_13"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality_rate"
                                                                            id="rate_14" value="4">
                                                                        <label for="rate_14"></label>
                                                                    </td>
                                                                    <td>
                                                                        <input checked type="radio" name="quality_rate"
                                                                            id="rate_15" value="5">
                                                                        <label for="rate_15"></label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of rate the - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ [col]-->
                                                <div class="col-lg-7 col-md-6">
                                                    <p class="subcaption">Всички полета са задължителни.</p>
                                                    <!-- - - - - - - - - - - - - - Review form - - - - - - - - - - - - - - - - -->
                                                    <ul>
                                                        <li class="row">
                                                            <div class="col-sm-6">
                                                                <label for="nickname">Име</label>
                                                                <input type="text" name="nickname" id="nickname" value="{{ Auth::user()->name }}">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="summary">Относно</label>
                                                                <input type="text" name="summary" id="summary">
                                                            </div>
                                                        </li>
                                                        <li class="row">
                                                            <div class="col-xs-12">
                                                                <label for="review_message">Отзив</label>
                                                                <textarea rows="5" name="review_message"
                                                                    id="review_message"></textarea>
                                                            </div>
                                                        </li>
                                                        <li class="row" style="padding-top:10px;">
                                                            <div class="col-xs-12">
                                                                <button onclick="clickBtnAddReview();"
                                                                    class="button_dark_grey middle_btn">Изпрати
                                                                    отзива</button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- - - - - - - - - - - - - - End of review form - - - - - - - - - - - - - - - - -->
                                                </div>
                                            </div>
                                            <!--/ .row -->
                                        </section>
                                        <!--/ .section_offset -->
                                        @endauth
                                    </div>
                                    <!--/ #tab-3-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-4" class="tab_container">
                                        {!! html_entity_decode($product->description2) !!}
                                    </div>
                                    <!--/ #tab-4-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .tab_containers_wrap -->
                                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .tabs-->
                        </div>
                        <!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <h3 class="offset_title">Промоционални продукти</h3>
                            <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->
                            <div class="owl_carousel five_items">
                                @foreach ($featured_products as $featured_product)
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $featured_product->id }}_1.png"
                                            style="max-width:200px;" alt="{{ $featured_product->name }}"
                                            onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="{{ route('product', ['id' => $featured_product->id]) }}"
                                                    class="button_dark_grey middle_btn quick_view">Подробно</a>
                                                <button onclick="buyProduct('{{ $featured_product->id }}');" class="button_blue middle_btn add_to_cart">Купи</button>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Добави към любими</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_new">промо</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a
                                            href="{{ route('product', ['id' => $featured_product->id]) }}">{{ $featured_product->name }}</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft">
                                                <b>{{ number_format($featured_product->price, 2, ".", "") }}</b>&nbsp;лв.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .product_item-->
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                @endforeach
                            </div>
                            <!--/ .owl_carousel.five_items-->
                            <!-- - - - - - - - - - - - - - End of featured products - - - - - - - - - - - - - - - - -->
                        </section>
                        <!--/ .section_offset-->
                        <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->
                    </div>
                    <!--/ .container-->
                </div>
                <!--/ .page_wrapper-->
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function clickBtnAddFavorite(e, id){
        e.preventDefault();
        $.ajax({
            beforeSend: function(request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            type:'POST',
            url:'/add-favorite.html',
            data:{id:id},
            success:function(data){
                if (data.result == "new"){
                    alert("Успешно добавихте този продукт към Любите си продукти.");
                }else{
                    alert("Вече сте добавили този продукт в Любимите си продукти.");
                }
            }
        });
    };

    function clickBtnAddReview(){
        if ($("#nickname").val() == ''){
            alert("Моля попълнете полето 'Име'!");
            $("#nickname").focus();
            return;
        }
        if ($("#summary").val() == ''){
            alert("Моля попълнете полето 'Относно'!");
            $("#summary").focus();
            return;
        }
        if ($("#review_message").val() == ''){
            alert("Моля попълнете полето 'Отзив'!");
            $("#review_message").focus();
            return;
        }
        $.ajax({
            beforeSend: function(request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            type:'POST',
            url:'/add-review.html',
            data:{
                id:'{{ $product->id }}',
                nickname:$("#nickname").val(),
                summary:$("#summary").val(),
                review_message:$("#review_message").val(),
                price:$("input[name='price_rate']:checked").val(),
                value:$("input[name='value_rate']:checked").val(),
                quality:$("input[name='quality_rate']:checked").val()
            },
            success:function(data){
                console.log(data);
                if (data.success){
                    alert("Успешно добавихте Вашия отзив.");
                    location.reload();
                }else{
                    alert("В момента не можете да добавите Вашия отзив. Опитайте по-късно..");
                }
            }
        });
    };

    $("#btn_buy").click(function(){
        $.ajax({
            beforeSend: function(request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            url: '/product/add-to-cart.html',
            type: 'POST',
            data: {
                product_id: '{{ $product->id }}',
                product_quantity: $("#quantity").val()

            },
            dataType: 'JSON',
            success: function (data) {
                // add to mini cart
                window.alert('Успешно добавихте продукта във Вашата продуктова кошница.');
                window.location.reload();
            }
        });
    });

    function buyProduct(product_id){
        $.ajax({
            beforeSend: function(request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            url: '/product/add-to-cart.html',
            type: 'POST',
            data: {
                product_id: product_id,
                product_quantity: '1'
            },
            dataType: 'JSON',
            success: function (data) {
                // add to mini cart
                window.alert('Успешно добавихте продукта във Вашата продуктова кошница.');
                window.location.reload();
            }
        });
    };

    $(document).on("change, mouseup, keyup", "#quantity", function(e){
        changeTotalPrice(parseInt($('#quantity').val()));
    });

    $("#minus").click(function(e){
        if (parseInt($('#quantity').val()) > 1){
            var quantity = parseInt($('#quantity').val()) - 1;
        }else{
            var quantity = parseInt($('#quantity').val());
        }
        changeTotalPrice(quantity);
    });

    $("#plus").click(function(e){
        var quantity = parseInt($('#quantity').val()) + 1;
        changeTotalPrice(quantity);
    });

    function changeTotalPrice(quantity){
        $("#total_price").html((quantity * parseFloat('{{$product->price}}')).toFixed(2));
    }

    function tbipaymentChangeContainer(){
        var tbipayment_label_container = document.getElementsByClassName("tbipayment-label-container")[0];
        if (tbipayment_label_container.style.visibility == 'visible'){
            tbipayment_label_container.style.visibility = 'hidden';
            tbipayment_label_container.style.opacity = 0;
            tbipayment_label_container.style.transition = 'visibility 0s, opacity 0.5s ease';
        }else{
            tbipayment_label_container.style.visibility = 'visible';
            tbipayment_label_container.style.opacity = 1;
        }
    }

    function tbipaymentGoTo(url){
        window.open(url,'_blank');
    }

    $( "#btn_tbipayment" ).click(function() {
        $("#tbipayment_price").val($("#total_price").html());
        tbipayment_change_value();
        $( "#tbipayment_box" ).show("slow");
    });

    $( "#tbipayment_back_tbicredit" ).click(function() {
        $( "#tbipayment_box" ).hide("slow");
    });

    $( "#tbipayment_parva_chec" ).change(function() {
        if ($('#tbipayment_parva_chec').prop('checked')) {
            $("#tbipayment_parva_input").attr("readonly", false);
        }else{
            $("#tbipayment_parva_input").attr("readonly", true);
        }
    });

    $( "#tbipayment_buy_tbicredit" ).click(function(e) {
        e.preventDefault();

        if ($('#tbipayment_uslovia').prop('checked')){
            $.ajax({
                beforeSend: function(request) {
                    request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
                },
                url: '/product/add-to-cart.html',
                type: 'POST',
                data: {
                    product_id: '{{ $product->id }}',
                    product_quantity: $("#quantity").val(),
                    tbipayment_mesecna: $("#tbipayment_mesecna").val(),
                    tbipayment_gpr_input: $("#tbipayment_gpr_input").val(),
                    tbipayment_parva_input: $("#tbipayment_parva_input").val(),
                    tbipayment_obshtozaplashtane_input: $("#tbipayment_obshtozaplashtane_input").val(),
                    tpaymentpurcent: $("#tpaymentpurcent").val(),
                    tbipayment_price: '{{$tbipayment_price}}',
                    tbipayment_product_name: '{{$tbipayment_product_name}}',
                    tbipayment_product_image: '{{$tbipayment_product_image}}'
                },
                dataType: 'JSON',
                success: function (data) {
                    // add to mini cart
                    window.location = "/cart.html";
                }
            });
        }else{
            alert("Моля да дадете съгласие с Общите Условия на TBI Bank за онлайн кредитиране.");
        }
    });

    function tbipayment_change_value(){
        var tbi_purcent_default = $( "#tbipayment_pogasitelni_vnoski_input" ).val();
        var tbipayment_parva_input = $("#tbipayment_parva_input").val();
        var tbipayment_liveurl = $("#tbipayment_liveurl").val();
        var tbipayment_unicid = $("#tbipayment_unicid").val();
        var tbipayment_price = $("#tbipayment_price").val();
        var is4m = $("#is4m").val();
        var is4m_pv = $("#is4m_pv").val();
        var is5m = $("#is5m").val();
        var is5m_pv = $("#is5m_pv").val();
        var is6m = $("#is6m").val();
        var is6m_pv = $("#is6m_pv").val();
        var is9m = $("#is9m").val();
        var is9m_pv = $("#is9m_pv").val();
        $.ajax({
            type: 'GET',
            url: tbipayment_liveurl + '/function/getcalculation.php' ,
            async: true,
            cache: false,
            dataType: 'json',
            data: 'cid='+tbipayment_unicid+'&tbipayment_price='+tbipayment_price+'&is4m='+is4m+'&is4m_pv='+is4m_pv+'&is5m='+is5m+'&is5m_pv='+is5m_pv+'&is6m='+is6m+'&is6m_pv='+is6m_pv+'&is9m='+is9m+'&is9m_pv='+is9m_pv+'&tbi_purcent_default=' + tbi_purcent_default + '&tbipayment_parva_input=' + tbipayment_parva_input ,
            success: function(jsonData)
            {
                $("#tbipayment_obshto_input").val(parseFloat(jsonData.tbipayment_obshto_input).toFixed(2));
                $("#tbipayment_mesecna").val(parseFloat(jsonData.tbipayment_mesecna).toFixed(2));
                $("#tbipayment_obshtozaplashtane_input").val(parseFloat(jsonData.tbipayment_obshtozaplashtane_input).toFixed(2));
                $("#tbipayment_gpr_input").val(parseFloat(jsonData.tbipayment_gpr).toFixed(2));
                $("#tbipayment_parva_input").val(parseFloat(jsonData.tbipayment_parva_input).toFixed(2));
                $("#tpaymentpurcent").val(jsonData.tpaymentpurcent);
                $("#tbipayment_gpr_input").css("color",jsonData.tbipayment_gpr_color);
            }
        });
    }

    $( "#tbipayment_pogasitelni_vnoski_input" ).change(function() {
        $("#tbipayment_parva_input").attr("readonly", true);
        $("#tbipayment_parva_input").val("0.00");
        $('#tbipayment_parva_chec').attr("checked", false);
        tbipayment_change_value();
    });

    $( "#tbipayment_parva_button" ).click(function() {
        tbipayment_change_value();
    });
</script>
@endsection
