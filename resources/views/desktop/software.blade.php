<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">

        <div class="section_offset clearfix">
            <h2>{{ $software->shortDescription }}</h2>
			<div class="tour_section type_2">
                <ul class="ts_nav clearfix">
                    <li><a href="#tab-10">{{ $software->title1 }}</a></li>
                    <li><a href="#tab-11">{{ $software->title2 }}</a></li>
                    <li><a href="#tab-12">{{ $software->title3 }}</a></li>
                    <li><a href="#tab-13">{{ $software->title4 }}</a></li>
                    <li><a href="#tab-14">{{ $software->title5 }}</a></li>
                </ul>
                <div class="ts_containers_wrap">
                    <div id="tab-10" class="ts_container">
                        {!! html_entity_decode($software->description1) !!}
                    </div>
                    <div id="tab-11" class="ts_container">
                        {!! html_entity_decode($software->description2) !!}
                    </div>
                    <div id="tab-12" class="ts_container">
                        {!! html_entity_decode($software->description3) !!}
                    </div>
                    <div id="tab-13" class="ts_container">
                        {!! html_entity_decode($software->description4) !!}
                    </div>
                    <div id="tab-14" class="ts_container">
                        {!! html_entity_decode($software->description5) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
            <h3>{{ $software->title6 }}</h3>
            <div class="theme_box clearfix">
              {!! html_entity_decode($software->description6) !!}
            </div>
        </div>
        <div class="call_to_action">
            <div class="on_the_sides">
                <div class="left_side">
                    <div class="title">{{ $software->name }}</div>
                    <p>{{ $software->shortDescription }}</p>
                </div>
                <div class="right_side">
                    <a href="{{ route('product', ['id' => 'max-change']) }}" class="button_blue huge_btn"><i class="icon-basket-1"></i>Купи сега!</a>
                </div>
            </div>
        </div>

        <div class="section_offset clearfix">
        </div>

        <div class="section_offset clearfix">
            <h4>{{ $software->title7 }}</h4>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description7) !!}
            </div>
        </div>
        <div class="call_to_action type_2 on_the_sides">
            <div class="left_side">
                <div class="title">{{ $software->name }}</div>
                <p>{{ $software->shortDescription }}</p>
            </div>
            <div class="right_side">
                @php
                    if (!empty(Product::where(['code' => 'max-change'])->first())){
                        $download_counts = Product::where(['code' => 'max-change'])->first()->downloads;
                    }else{
                        $download_counts = 0;
                    }
                @endphp
                <a href="https://avalonbg.com/download/{{ $software->fileName }}" onclick="clickBtnDownload(event)" class="button_blue huge_btn">({{ $download_counts }})&nbsp;Изтегли демо версия!</a>
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
