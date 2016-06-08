<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        //ini_set('display_errors', 'on');  //muestra los errores de php

        $ci_prof=$_GET["ci_prof"]; 			//captando cedula del usuario del form anterior

?> 
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<div id="social" class="pull-right">
</div>
<div class="col-sm-2"></div>
<div class="col-sm-6">
			<h2>Gestionar Profesional <small>4/4</small></h2>
			<h3>Experiencia Laboral</h3>
				<form method="POST" action="../control/reg_explab.php" autocomplete="off" id="datos-laborales">
					</br></br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Organización y/o Institución</label>
				      <div class="col-sm-6">
				      	<input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">
				      	<input name="inst_exp" type="txt" class="form-control" id="inst_exp" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
				      </div>
					</div>
					</br></br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Años de Servicio</label>
				      <div class="col-sm-2">
				        <input name="anios_servc_exp" type="number" class="form-control" id="anios_servc_exp" placeholder="3" required>
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
				      <label class="col-sm-3">Descripción de su Función</label>
				      <div class="col-sm-6">
				        <input name="des_cargo_exp" type="text" class="form-control" id="des_cargo_exp" placeholder="Resumen de su funcion" onblur="javascript:this.value=this.value.toUpperCase();" required>
				      </div>
				    </div>
				    </br></br></br>
				      <div class="form-group">
					<div class="col-sm-4"></div>
                    <div class="col-sm-6">
                        <div class="col-sm-2">
                           	<button type="button" class="btn btn-info" id="datos-guardar">Guardar</button>
                        </div>
                        <div class="col-sm-4"></div>
                            <div class="col-sm-2">
                            	<a class="btn btn-success" href="../vistas/principal.php">siguiente</a>
                            </div>
                        </div>

				</div>

				</form>
</div>
</div>
<div class="col-sm-4" id ="lista-datos"></div>

</div>

 <script type="text/javascript">
           $(document).ready(function() { 
           	var id_prof = $('#id_prof').val();
 			  $.post("datos-laborales.php", function(data){
                //llenado   de la lista  por medio   de  ajax
                $("#lista-datos").html(data);
            }); 
          $('#datos-guardar').click(function(){ //en el evento submit del fomulario
          	//alert("datos-laborales");
          	var url = $('#datos-laborales').attr('action');  //la url del action del formulario
			  var datos = $('#datos-laborales').serialize(); // los datos del formulario
          	 $.post(url, datos , function(data){
                //llenado   de la lista  por medio   de  ajax
                $("#lista-datos").html(data);
                $("#inst_exp").val("");
                $("#anios_servc_exp").val(""); 
                $("#cargo_exp").val(""); 
                $("#des_cargo_exp").val("");
            }); 
          	
          });	
 
        });
 
</script> 