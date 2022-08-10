<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CONOCE_MORELOS</title>

        <link rel="stylesheet" type="text/css" href="css\estilo.css">  
    <script src="js/valida.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="font.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css\footer.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    
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
                            <a href="tepoz.php">TEPOZTLAN</a>
                        </li>
                        <li>
                            <a href="tlaya.php">TLAYACAPAN</a>
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
                <li>
                    <a href="https://www.google.com/intl/es-419/gmail/about/" >ENVIAR CORREO</a>
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
                            <li class="nav-item active">
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


<header>
    <div class="overlay">
<h1>MORELOS EN TU <img src="img\corazon.png"></h1>
<h4>Conoce mas sobre el estado de Morelos y todas las tradiciones que tiene, sus pueblos magicos, costumbres y MAS</h4>
<h2>¡VIVE UNA EXPERIENCIA INOLVIDABLE!</h2>
    <br>
</div>
</header>

<!--SLIDER BAR DE LAS REDES SOCIALES DE LA PAGINA PARA QUE SEAN CONSULTADOS ES OPCIONAL PERO ES UN TEMA DE CONTACTO A LOS QUE DESARROLARON LA PAGINA, YA QUE SE PODRIA DAR PUBLICIDAD -->
<div class="social-bar">
    <a href="https://www.facebook.com/Morelos-en-mi-corazon-105306764536433/?modal=admin_todo_tour" class="icon icon-facebook2"  target="_blank"></a>
    <a href="https://www.instagram.com/morelosenmicorazon/" class="icon icon-instagram"  target="_blank"></a>
    <a href="https://www.youtube.com/watch?v=o8JEjYs2Ynw" class="icon icon-youtube"    target="_blank"></a>
    <a href="https://open.spotify.com/playlist/3m03BiBjvZcDytjTo4lUb8?si=L9Wuvg-3TOGCe_TyY0KPlA" class="icon icon-spotify"    target="_blank"></a>
    <a href="https://www.gmail.com/" class="icon icon-mail"       target="_blank"></a>
</div>

<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="card">
<img class="card-img-top" src="img/mas.jpg" alt="Mi Imagen">
<div class="card-body">
<h4 class="card-title">CONOCE TODOS LOS LUGARES</h4>
<p class="card-text">Descubre nuevos mundos en los que puedas divertirte con la persona que mas quieras
</p>
<a href="todos.php" class="btn btn-primary">CLIC AQUI</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<img class="card-img-top" src="img/otros.jpg" alt="Mi Imagen">
<div class="card-body">
<h4 class="card-title">ACTIVIDADES</h4>
<p class="card-text">¿Salida con amigos? Descubre los mejores lugares de Morelos, sus parques, balneanearios, restaurantes y mas</p>
<a href="actividades.php" class="btn btn-primary">CLIC AQUI</a>
</div>
</div> </div>
<div class="col-md-4">
<div class="card">
<img class="card-img-top" src="img/hotel.jpg" alt="Mi Imagen">
<div class="card-body">
<h4 class="card-title">HOSPEDAJE</h4>
<p class="card-text">¿Estas cansado? Descubre las mejores opciones de hospedaje para los mejores momentos</p>
<a href="hospedajes.php" class="btn btn-primary">CLIC AQUI</a>
</div>
</div> </div>

</div>

</div>

<section id="galeria" class="container">
    <div class="text-center pt-5" >
        <h1>GALERIA</h1>
        <p>NUESTRAS MEJORES TOMAS EXCLUSIVAS PARA TI</p>
    <div class="row" >
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="img/1.jpg">
        </div>

        <div class="col-lg-4 col-md-4 ">
            <img src="img/2.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/3.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/4.jpeg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/5.jpg">
        </div>
        <div class="col-lg-4 col-md-4 ">
            <img src="img/6.jpg">
        </div>


    </div>
    </div>

</section>
            <div class="line"></div>
            <div align="center" style="background-color: #FFF7F5">
                
            <h3>RECOMENDACION</h3>
            <p>Para vivir una experiencia mejor te recomendamos registrarte, si no sabes donde <a href="registro.php">CLIC AQUI</a> si ya tienes cuenta <a href="login.php">CLIC AQUI</a> ¡Vive al maximo!</p>
            </div>

            <div class="line"></div>
              <footer class="footer-distributed">
            <div class="footer-left">
                <h3>CONOCE<span>MORELOS</span></h3>
                <p class="footer-company-name">MIEK COMPANY &copy; 2020</p>
            </div>
            
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Libramiento Cuautla-Oaxaca S/N Juan Morales</span> Cuautla, Morelos</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+52 7351782764</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">miekcompany@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>Anunciate con nostros</span>
                    Quieres que mas personas conozcan tu establecimiento contactos &amp; vivamos esta gran experiencia juntos.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
</footer>

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