<!DOCTYPE html>
<html lang="bg">

<head>
		<!-- Basic page needs
		============================================ -->
		<title>Авалон | Онлайн махазин Компютърна техника</title>
		<meta charset="utf-8">
		<meta name="author" content="Илко Иванов">
		<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('js/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('js/owlcarousel/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('js/arcticmodal/jquery.arcticmodal.css') }}">
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

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- index controller -->
    <!-- Include Libs & Plugins
	============================================ -->
	<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('js/queryloader2.min.js') }}"></script>
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
	<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

	<!-- Theme files
	============================================ -->
	<script src="{{ asset('js/theme.plugins.js') }}"></script>
	<script src="{{ asset('js/theme.core.js') }}"></script>
    <!-- index controller -->
    @yield('scripts')
</body>

</html>