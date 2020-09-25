<div id="back"></div>
<div class="login-box">
  <br>

  <!-- Ingreso Código -->

  <form method="post">
      <div class="form-group">
      <h1 class="login-box-msg">Ingresa el Código</h1>
        <input type="text" class="form-control" placeholder="Código"name="codigo" required>
      </div>
      <div class="row">
         <button type="submit" class="btn btn-primary">Continuar</button>
      </div>
      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>
  </form>

<!-- Original
  <div class="login-box-body">

    <p class="login-box-msg">Ingresa el Código</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Código" name="codigo" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="row">
       
        <div class="center">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Continuar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div> -->

</div>
