<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height">
	<title>Apartamentos Horizonte Verde</title>

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/iphone-responsive.css">

	<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll-page.js"></script>
</head>

<body>
		<div id="first-section">
			<div class="info-apartment">
				<p class="titlehome"><a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a></p>
				<div class="text-info-container">
					<p class="title-small">TIPOS DE APARTAMENTOS HORIZONTE VERDE</p>
					<h2>3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN</h2>
					<h3>VISTA A LA CORDILLERA</h3>
				</div>
				<div class="capsule-button">
					<button class="button button-seemore content-switch" data-target-spy="#second-section" data-timelaps="1500">VER DETALLE</button>
				</div>
			</div>
		</div>
		<div class="container hide-scroll" id="second-section">
			<div class="row">
				<header>
					<div class="header-navigation">
						<div class="wrap">
							<div class="capsule-button">
								<a href="index.html"><i class="fa fa-home btn-go-home" aria-hidden="true"></i></a>
								<button class="button btn-go-back content-switch" data-target-spy="#first-section" data-timelaps="1500">VOLVER</button>
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
								<li><a data-toggle="pill" href="#informacion-tab">INFORMACI&Oacute;N</a></li> 
								<li><a data-toggle="pill" href="#interiores-tab">INTERIORES</a></li>
								<li><a data-toggle="pill" href="#plantas-tab">PLANTAS AMBIENTADAS</a></li>
							</ul>
					    </div>
					</nav> 
				</header>
				<section>
					<div class="tab-content ">
						<div class="tab-pane active" id="informacion-tab">
							<div class="wrap row">
								<div class="col-md-4">
									<h3 class="info-text-green">APARTAMENTO 3 ALCOBAS ESQUINERO+ VESTIER + CLOSET DE LINOS + BALC&Oacute;N</h3>
									<p class="texto-h4">
										Alcoba principal con ba&ntilde;o y vestier.</br>
										2 alcobas auxiliares con closet.</br>
										Sala comedor con balc&oacute;n.</br>
										Espacio para closet de linos o punto de trabajo.</br>
										Cocina</br>
										Zona de ropas</br>
										1 ba&ntilde;o auxiliar</br>
									</p>

									<p>* Área total construida desde 77.03 mt2</p>
									<p>* Área privada construida desde 64.12 mt2</p>

									<div class="info-text-green">
										<h5>Nota: </h5>
										<ul>
											<li>terraza en pisos 1,2,7,10 y 13</li>
											<li>Vestier y zona de ropas independientes</li>
										</ul>
									</div>
									<div class="col-md-12" style="text-align: center; margin-top: 20px;">
										<img src="images/vistaCordilleraApart.jpg"/>
									</div>
								</div>
								<div class="col-md-4">
									<img class="img-recorridos img-responsive" src="images/apt1.png" />
								</div>
								<div class="col-md-4">
									<div id="torresApart1Container" class="torres-images">
										<div id="id_backT" onMouseDown="backT()"></div>
										<div class="apartamento-dual"></div>
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
											<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel2" data-slide-to="1"></li>
											<li data-target="#myCarousel2" data-slide-to="2"></li>
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
									    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
									      <span class="glyphicon glyphicon-chevron-left"></span>
									      <span class="sr-only">Previous</span>
									    </a>
									    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
									      <span class="glyphicon glyphicon-chevron-right"></span>
									      <span class="sr-only">Next</span>
									    </a>
									</div>

								</div>


							</div>
						</div>

						<div class="tab-pane" id="plantas-tab">
							<div class="wrap nav-slider-pisos">
								<ul class="nav nav-pills nav-justified">
									<li class="active"><a data-target="#myCarousel" data-slide-to="0">PISO 1</a></li>
									<li><a data-target="#myCarousel" data-slide-to="1">PISO 2</a></li>
									<li><a data-target="#myCarousel" data-slide-to="2">PISOS 3, 4, 5 Y 6</a></li>
									<li><a data-target="#myCarousel" data-slide-to="3">PISO 7</a></li>
									<li><a data-target="#myCarousel" data-slide-to="4">PISOS 8, 9 Y 14</a></li>
									<li><a data-target="#myCarousel" data-slide-to="5">PISO 10</a></li>
									<li><a data-target="#myCarousel" data-slide-to="6">PISOS 11 Y 12</a></li>
									<li><a data-target="#myCarousel" data-slide-to="7">PISO 13</a></li>
									<li><a data-target="#myCarousel" data-slide-to="8">PISO 15</a></li>
								</ul>
							</div>

							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="images/plantasambientadas/apart1/PISO1.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISO2.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISOS3_4_5_6.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISO7.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISOS8_9_14.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISO10.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISOS11_12.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISO13.png">
									</div>

									<div class="item">
										<img src="images/plantasambientadas/apart1/PISO15.png">
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>
			</div>
		</div>		
	</body>

</html>