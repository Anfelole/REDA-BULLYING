<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CONOCE_MORELOS</title>
    
 <link rel="stylesheet" type="text/css" href="css\tarjetas.css">
 <link rel="stylesheet" type="text/css" href="css\estilo.css">
    <link rel="stylesheet" type="text/css" href="font.css">
    <script src="js/valida.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>CONOCE MORELOS</h3>
            </div>

            <ul class="list-unstyled components">
                <p>OPCIONES</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">PRINCIPAL</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="login.php">INICIO SESION</a>
                        </li>
                        <li>
                            <a href="registro.php">REGISTRATE</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="todos.php">CONOCE TODOS</a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">LUGARES FAVORITOS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="tepoz.php" >TEPOZTLAN</a>
                        </li>
                        <li>
                            <a href="">TLAYACAPAN</a>
                        </li>
                        <li>
                            <a href="oaxtepec.php">OAXTEPEC</a>
                        </li>
                    </ul>
                </li>
              
                <li>
                    <a href="#" id="uno" onclick='cambiar()'>DESCUENTOS</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenue" data-toggle="collapse" aria-expanded="false">HOSPEDAJE</a>
                    <ul class="collapse list-unstyled" id="homeSubmenue">
                        <li>
                            <a href="cabañas.php">CABAÑAS</a>
                        </li>
                        <li>
                            <a href="hoteles.php">HOTELES</a>
                        </li>
                   
                </li>
            </ul>
            </ul>

            
                <li>
                    <a href="https://www.google.com/intl/es-419/gmail/about/" class="article">ENVIAR CORREO</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU PRINCIPAL</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Inicia Sesion</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="registro.php">Registrate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="uno" onclick='cambiar()'>Descuentos y mas</a>
                           
                             </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
          
                <img src="img/tl9.jpg" alt="" style="width: 100%;" >
           
 

    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TLAYACAPNA HISTORIA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">GASTRONOMIA</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent" >
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <p style="background-color:#FFF5F3">En la cima del tronco piramidal de la geografía mexicana, rodeado de altas montañas, había un lago mitad dulce y mitad salobre, el cual bordeaba muchos pueblos de Xochimilco. Del lado sur del lago, salía una importante vereda, atravesaba la sierra del Ajusco (cuya altitud es de 3,952 metros sobre el nivel medio del mar) y, a doce leguas, en las estribaciones orientales, está el pueblo que hoy se conoce como Tlayacapan. Los primeros habitantes fueron los olmecas. Se sabe algo acerca de los antiguos pobladores, gracias a los descubrimientos arqueológicos, al estudio de las piedras, del barro, usando rigurosos métodos científicos para escudriñar, excavar y desenterrar la historia.</p>
<p style="background-color:#FFF5F3">Se encuentra 1630 metros por encima del nivel del mar; por lo tanto, su clima es templado subhúmedo, con lluvias en verano = C(w). Su temperatura media es de 16º C, con vientos que corren del oeste por las colinas del sureste.</p>​

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p >La comida típica tradicional es el mole verde de pepita (pipían) acompañado con tamales de sal, charales y frijoles blancos, mole rojo de pepita también con tamales de sal y fríjol cocido, mole de guajolote, salsa verde, tlacoyos de haba, fríjol y shales. Asimismo, forman parte de la comida típica las tradicionales frutas de horno, los mamones y soletas acompañadas de unas nieves de sabores como postre.</p>
      
  </div>
  </div>
  <h1 align="center">Eventos principales</h1>
  <div class="card mb-3">
  <img class="card-img-top" src="img/poza.jpg" alt="Card image cap" style="height: 250px; width:100%">
  <div class="card-body">
    <h5 class="card-title">Poza Azul</h5>
    <p class="card-text">Es un balneario sencillo con albercas y unos cuantos toboganes, lo más bonito de aquí es la poza azul, que es un manantial de agua cristalina rodeado de rocas desde donde te puedes aventar clavados o simplemente relajarte, de hecho aquí venían los emperadores aztecas a bañarse. Lo atraviesa un río de aguas cristalinas, rodeado de árboles milenarios y pequeños manantiales a lo largo de un sendero. Cuenta con un pequeño puente colgante y temazcal.</p>
    <button class="btn btn-dark" > <a href="https://goo.gl/maps/fLtjqaBvVnntVnGh8"> IR AL MAPA</a></button>
    
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Parque De Los Venados Nepopualco</h5>
    <p class="card-text">Encontraras desde cabañas, mucha fauna y flora con la que puedes pasar un rato de tranquilidad, ven yo se que quieres</p>
    <button class="btn btn-dark" > <a href="https://goo.gl/maps/9N6fvTT6xhspaBLPA"> IR AL MAPA</a></button>
  </div>
  <img class="card-img-bottom" src="img/v.jpg" alt="Card image cap" style="height: 250px; width:100%">
</div>
   

<section id="galeria" class="container">
    <div class="text-center pt-5" >
        <h1>GALERIA</h1>
        <p>NUESTRAS MEJORES TOMAS EXCLUSIVAS PARA TI</p>
    <div class="row" >
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="img/tl1.jpg">
        </div>

        <div class="col-lg-4 col-md-4 ">
            <img src="img/tl2.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/tl3.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/tl4.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/tl5.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/tl6.jpg">
        </div>


    </div>
    </div>

</section>


<!--SLIDER BAR DE LAS REDES SOCIALES DE LA PAGINA PARA QUE SEAN CONSULTADOS ES OPCIONAL PEOR ES UN TEMA DE CONTACTO A LOS QUE DESARROLARON LA PAGINA, YA QUE SE PODRIA DAR PUBLICIDAD -->
<div class="social-bar">
    <a href="https://www.facebook.com/Morelos-en-mi-corazon-105306764536433/?modal=admin_todo_tour" class="icon icon-facebook2"  target="_blank"></a>
    <a href="https://www.instagram.com/morelosenmicorazon/" class="icon icon-instagram"  target="_blank"></a>
    <a href="https://www.youtube.com/watch?v=o8JEjYs2Ynw" class="icon icon-youtube"    target="_blank"></a>
    <a href="https://open.spotify.com/playlist/3m03BiBjvZcDytjTo4lUb8?si=L9Wuvg-3TOGCe_TyY0KPlA" class="icon icon-spotify"    target="_blank"></a>
    <a href="https://www.gmail.com/" class="icon icon-mail"       target="_blank"></a>
</div>

            
        
        </div>
    
    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#dismiss').on('click', function () {
                $('#sidebar').removeClass('active');
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                 $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>
