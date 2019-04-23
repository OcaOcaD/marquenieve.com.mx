<?php 
	$path = "../diseño/productos";
	$file_dir = scandir( $path );
      $imagen = array();
      foreach ($file_dir as $i => $file){
      	echo $path."/".$file."<br>";
      }
 ?>