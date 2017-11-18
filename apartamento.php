<?php 
include("conectdb.php");

mysql_select_db("arvir49_producto",$dbconn);

	$textType1_1=" ";
	$textType1_2=" ";
	
	$textType2_1=" ";
	$textType2_2=" ";
	
	$textType5_1=" ";
	$textType5_2=" ";
	
	$textType6_1=" ";
	$textType6_2=" ";

	$textType7_1=" ";
	$textType7_2=" ";
	
	
	$apartType1=mysql_query("SELECT * FROM horizonte WHERE type=1");

	while ($row=mysql_fetch_array($apartType1,MYSQL_ASSOC))
	{
		
		$idApartText=strval($row['idApart']);
		
		if (($row['status']==0)&&($row['idTower']==1)){
		
			$textType1_1=$textType1_1." - ".$idApartText;
			
		}
		
		if (($row['status']==0)&&($row['idTower']==2)){
		
			$textType1_2=$textType1_2." - ".$idApartText;
			
		}
	
	}
	
	
	$apartType2=mysql_query("SELECT * FROM horizonte WHERE type=2");

	while ($row=mysql_fetch_array($apartType2,MYSQL_ASSOC))
	{
		
		$idApartText2=strval($row['idApart']);
		
		if (($row['status']==0)&&($row['idTower']==1)){
		
			$textType2_1=$textType2_1." - ".$idApartText2;
			
		}
		
		if (($row['status']==0)&&($row['idTower']==2)){
		
			$textType2_2=$textType2_2." - ".$idApartText2;
			
		}
	
	}
	
	
	$apartType5=mysql_query("SELECT * FROM horizonte WHERE type=5");

	while ($row=mysql_fetch_array($apartType5,MYSQL_ASSOC))
	{
		
		$idApartText5=strval($row['idApart']);
		
		if (($row['status']==0)&&($row['idTower']==1)){
		
			$textType5_1=$textType5_1." - ".$idApartText5;
			
		}
		
		if (($row['status']==0)&&($row['idTower']==2)){
		
			$textType5_2=$textType5_2." - ".$idApartText5;
			
		}
	
	}
	
	$apartType6=mysql_query("SELECT * FROM horizonte WHERE type=6");

	while ($row=mysql_fetch_array($apartType6,MYSQL_ASSOC))
	{
		
		$idApartText6=strval($row['idApart']);
		
		if (($row['status']==0)&&($row['idTower']==1)){
		
			$textType6_1=$textType6_1." - ".$idApartText6;
			
		}
		
		if (($row['status']==0)&&($row['idTower']==2)){
		
			$textType6_2=$textType6_2." - ".$idApartText6;
			
		}
	
	}
	
	$apartType7=mysql_query("SELECT * FROM horizonte WHERE type=7");

	while ($row=mysql_fetch_array($apartType7,MYSQL_ASSOC))
	{
		
		$idApartText7=strval($row['idApart']);
		
		if (($row['status']==0)&&($row['idTower']==1)){
		
			$textType7_1=$textType7_1." - ".$idApartText7;
			
		}
		
		if (($row['status']==0)&&($row['idTower']==2)){
		
			$textType7_2=$textType7_2." - ".$idApartText7;
			
		}
	
	}
	
	$textType1_1=$textType1_1." - ";
	$textType1_2=$textType1_2." - ";
	
	$textType2_1=$textType2_1." - ";
	$textType2_2=$textType2_2." - ";
	
	$textType5_1=$textType5_1." - ";
	$textType5_2=$textType5_2." - ";
		
	$textType6_1=$textType6_1." - ";
	$textType6_2=$textType6_2." - ";
	
	$textType7_1=$textType7_1." - ";
	$textType7_2=$textType7_2." - ";
	
	
 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Apartamentos Horizonte Verde</title>
	
			<link rel="stylesheet" href="css/bootstrap.css">
			<link href="carousel.css" rel="stylesheet">
			<link rel="stylesheet" href="css/style.css">			

			
			<script src="js/jquery-2.1.3.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.bootstrap-responsive-tabs.min.js"></script>
			</head>
 
<body>
	
	<div id="container"> 
		
		<div class="codrops-top">
				<a id="btn_home" href="index.html"><b>Ir al inicio</b></a>	
				<div id="btn_down"><button id="btn_downUp" class="content-switch">Ver detalle</button></div>
			</div>
		 
		
			
		<div id="bgApt"></div>
		
		<div id="main">
		
			<div id="part1">Tipos de Apartamentos Horizonte Verde </div>
			
			<div id="part2">3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN</div> 
			<div id="part3">VISTA A LA CORDILLERA</div>
		</div>
		<div id="content" style="position:relative;top:32px;height:750px;">
		
			<div style="background:white;position:relative;width:100%;height:105%;"> 
			
			<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
      
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
            <li class="specialFont" style="color:black"><a style="color:#000;font-weight:bold;font-size:90%;" href="#2a" data-toggle="tab" id="kitchen">INTERIORES</a></li>
            <li class="specialFont" style="color:black"><a style="color:#000;font-weight:bold;font-size:90%;" href="#3a" data-toggle="tab" id="programma" > PLANTAS AMBIENTADAS</a></li>
    </ul>
    </div>

  </div>
  </nav>
	<br><div style="position:absolute;width:100%;top:180px;height:30px;"><hr size="10"/>	</div>
<div class="tab-content clearfix">
	<div class="tab-pane active" id="1a">
			<div id="container1a">
			
			<div style="position:relative;width:32.65333%;left:0px;text-align:left;vertical-align:middle;display:inline-block;display:inline-block"> 
				<div style="position:relative;text-align:left;">
				<div class="fontTitles" style="position:relative;text-align:left;width:80%;font-size:100%;">APARTAMENTO<br> 3 ALCOBAS ESQUINERO+ VESTIER + CLOSET DE LINOS + BALC&Oacute;N</div>
					<ul style="padding:0;list-style-type:none;font-size:80%;">
						<li>Alcoba principal con ba&ntilde;o y vestier.</li>
						<li>2 alcobas auxiliares con closet.</li>
						<li>Sala comedor con balc&oacute;n.</li>
						<li>Espacio para closet de linos o punto de trabajo.</li>
						<li>Cocina</li>
						<li>Zona de ropas</li>
						<li>1 ba&ntilde;o auxiliar</li>
					</ul>	

				<div style="position:relative;width:100%;margin:auto;font-size:60%;font-weight:bold;text-align:left;">
					*&Aacute;rea total construida desde 77.03 mt2
					<br>*&Aacute;rea privada construida desde 64.12 mt2
					<br><div style="color:#27baab;">Nota: terraza en pisos 1,2,7,10 y 13</div>
					<div style="position:relative;width:100%;top:20px;left:0px;color:#27baab;text-align:center;"><img src="images/vistaCordilleraApart.jpg" width="120"/> </div>
		</div>
			
				</div>
				
			</div>
					
			<div id="idApart1Img"><img src="images/apt1.png"/><div class="tour" OnMouseDown="open360('tour360/index.html',1)" title="Ver 360 - Sala y Comedor"></div></div>
					
				<div id="torresApart1">
					
					<div id="torresApart1Container">
						<div id="id_backT" onmousedown="backT()"></div>
						<div style="position:relative;display:inline-block;width:70%;height:100%;top:0px;text-align:center;">
						<div id="titleT" style="position:relative;width:100%;height:30px;font-size:70%;font-weight:bold;text-align:center;"><img id="tApart1" src="images/t1.jpg" width="100"/></div>
						<img id="id_imageT" style="position:relative;width:90%;height:auto;margin:auto;" src="images/edificio1.png"/></div>
						<div id="id_nextT" onMouseDown="nextT()"></div>
					
					</div>
					
					<div style="position:relative;top:40%;width:100%;text-align:center;">
					<div class="available"></div>
					<div id="list_apart1" style="font-size:65%;text-align:center"><? echo $textType1_1;?> </div>
					</div>
				</div>
					
					<div id="360" style="visibility:hidden;position:absolute;width:500px;height:500px;top:-245px;left:-8px;background:rgba(255,255,255,0.9);text-align:center;"> <div align="right" style="position:relative;width:95%;height:0px;top:54px;"> <div id="btnCerrar360" style="cursor:pointer;"></div></div><iframe id="id360" src=""></iframe> </div>
					
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
					
					<div id="textTorre1" style="width:60px;font-weight:normal;position:relative;display:inline-block;font-size:80%;" >TORRE 1</div> | <div id="textTorre2" onmousedown="setTorre2()" style="width:60px;position:relative;display:inline-block;font-weight:normal;font-size:80%;">TORRE 2</div>
					
					</div>
					
					</center>
					
					<div id="id_backP"></div>
					
					<div id="bg_imgPlantA" style="position:relative;height:900px;top:0px;display:inline-block;"><center><div id="titleImagePlant" style="position:relative;top:-5px;font-size:50%;font-weight:bold;">PISO 1</div></center>



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
		
				</div></div>
		
		</div>
	</div>
	

	 
<script> 

			function onWindowResize(){
			
			$("#main").css("height",window.innerHeight-40+"px");
			
			var heightContent=window.innerHeight-1+"px";
			
			$("#main-content-1").css("height", heightContent); 
			$("#main-content-2").css("height", heightContent); 
			$("#main-content-3").css("height", heightContent);
			$("#main-content-4").css("height", heightContent); 
			$("#main-content-5").css("height", heightContent);
			
			//$("#actionSection1").css("visibility", "hidden");
			
			
			//imgPlantAmbient.width=window.innerWidth*0.42;
			//bg_imgPlantA.width=window.innerWidth*0.4;
			
			//topCtrlBtn=(imgInteriores.height/3.5)*-1;
			//topCtrlBtnP=(imgPlantAmbient.height/3.4)*-1;

			$("#1a").css("height",window.innerHeight-240+"px");
			$("#2a").css("height",window.innerHeight-230+"px");
			
			$("#imgControls1").css("width",($("#imgInteriores").css("width")));
			
		}
		
		$( "#btn_down" ).click(function() {
		window.scrollTo(0, window.innerHeight);
		
});
		
		

		window.addEventListener( 'resize', onWindowResize, false);
	
		onWindowResize();
		
	
 </script>

<?

			echo '<script> 		
			
				function nextT(){
					
					$(tApart1).attr("src","images/t2.jpg");
					//$("#id_nextT").hide();
					//$("#id_backT").show();
					//$("#id_imageT").css("background","url(images/edificio2.png)");
					//$("#id_imageT").css("background-size","100% 100%");
					$(".available").css("background","url(images/disponiblesT2.png)");
					$(".available").css("background-size","100% 100%");
					list_apart1.innerText="'.$textType1_2.'";
					}
		
				function backT(){
		
					$(tApart1).attr("src","images/t1.jpg");
					//$("#id_nextT").show();
					//$("#id_backT").hide();
					//$("#id_imageT").css("background","url(images/edificio1.png)");
					//$("#id_imageT").css("background-size","100% 100%");
					$(".available").css("background","url(images/disponiblesT1.png)");
					$(".available").css("background-size","100% 100%");
					list_apart1.innerText="'.$textType1_1.'";
					} 
					
					
					
			function nextT2(){
				
			$(tApart1).attr("src","images/t2.jpg");
			//$("#id_nextT2").hide();
			//$("#id_backT2").show();
			//$("#id_imageT2").css("background","url(images/apart2_torre2.png)");
			//$("#id_imageT2").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT2.png)");
			$(".available").css("background-size","100% 100%");
			list_apart2.innerText="'.$textType2_2.'";
		}
		
		function backT2(){
			
			$(tApart1).attr("src","images/t1.jpg");
			//$("#id_nextT2").show();
			//$("#id_backT2").hide();
			//$("#id_imageT2").css("background","url(images/apart2_torre1.png)");
			//$("#id_imageT2").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT1.png)");
			$(".available").css("background-size","100% 100%");
			list_apart2.innerText="'.$textType2_1.'";
		}
				
					
		function nextT3(){
				
			$(tApart1).attr("src","images/t2.jpg");
			$("#id_nextT3").hide();
			$("#id_backT3").show();
			//$("#id_imageT3").css("background","url(images/apart3_torre2.png)");
			//$("#id_imageT3").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT2.png)");
			$(".available").css("background-size","100% 100%");
			list_apart3.innerText="'.$textType5_2.'";
		}
		
		function backT3(){
			
			$(tApart1).attr("src","images/t1.jpg");
			//$("#id_nextT3").show();
			//$("#id_backT3").hide();
			//$("#id_imageT3").css("background","url(images/apart3_torre1.png)");
			//$("#id_imageT3").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT1.png)");
			$(".available").css("background-size","100% 100%");
			list_apart3.innerText="'.$textType5_1.'";
		}



		function nextT4(){
				
			$(tApart1).attr("src","images/t2.jpg");
			//$("#id_nextT4").hide();
			//$("#id_backT4").show();
			//$("#id_imageT4").css("background","url(images/apart4_torre2.png)");
			//$("#id_imageT4").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT2.png)");
			$(".available").css("background-size","100% 100%");
			list_apart4.innerText="'.$textType6_2.'";
		}
		
		function backT4(){
			
			$(tApart1).attr("src","images/t1.jpg");
			//$("#id_nextT4").show();
			//$("#id_backT4").hide();
			//$("#id_imageT4").css("background","url(images/apart4_torre1.png)");
			//$("#id_imageT4").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT1.png)");
			$(".available").css("background-size","100% 100%");
			list_apart4.innerText="'.$textType6_1.'";
		}
					
		
		function nextT5(){
			
			$(tApart1).attr("src","images/t2.jpg");
			//$("#id_nextT5").hide();
			//$("#id_backT5").show();
			//$("#id_imageT5").css("background","url(images/apart5_torre2.png)");
			//$("#id_imageT5").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT2.png)");
			$(".available").css("background-size","100% 100%");
			list_apart5.innerText="'.$textType7_2.'";
		}
		
		function backT5(){
			
			$(tApart1).attr("src","images/t1.jpg");
			//$("#id_nextT5").show();
			//$("#id_backT5").hide();
			//$("#id_imageT5").css("background","url(images/apart5_torre1.png)");
			//$("#id_imageT5").css("background-size","100% 100%");
			$(".available").css("background","url(images/disponiblesT1.png)");
			$(".available").css("background-size","100% 100%");
			list_apart5.innerText="'.$textType7_1.'";
		}
		
				</script>';		

		?> 
 
</body>
</html>