<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">

        <div class="section_offset clearfix">
            <h2>Maxtrade SLR Програма за управление на дейността на Ловно Рибарско Дружество</h2>
			<div class="tour_section type_2">
                <ul class="ts_nav clearfix">
                    <li><a href="#tab-10">Къде да използваме</a></li>
                    <li><a href="#tab-11">Описание</a></li>
                    <li><a href="#tab-12">Инсталиране</a></li>
                    <li><a href="#tab-13">Текуща версия</a></li>
                    <li><a href="#tab-14">Съвместимост</a></li>
                </ul>
                <div class="ts_containers_wrap">
                    <div id="tab-10" class="ts_container">
                        <h4>I. Къде можем да използваме програмата?</h4>
                        <p>Maxtrade SLR е програма работеща под операционната среда на Microsoft Windows XP/7/8/10 разработена за използване в ловно рибарско дружество. Програмата Ви дава възможност да извършвате регистриране на дейността си по контрола на ловно рибарските дейности в дружество за лов и риболов.</p>
                    </div>
                    <div id="tab-11" class="ts_container">
                        <h4>II. Описание на функционалните възможности на програмата.</h4>
                        <p>Програмата се състои от две части, сървърна част и клиентска част.<br />Сървърна част от програмата – MaxtradeSLR Server. Служи за управление, поддържане, архивиране и описване на базата с данни. Програмата е изградена и компилирана на основата на език за програмиране C#, в среда на Microsoft® .NET 3.5.</p>
                    <h5>За нормалната работа на сървъра е необходимо следното програмно осигуряване.</h5>
                    <ul>
                    <li>Семейството на Microsoft® Windows Операционни Системи, Microsoft® Windows XP , Microsoft® Windows Vista , Microsoft® Windows 7 , Microsoft® Windows 8, Microsoft® Windows 10, Microsoft® Windows 2003 , Microsoft® Windows 2008.</li>
                    <li>Microsoft® .NET 3.5. или по-висока версия на средата за разработка.</li>
                    <li>Освободен за достъп TCP/IP порт номер 3306, на който се свързва програмата за база данни.</li>
                    </ul>
                    <p>Клиентска част на програмата – MaxtradeSLR. Служи като итерфейс към базата данни. Чрез нея се въвеждат, коригират и изтриват данни от първични документи. Автоматично изгражда и визуализира справки и анализи.</p>
                    <h5>За нормалната работа на сървъра е необходимо следното програмно осигуряване.</h5>
                    <ul>
                    <li>Семейството на Microsoft® Windows Операционни Системи, Microsoft® Windows XP , Microsoft® Windows Vista , Microsoft® Windows 7 , Microsoft® Windows 8, Microsoft® Windows 10, Microsoft® Windows 2003 , Microsoft® Windows 2008.</li>
                    <li>Microsoft® .NET 3.5. или по-висока версия на средата за разработка.</li>
                    <li>Microsoft Chart Controls for Microsoft .NET Framework 3.5 Setup</li>
                    <li>Microsoft Report Viewer Redistributable 2008 Setup</li>
                    </ul>
                    <p>Програмата работи с потребителски акаунти и автентификация. Могат да се създават различен брой потребители, всеки от които има собствени права за работа с програмата.<br />С началното стартиране програмата притежава потребител <span style="color: #ff0000;">“admin”</span> с парола <span style="color: #ff0000;">“admin”</span>, който притежава всички необходими права за работа с нея.<br />Възможност за настройване на мрежовите връзки към сървърната част. Това означава, че базата данни може да се намира на друг компютър във Вашата локална мрежа, или на отдалечен компютър в интернет мрежата. Клиентската част на програмата може да ползва данните на сървъра независимо къде се намира той.<br />Настройка на самата програма. Всичко необходимо за нормалната и работа. Указват се потребителя на програмата ( собственика на продукта и данни за него, които в последствие ще се визуализират в различните видове справки ).</p>
                    <h5>Функционални възможности на програмата:</h5>
                    <p>- Настройки на визуалния вид на програмата.<br />- Информация за създателя на програмата.<br />- Възможност за активиране на продукта. Ако е била получена 30 – дневна версия на продукта с тази функционалност бихте могли да си регистрирате и закупите продукта.<br />- Управление на профили на членовете на ловните дружини, номенклатури в програмата.<br />- Въвеждане на данни за членовете на различните ловни дружини.<br />- Промяна на данните и въвеждане на персонал подлежащ на обслужване.<br />- Ловни дружини.<br />- Управление на членски внос.<br />- Населени места.<br />- Управление на държавни такси.<br />- Разрешителни за Индивидуален и Групов лов.<br />- Видове дивеч за групов лов.<br />- Видове дивеч за индивидуален лов.<br />- Институционални такси.<br />- Издаване на разрешително за групов лов.<br />- Издаване на разрешително за индивидуален лов</p>
                    <h5>Справки, Анализи:</h5>
                    <p>- Справка за “Събран членски внос за даден период”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- Справка за “Събран членски внос по години”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- “Ведомост по бройки”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- “Печат на членски състав”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- Справка за “Събран членски внос за Рибари”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- Справка за “Групов лов”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- Справка за “Индивидуален лов”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- “Обобщена справка”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.<br />- Справка за “Лов на дивеч”. Възможност за печат на принтер и експорт на документа във формат “XLS” или “PDF”.</p>
                    </div>
                    <div id="tab-12" class="ts_container">
                        <h4>III. Инсталиране</h4>
                        <p>Продукта се състои от две части.</p>
                    <p>1. Сървърна, на която се съхранява базата от данни за всички извършени сделки. Инсталира се от файла <span style="color: #ff0000;">"MaxtradeSLRServer_Install.exe"</span>.</p>
                    <p>2. Клиентска част, с която Вие действително работите. Инсталира се от файла <span style="color: #ff0000;">"MaxtradeSLR_Instalator.exe"</span>.</p>
                    <p>3. Допълнения. <span style="color: #ff0000;">Microsoft ReportViewer.exe</span>. Необходим за печата на справките.</p>
                    <p>След коректната инсталация на сървърната и клиентската част на програмата можете да започнете работа с нея.</p>
                    </div>
                    <div id="tab-13" class="ts_container">
                        <h4>IV. Текуща версия</h4>
                        <p>Текущата версия на MaxtradeSLR е: v.1.0.3.4 от 05.01.2016г.</p>
                    </div>
                    <div id="tab-14" class="ts_container">
                        <h4>V. Съвместимост</h4>
                        <p>Тествано за работоспособност на версии на<br />ОС Microsoft Windows: XP/7/8/8.1/10<br />ОС Microsoft Windows Server: 2003/2008/2012<br />Продукта е разработен и има необходимост от .NET 3.5</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
            <h3>Право на ползване, варианти, цени:</h3>
            <div class="theme_box clearfix">
                <p><a class="btn btn-primary" style="width: 100%;" href="{{ route('product', ['id' => 5]) }}" rel="noopener"> Maxtrade SLR<br />240.00 лв. с ДДС </a></p>
                    <p class="small">* Лицензия за ползване на продукта на неограничен брой работни места за една година.</p>
                    <p class="small" style="color: red;">Посочената цена е само за закупуване на самия модул. В цената не се включват инсталиране, настройване и промени в модула. тези допълнителни функции са въпрос на допълнителни разговори за определяне на цената спрямо конкретните изисквания на клиента.</p>
                    <p class="small">Възможни са варианти за безплатно инсталиране и настройване на продукта.<br />Начин на закупуване и доставка:<br />След като направите заявка от нашия онлайн магазин</a><br />или директно на E-Mail: <span style="color: red;">home@avalonbg.com</span>, указвайки Вашите фирмени данни, ще Ви бъде изпратена проформа фактура за извършване на необходимото плащане за покупката. След удостоверяване на плащането, ще Ви бъде изпратена оригиналната фактура заедно с необходимите файлове за инсталацията на <span style="color: red;">Maxtrade SLR</span>.<br />При Ваше желание плащането може да се извърши и с наложен платеж чрез куриер.</p>
            </div>
        </div>
        <div class="call_to_action">
            <div class="on_the_sides">
                <div class="left_side">
                    <div class="title">Maxtrade SLR</div>
                    <p>Програма за управление на дейността на Ловно Рибарско Дружество</p>
                </div>
                <div class="right_side">
                    <a href="{{ route('product', ['id' => 5]) }}" class="button_blue huge_btn"><i class="icon-basket-1"></i>Купи сега!</a>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
        </div>

        <div class="section_offset clearfix">
            <h4>Използване на временна версия на програмата:</h4>
            <div class="theme_box clearfix">
                <p class="small">Можете да си изтеглите напълно работоспособна временна версия на програмата. Тя ще
                може да работи в продължение на един месец от инсталирането си. Всички функционалности на
                програмата са запазени. След изтичане на пробния период и при желание за закупуване на лиценз
                Вие няма да загубите натрупаните по време на теста данни.</p>
            </div>
        </div>
        <div class="call_to_action type_2 on_the_sides">
            <div class="left_side">
                <div class="title">Maxtrade SLR</div>
                <p>Програма за управление на дейността на Ловно Рибарско Дружество</p>
            </div>
            <div class="right_side">
                @php
                    if (!empty(Product::where(['id' => 5])->first())){
                        $download_counts = Product::where(['id' => 5])->first()->downloads;
                    }else{
                        $download_counts = 0;
                    }
                @endphp
                <a href="https://avalonbg.com/download/MaxtradeSLR.zip" onclick="clickBtnDownload(event)" class="button_blue huge_btn">({{ $download_counts }})&nbsp;Изтегли демо версия!</a>
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

    function clickBtnDownload(e){
        $.ajax({
            type:'POST',
            url:'/add-download.html',
            data:{id:5}
        });
    };
</script>
@endsection
