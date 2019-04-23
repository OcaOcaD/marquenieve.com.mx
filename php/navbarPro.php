<?php 
  //PARAMETROS
$pestaña_actual= "index.php";
  if ( $pestaña_actual == "franquicias" ){
      $link_productos = "window.location.href = 'indexPro.php#prodMenu'";
      $link_franquicias = "#";
      $link_central = "window.location.href = 'indexPro.php#videoBox'";
      $link_sucursales = "window.location.href = 'indexPro.php#franquiciasPro'";
      $link_contacto = "window.location.href = 'indexPro.php#contacto'";
      $ul_color_class = "franquicias_ul";
    }else if ( $pestaña_actual == "index.php" ){
      $link_productos = "goToByScroll('#prodMenu')";
      $link_franquicias = "window.location.href = 'fran.php'";
      $link_central = "goToByScroll('#videoBox')";
      $link_sucursales = "goToByScroll('#franquiciasPro')";
      $link_contacto = "goToByScroll('#contacto')";
      $ul_color_class = "index_ul";
    }
  #
 ?>
    <div id="navBox" class="">
      <div id="shadow"></div>
      <div id="object">
        <nav id="navBar-box" class="navbar navbar-expand-lg">
          <button id="togglerBtn" class="navbar-toggler noDeco" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span id="bars-icon" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                <img id="smallLogo" src="diseño/img/logoPro.png" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <button onclick="<?php echo $link_productos ?>" class="noDeco navButton">
                PRODUCTOS
              </button>
              </li>
              <li class="nav-item">
                <button onclick="<?php echo $link_sucursales ?>" class="noDeco navButton">
                SUCURSALES
              </button>
              </li>
              <li id="logoLi" class="nav-item">
                <button onclick="<?php echo $link_central ?>" class="noDeco navButton">
                <img id="navLogo" src="diseño/img/logoPro.png">
              </button>
              </li>
              <li class="nav-item">
                <button onclick="<?php echo $link_franquicias ?>"class="noDeco navButton">
                FRANQUICIAS
              </button>
              </li>
              <li class="nav-item">
                <button onclick="<?php echo $link_contacto ?>" class="noDeco navButton">
                CONTACTO
              </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      
    </div>
