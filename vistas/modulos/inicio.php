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
              <a class="nav-link js-scroll-trigger" href="salir">Cerrar Sesión</a>
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
            <h1 class="mb-5"><?php echo($_SESSION["codigoseta"])?></h1>
          </div>
        </div>
      </div>
      </div>
    </header>


  <!-- Testimonials -->
  <section class="testimonials bg-light">
  <form method="post">
      <div class="contenedor">
      <div class="form-row">
      <div class="form-group col-md-3">
      <label for="nombre">Nombre Completo *</label>
        <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user-tie"></i></span></div>
        <input type="text" class="form-control" name="nombres" required>
        </div>
      </div>

      <div class="form-group col-md-3">
      <label for="apellido">Número de Cédula *</label>
      <div class="input-group">
      <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>
        <input type="number" class="form-control" name="cedula" required>
        </div>
      </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-3">
        <label for="direccion">Fecha de Nacimiento *</label>
        <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
          <input type="date" class="form-control" id="direccion" name="direccion" required="direccion">
        </div>
        </div>

        <div class="form-group col-md-3">
        <label for="correo">Correo Electrónico *</label>
        <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text">@</span>
        </div>
          <input type="mail" class="form-control" name="email" required>
        </div>
        </div>
        </div>
      </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-3">
      <label for="ciudad" class="control-label">Municipio de Residencia *</label>
      <div class="input-group">
      <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
      </div>
      <input type="text" class="form-control" name="municipio" required>
      </div>
      </div>

      <div class="form-group col-md-3">
      <label for="telefono">Teléfono *</label>
      <div class="input-group">
      <div class="input-group-prepend"><span class="input-group-text"><i class="icon icon-phone"></i></span>
      </div>
        <input type="number" class="form-control" name="celular" required>
      </div>
      </div>
      </div>
      <br>
      <input type="radio" name="condiciones" required="">&nbsp; &nbsp;He leído y acepto las condiciones de la <a href="https://www.susuerte.com/wp-content/uploads/2020/03/MCC-DE-15-Politica-de-Tratamiento-de-Datos-Personales-V.2.pdf" target="_blank"> Política de Tratamiento de Datos Personales</a><br><br>

      <button type="submit" class="btn btn-success">Enviar</button>&nbsp; &nbsp;
      <button type="reset" class="btn btn-danger">Cancelar Operación</button>

</div>
</div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrActualizacionDatos();
        
      ?>

    </form>
  </div>
</section>
  
    <!-- popup -->
    <div class="modal hide fade" id="myModal">
    <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h3>Modal header</h3>
    </div>
    <div class="modal-body">
      <p>One fine body…</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn">Close</a>
      <a href="#" class="btn btn-primary">Save changes</a>
    </div>
  </div>
  
  <a class="btn" data-toggle="modal" href="#myModal" >Launch Modal</a>
  
  <script type="text/javascript">
      $(window).on('load',function(){
          $('#myModal').modal('show');
      });
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>

</html>
