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
	{{HTML::style('css/gallery.min.css')}}
	{{HTML::style('css/scrolling-nav.min.css')}}
	{{HTML::style('css/style.min.css')}}
	{{HTML::style('css/style-responsive.min.css')}}
	@yield('head')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">

			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
				<a class="logoindex navbar-brand page-scroll" href="#page-top">SI<span>GU</span></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden">
						<a class="page-scroll" href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#about">Beranda</a>
					</li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Intro Section -->
	<section id="intro" class="intro-section">
		<div id="overlay" class="hide col-lg-4">		
			<section class="panel">

				<div class="cover-photo">
					<div id="foto" class="fb-timeline-img">
						
					</div>
				</div>
				<div class="panel-body">
					{{-- <input type="text" class="form-control"  size="16">
					<div class="input-group-btn">
						<button type="button" class="btn btn-danger date-reset"><i class="fa fa-times"></i></button>
						<button type="button" class="btn btn-info date-set"><i class="fa fa-calendar"></i></button>
					</div> --}}
					<div id="logo" class="fb-user-thumb">
						
					</div>
					<div class="fb-user-details">
						<h3><a id="nama_singkat" href="#" class="#"></a></h3>
						<p id="nama_lengkap"></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>			
		</div>
		<div id="map"></div>

	</section>

	<!-- About Section -->
	<section id="about" class="about-section">
		<section class="panel">
			<header class="panel-heading">
				Daftar Universitas Favourite
			</header>
			<div class="panel-body">
				<section class="panel col-lg-4">
					<div class="cover-photo">
						<div class="fb-timeline-img">
							<img src="{{ Asset('img/UNY_c.jpg') }}" alt="">
						</div>
						<div class="fb-name">
							<h2><a href="#"><br><i class="fa fa-star"></i> 4.4</a></h2>
						</div>
					</div>
					<div class="panel-body">
						<div class="profile-thumb">
							<img src="{{ Asset('img/UNY_i.jpg') }}" alt="">
						</div>
						<a href="#" class="fb-user-mail">Universitas Negeri Yogyakarta</a>
					</div>
				</section>
				<section class="panel col-lg-4">
					<div class="cover-photo">
						<div class="fb-timeline-img">
							<img src="{{ Asset('img/UGM_c.jpg') }}" alt="">
						</div>
						<div class="fb-name">
							<h2><a href="#"><br><i class="fa fa-star"></i> 4.6</a></h2>
						</div>
					</div>
					<div class="panel-body">
						<div class="profile-thumb">
							<img src="{{ Asset('img/UGM_i.jpg') }}" alt="">
						</div>
						<a href="#" class="fb-user-mail">Universitas Gajah Mada</a>
					</div>
				</section>
				<section class="panel col-lg-4">
					<div class="cover-photo">
						<div class="fb-timeline-img">
							<img src="{{ Asset('img/UAD_c.jpg') }}" alt="">
						</div>
						<div class="fb-name">
							<h2><a href="#"><br><i class="fa fa-star"></i> 4.5</a></h2>
						</div>
					</div>
					<div class="panel-body">
						<div class="profile-thumb">
							<img src="{{ Asset('img/UAD_i.jpg') }}" alt="">
						</div>
						<a href="#" class="fb-user-mail">Universitas Ahmad Dahlan</a>
					</div>
				</section>
			</div>
			<div class="text-center invoice-btn">
				<a href="{{ URL::to('/daftar') }}" class="btn btn-info btn-lg"><i class="fa fa-building"></i> Daftar Universitas .. </a>
			</div>
		</section>

		<!-- page end-->
	</section>

	
	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}	
	{{HTML::script('js/jquery.easing.min.js')}}
	{{HTML::script('js/scrolling-nav.min.js')}}
	{{HTML::script('js/modernizr.custom.min.js')}}
	<script>


	var map;
	var center = {lat: -7.800847, lng: 110.380289};
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: center,
			zoom: 10,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			rotateControl: false
		});
		$.ajax({
			url: "{{ URL::to('/map') }}",
			dataType: 'JSON',
			type: 'GET',
			data: {get_values: true},
			success: function(response) {
				
				for (var i=0; i < response.length; i++){
					var la = parseFloat(response[i]['lo']);
					var lo = parseFloat(response[i]['la']);
					markers(la,lo);
					
				}
				
			}
		});
		google.maps.event.addListenerOnce(map, 'idle', function(){
			window.setTimeout(function() {
				map.setZoom(12);
			},3000);
		});

		map.addListener('dragend', function(){
			window.setTimeout(function() {
				// $("#overlay").removeClass('overlay').addClass('hide');
			},500);
		});

		function markers(la,lo){
			marker = new google.maps.Marker({
				position: {lat:la, lng:lo},
				map: map,
				icon:'../img/pin.png'
			});
			google.maps.event.addListener(marker, 'click', function() {
				map.panTo({lat:la, lng:(lo-0.002)});
				map.setZoom(17);
				$("#overlay").removeClass('hide').addClass('overlay');
				$("#nama_singkat").text('');
				$("#nama_lengkap").text('memuat....');
				$("#logo").html("<i class='fa fa-circle-o-notch fa-spin fa-3x'></i>");
				$('#foto').html("");
				$.post("{{ URL::to('/detailuniv') }}", {la: la})
				.done(function(result) {
					// alert(JSON.stringify(result['nama_singkat']));
					$("#nama_singkat").text(result['nama_singkat']);
					$("#nama_lengkap").text(result['nama_lengkap']);
					var nama_singkat = result['nama_singkat'];
					// alert(nama_singkat);
					$("#logo").html("<img id='logo' src='{{ Asset('img/"+ nama_singkat +"_i.jpg') }}'alt=''>");
					$('#foto').html("<img src='{{Asset ('img/"+nama_singkat+"_c.jpg')}}' alt=''>");
				})
			});
		}
		
	}
	</script>
	<script async defer type ="text/javascript"  src="http://maps.google.com/maps/api/js?key=AIzaSyCciL_tEsRSA_aBsWcEsIB6ZNN0RSf8ueg&signed_in=true&callback=initMap"></script>

	@yield('js')
</body>
</html>