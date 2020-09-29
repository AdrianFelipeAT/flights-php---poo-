<div id="back"></div>
<div class="login-box">
  <br>

  <!-- Ingreso Código -->

  <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Form-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                        <h3 class="display-4">Bienvenido</h3>
                <form method="post">
                <div class="form-group mb-3">
                    <input id="inputText" type="text" placeholder="Código" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="codigo">
                </div>

                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Continuar</button>
                            
         <?php
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();
          ?>
				</form>
			</div>
		</div>
	</div>