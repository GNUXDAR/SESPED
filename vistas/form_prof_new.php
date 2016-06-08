<?php

$conectando = new Conection();
$perfilProfesional = new PerfilProfesional();
$perfil 	= $perfilProfesional->perfil($_SESSION['usuario_id']);
$ci_prof 	= $perfil["ci_prof"];

$buscar = "SELECT nom_prof FROM dp_prof WHERE ci_prof = '$ci_prof'";
$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$afectadas = pg_fetch_array($verifica);

if ($afectadas['nom_prof']!=NULL) {
	print ("<script>alert('Ya usted registro sus datos personales.');</script>");
	print('<meta http-equiv="refresh" content="0; URL=../vistas/principal.php">');
} 
else {
?>
				<form method="POST" action="../control/reg_prof.php" autocomplete="off">
						</br></br></br><!-- saltos de lineas en bootstrap -->
						<!-- <div class="form-group">
					      	<label class="col-sm-3">Foto Actualizada</label>
					      <div class="col-sm-6">
					      	<input name="pic_prof" type="file" class="form-control" id="pic_prof" placeholder="Foto">
					      </div>
						</div> 
						</br></br></br>--><!-- saltos de lineas en bootstrap -->
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
						<!-- <div class="form-group">
					      	<label class="col-sm-3">Cedula</label>
					      <div class="col-sm-3">
					      	<input name="ci_prof" type="number" class="form-control" id="ci_prof" placeholder="N de Cedula" onblur="javascript:this.value=this.value.toUpperCase();" required>
					      </div>
						</div>
						</br></br> --><!-- saltos de lineas en bootstrap -->
					 	<div class="form-group">
					      <label class="col-sm-3">Fecha de Nacimiento</label>
					      <div class="col-sm-3">
					        <input name="fn_prof" type="text" class="form-control" id="fn_prof" placeholder="18/09/2000" required>
					        <script type="text/javascript">
	                                          Calendar.setup(
	                                            {
	                                          inputField : "fn_prof",
	                                          ifFormat   : "%d/%m/%Y",
	                                          //button     : "Image1"
	                                            }
	                                          );
	                                        </script>
					      </div>
						</div>
						</br></br><!-- saltos de lineas en bootstrap -->
					 	<!-- <div class="form-group">
					      <label class="col-sm-3">Correo</label>
					      <div class="col-sm-6">
					        <input name="email_prof" type="email_afl" class="form-control" id="email_prof" placeholder="usuario@dominio.com" required>
					      </div>
						</div>
						</br> --><!-- saltos de lineas en bootstrap -->
						<div class="form-group">
					      	<label class="col-sm-3">Estado Civil</label>
					      <div class="col-sm-3">
					      	<select name="ecivil_prof" class="form-control" id="ecivil_prof">
								<option value="SOLTERO">Soltero</option>
								<option value="CASADO">Casado</option>
							</select>
					      </div>
						</div>
						</br></br><!-- saltos de lineas en bootstrap -->
						<div class="form-group">
					      	<label class="col-sm-3">Dirección de Residencia</label>
					      <div class="col-sm-6">
					      	<input name="dir_prof" type="text" class="form-control" id="dir_prof" placeholder="Direccion" onblur="javascript:this.value=this.value.toUpperCase();" required>
					      </div>
						</div>
						</br></br><!-- saltos de lineas en bootstrap -->
						<div class="form-group">
					      	<label class="col-sm-3">Numero de Telefono</label>
					      <div class="col-sm-3">
					      	<input name="tlf_prof" type="number" class="form-control" id="tlf_prof" placeholder="N de Telefono" required> <br>
					      	<!-- <input name="tlf2_prof" type="number" class="form-control" id="tlf2_prof" placeholder="2 N de Telefono"> -->
					      </div>
						</div>
						</br></br></br></br></br></br>
						<div class="form-group">
							<div class="col-sm-3"></div>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-info btn-block">Guardar</button>
							</div>
							
						</div>

				</form>
<?php
}
?>