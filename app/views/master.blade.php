<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="sodiklain">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>SIG | @yield('tittle')</title>
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/bootstrap-reset.min.css')}}
	{{HTML::style('css/font-awesome.min.css')}}
	{{HTML::style('css/style.min.css')}}
	{{HTML::style('css/style-responsive.min.css')}}
	
	@yield('head')
</head>
<body >
	<section id="container">
		<header class="header white-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-tittle="Toggle Navigation"></div>
			</div>
			<a class="logo" href="{{ URL::to('/')}}">SI<span>Gu</span></a>
			@yield('header')
		</header>
		
		@yield('side')
		
		<section id="main-content">
			@yield('content')
		</section>
	</section>
</body>
	
	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/jquery.nicescroll.min.js')}}
	{{HTML::script('js/common-scripts.min.js')}}
	{{HTML::script('js/jquery.dcjqaccordion.2.7.min.js')}}
	@yield('js')
</body>
</html>