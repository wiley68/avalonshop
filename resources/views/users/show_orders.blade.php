<?php use App\Suborder; ?>
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
                            <li>Моите поръчки</li>
                        </ul>
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
                                        <li class="current"><a href="{{ route('show-orders') }}">Моите поръчки</a></li>
                                        <li><a href="{{ route('show-reviews') }}">Моите отзиви</a></li>
                                        <li><a href="{{ route('show-favorites') }}">Любими продукти</a></li>
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
                                <h1>Моите поръчки</h1>
                                    <div class="table_wrap">
                                        <table class="table_type_1 orders_table">
                                            <thead>
                                                <tr>
                                                    <th class="order_number_col">Поръчка №</th>
                                                    <th>Дата</th>
                                                    <th class="ship_col">Доставка на</th>
                                                    <th>Състояние</th>
                                                    <th class="order_total_col">Обща цена</th>
                                                    <th class="product_action_col">Управление</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td data-title="Order Number"><a href="#">{{ $order->id }}</a></td>
                                                    @php
                                                        $newDate = date("d.m.Y H:s:i", strtotime($order->created_at));
                                                    @endphp
                                                    <td data-title="Order Date">{{ $newDate }}</td>
                                                    <td data-title="Ship To">{{ $order->user_name }}</td>
                                                    <td data-title="Order Status">Pending</td>
                                                    <td data-title="Total" class="total">{{ number_format(Suborder::where(['order_id' => $order->id])->sum('total_price'), 2, ".", "") }}</td>
                                                    <td data-title="Action">
                                                        <ul class="buttons_col">
                                                            <li>
                                                                <a href="{{ route('show-order', ['id' => $order->id]) }}" class="button_blue">Преглед</a>
                                                            </li>
                                                            <li>
                                                                <button onclick="clickBtnDelOrder(event, {{ $order->id }})" class="button_dark_grey">Изтрий</button>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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

    function clickBtnDelOrder(e, id){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'/del-order.html',
            data:{id:id},
            success:function(data){
                console.log(data);
                if (data.result == "del"){
                    alert("Успешно изтрихте тази поръчка.");
                    window.location.reload();
                }else{
                    alert("Опитвате се да изтриете поръчка, който липсва.");
                }
            }
        });
    };
</script>
@endsection
