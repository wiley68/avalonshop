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
            <li><a href="{{ route('klienti') }}">Добра търговска практика. Клиентите за нас.</a></li>
            <li>{{ $name }}</li>
        </ul>
        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
        <div class="row">
            <main class="col-md-12 col-sm-12">
                <h1>{{ $name }}</h1>
                <div class="theme_box">
                    <img src="{{ $img }}" class="alignleft" style="max-width:100px;" alt="{{ $name }}">
                    <p>{{ $text }}</p>
                    <ul class="bottombar manufacturer_nav">
                        <li><a>{{ $sign }}</a></li>
                    </ul>
                </div>
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
