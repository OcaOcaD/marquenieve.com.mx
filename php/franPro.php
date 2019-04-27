
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>A pure CSS parallax demo with navgation and smooth scrolling by Keith Clark</title>
	<link rel="stylesheet" type="text/css" href="../diseño/parallax.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Permanent+Marker|Roboto+Condensed" rel="stylesheet">

</head>

<body>
	<?php //include("navbarPro.php"); ?>
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

  <div class="demo__info">
    Pure CSS parallax scrolling with navigation and CSS scrolling with scroll-behavior: smooth by Keith Clark. Please read the <a href="../">blog post</a> for more information.
  </div>

  <nav>
    <ul class="nav">
      <li><a href="#slide-1">Slide 1</a></li>
      <li><a href="#slide-2">Slide 2</a></li>
      <li><a href="#slide-3">Slide 3</a></li>
      <li><a href="#slide-4">Slide 4</a></li>
      <li><a href="#slide-5">Slide 5</a></li>
      <li><a href="#slide-6">Slide 6</a></li>
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

    <div class="slide" id="slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div class="slide__text">
          <h1 id="slide-2-title">Somos una franquicia de baja inversión con alto margen de utilidad</h1>
        </div>
      </div>
    </div>

    <div class="slide" id="slide-3">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div class="slide__text">
          <h1 id="slide-3-title">Slide 3 title</h1>
          <p>Bacon ipsum dolor amet alcatra beef meatloaf brisket beef ribs meatball tenderloin shank ball tip ribeye pig pastrami filet mignon. Sirloin tail fatback venison shank salami. Picanha pastrami venison meatball kevin pork chop leberkas. Meatloaf tenderloin leberkas pancetta hamburger cow kielbasa, filet mignon tri-tip beef ribs.</p>
          <p>Bacon ipsum dolor amet alcatra beef meatloaf brisket beef ribs meatball tenderloin shank ball tip ribeye pig pastrami filet mignon. Sirloin tail fatback venison shank salami. Picanha pastrami venison meatball kevin pork chop leberkas. Meatloaf tenderloin leberkas pancetta hamburger cow kielbasa, filet mignon tri-tip beef ribs.</p>
        </div>
        <div class="slide__image">
          <svg viewBox="0 0 400 425" width="400" height="425"><use xlink:href="#polaroid"/></svg>
        </div>
      </div>
    </div>

    <div class="slide" id="slide-4">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div class="slide__text">
          <h1 id="slide-4-title">Slide 4 title</h1>
          <p>Bacon ipsum dolor amet alcatra beef meatloaf brisket beef ribs meatball tenderloin shank ball tip ribeye pig pastrami filet mignon. Sirloin tail fatback venison shank salami. Picanha pastrami venison meatball kevin pork chop leberkas. Meatloaf tenderloin leberkas pancetta hamburger cow kielbasa, filet mignon tri-tip beef ribs.</p>
        </div>
        <div class="slide__image">
          <svg viewBox="0 0 400 425" width="400" height="425"><use xlink:href="#polaroid"/></svg>
        </div>
      </div>
    </div>

    <div class="slide" id="slide-5">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div class="slide__text">
          <h1 id="slide-5-title">Slide 5 title</h1>
          <p>Bacon ipsum dolor amet alcatra beef meatloaf brisket beef ribs meatball tenderloin shank ball tip ribeye pig pastrami filet mignon. Sirloin tail fatback venison shank salami. Picanha pastrami venison meatball kevin pork chop leberkas. Meatloaf tenderloin leberkas pancetta hamburger cow kielbasa, filet mignon tri-tip beef ribs.</p>
        </div>
        <div class="slide__image">
          <svg viewBox="0 0 400 425" width="400" height="425"><use xlink:href="#polaroid"/></svg>
        </div>
      </div>
    </div>

    <div class="slide" id="slide-6">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div class="slide__text">
          <h1 id="slide-6-title">Slide 6 title</h1>
          <p>Bacon ipsum dolor amet alcatra beef meatloaf brisket beef ribs meatball tenderloin shank ball tip ribeye pig pastrami filet mignon. Sirloin tail fatback venison shank salami. Picanha pastrami venison meatball kevin pork chop leberkas. Meatloaf tenderloin leberkas pancetta hamburger cow kielbasa, filet mignon tri-tip beef ribs.</p>
        </div>
        <div class="slide__image">
          <svg viewBox="0 0 400 425" width="400" height="425"><use xlink:href="#polaroid"/></svg>
        </div>
      </div>
    </div>

  </div>
  <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-10812217-1', 'auto');
ga('send', 'pageview');
</script>



</body>
</html>