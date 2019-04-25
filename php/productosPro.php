<?php 

 ?>
 <section id="prodMenu">
 	<div id="productosBox">
		<div id="titleMenu">
			<h1>PRODUCTOS</h1>
		</div>
	    <div id="menuBox">
	    	<div class="menuOpt left">
	    		<img src="diseño/img/paletasPro.png" alt="" class="menuOpt-img">
	    	</div>
	    	<div class="menuOpt right">
	    		<img src="diseño/img/nievesPro.png" alt="" class="menuOpt-img">
	    	</div>
 		</div>
 		<div class="png-box">
 			<img id="original_png" src="diseño/img/original.png" alt="">
 		</div>
 		<div id="menuBox">
	    	<div class="menuOpt left">
	    		<img src="diseño/img/bebidasPro.png" alt="" class="menuOpt-img">
	    	</div>
	    	<div class="menuOpt right">
	    		<img src="diseño/img/marquesitasPro.png" alt="" class="menuOpt-img">
	    	</div>
	    </div>
    </div>
  </section>
<!-- The Modal -->
<div id="myModal" class="modal close">
	<div class="container">
	  <i class="fas fa-times-circle" style="color: red"></i>
	  <div id="caption">
	  	Menú
	  </div>
		
	</div>
  <img class="modal-content" id="modal_img">
</div>
<section id="menuSection">
  <div id="menu_Box" class="textBox">
	<button id="menuButton" class="no_deco text-btn" src="diseño/img/menu.png">
		<h1 class="">Mira nuestro menú aquí</h1>
	</button>
  </div>
</section>
<section id="franquiciasPro">
	<div id="fran_Box" class="textBox">
		<h1 class="franText">Encuentra una sucursal cerca de ti</h1>
		<div id="smCircle">
			<img id="smIsla" src="diseño/img/isla.jpeg">
		</div>
		</button>
  	</div>
	<div id="mapBox">
	<iframe id = "map" src="https://www.google.com/maps/d/embed?mid=1obXbxpkwRdcSvEEWdTxP8qnRNI-PfWFc&hl=es" width="" height=""></iframe>
	</div>
</section>


<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('menuButton');
var modalImg = document.getElementById('modal_img');;
var captionText = "Menú";
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = "diseño/img/menu.png";
  captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
