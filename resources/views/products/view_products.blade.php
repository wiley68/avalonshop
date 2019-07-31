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
                                <!--
                                <section class="section_offset">
                                    <h3>Филтър продукти</h3>
                                    <form class="type_2">
                                        <div class="table_layout list_view">
                                            <div class="table_row">
                                                {{--
                                                @php
                                                    $categories_in = [];
                                                    if (!empty($queries['category_id'])){
                                                        foreach ($queries['category_id'] as $categoryid) {
                                                            $categories_in[] = $categoryid;
                                                        }
                                                    }
                                                @endphp
                                                --}}

                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Категории&nbsp;&raquo;&nbsp;<a href="#" id="viewall">виж всички</a></legend>
                                                        <ul class="checkboxes_list">
                                                            {{--@foreach ($root_categories as $root_category)--}}
                                                            <li>
                                                                <input type="checkbox" {{--@if ((in_array($root_category->id, $categories_in)) || (empty($categories_in))) checked @endif--}} name="category_id"
                                                                    id="category_{{--{{ $root_category->id }}--}}">
                                                                <label
                                                                    for="category_{{--{{ $root_category->id }}--}}">{{--{{ $root_category->name }}--}}</label>
                                                            </li>
                                                            {{--@foreach (Category::where(['parent_id' => $root_category->id])->get() as $item)--}}
                                                            <li name="subcategories" style="display:none;">
                                                                <input type="checkbox" {{--@if ((in_array($item->id, $categories_in)) || (empty($categories_in))) checked @endif--}} name="category_id"
                                                                    id="category_{{-- {{ $item->id }}--}}">
                                                                <label
                                                                    for="category_{{--{{ $item->id }}--}}">&nbsp;&nbsp;&nbsp;<span style="font-size:12px;color:gray;">{{--{{ $item->name }}--}}</span></label>
                                                            </li>
                                                            {{--@endforeach--}}
                                                            {{--@endforeach--}}
                                                        </ul>
                                                    </fieldset>
                                                </div>
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
                                            </div>
                                        </div>
                                        <footer class="bottom_box">
                                            <div class="buttons_row">
                                                <button type="submit" class="button_blue middle_btn">Search</button>
                                                <button type="reset"
                                                    class="button_grey middle_btn filter_reset">Reset</button>
                                            </div>
                                        </footer>
                                    </form>
                                </section>
                                -->
                                <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->
                                <!--
                                <section class="section_offset">
                                    <h3>Already Viewed Products</h3>
                                    <ul class="products_list_widget">
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_4.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Aenean auctor wisi et urna...</a>
                                                <div class="clearfix product_info">
                                                    <p class="product_price alignleft"><b>$5.99</b></p>
                                                    <ul class="rating alignright">
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                                -->
                                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->
                                <!--
                                <section class="section_offset">
                                    <h3>Compare Products</h3>
                                    <ul class="products_list_widget">
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
                                    </ul>
                                    <footer class="bottom_box">
                                        <a href="shop_product_comparison.html" class="button_grey middle_btn">Go to
                                            Compare</a>
                                    </footer>
                                </section>
                                -->
                                <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Етикети</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            @foreach ($tagsp as $tag)
                                                <li><a href="{{ route('products', ['tag_id'=>$tag->id]) }}" class="button_grey">{{ $tag->name }}</a></li>                                            
                                            @endforeach
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
                                    <form enctype="multipart/form-data" action="{{ route('products') }}" method="post" name="order_products" id="order_products" novalidate="novalidate">
                                    @csrf
                                    @foreach (Category::all() as $category)
                                        <input style="display:none;" type="checkbox" @if(in_array($category->id, $category_id)) checked @endif name="category_id[]" value="{{ $category->id }}">
                                    @endforeach
                                    <input name="tag_id" type="hidden" value="{{ $tag_id }}">
                                    <header class="top_box on_the_sides">
                                        <div class="left_side clearfix v_centered">
                                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Подреди по:</span>
                                                <div class="sort_select">
                                                    <select name="order_by" id="order_by">
                                                        <option value="order_by_id" @if ($order_by == 'order_by_id') selected @endif>Въвеждане</option>
                                                        <option value="order_by_price_desc" @if ($order_by == 'order_by_price_desc') selected @endif>Цена Низходящо</option>
                                                        <option value="order_by_price_asc" @if ($order_by == 'order_by_price_asc') selected @endif>Цена Възходящо</option>
                                                        <option value="order_by_name_asc" @if ($order_by == 'order_by_name_asc') selected @endif>Име А-Я</option>
                                                        <option value="order_by_name_desc" @if ($order_by == 'order_by_name_desc') selected @endif>Име Я-А</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Покажи:</span>
                                                <div>
                                                    <select name="paginate_by" id="paginate_by">
                                                        <option value="15" @if ($paginate == '15') selected @endif>15</option>
                                                        <option value="12" @if ($paginate == '12') selected @endif>12</option>
                                                        <option value="9" @if ($paginate == '9') selected @endif>9</option>
                                                        <option value="6" @if ($paginate == '6') selected @endif>6</option>
                                                        <option value="3" @if ($paginate == '3') selected @endif>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->
                                        </div>
                                    </header>
                                    </form>
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
                                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $products_collection[$i+$j]['id'] }}_1.png" style="max-width:200px;" alt="{{ $products_collection[$i+$j]['name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                                <div class="actions_wrap">
                                                                    <div class="centered_buttons">
                                                                        <a href="{{ route('product', ['id' => $products_collection[$i+$j]['id']]) }}"
                                                                            class="button_dark_grey middle_btn quick_view"
                                                                        >Подробно</a>
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
                                <a class="infoblock type_1">
                                    <i class="icon-paper-plane"></i>
                                    <span class="caption"><b>Бърза доставка</b></span>
                                </a>
                                <!--/ .infoblock-->
                            </li>
                            <li>
                                <a class="infoblock type_1">
                                    <i class="icon-lock"></i>
                                    <span class="caption"><b>Защитено плащане</b></span>
                                </a>
                                <!--/ .infoblock-->
                            </li>
                            <li>
                                <a class="infoblock type_1">
                                    <i class="icon-money"></i>
                                    <span class="caption"><b>Безплатна доставка над 400 лв.</b></span>
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

@section('scripts')
<script>
    // Submit order form on change
    $('#order_by').on('change', function(e) {
        document.forms['order_products'].submit();
    });

    // Submit paginate form on change
    $('#paginate_by').on('change', function(e) {
        document.forms['order_products'].submit();
    });

    //$("#viewall").click(function(e){
    //    e.preventDefault();
    //    $("li[name='subcategories']").each(function(){
    //        $(this).toggle('slow');
    //    });
    //});
</script>  
@endsection