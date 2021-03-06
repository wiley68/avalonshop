@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="row">
            @if ($product != null)
            <section class="section_offset">
                <div class="call_to_action">
                    <div class="title"><a href="{{ route('product', ['id' => $product->code]) }}" target="_blank"
                            title="Можете да прегледате продукта в нова страница.">{{ $product->name }}</a></div>
                    <h3>Единична цена: {{ number_format($product->price, 2, ".", "") }}&nbsp;лв.&nbsp;|&nbsp;Количество:
                        {{ $product_qt }}&nbsp;|&nbsp;Обща цена:
                        {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }}&nbsp;лв.</h3>
                    <p>Тук можете да видите резултата от Вашата заявка за покупка на кредит.</p>
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
                    <p>Кредитна компания: <b>{{ $company }}</b>&nbsp;|&nbsp;Брой вноски: <b>{{ $current_meseci }}</b>
                        м.&nbsp;|&nbsp;Месечна вноска: <b>{{ $mesecna }}</b> лв.&nbsp;|&nbsp;ГПР: <b>{{ $gpr }}</b>
                        %&nbsp;|&nbsp;Общо за плащане: <b>{{ $obshtozaplashtane }}</b> лв.</p>
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
                                <p style="color:#B2B2B2;">От таблицата показано в десния край на тази страница можете да
                                    видите предложенията
                                    на трите кредитни институции с които работим. Използвайте някой от чекбоксовете
                                    "Избери варианта"
                                    за да изберете най-подходящата за Вас месечна вноска от която компания желаете.
                                    Имате възможност
                                    да избирате между следните брой вноски <span class="error">(3, 6, 9, 12, 15, 18, 24,
                                        30, 36 месеца)</span> за всяка една от
                                    Компаниите. Някой от комбинациите Месеца/Компания може да не се предлагат. След като
                                    направите своя избор
                                    можете да натиснете бутона <span class="error">"Продължи към лични данни"</span>. Ще
                                    бъдете пренасочени към втора страница в която
                                    ще можете да въведете личните си данни, необходими за завършване на процедурата по
                                    заявка за лизинг.
                                </p>
                            </li>
                            <li>
                                <i class="icon-ok-3" style="color:#B2B2B2;"></i>
                                <h6 style="color:#B2B2B2;">Попълване на лични данни</h6>
                                <p style="color:#B2B2B2;">
                                    В тази страница е необходимо да попълните Вашите лични данни.
                                    Ако вече сте се логнали в нашия магазин тези данни ще бъдат предварително попълнени.
                                    Ако не са
                                    или ако желаете да ги промените, можете да го направите в тази страница. След
                                    коректното попълване
                                    на необходимите данни ще имате възможност да приключите процедурата по закупуване на
                                    стоката на
                                    изплащане. В случай , че сте избрали ТБИ Банка или УНИ Кредит и натиснете бутона
                                    <span class="error">"Приключване на покупката"</span>,
                                    ще бъдете прехвърлени към съответната страница на избраната от Вас кредитна
                                    институция за да завършите
                                    своята покупка. В случай, че сте избрали Париба Лични Финанси и натиснете бутона
                                    <span class="error">"Приключване на покупката"</span>
                                    ще получите e-mail съобщение с вашата заявка и можете да очаквате обаждане от
                                    Банката за потвърждение
                                    на извършената заявка.
                                </p>
                            </li>
                            <li>
                                <i class="icon-ok-circle"></i>
                                <h6 class="success">Приключване на покупката</h6>
                                <p class="success">
                                    В тази страница ще бъдете известени за приключване на покупката. От нея ще бъдете
                                    автоматично
                                    прехвърлени към страницата на съответната избрана от Вас кредитна институция за
                                    приключване на покупката.
                                    След одобрение от съответната Банка ще се свържем с Вас за уточнение на начина за
                                    изпращане
                                    на стоката и съответните документи за покупката.
                                </p>
                            </li>
                            <li>
                                <i class="icon-star"></i>
                                <h6><a href="{{ route('credit-info') }}">Допълнителна информация</a></h6>
                                <p>Ако желаете да закупите няколко продукта едновременно на изплащане, тогава можете
                                    да ги поръчате по стандартния начин за всеки онлайн магазин през потребителската
                                    кошница. След като добавите необходимите продукти във Вашата кошница можете да
                                    преминете към самата покупка. Във Вашата потребителска кошница ще има бутон "Купи |
                                    сравни вноските"
                                    подобен на този в продуктовата страница. С избирането му ще можете да започнете
                                    същата
                                    процедура за покупка на изплащане която ползвате в момента. Разликата ще бъде в
                                    това,
                                    че сумата на лизинга ще представлява общата сума на всички Ваши продукти в
                                    кошницата.
                                </p>
                            </li>
                        </ul>
                    </section>
                    <!--/ .section_offset -->
                    <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                </aside>
                <!--/ [col]-->
                <main class="col-md-9 col-sm-8">
                    <div class="section_offset">
                        @if ($current_sheme == 'jet')
                        <div class="theme_box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1>Резултат от заявка с номер: {{ $order_id }}</h1>
                                    <h4 class="success">Заявката е изпратена успешно.</h4>
                                    <h4>Заявка за кредит с БНП Париба лични финанси.</h4>
                                    <p>
                                        Данни за потребителя:<br />
                                        Собствено име: {{ $credit_fname }};<br />
                                        Фамилия: {{ $credit_lname }};<br />
                                        ЕГН: {{ $credit_egn }};<br />
                                        Телефон за връзка: {{ $credit_phone }};<br />
                                        Имейл адрес: {{ $credit_email }};<br />
                                    </p>
                                    <p>
                                        Данни за стоката:<br />
                                        Тип стока: Компютърна техника;<br />
                                        Марка: {{ $product->name }};<br />
                                        Единична цена в лева с ДДС: {{ number_format(floatval($product->price), 2, ".", "") }};<br />
                                        Брой стоки: {{ number_format(floatval($product_qt), 2, ".", "") }};<br />
                                        Обща сума в лева с ДДС: {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }};<br />
                                    <p>
                                    <p>
                                        Данни за кредита:<br />
                                        Размер на кредита в лева: {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }};<br />
                                        Срок на изплащане в месеца: {{ $current_meseci }};<br />
                                        Месечна вноска в лева: {{ $mesecna }};<br />
                                        Първоначална вноска в лева: 0.00;
                                    </p>
                                    <div style="padding-bottom:10px;"></div>
                                    <hr />
                                    <div style="padding-bottom:10px;"></div>
                                    <p>Вие се съгласихте с: <a target="_blank"
                                            href="http://dw-file.eu/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B7%D0%B0%20%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B4%D0%B0%D1%82%D1%81%D1%82%D0%B2%D0%B0%D0%BD%D0%B5%20%D0%BD%D0%B0%20%D0%91%D0%9D%D0%9F%20%D0%9F%D0%B0%D1%80%D0%B8%D0%B1%D0%B0%20%D0%9B%D0%B8%D1%87%D0%BD%D0%B8%20%D0%A4%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%B8.pdf">Условияta
                                            за кандидатстване на БНП Париба Лични Финанси</a></p>
                                    <p>Вие се съгласихте с <a target="_blank"
                                            href="http://dw-file.eu/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B7%D0%B0%20%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%B0%20%D0%BD%D0%B0%20%D0%BB%D0%B8%D1%87%D0%BD%D0%B8%D1%82%D0%B5%20%D0%B4%D0%B0%D0%BD%D0%BD%D0%B8.pdf">"GDPR"
                                            Регламент (ЕС) 2016/679 от 27 април 2016 г. за защита на физическите лица по
                                            отношение на обработката на лични данни и за свободното движение на такива
                                            данни и за отмяна на Директива 95/46 / ЕО</a></p>
                                    <div style="padding-bottom:10px;"></div>
                                    <h4>Очаквайте контакт за потвърждаване на направената от Вас заявка.</h4>
                                    <h4>Можете да продължите с разглеждането на нашия магазин.</h4>
                                    <a href="{{ route('index') }}" type="button" class="button_blue middle_btn">Продължи
                                        с разглеждането на магазина</a>
                                </div>
                            </div>
                        </div>
                        @else
                        @if ($current_sheme == 'uni')
                        <div id="uniloaderpanel">
                            <div id="uniloader"></div>
                            <div id="uniloadertext">Ще бъдете прехвърлени към UNI Credit</div>
                            <div id="uniloaderimg"><img src="/images/credit/unicredit_logo.png" alt="UNI Credit" />
                            </div>
                        </div>
                        @else
                        @if ($current_sheme == 'tbipayment')
                        <div class="theme_box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1>Резултат от заявка с номер: {{ $order_id }}</h1>
                                    <h4 class="success">Заявката е изпратена успешно.</h4>
                                    <h4>Заявка за лизинг с TBI Bank.</h4>
                                    <p>Име: {{ $credit_fname }}</p>
                                    <p>Фамилия: {{ $credit_lname }}</p>
                                    <p>ЕГН: {{ $credit_egn }}</p>
                                    <p>Телефон: {{ $credit_phone }}</p>
                                    <p>E-Mail: {{ $credit_email }}</p>
                                    <p>Продукт ИД:
                                        {{ $product->code }}&nbsp;|&nbsp;{{ $product->name }}&nbsp;|&nbsp;{{ $product_qt }}&nbsp;бр.
                                    </p>
                                    <p>Обща цена на стоките:
                                        {{ number_format(floatval($product->price) * floatval($product_qt), 2, ".", "") }}&nbsp;лв.
                                    </p>
                                    <p>Схема на изплащане: </p>
                                    <p>Брой погасителни вноски: {{ $current_meseci }}&nbsp;м.</p>
                                    <p>Месечна вноска: {{ $mesecna }}&nbsp;лв.</p>
                                    <p>ГПР: {{ $gpr }}&nbsp;%</p>
                                    <p>Обща дължима сума от потребителя: {{ $obshtozaplashtane }}&nbsp;лв.</p>
                                    <div style="padding-bottom:10px;"></div>
                                    <hr />
                                    <div style="padding-bottom:10px;"></div>
                                    <p>Вие се съгласихте с: <a target="_blank"
                                            href="https://tbibank.support/calculators/assets/img/iskane_tbi.pdf">Банката
                                            да предоставя личните ми данни нa
                                            4финанс или друг кредитор и обратно</a></p>
                                    <p>Вие се съгласихте с <a target="_blank"
                                            href="https://tbibank.support/calculators/assets/img/iskane_tbi.pdf">Банката,
                                            съответно
                                            4финанс или друг кредитор, да изисква, получава, обработва и
                                            съхранява мои лични данни</a></p>
                                    <div style="padding-bottom:10px;"></div>
                                    <h4>Очаквайте контакт за потвърждаване на направената от Вас заявка.</h4>
                                    <h4>Можете да продължите с разглеждането на нашия магазин.</h4>
                                    <a href="{{ route('index') }}" type="button" class="button_blue middle_btn">Продължи
                                        с разглеждането на магазина</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endif
                    </div>
                    <!--/ .section_offset -->
                </main>
                <!--/ [col]-->
            </div>
            <!--/ .row-->
            @endif
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
        </div>
    </div>
</div>

@endsection
@section('scripts')
@if ($current_sheme == 'uni')
<script type="text/javascript">
    <!--
    $(document).ready(function(e) {
        var uniloaderpanel = document.getElementById("uniloaderpanel");
        uniloaderpanel.style.display = "block";
        if ('0' != '{{$uni_api}}') {
            window.location.href = '{{$uni_application}}/{{$uni_api}}';            
        }
    });
//-->
</script>
@endif
@endsection