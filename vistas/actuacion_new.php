<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');
include_once('sidebar.php');
include_once('script.php');
        //ini_set('display_errors', 'on');  	//muestra los errores de php		//captando cedula del usuario del form anterior


        ?> 
        <div class="row">   <!--div row-->
        	<div id="breadcrumb" class="col-xs-12">    <!--div breadcrumb-->
        		<a href="#" class="show-sidebar">
        			<i class="fa fa-bars"></i>
        		</a>
        		<div class="col-sm-2"></div>
        		<div class="col-sm-6">     <!-- col-md-8 -->
        			<h2>Gestionar Profesional <small>3/4</small></h2>
        			<h3>Campo de Actuación </h3>
        		<form method="POST" action="../control/reg_actuacion.php" autocomplete="off" id="datos-actuacion">
        			</br></br></br><!-- saltos de lineas en bootstrap -->
        			<div class="form-group">
        				<label class="col-sm-4">Cursos</label>
        				<div class="col-sm-6">
        					<input name="curs_act" type="txt" class="form-control" id="curs_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
        				</div>
        			</div>
            		</br></br></br><!-- saltos de lineas en bootstrap -->
            		<div class="form-group">
            			<label class="col-sm-4">Talleres</label>
            			<div class="col-sm-6">
            				<input name="tall_act" type="text" class="form-control" id="tall_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();" >
            			</div>
            		</div>
                	</br></br><!-- saltos de lineas en bootstrap -->
                	<div class="form-group">
                		<label class="col-sm-4">Reconocimientos</label>
                		<div class="col-sm-6">
                			<input name="rec_act" type="txt" class="form-control" id="rec_act" placeholder="Ultimos 3 años" onblur="javascript:this.value=this.value.toUpperCase();">
                		</div>
                	</div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                    	<label class="col-sm-4">Formación de Talentos</label>
                    	<div class="col-sm-6">
                    		<input name="form_act" type="text" class="form-control" id="form_act" placeholder="Facilitador" onblur="javascript:this.value=this.value.toUpperCase();" >
                    	</div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                    	<label class="col-sm-4">Participación en Eventos</label>
                    	<div class="col-sm-6">
                    		<input name="even_act" type="text" class="form-control" id="even_act" placeholder="Eventos" onblur="javascript:this.value=this.value.toUpperCase();" >
                    	</div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                    	<label class="col-sm-4">Trabajo de Investigación</label>
                    	<div class="col-sm-6">
                    		<input name="tri_act" type="text" class="form-control" id="tri_act" placeholder="Facilitador" onblur="javascript:this.value=this.value.toUpperCase();" >
                    	</div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                    	<label class="col-sm-4">Proyecto Socio Comunitario</label>
                    	<div class="col-sm-6">
                    		<input name="proy_sc_act" type="text" class="form-control" id="proy_sc_act" placeholder="Proyectos" onblur="javascript:this.value=this.value.toUpperCase();" >
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
                                <a class="btn btn-success" href="../vistas/explab_new.php">siguiente</a>
                            </div>
                        </div>
                    </div> 
                </form>
                </div><!-- fin col-md-8 -->
                <div class="col-sm-4" id ="lista-datos"></div>
                </div><!--  fin div breadcrumb-->
                </div><!--  fin row-->
    
                

    <script type="text/javascript">
           $(document).ready(function() { 
              $.post("datos-cursos.php", function(data){
                //llenado   de la lista  por medio   de  ajax
                $("#lista-datos").html(data);
            }); 
          $('#datos-guardar').click(function(){ //en el evento submit del fomulario
            //alert("datos-academicos");
            var url = $('#datos-actuacion').attr('action');  //la url del action del formulario
              var datos = $('#datos-actuacion').serialize(); // los datos del formulario
             $.post(url, datos , function(data){
                //llenado   de la lista  por medio   de  ajax
                $("#lista-datos").html(data);
                $("#curs_act").val("");
                $("#tall_act").val(""); 
                $("#rec_act").val(""); 
                $("#form_act").val("");
                $("#even_act").val(""); 
                $("#tri_act").val(""); 
                $("#proy_sc_act").val(""); 
                $("#curs_act").focus(); 

            }); 
            
          });   
 
        });
 
    </script> 
         
 
