<?php use App\Attribute; ?>
<?php use App\AttributeValues; ?>
<?php use App\Http\Controllers\HelpController; ?>
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
                            <li><a
                                    href="{{ route('products', ['category_id' => $product_category->id]) }}">{{ $product_category->name }}</a>
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
                                        @if (!empty($imgsrc1))
                                            <img id="img_zoom" data-zoom-image="{{ $imgsrc1 }}" src="{{ $imgsrc1 }}" alt="{{ $product->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                        @else
                                            <img id="img_zoom" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $product->name }}">
                                        @endif
                                        <button class="button_grey_2 icon_btn middle_btn open_qv"><i
                                                class="icon-resize-full-6"></i></button>
                                    </div>
                                    <!--/ .image_preview_container-->
                                    <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                                    <div class="product_preview">
                                        <div class="owl_carousel" id="thumbnails">
                                            @if (!empty($imgsrc1))
                                            <a href="#" data-image="{{ $imgsrc1 }}" data-zoom-image="{{ $imgsrc1 }}">
                                                <img src="{{ $imgsrc1 }}" data-large-image="{{ $imgsrc1 }}" alt="{{ $product->name }}-1" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            @else
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $product->name }}-1">
                                            </a>
                                            @endif
                                            @if (!empty($imgsrc2))
                                            <a href="#" data-image="{{ $imgsrc2 }}" data-zoom-image="{{ $imgsrc2 }}">
                                                <img src="{{ $imgsrc2 }}" data-large-image="{{ $imgsrc2 }}" alt="{{ $product->name }}-2" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            @else
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $product->name }}-2">
                                            </a>
                                            @endif
                                            @if (!empty($imgsrc3))
                                            <a href="#" data-image="{{ $imgsrc3 }}" data-zoom-image="{{ $imgsrc3 }}">
                                                <img src="{{ $imgsrc3 }}" data-large-image="{{ $imgsrc3 }}" alt="{{ $product->name }}-3" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            @else
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $product->name }}-3">
                                            </a>
                                            @endif
                                            @if (!empty($imgsrc4))
                                            <a href="#" data-image="{{ $imgsrc4 }}" data-zoom-image="{{ $imgsrc4 }}">
                                                <img src="{{ $imgsrc4 }}" data-large-image="{{ $imgsrc4 }}" alt="{{ $product->name }}-4" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            @else
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $product->name }}-4">
                                            </a>
                                            @endif
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
                                            href="{{ route('product', ['id' => $product->code]) }}">{{ $product->name }}</a>
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
                                        $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                                        }
                                        if ($reviews->count() > 0){
                                        $all_rev = floor($all_rev / ($reviews->count() * 3));
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
                                                    @switch($product->instock)
                                                        @case('в наличност')
                                                            <td><span class="in_stock">{{ $product->instock }}</span></td>
                                                            @break
                                                        @case('минимално количество')
                                                            <td><span class="min_stock">{{ $product->instock }}</span></td>
                                                            @break
                                                        @case('очаква се')
                                                            <td><span class="out_of_stock">{{ $product->instock }}</span></td>
                                                            @break
                                                        @default
                                                            <td><span class="in_stock">{{ $product->instock }}</span></td>
                                                    @endswitch
                                                </tr>
                                                <tr>
                                                    <td>Продуктов код: </td>
                                                    <td>{{ $product->code }}</td>
                                                </tr>
                                                <tr>
                                                    <td>EAN: </td>
                                                    <td>{{ $product->ean }}</td>
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
                                        <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button" data-size="large">
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Споделяне</a>
                                        </div>        
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    <!-- Credit -->
                                    @if ($properties->calculators && (floatval($product->price) > 150))
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="theme_box clearfix">
                                        <div class="row" style="display:flex;justify-content:center;align-items:center;padding:0px;">
                                            <div class="col-sm-12" style="padding:0px;text-align:center;">
                                                <p class="product_price">
                                                    @if ($tbipayment_mesecna != 0)
                                                    <span id="credit_meseci">{{ $tbipayment_meseci_new }}</span> x <b id="credit_vnoska" class="theme_color">{{ $tbipayment_mesecna }}</b> лв.&nbsp;&nbsp;
                                                    @endif
                                                    <span style="color:darkgray;font-weight:400;">Купи продукта на изплащане!</span>&nbsp;&nbsp;
                                                    <a href="#" id="show_credit" class="button_dark_grey"><span style="font-size:18px;"><b>КУПИ</b></span><span style="font-size:12px;">&nbsp;|&nbsp;сравни вноските</span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex;justify-content:center;align-items:center;padding:0px;">
                                            <div class="col-sm-12" style="padding:0px;text-align:center;">
                                                <p>Можете да изберете лизинг с компанията, която предлага най-добрите за Вас условия!</p>
                                            </div>
                                        </div>
                                        <div class="row" style="border-top:1px solid whitesmoke;padding-top:15px;">
                                            <div class="col-sm-2">&nbsp;</div>
                                            <div class="col-sm-2">
                                                <img src="/images/credit/tbi_bank_logo.png" alt="TBI Bank кредитен калкулатор" title="TBI Bank кредитен калкулатор">
                                            </div>
                                            <div class="col-sm-1">&nbsp;</div>
                                            <div class="col-sm-2">
                                                <img src="/images/credit/unicredit_logo.png" alt="UNI Credit кредитен калкулатор" title="UNI Credit кредитен калкулатор">
                                            </div>
                                            <div class="col-sm-1">&nbsp;</div>
                                            <div class="col-sm-2">
                                                <img src="/images/credit/pariba_logo.png" alt="Париба Лични Финанси кредитен калкулатор" title="Париба Лични Финанси кредитен калкулатор">
                                            </div>
                                            <div class="col-sm-2">&nbsp;</div>
                                        </div>
                                        <div id="save_box" class="overlay" style="display:none;">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- Credit -->
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
                                            <li>
                                                @php
                                                    switch ($product->warranty) {
                                                        case -1:
                                                            $warranty = "Без гаранция";
                                                            break;
                                                        case 0:
                                                            $warranty = "Доживотна";
                                                            break;
                                                        default:
                                                            $warranty = $product->warranty . " месеца";
                                                            break;
                                                    }
                                                @endphp
                                                <span>Гаранционен срок :</span>{{ $warranty }}
                                            </li>
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
                                                            href="{{ route('product', ['id' => $product->code]) }}">{{ $product->name }}</a><br>Каква
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
                                        @if (!empty($product->fileurl))
                                            @if (!empty($product->filedescription))
                                                {{ $product->filedescription }}: <a href="{{ $product->fileurl }}" target="_blank" title="Документ за изтегляне">{{ $product->fileurl }}</a>
                                            @else
                                                Документ с описание: <a href="{{ $product->fileurl }}" target="_blank" title="Документ за изтегляне">{{ $product->fileurl }}</a>
                                            @endif
                                        @endif
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
                                        @php
                                            $imgsrc1 = $featured_product->imgurl1;
                                        @endphp
                                        @if (!empty($imgsrc1))
                                            <img src="{{ $imgsrc1 }}" alt="{{ $featured_product->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                        @else
                                            <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $featured_product->name }}">
                                        @endif
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="{{ route('product', ['id' => $featured_product->code]) }}"
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
                                        <p class="crop2">
                                            <a href="{{ route('product', ['id' => $featured_product->code]) }}">{{ $featured_product->name }}</a>
                                        </p>
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
                        <div class="section_offset">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown">
                                        <i class="icon-download"></i>
                                        <h4 class="caption"><b>Maxtrade CMR</b></h4>
                                        <p>От тук можете да свалите напълно работоспособна временна версия на програмата. При желание да я закупите в последствие, всички данни ще се запазят.</p>
                                        <a href="https://avalonbg.com/download/MaxtradeCMR.zip" onclick="clickBtnDownload(event, 2)" class="button_dark_grey middle_btn">Смъкни ДЕМО</a>
                                    </section><!--/ .infoblock.type_2-->
                                </div><!--/ [col]-->
                                <div class="col-md-3 col-sm-6">        
                                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown" data-animation-delay="150">
                                        <i class="icon-download"></i>
                                        <h4 class="caption"><b>Maxtrade CTM</b></h4>
                                        <p>От тук можете да свалите напълно работоспособна временна версия на програмата. При желание да я закупите в последствие, всички данни ще се запазят.</p>
                                        <a href="https://avalonbg.com/download/MaxtradeCTM.zip" onclick="clickBtnDownload(event, 3)" class="button_dark_grey middle_btn">Смъкни ДЕМО</a>
                                    </section><!--/ .infoblock.type_2-->
                                </div><!--/ [col]-->
                                <div class="col-md-3 col-sm-6"> 
                                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown" data-animation-delay="300">
                                        <i class="icon-download"></i>
                                        <h4 class="caption"><b>Maxtrade SLR</b></h4>
                                        <p>От тук можете да свалите напълно работоспособна временна версия на програмата. При желание да я закупите в последствие, всички данни ще се запазят.</p>
                                        <a href="https://avalonbg.com/download/MaxtradeSLR.zip" onclick="clickBtnDownload(event, 5)" class="button_dark_grey middle_btn">Смъкни ДЕМО</a>
                                    </section><!--/ .infoblock.type_2-->
                                </div><!--/ [col]-->
                                <div class="col-md-3 col-sm-6">
                                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown" data-animation-delay="450">
                                        <i class="icon-download"></i>
                                        <h4 class="caption"><b>Maxtrade SMDC</b></h4>
                                        <p>От тук можете да свалите напълно работоспособна временна версия на програмата. При желание да я закупите в последствие, всички данни ще се запазят.</p>
                                        <a href="https://avalonbg.com/download/MaxtradeSMDC.zip" onclick="clickBtnDownload(event, 6)" class="button_dark_grey middle_btn">Смъкни ДЕМО</a>
                                    </section><!--/ .infoblock.type_2-->
                                </div><!--/ [col]-->
                            </div><!--/ .row-->
                        </div><!--/ .section_offset-->
                        <div class="section_offset">
                            <div class="row">
                                <section class="col-sm-12">                                 
                                    <h3>Събития, новини, информация</h3>
                                    <div class="tabs">
                                        <ul class="tabs_nav clearfix">
                                            <li><a href="#support">Поддръжка</a></li>
                                            <li><a href="#news">Новини</a></li>
                                        </ul>   
                                        <div class="tab_containers_wrap">
                                            <div id="support" class="tab_container">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support->id }}.png" alt="{{ $support->name }}" class="alignleft" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.jpg'">
                                                <h3><a href="{{ route('support.software', ['id'=>$support->id]) }}">{{ $support->name }}</a></h3>
                                                <div class="entry_meta">
                                                    @php
                                                    $date = new DateTime($support->created_at);
                                                    @endphp
                                                    <span><i class="icon-calendar"></i>
                                                        {{ $date->format('d.m.Y') }}
                                                    </span>
                                                    <span>посещения:&nbsp;{{ $support->visits }}</span>
                                                    <span><i class="icon-user-8"></i> от {{ $support->username }}</span>
                                                    @php
                                                    switch ($support->category_id) {
                                                    case 'gamings':
                                                    $category_txt = "Игрални компютри";
                                                    break;
                                                    case 'offices':
                                                    $category_txt = "Офис компютри";
                                                    break;
                                                    case 'printers':
                                                    $category_txt = "Принтери и Копири";
                                                    break;
                                                    case 'instalations':
                                                    $category_txt = "Инсталация и настройка";
                                                    break;
                                                    case 'networks':
                                                    $category_txt = "Локални Мрежи";
                                                    break;
                                                    case 'cameras':
                                                    $category_txt = "Камери и Охрана";
                                                    break;
                                                    case 'softwares':
                                                    $category_txt = "Софтуер";
                                                    break;
                                                    default:
                                                    $category_txt = "Игрални компютри";
                                                    break;
                                                    }
                                                    @endphp
                                                    <span><i class="icon-folder-open-empty-1"></i> <a href="{{ route('support.posts', ['id'=>$support->category_id]) }}">{{ $category_txt }}</a></span>
                                                </div>
                                                <p>{!! html_entity_decode(HelpController::getExcerpt($support->description, 0, 1000)) !!}</p>
                                                <a href="{{ route('support.software', ['id'=>$support->id]) }}" class="button_grey middle_btn">Виж подробно</a>
                                            </div><!--/ #tab-1-->
                                            <div id="news" class="tab_container">
                                                <h3><a href="{{ route('news.post', ['id'=>$news->id]) }}">{{ $news->name }}</a></h3>
                                                @php
                                                    $date = new DateTime($news->created_at);
                                                @endphp
                                                <span><i class="icon-calendar"></i>
                                                    {{ $date->format('d.m.Y') }}
                                                </span>
                                                <span>посещения:&nbsp;{{ $news->visits }}</span>
                                                <span><i class="icon-user-8"></i> от {{ $news->username }}</span>
                                                <p>{!! html_entity_decode($news->description) !!}</p>
                                            </div><!--/ #tab-2-->
                                        </div><!--/ .tab_containers_wrap -->
                                    </div><!--/ .tabs-->
                                </section><!--/ [col]-->
                            </div><!--/ .row -->
                        </div><!--/ .section_offset -->
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
        product_id = '{{$product->id}}';
        $.ajax({
            beforeSend: function(request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            url: '/product/change-credit-vnoska.html',
            type: 'POST',
            data: {
                product_id: product_id,
                product_quantity: quantity
            },
            dataType: 'JSON',
            success: function (data) {
                // add to mini cart
                if (data.status == 'success'){
                    $("#credit_meseci").html(data.tbipayment_meseci_new);
                    $("#credit_vnoska").html(data.tbipayment_mesecna);
                }
            }
        });
    }

    $("#show_credit").click(function(e){
        e.preventDefault();
        $('#save_box').show();
        product_id = '{{$product->id}}';
        $.redirectPost(
            '/credit/product.html',
            {
                'product_id': product_id,
                'product_qt': $("#quantity").val()
            }
        );
    });

    $.extend(
    {
        redirectPost: function(location, args)
        {
            var form = '';
            $.each( args, function( key, value ) {
                form += '<input type="hidden" name="'+key+'" value="'+value+'">';
            });
            $('<form action="'+location+'" method="POST">@csrf'+form+'</form>').appendTo('body').submit();
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function clickBtnDownload(e, id){
        $.ajax({
            type:'POST',
            url:'/add-download.html',
            data:{id:id}
        });
    };
</script>
@endsection
