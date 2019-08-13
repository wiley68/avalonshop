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
                                <h1>Поръчка № {{ $order->id }}</h1>
							<!-- - - - - - - - - - - - - - Order table - - - - - - - - - - - - - - - - -->
							<div class="section_offset">
								<header class="top_box">
									<div class="buttons_row">
										<a href="#" class="button_grey middle_btn">Печат на поръчката</a>
									</div>
                                </header>
                                @php
                                    $suborders = Suborder::where(['order_id' => $order->id])->get();
                                    $all_price = 0;
                                    foreach ($suborders as $suborder) {
                                        $all_price += floatval($suborder->total_price);
                                    }
                                @endphp
								<div class="table_wrap">
									<table class="table_type_1 order_table">
										<tbody>
											<tr>
												<th>Поръчка №</th>
												<td><a href="{{ route('show-order', ['id' => $order->id]) }}">{{ $order->id }}</a></td>
											</tr>
											<tr>
                                                <th>От дата</th>
                                                @php
                                                    $newDate = date("d.m.Y H:s:i", strtotime($order->created_at));
                                                @endphp
												<td>{{ $newDate }}</td>
											</tr>
											<tr>
												<th>Състояние</th>
												<td>{{ $order->status }}</td>
											</tr>
											<tr>
                                                <th>Последна промяна</th>
                                                @php
                                                    $newDateLast = date("d.m.Y H:s:i", strtotime($order->updated_at));
                                                @endphp
												<td>{{ $newDateLast }}</td>
											</tr>
											<tr>
                                                <th>Доставка</th>
                                                @php
                                                switch ($order->shipping) {
                                                    case 'free':
                                                        $shipping = 'Безплатна доставка над 400 лв.';
                                                        break;
                                                    case 'spedy':
                                                        $shipping = 'Куриерска компания Спиди.';
                                                        break;
                                                    default:
                                                        $shipping = 'Безплатна доставка над 400 лв.';
                                                        break;
                                                }
                                                @endphp
												<td>{{ $shipping }}</td>
											</tr>
											<tr>
												<th>Плащане</th>
                                                @php
                                                switch ($order->payment) {
                                                    case 'platez':
                                                        $payment = 'Наложен платеж.';
                                                        break;
                                                    case 'bank':
                                                        $payment = 'По банков път.';
                                                        break;
                                                    default:
                                                        $payment = 'Наложен платеж.';
                                                        break;
                                                }
                                                @endphp
												<td>{{ $payment }}</td>
											</tr>
											<tr>
												<th>Общо за плащане</th>
												<td class="total">{{ number_format($all_price, 2, ".", "") }}&nbsp;лв.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div><!--/ .section_offset -->
							<!-- - - - - - - - - - - - - - End of order table - - - - - - - - - - - - - - - - -->
							<div class="section_offset">
								<div class="row">
									<div class="col-md-6">
										<!-- - - - - - - - - - - - - - Bill to - - - - - - - - - - - - - - - - -->
										<section>
											<h3>Адрес за документи</h3>
											<div class="table_wrap">
												<table class="table_type_1 order_table">
													<tbody>
														<tr>
															<th>Email</th>
															<td><a href="mailto:{{ $order->email }}">{{ $order->email }}</a></td>
														</tr>
														<tr>
															<th>Фирма</th>
															<td>{{ $order->firm }}</td>
														</tr>
														<tr>
															<th>Име</th>
															<td>{{ $order->user_name }}</td>
														</tr>
														<tr>
															<th>Адрес</th>
															<td>{{ $order->address }}</td>
														</tr>
														<tr>
															<th>Пощенски код</th>
															<td>{{ $order->postcode }}</td>
														</tr>
														<tr>
															<th>Населено място</th>
															<td>{{ $order->city }}</td>
														</tr>
														<tr>
															<th>Телефон</th>
															<td>{{ $order->phone }}</td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>
										<!-- - - - - - - - - - - - - - End of bill to - - - - - - - - - - - - - - - - -->
									</div><!--/ [col] -->
									<div class="col-md-6">
										<!-- - - - - - - - - - - - - - Ship to - - - - - - - - - - - - - - - - -->
										<section>
											<h3>Адрес за доставка</h3>
											<div class="table_wrap">
												<table class="table_type_1 order_table">
													<tbody>
														<tr>
															<th>Фирма</th>
															<td>{{ $order->firm }}</td>
														</tr>
														<tr>
															<th>Име</th>
															<td>{{ $order->user_name2 }}</td>
														</tr>
														<tr>
															<th>Адрес</th>
															<td>{{ $order->address }}</td>
														</tr>
														<tr>
																
															<th>Zip/Postal Code</th>
															<td>2000</td>
														</tr>
														<tr>
																
															<th>City</th>
															<td>New York</td>
														</tr>
														<tr>
																
															<th>Country</th>
															<td>USA</td>
														</tr>
														<tr>
																
															<th>State</th>
															<td>NY</td>
														</tr>
														<tr>
																
															<th>Phone</th>
															<td>876-54-32</td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>
										<!-- - - - - - - - - - - - - - End of ship to - - - - - - - - - - - - - - - - -->
									</div><!--/ [col] -->
								</div><!--/ .row -->
							</div><!--/ .section_offset -->
							<!-- - - - - - - - - - - - - - Items ordered - - - - - - - - - - - - - - - - -->
							<section class="section_offset">
								<h3>Items Ordered</h3>
								<div class="table_wrap">
									<table class="table_type_1 order_review">
										<thead>
											
											<tr>
												
												<th class="product_title_col">Product Name</th>
												<th class="product_sku_col">SKU</th>
												<th class="product_price_col">Price</th>
												<th class="product_qty_col">Quantity</th>
												<th class="product_total_col">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td data-title="Product Name">
													
													<a href="#" class="product_title">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
													<ul class="sc_product_info">
														<li>Size: Big</li>
														<li>Color: Red</li>
													</ul>
												</td>
												<td data-title="SKU">PS01</td>
												<td data-title="Price" class="subtotal">$5.99</td>
												<td data-title="Quantity">1</td>
												<td data-title="Total" class="total">$5.99</td>
											</tr>
											<tr>
												
												<td data-title="Product Name">
													
													<a href="#" class="product_title">Sed in lacus ut enim adipiscing dictum elementum velit<br>Relief 4.25 fl oz (126ml)</a>
													<ul class="sc_product_info">
														<li>Size: Big</li>
														<li>Color: Red</li>
													</ul>
												</td>
												<td data-title="SKU">PS02</td>
												<td data-title="Price" class="subtotal">$8.99</td>
												<td data-title="Quantity">1</td>
												<td data-title="Total" class="total">$8.99</td>
											</tr>
											<tr>
												<td data-title="Product Name">
													
													<a href="#" class="product_title">Donec porta diam eu massa quisque Mint 160 ea</a>
													<ul class="sc_product_info">
														<li>Size: Big</li>
														<li>Color: Red</li>
													</ul>
												</td>
												<td data-title="SKU">PS03</td>
												<td data-title="Price" class="subtotal">$76.99</td>
												<td data-title="Quantity">1</td>
												<td data-title="Total" class="total">$76.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												
												<td colspan="4" class="bold">Subtotal</td>
												<td class="total">$146.87</td>
											</tr>
											<tr>
												
												<td colspan="4" class="bold">Shipping &amp; Heading (Flat Rate - Fixed)</td>
												<td class="total">$5.00</td>
											</tr>
											<tr>
												
												<td colspan="4" class="grandtotal">Grand Total</td>
												<td class="grandtotal">$151.87</td>
											</tr>
										</tfoot>
									</table>
								</div><!--/ .table_wrap -->
								<footer class="bottom_box">
									<a href="shop_orders_list.html" class="button_grey middle_btn">Back to My Orders</a>
								</footer>
							</section>
							<!-- - - - - - - - - - - - - - End of items ordered - - - - - - - - - - - - - - - - -->
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
