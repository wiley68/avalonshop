<?php use App\Product; ?>
@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <main class="col-md-12">
                    <h1>Производители</h1>
                    <div class="table_layout">
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($manufacturers as $manufacturer)
                            @if (($count % 6) == 0)
                            <div class="table_row">
                            @endif
                            <div class="table_cell">
                                <figure class="manufacturer">
                                    <div style="height:70px;">
                                        <a href="{{ route('products', ['manufacturer_id'=>$manufacturer->id]) }}" class="thumbnail">
                                            @if (file_exists("/home/avalonbg/admin.avalonbg.com/dist/img/manufacturers/manufacturer_" . $manufacturer->id . ".png"))
                                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" style="max-height:60px;" 
                                            data-src="{{ Config::get('settings.backend') }}/dist/img/manufacturers/manufacturer_{{ $manufacturer->id }}.png" 
                                            alt="{{ $manufacturer->name }}">
                                            @endif
                                        </a>            
                                    </div>
                                    <figcaption style="text-align:center;">
                                        @php
                                            $products_count = Product::where(['manufacturer_id' => $manufacturer->id])->count();
                                        @endphp
                                        ({{ $products_count }})
                                    </figcaption>
                                </figure>
                            </div>    
                            @php
                                $count++;
                            @endphp
                            @if (($count % 6) == 0)
                            </div>
                            @endif
                        @endforeach
                    </div><!--/ .table_layout -->
                </main><!--/ [col]-->
            </div>
        </div>
    </div>
</div>

@endsection