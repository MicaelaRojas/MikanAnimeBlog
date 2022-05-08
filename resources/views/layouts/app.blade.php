<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Mikan Anime Blog</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">

	<link href="common-css/layerslider.css" rel="stylesheet">


	<link href="05-Comming-soon/css/styles.css" rel="stylesheet">

	<link href="05-Comming-soon/css/responsive.css" rel="stylesheet">


</head>
<body>
<div class="main-slider"></div>


<header>
		<div class="middle-menu center-text"><a href="#" class="logo"><img src="images/logo.png" alt="Logo Image"></a>
		</div>
        
		<div class="bottom-area">
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li class="drop-down"><a href="{{ url('/') }}">INICIO</i></a></li>
				<li><a href="{{ url('/about') }}">SOBRE MI</a></li>
                <li><a href="{{ url('/productos') }}">PRODUCTOS</a></li>
                <li > &nbsp;&nbsp </li>
                
             
			</ul><!-- main-menu -->

        </div>
    </div><!-- conatiner -->

</header>
<section class="section blog-area">
  <!-- <div class="container-fluid"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-1">
 
        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
            @yield('content')
            </div>
    </div>
  </div>
  <!-- </div> -->
    </div>

</section>

<section class="footer-instagram-area">


<ul class="instagram">
    <li><a href="#"><img src="images/productos/1.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/2.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/3.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/4.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/5.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/6.jpg" alt="Instagram Image"></a></li>
    <li><a href="#"><img src="images/productos/7.jpg" alt="Instagram Image"></a></li>

</ul>
</section><!-- section -->
<footer>
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<div class="footer-section">
					
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-sm-6">
					<div class="footer-section">
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>



	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/layerslider.js"></script>

	<script src="common-js/scripts.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>

</body>

</html>