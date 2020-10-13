<?php

session_start();
include 'constantes.php';

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title> <?php echo($NOMBREEPMPRESA) ?> </title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/x.png">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/vendor/bootstrap/css/bootstrap.min.css">



  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  
  <!-- CSS login-->

  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/animate.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vistas/plantilla_css/daterangepicker.css">
  
</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
 
  <?php
  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/


    /*=============================================
    MENU
    =============================================*/


    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "consulta" ||
         $_GET["ruta"] == "404" ||
         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";
      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/


    echo '</div>';

  }elseif(isset($_GET["ruta"])){
      if($_GET["ruta"] == "404" || $_GET["ruta"] == "consulta"){

        include "modulos/".$_GET["ruta"].".php";
      }

  }else{
    include "modulos/login.php";
    
  }
  ?>


<!--SCRIPT login-->
  <script src="vistas/plantilla_css/jquery/jquery-3.2.1.min.js"></script>
	<script src="vistas/plantilla_css/jquery/animsition.min.js"></script>
	<script src="vistas/plantilla_css/jquery/popper.js"></script>
	<script src="vistas/plantilla_css/jquery/bootstrap.min.js"></script>
	<script src="vistas/plantilla_css/jquery/select2.min.js"></script>
	<script src="vistas/plantilla_css/jquery/moment.min.js"></script>
	<script src="vistas/plantilla_css/jquery/daterangepicker.js"></script>
	<script src="vistas/plantilla_css/jquerycountdowntime.js"></script>
	<script src="vistas/plantilla_css/jquery/main.js"></script>

</body>
</html>
