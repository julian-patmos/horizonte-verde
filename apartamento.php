<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, height=device-height">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
		<title>Apartamentos Horizonte Verde</title>

		<!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/iphone-responsive.css">


	</head>

	<body>
		<div id="app">
			<div id="first-section">
				<div class="info-apartment">
					<p class="titlehome"><a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a></p>
					<div class="text-info-container">
						<p class="title-small">TIPOS DE APARTAMENTOS HORIZONTE VERDE</p>
						<h2>{{info.titulo}}</h2>
						<h3>{{header.subtitle}}</h3>
					</div>
					<div class="capsule-button">
						<button class="waves-effect waves-light btn button-seemore content-switch" href="#second-section">VER DETALLE</button>
					</div>
				</div>
			</div>
			<div class="container" id="second-section" >
				<div class="row">
					<header>
						<div class="header-navigation">
							<div class="wrap">
								<div class="capsule-button">
									<a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a>
									<button class="button btn-go-back content-switch">VOLVER</button>
									<div class="navbar-header">
										<button type="button" class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
								</div>
							</div>
						</div>
						 <nav class="wrap">
						    <div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav">
									<li><a href="#informacion-tab">INFORMACI&Oacute;N</a></li> 
									<li><a href="#interiores-tab">INTERIORES</a></li>
									<li><a href="#plantas-tab">PLANTAS AMBIENTADAS</a></li>
								</ul>
						    </div>
						</nav> 
					</header>
					<section>
						<div class="tab-content ">
							<div class="tab-pane active" id="informacion-tab">
								<div class="wrap row">
									<div class="col-md-4">
										<h3 class="info-text-green">{{info.titulo}}</h3>
										<p class="texto-h4" v-html="info.infogeneral"></p>

										<div class="info-text-green">
											<h5>Nota: </h5>
											<ul>
												<li>{{info.notas}}</li>
											</ul>
										</div>
										<div class="col-md-12" style="text-align: center; margin-top: 20px;">
											<img src="images/vistaCordilleraApart.jpg"/>
										</div>
									</div>
									<div class="col-md-4">
										<img class="img-recorridos img-responsive" :src="info.img_apart" />
									</div>
									<div class="col-md-4">
										<div id="torresApart1Container" class="torres-images">
											<div id="id_backT" onMouseDown="backT()"></div>
											<div class="apartamento-dual" :style="{backgroundImage: `url(${info.imagenestorresarr})`}"></div>
											<div id="id_nextT" onMouseDown="nextT()"></div>
										</div>
										
										<div style="text-align: center; margin-top: 20px;">
											<div class="available"></div>
											<div id="list_apart1" style="font-size:160%;"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="interiores-tab">

								<div id="container2a">


									<div id="divImgInteriores">



										<div id="myCarousel2" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li class="active"></li>
												<li></li>
												<li></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner">
												<div class="item active">
													<img src="images/apartments/apart1/01.jpg">
												</div>

												<div class="item">
													<img src="images/apartments/apart1/02.jpg">
												</div>

												<div class="item">
													<img src="images/apartments/apart1/03.jpg">
												</div>
											</div>

											<!-- Left and right controls -->
										    <a class="left carousel-control" href="#myCarousel2">
										      <span class="glyphicon glyphicon-chevron-left"></span>
										      <span class="sr-only">Previous</span>
										    </a>
										    <a class="right carousel-control" href="#myCarousel2">
										      <span class="glyphicon glyphicon-chevron-right"></span>
										      <span class="sr-only">Next</span>
										    </a>
										</div>

									</div>


								</div>
							</div>

							<div class="tab-pane" id="plantas-tab">
								<div class="wrap nav-slider-pisos">
									<ul class="nav nav-pills nav-justified" v-for="(imagetitle, index) in info.imagenesslider">
										<li><a>{{imagetitle.titulo}}</a></li>
									</ul>
								</div>

								<div id="myCarousel" class="carousel slide">

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active" v-for="image in info.imagenesslider">
											<img :src=`images/tipos/${image.url}`>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="https://unpkg.com/vue@2.5.8/dist/vue.js"></script>
		<script src="https://unpkg.com/element-ui/lib/index.js"></script>
		<script type="text/javascript" src="js/main-vue.js"></script>
	</body>

</html>