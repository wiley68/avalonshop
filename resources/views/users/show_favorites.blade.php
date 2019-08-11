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
                        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">Начало</a></li>
                            <li>Моите любими продукти</li>
                        </ul>
                        <div id="message_div" style="display:none;" class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert_box success">
                                        <span id="message"></span>
                                        <button class="close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Профил</h3>
                                    <ul class="theme_menu">
                                        <li><a href="{{ route('home') }}">Потребителски профил</a></li>
                                        <li><a href="{{ route('change-password') }}">Промяна на
                                                парола</a></li>
                                        <li><a href="{{ route('change-data') }}">Промяна данни</a></li>
                                        <li><a href="{{ route('show-orders') }}">Моите поръчки</a></li>
                                        <li><a href="{{ route('show-reviews') }}">Моите отзиви</a></li>
                                        <li class="current"><a href="{{ route('show-favorites') }}">Любими продукти</a></li>
                                        <li><a href="{{ route('edit-news') }}">Записване за новини</a></li>
                                        <li><a href="{{ route('person-settings') }}">Лични настройки</a></li>
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <h1>Моите любими продукти</h1>
                                <section class="theme_box">
                                    <h4>Налични любими продукти: {{ $favorites->count() }}</h4>
                                    <p>Можете да купувате директно от таблицата с Вашите любими продукти, или да триете продукт от нея.</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <table class="table_type_1 wishlist_table">
                                        <thead>
                                            <tr>
                                                <th class="product_image_col">Снимка</th>
                                                <th class="product_title_col">Име на продукт и код</th>
                                                <th class="product_price_col">Цена</th>
                                                <th>Управление</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($favorites as $favorite)
                                            @php
                                                $product = Product::where(['id' => $favorite->product_id])->first();
                                            @endphp
                                            <tr>
                                                <!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
                                                <td data-title="Product Image">
                                                    <a href="{{ route('product', ['id' => $product->id]) }}"><img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" alt="{{ $product->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'"></a>
                                                </td>
                                                <!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->
                                                <td data-title="Product Name and Category">
                                                    <a href="{{ route('product', ['id' => $product->id]) }}" class="product_title">{{ $product->name }}</a><br />
                                                    <span>{{ $product->code }}</span>
                                                </td>
                                                <!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->
                                                <td data-title="Price" class="total">{{ number_format($product->price, 2, ".", "") }}&nbsp;лв.</td>
                                                <!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                <td data-title="Action">
                                                    <ul class="buttons_col">
                                                        <li>
                                                            <button onclick="buyProduct('{{ $product->id }}');" class="button_blue">Купи</button>
                                                        </li>
                                                        <li>
                                                            <button onclick="clickBtnDelFavorite(event, {{ $product->id }})" class="button_dark_grey">Премахни</button>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </section>
                                <!--/ .theme_box -->
                            </main>
                            <!--/ [col]-->
                        </div>
                        <!--/ .row-->
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function clickBtnDelFavorite(e, id){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'/del-favorite.html',
            data:{id:id},
            success:function(data){
                console.log(data);
                if (data.result == "del"){
                    alert("Успешно изтрихте този продукт от Любите си продукти.");
                    window.location.reload();
                }else{
                    alert("Опитвате се да изтриете продукт, който липсва в листата от Любими продукти.");
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
                window.scrollTo(0, 0);
                $("#message_div").show("slow", function () {
                    $("#message").html("Успешно добавихте продукта. Можете да продължите с разглеждането на магазина ни, или да закупите продуктите във вашата <a href='/cart.html' title='Вижте съдържанието на Вашата Количка.'>Количка</a>.");
                });
            }
        });
    };
</script>
@endsection
