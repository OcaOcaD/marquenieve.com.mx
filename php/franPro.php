
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Franquicias</title>
	<link rel="stylesheet" type="text/css" href="../diseño/parallax.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Permanent+Marker|Roboto+Condensed" rel="stylesheet">

</head>

<body>
	<?php 
	$pestaña_actual= "franquicias";
	 ?>
	<?php include("../plantillas/headersF.html"); ?>
	<?php include("navbarPro.php"); ?>
	<?php include("../plantillas/scripts.html"); ?>
  <!-- svg is defined here because of a Safari bug with <use> -->
  <svg>
    <defs>
      <g id="p">
        <path opacity=".2" d="M0 2h252s-3.3 40.7-2.7 128.3C249 216 252 272 252 272s-88-2-124.3-2C91.3 270 0 272 0 272V0z"/><path fill="#f4f3f1" d="M0 0h248v270H0z"/><path fill="#4f5150" d="M8 10h233v203H8z"/>
      </g>
      <g id="polaroid">
        <use xlink:href="#p" transform="rotate(15)" x="175" y="50"/>
        <use xlink:href="#p" transform="rotate(-5)" x="5" y="25"/>
      </g>
    </defs>
  </svg>


  <nav>
    <ul class="nav">
      <li><a href="#slide-1">Bienvenido</a></li>
      <li><a href="#slide-2">Baja inversión</a></li>
      <li><a href="#slide-3">Modalidades</a></li>
      <li><a href="#slide-5">Inversión</a></li>
      <li><a href="#slide-6">Productos</a></li>
    </ul>
  </nav>

  <div class="slides">
    <div class="slide" id="slide-1">
    <div class="slide__content">
    	<div id="slide_bg1" class="slide__bg"></div>
	    <img id = "pngFront" src="../diseño/img/nieveFresa.png">
    	<div id="tituloBox">
	    	<h1 id="slide-1-title">¡Hola!</h1>
    	</div>

    </div>
	</div>

    <div class="slide" id="slide-2">
        <div class="slide__text">
          <h1 id="slide-2-title">Somos una franquicia de baja inversión con alto margen de utilidad</h1>
        </div>
      <div class="slide__bg"></div>
    </div>

    <div class="slide" id="slide-3">
      <div id="sContent3" class="slide__content">
		<div class="slide__left">
			<img src="../diseño/productos/marquenieve nutella.jpg">         
        </div>
        <div class="slide__right">
         	<div class="block">
         		<h1>
         			¡Gracias por tu interes en marquesitas!
         		</h1>
         		<h2>
         			TÚ puedes ser el dueño de tu propia franquicia MARQUENIEVE
         		</h2>
         		<h2>Y sumarte a éste exitoso negocio e inovador modelo</h2>
         		<h3>Puedes elegir entre éstos dos modelos</h3>
         		<div class="flex">
         			<img src="../diseño/img/puntoFijo.png" alt="">
         			<img src="../diseño/img/puntoMovil.png" alt="">
         		</div>
         	</div>
        </div>
      </div>
    </div>


    <div class="slide" id="slide-5">
      <div class="slide__bg"></div>
      <div class="slide__content">
      	<div class="slide__title">
      		<h1 id="solicitud" onclick="window.location.href = 'https://www.daconsultoria.com/mailing/2017/MARQUESITAS/Contacto/FormatoDeSolicitud/RegistroContacto/index.html';">Solicitud de franquicia aquí</h1>
      	</div>
		<div id="slide__img">
			
		</div>
      </div>
    </div>
	
    <div class="slide" id="slide-6">
		<section id="prodMenuF">
		 	<div id="productosBox">
				<div id="titleMenu">
					<h1>NUESTROS PRODUCTOS</h1>
				</div>
			    <div id="menuBox">
			    	<div class="menuOpt left">
			    		<img src="../diseño/img/paletasPro.png" alt="" class="menuOpt-img">
			    	</div>
			    	<div class="menuOpt right">
			    		<img src="../diseño/img/nievesPro.png" alt="" class="menuOpt-img">
			    	</div>
		 		</div>
		 		<div class="png-box">
		 			<img id="original_png" src="../diseño/img/original.png" alt="">
		 		</div>
		 		<div id="menuBox">
			    	<div class="menuOpt left">
			    		<img src="../diseño/img/bebidasPro.png" alt="" class="menuOpt-img">
			    	</div>
			    	<div class="menuOpt right">
			    		<img src="../diseño/img/marquesitasPro.png" alt="" class="menuOpt-img">
			    	</div>
			    </div>
		    </div>
		  </section>
      </div>
      <div id="equipo">
      	  <div class="slide__bg"></div>
	      <div class="slide__text">
	      	<strong><h1>Seremos un mismo equipo</h1></strong>
	      </div>
		      <div class="normal__text">
				<strong><h2>Trabajamos de la mano contigo para asegurar el éxito de tu negocio.</h2></strong>
	      	  </div>
			  <div class="normal__text">
				<strong><h2>Te asesoramos para encontrarel lugar ideal para tu negocio.</h2></strong>
			  </div>
			  <div class="normal__text">
				<strong><h2>Tiempo de arranque</h2></strong>
			  </div>
			  <div class="normal__text">
				<p>1 a 2 meses a partir del deposito y la firma del contrato</p>
				<small>
					<p>Precios más IVA</p>
					<p>NOTA: La inversión de equipo e instalación varía dependiendo al tamaño del local.</p>
				</small>
			  </div>
      	  	      	
      </div>
    <?php include("../footer.html") ?>
    </div>
    <?php include("../plantillas/scripts.html"); ?>
</body>
</html>