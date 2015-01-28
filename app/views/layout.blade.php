<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Consorcio del Conocimiento A.C</title>
		
		@section('css')
			<!-- All Animations CSS -->
			{{ HTML::style('/css/animate.css') }}
			<!-- Image Lightbox CSS-->
			{{ HTML::style('/css/imagelightbox.css') }}
			<!-- Theme styles and Menu styles -->
			{{ HTML::style('/css/style.css') }}
			{{ HTML::style('/css/mainmenu.css') }}
			<!-- Call Fontawsome Icon Font from a CDN -->
			{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}
			<!--Pace Page Loader -->
			{{ HTML::style('/js/pace-0.5.1/themes/pace-theme-minimal.css') }}
			<!--FlexSlider -->
			{{ HTML::style('/js/woothemes-FlexSlider-06b12f8/flexslider.css') }}
			<!--Isotope Plugin -->
			{{ HTML::style('/js/isotope/css/style.css') }}
			<!--Simple Text Rotator -->
			{{ HTML::style('/css/simpletextrotator.css') }}
			<!--Modernizer Custom -->
			{{ HTML::script('/js/modernizr.custom.48287.js') }}
			<!-- Fav and touch icons 
			<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">-->
		@show
		
	</head>
	<body class="sticky_header">
		<div class="overflow_wrapper">
			<header>
				<div class="container">
					<div class="logo">
						{{ HTML::image('/images/consorcio.png','Logo') }}
					</div>
					<div id="mainmenu" class="menu_container">
						<label class="mobile_collapser">MENU</label>
						<!-- Mobile menu title -->
						<ul>
							<li
							@section('inicio')
							@show
							>{{link_to('/', 'Inicio')}}</li>
							<li
							@section('nosotros')
							@show
							>{{link_to('nosotros', 'Nosotros')}}</li>
							<li
							@section('servicios')
							@show
							>{{link_to('servicios', 'Servicios')}}</li>
							<li
							@section('informacion')
							@show
							>{{link_to('informacion', 'Informaci&oacute;n')}}</li>
							<li
							@section('convocatirias')
							@show
							>{{link_to('convocatorias', 'Convocatorias')}}</li>
							<li
							@section('contacto')
							@show
							>{{link_to('contacto', 'Contacto')}}</li>
						</ul>
					</div>
					<div class="triangle-up-left"></div>
					<div class="triangle-up-right"></div>
				</div>
			</header>
			@section('encabezado')
                        @show
			<div class="main"/>
				@section('contenido')
				@show
				@section('twitter')
					<section class="twitter_feed_wrapper skincolored_section">
						<div class="container">
							<div class="row">
								<div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-twitter"></i></a></div>
								<div id="twitter_flexslider" class="flexslider">
									<ul class="slides">
										<li class="item">
											<blockquote>
												<p> This Clean Flexible Multipurpose Bootstrap 3.1.1 HTML5 Template will soon become a Wordpress theme with great support! <a href="#">http://unhub.com/LIot</a> — Plethora Themes (@plethorathemes) <a href="https://twitter.com/plethorathemes/">April 4 2014</a> </p>
											</blockquote>
										</li>
										<li class="item">
											<blockquote>
												<p> 'Game of Thrones' Opening Sequence Reimagined With Social Media http://flip.it/3AiCh  via @mashable </p>
											</blockquote>
										</li>
										<li class="item">
											<blockquote>
												<p> SEO expert debunks 5 of the biggest SEO myths @CreativeBloQ http://www.creativebloq.com/business/seo-expert-debunks-5-biggest-seo-myths-21410786 … </p>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				@show
				<footer>
					<section class="footer_teasers_wrapper dark_section">
						<div class="container triangles-of-section">
						     <div class="triangle-up-left" style=""></div>
						     <div class="square-left"></div>
						     <div class="triangle-up-right"></div>
						     <div class="square-right"></div>
						</div>
						<div class="container">
							<div class="row">
								<!--<div class="footer_teaser pl_about_us_widget col-md-12" style="text-align:center;">
									<h3>Contact Details</h3>
								</div><br><br>-->								
								<div class="footer_teaser pl_about_us_widget col-sm-4 col-md-4" style="text-align:center;">
									<p>Consorcio del Conocimiento, A.C.<br>
										Sinaloa #119 Pte. Col. Alameda, Celaya, Gto.
									</p>
								</div>
								<div class="footer_teaser pl_latest_news_widget col-sm-4 col-md-4" style="text-align:center;">
									<!--<p><i class="fa fa-envelope"></i> contact@example.com</p>-->
									<p>Telef&oacute;no de oficina</p>
									<p><i class="fa fa-phone"></i> 01 (461) 61-2-18-73</p>
								</div>
								<div class="footer_teaser pl_flickr_widget col-sm-4 col-md-4" id="latest-flickr-images">
									<div class="footer_social" style="text-align:center; padding:0;">
									     <div class="social_wrapper">
											 <a target="_blank" href="https://www.facebook.com/ConocimientoAC"><i class="fa fa-facebook"></i></a>
											 <a target="_blank" href="https://www.facebook.com/consorcio.delconocimiento"><i class="fa fa-facebook"></i></a>
										 </div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="copyright">
						<div class="container">
							<div class="row">
							     <div class="col-sm-4 col-md-4">Copyright ©2014 all rights reserved </div>
							     <div class="col-sm-4 col-md-4"></div>
							     <div class="text-right col-sm-4 col-md-4">Consorcio del Conocimiento </div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			
			@section('scripts')
				{{ HTML::script('/js/jquery-1.10.2.min.js') }}
				{{ HTML::script('/twitter-bootstrap/js/bootstrap.min.js') }}
				<!--Pace Page Loader -->
				{{ HTML::script('/js/pace-0.5.1/pace.min.js') }}
				<!--FlexSlider -->
				{{ HTML::script('/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js') }}
				<!--Isotope Plugin -->
				{{ HTML::script('/js/isotope/jquery.isotope.min.js') }}
				<!--To-Top Button Plugin -->
				{{ HTML::script('/js/jquery.ui.totop.js') }}
				<!--Easing animations Plugin -->
				{{ HTML::script('/js/easing.js') }}
				<!--WOW Reveal on scroll Plugin -->
				{{ HTML::script('/js/wow.min.js') }}
				<!--Simple Text Rotator -->
				{{ HTML::script('/js/jquery.simple-text-rotator.js') }}
				<!--The Theme Required Js -->
				{{ HTML::script('/js/cleanstart_theme.js') }}
				<!--To collapse the menu -->
				{{ HTML::script('/js/collapser.js') }}
				<!--Style Switcher, You propably want to remove this!-->
				{{ HTML::script('/js/style_switcher.js') }}
				<!--END Style Switcher-->
			@show
	</body>
</html>