<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
                <div class="secondary_page_wrapper">
                    <div class="container">
                        <section class="section_offset">
                            <h1>Продуктова кошница</h1>
                            @if (!empty((Session::get('cart_session'))['items']))
                            <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->
                            <div class="table_wrap">
                                <table class="table_type_1 shopping_cart_table">
                                    <thead>
                                        <tr>
                                            <th class="product_image_col">Снимка</th>
                                            <th class="product_title_col">Продукт</th>
                                            <th>Ед. цена</th>
                                            <th class="product_qty_col">Количество</th>
                                            <th>Обща цена</th>
                                            <th class="product_actions_col">Управление</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $all_price = 0;
                                        @endphp
                                        @foreach ((Session::get('cart_session'))['items'] as $item)
                                        @php
                                            $product_cart = Product::where(['id' => $item['product_id']])->first();
                                            $imgsrc1 = $product_cart->imgurl1;
                                        @endphp
                                        <tr>
                                            <td class="product_image_col" data-title="Product Image">
                                                <a href="{{ route('product', ['id' => $item['product_code']]) }}">
                                                @if (!empty($imgsrc1))
                                                    <img style="max-width:80px;" src="{{ $imgsrc1 }}" alt="{{ $item['product_name'] }}">
                                                @else
                                                    <img style="max-width:80px;" src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" 
                                                    alt="{{ $item['product_name'] }}">
                                                @endif                                                </a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->
                                            <td data-title="Product Name">
                                                <a href="{{ route('product', ['id' => $item['product_code']]) }}" class="product_title">{{ $item['product_name'] }}</a>
                                                <ul class="sc_product_info">
                                                    <li>{{ $item['product_code'] }}</li>
                                                </ul>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                            <td class="subtotal" data-title="Price">
                                                {{ number_format(floatval($item['total_price']) / floatval($item['product_quantity']), 2, ".", "") }}&nbsp; лв.
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->
                                            <td data-title="Quantity">
                                                <div class="qty min clearfix">
                                                    <button onclick="subQuantity('{{ $item['product_id'] }}');" class="theme_button" data-direction="minus">&#45;</button>
                                                    <input id="quantity{{ $item['product_id'] }}" oninput="changeCartQuantity('{{ $item['product_id'] }}', this.value);" type="text" id="quantity" value="{{ $item['product_quantity'] }}">
                                                    <button onclick="addQuantity('{{ $item['product_id'] }}');" class="theme_button" data-direction="plus">&#43;</button>
                                                </div>
                                                <!--/ .qty.min.clearfix-->
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->
                                            <td class="total" data-title="Total">
                                                @php
                                                    $all_price += round(floatval($item['total_price']),2);
                                                @endphp
                                                {{ number_format(floatval($item['total_price']), 2, ".", "") }}&nbsp; лв.
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->
                                            <td data-title="Action">
                                                <a href="{{ route('cart-remove-product', ['id' => $item['product_id']]) }}" title="Изтрий този продукт от кошницата." class="button_dark_grey icon_btn remove_product"><i
                                                        class="icon-cancel-2"></i></a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--/ .table_wrap -->
                            <footer class="bottom_box on_the_sides">
                                <div class="left_side">
                                    <a href="{{ route('index') }}" class="button_blue middle_btn">Продъкжи пазаруването</a>
                                </div>
                                <div class="right_side">
                                    <h3 class="total" style="font-size: 20px;">Обща цена: {{number_format($all_price, 2, ".", "")}} лв.</h3>
                                </div>
                            </footer>
                            <!--/ .bottom_box -->
                            <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->
                        </section>
                        <section class="section_offset">
                            <h1>Данни за доставка</h1>
                            <div class="theme_box">
                                <div class="row" style="margin-left:5px;">
                                    <input type="radio" id="new_customer" name="checkout" value="new_customer">
                                    <label for="new_customer"><h4>Нов клиент</h4></label>
                                    <input type="radio" id="have_registration" name="checkout" value="have_registration">
                                    <label for="have_registration"><h4>Вече имам регистрация</h4></label>
                                    <input type="radio" id="fast_checkout" name="checkout" value="fast_checkout">
                                    <label for="fast_checkout"><h4>Бърза поръчка</h4></label>
                                </div>
                                <hr>
                                <br>
                                <div class="row" id="new_customer_div">
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        <ul>
                                            <li class="row">
                                                <div class="col-sm-12">
                                                    <label for="user_name" class="required">Имена</label>
                                                    <input type="text" name="user_name" id="user_name">
                                                </div>
                                                <!--/ [col] -->
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-12">
                                                    <label for="user_name" class="required">Email</label>
                                                    <input type="email" name="email" id="email">
                                                </div>
                                                <!--/ [col] -->
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-12">
                                                    <label for="user_name" class="required">Парола</label>
                                                    <input type="password" name="password" id="password">
                                                </div>
                                                <!--/ [col] -->
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-12">
                                                    <label for="user_name" class="required">Повтори парола</label>
                                                    <input type="password" name="password_confirm" id="password_confirm">
                                                </div>
                                                <!--/ [col] -->
                                            </li>
                                        </ul>    
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top:5%">
                                        <a href="#" class="button_blue middle_btn">Регистрация с Facebook</a>
                                        <br><br>
                                        <a href="#" class="button_blue middle_btn">Регистрация с Google</a>
                                    </div>
                                </div>
                                <div id="new_customer_div" style="display:none;">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="user_name" class="required">Имена</label>
                                                <input type="text" name="user_name" id="user_name"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->name }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                    </ul>
                                </div>
                                <div id="new_customer_div" style="display:none;">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="user_name" class="required">Имена</label>
                                                <input type="text" name="user_name" id="user_name"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->name }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        @else
                        <h1>Вашата продуктова кошница е празна!</h1>
                        @endif
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
    function subQuantity(id){
        changeCartQuantity(id, parseInt($("#quantity"+id).val()) - 1);
    };

    function addQuantity(id){
        changeCartQuantity(id, parseInt($("#quantity"+id).val()) + 1);
    };

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function changeCartQuantity(product_id, product_quantity){
        $.ajax({
            url: '/product/change-cart-quantity.html',
            type: 'POST',
            data: {
                product_id: product_id,
                product_quantity: product_quantity
            },
            dataType: 'JSON',
            success: function (data) {
                window.location.reload();
            }
        });
    };
</script>
@endsection
