<?php
  include('vistas/dist/js/funciones.js');
?>
<div id="back"></div>
<script type="text/javascript" src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="vistas/dist/js/funciones.js"></script>
<a class="nav-link js-scroll-trigger" href="salir">Cerrar Sesión</a>
<div class="login-box">
  
  <div class="login-logo">

    <img src="" class="img-responsive" style="padding:30px 100px 0px 100px">

  </div>
  <div class="login-box-body">

    <button type="button" class="btn btn-primary btn-block btn-flat" onclick="generar()">Generar Código</button>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Código" name="codigo" id="codigoasignado" readonly="readonly" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Asignar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorAsignar();
        $login -> ctrAsignarCodigo();
        
      ?>

    </form>

  </div>

</div>
