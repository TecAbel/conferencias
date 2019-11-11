<!--Autor Abel-->
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet"> 


  <!--leaflet-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php','',$archivo);

    if($pagina == 'index' or $pagina == 'invitados'){
      echo '<!--colorbox-->
      <link rel="stylesheet" href="css/colorbox.css">';
    }
    elseif ($pagina == 'conferencias') {
      echo '<!--lightbox-->
      <link rel="stylesheet" href="css/lightbox.css">';
    }
  ?>
  
  
</head>

<body class="<?php echo $pagina?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header class="site-hero">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube-square"></i></a>
        </nav>
        <div class="informacion-evento clearfix">
          <p class="fecha"><i class="far fa-calendar-alt"></i> 12/12/19</p>
          <p class="ciudad"><i class="fas fa-map-marker-alt"> </i></p>
          <h1 class="nombre-sitio">CDMXWebCamp</h1>
        <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
        </div>
        
      </div>
    </div>
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index">
            <img src="img/logo.svg" alt="LOGO">
        </a>
        
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal">
        <a href="conferencias">Conferencia</a>
        <a href="calendario">Calendario</a>
        <a href="invitados">Invitados</a>
        <a href="registro">Reservaciones</a>
      </nav>
    </div>
  </div>