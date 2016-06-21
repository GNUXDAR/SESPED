<?php 
        include_once('../control/conexion.php');
        include_once('sidebar_new.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  //muestra los errores de php

?> 
<div class="row">
    <div id="breadcrumb" class="col-xs-12">
        <a href="#" class="show-sidebar">
            <i class="fa fa-bars"></i>
        </a>
        <div id="social" class="pull-right">
</div>
<div class="col-xs-12 col-sm-8 col-md-2"></div>
<div class="col-xs-12 col-sm-4 col-md-9">
            <h2>Gestionar Profesional </h2>
            <h3>Registrar Usuario</h3>
            <span id="helpBlock" class="help-block">Bienvenido a la seccion de registro de usuario Ingrese sus datos para acceder al sistema</span>
                <form method="POST" id="from_user" action="../control/reg_usr.php" autocomplete="off">
                <input name="tipo_usr" type="hidden" value="<?php echo 2 ?>">
                <input name="status_usr" type="hidden" value="<?php echo 1 ?>">

                    </br></br></br></br>
                    <div class="form-group">
                        <label class="col-sm-3">Cedula</label>
                      <div class="col-sm-4">
                        <input name="ci_prof" type="number" class="form-control" id="ci_prof" placeholder="Nº Cedula" autofocus required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Correo</label>
                      <div class="col-sm-4">
                        <input name="login_usr" type="txt" class="form-control" id="login_usr" placeholder="Usuario" autofocus required>
                      </div>
                      <div id="msg" class="col-md-3">
                                
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Contraseña</label>
                      <div class="col-sm-4">
                        <input name="pass_usr" type="password" class="form-control" id="pass_usr" placeholder="Contraseña" pattern="(?=^.{8,}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Za-z])(?=.*[a-zA-Z]).*$" required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Repetir Conraseña</label>
                      <div class="col-sm-4">
                        <input name="pass_usr2" type="password" class="form-control" id="pass_usr2" placeholder="Repetir" onblur="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>

                    </br></br></br></br>
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4">
                            <button type="submit" id="registrar" class="btn btn-info btn-block">Registrar</button>
                        </div>
                        
                    </div>

                </form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>