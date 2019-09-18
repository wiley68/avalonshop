<?php use App\Property; ?>
<?php use App\Http\Controllers\HelpController; ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118342723-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118342723-3');
    </script>
    <!-- Basic page needs
    ============================================ -->
    @if(Route::current()->getName() == 'product')
    @php
        switch ($product->instock) {
            case 'в наличност':
                $availability = "InStock";
                break;
            case 'минимално количество':
                $availability = "LimitedAvailability";
                break;
            case 'очаква се':
                $availability = "PreOrder";
                break;
            default:
                $availability = "OutOfStock";
                break;
        }
        $all_rev = 0;
        $review_author = "";
        $review_datePublished = "";
        $review_description = "";
        $review_name = "";
        foreach ($reviews as $review){
            $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
            $review_author = User::where(['id' => $review->user_id])->first()->name;
            $review_datePublished = $review->created_at;
            $review_description = $review->review;
            $review_name = $review->name;
        }
        if ($reviews->count() > 0){
            $all_rev = floor($all_rev / ($reviews->count() * 3));
        }
    @endphp
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "{{ $product->name }}",
        "image": [
            @if ($product->imgurl1 != "")
            "{{ $product->imgurl1 }}",
            @endif
            @if ($product->imgurl2 != "")
            "{{ $product->imgurl2 }}",
            @endif
            @if ($product->imgurl3 != "")
            "{{ $product->imgurl3 }}",
            @endif
            @if ($product->imgurl4 != "")
            "{{ $product->imgurl4 }}",
            @endif
        ],
        "description": "{{ $product->description }}",
        "sku": "{{ $product->ean }}",
        "brand": {
            "@type": "Thing",
            "name": "{{ $manufacturer_name }}"
        },
        @if ($all_rev > 0)
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "{{ $all_rev }}",
            "reviewCount": "{{ $reviews->count() }}"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "{{ $all_rev }}",
                "bestRating": "{{ $all_rev }}"
            },
            "author": {
                "@type": "Person",
                "name": "{{ $review_author }}"
            }
        },
        @endif
        "offers": {
            "@type": "Offer",
            "url": "{{ route('product', ['id' => $product->code]) }}",
            "priceCurrency": "BGN",
            "price": "{{ floatval($product->price) }}",
            "availability": "https://schema.org/{{ $availability }}",
            "seller": {
                "@type": "Organization",
                "name": "Авалон ООД"
            }
        }
    }
    </script>
    @endif
    @if(Route::current()->getName() == 'desktop.maxtrade_change')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "SoftwareApplication",
          "name": "Maxtrade Change",
          "operatingSystem": "Windows 7, Windows 10",
          "applicationCategory": "https://schema.org/BusinessApplication",
          "offers": {
            "@type": "Offer",
            "price": "144.00",
            "priceCurrency": "BGN"
          }
        }
    </script>
    @endif
    @php
        $property = Property::where('id', '>', 0)->first();
        $show = false;
        if (!empty($property)){
            if ($property->status == 'Yes'){
                $ip = explode(",", $property->ip);
                foreach ($ip as $ip_address) {
                    if (($ip_address == HelpController::getUserIP()) || ('::1' == HelpController::getUserIP())){
                        $show = true;
                    }
                }
            }else{
                $show = true;
            }
        }
    @endphp
    @if(!$show)
    <meta http-equiv="refresh" content="0; url=/maintanence.html" />
    @endif
    <meta charset="utf-8">
    <meta name="author" content="Илко Иванов">

    <title>{{ $title ?? "Софтуер - продажба на компютърна техника | Авалон" }}</title>
    <meta name="description" content="{{ $description ?? "Проектиране и инсталиране на софтуер. Продажба на компютърна техника." }}">
    <meta name="keywords" content="{{ $keywords ?? "софтуер, програми, компютри, продажба, сержиз, консумативи" }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
	============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav_icon.ico">

    <!-- Google web fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,500,500i,600,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Theme CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('js/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owlcarousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('js/arcticmodal/jquery.arcticmodal.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- JS Libs
		============================================ -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <!-- Old IE stylesheet
		============================================ -->
    <!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
</head>

<body class="front_page">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- index controller -->
	<!-- Include Libs & Plugins
	============================================ -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/queryloader2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script src="{{ asset('js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
	<script src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('js/jquery.appear.js') }}"></script>
	<script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countdown.plugin.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('js/arcticmodal/jquery.arcticmodal.js') }}"></script>
	<script src="{{ asset('twitter/jquery.tweet.min.js') }}"></script>
	<script src="{{ asset('js/colorpicker/colorpicker.js') }}"></script>
	<script src="{{ asset('js/retina.min.js') }}"></script>
	<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js"></script>
	<!-- Theme files
	============================================ -->
	<script src="{{ asset('js/theme.plugins.js') }}"></script>
	<script src="{{ asset('js/theme.core.js') }}"></script>
    <!-- index controller -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
            "popup": {
            "background": "#3937a3"
            },
            "button": {
                "background": "#e62576"
            }
        },
        "content": {
            "message": "Нашият сайт използва cookies за да подобри Вашата работа сайта ни. Желаете ли да използвате cookies.",
            "dismiss": "Разбрах!",
            "link": "Виж подробно.",
            "href": "/politika.html"
        }
        });
    </script>
    @yield('scripts')
</body>

</html>
