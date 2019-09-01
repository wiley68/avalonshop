@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
            <div class="row">
                @if ($product != null)
                <section class="section_offset">
                    <div class="call_to_action">
                        <div class="title"><a href="{{ route('product', ['id' => $product->id]) }}" target="_blank" title="Можете да прегледате продукта в нова страница.">{{ $product->name }}</a></div>
                        <h3>Единична цена: {{ number_format($product->price, 2, ".", "") }}&nbsp;лв.&nbsp;|&nbsp;Количество: {{ $product_qt }}&nbsp;|&nbsp;Обща цена: {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }}&nbsp;лв.</h3>
                        <p>От тук можете да закупите посочения по-горе продукт на изплащане. Използвайте информацията по-долу за да го купите.</p>
                    </div>
                </section>
                <div class="row">
                    <aside class="col-md-3 col-sm-4">
                    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <h3>Информация</h3>
                            <ul class="list_of_infoblocks">
                                <li>
                                    <i class="icon-thumbs-up-1"></i>
                                    <h6>The Highest Product Quality</h6>
                                    <p>Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci.</p>
                                </li>
                                <li>
                                    <i class="icon-paper-plane"></i>
                                    <h6>Fast &amp; Free Delivery</h6>
                                    <p>Luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit.</p>
                                </li>
                                <li>
                                    <i class="icon-lock"></i>
                                    <h6>Safe &amp; Secure Payment</h6>
                                    <p>Ut phareta augue nec augue. Nam elit agna, endrerit sot amet.</p>
                                </li>
                                <li>
                                    <i class="icon-money"></i>
                                    <h6>100% Money back Guaranted</h6>
                                    <p>Donec porta diam eu massa. Quisque diam lorem, interdum vitae.</p>
                                </li>
                            </ul>
                        </section><!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                    </aside><!--/ [col]-->
                    <main class="col-md-9 col-sm-8">
                        <div class="pricing_tables_container">
                            <div class="pricing_table">
                                <header style="color:darkgrey;">Банка</header>
                                <div class="pt_price">
                                    <div class="price"></div>
                                </div>
                                <ul class="pt_list">
                                    <li>3 вноски</li>
                                    <li>6 вноски</li>
                                    <li>9 вноски</li>
                                    <li>12 вноски</li>
                                    <li>15 вноски</li>
                                    <li>18 вноски</li>
                                    <li>24 вноски</li>
                                    <li>30 вноски</li>
                                    <li>36 вноски</li>
                                </ul>
                                <footer>
                                    <a href="#" class="button_blue middle_btn">Sign Up</a>
                                </footer>
                            </div>
                            <div class="pricing_table free">
                                <header>ТБИ Банка</header>
                                <div class="pt_price">
                                    <img src="/images/credit/tbi_bank_logo.png">
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        <p>Общ размер на кредита: 209.00 лв.</p>
                                    </li>
                                    <li>6 вноски</li>
                                    <li>9 вноски</li>
                                    <li>12 вноски</li>
                                    <li>15 вноски</li>
                                    <li>18 вноски</li>
                                    <li>24 вноски</li>
                                    <li>30 вноски</li>
                                    <li>36 вноски</li>
                                </ul>
                                <footer>
                                    <a href="#" class="button_blue middle_btn">Sign Up</a>
                                </footer>
                            </div>
                            <div class="pricing_table">
                                <header>УНИ Кредит</header>
                                <div class="pt_price">
                                    <img src="/images/credit/unicredit_logo.png">
                                </div>
                                <ul class="pt_list">
                                    <li>3 вноски</li>
                                    <li>6 вноски</li>
                                    <li>9 вноски</li>
                                    <li>12 вноски</li>
                                    <li>15 вноски</li>
                                    <li>18 вноски</li>
                                    <li>24 вноски</li>
                                    <li>30 вноски</li>
                                    <li>36 вноски</li>
                                </ul>
                                <footer>
                                    <a href="#" class="button_blue middle_btn">Sign Up</a>
                                </footer>
                            </div>
                            <div class="pricing_table">
                                <header>Париба</header>
                                <div class="pt_price">
                                    <img src="/images/credit/pariba_logo.png">
                                </div>
                                <ul class="pt_list">
                                    <li>3 вноски</li>
                                    <li>6 вноски</li>
                                    <li>9 вноски</li>
                                    <li>12 вноски</li>
                                    <li>15 вноски</li>
                                    <li>18 вноски</li>
                                    <li>24 вноски</li>
                                    <li>30 вноски</li>
                                    <li>36 вноски</li>
                                </ul>
                                <footer>
                                    <a href="#" class="button_blue middle_btn">Sign Up</a>
                                </footer>
                            </div>
                        </div>
                    </main><!--/ [col]-->
                </div><!--/ .row-->
                @endif
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
    </div>
</div>

@endsection
