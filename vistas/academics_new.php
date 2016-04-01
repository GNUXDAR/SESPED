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
				      <div class="col-sm-6">
				      	<input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">
				      	<input name="pre_acadmics" type="txt" class="form-control" id="pre_acadmics" placeholder="Estudios" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
				      </div>
					</div>
					</br></br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Año de Graduacion</label>
				      <div class="col-sm-6">
				        <input name="prom_acadmics" type="text" class="form-control" id="prom_acadmics" placeholder="2000/09/18" required>
				        	<script type="text/javascript">
                                          Calendar.setup(
                                            {
                                          inputField : "prom_acadmics",
                                          ifFormat   : "%Y/%m/%d",
                                            }
                                          );
                        	</script>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Estudios PostGrado</label>
				      <div class="col-sm-6">
				      	<input name="post_acadmics" type="txt" class="form-control" id="post_acadmics" placeholder="Estudios" onblur="javascript:this.value=this.value.toUpperCase();">
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Universidad</label>
				      <div class="col-sm-6">
				        <input name="univ_academics" type="email_afl" class="form-control" id="univ_academics" placeholder="UPTP LMR" onblur="javascript:this.value=this.value.toUpperCase();" required>
				        </br></br></br>
				      	<button type="submit" class="btn btn-info btn-block">Continuar</button>
				      </div>
				      </div>
					</div>
				      	
					</div>

				</form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

