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
            <li><a href="{{ route('home') }}">Начало</a></li>
            <li>Добра търговска практика. Клиентите за нас.</li>
        </ul>
        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
        <div class="row">
            <main class="col-md-12">
                <h1>Мнения на клиенти за нашата работа!</h1>
                <div class="table_layout">
                    <div class="table_row">
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 1]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/arcus.jpg" alt="Аркус АД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 1]) }}">Аркус АД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 2]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/bulgarkontrola.jpg" alt="Булгарконтрола ЕАД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 2]) }}">Булгарконтрола ЕАД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 3]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/bulmex.jpg" alt="Булмекс ООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 3]) }}">Булмекс ООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 4]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/darzaven_rezerv.jpg" alt="Държавен Резерв и Военновременни Запаси">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 4]) }}">Държавна Агенция "Държавен Резерв и Военновременни Запаси"</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                    </div><!--/ .table_row -->
                    <div class="table_row">
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 5]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/eurox.jpg" alt="Еурокс ПроМарк Консултинг ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 5]) }}">Еурокс ПроМарк Консултинг ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 6]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/georgiev_2000.jpg" alt="Георгиев-2000 ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 6]) }}">Георгиев-2000 ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 7]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/grid_eood.jpg" alt="ГРИД ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 7]) }}">ГРИД ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 8]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/kanak.jpg" alt="Канак ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 8]) }}">Канак ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                    </div><!--/ .table_row -->
                    <div class="table_row">
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 9]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/kasi.jpg" alt="Каси Темпра Пак ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 9]) }}">Каси Темпра Пак ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 10]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/media_5100.jpg" alt="Медия 5100 ООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 10]) }}">Медия 5100 ООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 11]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/monolit_99.jpg" alt="Монолит 99 ООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 11]) }}">Монолит 99 ООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 12]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/msm_gas.jpg" alt="МСМ ГАЗ ООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 12]) }}">МСМ ГАЗ ООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                    </div><!--/ .table_row -->
                    <div class="table_row">
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 13]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/polet_90.jpg" alt="ЕТ Полет 90">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 13]) }}">ЕТ Полет 90</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 14]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/priti.jpg" alt="Прити 95 ООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 14]) }}">Прити 95 ООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 15]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/skladova_tehnika.jpg" alt="Складова Техника АД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 15]) }}">Складова Техника АД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 16]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/sot.jpg" alt="СОТ Велико Търново ЕООД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 16]) }}">СОТ Велико Търново ЕООД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                    </div><!--/ .table_row -->
                    <div class="table_row">
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 17]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/vinprom.jpg" alt="Винпром АД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 17]) }}">Винпром АД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 18]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/vt_services.jpg" alt="VT Servicess Ltd">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 18]) }}">VT Servicess Ltd</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="table_cell">
                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                            <figure class="manufacturer">
                                <a href="{{ route('klient', ['id' => 19]) }}" class="thumbnail">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/klienti/zaharni_zavodi.jpg" alt="Захарни Заводи АД">
                                </a>
                                <figcaption>
                                    <a href="{{ route('klient', ['id' => 19]) }}">Захарни Заводи АД</a>
                                </figcaption>
                            </figure>
                            <!-- - - - - - - - - - - - - - End of manufacturer - - - - - - - - - - - - - - - - -->
                        </div>
                    </div><!--/ .table_row -->
                </div><!--/ .table_layout -->
            </main><!--/ [col]-->
        </div><!--/ .row-->
    </div><!--/ .container-->
</div><!--/ .page_wrapper-->
<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
        </div>
    </div>
</div>
@endsection
