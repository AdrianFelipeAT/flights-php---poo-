<?php

session_start();
include '../premios_cliente_estrella/constantes.php';

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title> <?php echo($nombreEmpresa) ?> </title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/x.png">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/vendor/bootstrap/css/bootstrap.min.css">



  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
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
         $_GET["ruta"] == "usuarios" ||
         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";
      }elseif($_GET["ruta"] == "tb76t7b6d2dg0a" and $_SESSION["codigoacceso"] == $codetestsc){
        include "modulos/seller/venta.php";
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

  }else{

    include "modulos/login.php";

  }

  ?>




</body>
</html>
