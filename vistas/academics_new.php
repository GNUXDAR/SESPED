<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');        
include_once('sidebar.php');
include_once('script.php');
//ini_set('display_errors', 'on');  	//muestra los errores de php

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
			<h2>Gestionar Profesional <small>2/4</small></h2>
			<h3>Datos Academicos <?php echo $ci_prof; ?></h3>    <!-- probando -->
			<form method="POST" action="../control/reg_academics.php" autocomplete="off">
			</br></br></br><!-- saltos de lineas en bootstrap -->
			<div class="form-group">
				<label class="col-sm-3">Estudios PreGrado</label>
				<div class="col-sm-3">
					<input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">



					<?php
                                   //include_once('../control/conexion.php');
                                   $comparar="SELECT * FROM titulo_pre";

                                    $conectando = new Conection();

                                    $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                     $option='';
                                 while ( $titulo=pg_fetch_array($verifica)) {
                                            $option.="<option value='".$titulo['id_pre_acadmics_tit']."'>".$titulo['pre_acadmics_tit']."</option>";
        
                                     } ;

                                     echo '<select class="form-control" id="pre_acadmics_tit" name="pre_acadmics_tit" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo "</select >";
                                   ?>




					<!-- <select name="pre_acadmics_tit" class="form-control" id="pre_acadmics_tit">
						<option value="">Seleccione</option>
						<option value="TSU">TSU</option>
						<option value="LICENCIADO">Licenciado</option>
						<option value="INGENIERO">Ingeniero</option>
					</select> -->
				</div><br><br><br>
				<div class="form-group">
					<label class="col-sm-3">En</label>
					<div class="col-sm-3">
						<select name="pre_acadmics" class="form-control" id="pre_acadmics" required>
						<option value="" selected>Seleccione Primero Arriba</option>
					</select>
					</div>
				</div>
			</div>
		</br></br><!-- saltos de lineas en bootstrap -->
		<div class="form-group">
			<label class="col-sm-3">Año de Graduación</label>
			<div class="col-sm-2">
				<input name="prom_acadmics" type="text" class="form-control" id="prom_acadmics" placeholder="18/09/2000" required>
				<script type="text/javascript">
					Calendar.setup(
					{
						inputField : "prom_acadmics",
						ifFormat   : "%d/%m/%Y",
					}
					);
				</script>
			</div>
		</div>
	</br></br><!-- saltos de lineas en bootstrap -->
	<div class="form-group">
		<label class="col-sm-3">Universidad</label>
		<div class="col-sm-6">
			<input name="univ_acadmics_pre" type="email_afl" class="form-control" id="univ_acadmics_pre" placeholder="UPTP LMR" onblur="javascript:this.value=this.value.toUpperCase();" required>
		</div>
	</div><br><br>
	<div class="form-group">
		<label class="col-sm-3">Estudios PostGrado</label>
		<div class="col-sm-3">
			<select name="post_acadmics_tit" class="form-control" id="post_acadmics_tit">
				<option value="">Seleccione</option>
				<option value="ESPECIALISTA">Especialista</option>
				<option value="MAGÍSTER">Magíster</option>
				<option value="DOCTOR">Doctor</option>
			</select>
		</div>
	</div>
</br></br><!-- saltos de lineas en bootstrap -->
<div class="form-group">
	<label class="col-sm-3">En</label>
	<div class="col-sm-3">
		<input name="post_acadmics" type="txt" class="form-control" id="post_acadmics" placeholder="Informática" onblur="javascript:this.value=this.value.toUpperCase();">
	</div>
</div><br><br>
<div class="form-group">
	<label class="col-sm-3">Universidad</label>
	<div class="col-sm-6">
		<input name="univ_acadmics_post" type="email_afl" class="form-control" id="univ_acadmics_post" placeholder="UPTP LMR" onblur="javascript:this.value=this.value.toUpperCase();">
	</br></br></br>
	<button type="submit" class="btn btn-info btn-block">Continuar</button>
</div>
</div>
</div>

</div>

</form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

 