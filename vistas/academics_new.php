<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');        
include_once('sidebar.php');
include_once('script.php');
//ini_set('display_errors', 'on');  	//muestra los errores de php

$ci_prof =$_GET["ci_prof"]; 			//captando cedula del usuario del form anterior

?> 
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
			<div class="col-sm-2"></div>
        	<div class="col-sm-6">     <!-- col-md-8 -->
				<h2>Gestionar Profesional <small>2/4</small></h2>
				<h3>Datos Académicos </h3>   
				<?php include_once('form_academics_new.php'); ?>
			</div><!-- fin col-md-8 -->
			</div>
			<div class="col-sm-4" id ="lista-datos"></div>

           </div><!--  fin div breadcrumb-->
           </div><!--  fin row-->

 <script type="text/javascript">
           $(document).ready(function() { 
           	var id_prof = $('#id_prof').val();
 			  $.post("datos-academicos.php", function(data){
                //llenado   de la lista  por medio   de  ajax
                $("#lista-datos").html(data);
            });	post_acadmics_tit
          $('#datos-guardar').click(function(){ //en el evento submit del formulario
          	if ( $("#pre_acadmics_tit").val() == "" ) {
           		alert("Seleccione su Estudio");
           		$("#pre_acadmics_tits").focus();
           	}else if ( $("#prom_acadmics").val() == "" ) {
           		alert("Seleccione el Año");
           		$("#prom_acadmics").focus();
           	}else if ( $("#univ_acadmics_pre").val() == "" ) {
           		alert("Seleccione la Universidad");
           		$("#univ_acadmics_pre").focus();
           	}else{
	          	var url = $('#datos-academicos').attr('action');  //la url del action del formulario
				  var datos = $('#datos-academicos').serialize(); // los datos del formulario
	          	 $.post(url, datos , function(data){
	                //llenado   de la lista  por medio   de  ajax
	                $("#lista-datos").html(data);
	                $("#pre_acadmics_tit").val("");
	                $("#pre_acadmics").val(""); 
	                $("#prom_acadmics").val(""); 
	                $("#univ_acadmics_pre").val("");
	                $("#epost_acadmics_tit").val(""); 
	                $("#post_acadmics").val(""); 
	                $("#univ_acadmics_post").val("");
	                $("#post_acadmics_tit").val("");
	            }); 
	        }

	        $("#univ_acadmics_pre2").attr("disabled");
          	$("#input_univ_acadmics_pre").css({"display" : "none"});
          	$("#univ_acadmics_pre2").val("");
          	
          });

          $("#univ_acadmics_pre").change(function(e) {
          	
          	 if ( $(this).val() == "Otras" ){
          	 	$("#univ_acadmics_pre2").removeAttr("disabled");
          	 	$("#input_univ_acadmics_pre").css({"display" : "block"});
          	 }else{
          	 	$("#univ_acadmics_pre2").attr("disabled");
          		$("#input_univ_acadmics_pre").css({"display" : "none"});
          		$("#univ_acadmics_pre2").val("");
          	 }
          });
 
        });
 
        </script> 
         
 