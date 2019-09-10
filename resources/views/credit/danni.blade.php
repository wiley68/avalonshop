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
                        <p>От тук можете да закупите посочения по-горе продукт на изплащане. Моля попънете исканата по-долу информация.</p>
                        @php
                            switch ($current_sheme) {
                                case 'tbipayment':
                                    $company = "ТБИ Банка";
                                    break;
                                case 'uni':
                                    $company = "УНИ Кредит";
                                    break;
                                case 'jet':
                                    $company = "Париба";
                                    break;
                                default:
                                    $company = "";
                                    break;
                            }
                        @endphp
                        <p>Кредитна компания: <b>{{ $company }}</b>&nbsp;|&nbsp;Брой вноски: <b>{{ $current_meseci }}</b> м.&nbsp;|&nbsp;Месечна вноска: <b>{{ $mesecna }}</b> лв.&nbsp;|&nbsp;ГПР: <b>{{ $gpr }}</b> %&nbsp;|&nbsp;ГЛП: <b>{{ $glp }}</b> %&nbsp;|&nbsp;Общо за плащане: <b>{{ $obshtozaplashtane }}</b> лв.</p>
                    </div>
                </section>
                <div class="row">
                    <aside class="col-md-3 col-sm-4">
                    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <h3>Покупка на кредит</h3>
                            <ul class="list_of_infoblocks">
                                <li>
                                    <i class="icon-ok-3" style="color:#B2B2B2;"></i>
                                    <h6 style="color:#B2B2B2;">Избор на подходяща вноска</h6>
                                    <p style="color:#B2B2B2;">От таблицата показано в десния край на тази страница можете да видите предложенията
                                        на трите кредитни институции с които работим. Използвайте някой от чекбоксовете "Избери варианта"
                                        за да изберете най-подходящата за Вас месечна вноска от която компания желаете. Имате възможност
                                        да избирате между следните брой вноски <span class="error">(3, 6, 9, 12, 15, 18, 24, 30, 36 месеца)</span> за всяка една от
                                        Компаниите. Някой от комбинациите Месеца/Компания може да не се предлагат. След като направите своя избор
                                        можете да натиснете бутона <span class="error">"Продължи към лични данни"</span>. Ще бъдете пренасочени към втора страница в която
                                        ще можете да въведете личните си данни, необходими за завършване на процедурата по заявка за лизинг.
                                    </p>
                                </li>
                                <li>
                                    <i class="icon-ok-circle"></i>
                                    <h6 class="success">Попълване на лични данни</h6>
                                    <p class="success">
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
                        <div class="section_offset">
                            <div class="theme_box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form enctype="multipart/form-data" action="{{ route('credit-ok') }}" method="post" name="credit_ok" id="credit_ok">
                                        @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="product_qt" value="{{ $product_qt }}">
                                            <input type="hidden" name="current_sheme" value="{{ $current_sheme }}">
                                            <input type="hidden" name="current_meseci" value="{{ $current_meseci }}">
                                            <input type="hidden" name="mesecna" value="{{ $mesecna }}">
                                            <input type="hidden" name="gpr" value="{{ $gpr }}">
                                            <input type="hidden" name="glp" value="{{ $glp }}">
                                            <input type="hidden" name="obshtozaplashtane" value="{{ $obshtozaplashtane }}">
                                            <h4 class="form_caption">Моля попълнете исканите данни. Те ще бъдат използване за попълване на необходимите документи за извършване на покупката на кредит.</h4>
                                            <ul>
                                                <li class="row">
                                                    <div class="col-sm-6">
                                                        <label for="credit_fname" class="required">Име</label>
                                                        <input type="text" required name="credit_fname" id="credit_fname" title="Име" value="{{ $credit_fname }}">
                                                    </div><!--/ [col]-->
                                                    <div class="col-sm-6">
                                                        <label for="credit_lname" class="required">Фамилия</label>
                                                        <input type="text" required name="credit_lname" id="credit_lname" title="Фамилия" value="{{ $credit_lname }}">
                                                    </div><!--/ [col]-->
                                                </li><!--/ .row -->
                                                <li class="row">
                                                    <div class="col-sm-6">
                                                        <label for="credit_email" class="required">E-Mail</label>
                                                        <input type="mail" required name="credit_email" id="credit_email" title="E-Mail" value="{{ $credit_email }}">
                                                    </div><!--/ [col]-->
                                                    <div class="col-sm-6">
                                                        <label for="credit_phone" class="required">Телефон</label>
                                                        <input type="text" required name="credit_phone" id="credit_phone" title="Телефон" value="{{ $credit_phone }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                @if ($current_sheme == 'jet')
                                                <li class="row">
                                                    <div class="col-sm-6">
                                                        <label for="credit_egn" class="required">ЕГН</label>
                                                        <input type="text" required name="credit_egn" id="credit_egn" title="ЕГН">
                                                    </div><!--/ [col]-->
                                                    <div class="col-sm-6">
                                                        <label for="credit_phone2" class="required">Допълн. телефон</label>
                                                        <input type="text" required name="credit_phone2" id="credit_phone2" title="Допълнителен телефон за връзка"">
                                                    </div><!--/ [col]-->
                                                </li>                                                    
                                                @endif
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <h5>Адресна информация за документи:</h5>
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="billingAddress" class="required">Адрес</label>
                                                        <input type="text" required name="billingAddress" id="billingAddress" title="Адрес" value="{{ $billingAddress }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="billingCity" class="required">Населено място</label>
                                                        <input type="text" required name="billingCity" id="billingCity" title="Населено място" value="{{ $billingCity }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="billingCounty" class="required">Област</label>
                                                        <input type="text" required name="billingCounty" id="billingCounty" title="Област" value="{{ $billingCounty }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <h5>Адресна информация за доставка:</h5>
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="deliveryAddress" class="required">Адрес</label>
                                                        <input type="text" required name="deliveryAddress" id="deliveryAddress" title="Адрес" value="{{ $deliveryAddress }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="deliveryCity" class="required">Населено място</label>
                                                        <input type="text" required name="deliveryCity" id="deliveryCity" title="Населено място" value="{{ $deliveryCity }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <label for="deliveryCounty" class="required">Област</label>
                                                        <input type="text" required name="deliveryCounty" id="deliveryCounty" title="Област" value="{{ $deliveryCounty }}">
                                                    </div><!--/ [col]-->
                                                </li>
                                                @if ($current_sheme == 'jet')
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                    </div><!--/ [col]-->
                                                </li> 
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form_el">
                                                            <input type="checkbox" name="credit_jet_uslovia" id="credit_jet_uslovia">
                                                            <label for="credit_jet_uslovia"><a target="_blank" href="http://dw-file.eu/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B7%D0%B0%20%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B4%D0%B0%D1%82%D1%81%D1%82%D0%B2%D0%B0%D0%BD%D0%B5%20%D0%BD%D0%B0%20%D0%91%D0%9D%D0%9F%20%D0%9F%D0%B0%D1%80%D0%B8%D0%B1%D0%B0%20%D0%9B%D0%B8%D1%87%D0%BD%D0%B8%20%D0%A4%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%B8.pdf">Прочетох и съм съгласен с Условия за кандидатстване на БНП Париба Лични Финанси.</a> <a target="_blank" href="http://dw-file.eu/%D0%91%D0%9D%D0%9F%20%D0%9F%D0%B0%D1%80%D0%B8%D0%B1%D0%B0%20%D0%9B%D0%A4-%D0%9F%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82%D0%BE%D0%B2%D0%B0%20%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F.pdf">Продуктова Информация на БНП Париба Лични Финанси</a></label>
                                                        </div>
                                                    </div><!--/ [col]-->
                                                </li>                                                    
                                                <li class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form_el">
                                                            <input type="checkbox" name="credit_jet_gdpr" id="credit_jet_gdpr">
                                                            <label for="credit_jet_gdpr"><a target="_blank" href="http://dw-file.eu/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B7%D0%B0%20%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%B0%20%D0%BD%D0%B0%20%D0%BB%D0%B8%D1%87%D0%BD%D0%B8%D1%82%D0%B5%20%D0%B4%D0%B0%D0%BD%D0%BD%D0%B8.pdf">"GDPR" Регламент (ЕС) 2016/679 от 27 април 2016 г. за защита на физическите лица по отношение на обработката на лични данни и за свободното движение на такива данни и за отмяна на Директива 95/46 / ЕО</a></label>
                                                        </div>
                                                    </div><!--/ [col]-->
                                                </li>                                                    
                                                @endif
                                            </ul>
                                            <div style="padding-bottom:10px;"></div>
                                            <hr />
                                            <div style="padding-bottom:10px;"></div>
                                            <div class="row">
                                                <div class="col-sm-8"></div><!--/ [col]-->
                                                <div class="col-sm-4">
                                                    <button id="btn_submit" type="button" onclick="submitCredit();" class="button_blue middle_btn">Приключване на покупката</button>
                                                </div>
                                            </div><!--/ .row-->                                            
                                        </form>
                                    </div>
                                    <div id="save_box" class="overlay" style="display:none;">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
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
    function submitCredit() {
        $('#save_box').show();
        if ("jet" == "{{ $current_sheme }}"){
            if(!$('#credit_jet_uslovia').prop('checked')) {
    		    alert("Необходимо е да се съгласите с Условия за кандидатстване на БНП Париба Лични Финанси!");
                $('#save_box').hide();
                return false;
	        }
            if(!$('#credit_jet_gdpr').prop('checked')) {
		        alert("Необходимо е да се съгласите с 'GDPR' Регламент!");
                $('#save_box').hide();
                return false;
	        }
        }
        $("#credit_ok").submit();
    };
</script>
@endsection