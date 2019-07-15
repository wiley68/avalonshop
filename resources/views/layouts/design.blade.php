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
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- JS Libs
		============================================ -->
		<script src="js/modernizr.js"></script>

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

    <!-- index controller -->
    @yield('scripts')
</body>

</html>