<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apartamentos Horizonte Verde</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll-page.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
		<div id="first-section">
			
			<div class="codrops-top">
				<a id="btn_home" href="index.html">
					<b>Ir al inicio</b>
				</a>
				<button class="content-switch" data-target-spy="#second-section" data-timelaps="2500">Ver detalle</button>
			</div>



			<div id="bgApt"></div>

			<div id="main">

				<div id="part1">Tipos de Apartamentos Horizonte Verde </div>

				<div id="part2">3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN</div>
				<div id="part3">VISTA A LA CORDILLERA</div>
			</div>
		</div>
		<div class="content" id="second-section">
			<header>
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav nav-pills head-menu">
							<input type="hidden" id="selected_menu_item" value="=$selectedMenuId; ?>" />
							<li class="active specialFont">
								<a style="color:#000;font-weight:bold;font-size:90%;" href="#1a" data-toggle="tab" id="welcome">
									INFORMACI&Oacute;N
								</a>
							</li>
							<li class="specialFont" style="color:black">
								<a style="color:#000;font-weight:bold;font-size:90%;" href="#2a" data-toggle="tab" id="kitchen">INTERIORES</a>
							</li>
							<li class="specialFont" style="color:black">
								<a style="color:#000;font-weight:bold;font-size:90%;" href="#3a" data-toggle="tab" id="programma"> PLANTAS AMBIENTADAS</a>
							</li>
							<li class="specialFont" style="color:black">
								<button class="content-switch" data-target-spy="#first-section" data-timelaps="2500"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<section>
				<div class="tab-content">
					<div class="tab-pane active" id="1a">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-4">
								<div class="fontTitles">
									APARTAMENTO 3 ALCOBAS ESQUINERO+ VESTIER + CLOSET DE LINOS + BALC&Oacute;N
								</div>
								<ul>
									<li>Alcoba principal con ba&ntilde;o y vestier.</li>
									<li>2 alcobas auxiliares con closet.</li>
									<li>Sala comedor con balc&oacute;n.</li>
									<li>Espacio para closet de linos o punto de trabajo.</li>
									<li>Cocina</li>
									<li>Zona de ropas</li>
									<li>1 ba&ntilde;o auxiliar</li>
								</ul>

								*&Aacute;rea total construida desde 77.03 mt2
								<br>*&Aacute;rea privada construida desde 64.12 mt2
								<br>
								<div>
									Nota: terraza en pisos 1,2,7,10 y 13
								</div>
								<img src="images/vistaCordilleraApart.jpg"/>
							</div>
							<div class="col-md-4">
								<img class="img-responsive" src="images/apt1.png" />
							</div>
							<div class="col-md-4">
								<div id="torresApart1">
					
									<div id="torresApart1Container">
										<div id="id_backT"></div>
										<div style="position:relative;display:inline-block;width:70%;height:100%;top:0px;text-align:center;">
											<div id="titleT"><img id="tApart1" src="images/t1.jpg" width="100"/></div>
											<div class="apartamento-dual"></div>
										</div>
										<div id="id_nextT"></div>
									
									</div>
									
									<div>
										<div class="available"></div>
										<div id="list_apart1"><? echo $textType1_1;?> </div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="2a" style="position:relative;width:100%;text-align:center;">

						<div id="container2a">


							<div id="divImgInteriores" style="position:relative;width:100%;height:100%; top:0px;left:0px;">



								<div id="myCarousel2" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
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
									<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>

							</div>


						</div>
					</div>

					<div class="tab-pane" id="3a" style="position:relative;width:100%;vertical-align:top;">

						<center>

							<div style="position:relative;top:-10px;font-size:60%;cursor:pointer;">

								<div id="textTorre1" style="width:60px;font-weight:normal;position:relative;display:inline-block;font-size:80%;">TORRE 1</div> |
								<div id="textTorre2" onmousedown="setTorre2()" style="width:60px;position:relative;display:inline-block;font-weight:normal;font-size:80%;">TORRE 2</div>

							</div>

						</center>

						<div id="id_backP"></div>

						<div id="bg_imgPlantA" style="position:relative;height:900px;top:0px;display:inline-block;">
							<center>
								<div id="titleImagePlant" style="position:relative;top:-5px;font-size:50%;font-weight:bold;">PISO 1</div>
							</center>



							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
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
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>

						</div>

						<div id="id_fwdP"></div>
					</div>

				</div>
			</section>
		</div>
	</body>

</html>