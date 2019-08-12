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
                                <li><a href="{{ route('index') }}">Начало</a></li>
                                <li>Направена поръчка</li>
                            </ul>
                            @php
                                dd(app('request'));
                                die;
                            @endphp
                            <h1 class="page_title">Поръчка № {{ $order_id }}</h1>
                        </div>
                        <!--/ .container-->
                    </div>
                    <!--/ .page_wrapper-->
                    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - -->    
            </div>
        </div>
    </div>
</div>

@endsection
