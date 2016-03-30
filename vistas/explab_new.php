<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  //muestra los errores de php

        $ci_prof=$_GET["ci_prof"]; 			//captando cedula del usuario del form anterior

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
			<h2>Gestionar Profesional <small>4/4</small></h2>
			<h3>Experiencia Laboral <?php echo $ci_prof; ?></h3>
				<form method="POST" action="../control/reg_explab.php" autocomplete="off">
					</br></br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Organizacion y/o Institucion</label>
				      <div class="col-sm-6">
				      	<input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">
				      	<input name="inst_exp" type="txt" class="form-control" id="inst_exp" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
				      </div>
					</div>
					</br></br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Años de Servicio</label>
				      <div class="col-sm-6">
				        <input name="anios_servc_exp" type="number" class="form-control" id="anios_servc_exp" placeholder="Años de Servicios" required>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Cargo desempeñado</label>
				      <div class="col-sm-6">
				      	<input name="cargo_exp" type="txt" class="form-control" id="cargo_exp" placeholder="Cargo en la empresa" onblur="javascript:this.value=this.value.toUpperCase();">
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Descripcion de su Funcion</label>
				      <div class="col-sm-6">
				        <input name="des_cargo_exp" type="text" class="form-control" id="des_cargo_exp" placeholder="Resumen de su funcion" onblur="javascript:this.value=this.value.toUpperCase();" required>
				    
				        </br></br></br>
				      	<button type="submit" class="btn btn-info btn-block">Finalizar</button>
				      </div>
				      </div>
					</div>
				      	
					</div>

				</form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

