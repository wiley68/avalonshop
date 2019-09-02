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
                                    <p>Общ размер на кредита: {{ number_format($product->price, 2, ".", "") }} лв.</p>
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        <p title="Месечна вноска"><b>3 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>6 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>9 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>12 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>15 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>18 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>24 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    <li>
                                        <p title="Месечна вноска"><b>30 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
                                    <li>
                                        <p title="Месечна вноска"><b>36 вноски x</b></p>
                                        <p>Обща дължима сума:</p>
                                        <p>ГПР:</p>
                                        <p>&nbsp;</p>
                                    </li>
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
                                        @if ($tbipayment_mesecna_3 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_3 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_3 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_3 }} %</p>
                                        <input checked type="radio" name="credit_variant" id="tbi_3">
                                        <label for="tbi_3">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_6 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_6 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_6 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_6 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_6">
                                        <label for="tbi_6">Избери варианта</label>                                            
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_9 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_9 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_9 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_9 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_9">
                                        <label for="tbi_9">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_12 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_12 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_12 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_12 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_12">
                                        <label for="tbi_12">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_15 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_15 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_15 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_15 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_15">
                                        <label for="tbi_15">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_18 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_18 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_18 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_18 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_18">
                                        <label for="tbi_18">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_24 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_24 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_24 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_24 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_24">
                                        <label for="tbi_24">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_30 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_30 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_30 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_30 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_30">
                                        <label for="tbi_30">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($tbipayment_mesecna_36 >= 30)
                                        <p title="Месечна вноска"><b>{{ $tbipayment_mesecna_36 }} лв.</b></p>
                                        <p>{{ $tbipayment_obshtozaplashtane_input_36 }} лв.</p>
                                        <p style="padding-bottom:10px;">{{ $tbipayment_gpr_36 }} %</p>
                                        <input type="radio" name="credit_variant" id="tbi_36">
                                        <label for="tbi_36">Избери варианта</label>
                                        @endif
                                    </li>
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
                                    <li>
                                        <p title="Месечна вноска"><b>0</b></p>
                                        <p>0</p>
                                        <p style="padding-bottom:10px;">0</p>
                                        <input type="radio" name="credit_variant" id="uni_3">
                                        <label for="uni_3">Избери варианта</label>
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
                                <header>Париба</header>
                                <div class="pt_price">
                                    <img src="/images/credit/pariba_logo.png">
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        <p title="Месечна вноска"><b>0</b></p>
                                        <p>0</p>
                                        <p style="padding-bottom:10px;">0</p>
                                        <input type="radio" name="credit_variant" id="uni_3">
                                        <label for="uni_3">Избери варианта</label>
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
                        </div>
                    </main><!--/ [col]-->
                </div><!--/ .row-->
                @endif
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
    </div>
</div>

@endsection
