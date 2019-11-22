@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <h1>Информация за начина на закупуване на стока на изплащане</h1>
                <p>Можете да закупите всяка една от предлаганите в магазина ни стоки на изплащане.</p>
                <p>За целта можете да използвате една от трите Кредитни Компании с които работим:</p>
                <br />
                <section>
                    <h2>Кредитни Компании</h2>
                    <ul class="lightbox_list">
                        <li>
                            <a class="fancybox_item" data-rel="group_1" href="/images/credit/tbi_bank_logo.png" title="ТБИ Банка">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/credit/tbi_bank_logo.png" style="max-width:240px;" alt="ТБИ Банка">
                                <span class="helper_icon">
                                    <span class="helper_left"></span>
                                    <span class="helper_right"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="fancybox_item" data-rel="group_1" href="/images/credit/unicredit_logo.png" title="УНИ Кредит">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/credit/unicredit_logo.png" style="max-width:240px;" alt="УНИ Кредит">
                                <span class="helper_icon">
                                    <span class="helper_left"></span>
                                    <span class="helper_right"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="fancybox_item" data-rel="group_1" href="/images/credit/pariba_logo.png" title="Париба Лични Финанси">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/credit/pariba_logo.png" style="max-width:240px;" alt="Париба Лични Финанси">
                                <span class="helper_icon">
                                    <span class="helper_left"></span>
                                    <span class="helper_right"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="section_offset">
                    <h3>Начин на покупка на кредит</h3>
                    <div class="theme_box">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>1. Избиране на продукт</h4>
                                <p>Намирате продукта, който желаете да закупите на кредит. 
                                    Продукта трябва да има цена над 150 лв. за да можете да го закупите на кредит.
                                    Под бутона <b>"Купи"</b> ще намерите поле в което се вижда примерната месечна вноска при 
                                    избрани 12 месечни вноски. За да видите всички възможни схеми на изплащане за всички 
                                    Кредитни Компании моля натиснете бутона <b>"КУПИ | сравни вноските"</b>.
                                </p>
                                <h4>2. Избиране на схема на покупка</h4>
                                <p>
                                    Ще бъдете прехвърлени в страница с рзалични схеми на плащане. Три колони от схеми по 
                                    една за всяка Компания. Избирате , чрез натискане на радио бутона <b>"Избери варианта"</b> 
                                    тази схема, която най-добре отговаря на вашите възможности за плащане на месечни вноски. 
                                    Натискате бутона <b>"Продължи към лични данни"</b>.
                                </p>
                                <h4>3. Попълване на лични данни</h4>
                                <p>
                                    Ще бъдете прехвърлени в страница с възможност да попълните Вашите лични данни. Те са необходими 
                                    за да Ви бъдат издадени в последствие необходимите документи за лизинга от Кредитната Компания. 
                                    Ако сте се вписали в нашия Магазин, тези данни ще бъдат попълнени автоматично. Натиската бутона 
                                    <b>"Приключване на покупката"</b>.
                                </p>
                                <h4>4. Приключване на покупката</h4>
                                <p>
                                    При избиране на бутона <b>"Приключване на покупката"</b> следват две възможности. 
                                </p>
                                <p>
                                    Ако сте избрали схема на компаниите "УНИ Кредит" или "ТБИ Банк", ще бъдете прехвърлени 
                                    към техните системи за довършване на поръчката. Стъпките които следват са елементарни и 
                                    повечето необходими данни ще бъдат автоматично въведени на съответните за това места. Очаквайте обаждане 
                                    от съответната компания за потвърждение.
                                </p>
                                <p>
                                    Ако сте исбрали схема на компанията "Париба Лични Финанси", ще получите e-mail съобщение с данните 
                                    от направената поръчка. Очаквайте обаждане от съответната компания за потвърждение.
                                </p>
                                <h4>5. Изпращане на стоката</h4>
                                <p>
                                    Ако бъдете одобрени от съответната Кредитна Компания очаквайте свързване от страна на нашия магазин 
                                    за уточняване на детайлите по доставката на стоката и съответната фактура и други придружителни 
                                    документи. 
                                </p>
                            </div><!--/ [col]-->
                        </div><!--/ .row -->
                    </div><!--/ .theme_box -->
                </section><!--/ .section_offset -->
            </div>
        </div>
    </div>
</div>

@endsection