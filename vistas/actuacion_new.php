<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  	//muestra los errores de php

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
			<h2>Gestionar Profesional <small>3/4</small></h2>
			<h3>Campo de Actuacion <?php echo $ci_prof; ?></h3>
				<form method="POST" action="../control/reg_actuacion.php" autocomplete="off">
					</br></br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Cursos</label>
				      <div class="col-sm-6">
				      	<input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">
				      	<input name="curs_act" type="txt" class="form-control" id="curs_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
				      </div>
					</div>
					</br></br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Talleres</label>
				      <div class="col-sm-6">
				        <input name="tall_act" type="text" class="form-control" id="tall_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" >
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Reconocimientos</label>
				      <div class="col-sm-6">
				      	<input name="rec_act" type="txt" class="form-control" id="rec_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();">
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Formacion de Talentos</label>
				      <div class="col-sm-6">
				        <input name="form_act" type="text" class="form-control" id="form_act" placeholder="Facilitador" onblur="javascript:this.value=this.value.toUpperCase();" >
				       </div>
					</div>
				        </br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Participacion en Eventos</label>
				      <div class="col-sm-6">
				        <input name="even_act" type="text" class="form-control" id="even_act" placeholder="Eventos" onblur="javascript:this.value=this.value.toUpperCase();" >
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Trabajo de Investigacion</label>
				      <div class="col-sm-6">
				        <input name="tri_act" type="text" class="form-control" id="tri_act" placeholder="Facilitador" onblur="javascript:this.value=this.value.toUpperCase();" >
				       </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Proyecto Socio Comunitario</label>
				      <div class="col-sm-6">
				        <input name="proy_sc_act" type="text" class="form-control" id="proy_sc_act" placeholder="Proyectos" onblur="javascript:this.value=this.value.toUpperCase();" >
				        <div class="form-group">
				        	<input type="radio" value="FINALIZADO" selected>Finalizado</input>
				        	<input type="radio" value="PROCESO">Proceso</input>
				        </div>

				        </br></br></br>
				      	<button type="submit" class="btn btn-info btn-block">Continuar</button>
				      </div>
				      </div>
					</div>
				      	
					</div>

				</form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

