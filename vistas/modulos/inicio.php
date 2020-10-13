<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Premios Cliente Estrella</title>

  <!-- Favicon -->
  <link rel="icon" href="vistas/img/plantilla/favicon.png">

  <!-- Popup -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vistas/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vistas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vistas/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="vistas/css/landing-page.min.css" rel="stylesheet">
  

  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
    
<body>

  <style type="text/css">
    html {
      height: 100%;
    }
    .registration-form{
      padding: 10px 0;
      background-image: url('<?php echo $_SESSION["fondo"] ?>');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    
  </style>
  <section class="py-5" id="divinicial" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><img src="https://www.susuerte.com/wp-content/uploads/2020/09/CALDAS.png" width="20px" height="10px"></div>
                    <p class="mb-0 mt-2 font-italic center" >RECLAMA TU PREMIO DIRIGIENDOTE A CUALQUIER PUNTO DE VENTA <b>SUSUERTE</b>, SUMINISTRAR EL SIGUIENTE ID: <b class="text-info"><h2><?php echo($_SESSION["id_bono_regalo"])?></h2></b></p> Y SIGUIENTE CÓDIGO: <b class="text-info"><h2><?php echo($_SESSION["codigoseta"])?></h2></b></p>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>
  
<div id="myModalPremio" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img src="<?php echo $_SESSION["premio"] ?>.jpg" width="100%" height="100%">
      </div>
    </div>
  </div>
</div>

  <div id="myModalCodigo" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <section class="py-5" id="divinicial">
                <div class="container">
                    <div class="row">

                            <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="">
                                <div class="blockquote-custom-icon bg-info shadow-sm"><img src="https://www.susuerte.com/wp-content/uploads/2020/09/CALDAS.png" width="20px" height="10px"></div>
                                <p class="" ><h2>HAS DILIGENCIADO TUS DATOS CORRECTAMENTE. </h2><br><br> RECLAMA TU PREMIO DIRIGIENDOTE A CUALQUIER PUNTO DE VENTA <b>SUSUERTE</b>, SUMINISTRA EL SIGUIENTE ID: <b class="text-info"><h2><?php echo($_SESSION["id_bono_regalo"])?></h2></b></p> Y SIGUIENTE CÓDIGO: <b class="text-info"><h2><?php echo($_SESSION["codigoseta"])?></h2></b> <br> Válido para Caldas</p>
                            </blockquote><!-- END -->

                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(window).on('load',function(){
      consultagenerado();
    });
  </script>
   
<div class="registration-form">
          
    <form method="post">
            <center>
            <h2 class="strong">DILIGENCIA Y GANA</h2>
            </center>
            <div class="form-row">
              <div class="form-group col">
                  <input type="text" class="form-control item" placeholder="Primer Nombre" required name="primer_nombre">
              </div>
              <div class="form-group col">
                  <input type="text" class="form-control item" placeholder="Segundo Nombre" name="segundo_nombre">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                  <input type="text" class="form-control item" placeholder="Primer Apellido" required name="primer_apellido">
              </div>
              <div class="form-group col">
                  <input type="text" class="form-control item" placeholder="Segundo Apellido" name="segundo_apellido">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                    <input type="text" class="form-control item" placeholder="Número de Identificación">
              </div>
              <div class="form-group col">
                  <input type="text" class=" fecha" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" id="tel" placeholder="Número de Teléfono">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                    <input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="fecha datepicker" id="fecha" placeholder="&nbsp;Fecha de Nacimiento (DD/MM/AAAA)" required>
              </div>
              <div class="form-group col">
                  <input type="text" class="form-control item" placeholder="Dirección de Residencia" required name="direccion">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col">
                <input type="email" class="form-control item" placeholder="Correo Electrónico" required>
              </div>
     
              <div class="form-label-group col">
                <select class="form-control" required>
                  <option value="" class="size">Seleccione el Municipio de Residencia</option>
                  <option value="Manizales">Manizales</option>
                  <option value="Aguadas">Aguadas</option>
                  <option value="Anserma">Anserma</option>
                  <option value="Aranzazu">Aranzazu</option>
                  <option value="Belalcázar">Belalcázar</option>
                  <option value="Chinchiná">Chinchiná</option>
                  <option value="Filadelfia">Filadelfia</option>
                  <option value="La Dorada">La Dorada</option>
                  <option value="La Merced">La Merced</option>
                  <option value="Manzanares">Manzanares</option>
                  <option value="Marmato">Marmato</option>
                  <option value="Marquetalia">Marquetalia</option>
                  <option value="Marulanda">Marulanda</option>
                  <option value="Neira">Neira</option>
                  <option value="Norcasia">Norcasia</option>
                  <option value="Pácora">Pácora</option>
                  <option value="Palestina">Palestina</option>
                  <option value="Pensilvania">Pensilvania</option>
                  <option value="Riosucio">Riosucio</option>
                  <option value="Risaralda">Risaralda</option>
                  <option value="Salamina">Salamina</option>
                  <option value="Samaná">Samaná</option>
                  <option value="San José">San José</option>
                  <option value="Supía">Supía</option>
                  <option value="Victoria">Victoria</option>
                  <option value="Villamaría">Villamaría</option>
                  <option value="Viterbo">Viterbo</option>
                </select>
              </div>
            </div>

            <hr>

            <div class="size orange">
              <input type="radio" name="bono" value="acepto" required>&nbsp; &nbsp;Yo acepto bono regalo de Susuerte.
              <br>
              <input type="radio" name="condiciones" value="acepto" required="">&nbsp; &nbsp;He leído las <a href="https://www.susuerte.com/wp-content/uploads/2020/03/MCC-DE-15-Politica-de-Tratamiento-de-Datos-Personales-V.2.pdf" target="_blank" class="orange"> condiciones y restricciones.</a>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">ENVIAR</button>
            </div>
          

              <img src="https://www.susuerte.com/wp-content/uploads/2020/09/CALDAS.png" alt="aniversario" width="20%" class="anniversary">
              <h5>Síguenos</h5>
              <img src=" https://www.susuerte.com/wp-content/uploads/2020/06/precio.png" alt="25 años" width="20%" class="years">


          <?php

            $login = new ControladorUsuarios();
            $login -> ctrActualizacionDatos();

          ?>

          </form>

        <div class="social-media">
            <div class="social-icons">
                <a href="https://www.facebook.com/Susuerte?fref=ts" class="letter"><i class="icon-social-facebook"></i>SUSUERTE</a>
                <a href="https://www.instagram.com/susuerte/" class="letter"><i class="icon-social-instagram"></i> SUSUERTE</a>
                <a href="https://www.youtube.com/channel/UCOGgfTd9tBDTYYDIdg9ct2w/videos" class="letter"><i class="icon-social-youtube"></i><i> SUSUERTE S.A</i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>