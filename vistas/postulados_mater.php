<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');        
include_once('sidebar.php');
include_once('script.php');
ini_set('display_errors', 'on');  	//muestra los errores de php
$consulta = "SELECT * from titulo_pre";

//pregrado + postgrado + anios de servicio
$conectando = new Conection();
$resultado = pg_query($conectando->conectar(), $consulta);
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
			<h2>Postulados</h2>
			<h3>Listado de Postulados</h3>
		</br></br></br><!-- saltos de lineas en bootstrap -->
		 <div class="form-group">
					<label class="col-sm-4"></label>
					<div class="col-sm-4">
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

	                                     echo '<select class="form-control" id="titulo" name="pre_acadmics_tit" >';
	                                     echo '<option value="" selected>Seleccione </option>';
	                                     echo $option;
	                                     echo "</select >";
	                    ?>
					</div><br><br>
		</div>
		<div class="form-group">
					<label class="col-sm-4"></label>
					<div class="col-sm-4">
						<select name="pre_acadmics" class="form-control" id="carrera" required>
						<option value="" selected>Seleccione</option>
					</select>
					</div>
		</div>
		<br><br><br><br>
		<div class="form-group">
			<div id ="lista-datos"></div>
		</div>
			
	</div>
	<div class="col-xs-12 col-sm-8 col-md-3"></div>


		<script language="javascript">
$(document).ready(function(){
	$("#carrera").hide();
    //funcion    para    cuado   cambie  el  valor   del combo   de  carreras
   $("#titulo").change(function () {
   	if ($("#titulo").val()!= "" ){
   	$("#carrera").show();
   	}else{
   	$("#carrera").hide();
   	}
           $("#titulo option:selected").each(function () {
           // var id_pre_acadmics_tit = $(this).val();
            $.post("carreras_combo.php", {titulo_id: $(this).val() }, function(data){
                //llenado   del combo   por medio   de  ajax
                $("#carrera").html(data);
            });            
        });
   })
   
   //funcion    para    cuado   cambie  el  valor   del combo   de  carreras
   $("#carrera").change(function () {
           $("#carrera option:selected").each(function () {
           
            $.post("show_carrer.php", {carrera_valor: $(this).val(), titulo_valor: $("#titulo option:selected").html()}, function(data){
                //llenado   del combo   por medio   de  ajax
                $("#lista-datos").html(data);
            });            
        });
   })
});
</script>
         
