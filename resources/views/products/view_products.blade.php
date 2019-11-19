<?php use App\Category; ?>
<?php use App\Tagsp; ?>
<?php use App\Manufacturer; ?>
<?php use Illuminate\Support\Collection; ?>
<?php use App\Review; ?>
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
                                $category_name = '';
                                if (!empty($category_id)){
                                    $category_name = '&nbsp;:&nbsp;<strong>';
                                    $category_name .= Category::where(['id' => $category_id])->first()->name;
                                    $category_name .= '</strong>';
                                }
                            @endphp
                            <li>Филтър за продукти@if (!empty($search_text))&nbsp;(Търсен символ: <strong>{{ $search_text }}</strong>)@endif{!! $category_name !!}</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4 has_mega_menu">
                                <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Филтър продукти</h3>
                                        <div class="table_layout list_view">
                                            <div class="table_row">
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Наличност</legend>
                                                        <ul class="checkboxes_list">
                                                            <li>
                                                                <input type="checkbox" @if (in_array('в наличност', $instock)) checked @endif name="instock[]" id="nalicno" value="в наличност">
                                                                <label for="nalicno">в наличност</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" @if (in_array('минимално количество', $instock)) checked @endif name="instock[]" id="minqt" value="минимално количество">
                                                                <label for="minqt">минимално количество</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" @if (in_array('очаква се', $instock)) checked @endif name="instock[]" id="ocakvase" value="очаква се">
                                                                <label for="ocakvase">очаква се</label>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                </div><!--/ .table_cell -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Цена</legend>
                                                        <div class="range">
                                                            Обхват :
                                                            <span class="min_val"></span> -
                                                            <span class="max_val"></span>
                                                            <input type="hidden" name="price_min" id="price_min" class="min_value">
                                                            <input type="hidden" name="price_max" id="price_max" class="max_value">
                                                        </div>
                                                        <div id="slider"></div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="bottom_box">
                                            <div class="buttons_row">
                                                <button class="button_blue middle_btn" id="btn_filter">Търси</button>
                                                <a href="{{ route('products') }}" class="button_grey middle_btn filter_reset">Откажи</a>
                                            </div>
                                        </footer>
                                </section>
                                <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Manufacturers - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Производители</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            @foreach ($products_manufacturers as $product_manufacturer)
                                                <li><a href="{{ route('products', ['manufacturer_id'=>$product_manufacturer->manufacturer_id]) }}" class="button_grey">{{ Manufacturer::where(['id' => $product_manufacturer->manufacturer_id])->first()->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <!--/ .tags_cloud-->
                                    </div>
                                    <footer class="bottom_box">
                                        <a href="{{ route('proizvoditeli') }}" class="button_grey middle_btn">Виж всички Производители</a>
                                    </footer>
                                    <!--/ .tags_container-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of Manufacturers - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Често срещани</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            @foreach ($tags_working as $working_tag_id)
                                                <li><a href="{{ route('products', ['tag_id'=>$working_tag_id]) }}" class="button_grey">{{ Tagsp::where(['id' => $working_tag_id])->first()->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <!--/ .tags_cloud-->
                                    </div>
                                    <!--/ .tags_container-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="{{ route('credit-info') }}" class="banner" title="Покупка на стоки на изплащане">
                                        <img src="images/banner_lizing.jpg" style="border: 1px solid #A9A9A9;" alt="Покупка на стоки на изплащане">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="{{ route('product', ['id' => 'max-cmr']) }}" class="banner">
                                        <img src="/images/cmr.png" alt="">
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
                                                        <option value="30" @if ($paginate == '30') selected @endif>30</option>
                                                        <option value="60" @if ($paginate == '60') selected @endif>60</option>
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
                                        @for ($i = 0; $i <= $rows*3; $i=$i+3) <div class="table_row">
                                            @for ($j = 0; $j < 3; $j++) <!-- - - - - - - - - - - - - - Product - - - -
                                                - - - - - - - - - - - - -->
                                                @if (!empty($products_collection[$i+$j]))
                                                <div class="table_cell">
                                                        <div class="product_item">
                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                            @php
                                                                $imgsrc1 = $products_collection[$i+$j]['imgurl1'];
                                                            @endphp
                                                            <div class="image_wrap">
                                                                @if (!empty($imgsrc1))
                                                                    <img src="{{ $imgsrc1 }}" alt="{{ $products_collection[$i+$j]['name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                                @else
                                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" alt="{{ $products_collection[$i+$j]['name'] }}">
                                                                @endif
                                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                                <div class="actions_wrap">
                                                                    <div class="centered_buttons">
                                                                        <a href="{{ route('product', ['id' => $products_collection[$i+$j]['code']]) }}"
                                                                            class="button_dark_grey middle_btn quick_view"
                                                                        >Подробно</a><br />
                                                                        <button onclick="buyProduct('{{ $products_collection[$i+$j]['id'] }}');" class="button_blue middle_btn add_to_cart">Купи</a>
                                                                    </div>
                                                                    <!--/ .centered_buttons -->
                                                                    @auth
                                                                    <a href="#" id="btn_add_favorite" onclick="clickBtnAddFavorite(event, {{ $products_collection[$i+$j]['id'] }})"
                                                                        class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span
                                                                            class="tooltip right">Добави към любими</span></a>
                                                                    @endauth
                                                                </div>
                                                                <!--/ .actions_wrap-->
                                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                                            </div>
                                                            <!--/. image_wrap-->
                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                            <div class="description">
                                                                <a href="{{ route('product', ['id' => $products_collection[$i+$j]['code']]) }}">{{ $products_collection[$i+$j]['name'] }}</a>
                                                                <div class="clearfix product_info">
                                                                    <p class="product_price alignleft"><b>{{ number_format($products_collection[$i+$j]['price'], 2, ".", "") }}</b> лв.</p>
                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                                    @php
                                                                    $all_rev = 0;
                                                                    $reviews = Review::where(['product_id' => $products_collection[$i+$j]['id']])->get();
                                                                    foreach ($reviews as $review){
                                                                        $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
                                                                    }
                                                                    if ($reviews->count() > 0){
                                                                        $all_rev = floor($all_rev / ($reviews->count() * 3));
                                                                    }
                                                                    @endphp
                                                                    <ul class="rating alignright">
                                                                        <li @if ($all_rev> 0) class="active" @endif></li>
                                                                        <li @if ($all_rev> 1) class="active" @endif></li>
                                                                        <li @if ($all_rev> 2) class="active" @endif></li>
                                                                        <li @if ($all_rev> 3) class="active" @endif></li>
                                                                        <li @if ($all_rev> 4) class="active" @endif></li>
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
    /* ------------------------------------------------
		Range slider
	------------------------------------------------ */
	if($('#slider').length){
        window.startRangeValues = [{{ $price_min }}, {{ $price_max }}];
        $('#slider').slider({
            range : true,
            min : {{ $products_min }},
            max : {{ $products_max }},
            values : window.startRangeValues,
            step : 1,

            slide : function(event, ui){
                var min = ui.values[0].toFixed(2),
                max = ui.values[1].toFixed(2),
                range = $(this).siblings('.range');
                range.children('.min_value').val(min).next().val(max);
                range.children('.min_val').text(min + ' лв.').next().text(max + ' лв.');
            },

            create : function(event, ui){
                var $this = $(this),
                min = $this.slider("values", 0).toFixed(2),
                max = $this.slider("values", 1).toFixed(2),
                range = $this.siblings('.range');
                range.children('.min_value').val(min).next().val(max);
                range.children('.min_val').text(min + ' лв.').next().text(max + ' лв.');
            }
        });
    }
    /* ------------------------------------------------
        End range slider
    ------------------------------------------------ */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.extend({
        redirectPost: function(location, args){
            var form = $('<form></form>');
            form.attr("method", "post");
            form.attr("action", location);
            $.each( args, function( key, value ) {
                var field = $('<input></input>');
                field.attr("type", "hidden");
                field.attr("name", key);
                field.attr("value", value);
                form.append(field);
            });
            $(form).appendTo('body').submit();
        }
    });

    // Post filter request
    function postFilter(){
        // instock
        var instock = [];
        $("input[name='instock[]']:checked").each(function (index, obj) {
            instock.push($(this).val());
        });
        if (Array.isArray(instock) && instock.length){
            instock_json = JSON.stringify(instock);
        }else{
            instock_json = "";
        }

        $.redirectPost(
            '{{route("products")}}', 
            {
                _token: '{{ csrf_token() }}',
                order_by: $('#order_by option:selected').val(),
                paginate_by: $('#paginate_by option:selected').val(),
                category_id: '{{$category_id}}',
                tag_id: '{{$tag_id}}',
                manufacturer_id: '{{$manufacturer_id}}',
                price_min: $("#price_min").val(),
                price_max: $("#price_max").val(),
                search_text: '{{$search_text}}',
                instock: instock_json
            }
        );
    }

    // Submit order form on change
    $('#order_by').on('change', function(e) {
        postFilter();
    });

    // Submit paginate form on change
    $('#paginate_by').on('change', function(e) {
        postFilter();
    });

    $("#btn_filter").click(function(){
        postFilter();
    });

    function clickBtnAddFavorite(e, id){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'/add-favorite.html',
            data:{id:id},
            success:function(data){
                console.log(data);
                if (data.result == "new"){
                    alert("Успешно добавихте този продукт към Любите си продукти.");
                }else{
                    alert("Вече сте добавили този продукт в Любимите си продукти.");
                }
            }
        });
    };

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
</script>
@endsection
