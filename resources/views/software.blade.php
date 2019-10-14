<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">

        <div class="section_offset clearfix">
            <h2>{{ $software->shortDescription }}</h2>
            <div class="tour_section type_2">
                <ul class="ts_nav clearfix">
                    @if ((intval($software->isMenu) & 1) && ($software->title1))
                    <li><a href="#tab-10">{{ $software->title1 }}</a></li>
                    @endif
                    @if ((intval($software->isMenu) & 2) && ($software->title2))
                    <li><a href="#tab-11">{{ $software->title2 }}</a></li>
                    @endif
                    @if ((intval($software->isMenu) & 4) && ($software->title3))
                    <li><a href="#tab-12">{{ $software->title3 }}</a></li>
                    @endif
                    @if ((intval($software->isMenu) & 8) && ($software->title4))
                    <li><a href="#tab-13">{{ $software->title4 }}</a></li>
                    @endif
                    @if ((intval($software->isMenu) & 16) && ($software->title5))
                    <li><a href="#tab-14">{{ $software->title5 }}</a></li>
                    @endif
                    @if ((intval($software->isMenu) & 32) && ($software->title6))
                    <li><a href="#tab-15">{{ $software->title6 }}</a></li>
                    @endif
                </ul>
                <div class="ts_containers_wrap">
                    @if ((intval($software->isMenu) & 1) && ($software->title1))
                    <div id="tab-10" class="ts_container">
                        {!! html_entity_decode($software->description1) !!}
                    </div>
                    @endif
                    @if ((intval($software->isMenu) & 2) && ($software->title2))
                    <div id="tab-11" class="ts_container">
                        {!! html_entity_decode($software->description2) !!}
                    </div>
                    @endif
                    @if ((intval($software->isMenu) & 4) && ($software->title3))
                    <div id="tab-12" class="ts_container">
                        {!! html_entity_decode($software->description3) !!}
                    </div>
                    @endif
                    @if ((intval($software->isMenu) & 8) && ($software->title4))
                    <div id="tab-13" class="ts_container">
                        {!! html_entity_decode($software->description4) !!}
                    </div>
                    @endif
                    @if ((intval($software->isMenu) & 16) && ($software->title5))
                    <div id="tab-14" class="ts_container">
                        {!! html_entity_decode($software->description5) !!}
                    </div>
                    @endif
                    @if ((intval($software->isMenu) & 32) && ($software->title6))
                    <div id="tab-15" class="ts_container">
                        {!! html_entity_decode($software->description6) !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>

        @if (!(intval($software->isMenu) & 1) && ($software->title1))
        <div class="section_offset clearfix">
            <h3>{{ $software->title1 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description1) !!}
            </div>
        </div>
        @endif
        @if (!(intval($software->isMenu) & 2) && ($software->title2))
        <div class="section_offset clearfix">
            <h3>{{ $software->title2 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description2) !!}
            </div>
        </div>
        @endif
        @if (!(intval($software->isMenu) & 4) && ($software->title3))
        <div class="section_offset clearfix">
            <h3>{{ $software->title3 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description3) !!}
            </div>
        </div>
        @endif
        @if (!(intval($software->isMenu) & 8) && ($software->title4))
        <div class="section_offset clearfix">
            <h3>{{ $software->title4 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description4) !!}
            </div>
        </div>
        @endif
        @if (!(intval($software->isMenu) & 16) && ($software->title5))
        <div class="section_offset clearfix">
            <h3>{{ $software->title5 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description5) !!}
            </div>
        </div>
        @endif
        @if (!(intval($software->isMenu) & 32) && ($software->title6))
        <div class="section_offset clearfix">
            <h3>{{ $software->title6 }}</h3>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description6) !!}
            </div>
        </div>
        @endif

        <div class="call_to_action">
            <div class="on_the_sides">
                <div class="left_side">
                    <div class="title">{{ $software->name }}</div>
                    <p>{{ $software->shortDescription }}</p>
                </div>
                <div class="right_side">
                    <a href="{{ route('product', ['id' => $software->code]) }}" class="button_blue huge_btn"><i
                            class="icon-basket-1"></i>Купи сега!</a>
                </div>
            </div>
        </div>            

        <div class="section_offset clearfix">
        </div>

        @if ($software->title7)
        <div class="section_offset clearfix">
            <h4>{{ $software->title7 }}</h4>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description7) !!}
            </div>
        </div>
        @endif
        
        @if ($software->title8)
        <div class="section_offset clearfix">
            <h4>{{ $software->title8 }}</h4>
            <div class="theme_box clearfix">
                {!! html_entity_decode($software->description8) !!}
            </div>
        </div>
        @endif

        @if ($software->category_id == 'desktop')        
        <div class="call_to_action type_2 on_the_sides">
            <div class="left_side">
                <div class="title">{{ $software->name }}</div>
                <p>{{ $software->shortDescription }}</p>
            </div>
            <div class="right_side">
                @php
                if (!empty(Product::where(['code' => $software->code])->first())){
                $download_counts = Product::where(['code' => $software->code])->first()->downloads;
                }else{
                $download_counts = 0;
                }
                @endphp
                <a href="https://avalonbg.com/download/{{ $software->fileName }}" onclick="clickBtnDownload(event, '{{ Product::where(['code' => $software->code])->first()->id }}')"
                    class="button_blue huge_btn">({{ $download_counts }})&nbsp;Изтегли демо версия!</a>
            </div>
        </div>
        @endif

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

    function clickBtnDownload(e, id){
        $.ajax({
            type:'POST',
            url:'/add-download.html',
            data:{id:id}
        });
    };
</script>
@endsection