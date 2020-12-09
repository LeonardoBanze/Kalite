<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 
  <title>Kalite</title>

</head>
<body>
  <!-- Cabeçalho -->
  <header>
  <div class="barra-topo"></div>
    <div id="top" class="container">
        <div class="row">
            <!-- marca -->
            <div class="col-md-3 logotipo-top container">
                <a href="#" class="custom-logo-link" rel="home">
                    <img  src="assets/img/logo.jpg" class="custom-logo">
                </a>
            </div>
            <div class="col-md-8 offset-1">
                <div class="row contacto">
                    <div class="col invisible-sm">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="ico-top">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h5>Ligue-nos</h5>
                                <h6>(+258) 82 52 32 273</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col invisible-sm">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="ico-top">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h5>Escreva-nos</h5>
                                <h6>contacto@kalite.co.mz</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn">
                            <i class="fas fa-file-invoice"></i>  Pedir Cotação
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--  Barra de topo termina aqui -->
    <div id="menu" class="container">
        <div class="row">
            <div class="col-md-1 text-center">
                <a href="#">
                    <i class="fas fa-home" style="font-size: 28px;margin-top:8px;color:white"></i>
                </a>
            </div>
            <div class="col-md-9">
                <nav id="site-navigation" class="links-nav">
                    <div class="menu-primario-container">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="menu-item">
                                <a href="sobre.php">Sobre-nós</a>
                            </li>
                            <li class="menu-item">
                                <a href="servicos.php">Serviços</a>
                            </li>
                            <li class="menu-item">
                                <a href="contacte.php">Contacte-nos</a>
                            </li>
                        </ul>
                    </div> 
                </nav><!-- #site-navigation -->
            </div>
            <div class="col-md-2 text-right ">
                <button class="btn">
                    <i class="fas fa-search">  </i>
                </button>
            </div>

        </div>

    </div>
</header>
<!--Carousel Wrapper-->
<div id="banner_slide" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#banner_slide" data-slide-to="0" class="active"></li>
    <li data-target="#banner_slide" data-slide-to="1"></li>
    <li data-target="#banner_slide" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block foto" src="assets/img/4.jpg"
          alt="First slide">
      </div>
      <div class="carousel-caption">
        <div id="bnn" class="conteiner">
          <h1>Serviços de Limpeza</h1>
          <h6>Temos uma grande experiência no ramo e garantimos qualidade nos serviços prestados, pontualidade, profissionais qualificados </h6>
           <div>
            <a href="#" class="">
              <button class="btn btn-default">
                <i class="fas fa-file-invoice"> </i> Pedir Cotação
              </button>
            </a>
          </div>
        </div> <!-- #bnn -->
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block foto" src="assets/img/1.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <div id="bnn">
          <h1>Serviços de jardinagem</h1>
          <h6>Controle de crescimento das plantas de uma área sobre a outra evitando-se assim a descaracterização do jardinagem</h6>
          <div>
            <a href="#" class="">
              <button class="btn btn-default">
                <i class="fas fa-file-invoice"> </i> Pedir Cotação
              </button>
            </a>
          </div>
        </div> <!-- #bnn -->
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block foto" src="assets/img/3.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <div id="bnn">
          <h1>Serviços de Fumigação e <br>controle de pragas</h1>
          <h6>Com acesso a uma vasta gama de serviços de Fumigação, podemos garantir a mais adequada </h6>
          <div>
            <a href="#" class="">
              <button class="btn btn-default">
                <i class="fas fa-file-invoice"> </i> Pedir Cotação
              </button>
            </a>
          </div>
        </div> <!-- #bnn -->
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="assets/img/111.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <div id="bnn">
          <h1>Empregada doméstica</h1>
          <h6>Cada vez há menos tempo para as tarefas domésticas e a ajuda de uma empregada doméstica externa</h6>
          <div>
            <a href="#" class="">
              <button class="btn btn-default">
                <i class="fas fa-file-invoice"> </i> Pedir Cotação
              </button>
            </a>
          </div>
        </div> <!-- #bnn -->
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#banner_slide" role="button" data-slide="prev">
    <span class="fa fa-angle-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#banner_slide" role="button" data-slide="next">
    <span class="fa fa-angle-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- So -->