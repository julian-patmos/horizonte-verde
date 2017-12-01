<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, height=device-height">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
		<title>Apartamentos Horizonte Verde</title>

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  		<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css"> 
		<link rel="stylesheet" href="css/iphone-responsive.css">


	</head>

	<body>
		<div id="app">
			<v-layout row wrap id="first-section" v-show="showprimero">
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
			</v-layout>
			<v-layout row wrap id="second-section" v-show="showsegundo">
				<v-flex>
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
				    <v-tabs>
						<v-tabs-bar class="navbar">
							<v-tabs-slider class="yellow"></v-tabs-slider>
							<v-tabs-item xs12 href="#informacion-tab">INFORMACI&Oacute;N</v-tabs-item> 
							<v-tabs-item xs12 href="#interiores-tab">INTERIORES</v-tabs-item>
							<v-tabs-item xs12 href="#plantas-tab">PLANTAS AMBIENTADAS</v-tabs-item>
						</v-tabs-bar>
						<v-tabs-items>
							<v-tabs-content id="informacion-tab">
								<v-layout wrap row>
									<v-flex offset-md1 xs12 sm12 md4>
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
									</v-flex>
									<v-flex xs12 sm12 md4>
										<img class="img-recorridos img-responsive" :src="info.img_apart" />
									</v-flex>
									<v-flex xs12 sm12 md2>
										<div id="torresApart1Container" class="torres-images">
											<div id="id_backT"></div>
											<div class="apartamento-dual" :style="{backgroundImage: `url(${info.imagenestorresarr})`}"></div>
											<div id="id_nextT"></div>
										</div>
										
										<div style="text-align: center; margin-top: 20px;">
											<div class="available"></div>
											<div id="list_apart1" style="font-size:160%;"></div>
										</div>
									</v-flex>
								</v-layout>
							</v-tabs-content>

							<v-tabs-content id="interiores-tab">

								<v-carousel >
									<v-carousel-item src="images/apartments/apart1/01.jpg"></v-carousel-item>
									<v-carousel-item src="images/apartments/apart1/02.jpg"></v-carousel-item>
									<v-carousel-item src="images/apartments/apart1/03.jpg"></v-carousel-item>
								</v-carousel>

							</v-tabs-content>

							<v-tabs-content id="plantas-tab">
								<d-block>
									<v-carousel >
										<v-carousel-item v-for="image in info.imagenesslider" :src=`images/tipos/${image.url}`></v-carousel-item>
									</v-carousel>
								</d-block>
							</v-tabs-content>

						</v-tabs-items>
					</v-tabs>
				</v-flex>
			</v-layout>
		</div>
		<script type="text/javascript" src="https://unpkg.com/vue@2.5.8/dist/vue.js"></script>
		<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
		<script type="text/javascript" src="js/main-vue.js"></script>
		<script type="text/javascript" src="js/scroll-page.js"></script> 
	</body>

</html>