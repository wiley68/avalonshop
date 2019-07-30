<?php use App\Category; ?>
<?php use Illuminate\Support\Collection; ?>
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
                            <li>Филтър за продукти</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4 has_mega_menu">
                                <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Филтър продукти</h3>
                                    <form class="type_2">
                                        <div class="table_layout list_view">
                                            <div class="table_row">
                                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                                @php
                                                    $categories_in = [];
                                                    if (!empty($queries['category_id'])){
                                                        foreach ($queries['category_id'] as $categoryid) {
                                                            $categories_in[] = $categoryid;
                                                        }
                                                    }
                                                @endphp

                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Категории</legend>
                                                        <ul class="checkboxes_list">
                                                            @foreach ($root_categories as $root_category)
                                                            <li>
                                                                <input type="checkbox" @if ((in_array($root_category->id, $categories_in)) || (empty($categories_in))) checked @endif name="category_id"
                                                                    id="category_{{ $root_category->id }}">
                                                                <label
                                                                    for="category_{{ $root_category->id }}">{{ $root_category->name }}</label>
                                                            </li>
                                                            @foreach (Category::where(['parent_id' => $root_category->id])->get() as $item)
                                                            <li>
                                                                <input type="checkbox" @if ((in_array($item->id, $categories_in)) || (empty($categories_in))) checked @endif name="category_id"
                                                                    id="category_{{ $item->id }}">
                                                                <label
                                                                    for="category_{{ $item->id }}">&nbsp;&nbsp;&nbsp;<span style="font-size:12px;color:gray;">{{ $item->name }}</span></label>
                                                            </li>
                                                            @endforeach
                                                            @endforeach
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End Category filter - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Price</legend>
                                                        <div class="range">
                                                            Range :
                                                            <span class="min_val"></span> -
                                                            <span class="max_val"></span>
                                                            <input type="hidden" name="" class="min_value">
                                                            <input type="hidden" name="" class="max_value">
                                                        </div>
                                                        <div id="slider"></div>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Color</legend>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <ul class="simple_vertical_list">
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_1">
                                                                        <label for="color_btn_1"
                                                                            class="color_btn green">Green</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_2">
                                                                        <label for="color_btn_2"
                                                                            class="color_btn yellow">Yellow</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_3">
                                                                        <label for="color_btn_3"
                                                                            class="color_btn red">Red</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul class="simple_vertical_list">
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_4">
                                                                        <label for="color_btn_4"
                                                                            class="color_btn blue">Blue</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_5">
                                                                        <label for="color_btn_5"
                                                                            class="color_btn grey">Grey</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_6">
                                                                        <label for="color_btn_6"
                                                                            class="color_btn orange">Orange</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->
                                            </div>
                                            <!--/ .table_row -->
                                        </div>
                                        <!--/ .table_layout -->
                                        <footer class="bottom_box">
                                            <div class="buttons_row">
                                                <button type="submit" class="button_blue middle_btn">Search</button>
                                                <button type="reset"
                                                    class="button_grey middle_btn filter_reset">Reset</button>
                                            </div>
                                        </footer>
                                    </form>
                                </section>
                                <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Already Viewed Products</h3>
                                    <ul class="products_list_widget">
                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_4.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Aenean auctor wisi et urna...</a>
                                                <div class="clearfix product_info">
                                                    <p class="product_price alignleft"><b>$5.99</b></p>
                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                    <ul class="rating alignright">
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>
                                                    </ul>
                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                </div>
                                            </div>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                    </ul>
                                    <!--/ .list_of_products-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Compare Products</h3>
                                    <ul class="products_list_widget">
                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_10.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Integer rutrum ante eu lacus...</a>
                                                <div class="clearfix product_info">
                                                    <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_11.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Vestibulum ante ipsum primis in...</a>
                                                <div class="clearfix product_info">
                                                    <p class="product_price alignleft"><b>$13.99</b></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                    </ul>
                                    <!--/ .list_of_products-->
                                    <footer class="bottom_box">
                                        <a href="shop_product_comparison.html" class="button_grey middle_btn">Go to
                                            Compare</a>
                                    </footer>
                                </section>
                                <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Tags</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            <li><a href="#" class="button_grey">allergy</a></li>
                                            <li><a href="#" class="button_grey">baby</a></li>
                                            <li><a href="#" class="button_grey">beauty</a></li>
                                            <li><a href="#" class="button_grey">ear care</a></li>
                                            <li><a href="#" class="button_grey">for her</a></li>
                                            <li><a href="#" class="button_grey">for him</a></li>
                                            <li><a href="#" class="button_grey">first aid</a></li>
                                            <li><a href="#" class="button_grey">gift sets</a></li>
                                            <li><a href="#" class="button_grey">spa</a></li>
                                            <li><a href="#" class="button_grey">hair care</a></li>
                                            <li><a href="#" class="button_grey">herbs</a></li>
                                            <li><a href="#" class="button_grey">medicine</a></li>
                                            <li><a href="#" class="button_grey">natural</a></li>
                                            <li><a href="#" class="button_grey">oral care</a></li>
                                            <li><a href="#" class="button_grey">pain</a></li>
                                            <li><a href="#" class="button_grey">pedicure</a></li>
                                            <li><a href="#" class="button_grey">personal care</a></li>
                                            <li><a href="#" class="button_grey">probiotics</a></li>
                                        </ul>
                                        <!--/ .tags_cloud-->
                                    </div>
                                    <!--/ .tags_container-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_11.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                            </aside>

                            <main class="col-md-9 col-sm-8">
                                <div class="section_offset">
                                    <header class="top_box on_the_sides">
                                        <div class="left_side clearfix v_centered">
                                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Подреди по:</span>
                                                <div class="custom_select sort_select">
                                                    <select name="">
                                                        <option value="Въвеждане">Въвеждане</option>
                                                        <option value="Цена">Цена</option>
                                                        <option value="Име">Име</option>
                                                        <option value="Дата">Дата</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Покажи:</span>
                                                <div class="custom_select">
                                                    <select name="">
                                                        <option value="15">15</option>
                                                        <option value="12">12</option>
                                                        <option value="9">9</option>
                                                        <option value="6">6</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->
                                        </div>
                                    </header>
                                    <div class="table_layout" id="products_container">
                                        @php
                                        $rows = ceil($products->count() / 3);
                                        $products_collection = (new Collection($products))['data'];
                                        @endphp
                                        @for ($i = 0; $i <= $rows*2; $i=$i+3) <div class="table_row">
                                            @for ($j = 0; $j < 3; $j++) <!-- - - - - - - - - - - - - - Product - - - -
                                                - - - - - - - - - - - - -->
                                                @if (!empty($products_collection[$i+$j]))
                                                <div class="table_cell">
                                                        <div class="product_item">
                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                            <div class="image_wrap">
                                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $products_collection[$i+$j]['id'] }}_1.png" style="max-width:200px;" alt="{{ $products_collection[$i+$j]['name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.jpg'">
                                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                                <div class="actions_wrap">
                                                                    <div class="centered_buttons">
                                                                        <a href="#"
                                                                            class="button_dark_grey middle_btn quick_view"
                                                                            data-modal-url="modals/quick_view.html">Бърз преглед</a>
                                                                        <a href="#"
                                                                            class="button_blue middle_btn add_to_cart">Купи</a>
                                                                    </div>
                                                                    <!--/ .centered_buttons -->
                                                                    <a href="#"
                                                                        class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span
                                                                            class="tooltip right">Добави към любими</span></a>
                                                                    <a href="#"
                                                                        class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span
                                                                            class="tooltip left">Добави за сравнение</span></a>
                                                                </div>
                                                                <!--/ .actions_wrap-->
                                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                                            </div>
                                                            <!--/. image_wrap-->
                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                            <div class="description">
                                                                <a href="#">{{ $products_collection[$i+$j]['name'] }}</a>
                                                                <div class="clearfix product_info">
                                                                    <p class="product_price alignleft"><b>{{ number_format($products_collection[$i+$j]['price'], 2, ".", "") }}</b> лв.</p>
                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                                    <ul class="rating alignright">
                                                                        <li class="active"></li>
                                                                        <li class="active"></li>
                                                                        <li class="active"></li>
                                                                        <li class="active"></li>
                                                                        <li></li>
                                                                    </ul>
                                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                                </div>
                                                            </div>
                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <!--/ .product_item-->
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->                                                        
                                                @endif
                                            @endfor
                                        </div>
                                    @endfor
                                </div>
                                <!--/ .table_layout -->
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side">
                                        <p>Покажи {{ $products->firstItem() }} до {{ $products->lastItem() }} от {{ $products->total() }} ({{ $products->lastPage() }} страници)</p>
                                    </div>
                                    <div class="right_side">
                                        <!-- Start Pagination -->
                                        {{ $products->links("vendor.pagination.bootstrap-4") }}
                                        <!-- End Pagination -->
                                    </div>
                                </footer>
                        </div>
                        <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->
                        </main>
                    </div>
                    <!--/ .row -->
                </div>
                <!--/ .container-->
            </div>
            <!--/ .page_wrapper-->
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
            <footer id="footer">
                <div class="container">
                    <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
                    <div class="infoblocks_container">
                        <ul class="infoblocks_wrap">
                            <li>
                                <a href="#" class="infoblock type_1">
                                    <i class="icon-paper-plane"></i>
                                    <span class="caption"><b>Fast &amp; Free Delivery</b></span>
                                </a>
                                <!--/ .infoblock-->
                            </li>
                            <li>
                                <a href="#" class="infoblock type_1">
                                    <i class="icon-lock"></i>
                                    <span class="caption"><b>Safe &amp; Secure Payment</b></span>
                                </a>
                                <!--/ .infoblock-->
                            </li>
                            <li>
                                <a href="#" class="infoblock type_1">
                                    <i class="icon-money"></i>
                                    <span class="caption"><b>100% Money back Guaranted</b></span>
                                </a>
                                <!--/ .infoblock-->
                            </li>
                        </ul>
                        <!--/ .infoblocks_wrap.section_offset.clearfix-->
                    </div>
                    <!--/ .infoblocks_container -->
                    <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
                </div>
        </div>
    </div>
</div>
@endsection