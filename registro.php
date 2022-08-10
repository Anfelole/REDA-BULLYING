<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CONOCE_MORELOS</title>
   <?php require_once "scripts.php"; ?>
    <script src="js/valida.js"></script>
     <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
  <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                         <div style="text-align: right;">
                        <a href="index.php" class="btn btn-default">MENU PRINCIPAL</a>
                    </div>
                    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Inicia Sesion</a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="registro.php">Registrate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="uno" onclick='cambiar()'>Descuentos y mas</a>
                           
                             </li>
                          
                        </ul>
                    </div>
                </div>
            </nav>
     


      
   
    <br>
<div class="container" style="background-color: #EEDFDC">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-5">
            <div class="panel panel-danger">
                <div class="panel panel-heading" align="center"><h2>Registro de usuario</h2></div>
                <p align="center">¡Vive una experiencia a lo maximo!</p>
                <div class="panel panel-body">
                    <form id="frmRegistro">
                    
                    <label>Nombre</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="" autofocus>
                    
                    <label>Apellido</label>
                    <input type="text" class="form-control input-sm" id="apellido" name="">
                    
                    <label>Usuario</label>
                    <input type="text" class="form-control input-sm" id="usuario" name="">
                    
                    <label>Correo</label>
                    <input type="text" class="form-control input-sm" id="correo" name="">
                    
                    <label>Password</label>
                    <input type="text" class="form-control input-sm" id="password" name="">
                    <p></p>
                    
                    <div align="center">
                    <span class="btn btn-primary" id="registrarNuevo">Registrar</span>
                    </form>
                     <br>
                        <br>
                      <p>¿YA TIENES CUENTA?<a href="login.php"> CLIC AQUI</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
  
       </div>

  
<script type="text/javascript">
        $(document).ready(function () {
               $('#registrarNuevo').click(function(){

            if($('#nombre').val()==""){
                alert("Debes agregar el nombre");
                return false;
            }else if($('#apellido').val()==""){
                alert("Debes agregar el apellido");
                return false;
            }else if($('#usuario').val()==""){
                alert("Debes agregar el usuario");
                return false;
            }else if($('#correo').val()==""){
                alert("Debes agregar el correo");
                return false;
            }else if($('#password').val()==""){
                alert("Debes agregar el password");
                return false;
            }

            cadena="nombre=" + $('#nombre').val() +
                    "&apellido=" + $('#apellido').val() +
                    "&usuario=" + $('#usuario').val() + 
                    "&correo=" + $('#correo').val() + 
                    "&password=" + $('#password').val();

                    $.ajax({
                        type:"POST",
                        url:"php/registro.php",
                        data:cadena,
                        success:function(r){

                            if(r==2){
                                alert("Este usuario ya existe, prueba con otro :)");
                            }
                            else if(r==1){
                                $('#frmRegistro')[0].reset();
                                alertify.success("Agregado con exito");
                            }else{
                                alertify.error("Fallo al agregar");
                            }
                        }
                    });
        });

         });
    </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

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