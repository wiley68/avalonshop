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
                            <li>Продуктова кошница</li>
                        </ul>
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
                                        <tr>
                                            <td class="product_image_col" data-title="Product Image">
                                                <a href="{{ route('product', ['id' => $item['product_id']]) }}"><img style="max-width:80px;" src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $item['product_id'] }}_1.png" style="max-width:200px;" alt="{{ $item['product_name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'"></a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->
                                            <td data-title="Product Name">
                                                <a href="{{ route('product', ['id' => $item['product_id']]) }}" class="product_title">{{ $item['product_name'] }}</a>
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
                                    <a href="{{ route('cart-clear') }}" class="button_grey middle_btn">Изчисти продуктовата кошница</a>
                                </div>
                            </footer>
                            <!--/ .bottom_box -->
                            <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->
                        </section>
                        <!--/ .section_offset -->
                        <div class="section_offset">
                            <div class="row">
                                <section class="col-sm-4">
                                    <h3>Купон за отстъпка</h3>
                                    <div class="theme_box">
                                        <p class="form_caption">Въведете Вашия купон за отстъпка, ако иматетакъв.</p>
                                        <form id="discount_code">
                                            <ul>
                                                <li class="row">
                                                    <div class="col-xs-12">
                                                        <input type="text" name="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <!--/ .theme_box -->
                                    <footer class="bottom_box">
                                        <button type="submit" form="discount_code" class="button_grey middle_btn">Приложи отстъпката</button>
                                    </footer>
                                </section>
                                <!--/ [col] -->
                                <section class="col-sm-4">
                                </section>
                                <!--/ [col] -->
                                <section class="col-sm-4">
                                    <h3>Общо</h3>
                                    <div class="table_wrap">
                                        <table class="zebra">
                                            <tfoot>
                                                <tr>
                                                    <td>Общо за плащане</td>
                                                    <td>{{ number_format($all_price, 2, ".", "") }}&nbsp;лв.</td>
                                                </tr>
                                                <tr class="total">
                                                    <td>Крайна сума</td>
                                                    <td>{{ number_format($all_price, 2, ".", "") }}&nbsp;лв.</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <footer class="bottom_box">
                                        <a class="button_blue middle_btn" href="#">Премини към плащане</a>
                                    </footer>
                                </section><!-- / [col] -->
                            </div>
                            <!--/ .row -->
                        </div>
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
