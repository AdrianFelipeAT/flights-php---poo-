<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bono Regalo</title>

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

</head>

<body>
    <script  src="vistas/js/funciones.js"></script>
    <!-- Masthead -->
    <header class="masthead text-white text-center">

    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5"></h1>
          </div>
        </div>
      </div>
    </div>

  </header>

<section class="py-5" id="divinicial" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><img src="https://www.susuerte.com/wp-content/uploads/2020/09/CALDAS.png" width="20px" height="10px"></div>
                    <p class="mb-0 mt-2 font-italic center" >RECLAMA TU PREMIO DIRIGIENDOTE A CUALQUIER PUNTO DE VENTA <b>SUSUERTE</b>, SUMINISTRAR EL SIGUIENTE ID: <b class="text-info"><h2><?php echo($_SESSION["id_bono_regalo"])?></h2></b></p> Y SIGUIENTE CÓDIGO: <b class="text-info"><h2><?php echo($_SESSION["codigoseta"])?></h2></b></p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Recuerde que este código es único e intransferible.
                    </footer>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <style type="text/css">
            
            .card-signin .card-img-left {
              width: 45%;
              /* Link to your background image using in the property below! */
              background: scroll center url('<?php echo($_SESSION["premio"]); ?>-l.jpg');
              background-size: cover;
            }
          </style>
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image premios set in CSS! -->
          </div>
          <div class="card-body">
            <center>
            <img src="https://www.susuerte.com/wp-content/uploads/2020/09/BOTON.png" width="120px">
            </center><br><br>

            <form method="post">
        
            <div class="form-row">
              <div class="form-label-group col">
                <input type="text" name="primer_nombre" class="form-control" placeholder="Primer Nombre" required>
              </div>
              <div class="form-label-group col">
                <input type="text" name="segundo_nombre" class="form-control" placeholder="Segundo Nombre">
              </div>
            </div>

            <div class="form-row">
              <div class="form-label-group col">
                <input type="text" name="primer_apellido" class="form-control" placeholder="Primer Apellido" required>
              </div>
              <div class="form-label-group col">
                <input type="text" name="segundo_apellido" class="form-control" placeholder="Segundo Apellido">
              </div>
            </div>

            <div class="form-row">
              <div class="form-label-group col">
              <input type="text" name="identificacion" class="form-control" placeholder="Número de identificación" required>
              </div>
              <div class="form-label-group col">
              <input type="number" name="celular" class="form-control" placeholder="Número de Teléfono" required>
              </div>
            </div>


            <div class="form-row">
              <div class="form-label-group col">
              <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
              </div>
              <div class="form-label-group col">
              <select class="form-control" name="municipio" required>
                <option value="">Seleccione el Municipio de Residencia</option>
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
            <div class="form-row">
              <div class="form-label-group col">
              <input type="text" name="direccion" class="form-control" placeholder="Dirección de residencia" required>
              </div>
              <div class="form-label-group col">
              </div>
            </div>

              <label>Fecha de Nacimiento</label>
                <div class="form-label-group">
                  <input class="form-control" type="date" name="fecha_nacimiento" required>
                </div>

              <hr>
              <input type="radio" name="bono" value="acepto" required>&nbsp; &nbsp;Yo acepto el <b>bono regalo</b> de Susuerte.

              <br>

              <input type="radio" name="condiciones" value="acepto" required="">&nbsp; &nbsp;He leído y acepto las condiciones de la
               <a href="https://www.susuerte.com/wp-content/uploads/2020/03/MCC-DE-15-Politica-de-Tratamiento-de-Datos-Personales-V.2.pdf" target="_blank">
              Política de Tratamiento de Datos Personales</a>


              <br><br>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>

              <br>

              <?php

                $login = new ControladorUsuarios();
                $login -> ctrActualizacionDatos();
                
              ?>

              <h5 class="card-title text-center">Nos encuentras en Redes Sociales como:</h5>
              <center>
                <!-- Instagram -->
                <button class="btn btn-lg btn-instagram btn-rounded text-uppercase" type="button"><i class="fab fa-instagram mr-2"></i>
                <a href="https://www.instagram.com/susuerte/" target="_blank">Susuerte</a></button>
                <!-- Facebook -->
                <button class="btn btn-lg btn-facebook btn-rounded text-uppercase" type="button"><i class="fab fa-facebook-f mr-2"></i>
                <a href="https://www.facebook.com/Susuerte?fref=ts" target="_blank">Susuerte</a></button>
                <!-- Youtube -->
                <button class="btn btn-lg btn-youtube btn-rounded text-uppercase" type="button"><i class="fab fa-youtube mr-2"></i>
                <a href="https://www.youtube.com/channel/UCOGgfTd9tBDTYYDIdg9ct2w/videos" target="_blank">Susuerte S.A</a></button>
              </center>
              <br>
              <h5 class="card-title text-center">Para más información, consulta: <a href="http://www.susuerte.com"> www.susuerte.com</a></h5>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
