<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, height=device-height">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
		<title>Apartamentos Horizonte Verde</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
	    <link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/vue-material.min.css">
	    <link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/theme/default.css">
		<link rel="stylesheet" href="css/style.css"> 
		<link rel="stylesheet" href="css/iphone-responsive.css">


	</head>

	<body>
		<div id="app">
			<div id="first-section" v-show="showprimero">
				<div class="info-apartment">
					<p class="titlehome"><a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a></p>
					<div class="text-info-container">
						<p class="title-small">TIPOS DE APARTAMENTOS HORIZONTE VERDE</p>
						<h2>{{info.titulo}}</h2>
						<h3>{{header.subtitle}}</h3>
					</div>
					<div class="capsule-button">
						<button class="button button-seemore content-switch" id="btnBackBottom" v-on:click="changeView()">VER DETALLE</button>
					</div>
				</div>
			</div>
			<div id="second-section" v-show="showsegundo">
				<header>
					<div class="header-navigation">
						<div class="wrap">
							<div class="capsule-button">
								<a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a>
								<button class="button btn-go-back content-switch" id="btnBackTop" v-on:click="changeView()">VOLVER</button>
							</div>
						</div>
					</div>
				</header>
				<md-tabs md-alignment="centered" md-active-tab="#informacion-tab">
					<md-tab id="informacion-tab" md-label="INFORMACIÓN">
						<div class="md-alignment-top-center md-layout">
							<div class="md-layout-item md-size-30">
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
							<div class="md-layout-item md-size-30">
								<img class="img-recorridos img-responsive" :src="info.img_apart" />
							</div>
							<div class="md-layout-item md-size-20">
								<div id="torresApart1Container" class="torres-images">
									<div id="id_backT"></div>
									<div class="apartamento-dual" :style="{backgroundImage: `url(${info.imagenestorresarr})`}"></div>
									<div id="id_nextT"></div>
								</div>
								
								<div style="text-align: center; margin-top: 20px;">
									<div class="available"></div>
									<div id="list_apart1" style="font-size:160%;"></div>
								</div>
							</div>
						</div>
					</md-tab>
					<md-tab id="interiores-tab" md-label="INTERIORES">
						<carousel>
							<slide><img src="images/apartments/apart1/01.jpg"></slide>
							<slide><img src="images/apartments/apart1/02.jpg"></slide>
							<slide><img src="images/apartments/apart1/03.jpg"></slide>
						</carousel>
					</md-tab>
					<md-tab id="plantas-tab" md-label="PLANTAS AMBIENTADAS">
						<carousel >
							<slide v-for="image in info.imagenesslider"><img :src=`images/tipos/${image.url}`></slide>
						</carousel>
					</md-tab>
				</md-tabs>
			</div>
		</div>
		<script type="text/javascript" src="https://unpkg.com/vue@2.5.8/dist/vue.js"></script>
		<script type="text/javascript" src="https://unpkg.com/vue-material@beta"></script>
		<script type="text/javascript" src="https://ssense.github.io/vue-carousel/js/vue-carousel.min.js"></script>
		<script type="text/javascript" src="js/main-vue.js"></script>
		<script type="text/javascript" src="js/scroll-page.js"></script> 
	</body>

</html>