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
    
<body style="background-image: url('<?php echo $_SESSION["fondo"] ?>');
      background-size: 100% 100%;">

  <style>
    
    
    
  </style>
  <section class="py-5" id="divinicial" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="p-5 colormodal contenido_texto">
                                <p align="center">
                                  <center>
                                    <h2><b>RECLAMA TU BONO REGALO DE GIROS EN CUALQUIER SUSUERTE DEL DEPARTAMENTO</b></h2>
                                    <p class="mb-0 mt-2 font-italic center">Suministrando el siguiente ID: 
                                      <b>
                                        <p style="font-size: 250%"> <?php echo($_SESSION["id_bono_regalo"])?></p>
                                      </b>
                                    </p>
                                     Y Código: <br>
                                      <b>
                                        <p style="font-size: 250%"> <?php echo($_SESSION["codigoseta"])?></p>
                                      </b>
                                    </p>
                                     
                                      <br> Descarga la app <a class="text-info" href="https://play.google.com/store/apps/details?id=co.com.supergiros.movil" target="_blank">SuperGiros Móvil</a>
                                      <br><br>
                                      <img src="vistas/img/plantilla/modal_foot.png" width="100%">
                                  </center>
                                </p>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <img src="<?php echo $_SESSION["popup"] ?>" style="width:100%; height:100%;" >
      </div>
    </div>
  </div>
</div>

  <div id="myModalCodigo" class="modal" role="dialog">
    <div class="modal-dialog otra">
      <!-- Modal content-->
      <div class="modal-content">
            <section id="divinicial" class="colormodal">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
               
              

                            <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="p-5 colormodal contenido_texto">
                                <p align="center">
                                  <center>
                                    <h2><b>RECLAMA TU BONO REGALO DE GIROS EN CUALQUIER SUSUERTE DEL DEPARTAMENTO</b></h2>
                                    <p class="mb-0 mt-2 font-italic center">Suministrando el siguiente ID: 
                                      <b>
                                        <p style="font-size: 250%"> <?php echo($_SESSION["id_bono_regalo"])?></p>
                                      </b>
                                    </p>
                                     Y Código: <br>
                                      <b>
                                        <p style="font-size: 250%"> <?php echo($_SESSION["codigoseta"])?></p>
                                      </b>
                                    </p>
                                     
                                      <br> Descarga la app <a class="text-info" href="https://play.google.com/store/apps/details?id=co.com.supergiros.movil" target="_blank">SuperGiros Móvil</a>
                                      <br><br>
                                      <img src="vistas/img/plantilla/modal_foot.png" width="100%">
                                  </center>
                                </p>
                            </blockquote><!-- END -->

                    
         
            </section>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(window).on('load',function(){
      consultagenerado();
    });
  </script>

<?php
if ($_SESSION['id_producto'] == 1) {
  ?>
  <div class="registration-form naranja">
  <?php
}else if($_SESSION['id_producto'] == 2){
  ?>
  <div class="registration-form azul">
  <?php
}else if($_SESSION['id_producto'] == 3){
  ?>
  <div class="registration-form gris">
  <?php
}else{
  ?>
  <div class="registration-form amarillo">
  <?php
}
?>

    <div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 center">
   
            <div class="truncate bg-card-user" style="background-image: url('<?php echo $_SESSION["fondo_formulario"] ?>'); background-repeat: no-repeat; background-size: 100% 100%;">

            <form method="post" class="logueo">
              <center>
            <h2 class="strong">DILIGENCIA Y GANA</h2>
            </center>
            <div class="form-group">
              <div class="form-group">
                  <input type="text" class="form-control item" placeholder="Primer Nombre" required name="primer_nombre">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control item" placeholder="Segundo Nombre" name="segundo_nombre">
              </div>
            </div>

            <div class="form-group">
              <div class="form-group">
                  <input type="text" class="form-control item" placeholder="Primer Apellido" required name="primer_apellido">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control item" placeholder="Segundo Apellido" name="segundo_apellido">
              </div>
            </div>

            <div class="form-group">
              <div class="form-group">
                    <input type="text" class="form-control item" name="identificacion" placeholder="Número de Identificación">
              </div>
              <div class="form-group">
                  <input type="text" name="celular" class=" fecha" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" id="tel" placeholder="Número de Teléfono">
              </div>
            </div>

            <div class="form-group">
              <div class="form-group">
                    <input type="text" name="fecha_nacimiento" pattern="\d{1,2}/\d{1,2}/\d{4}" class="fecha datepicker" id="fecha" placeholder="&nbsp;Fecha de Nacimiento (DD/MM/AAAA)" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control item" placeholder="Dirección de Residencia" name="direccion" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-group">
                <input type="email" name="email" class="form-control item" placeholder="Correo Electrónico" required>
              </div>
     
              <div class="form-label-group">
                <select class="form-control" name="municipio" required>
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


              <input type="radio" name="bono" value="acepto" required class="orange">&nbsp; &nbsp;Yo acepto bono regalo de Susuerte.
              <br>
              <input type="radio" name="condiciones" value="acepto" required="" class="size">&nbsp; &nbsp; 

              <a href="https://www.susuerte.com/wp-content/uploads/2020/03/MCC-DE-15-Politica-de-Tratamiento-de-Datos-Personales-V.2.pdf" target="_blank" class=""> He leído y acepto las condiciones y restricciones</a>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">ENVIAR</button>
            </div>
          

              <img src="vistas/img/plantilla/aniversario_cinta.png" alt="aniversario" width="48%" class="anniversary">
              <h5 class="follow">.</h5>
              <img src="vistas/img/plantilla/aniversario_25.png" alt="25 años" width="20%" class="years">

          <?php

            $login = new ControladorUsuarios();
            $login -> ctrActualizacionDatos();

          ?>

              </form>
          </div>
          <div class="social-media">  
                  <!--<div class="social-icons">
                      <a href="https://www.facebook.com/Susuerte?fref=ts" class="letter"><i class="icon-social-facebook"></i><i>SUSUERTE</i></a>
                      <a href="https://www.instagram.com/susuerte/" class="letter"><i class="icon-social-instagram"></i><i> SUSUERTE</i></a>
                      <a href="https://www.youtube.com/channel/UCOGgfTd9tBDTYYDIdg9ct2w/videos" class="letter"><i class="icon-social-youtube"></i><i> SUSUERTE S.A</i></a>
                  </div>-->
          </div>
        </div>
      </div>
    <img src="vistas/img/plantilla/text.png" class="direction">
      </div>
    </div>
    <!-- fin del .container -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script  src="vistas/js/funciones.js"></script>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
</body>
</html>