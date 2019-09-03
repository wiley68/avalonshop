<?php use App\Property; ?>
<?php use App\Http\Controllers\HelpController; ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118342723-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118342723-1');
    </script>
    <!-- Basic page needs
    ============================================ -->
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
