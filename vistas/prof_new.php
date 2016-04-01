<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        //ini_set('display_errors', 'on');  //muestra los errores de php

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
			<h2>Gestionar Profesional <small>1/4</small></h2>
			<h3>Datos Personales</h3>
				<form method="POST" action="../control/reg_prof.php" autocomplete="off">
					</br></br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Foto Actualizada</label>
				      <div class="col-sm-6">
				      	<input name="pic_prof" type="file" class="form-control" id="pic_prof" placeholder="Foto">
				      </div>
					</div>
					</br></br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Nombres</label>
				      <div class="col-sm-6">
				      	<input name="nom_prof" type="txt" class="form-control" id="nom_prof" placeholder="Nombres" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Apellidos</label>
				      <div class="col-sm-6">
				      	<input name="apel_prof" type="txt" class="form-control" id="apel_prof" placeholder="Apellidos" onblur="javascript:this.value=this.value.toUpperCase();" required>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Cedula</label>
				      <div class="col-sm-6">
				      	<input name="ci_prof" type="number" class="form-control" id="ci_prof" placeholder="N de Cedula" onblur="javascript:this.value=this.value.toUpperCase();" required>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Fecha de Nacimiento</label>
				      <div class="col-sm-6">
				        <input name="fn_prof" type="text" class="form-control" id="fn_prof" placeholder="2000/09/18" required>
				        <script type="text/javascript">
                                          Calendar.setup(
                                            {
                                          inputField : "fn_prof",
                                          ifFormat   : "%Y/%m/%d",
                                          //button     : "Image1"
                                            }
                                          );
                                        </script>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
				 	<div class="form-group">
				      <label class="col-sm-3">Correo</label>
				      <div class="col-sm-6">
				        <input name="email_prof" type="email_afl" class="form-control" id="email_prof" placeholder="usuario@dominio.com" required>
				      </div>
					</div>
					</br><!-- saltos de lineas en bootstrap -->
					<!-- <div class="form-group">
				      	<label class="col-sm-3">Lugar Nacimiento</label>
				      <div class="col-sm-6">
				      	<select name="fn_prof" class="form-control" id="fn_prof">
							<option value="sucre">Sucre</option>
							<option value="monagas">Monagas</option>
							<option value="amazonas">Amazonas</option>
							<option value="barcelona">Barcelona</option>
							<option value="otro">otro...</option>
						</select>
				      </div>
					</div> -->
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Estado Civil</label>
				      <div class="col-sm-6">
				      	<select name="ecivil_prof" class="form-control" id="ecivil_prof">
							<option value="SOLTERO">Soltero</option>
							<option value="CASADO">Casado</option>
						</select>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Grupo Familiar</label>
				      <div class="col-sm-6">
				      	<input name="grpf_prof" type="text" class="form-control" id="grpf_prof" placeholder="Grupo Familiar" onblur="javascript:this.value=this.value.toUpperCase();">
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Direccion de Residencia</label>
				      <div class="col-sm-6">
				      	<input name="dir_prof" type="text" class="form-control" id="dir_prof" placeholder="Direccion" onblur="javascript:this.value=this.value.toUpperCase();" required>
				      </div>
					</div>
					</br></br><!-- saltos de lineas en bootstrap -->
					<div class="form-group">
				      	<label class="col-sm-3">Numero de Telefono</label>
				      <div class="col-sm-6">
				      	<input name="tlf_prof" type="number" class="form-control" id="tlf_prof" placeholder="N de Telefono" required> <br>
				      	<input name="tlf2_prof" type="number" class="form-control" id="tlf2_prof" placeholder="2 N de Telefono">
				      	</br></br></br>
				      	<button type="submit" class="btn btn-info btn-block">Continuar</button>
				      </div>
					</div>

				</form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

