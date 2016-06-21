<form method="POST" action="../control/reg_academics.php" autocomplete="off" id="datos-academicos">
				</br></br></br><!-- saltos de lineas en bootstrap -->
				<div class="form-group">
					<label class="col-sm-4">Estudios PreGrado</label>
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

                                     echo '<select class="form-control" id="pre_acadmics_tit" name="pre_acadmics_tit" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo "</select >";
                    ?>
					</div><br><br>
				</div>
				<div class="form-group">
					<label class="col-sm-4">En</label>
					<div class="col-sm-4">
						<select name="pre_acadmics" class="form-control" id="pre_acadmics" required>
						<option value="" selected>Seleccione Primero Arriba</option>
					</select>
					</div>
				</div>
				</br></br></br><!-- saltos de lineas en bootstrap -->
				<div class="form-group">
					<label class="col-sm-4">Año de Graduación</label>
					<div class="col-sm-3">
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
					<label class="col-sm-4">Universidad</label>
					<div class="col-sm-6">



					<?php
                                   //include_once('../control/conexion.php');
                                   $comparar="SELECT * FROM universidades";

                                    $conectando = new Conection();

                                    $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                     $option='';
                                 while ( $titulo=pg_fetch_array($verifica)) {
                                            $option.="<option value='".$titulo['nom_univ']."'>".$titulo['nom_univ']."</option>";
        
                                     } ;

                                     echo '<select class="form-control" id="univ_acadmics_pre" name="univ_acadmics_pre" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo '<option value="Otras">Otras </option>';
                                     echo "</select >";
                    ?>
						<!-- <select class="form-control" id="univ_acadmics_pre" name="univ_acadmics_pre" >;
	                        <option value="" selected>Seleccione </option>
	                        <option value="ucv" >UCV </option>
	                        <option value="uptp" >UPTP </option>
	                        <option value="simon bolivar" >simon bolivar </option>
	                        <option value="Otras">Otras </option>
	                    </select> -->
	                    <br>

	                    <div id="input_univ_acadmics_pre" style="display:none;">
	                    	<input name="univ_acadmics_pre2" type="email_afl" class="form-control" id="univ_acadmics_pre2" placeholder="Universidad" disabled onblur="javascript:this.value=this.value.toUpperCase();" required>
	                    </div>
	                    <br>
						<!--  -->
					</div>
				</div><br><br><br><br>
				<div class="form-group">
					<label class="col-sm-4">Estudios PostGrado</label>
					<div class="col-sm-4">
						<?php
			                //include_once('../control/conexion.php');
			                $comparar="SELECT * FROM titulo_post";

			                $conectando = new Conection();

			                $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
			                $option='';
			                while ( $titulo=pg_fetch_array($verifica)) {
			                     $option.="<option value='".$titulo['id_post_acadmics_tit']."'>".$titulo['post_acadmics_tit']."</option>";
			        
			                } ;

			                echo '<select class="form-control" id="post_acadmics_tit" name="post_acadmics_tit" >';
			                echo '<option value="" selected>Seleccione </option>';
			                echo $option;
			                echo "</select >";
			            ?>
					</div>
				</div>
				</br></br><br><!-- saltos de lineas en bootstrap -->
				<div class="form-group">
									<label class="col-sm-4">En</label>
									<div class="col-sm-4">
										<select name="post_acadmics" class="form-control" id="post_acadmics" required>
										<option value="" selected>Seleccione Primero Arriba</option>
									</select>
									</div>
				</div>
				<br><br><!-- saltos de lineas en bootstrap -->
				<div class="form-group">
					<label class="col-sm-4">Universidad</label>
					<div class="col-sm-6">

						<?php
                                   //include_once('../control/conexion.php');
                                   $comparar="SELECT * FROM universidades";

                                    $conectando = new Conection();

                                    $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                     $option='';
                                 while ( $titulo=pg_fetch_array($verifica)) {
                                            $option.="<option value='".$titulo['nom_univ']."'>".$titulo['nom_univ']."</option>";
        
                                     } ;

                                     echo '<select class="form-control" id="univ_acadmics_post" name="univ_acadmics_post" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo '<option value="Otras">Otras </option>';
                                     echo "</select >";
                    ?>
						<!-- <input name="univ_acadmics_post" type="email_afl" class="form-control" id="univ_acadmics_post" placeholder="UPTP LMR" onblur="javascript:this.value=this.value.toUpperCase();"> -->
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
                            	<a class="btn btn-success" href="../vistas/actuacion_new.php">siguiente</a>
                            </div>
                        </div>

				</div>

			</form>