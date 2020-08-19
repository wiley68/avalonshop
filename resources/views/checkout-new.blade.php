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
                                                    <img style="max-width:80px;" src="{{ $imgsrc1 }}"
                                                        alt="{{ $item['product_name'] }}">
                                                    @else
                                                    <img style="max-width:80px;"
                                                        src="{{ Config::get('settings.backend') }}/dist/img/noimage.png"
                                                        alt="{{ $item['product_name'] }}">
                                                    @endif </a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->
                                            <td data-title="Product Name">
                                                <a href="{{ route('product', ['id' => $item['product_code']]) }}"
                                                    class="product_title">{{ $item['product_name'] }}</a>
                                                <ul class="sc_product_info">
                                                    <li>{{ $item['product_code'] }}</li>
                                                </ul>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                            <td class="subtotal" data-title="Price">
                                                {{ number_format(floatval($item['total_price']) / floatval($item['product_quantity']), 2, ".", "") }}&nbsp;
                                                лв.
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->
                                            <td data-title="Quantity">
                                                <div class="qty min clearfix">
                                                    <button onclick="subQuantity('{{ $item['product_id'] }}');"
                                                        class="theme_button" data-direction="minus">&#45;</button>
                                                    <input id="quantity{{ $item['product_id'] }}"
                                                        oninput="changeCartQuantity('{{ $item['product_id'] }}', this.value);"
                                                        type="text" id="quantity"
                                                        value="{{ $item['product_quantity'] }}">
                                                    <button onclick="addQuantity('{{ $item['product_id'] }}');"
                                                        class="theme_button" data-direction="plus">&#43;</button>
                                                </div>
                                                <!--/ .qty.min.clearfix-->
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->
                                            <td class="total" data-title="Total">
                                                @php
                                                $all_price += round(floatval($item['total_price']),2);
                                                @endphp
                                                {{ number_format(floatval($item['total_price']), 2, ".", "") }}&nbsp;
                                                лв.
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->
                                            <td data-title="Action">
                                                <a href="{{ route('cart-remove-product', ['id' => $item['product_id']]) }}"
                                                    title="Изтрий този продукт от кошницата."
                                                    class="button_dark_grey icon_btn remove_product"><i
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
                                    <a href="{{ route('index') }}" class="button_grey middle_btn">Продължи
                                        пазаруването</a>
                                </div>
                                <div class="right_side">
                                    <h3 class="total" style="font-size: 20px;">Обща цена:
                                        {{number_format($all_price, 2, ".", "")}} лв.</h3>
                                </div>
                            </footer>
                            <!--/ .bottom_box -->
                            <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->
                        </section>
                        @guest
                        @php
                        $isAuth = 0;
                        @endphp
                        <section class="section_offset">
                            <input type="hidden" id="isAuth" value="{{$isAuth}}">
                            <h1>Данни за доставка</h1>
                            <div class="theme_box">
                                <div class="main_radio">
                                    <input type="radio" id="new_customer" name="checkout" value="new_customer" checked
                                        onclick="javascript:typeRadio();">
                                    <label for="new_customer">
                                        <h4>Нов клиент</h4>
                                    </label>
                                    <input type="radio" id="have_registration" name="checkout" value="have_registration"
                                        onclick="javascript:typeRadio();">
                                    <label for="have_registration">
                                        <h4>Вече имам регистрация</h4>
                                    </label>
                                    <input type="radio" id="fast_checkout" name="checkout" value="fast_checkout"
                                        onclick="javascript:typeRadio();">
                                    <label for="fast_checkout">
                                        <div>
                                            <h4 style="text-align:left;float:left;">Бърза поръчка&nbsp;</h4>
                                            <p style="text-align:right;float:right;">(без регистрация)</p>
                                        </div>
                                    </label>
                                </div>
                                <hr>
                                <br>
                                <div id="new_customer_div">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_name" class="required">Имена</label>
                                                <input type="text" name="new_customer_name" id="new_customer_name">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_email" class="required">Email</label>
                                                <input type="email" name="new_customer_email" id="new_customer_email">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_password" class="required">Парола</label>
                                                <input type="password" name="new_customer_password"
                                                    id="new_customer_password">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_second_password" class="required">Повтори
                                                    парола</label>
                                                <input type="password" name="new_customer_second_password"
                                                    id="new_customer_second_password">
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                    <hr>
                                    <br>
                                    <ul>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="new_customer_address" class="required">Адрес</label>
                                                <input type="text" name="new_customer_address"
                                                    id="new_customer_address">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_city" class="required">Населено място</label>
                                                <input type="text" name="new_customer_city" id="new_customer_city">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="new_customer_postcode" class="required">Пощенски код</label>
                                                <input type="text" name="new_customer_postcode"
                                                    id="new_customer_postcode">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="new_customer_phone" class="required">Телефон</label>
                                                <input type="text" name="new_customer_phone" id="new_customer_phone">
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="col-sm-12">
                                        <input type="radio" id="normal_user" name="user_firm" value="normal_user"
                                            checked onclick="javascript:userFirmShow();">
                                        <label for="normal_user">
                                            <h5>Физическо лице</h5>
                                        </label>
                                        <input type="radio" id="firm_user" name="user_firm" value="firm_user"
                                            onclick="javascript:userFirmShow();">
                                        <label for="firm_user">
                                            <h5>Юридическо лице</h5>
                                        </label>
                                    </div>
                                    <br>
                                    <div id="firm_user_div" style="display: none;">
                                        <ul>
                                            <li>
                                                <div class="col-sm-12">
                                                    <label for="new_customer_company_name" class="required">Име и фирма
                                                        / компания</label>
                                                    <input type="text" name="new_customer_company_name"
                                                        id="new_customer_company_name">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-sm-12">
                                                    <label for="new_customer_mol" class="required">МОЛ</label>
                                                    <input type="text" name="new_customer_mol" id="new_customer_mol">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-sm-12">
                                                    <label for="new_customer_eik" class="required">ЕИК / ДДС №</label>
                                                    <input type="text" name="new_customer_eik" id="new_customer_eik">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="have_registration_div" style="display:none;">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="have_registration_email" class="required">Email</label>
                                                <input type="email" name="have_registration_email"
                                                    id="have_registration_email">
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="have_registration_password" class="required">Парола</label>
                                                <input type="password" name="have_registration_password"
                                                    id="have_registration_password">
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                    <button type="submit" class="button_blue middle_btn"
                                        id="btn_login_user">Вход</button>
                                </div>
                                <div id="fast_checkout_div" style="display:none;">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="fast_checkout_phone" class="required">Телефон</label>
                                                <input type="text" name="fast_checkout_phone" id="fast_checkout_phone">
                                            </div>

                                        </li>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <p>Въведете своя телефон. Ние ще се свържем с вас за продажбата!</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        @else
                        @php
                        $isAuth = 1;
                        @endphp
                        <section class="section_offset">
                            <input type="hidden" id="isAuth" value="{{$isAuth}}">
                            <h1>Данни за доставка</h1>
                            <div class="relative">
                                <div class="table_layout">
                                    <div class="table_row">
                                        <div class="table_cell">
                                            <section>
                                                <h4>Здравейте {{ Auth::user()->name }}, моля попълнете необходимите
                                                    данни по-долу за да завършите Вашата поръчка.</h4>
                                                <p>Полетата отбелязани със знака * са задължителни за попълване!</p>
                                                <br>
                                                <ul>
                                                    <li class="row">
                                                        <div class="col-sm-12">
                                                            <label for="new_customer_name"
                                                                class="required">Имена</label>
                                                            <input type="text" name="new_customer_name"
                                                                id="new_customer_name" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-sm-12">
                                                            <label for="new_customer_email"
                                                                class="required">Email</label>
                                                            <input type="email" name="new_customer_email"
                                                                id="new_customer_email"
                                                                value="{{ Auth::user()->email }}">
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-xs-12">
                                                            <label for="new_customer_address"
                                                                class="required">Адрес</label>
                                                            <input type="text" name="new_customer_address"
                                                                id="new_customer_address"
                                                                value="{{ Auth::user()->address }}">
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-sm-12">
                                                            <label for="new_customer_city" class="required">Населено
                                                                място</label>
                                                            <input type="text" name="new_customer_city"
                                                                id="new_customer_city" value="{{ Auth::user()->city }}">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label for="new_customer_postcode" class="required">Пощенски
                                                                код</label>
                                                            <input type="text" name="new_customer_postcode"
                                                                id="new_customer_postcode"
                                                                value="{{ Auth::user()->postcode }}">
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-sm-12">
                                                            <label for="new_customer_phone"
                                                                class="required">Телефон</label>
                                                            <input type="text" name="new_customer_phone"
                                                                id="new_customer_phone"
                                                                value="{{ Auth::user()->phone }}">
                                                        </div>
                                                    </li>
                                                </ul>
                                                <br>
                                                <div class="col-sm-12">
                                                    <input type="radio" id="normal_user" name="user_firm"
                                                        value="normal_user" checked
                                                        onclick="javascript:userFirmShow();">
                                                    <label for="normal_user">
                                                        <h5>Физическо лице</h5>
                                                    </label>
                                                    <input type="radio" id="firm_user" name="user_firm"
                                                        value="firm_user" onclick="javascript:userFirmShow();">
                                                    <label for="firm_user">
                                                        <h5>Юридическо лице</h5>
                                                    </label>
                                                </div>
                                                <br>
                                                <div id="firm_user_div" style="display: none;">
                                                    <ul>
                                                        <li>
                                                            <div class="col-sm-12">
                                                                <label for="new_customer_company_name"
                                                                    class="required">Име и фирма
                                                                    / компания</label>
                                                                <input type="text" name="new_customer_company_name"
                                                                    id="new_customer_company_name"
                                                                    value="{{ Auth::user()->firm }}">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-sm-12">
                                                                <label for="new_customer_mol"
                                                                    class="required">МОЛ</label>
                                                                <input type="text" name="new_customer_mol"
                                                                    id="new_customer_mol"
                                                                    value="{{ Auth::user()->mol }}">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-sm-12">
                                                                <label for="new_customer_eik" class="required">ЕИК / ДДС
                                                                    №</label>
                                                                <input type="text" name="new_customer_eik"
                                                                    id="new_customer_eik"
                                                                    value="{{ Auth::user()->eik }}">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>
                                        <!--/ .table_cell -->
                                    </div>
                                    <!--/ .table_row -->
                                </div>
                                <!--/ .table_layout -->
                            </div>
                            <!--/ .relative -->
                        </section>
                        @endguest
                        <section id="method_section">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h1>Метод за доставка на стоката</h1>
                                    <div class="theme_box">
                                        <p class="subcaption bold">Избор на метод за доставка</p>
                                        <ul class="shipping_method">
                                            @if($all_price > 48)
                                            <li>
                                                <p class="subcaption bold">Безплатна доставка</p>
                                                <input type="radio" value="shipping_free" checked name="type_shipping"
                                                    id="type_shipping_free">
                                                <label for="type_shipping_free">Безплатна доставка за стоки на обща
                                                    стойност
                                                    над 48.00 лв.</label>
                                            </li>
                                            @endif
                                            <li>
                                                <p class="subcaption bold">Доставка с Куриер</p>
                                                <input type="radio" @if($all_price <=48) checked @endif
                                                    value="shipping_spedy" name="type_shipping"
                                                    id="type_shipping_spedy">
                                                <label for="type_shipping_spedy">Доставка с куриерска компания
                                                    Спиди. Плаща
                                                    се с наложен платеж от купувача, като цената за доставката
                                                    варира според
                                                    адреса за доставка и теглото на поръчаната стока. <a
                                                        href="https://www.speedy.bg/calculate/" target="_blank">Таблица
                                                        с
                                                        цени за доставка на Спиди.</a></label>
                                            </li>
                                            <li>
                                                <p class="subcaption bold">Допълнителна информация за начин на
                                                    доставка</p>
                                                <p>В полето по-долу можете да въведете Ваши изисквания за доставка
                                                    на
                                                    стоката. Можете да изискате изпращането на стоката с друга
                                                    куриерска
                                                    компания и по избран от Вас метод за доставка.</p>
                                                <textarea id="shipping_text" name="shipping_text"></textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <h1>Метод за плащане на стоката</h1>
                                    <div class="theme_box">
                                        <p class="subcaption bold">Избор на методи за плащане</p>
                                        <ul class="simple_vertical_list">
                                            <li>
                                                <input type="radio" value="payment_nalozen" checked name="type_payment"
                                                    id="type_payment_nalozen">
                                                <label for="type_payment_nalozen">Плащане с наложен платеж на
                                                    Куриерската
                                                    компания. Услугата включва преглед преди заплащане.</label>
                                            </li>
                                            <li>
                                                <input type="radio" value="payment_bank" name="type_payment"
                                                    id="type_payment_bank">
                                                <label for="type_payment_bank">Плащане по банков път</label>
                                            </li>
                                            {{-- <li>
                                            <input type="radio" value="payment_paysera" name="type_payment"
                                                id="type_payment_paysera">
                                            <label for="type_payment_paysera">Плащане с кредитна карта (Paysera)</label>
                                        </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br>
                        <section id="checkout_section">
                            <h1>Преглед и потвърждение на поръчката</h1>
                            <div class="table_wrap">
                                <table class="table_type_1 order_review">
                                    <thead>
                                        <tr>
                                            <th class="product_title_col">Продукт</th>
                                            <th class="product_sku_col">КОД</th>
                                            <th class="product_price_col">Цена</th>
                                            <th class="product_qty_col">Колич.</th>
                                            <th class="product_total_col">Обща цена</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty((Session::get('cart_session'))['items']))
                                        @foreach ((Session::get('cart_session'))['items'] as $item)
                                        <tr>
                                            <td data-title="Product Name">
                                                <a href="{{ route('product', ['id' => $item['product_code']]) }}"
                                                    class="product_title">{{ $item['product_name'] }}</a>
                                            </td>
                                            <td data-title="SKU">{{ $item['product_code'] }}</td>
                                            <td data-title="Price" class="subtotal">
                                                {{ number_format(floatval($item['total_price']) / floatval($item['product_quantity']), 2, ".", "") }}
                                            </td>
                                            <td data-title="Quantity">{{ $item['product_quantity'] }}</td>
                                            <td data-title="Total" class="total">
                                                {{ number_format(floatval($item['total_price']), 2, ".", "") }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="grandtotal">Общо за плащане&nbsp;(лв.)</td>
                                            <td class="grandtotal">{{ number_format($all_price, 2, ".", "") }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <footer class="bottom_box on_the_sides">
                                <div class="right_side">
                                    <button type="button" class="button_blue big_btn" id="btn_buy"
                                        style="font-size:20px;"><strong>КУПИ</strong></button>
                                </div>
                            </footer>
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
    
    function typeRadio() {
        if (document.getElementById('new_customer').checked) {
            document.getElementById('new_customer_div').style.display = "block";
            document.getElementById('method_section').style.display = "block";
            document.getElementById('have_registration_div').style.display = "none";
            document.getElementById('checkout_section').style.display = "block";
            document.getElementById('fast_checkout_div').style.display = "none";
        } else if(document.getElementById('have_registration').checked) {
            document.getElementById('new_customer_div').style.display = "none";
            document.getElementById('have_registration_div').style.display = "block";
            document.getElementById('method_section').style.display = "none";
            document.getElementById('fast_checkout_div').style.display = "none";
            document.getElementById('checkout_section').style.display = "none";
        }else if(document.getElementById('fast_checkout').checked){
            document.getElementById('new_customer_div').style.display = "none";
            document.getElementById('have_registration_div').style.display = "none";
            document.getElementById('method_section').style.display = "none";
            document.getElementById('fast_checkout_div').style.display = "block";
            document.getElementById('checkout_section').style.display = "block";
        }else{
            document.getElementById('new_customer_div').style.display = "block";
            document.getElementById('method_section').style.display = "block";
            document.getElementById('have_registration_div').style.display = "none";
            document.getElementById('fast_checkout_div').style.display = "none";
            document.getElementById('checkout_section').style.display = "block";
        }
    }

    function userFirmShow() {
        if (document.getElementById('normal_user').checked) {
            document.getElementById('firm_user_div').style.display = "none";
        } else if(document.getElementById('firm_user').checked) {
            document.getElementById('firm_user_div').style.display = "block";
        }else{
            document.getElementById('firm_user_div').style.display = "none";
        }
    }

    $("#btn_login_user").click(function(e){
		$email = $("#have_registration_email").val();
        $password = $("#have_registration_password").val();
		$.ajax({
			type: "POST",
			data: {
                email: $email,
                password: $password
            },
			url: "/user-checkout-new-login.html",
            dataType: 'json',
            success: function(msg){
				if( parseInt( msg.status )==1 )
				{
					window.location.reload();
                }
                else
                {
                    alert("Грешен email адрес или парола!");
                }
			}
		});   
    });
    
    $("#btn_buy").click(function(){
        if (document.getElementById('new_customer').checked) {
            alert("New");
        }else if(document.getElementById('have_registration').checked) {
            alert("Registered");
        }else {
            $.ajax({
                type:'POST',
                url:'/one-click.html',
                data:{
                    phone: $("#fast_checkout_phone").val(),
                    from: 'cart'
                },
                success: function (data) {
                    if (data.result == 'success'){
                        alert("Успешно изпратихте Вашата поръчка. Очаквайте обаждане от нас.");
                        window.location = "/";
                    }
                    if (data.result == 'nophone'){
                        alert("Моля попълнете полето 'Телефон'!");
                        $("#fast_checkout_phone").focus();
                    }
                }
            });
        }        
    });
</script>
@endsection