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
                            <a href="php/salir.php">CERRAR SESION</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="todosu.php">CONOCE TODOS</a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">LUGARES FAVORITOS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" >TEPOZTLAN</a>
                        </li>
                        <li>
                            <a href="tlayau.php">TLAYACAPAN</a>
                        </li>
                        <li>
                            <a href="oaxtepecu.php">OAXTEPEC</a>
                        </li>
                    </ul>
                </li>
              
                <li>
                    <a href="descuentos.php" >DESCUENTOS</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenue" data-toggle="collapse" aria-expanded="false">HOSPEDAJE</a>
                    <ul class="collapse list-unstyled" id="homeSubmenue">
                        <li>
                            <a href="cabañasu.php">CABAÑAS</a>
                        </li>
                        <li>
                            <a href="hotelesu.php">HOTELES</a>
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
                                <a class="nav-link" href="inicio.php">Inicio</a>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="descuentos.php" >Descuentos y mas</a>
                           
                             </li>
                                <li>
                            <a href="php/salir.php" class="btn btn-info">CERRAR SESION</a>
                        </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
          
                <img src="img/ppp.jpg" alt="" style="width: 100%;" >
           
 

    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TEPOZTLAN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">GASTRONOMIA</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent" >
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <p style="background-color:#FFF5F3">Tepoztlán es un pueblo mexicano al sur de la Ciudad de México. Es conocido por ser el lugar de nacimiento de Quetzalcóatl, el dios azteca representado con una serpiente emplumada, y por su mercado de artesanías semanal. Un empinado sendero llega a la pirámide azteca del Tepozteco, en la cima de un cerro sobre la ciudad. El Exconvento de Tepoztlán es un antiguo monasterio dominicano del siglo XVI y tiene un museo de historia local. El Museo Carlos Pellicer adyacente exhibe arte prehispánico.</p>
<p style="background-color:#FFF5F3">Código postal: 62520 - 62529</p>​

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p style="background-color:#FFF5F3">1.- Gorditas de maíz Tortillas gruesas con masa de manteca y queso.</p>
      <p style="background-color:#FFF5F3">2,Mole rojo de guajolote Preparado con chiles milato, ancho y guajillo, diversas especias y servido con carne de guajolote.</p>
      <p style="background-color:#FFF5F3">3.Nieves artesanales Se pueden encontrar las clásicas como fresa y limón o de sabores exóticos como zapote, pitaya, lichi, sandía y má</p>
      <p style="background-color:#FFF5F3">Tortitas de colorín Preparadas con huevo, jitomates, chile chipotle y flores de colorín.</p>
      <p style="background-color:#FFF5F3">4.Tlacoyos Tortilla rellena de frijoles y habas cocinada en comal y servida con salsa y queso.</p>
  </div>
  </div>
  <h1 align="center">Eventos principales</h1>
  <div class="card mb-3">
  <img class="card-img-top" src="img/cerro.jpg" alt="Card image cap" style="height: 250px; width:100%">
  <div class="card-body">
    <h5 class="card-title">Cerro del Tepozteco</h5>
    <p class="card-text">Un lugar donde se mezcla todo, la calidez de la gente, el color del tianguis, la cultura, su historia, la diversidad de la comida y el contacto con la naturaleza , es una mezcla que hace un Pueblo Mágico, se recomienda llegar el sábado, comer y caminar por el pueblo, visitar el exconvento y la iglesia así como el mercado, hay muchos hoteles de diferentes precios y en el centro, ya en la noche puedes salir a algún bar y pasar un rato agradable cuentan con buena seguridad, ya el domingo subir temprano al Tepozteco , de preferencia desayunar antes y llevar agua, vale la pena el esfuerzo y mas el llegar hasta arriba donde se encuentra la piramide , ahí se puede contemplar una muy buena vista del valle, muy recomendable la visita a Tepoztlan y subir al Tepozteco</p>
    <button class="btn btn-dark" > <a href="https://goo.gl/maps/JDkrJUtEySbzGDoV6"> IR AL MAPA</a></button>
    
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tepozcuentos</h5>
    <p class="card-text">la venta. ¡Un montón de buen carácter mexicano! Recomiendo visitar.</p>
    <button class="btn btn-dark" > <a href="https://goo.gl/maps/9EEwbVJAS3ZktvFF6"> IR AL MAPA</a></button>
  </div>
  <img class="card-img-bottom" src="img/tc.jpg" alt="Card image cap" style="height: 250px; width:100%">
</div>
   

<section id="galeria" class="container">
    <div class="text-center pt-5" >
        <h1>GALERIA</h1>
        <p>NUESTRAS MEJORES TOMAS EXCLUSIVAS PARA TI</p>
    <div class="row" >
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="img/t1.jpg">
        </div>

        <div class="col-lg-4 col-md-4 ">
            <img src="img/t2.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/t3.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/t4.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/t5.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/t6.jpg">
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
