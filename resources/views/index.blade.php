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
                <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->
                <div class="col-sm-9">

                    <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->
                    <div class="revolution_slider">
                        <div class="rev_slider">
                            <ul>
                                <!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->
                                <li data-transition="papercut" data-slotamount="7" class="align_center">
                                    <img src="/images/slide_comp.jpg" alt="Авалон магазин компютри">
                                    <div class="caption sfl stl layer_1" data-x="center" data-y="77"
                                        data-easing="easeOutBack" data-speed="600" data-start="900">Компютърни
                                        компоненти</div>
                                    <div class="caption sfl stl layer_2" data-x="center" data-y="135"
                                        data-easing="easeOutBack" data-speed="600" data-start="1050">Добри
                                        цени<br><small> на отлично</small> Качество <small>и безпроблемна</small>
                                        Гаранция!</div>
                                    <div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack"
                                        data-speed="700" data-start="1150">
                                        <a href="{{ route('products') }}" class="button_blue big_btn">Разгледайте нашия
                                            магазин!</a>
                                    </div>
                                </li>
                                <!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->
                                <li data-transition="papercut" data-slotamount="7" class="align_center">
                                    <img src="/images/slide_software.jpg" alt="">
                                    <div class="caption sfl stl layer_5" data-x="center" data-y="77"
                                        data-easing="easeOutBack" data-speed="600" data-start="900">Разработка на
                                        софтуер</div>
                                    <div class="caption sfl stl layer_6" data-x="center" data-y="135"
                                        data-easing="easeOutBack" data-speed="600" data-start="1050">Програми<br><small>
                                            и</small> Модули <small>по</small> Поръчка!</div>
                                    <div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack"
                                        data-speed="700" data-start="1150">
                                        <a href="{{ route('contact') }}" class="button_blue big_btn">Свържете се с
                                            нас!</a>
                                    </div>
                                </li>
                                <!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->
                                <li data-transition="papercut" data-slotamount="7">

                                    <img src="/images/slide_ecommerce.jpg" alt="">
                                    <div class="caption sfl stl layer_8" data-x="right" data-y="73" data-hoffset="-60"
                                        data-easing="easeOutBack" data-speed="600" data-start="900">Модули за</div>
                                    <div class="caption sfl stl layer_9" data-x="right" data-y="122" data-hoffset="-60"
                                        data-easing="easeOutBack" data-speed="600" data-start="1000">e-commerce
                                        платформи</div>
                                    <div class="caption sfl stl layer_10" data-x="right" data-y="178" data-hoffset="-60"
                                        data-easing="easeOutBack" data-speed="600" data-start="1100">Magento, OpenCart,
                                        PrestaShop, WooCommerce, VirtueMart ...</div>
                                    <div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262"
                                        data-easing="easeOutBack" data-speed="700" data-start="1150">
                                        <a href="/products.html?category_id%5B0%5D=36" class="button_blue big_btn">Виж
                                            повече</a>
                                    </div>
                                </li>
                                <!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->
                            </ul>
                        </div>
                        <!--/ .rev_slider-->
                    </div>
                    <!--/ .revolution_slider-->

                    <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->
                </div>
                <!--/ [col]-->
                <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->
                <div class="col-sm-3">
                    <a href="{{ route('credit-info') }}" class="banner" title="Покупка на стоки на изплащане">
                        <img src="/images/banner_lizing.jpg" alt="Стоки на изплащане"
                            style="border: 1px solid #A9A9A9;">
                    </a>
                    <a href="{{ route('product', ['id' => 'max-cmr']) }}" class="banner">
                        <img src="/images/cmr.png" alt="">
                    </a>
                </div>
                <!--/ [col]-->
                <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .section_offset -->
        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
        <ul class="infoblocks_wrap section_offset six_items">
            <li class="animated transparent" data-animation="fadeInDown">
                <a href="{{ route('klienti') }}" class="infoblock type_1">
                    <i class="icon-thumbs-up-1"></i>
                    <span class="caption"><b>Клиентите за нас</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="100">
                <a href="{{ route('dostavka') }}" class="infoblock type_1">
                    <i class="icon-paper-plane"></i>
                    <span class="caption"><b>Бърза доставка в страната</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="200">
                <a href="{{ route('politika') }}" class="infoblock type_1">
                    <i class="icon-lock"></i>
                    <span class="caption"><b>Политика на поверителност</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="300">
                <a href="{{ route('products', ['featured'=>1]) }}" class="infoblock type_1">
                    <i class="icon-diamond"></i>
                    <span class="caption"><b>Големи отстъпки</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="400">
                <a href="{{ route('vrashtane') }}" class="infoblock type_1">
                    <i class="icon-money"></i>
                    <span class="caption"><b>Гаранции за стоката</b></span>
                </a>
                <!--/ .infoblock-->
            </li>
            <li class="animated transparent" data-animation="fadeInDown" data-animation-delay="500">
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
                @php
                $count = 0;
                @endphp
                @foreach ($root_categories as $cat)
                @if (($count % 4) == 0)
                <div class="table_row">
                    @endif
                    <div class="table_cell">
                        @php
                        $category_ids = [];
                        $category_ids[] = $cat->id;
                        $products_categories = ProductsCategories::where(['category_id' => $cat->id])->count();
                        @endphp
                        <div class="author_info" style="height:50px;"><a
                                href="{{ route('products', ['category_id' => $category_ids]) }}">
                                <h4><b>{{ $cat->name }}&nbsp;({{ $products_categories }})</b></h4>
                            </a></div>
                        <hr />
                        <br />
                        <p>
                            @foreach (Category::where(['parent_id' => $cat->id])->get() as $item)
                            @php
                            $item_ids = [];
                            $item_ids[] = $item->id;
                            $products_categories_items = ProductsCategories::where(['category_id' =>
                            $item->id])->count();
                            @endphp
                            <a
                                href="{{ route('products', ['category_id' => $item_ids]) }}">{{ $item->name }}&nbsp;({{ $products_categories_items }})</a><br />
                            @endforeach
                        </p>
                    </div>
                    @php
                    $count++;
                    @endphp
                    @if (($count % 4) == 0)
                </div>
                @endif
                @endforeach
            </div>
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
                                    @if (!empty($imgsrc1))
                                    <img src="{{ $imgsrc1 }}" alt="{{ $product_item->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                    @else
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                        alt="{{ $product_item->name }}">
                                    @endif
                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                    <div class="actions_wrap">
                                        <div class="centered_buttons">
                                            <a href="{{ route('product', ['id' => $product_item->code]) }}"
                                                class="button_dark_grey middle_btn quick_view pb">Подробно</a>
                                        </div>
                                        <!--/ .centered_buttons -->
                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_gaming->id }}.png"
                                        alt="{{ $support_gaming->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_office->id }}.png"
                                        alt="{{ $support_office->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_printer->id }}.png"
                                        alt="{{ $support_printer->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_instalation->id }}.png"
                                        alt="{{ $support_instalation->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_network->id }}.png"
                                        alt="{{ $support_network->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_camera->id }}.png"
                                        alt="{{ $support_camera->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_software->id }}.png"
                                        alt="{{ $support_software->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                                    <img src="{{ Config::get('settings.backend') }}/dist/img/projects/project_{{ $webproject->id }}.png"
                                        alt="{{ $webproject->name }}"
                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
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
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_28_3319616-300x300.png"
                                        alt="ПРОГРАМА ЗА РЕГИСТРИРАНЕ НА ДЕЙНОСТТА ПО ПРОДАЖБА И ОБМЕН НА ВАЛУТА">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_change') }}">Maxtrade Change</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_change') }}">Програма за регистриране на
                                            дейността по продажба и обмен на валута</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_Delivery_3387313-300x300.png"
                                        alt="Програма за съхранение и печат на митнически товарителници (ЧМР)">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_cmr') }}">Maxtrade CMR</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_cmr') }}">Програма за съхранение и печат на
                                            митнически товарителници (ЧМР)</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_Umbrella_2974391-300x300.png"
                                        alt="Програма за управление на дейността на Служба по трудова медицина">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_ctm') }}">Maxtrade CTM</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_ctm') }}">Програма за управление на дейността
                                            на Служба по трудова медицина</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_tube-lab-science-school_2824437-300x300.png"
                                        alt="Програма за управление на дейността на Лаборатория">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_lab') }}">Maxtrade LAB</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_lab') }}">Програма за управление на дейността
                                            на Лаборатория</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_icon_animal_cachorro_3316536-300x300.png"
                                        alt="Програма за управление на дейността на Ловно Рибарско Дружество">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_slr') }}">Maxtrade SLR</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_slr') }}">Програма за управление на дейността
                                            на Ловно Рибарско Дружество</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/desktop/if_Asset_93_3298612-300x272.png"
                                        alt="Програма за управление на документите от Система по качеството">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('desktop.maxtrade_smdc') }}">Maxtrade SMDC</a></p>
                                    <p><a href="{{ route('desktop.maxtrade_smdc') }}">Програма за управление на
                                            документите от Система по качеството</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-16-->

                    <div id="web" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web/woocommerce.png"
                                        alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web.cc_woocommerce') }}">Кредитен Калкулатор Woocommerce</a>
                                    </p>
                                    <p><a href="{{ route('web.cc_woocommerce') }}">Модул за продаване на стоки от онлайн
                                            магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web/opencart.png"
                                        alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web.cc_opencart') }}">Кредитен Калкулатор OpenCart</a></p>
                                    <p><a href="{{ route('web.cc_opencart') }}">Модул за продаване на стоки от онлайн
                                            магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web/magento.png"
                                        alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web.cc_magento') }}">Кредитен Калкулатор Magento</a></p>
                                    <p><a href="{{ route('web.cc_magento') }}">Модул за продаване на стоки от онлайн
                                            магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web/prestashop.png"
                                        alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web.cc_prestashop') }}">Кредитен Калкулатор PrestaShop</a></p>
                                    <p><a href="{{ route('web.cc_prestashop') }}">Модул за продаване на стоки от онлайн
                                            магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-17-->

                    <div id="web-soft" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-soft/if_General_Office_62_3592835-300x300.png"
                                        alt="Maxtrade Store – Програма за подпомагане дейността на хладилен склад">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-soft.maxtrade_store') }}">Maxtrade Store</a></p>
                                    <p><a href="{{ route('web-soft.maxtrade_store') }}">Програма за подпомагане
                                            дейността на хладилен склад</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-soft/if_32_3319612-300x300.png"
                                        alt="Maxtrade StoreERP Складово Стопанство – програма за следене на виртуалните движения на стоки в склад">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-soft.maxtrade_storeerp') }}">Maxtrade StoreERP</a></p>
                                    <p><a href="{{ route('web-soft.maxtrade_storeerp') }}">Складово Стопанство –
                                            програма за следене на виртуалните движения на стоки в склад</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-soft/if_6_3319634-300x300.png"
                                        alt="Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-soft.maxtrade_ins') }}">Maxtrade INS</a></p>
                                    <p><a href="{{ route('web-soft.maxtrade_ins') }}">Програма за регистриране на
                                            дейността на Застрахователна агенция</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-soft/AVAMB-logiciel-300x226.png"
                                        alt="Програма организатор за малък, среден, а защо не и голям бизнес">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-soft.avamb') }}">AVAMB</a></p>
                                    <p><a href="{{ route('web-soft.avamb') }}">Програма организатор за малък, среден, а
                                            защо не и голям бизнес</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-18-->

                    <div id="web-service" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-service/support.jpg"
                                        alt="Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-service.website') }}">Стандартен уеб сайт</a></p>
                                    <p><a href="{{ route('web-service.website') }}">Изграждане на Стандартен уеб сайт по
                                            поръчка на клиента с информация предоставена ни от него</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-service/support.jpg"
                                        alt="Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-service.onlineshop') }}">Онлайн магазин</a></p>
                                    <p><a href="{{ route('web-service.onlineshop') }}">Изграждане на стандартен онлайн
                                            магазин по поръчка на клиента с информация предоставена ни от него</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/web-service/support.jpg" alt="WEB услуги, инсталации, поддръжка">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('web-service.webservice') }}">WEB услуги</a></p>
                                    <p><a href="{{ route('web-service.webservice') }}">WEB услуги, инсталации,
                                            поддръжка</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-19-->

                    <div id="mobile" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/mobile/AVAMB-logiciel-300x226.png" alt="AVAMB mobile">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('mobile.avambmobile') }}">AVAMB mobile</a></p>
                                    <p><a href="{{ route('mobile.avambmobile') }}">AVAMB mobile</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                        </div>
                        <!--/ .owl_carousel-->
                    </div>
                    <!--/ #tab-20-->

                    <div id="industry" class="tab_container">
                        <div class="owl_carousel carousel_in_tabs type_3">
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/industry/if_Blog-pencil-website-web-browser-gear-setup_2992650-300x300.png"
                                        alt="Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('industry.ikunk') }}">Maxtrade IKUNK</a></p>
                                    <p><a href="{{ route('industry.ikunk') }}">SCADA софтуер за мониторинг и управление
                                            на ИКУНК</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
                            <div class="product_item">
                                <div class="image_wrap">
                                    <img src="/images/industry/if_resolutions-01_897222-300x300.png"
                                        alt="Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар">
                                </div>
                                <!--/. image_wrap-->
                                <div class="description align_center">
                                    <p><a href="{{ route('industry.kantar') }}">Maxtrade KNTR</a></p>
                                    <p><a href="{{ route('industry.kantar') }}">Изработване на софтуер за отчитане,
                                            съхранение и обработване на данните от електронен авто кантар</a></p>
                                </div>
                            </div>
                            <!--/ .product_item-->
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
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2">
                        <i class="icon-download"></i>
                        <a href="{{ route('product', ['id' => 'max-cmr']) }}"><h4 class="caption"><b>Maxtrade CMR</b></h4></a>
                        <p>Програма за съхранение, обработване и печат на митнически товарителници (ЧМР)</p>
                        <a href="https://avalonbg.com/download/MaxtradeCMR.zip" onclick="clickBtnDownloadCmr(event)" class="button_dark_grey middle_btn">Изтегли ДЕМО версия</a>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2">
                        <i class="icon-download"></i>
                        <a href="{{ route('product', ['id' => 'max-slr']) }}"><h4 class="caption"><b>Maxtrade SLR</b></h4></a>
                        <p>Програма за управление на дейността на Ловно Рибарско Дружество</p>
                        <a href="https://avalonbg.com/download/MaxtradeSLR.zip" onclick="clickBtnDownloadSlr(event)" class="button_dark_grey middle_btn">Изтегли ДЕМО версия</a>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2">
                        <i class="icon-download"></i>
                        <a href="{{ route('product', ['id' => 'max-ctm']) }}"><h4 class="caption"><b>Maxtrade CTM</b></h4></a>
                        <p>Програма за управление на дейността на Служба по трудова медицина</p>
                        <a href="https://avalonbg.com/download/MaxtradeCTM.zip" onclick="clickBtnDownloadCtm(event)" class="button_dark_grey middle_btn">Изтегли ДЕМО версия</a>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6">
                    <section class="infoblock type_2">
                        <i class="icon-download"></i>
                        <a href="{{ route('product', ['id' => 'max-smdc']) }}"><h4 class="caption"><b>Maxtrade SMDC</b></h4></a>
                        <p>Програма за управление на документите от Система по качеството</p>
                        <a href="https://avalonbg.com/download/MaxtradeSMDC.zip" onclick="clickBtnDownloadSmdc(event)" class="button_dark_grey middle_btn">Изтегли ДЕМО версия</a>
                    </section>
                </div>
            </div>
        </section>
        <!--/ .section_offset -->
        <section class="section_offset animated transparent" data-animation="fadeInDown">
            <h3 class="offset_title">Производители - <a href="{{ route('proizvoditeli') }}" class="button_dark_grey">виж всички производители</a></h3>
            <div class="owl_carousel brands">
                @foreach ($manufacturers as $manufacturer)
                <a href="{{ route('products', ['manufacturer_id'=>$manufacturer->id]) }}"
                    title="{{ $manufacturer->name }}">
                    <img style="height:30px;width:auto;"
                        src="{{ Config::get('settings.backend') }}/dist/img/manufacturers/manufacturer_{{ $manufacturer->id }}.png"
                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'"
                        alt="{{ $manufacturer->name }}">
                </a>
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
@if ($paramstbi['tbi_container_status'] == 'Yes')
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
        <div style="font-size:16px;padding-top:3px;">{{ $paramstbi['tbi_container_txt1'] }}</div>
        <p style="font-size:14px;">{{ $paramstbi['tbi_container_txt2'] }}</p>
        <div class="tbi-label-text-a"><a href="{{ $paramstbi['tbi_backurl'] }}" target="_blank"
                alt="ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!">ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!</a></div>
    </div>
</div>
@endif
<!-- TBI Bank -->
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
            window.alert('Успешно добавихте продукта във Вашата продуктова кошница.');
            window.location.reload();
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
	window.open('{{ $paramstbi['tbi_backurl'] }}','_blank');
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

function clickBtnDownloadCmr(e){
    $.ajax({
        type:'POST',
        url:'/add-download.html',
        data:{id:2}
    });
};

function clickBtnDownloadSlr(e){
    $.ajax({
        type:'POST',
        url:'/add-download.html',
        data:{id:5}
    });
};

function clickBtnDownloadCtm(e){
    $.ajax({
        type:'POST',
        url:'/add-download.html',
        data:{id:3}
    });
};

function clickBtnDownloadSmdc(e){
    $.ajax({
        type:'POST',
        url:'/add-download.html',
        data:{id:6}
    });
};

</script>
@endsection
