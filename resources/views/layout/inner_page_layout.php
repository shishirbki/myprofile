<!DOCTYPE HTML>
<html lang="en">
<head>
<title>My Profile a Personal Portfolio category Flat bootstrap Responsive  Website Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="My Profile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files secure_asset for https path(for heroku app)-->
<link href="{{asset('assets/css/blog_css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('assets/css/cobox.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/portfolio.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- font links -->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<!-- /font links -->	
<!-- js files -->
<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<x-header/>
	@yield('content')
	<x-footer/>
</body>
</html>	