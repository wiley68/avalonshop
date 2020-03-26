<?php use App\ProductsCategories; ?>
<?php use App\Product; ?>
<?php use App\Review; ?>
<?php use App\Category; ?>
@extends('layouts.design')
@section('content')
<style>
    * {
        padding: 0;
        margin: 0;
    }

    /* tbi float */
    .tbi-label-container {
        z-index: 999;
        position: fixed;
        top: calc(100% / 2 - 130px);
        left: 67px;
        display: table;
        visibility: hidden;
    }

    .tbi-label-text {
        width: 410px;
        height: 260px;
        color: #696969;
        background: #f5f5f5;
        display: table-cell;
        vertical-align: top;
        padding-left: 5px;
        border: 1px solid #f18900;
        border-radius: 3px;
    }

    .tbi-label-text-a {
        text-align: center;
    }

    .tbi-label-text-a a {
        color: #b73607;
    }

    .tbi-label-text-a a:hover {
        color: #672207;
        text-decoration: underline;
    }

    .tbi-label-arrow {
        display: table-cell;
        vertical-align: middle;
        color: #f5f5f5;
        opacity: 1;
    }

    .tbi_float {
        z-index: 999;
        position: fixed;
        width: 60px;
        height: 60px;
        top: calc(100% / 2 - 30px);
        left: 0px;
        background-color: #ffffff;
        border-top: 1px solid #f18900;
        border-right: 1px solid #f18900;
        border-bottom: 1px solid #f18900;
        color: #FFF;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        cursor: pointer;
    }

    .tbi-my-float {
        margin-top: 12px;
    }

    .uni-label-container {
        z-index: 999;
        position: fixed;
        top: calc(100% / 3 - 130px);
        left: 122px;
        display: table;
        visibility: hidden;
    }

    .uni-label-text {
        width: 410px;
        height: 260px;
        color: #696969;
        background: #f5f5f5;
        display: table-cell;
        vertical-align: top;
        padding-left: 5px;
        border: 1px solid #D20210;
        border-radius: 3px;
    }

    .uni-label-text-a {
        text-align: center;
    }

    .uni-label-text-a a {
        color: #D20210;
    }

    .uni-label-text-a a:hover {
        color: #D20210;
        text-decoration: underline;
    }

    .uni-label-arrow {
        display: table-cell;
        vertical-align: middle;
        color: #f5f5f5;
        opacity: 1;
    }

    .uni_float {
        z-index: 999;
        position: fixed;
        width: 120px;
        height: 60px;
        top: calc(100% / 3 - 30px);
        left: 0px;
        background-color: #ffffff;
        border-top: 1px solid #D20210;
        border-right: 1px solid #D20210;
        border-bottom: 1px solid #D20210;
        color: #FFF;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        cursor: pointer;
    }

    .uni-my-float {
        margin-top: 12px;
    }
</style>
@if (!empty($message))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert_box success">
                {!! $message !!}
                <button class="close"></button>
            </div>
        </div>
    </div>
</div>
@endif
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                @php
                $reviews = Review::where(['product_id' => $product1->id])->get();
                $all_rev = 0;
                foreach ($reviews as $review){
                $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                }
                if ($reviews->count() > 0){
                $all_rev = floor($all_rev / ($reviews->count() * 3));
                }
                @endphp
                <div class="product_item col-md-3 col-sm-6 animated transparent" data-animation="fadeInDown"
                    data-animation-delay="50" style="text-align: center;">
                    <div class="image_wrap" style="margin: auto;">
                        @php
                        $imgsrc1 = $product1->imgurl1;
                        @endphp
                        <a href="{{ route('product', ['id' => $product1->code]) }}">
                            @if (!empty($imgsrc1))
                            <img src="{{ $imgsrc1 }}" alt="{{ $product1->name }}">
                            @else
                            <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                alt="{{ $product1->name }}">
                            @endif
                        </a>
                    </div>
                    <div class="label_hot">Hot</div>
                    <div class="description align_center">
                        <p class="crop2"><a
                                href="{{ route('product', ['id' => $product1->code]) }}">{{ $product1->name }}</a>
                        </p>
                        <div class="clearfix product_info">
                            <ul class="rating alignright">
                                <li @if ($all_rev> 0) class="active" @endif></li>
                                <li @if ($all_rev> 1) class="active" @endif></li>
                                <li @if ($all_rev> 2) class="active" @endif></li>
                                <li @if ($all_rev> 3) class="active" @endif></li>
                                <li @if ($all_rev> 4) class="active" @endif></li>
                            </ul>
                            <p class="product_price alignleft"><b>{{ $product1->price }}</b>&nbsp;лв.
                            </p>
                        </div>
                        <button onclick="buyProduct('{{ $product1->id }}');"
                            class="button_blue middle_btn">Купи</button>
                        @auth
                        <ul class="bottombar">
                            <li><a href="#" onclick="clickBtnAddFavorite(event, {{ $product1->id }})">Добави към
                                    любими</a></li>
                        </ul>
                        @endauth
                    </div>
                </div>
                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                @php
                $reviews = Review::where(['product_id' => $product2->id])->get();
                $all_rev = 0;
                foreach ($reviews as $review){
                $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                }
                if ($reviews->count() > 0){
                $all_rev = floor($all_rev / ($reviews->count() * 3));
                }
                @endphp
                <div class="product_item col-md-3 col-sm-6 animated transparent" data-animation="fadeInDown"
                    data-animation-delay="150" style="text-align: center;">
                    <div class="image_wrap" style="margin: auto;">
                        @php
                        $imgsrc1 = $product2->imgurl1;
                        @endphp
                        <a href="{{ route('product', ['id' => $product2->code]) }}">
                            @if (!empty($imgsrc1))
                            <img src="{{ $imgsrc1 }}" alt="{{ $product2->name }}">
                            @else
                            <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                alt="{{ $product2->name }}">
                            @endif
                        </a>
                    </div>
                    <div class="label_hot">Hot</div>
                    <div class="description align_center">
                        <p class="crop2"><a
                                href="{{ route('product', ['id' => $product2->code]) }}">{{ $product2->name }}</a>
                        </p>
                        <div class="clearfix product_info">
                            <ul class="rating alignright">
                                <li @if ($all_rev> 0) class="active" @endif></li>
                                <li @if ($all_rev> 1) class="active" @endif></li>
                                <li @if ($all_rev> 2) class="active" @endif></li>
                                <li @if ($all_rev> 3) class="active" @endif></li>
                                <li @if ($all_rev> 4) class="active" @endif></li>
                            </ul>
                            <p class="product_price alignleft"><b>{{ $product2->price }}</b>&nbsp;лв.
                            </p>
                        </div>
                        <button onclick="buyProduct('{{ $product2->id }}');"
                            class="button_blue middle_btn">Купи</button>
                        @auth
                        <ul class="bottombar">
                            <li><a href="#" onclick="clickBtnAddFavorite(event, {{ $product2->id }})">Добави към
                                    любими</a></li>
                        </ul>
                        @endauth
                    </div>
                </div>
                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                @php
                $reviews = Review::where(['product_id' => $product3->id])->get();
                $all_rev = 0;
                foreach ($reviews as $review){
                $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                }
                if ($reviews->count() > 0){
                $all_rev = floor($all_rev / ($reviews->count() * 3));
                }
                @endphp
                <div class="product_item col-md-3 col-sm-6 animated transparent" data-animation="fadeInDown"
                    data-animation-delay="250" style="text-align: center;">
                    <div class="image_wrap" style="margin: auto;">
                        @php
                        $imgsrc1 = $product3->imgurl1;
                        @endphp
                        <a href="{{ route('product', ['id' => $product3->code]) }}">
                            @if (!empty($imgsrc1))
                            <img src="{{ $imgsrc1 }}" alt="{{ $product3->name }}">
                            @else
                            <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                alt="{{ $product3->name }}">
                            @endif
                        </a>
                    </div>
                    <div class="label_hot">Hot</div>
                    <div class="description align_center">
                        <p class="crop2"><a
                                href="{{ route('product', ['id' => $product3->code]) }}">{{ $product3->name }}</a>
                        </p>
                        <div class="clearfix product_info">
                            <ul class="rating alignright">
                                <li @if ($all_rev> 0) class="active" @endif></li>
                                <li @if ($all_rev> 1) class="active" @endif></li>
                                <li @if ($all_rev> 2) class="active" @endif></li>
                                <li @if ($all_rev> 3) class="active" @endif></li>
                                <li @if ($all_rev> 4) class="active" @endif></li>
                            </ul>
                            <p class="product_price alignleft"><b>{{ $product3->price }}</b>&nbsp;лв.
                            </p>
                        </div>
                        <button onclick="buyProduct('{{ $product3->id }}');"
                            class="button_blue middle_btn">Купи</button>
                        @auth
                        <ul class="bottombar">
                            <li><a href="#" onclick="clickBtnAddFavorite(event, {{ $product3->id }})">Добави към
                                    любими</a></li>
                        </ul>
                        @endauth
                    </div>
                </div>
                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown"
                        data-animation-delay="350">
                        <i class="icon-money"></i>
                        <h4 class="caption"><b>Купи стока на изплащане</b></h4>
                        <p>Покупка на стоки на изплащане</p>
                        <p>Можете да закупите всяка една от предлаганите в магазина ни стоки на изплащане. Можете
                            да избирате една от трите Кредитни Компании с които работим:
                            <b>ТБИ Банк, УНИ Кредит, Париба Лични Финанси</b></p>
                        <a href="{{ route('credit-info') }}" class="button_dark_grey middle_btn">Прочети още ...</a>
                    </section>
                    <!--/ .infoblock.type_2-->
                </div>
                <!--/ [col]-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .section_offset-->
        <section class="section_offset">
            <div class="call_to_action">
                <div class="on_the_sides">
                    <div class="left_side_index">
                        <div class="title">Безплатна доставка за страната!</div>
                        <p>Безплатна доставка за страната при покупка на стоки на обща стойност над 48 лв.</p>
                    </div>
                    <div class="right_side">
                        <a href="{{ route('dostavka') }}" class="button_blue huge_btn"><i
                                class="icon-truck-1"></i>Доставка</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
        <ul class="infoblocks_wrap section_offset six_items">
            <li class="animated transparent" data-animation="fadeInDown">
                <a href="{{ route('klienti') }}" class="infoblock type_1">
                    <i class="icon-thumbs-up-1"></i>
                    <span class="caption"><b>Клиентите за нас</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="450">
                <a href="{{ route('dostavka') }}" class="infoblock type_1">
                    <i class="icon-paper-plane"></i>
                    <span class="caption"><b>Бърза доставка в страната</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="550">
                <a href="{{ route('politika') }}" class="infoblock type_1">
                    <i class="icon-lock"></i>
                    <span class="caption"><b>Политика на поверителност</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="650">
                <a href="{{ route('products', ['featured'=>1]) }}" class="infoblock type_1">
                    <i class="icon-diamond"></i>
                    <span class="caption"><b>Големи отстъпки</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="750">
                <a href="{{ route('vrashtane') }}" class="infoblock type_1">
                    <i class="icon-money"></i>
                    <span class="caption"><b>Гаранции за стоката</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="850">
                <a href="{{ route('contact') }}" class="infoblock type_1">
                    <i class="icon-lifebuoy-1"></i>
                    <span class="caption"><b>24/7 Поддръжка за клиенти</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
        </ul>
        <!--/ .infoblocks_wrap.section_offset.clearfix-->

        <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Категории продукти</h3>
            <div class="table_layout">
                <div class="table_row">
                    @php
                    $curent_parent_category = "";
                    $count_category = 0;
                    $all_categories = Category::where('parent_id', '<>', 0)->count();
                        $cat_counter = floor($all_categories / 3);
                        @endphp
                        @foreach (Category::where('parent_id', '<>', 0)->orderBy('parent_id', 'asc')->get() as $cat)
                            @if ($count_category == 0)
                            <div class="table_cell">
                                @endif
                                @php
                                $parrent_category = Category::where(['id' => $cat->parent_id])->first();
                                $parrent_category_ids = [];
                                $parrent_category_ids[] = $parrent_category->id;
                                @endphp
                                @if (($curent_parent_category != $parrent_category->name) &&
                                ($parrent_category->parent_id == 0))
                                <div class="author_info" style="height:50px;"><a
                                        href="{{ route('products', ['category_id' => $cat->parent_id]) }}">
                                        <h4><b>{{ $parrent_category->name }}</b>
                                        </h4>
                                    </a></div>
                                @php
                                $curent_parent_category = $parrent_category->name;
                                @endphp
                                @endif
                                <p>
                                    <a
                                        href="{{ route('products', ['category_id' => $cat->id]) }}">{{ $cat->name }}</a><br />
                                </p>
                                @if ($count_category == $cat_counter)
                            </div>
                            @endif
                            @php
                            if ($count_category < $cat_counter){ $count_category++; }else{ $count_category=0; } @endphp
                                @endforeach @if (($all_categories % ($cat_counter + 1)) !=0) </div> @endif </div> </div>
                                <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->
                                <footer class="bottom_box">
                                    <a href="{{ route('products') }}" class="button_grey middle_btn">Виж всички
                                        продукти&nbsp;({{ Product::where('id', '>', 0)->count() }})</a>
                                </footer>
                                <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->
        </section>
        <!--/ .section_offset.animated.transparent-->
        <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title section_title">Избрани продукти</h3>
            <div class="tabs type_3 products">
                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
                <ul class="theme_menu tabs_nav clearfix">
                    @foreach ($root_categories as $item)
                    @php
                    $category_ids = [];
                    $category_ids[] = $item->id;
                    @endphp
                    <li class="has_submenu"><a href="#tab-{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                    <li class="has_submenu"><a href="{{ route('products') }}" class="all"><b>Виж всички</b></a></li>
                </ul>
                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
                <div class="tab_containers_wrap">
                    @foreach ($root_categories as $item)
                    <div id="tab-{{ $item->id }}" class="tab_container">
                        @php
                        // get random products by category
                        $product_ids_by_category_get = ProductsCategories::where(['category_id' => $item->id])->get();
                        $product_ids_by_category = [];
                        foreach ($product_ids_by_category_get as $pitem) {
                        $product_ids_by_category[] = $pitem->product_id;
                        }
                        $products_by_categories = Product::whereIn('id', $product_ids_by_category)->where(['instock' =>
                        'в наличност'])->inRandomOrder()->take(5)->get();
                        @endphp
                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($products_by_categories as $product_item)
                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                            @php
                            $reviews = Review::where(['product_id' => $product_item->id])->get();
                            $all_rev = 0;
                            foreach ($reviews as $review){
                            $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                            }
                            if ($reviews->count() > 0){
                            $all_rev = floor($all_rev / ($reviews->count() * 3));
                            }
                            @endphp
                            <div class="product_item">
                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
                                <div class="image_wrap">
                                    @php
                                    $imgsrc1 = $product_item->imgurl1;
                                    @endphp
                                    <a href="{{ route('product', ['id' => $product_item->code]) }}">
                                        @if (!empty($imgsrc1))
                                        <img src="{{ $imgsrc1 }}" alt="{{ $product_item->name }}">
                                        @else
                                        <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                            alt="{{ $product_item->name }}">
                                        @endif
                                    </a>
                                </div>
                                <!--/. image_wrap-->
                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                <div class="label_hot">Hot</div>
                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                <div class="description align_center">
                                    <p class="crop2"><a
                                            href="{{ route('product', ['id' => $product_item->code]) }}">{{ $product_item->name }}</a>
                                    </p>
                                    <div class="clearfix product_info">
                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                        <ul class="rating alignright">
                                            <li @if ($all_rev> 0) class="active" @endif></li>
                                            <li @if ($all_rev> 1) class="active" @endif></li>
                                            <li @if ($all_rev> 2) class="active" @endif></li>
                                            <li @if ($all_rev> 3) class="active" @endif></li>
                                            <li @if ($all_rev> 4) class="active" @endif></li>
                                        </ul>
                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
                                        <p class="product_price alignleft"><b>{{ $product_item->price }}</b>&nbsp;лв.
                                        </p>
                                    </div>
                                    <!--/ .clearfix.product_info-->
                                    <button onclick="buyProduct('{{ $product_item->id }}');"
                                        class="button_blue middle_btn">Купи</button>
                                    @auth
                                    <ul class="bottombar">
                                        <li><a href="#"
                                                onclick="clickBtnAddFavorite(event, {{ $product_item->id }})">Добави към
                                                любими</a></li>
                                    </ul>
                                    @endauth
                                </div>
                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .product_item-->
                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->
                    </div>
                    <!--/ #tab-1-->
                    @endforeach
                </div>
                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
            </div>
        </section>
        <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Техническа поддръжка и ревюта</h3>
            <div class="tabs type_3 products">
                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
                <ul class="theme_menu tabs_nav clearfix">
                    <li class="has_submenu"><a href="#gamings">Игрални
                            компютри&nbsp;({{ $supports_gamings->count() }})</a></li>
                    <li class="has_submenu"><a href="#offices">Офис компютри&nbsp;({{ $supports_offices->count() }})</a>
                    </li>
                    <li class="has_submenu"><a href="#printers">Принтери и
                            Копири&nbsp;({{ $supports_printers->count() }})</a></li>
                    <li class="has_submenu"><a href="#instalations">Инсталация и
                            настр.&nbsp;({{ $supports_instalations->count() }})</a></li>
                    <li class="has_submenu"><a href="#networks">Локални
                            Мрежи&nbsp;({{ $supports_networks->count() }})</a></li>
                    <li class="has_submenu"><a href="#cameras">Камери и
                            Охрана&nbsp;({{ $supports_cameras->count() }})</a></li>
                    <li class="has_submenu"><a href="#softwares">Софтуер&nbsp;({{ $supports_softwares->count() }})</a>
                    </li>
                    <li class="has_submenu"><a href="{{ route('support.posts', ['id'=>'all']) }}" class="all"><b>Виж
                                всички</b></a></li>
                </ul>
                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
                <div class="tab_containers_wrap">
                    <div id="gamings" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_gamings as $support_gaming)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_gaming->id }}.png"
                                        alt="{{ $support_gaming->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Игрални компютри</p>
                                    <p>{{ $support_gaming->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_gaming->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ #tab-1-->
                    </div>

                    <div id="offices" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_offices as $support_office)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_office->id }}.png"
                                        alt="{{ $support_office->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Офис компютри</p>
                                    <p>{{ $support_office->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_office->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-2-->

                    <div id="printers" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_printers as $support_printer)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_printer->id }}.png"
                                        alt="{{ $support_printer->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Принтери и Копири</p>
                                    <p>{{ $support_printer->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_printer->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-3-->

                    <div id="instalations" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_instalations as $support_instalation)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_instalation->id }}.png"
                                        alt="{{ $support_instalation->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Инсталация и настройка</p>
                                    <p>{{ $support_instalation->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_instalation->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-4-->

                    <div id="networks" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_networks as $support_network)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_network->id }}.png"
                                        alt="{{ $support_network->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Локални мрежи</p>
                                    <p>{{ $support_network->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_network->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-5-->

                    <div id="cameras" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_cameras as $support_camera)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_camera->id }}.png"
                                        alt="{{ $support_camera->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Камери и Охрана</p>
                                    <p>{{ $support_camera->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_camera->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-6-->

                    <div id="softwares" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($supports_softwares as $support_software)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/supports/support_{{ $support_software->id }}.png"
                                        alt="{{ $support_software->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p>Софтуер</p>
                                    <p style="min-height:60px;">{{ $support_software->name }}</p>
                                    <br />
                                    <a href="{{ route('support.software', ['id'=>$support_software->id]) }}"
                                        class="button_blue middle_btn">Виж подробно</a>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-7-->

                </div>
                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
            </div>
        </section>
        <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - - Beauty - - - - - - - - - - - - - - - - -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Разработен и внедрен от нас софтуер</h3>
            <div class="tabs type_3 products">
                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
                <ul class="theme_menu tabs_nav clearfix">
                    <li class="has_submenu"><a href="#web-projects">WEB Проекти</a></li>
                    <li class="has_submenu"><a href="#desktop">Десктоп софтуер</a></li>
                    <li class="has_submenu"><a href="#web">WEB Модули</a></li>
                    <li class="has_submenu"><a href="#web-soft">WEB Софтуер</a></li>
                    <li class="has_submenu"><a href="#web-service">WEB Услуги</a></li>
                    <li class="has_submenu"><a href="#mobile">Мобилен софтуер</a></li>
                    <li class="has_submenu"><a href="#industry">Софтуер за индустрията</a></li>
                </ul>
                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
                <div class="tab_containers_wrap">

                    <div id="web-projects" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($webprojects as $webproject)
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="{{ $baseurl }}/images/projects/project_{{ $webproject->id }}.png"
                                        alt="{{ $webproject->name }}">
                                </div>
                                <!--/. image_wrap-->
                                <hr /><br />
                                <div class="description align_center">
                                    <p>WEB проект</p>
                                    <p><a target="_blank" href="{{ $webproject->url }}">{{ $webproject->name }}</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-15-->

                    <div id="desktop" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_desktop as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-16-->

                    <div id="web" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_modules as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-17-->

                    <div id="web-soft" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_websoftware as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-18-->

                    <div id="web-service" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_webservice as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-19-->

                    <div id="mobile" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_mobile as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-20-->

                    <div id="industry" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            @foreach ($software_industry as $soft)
                            <div class="product_item">
                                <div class="image_wrap">
                                    @if (!empty(Product::where(['code' => $soft->code])->first()))
                                    <img src="{{ Product::where(['code' => $soft->code])->first()->imgurl1 }}"
                                        alt="{{ $soft->name }}">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $soft->name }}">
                                    @endif
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                    </p>
                                    <p><a href="{{ route('software', ['code' => $soft->code]) }}">{!!
                                            html_entity_decode($soft->shortDescription) !!}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-21-->

                </div>
                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
            </div>
        </section>
        <!-- - - - - - - - - - - - - - End of Beauty - - - - - - - - - - - - - - - - -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Добра търговска практика</h3>
            <div class="table_layout">
                <div class="table_row">
                    <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                    <div class="table_cell">
                        <blockquote>
                            <div class="author_info"><b>Аркус АД</b></div>
                            <p>АРКУС АД изразява своето удовлетворение от услугите предлагани от Авалон ООД и особено от
                                възможността за директен контакт с екипа на дружеството.</p>
                        </blockquote>
                    </div>
                    <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                    <div class="table_cell">
                        <blockquote>
                            <div class="author_info"><b>Захарни Заводи АД</b></div>
                            <p>Преките ни впечатления от тяхната работа са в професионално отношение, коректно, точно и
                                навременно изпълнение на доставките, което улеснява работата на целия екип.</p>
                        </blockquote>
                    </div>
                    <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                    <div class="table_cell">
                        <blockquote>
                            <div class="author_info"><b>Прити 95 ООД</b></div>
                            <p>Доволни сме от техниката предлагана ни от Авалон ООД и особено от гаранционния и
                                извънгаранционен сервиз осъществяван от техния екип.</p>
                        </blockquote>
                    </div>
                    <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                    <div class="table_cell">
                        <blockquote>
                            <div class="author_info"><b>Складова Техника АД</b></div>
                            <p>Фирма Авалон ООД осигурява отличен сервиз и поддръжка на техниката, отстранява в много
                                кратки срокове с голяма вещина каквито и да са възникнали проблеми.</p>
                        </blockquote>
                    </div>
                    <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->
                </div>
            </div>
            <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->
            <footer class="bottom_box">
                <a href="{{ route('klienti') }}" class="button_grey middle_btn">Виж всички референции</a>
            </footer>
            <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->
        </section>
        <section class="section_offset">
            <h3>Изтегляне на временни версии на софтуерен продукт за тестване.</h3>
            <div class="row">
                @php
                $counter = 0;
                @endphp
                @foreach ($software_desktop as $softwareBottom)
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2">
                        <i class="icon-download"></i>
                        <a href="{{ route('software', ['code' => $softwareBottom->code]) }}">
                            <h4 class="caption"><b>{{ $softwareBottom->name }}</b></h4>
                        </a>
                        <p>{!! html_entity_decode($softwareBottom->shortDescription) !!}</p>
                        @if (!empty(Product::where(['code' => $softwareBottom->code])->first()))
                        <a href="{{ $baseurl }}/download/{{$softwareBottom->fileName}}"
                            onclick="clickBtnDownload(event, '{{Product::where(['code' => $softwareBottom->code])->first()->id}}')"
                            class="button_dark_grey middle_btn">Изтегли ДЕМО
                            версия</a>
                        @endif
                    </section>
                </div>
                @php $counter++; @endphp
                @if($counter == 4)
                @php break; @endphp
                @endif
                @endforeach
            </div>
        </section>
        <!--/ .section_offset -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Производители - <a href="{{ route('proizvoditeli') }}" class="button_dark_grey">виж
                    всички производители</a></h3>
            <div class="owl_carousel brands">
                @foreach ($manufacturers as $manufacturer)
                @if (file_exists("/home/wiley/images/manufacturers/manufacturer_" .
                $manufacturer->id . ".png"))
                <a href="{{ route('products', ['manufacturer_id'=>$manufacturer->id]) }}"
                    title="{{ $manufacturer->name }}">
                    <img style="height:30px;width:auto;"
                        src="{{ $baseurl }}/images/manufacturers/manufacturer_{{ $manufacturer->id }}.png"
                        alt="{{ $manufacturer->name }}">
                </a>
                @endif
                @endforeach
            </div>
            <!--/ .owl_carousel-->
        </section>
        <!--/ .section_offset.animated.transparent-->
    </div>
    <!--/ .container-->
</div>
<!--/ .page_wrapper-->
<!-- Credit -->
<!-- TBI Bank -->
@if ($tbiyes)
@if ($tbi_container_status == 'Yes')
@if ($deviceis == 'pc')
<div class="tbi_float" onclick="tbiChangeContainer();">
    <img src="https://tbibank.support/dist/img/tbi_logo.png" class="tbi-my-float">
</div>
@else
<div class="tbi_float" onclick="tbipaymentGoTo();">
    <img src="https://tbibank.support/dist/img/tbi_logo.png" class="tbi-my-float">
</div>
@endif
<div class="tbi-label-container">
    <div class="tbi-label-text">
        <div style="padding-bottom:5px;"></div>
        <img src="{{ $tbi_picture }}">
        <div style="font-size:16px;padding-top:3px;">{{ $tbi_container_txt1 }}</div>
        <p style="font-size:14px;">{{ $tbi_container_txt2 }}</p>
        <div class="tbi-label-text-a"><a href="{{ $tbi_backurl }}" target="_blank"
                alt="ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!">ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!</a></div>
    </div>
</div>
@endif
@endif
<!-- TBI Bank -->
@if ($uniyes)
@if ($uni_container_status == 'Yes')
@if ($deviceis == 'pc')
<div class="uni_float" onclick="uniChangeContainer();">
    <img src="<?php echo $uni_logo; ?>" class="uni-my-float">
</div>
@else
<div class="uni_float" onclick="uniGoTo();">
    <img src="<?php echo $uni_logo; ?>" class="uni-my-float">
</div>
@endif
<div class="uni-label-container">
    <i class="fa fa-play fa-rotate-180 uni-label-arrow"></i>
    <div class="uni-label-text">
        <div style="padding-bottom:5px;"></div>
        <img src="<?php echo $uni_picture; ?>">
        <div style="font-size:16px;padding-top:3px;"><?php echo $uni_container_txt1; ?></div>
        <p><?php echo $uni_container_txt2; ?></p>
        <div class="uni-label-text-a"><a href="<?php echo $uni_backurl; ?>" target="_blank"
                alt="ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!">ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!</a></div>
    </div>
</div>
@endif
@endif
<!-- Credit -->
<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection

@section('scripts')
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function buyProduct(product_id){
    $.ajax({
        url: '/product/add-to-cart.html',
        type: 'POST',
        data: {
            product_id: product_id,
            product_quantity: '1'
        },
        dataType: 'JSON',
        success: function (data) {
            // add to mini cart
            window.location = "{{ route('cart') }}";
        }
    });
};

function clickBtnAddFavorite(e, id){
    e.preventDefault();
    $.ajax({
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

function tbiChangeContainer(){
	var tbi_label_container = document.getElementsByClassName("tbi-label-container")[0];
	if (tbi_label_container.style.visibility == 'visible'){
		tbi_label_container.style.visibility = 'hidden';
		tbi_label_container.style.opacity = 0;
		tbi_label_container.style.transition = 'visibility 0s, opacity 0.5s ease';
	}else{
		tbi_label_container.style.visibility = 'visible';
		tbi_label_container.style.opacity = 1;
	}
}

function tbipaymentGoTo(url){
    @if ($tbiyes)
    window.open('{{ $tbi_backurl }}','_blank');
    @endif
}

function uniChangeContainer(){
	var uni_label_container = document.getElementsByClassName("uni-label-container")[0];
	if (uni_label_container.style.visibility == 'visible'){
		uni_label_container.style.visibility = 'hidden';
		uni_label_container.style.opacity = 0;
		uni_label_container.style.transition = 'visibility 0s, opacity 0.5s ease';
	}else{
		uni_label_container.style.visibility = 'visible';
		uni_label_container.style.opacity = 1;
	}
}

function uniGoTo(url){
	window.open('{{$uni_backurl}}','_blank');
}

function clickBtnDownload(e, id){
    $.ajax({
        type:'POST',
        url:'/add-download.html',
        data:{id:id}
    });
};
</script>
@endsection