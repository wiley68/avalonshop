<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">

        <div class="section_offset clearfix">
            <h2>Програма за регистриране на дейността по продажба и обмен на валута</h2>
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
                        <p>Това е програма работеща под операционната среда на Microsoft Windows XP/7/8/10 разработена за
                            използване в Обменни Бюра.<br />Програмата Ви дава възможност да извършвате регистриране на
                            дейността си по прoдажба и обмен на валута.</p>
                    </div>
                    <div id="tab-11" class="ts_container">
                        <h4>II. Описание на функционалните възможности на програмата.</h4>
                        <p>- Предварително въвеждане на определен от клиента брой курсови двойки, с цел по-бързо попълване на
                            бордерата и автоматичното пресмятане на превалутирането.<br />- Работа с неограничен брой
                            потребители.<br />- Права на потребител, като администратор (има достъп до цялата функционалност на
                            програмата)<br />- Права на потребител, като оператор (може само да издава бордера, и да печата вече
                            издадените бордера без да може да ги променя. Може да анулира бордера, като за това събитие остава
                            запис в системата)<br />- Системата може да работи на неограничен на брой работни места, като цялата
                            база данни се съхранява на едно място, наречено сървър.<br />- Визуализиране на всички бордера в
                            удобен за преглед вид.<br />- Извършване на покупки на валута с издаване на бордеро за
                            сделката.<br />- Извършване на продажба на валута с издаване на бордеро за сделката.<br />-
                            Редактиране на предварително избрано бордеро, това действие се прави само от администратора.<br />-
                            Разпечатване на предварително избрано бордеро.<br />- Печат на дневен отчет за извършените сделки,
                            по потребители и общо. Общ отчет само от администратора.<br />- Печат на месечен отчет за
                            извършените сделки, по потребители и общо. Общ отчет само от администратора.<br />- Експорт на
                            различните видове справки към файл за xls и pdf.</p>
                    </div>
                    <div id="tab-12" class="ts_container">
                        <h4>III. Инсталиране</h4>
                        <p>Продукта се състои от две части.</p>
                        <p>1. Сървърна, на която се съхранява базата от данни. Инсталира се от файла <span
                            style="color: #ff0000;">"MaxtradeChangeServer_Install.zip"</span>.</p>
                        <p>2. Клиентска част, с която Вие действително работите. Инсталира се от файла <span
                            style="color: #ff0000;">"MaxtradeChange_Instalator.zip"</span>.</p>
                        <p>3. Допълнения. <span style="color: #ff0000;">Microsoft ReportViewer.exe</span>. Необходим за печата
                            на справките.</p>
                        <p>След коректната инсталация на сървърната и клиентската част на програмата можете да започнете работа
                            с нея.</p>
                    </div>
                    <div id="tab-13" class="ts_container">
                        <h4>IV. Текуща версия</h4>
                        <p>Текущата версия на MaxtradeChange е: v.1.0.1.2.</p>
                    </div>
                    <div id="tab-14" class="ts_container">
                        <h4>V. Съвместимост</h4>
                        <p>Тествано за работоспособност на версии на<br />ОС Microsoft Windows: XP/7/8/8.1/10<br />ОС Microsoft
                            Windows Server: 2003/2008/2012<br />Продукта е разработен и има необходимост от .NET 3.5</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
            <h3>Право на ползване, варианти, цени:</h3>
            <div class="theme_box clearfix">
                <p><a class="btn btn-primary" style="width: 100%;" href="{{ route('product', ['id' => 1]) }}" rel="noopener">
                    Maxtrade Change<br />44.00 лв. с ДДС </a></p>
                <p class="small">* Лицензия за ползване на продукта на едно работно място за една година.</p>
                <p class="small" style="color: red;">Посочената цена е само за закупуване на самия модул. В цената
                    не се включват инсталиране, настройване и промени в модула. тези допълнителни функции са въпрос
                    на допълнителни разговори за определяне на цената спрямо конкретните изисквания на клиента.</p>
                <p class="small">Възможни са варианти за безплатно инсталиране и настройване на продукта.<br />Начин
                    на закупуване и доставка:<br />След като направите заявка от нашия онлайн магазин или
                    директно на E-Mail: <span style="color: red;">home@avalonbg.com</span>, указвайки Вашите фирмени
                    данни, ще Ви бъде изпратена проформа фактура за извършване на необходимото плащане за покупката.
                    След удостоверяване на плащането, ще Ви бъде изпратена оригиналната фактура заедно с
                    необходимите файлове за инсталацията на <span style="color: red;">Maxtrade
                        Change</span>.<br />При Ваше желание плащането може да се извърши и с наложен платеж чрез
                    куриер.</p>
            </div>
        </div>
        <div class="call_to_action">
            <div class="on_the_sides">
                <div class="left_side">
                    <div class="title">Maxtrade Change</div>
                    <p>Програма за регистриране на дейността по продажба и обмен на валута</p>
                </div>
                <div class="right_side">
                    <a href="{{ route('product', ['id' => 1]) }}" class="button_blue huge_btn"><i class="icon-basket-1"></i>Купи сега!</a>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
        </div>

        <div class="section_offset clearfix">
            <h4>Използване на временна версия на програмата::</h4>
            <div class="theme_box clearfix">
                <p class="small">Можете да си изтеглите напълно работоспособна временна версия на програмата. Тя ще
                може да работи в продължение на един месец от инсталирането си. Всички функционалности на
                програмата са запазени. След изтичане на пробния период и при желание за закупуване на лиценз
                Вие няма да загубите натрупаните по време на теста данни.</p>
            </div>
        </div>
        <div class="call_to_action type_2 on_the_sides">
            <div class="left_side">
                <div class="title">Maxtrade Change</div>
                <p>Програма за регистриране на дейността по продажба и обмен на валута</p>
            </div>
            <div class="right_side">
                @php
                    if (!empty(Product::where(['id' => 1])->first())){
                        $download_counts = Product::where(['id' => 1])->first()->downloads;
                    }else{
                        $download_counts = 0;
                    }
                @endphp
                <a href="https://avalonbg.com/download/MaxtradeChange.zip" onclick="clickBtnDownload(event)" class="button_blue huge_btn">({{ $download_counts }})&nbsp;Изтегли демо версия!</a>
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
            data:{id:1}
        });
    };
</script>
@endsection
