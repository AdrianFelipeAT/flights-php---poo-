<div id="back"></div>
<div class="login-box">
  
  <div class="login-logo">

    <img src="" class="img-responsive" style="padding:30px 100px 0px 100px">

  </div>
  <br>
  <div class="login-box-body">

    <p class="login-box-msg">Ingresar</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Código" name="codigo" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="row">
       
        <div class="center">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>
