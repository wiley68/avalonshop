@extends('layouts.design')
@section('content')

@php
$all_price = 0.00;
if (!empty((Session::get('cart_session'))['items'])){
foreach ((Session::get('cart_session'))['items'] as $item){
$all_price += floatval($item['total_price']);
}
}
@endphp

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
                            <li>Поръчка</li>
                        </ul>
                        <h1 class="page_title">Поръчка</h1>
                        <!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->
                        @guest
                        <section class="section_offset">
                            <h3 class="offset_title">1. Метод за поръчка</h3>
                            <div class="relative">
                                <div class="table_layout">
                                    <div class="table_row">
                                        <div class="table_cell">
                                            <section>
                                                <h4>Поръчка като Гост или Регистриран потребител</h4>
                                                <p class="subcaption">Можете да се Регистрирате за да ползвате
                                                    възможностите на магазина ни:</p>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" checked name="type_order"
                                                                id="type_order_guest" value="type_order_guest">
                                                            <label for="type_order_guest">Поръчка като Гост (Следвайте стъпките по-долу от 2 до 6 за да завършите поръчката си като Гост.)</label>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('login-register') }}" class="button_grey middle_btn">Регистрирай се</a>
                                                        </li>
                                                    </ul>
                                                </form>
                                                <h5 class="sub bold">Регистрирай се и спести време!</h5>
                                                <p class="subcaption">Можете да се Регистрирате за да ползвате
                                                    възможностите на магазина ни:</p>
                                                <ul class="list_type_7">
                                                    <li>Бързи и лесни поръчки</li>
                                                    <li>Бърз достъп до Вашите стари поръчки</li>
                                                </ul>
                                            </section>
                                        </div>
                                        <!--/ .table_cell -->
                                        <div class="table_cell">
                                            <section>
                                                <h4>Вход</h4>
                                                <p class="subcaption">Ако вече имате регистрация? Моля влезте в профила
                                                    си:</p>
                                                <form id="login_form" name="login_form"
                                                    action="{{ route('user-checkout-login') }}" method="post"
                                                    class="type_2">
                                                    @csrf
                                                    <ul>
                                                        <li class="row">
                                                            <div class="col-xs-12">
                                                                <label for="login_email" class="required">Email
                                                                    адрес</label>
                                                                <input type="email" name="login_email" id="login_email">
                                                            </div>
                                                        </li>
                                                        <li class="row">
                                                            <div class="col-xs-12">
                                                                <label for="login_password"
                                                                    class="required">Парола</label>
                                                                <input type="password" name="login_password"
                                                                    id="login_password">
                                                            </div>
                                                        </li>
                                                        <li class="row">
                                                            <div class="col-xs-12">
                                                                <div class="on_the_sides">
                                                                    <div class="left_side">
                                                                        <a href="#" class="small_link">Забравили сте си
                                                                            паролата?</a>
                                                                    </div>
                                                                    <div class="right_side">
                                                                        <span class="prompt">Задължителни полета</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </section>
                                        </div>
                                        <!--/ .table_cell -->
                                    </div>
                                    <!--/ .table_row -->
                                    <div class="table_row">
                                        <div class="table_cell">
                                                <div class="row" style="display:flex;justify-content: space-between;padding:0px 5px;">
                                                    <input type="text" style="flex: 1;" id="one_phone" placeholder="Въведете Вашия телефонен номер за връзка ...">
                                                    <div style="width:10px;"></div>
                                                    <button id="btn_one_click" class="button_dark_grey">Купи с един клик ...</button>
                                                </div>
                                                <div class="row" style="display:flex;justify-content:center;align-items:center;padding:0px 5px;">
                                                    <p>Въведете вашия телефонен номер. Натиснете бутона "Купи с един клик ...". Ние ще се свържем с вас за продажбата!</p>
                                                </div>
                                        </div>
                                        <!--/ .table_cell -->
                                        <div class="table_cell">
                                            <div class="on_the_sides login_with">
                                                <div class="left_side">
                                                    <button type="submit" form="login_form"
                                                        class="button_blue middle_btn">Вход</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ .table_cell -->
                                    </div>
                                    <!--/ .table_row -->
                                </div>
                                <!--/ .table_layout -->
                            </div>
                            <!--/ .relative -->
                        </section>
                        <!--/ .section_offset -->
                        @else
                        <section class="section_offset">
                            <h3 class="offset_title">1. Метод за поръчка</h3>
                            <div class="relative">
                                <div class="table_layout">
                                    <div class="table_row">
                                        <div class="table_cell">
                                            <section>
                                                <h4>Здравейте {{ Auth::user()->name }}, моля попълнете необходимите
                                                    данни по-долу за да завършите Вашата поръчка.</h4>
                                                <p>Полетата отбелязани със знака * са задължителни за попълване!</p>
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
                        <!--/ .section_offset -->
                        @endguest
                        <!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - form - - - - - - - - - - - - - - - - -->
                        <form id="order_form" name="order_form" action="{{ route('checkout') }}" method="post"
                            class="type_2">
                            @csrf
                            <input type="hidden" id="user_type" value="{{ Auth::guest() }}">
                            <section class="section_offset">
                                <h3>2. Необходима информация за издаване на документи</h3>
                                <div class="theme_box">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="user_name" class="required">Имена</label>
                                                <input type="text" name="user_name" id="user_name"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->name }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6">
                                                <label for="user_firm">Фирма</label>
                                                <input type="text" name="user_firm" id="user_firm"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->firm }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                            <div class="col-sm-6">
                                                <label for="user_email" class="required">Email адрес</label>
                                                <input type="text" name="user_email" id="user_email"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->email }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6">
                                                <label for="user_eik">ЕИК / ДДС №</label>
                                                <input type="text" name="user_eik" id="user_eik"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->eik }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                            <div class="col-sm-6">
                                                <label for="user_mol">МОЛ</label>
                                                <input type="text" name="user_mol" id="user_mol"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->mol }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="user_address" class="required">Адрес</label>
                                                <input type="text" name="user_address" id="user_address"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->address }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li><!-- / .row -->
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="user_city" class="required">Населено място</label>
                                                <input type="text" name="user_city" id="user_city"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->city }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6">
                                                <label for="user_postcode" class="required">Пощенски код</label>
                                                <input type="text" name="user_postcode" id="user_postcode"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->postcode }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                            <div class="col-sm-6">
                                                <label for="user_phone" class="required">Телефон</label>
                                                <input type="text" name="user_phone" id="user_phone"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->phone }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6" id="order_password1_div">
                                                <label for="password" class="required">Парола</label>
                                                <input type="password" name="register_password" id="register_password">
                                            </div>
                                            <!--/ [col] -->
                                            <div class="col-sm-6" id="order_password2_div">
                                                <label for="confirm" class="required">Повтори паролата</label>
                                                <input type="password" name="register_password_again" id="register_password_again">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                    </ul>
                                </div>
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side">
                                    </div>
                                    <div class="right_side">
                                        <span class="prompt">Задължителни полета</span>
                                    </div>
                                </footer>
                            </section>
                            <!--/ .section_offset -->
                            <!-- - - - - - - - - - - - - - Shipping information - - - - - - - - - - - - - - - - -->
                            <section class="section_offset">
                                <h3>3. Необходима информация за доставка</h3>
                                <div class="theme_box">
                                    <ul>
                                        <li class="row">
                                            <div class="col-sm-12">
                                                <label for="user_name2" class="required">Имена</label>
                                                <input type="text" name="user_name2" id="user_name2"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->name }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="user_address2" class="required">Адрес</label>
                                                <input type="text" name="user_address2" id="user_address2"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->address2 }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6">
                                                <label for="user_city2" class="required">Населено място</label>
                                                <input type="text" name="user_city2" id="user_city2"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->city2 }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                            <div class="col-sm-6">
                                                <label for="user_postcode2" class="required">Пощенски код</label>
                                                <input type="text" name="user_postcode2" id="user_postcode2"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->postcode2 }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                        <li class="row">
                                            <div class="col-sm-6">
                                                <label for="user_phone2" class="required">Телефон</label>
                                                <input type="text" name="user_phone2" id="user_phone2"
                                                    value="@if(!Auth::guest()) {{ Auth::user()->phone2 }} @endif">
                                            </div>
                                            <!--/ [col] -->
                                        </li>
                                        <!--/ .row -->
                                    </ul>
                                    <br />
                                    <button id="btn_from_documents" class="button_grey middle_btn">Използвай адреса за
                                        документи</button>
                                </div>
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side buttons_row">
                                    </div>
                                    <div class="right_side">
                                        <span class="prompt">Задължителни полета</span>
                                    </div>
                                </footer>
                            </section>
                            <!--/ .section_offset -->
                            <!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Shipping method - - - - - - - - - - - - - - - - -->
                            <section class="section_offset">
                                <h3>4. Метод за доставка на стоката</h3>
                                <div class="theme_box">
                                    <p class="subcaption bold">Избор на метод за доставка</p>
                                    <ul class="shipping_method">
                                        @if($all_price > 48)
                                        <li>
                                            <p class="subcaption bold">Безплатна доставка</p>
                                            <input type="radio" value="shipping_free" checked name="type_shipping"
                                                id="type_shipping_free">
                                            <label for="type_shipping_free">Безплатна доставка за стоки на обща стойност
                                                над 48.00 лв.</label>
                                        </li>
                                        @endif
                                        <li>
                                            <p class="subcaption bold">Доставка с Куриер</p>
                                            <input type="radio" @if($all_price <= 48) checked @endif
                                                value="shipping_spedy" name="type_shipping" id="type_shipping_spedy">
                                            <label for="type_shipping_spedy">Доставка с куриерска компания Спиди. Плаща
                                                се с наложен платеж от купувача, като цената за доставката варира според
                                                адреса за доставка и теглото на поръчаната стока. <a
                                                    href="https://www.speedy.bg/calculate/" target="_blank">Таблица с
                                                    цени за доставка на Спиди.</a></label>
                                        </li>
                                        <li>
                                            <p class="subcaption bold">Допълнителна информация за начин на доставка</p>
                                            <p>В полето по-долу можете да въведете Ваши изисквания за доставка на
                                                стоката. Можете да изискате изпращането на стоката с друга куриерска
                                                компания и по избран от Вас метод за доставка.</p>
                                            <textarea id="shipping_text" name="shipping_text"></textarea>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!-- - - - - - - - - - - - - - End of shipping method - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Payment information - - - - - - - - - - - - - - - - -->
                            <section class="section_offset">
                                <h3>5. Метод за плащане на стоката</h3>
                                <div class="theme_box">
                                    <p class="subcaption bold">Избор на методи за плащане</p>
                                    <ul class="simple_vertical_list">
                                        <li>
                                            <input type="radio" value="payment_nalozen" checked name="type_payment"
                                                id="type_payment_nalozen">
                                            <label for="type_payment_nalozen">Плащане с наложен платеж на Куриерската
                                                компания. Услугата включва преглед преди заплащане.</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="payment_bank" name="type_payment"
                                                id="type_payment_bank">
                                            <label for="type_payment_bank">Плащане по банков път</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="payment_tbi" name="type_payment"
                                                id="type_payment_tbi">
                                            <label for="type_payment_tbi">На изплащане с кредит от TBI Bank. (При избор на този метод на плащане и завършване на поръчката, ще бъдете препратени към системата за ТБИ Банк за да потвърдите или промените параметрите на лизинга. Можете да си изберете брой месечни вноски според месечната сума за изплащане, да изберете при желание първоначална вноска, да прегледата финансовите данни на лизинга и др.)</label>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!-- - - - - - - - - - - - - - End of payment information - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Order review - - - - - - - - - - - - - - - - -->
                            <section class="section_offset">
                                <h3>6. Преглед на Вашата поръчка</h3>
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
                                <!--/ .table_wrap -->
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side v_centered">
                                        <span>Забравили сте някой продукт?</span>
                                        <a href="{{ route('cart') }}" class="button_grey middle_btn">Редакция на Вашата
                                            продуктова кошница</a>
                                    </div>
                                    <div class="right_side">
                                        <button type="submit" class="button_blue middle_btn">Завърши поръчката</button>
                                    </div>
                                </footer>
                            </section>
                        </form>
                        <!-- - - - - - - - - - - - - - End of form - - - - - - - - - - - - - - - - -->
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

@section('scripts')
<script>
    function checkGuest(){
        if ($('#type_order_guest').is(':checked')){
            return true;
        }else{
            return false;
        }
    }

    function changeTypeOrder(){
        if ($("#user_type").val()){
            if (checkGuest()){
                $("#order_password1_div").hide();
                $("#order_password2_div").hide();
            }else{
                $("#order_password1_div").show();
                $("#order_password2_div").show();
            }
        }else{
            $("#order_password1_div").hide();
            $("#order_password2_div").hide();
        }
    }

    // virst load
    changeTypeOrder();

    $("#type_order_guest").change(function(){
        changeTypeOrder();
    });

    $("#type_order_register").change(function(){
        changeTypeOrder();
    });

    $("#btn_from_documents").click(function(e){
        e.preventDefault();
        $("#user_name2").val($("#user_name").val());
        $("#user_address2").val($("#user_address").val());
        $("#user_city2").val($("#user_city").val());
        $("#user_postcode2").val($("#user_postcode").val());
        $("#user_phone2").val($("#user_phone").val());
    });

</script>
@endsection
