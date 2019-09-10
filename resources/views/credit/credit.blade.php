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
                        <p>От тук можете да закупите посочения по-горе продукт на изплащане. Използвайте информацията по-долу за да си изберете схема на изплащане.</p>
                    </div>
                </section>
                <div class="row">
                    <aside class="col-md-3 col-sm-4">
                    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <h3>Покупка на кредит</h3>
                            <ul class="list_of_infoblocks">
                                <li>
                                    <i class="icon-ok-circle success"></i>
                                    <h6 class="success">Избор на подходяща вноска</h6>
                                    <p class="success">От таблицата показано в десния край на тази страница можете да видите предложенията
                                        на трите кредитни институции с които работим. Използвайте някой от чекбоксовете "Избери варианта"
                                        за да изберете най-подходящата за Вас месечна вноска от която компания желаете. Имате възможност
                                        да избирате между следните брой вноски <span class="error">(3, 6, 9, 12, 15, 18, 24, 30, 36 месеца)</span> за всяка една от
                                        Компаниите. Някой от комбинациите Месеца/Компания може да не се предлагат. След като направите своя избор
                                        можете да натиснете бутона <span class="error">"Продължи към лични данни"</span>. Ще бъдете пренасочени към втора страница в която
                                        ще можете да въведете личните си данни, необходими за завършване на процедурата по заявка за лизинг.
                                    </p>
                                </li>
                                <li>
                                    <i class="icon-ok-3" style="color:#B2B2B2;"></i>
                                    <h6 style="color:#B2B2B2;">Попълване на лични данни</h6>
                                    <p style="color:#B2B2B2;">
                                        В тази страница е необходимо да попълните Вашите лични данни.
                                        Ако вече сте се логнали в нашия магазин тези данни ще бъдат предварително попълнени. Ако не са
                                        или ако желаете да ги промените, можете да го направите в тази страница. След коректното попълване
                                        на необходимите данни ще имате възможност да приключите процедурата по закупуване на стоката на
                                        изплащане. В случай , че сте избрали ТБИ Банка или УНИ Кредит и натиснете бутона <span class="error">"Приключване на покупката"</span>,
                                        ще бъдете прехвърлени към съответната страница на избраната от Вас кредитна институция за да завършите
                                        своята покупка. В случай, че сте избрали Париба Лични Финанси и натиснете бутона <span class="error">"Приключване на покупката"</span>
                                        ще получите e-mail съобщение с вашата заявка и можете да очаквате обаждане от Банката за потвърждение
                                        на извършената заявка.
                                    </p>
                                </li>
                                <li>
                                    <i class="icon-ok-3" style="color:#B2B2B2;"></i>
                                    <h6 style="color:#B2B2B2;">Приключване на покупката</h6>
                                    <p style="color:#B2B2B2;">
                                        В тази страница ще бъдете известени за приключване на покупката. От нея ще бъдете автоматично
                                        прехвърлени към страницата на съответната избрана от Вас кредитна институция за приключване на покупката.
                                        След одобрение от съответната Банка ще се свържем с Вас за уточнение на начина за изпращане
                                        на стоката и съответните документи за покупката.
                                    </p>
                                </li>
                                <li>
                                    <i class="icon-star"></i>
                                    <h6>Допълнителна информация</h6>
                                    <p>Ако желаете да закупите няколко продукта едновременно на изплащане, тогава можете
                                        да ги поръчате по стандартния начин за всеки онлайн магазин през потребителската
                                        кошница. След като добавите необходимите продукти във Вашата кошница можете да
                                        преминете към самата покупка. Във Вашата потребителска кошница ще има бутон "Купи | сравни вноските"
                                        подобен на този в продуктовата страница. С избирането му ще можете да започнете същата
                                        процедура за покупка на изплащане която ползвате в момента. Разликата ще бъде в това,
                                        че сумата на лизинга ще представлява общата сума на всички Ваши продукти в кошницата.
                                    </p>
                                </li>
                            </ul>
                        </section><!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                    </aside><!--/ [col]-->
                    <main class="col-md-9 col-sm-8">
                        <div class="pricing_tables_container">
                            <div class="pricing_table">
                                <header style="color:darkgrey;">Кредитна компания</header>
                                <div class="pt_price">
                                    <p>Общ размер на кредита: {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }} лв.</p>
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
                            </div>
                            @if ($first_visible)
                            <div class="pricing_table free">
                                <header>{{ $first_name }}</header>
                                <div class="pt_price">
                                    <img src="/images/credit/{{ $first_logo }}">
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        @if (${$first.'_mesecna_3'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_3">{{ ${$first.'_mesecna_3'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_3">{{ ${$first.'_obshtozaplashtane_input_3'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_3">{{ ${$first.'_gpr_3'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_3" value="{{ ${$first.'_glp_3'} }}">
                                        <input checked type="radio" name="credit_variant" id="{{ $first }}_3">
                                        <label for="{{ $first }}_3">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_6'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_6">{{ ${$first.'_mesecna_6'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_6">{{ ${$first.'_obshtozaplashtane_input_6'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_6">{{ ${$first.'_gpr_6'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_6" value="{{ ${$first.'_glp_6'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_6">
                                        <label for="{{ $first }}_6">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_9'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_9">{{ ${$first.'_mesecna_9'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_9">{{ ${$first.'_obshtozaplashtane_input_9'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_9">{{ ${$first.'_gpr_9'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_9" value="{{ ${$first.'_glp_9'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_9">
                                        <label for="{{ $first }}_9">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_12'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_12">{{ ${$first.'_mesecna_12'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_12">{{ ${$first.'_obshtozaplashtane_input_12'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_12">{{ ${$first.'_gpr_12'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_12" value="{{ ${$first.'_glp_12'} }}">
                                        <input checked type="radio" name="credit_variant" id="{{ $first }}_12">
                                        <label for="{{ $first }}_12">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_15'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_15">{{ ${$first.'_mesecna_15'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_15">{{ ${$first.'_obshtozaplashtane_input_15'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_15">{{ ${$first.'_gpr_15'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_15" value="{{ ${$first.'_glp_15'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_15">
                                        <label for="{{ $first }}_15">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_18'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_18">{{ ${$first.'_mesecna_18'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_18">{{ ${$first.'_obshtozaplashtane_input_18'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_18">{{ ${$first.'_gpr_18'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_18" value="{{ ${$first.'_glp_18'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_18">
                                        <label for="{{ $first }}_18">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_24'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_24">{{ ${$first.'_mesecna_24'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_24">{{ ${$first.'_obshtozaplashtane_input_24'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_24">{{ ${$first.'_gpr_24'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_24" value="{{ ${$first.'_glp_24'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_24">
                                        <label for="{{ $first }}_24">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_30'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_30">{{ ${$first.'_mesecna_30'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_30">{{ ${$first.'_obshtozaplashtane_input_30'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_30">{{ ${$first.'_gpr_30'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_30" value="{{ ${$first.'_glp_30'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_30">
                                        <label for="{{ $first }}_30">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$first.'_mesecna_36'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $first }}_mesecna_36">{{ ${$first.'_mesecna_36'} }}</span> лв.</b></p>
                                        <p><span id="{{ $first }}_obshtozaplashtane_36">{{ ${$first.'_obshtozaplashtane_input_36'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $first }}_gpr_36">{{ ${$first.'_gpr_36'} }}</span> %</p>
                                        <input type="hidden" id="{{ $first }}_glp_36" value="{{ ${$first.'_glp_36'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $first }}_36">
                                        <label for="{{ $first }}_36">Избери варианта</label>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @if ($second_visible)
                            <div class="pricing_table @if (!$first_visible) free @endif">
                                <header>{{ $second_name }}</header>
                                <div class="pt_price">
                                    <img src="/images/credit/{{ $second_logo }}">
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        @if (${$second.'_mesecna_3'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_3">{{ ${$second.'_mesecna_3'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_3">{{ ${$second.'_obshtozaplashtane_input_3'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_3">{{ ${$second.'_gpr_3'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_3" value="{{ ${$second.'_glp_3'} }}">
                                        <input @if (!$first_visible) checked @endif type="radio" name="credit_variant" id="{{ $second }}_3">
                                        <label for="{{ $second }}_3">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_6'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_6">{{ ${$second.'_mesecna_6'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_6">{{ ${$second.'_obshtozaplashtane_input_6'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_6">{{ ${$second.'_gpr_6'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_6" value="{{ ${$second.'_glp_6'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_6">
                                        <label for="{{ $second }}_6">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_9'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_9">{{ ${$second.'_mesecna_9'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_9">{{ ${$second.'_obshtozaplashtane_input_9'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_9">{{ ${$second.'_gpr_9'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_9" value="{{ ${$second.'_glp_9'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_9">
                                        <label for="{{ $second }}_9">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_12'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_12">{{ ${$second.'_mesecna_12'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_12">{{ ${$second.'_obshtozaplashtane_input_12'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_12">{{ ${$second.'_gpr_12'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_12" value="{{ ${$second.'_glp_12'} }}">
                                        <input @if (!$first_visible) checked @endif type="radio" name="credit_variant" id="{{ $second }}_12">
                                        <label for="{{ $second }}_12">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_15'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_15">{{ ${$second.'_mesecna_15'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_15">{{ ${$second.'_obshtozaplashtane_input_15'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_15">{{ ${$second.'_gpr_15'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_15" value="{{ ${$second.'_glp_15'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_15">
                                        <label for="{{ $second }}_15">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_18'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_18">{{ ${$second.'_mesecna_18'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_18">{{ ${$second.'_obshtozaplashtane_input_18'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_18">{{ ${$second.'_gpr_18'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_18" value="{{ ${$second.'_glp_18'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_18">
                                        <label for="{{ $second }}_18">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_24'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_24">{{ ${$second.'_mesecna_24'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_24">{{ ${$second.'_obshtozaplashtane_input_24'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_24">{{ ${$second.'_gpr_24'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_24" value="{{ ${$second.'_glp_24'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_24">
                                        <label for="{{ $second }}_24">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_30'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_30">{{ ${$second.'_mesecna_30'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_30">{{ ${$second.'_obshtozaplashtane_input_30'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_30">{{ ${$second.'_gpr_30'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_30" value="{{ ${$second.'_glp_30'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_30">
                                        <label for="{{ $second }}_30">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$second.'_mesecna_36'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $second }}_mesecna_36">{{ ${$second.'_mesecna_36'} }}</span> лв.</b></p>
                                        <p><span id="{{ $second }}_obshtozaplashtane_36">{{ ${$second.'_obshtozaplashtane_input_36'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $second }}_gpr_36">{{ ${$second.'_gpr_36'} }}</span> %</p>
                                        <input type="hidden" id="{{ $second }}_glp_36" value="{{ ${$second.'_glp_36'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $second }}_36">
                                        <label for="{{ $second }}_36">Избери варианта</label>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @if ($third_visible)
                            <div class="pricing_table @if ((!$first_visible) && (!$second_visible)) free @endif">
                                <header>{{ $third_name }}</header>
                                <div class="pt_price">
                                    <img src="/images/credit/{{ $third_logo }}">
                                </div>
                                <ul class="pt_list">
                                    <li>
                                        @if (${$third.'_mesecna_3'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_3">{{ ${$third.'_mesecna_3'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_3">{{ ${$third.'_obshtozaplashtane_input_3'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_3">{{ ${$third.'_gpr_3'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_3" value="{{ ${$third.'_glp_3'} }}">
                                        <input @if ((!$first_visible) && (!$second_visible)) checked @endif type="radio" name="credit_variant" id="{{ $third }}_3">
                                        <label for="{{ $third }}_3">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_6'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_6">{{ ${$third.'_mesecna_6'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_6">{{ ${$third.'_obshtozaplashtane_input_6'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_6">{{ ${$third.'_gpr_6'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_6" value="{{ ${$third.'_glp_6'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_6">
                                        <label for="{{ $third }}_6">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_9'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_9">{{ ${$third.'_mesecna_9'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_9">{{ ${$third.'_obshtozaplashtane_input_9'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_9">{{ ${$third.'_gpr_9'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_9" value="{{ ${$third.'_glp_9'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_9">
                                        <label for="{{ $third }}_9">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_12'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_12">{{ ${$third.'_mesecna_12'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_12">{{ ${$third.'_obshtozaplashtane_input_12'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_12">{{ ${$third.'_gpr_12'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_12" value="{{ ${$third.'_glp_12'} }}">
                                        <input @if ((!$first_visible) && (!$second_visible)) checked @endif type="radio" name="credit_variant" id="{{ $third }}_12">
                                        <label for="{{ $third }}_12">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_15'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_15">{{ ${$third.'_mesecna_15'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_15">{{ ${$third.'_obshtozaplashtane_input_15'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_15">{{ ${$third.'_gpr_15'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_15" value="{{ ${$third.'_glp_15'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_15">
                                        <label for="{{ $third }}_15">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_18'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_18">{{ ${$third.'_mesecna_18'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_18">{{ ${$third.'_obshtozaplashtane_input_18'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_18">{{ ${$third.'_gpr_18'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_18" value="{{ ${$third.'_glp_18'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_18">
                                        <label for="{{ $third }}_18">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_24'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_24">{{ ${$third.'_mesecna_24'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_24">{{ ${$third.'_obshtozaplashtane_input_24'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_24">{{ ${$third.'_gpr_24'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_24" value="{{ ${$third.'_glp_24'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_24">
                                        <label for="{{ $third }}_24">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_30'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_30">{{ ${$third.'_mesecna_30'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_30">{{ ${$third.'_obshtozaplashtane_input_30'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_30">{{ ${$third.'_gpr_30'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_30" value="{{ ${$third.'_glp_30'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_30">
                                        <label for="{{ $third }}_30">Избери варианта</label>
                                        @endif
                                    </li>
                                    <li>
                                        @if (${$third.'_mesecna_36'} >= 30)
                                        <p title="Месечна вноска"><b><span id="{{ $third }}_mesecna_36">{{ ${$third.'_mesecna_36'} }}</span> лв.</b></p>
                                        <p><span id="{{ $third }}_obshtozaplashtane_36">{{ ${$third.'_obshtozaplashtane_input_36'} }}</span> лв.</p>
                                        <p style="padding-bottom:10px;"><span id="{{ $third }}_gpr_36">{{ ${$third.'_gpr_36'} }}</span> %</p>
                                        <input type="hidden" id="{{ $third }}_glp_36" value="{{ ${$third.'_glp_36'} }}">
                                        <input type="radio" name="credit_variant" id="{{ $third }}_36">
                                        <label for="{{ $third }}_36">Избери варианта</label>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div style="padding-bottom:10px;"></div>
                        <hr />
                        <div style="padding-bottom:10px;"></div>
                        <div class="section_offset">
                            <div class="row">
                                <div class="col-sm-8"></div><!--/ [col]-->
                                <div class="col-sm-4">
                                    <form action="{{ route('credit-danni') }}" form method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="product_qt" id="product_qt" value="{{ $product_qt }}">
                                        <input type="hidden" name="current_sheme" id="current_sheme" value="">
                                        <input type="hidden" name="current_meseci" id="current_meseci" value="">
                                        <input type="hidden" name="mesecna" id="mesecna" value="">
                                        <input type="hidden" name="gpr" id="gpr" value="">
                                        <input type="hidden" name="glp" id="glp" value="">
                                        <input type="hidden" name="obshtozaplashtane" id="obshtozaplashtane" value="">
                                        <button type="submit" class="button_blue middle_btn">Продължи към лични данни</button>
                                    </form>
                                </div>
                            </div><!--/ .row-->
                        </div><!--/ .section_offset -->
                    </main><!--/ [col]-->
                </div><!--/ .row-->
                @endif
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function changeCurrent(){
    var current = $("input:radio[name='credit_variant']:checked").attr('id');
    var sheme = (current.split('_'))[0];
    $("#current_sheme").val(sheme);
    var meseci = (current.split('_'))[1];
    $("#current_meseci").val(meseci);
    var mesecna = $("#"+sheme+"_mesecna_"+meseci).html();
    $("#mesecna").val(mesecna);
    var obshtozaplashtane = $("#"+sheme+"_obshtozaplashtane_"+meseci).html();
    $("#obshtozaplashtane").val(obshtozaplashtane);
    var gpr = $("#"+sheme+"_gpr_"+meseci).html();
    $("#gpr").val(gpr);
    var glp = $("#"+sheme+"_glp_"+meseci).val();
    $("#glp").val(glp);
}

$(function() {

    changeCurrent();

    $('input[type=radio]').change(function(e) {
        changeCurrent()    
    });

});

</script>
@endsection
