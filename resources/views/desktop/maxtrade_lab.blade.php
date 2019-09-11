<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">

        <div class="section_offset clearfix">
            <h2>Maxtrade LAB Програма за управление на дейността на лаборатория</h2>
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
                        <p>Maxtrade LAB е програма работеща под операционната среда на Microsoft Windows XP/7/8/10 разработена за<br />използване в лаборатории. Програмата Ви дава възможност да извършвате регистриране на дейността<br />си по контрола и изпитване на лабораторните образци на фирмите относно производствената им дейност.</p>
                    </div>
                    <div id="tab-11" class="ts_container">
                        <h4>II. Описание на функционалните възможности на програмата.</h4>
                        <p>Програмата се състои от две части, сървърна част и клиентска част.<br />Сървърна част от програмата – MaxtradeLAB Server. Служи за управление, поддържане, архивиране и описване на базата<br />с данни. Програмата е изградена и компилирана на основата на език за програмиране C#, в среда на Microsoft® .NET 3.5.</p>
                    <h5>За нормалната работа на сървъра е необходимо следното програмно осигуряване.</h5>
                    <ul>
                    <li>Семейството на Microsoft® Windows Операционни Системи, Microsoft® Windows XP , Microsoft® Windows Vista ,<br />Microsoft® Windows 7 , Microsoft® Windows 8, Microsoft® Windows 10, Microsoft® Windows 2003 , Microsoft® Windows 2008.</li>
                    <li>Microsoft® .NET 3.5. или по-висока версия на средата за разработка.</li>
                    <li>Освободен за достъп TCP/IP порт номер 3306, на който се свързва програмата за база данни.</li>
                    </ul>
                    <p>Клиентска част на програмата – MaxtradeLAB. Служи като итерфейс към базата данни. Чрез нея се въвеждат, коригират<br />и изтриват данни от първични документи. Автоматично изгражда и визуализира справки и анализи.</p>
                    <h5>За нормалната работа на сървъра е необходимо следното програмно осигуряване.</h5>
                    <ul>
                    <li>Семейството на Microsoft® Windows Операционни Системи, Microsoft® Windows XP , Microsoft® Windows Vista ,<br />Microsoft® Windows 7 , Microsoft® Windows 8, Microsoft® Windows 10, Microsoft® Windows 2003 , Microsoft® Windows 2008.</li>
                    <li>Microsoft® .NET 3.5. или по-висока версия на средата за разработка.</li>
                    <li>Microsoft Chart Controls for Microsoft .NET Framework 3.5 Setup</li>
                    <li>Microsoft Report Viewer Redistributable 2008 Setup</li>
                    </ul>
                    <p>Функционални възможности на програмата:<br />- Предварително въвеждане на заявители и служебни лица със запазването им за по-следваща употреба.<br />- Визуализиране на всички протоколи в удобен за преглед вид.<br />- Съхраняване на всички издадени протоколи с цел последваща справка върху данните им.<br />- Печат и съхранение на протоколи и заявки за изпитване в различни формати за по-добра последваща употреба.<br />- Предварително въведени стандарти за измервания.<br />- Създаване на заявки за изпитване с резултати за физико-химични, микробиологични изследвания, и тяхното съхранение за по-нататъшна употреба.<br />- Издаване на протокол от изпитване, лесен печат на резултата, експортиране на протокола в различни файлови формати.<br />- Съхранение и автоматично архивиране на базата данни на основата на сървър MySql.<br />- Възможност за работа на много работни станции с един сървър на базата от данни.<br />- Възможност едновременна работа на няколко офиса с една база данни при наличието на интернет свързаност.<br />- Много добре проектирана база данни, която дава възможност да се работи с десетки хиляди записи от протоколи без да има нарушение на нормалното бързодействие на програмата.</p>
                    </div>
                    <div id="tab-12" class="ts_container">
                        <h4>III. Инсталиране</h4>
                        <p>Продукта се състои от две части.</p>
                    <p>Сървърна, на която се съхранява базата от данни за всички извършени сделки. Инсталира се от файла <strong>MaxtradeLABServer_Install.exe</strong>.<br />2. Клиентска част, с която Вие действително работите. Инсталира се от файла <strong>MaxtradeLAB_Instalator.exe"</strong>.<br />3. Допълнения. <span class="important">Microsoft ReportViewer.exe</span>. Необходим за печата на справките.<br />След коректната инсталация на сървърната и клиентската част на програмата можете да започнете работа с нея.</p>
                    </div>
                    <div id="tab-13" class="ts_container">
                        <h4>IV. Текуща версия</h4>
                        <p>Текущата версия на MaxtradeLAB е: v.1.0.3.11 от 20.07.2016г.</p>
                    </div>
                    <div id="tab-14" class="ts_container">
                        <h4>V. Съвместимост</h4>
                        <p>Тествано за работоспособност на версии на<br />ОС Microsoft Windows: <span class="important">XP/7/8/8.1/10</span><br />ОС Microsoft Windows Server: <span class="important">2003/2008/2012</span><br />Продукта е разработен и има необходимост от .NET 3.5</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
            <h3>Право на ползване, варианти, цени:</h3>
            <div class="theme_box clearfix">
                <p><a class="btn btn-primary" style="width: 100%;" href="/produkt/maxtrade-lab/" rel="noopener"> Maxtrade LAB<br />93.00 лв. с ДДС </a></p>
                    <p class="small">* Лицензия за ползване на продукта на едно работно място за една година.</p>
                    <p class="small" style="color: red;">Посочената цена е само за закупуване на самия модул. В цената не се включват инсталиране, настройване и промени в модула. тези допълнителни функции са въпрос на допълнителни разговори за определяне на цената спрямо конкретните изисквания на клиента.</p>
                    <p class="small">Възможни са варианти за безплатно инсталиране и настройване на продукта.<br />Начин на закупуване и доставка:<br />След като направите заявка от нашия онлайн магазин</a><br />или директно на E-Mail: <span style="color: red;">home@avalonbg.com</span>, указвайки Вашите фирмени данни, ще Ви бъде изпратена проформа фактура за извършване на необходимото плащане за покупката. След удостоверяване на плащането, ще Ви бъде изпратена оригиналната фактура заедно с необходимите файлове за инсталацията на <span style="color: red;">Maxtrade LAB</span>.<br />При Ваше желание плащането може да се извърши и с наложен платеж чрез куриер.</p>
            </div>
        </div>
        <div class="call_to_action">
            <div class="on_the_sides">
                <div class="left_side">
                    <div class="title">Maxtrade LAB</div>
                    <p>Maxtrade LAB Програма за управление на дейността на лаборатория</p>
                </div>
                <div class="right_side">
                    <a href="{{ route('product', ['id' => 4]) }}" class="button_blue huge_btn"><i class="icon-basket-1"></i>Купи сега!</a>
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
                <div class="title">Maxtrade LAB</div>
                <p>Maxtrade LAB Програма за управление на дейността на лаборатория</p>
            </div>
            <div class="right_side">
                @php
                    if (!empty(Product::where(['id' => 4])->first())){
                        $download_counts = Product::where(['id' => 4])->first()->downloads;
                    }else{
                        $download_counts = 0;
                    }
                @endphp
                <a href="https://avalonbg.com/download/MaxtradeLab.zip" onclick="clickBtnDownload(event)" class="button_blue huge_btn">({{ $download_counts }})&nbsp;Изтегли демо версия!</a>
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
            data:{id:4}
        });
    };
</script>
@endsection
