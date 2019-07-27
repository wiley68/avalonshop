@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
                <div class="secondary_page_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="container_404">
                                    <p class="not_found_404">404</p>
                                    <p class="not_found">Страницата не е налична!</p>
                                    <p>Съжаляваме но страницата която се опитвате да достъпите не е налична. Ако това е някакъв проблем на нашия сайт ние сме информирани за него и ще го отстраним в най-кратки срокове.
                                        За момента Вие можете да изберете някоя от следните възможности:</p>
                                    <a href="javascript:history.back()" class="button_dark_grey middle_btn">Върнете се в предната страница</a>
                                    <a href="{{ route('index') }}" class="button_dark_grey middle_btn">Отворете началната страница</a>
                                </div>
                                <!--/ .align_center -->
                            </div>
                            <!--/ [col]-->
                        </div>
                        <!--/ .row -->
                    </div>
                    <!--/ .container-->
                </div>
                <!--/ .page_wrapper-->

                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
        </div>
    </div>
</div>

@endsection