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

</head>

<body>

  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <button type="button" class="btn btn-danger btn-rounded">
              <a href="salir"><abbr title="Cerrar Sesión"><i class="fas fa-sign-out-alt text-white"></i></abbr></a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
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

  <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><img src="https://www.susuerte.com/wp-content/uploads/2020/09/CALDAS.png" width="20px" height="10px"></div>
                    <p class="mb-0 mt-2 font-italic center" >RECLAMA TU PREMIO DIRIGIENDOTE A CUALQUIER PUNTO DE VENTA <b>SUSUERTE</b> Y SUMINISTRAR EL SIGUIENTE CÓDIGO: <b class="text-info"><?php echo($_SESSION["codigoseta"])?></b></p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Recuerde que este código es único e intransferible.
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image premios set in CSS! -->
          </div>
          <div class="card-body">
            <center>
            <img src="https://www.susuerte.com/wp-content/uploads/2020/09/BOTON.png" width="120px">
            </center><br><br>

            <form method="post">
              <div class="form-label-group">
                <input type="text" id="inputText" class="form-control" placeholder="Nombre Completo" required>
                <label>Nombre Completo</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputNumber" class="form-control" placeholder="Correo Electrónico" required>
                <label for="inputNumber">Número de Cédula</label>
              </div>
              
              <div class="form-label-group">
                <input type="tel" id="inputTel" class="form-control" placeholder="Número de Teléfono" required>
                <label for="inputTel">Número de Teléfono</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required>
                <label for="inputEmail">Correo Electrónico</label>
              </div>
 
              <div class="form-label-group">
            <select data-style="bg-white rounded-pill px-4 py-3 shadow-sm" class="selectpicker w-100">
                <option value="">Seleccione el Municipio de Residencia</option>
                <option value="">Manizales</option>
                <option value="">Aguadas</option>
                <option value="">Anserma</option>
                <option value="">Aranzazu</option>
                <option value="">Belalcázar</option>
                <option value="">Chinchiná</option>
                <option value="">Filadelfia</option>
                <option value="">La Dorada</option>
                <option value="">La Merced</option>
                <option value="">Manzanares</option>
                <option value="">Marmato</option>
                <option value="">Marquetalia</option>
                <option value="">Marulanda</option>
                <option value="">Neira</option>
                <option value="">Norcasia</option>
                <option value="">Pácora</option>
                <option value="">Palestina</option>
                <option value="">Pensilvania</option>
                <option value="">Riosucio</option>
                <option value="">Risaralda</option>
                <option value="">Salamina</option>
                <option value="">Samaná</option>
                <option value="">San José</option>
                <option value="">Supía</option>
                <option value="">Victoria</option>
                <option value="">Villamaría</option>
                <option value="">Viterbo</option>
            </select><!-- End -->
              </div>
      <!-- diligencia el formulario para reclamar el bono regalo dejanos tus datos y uan vez lo diligencies te arrojara el codigo para que lo reclames en cualquier punto de venta
    linear-gradient(rgb(237,255,255), rgb(237,255,255))
  yo acepto el bono regalo de susuerte-->
            
<!-- https://bootstrapious.com/p/bootstrap-multiselect-dropdown-->


              <div class="form-label-group">
                <input type="date" id="inputDate" class="form-control" placeholder="Fecha de Nacimiento" required name="fecha">
                <label for="inputDate">Fecha de Nacimiento</label>
              </div>
              
              <hr>

              <input type="radio" name="condiciones" required="">&nbsp; &nbsp;He leído y acepto las condiciones de la
               <a href="https://www.susuerte.com/wp-content/uploads/2020/03/MCC-DE-15-Politica-de-Tratamiento-de-Datos-Personales-V.2.pdf" target="_blank">
              Política de Tratamiento de Datos Personales</a>

              <br>

              <input type="radio" name="bono" required="">&nbsp; &nbsp;Yo acepto el <b>bono regalo</b> de Susuerte.

              <br><br>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>

              <br>

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
