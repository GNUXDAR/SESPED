<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  //muestra los errores de php

?> 
    
  
					<h2 align="center">Modificar Datos</h2></br></br>

                    <div class="col-xs-12 col-sm-8 col-md-2"></div>  <!-- cuadrar bien el centrado -->
                    <div class="col-xs-12 col-sm-4 col-md-9">
                     <form method="POST" action="prof_mod.php">
    
                    <div class="form-group">
                            <label class="col-sm-3">Cedula:</label>
                            <div class="col-sm-6">
                                <input value="<?php echo $_POST['ci_prof'];?>" name="ci_prof" id="ci_prof" class="form-control" required type="number" min="00000000" max="30000000" placeholder="12345678" autofocus>  
                            </div>      
                       <div class="action">
                            <input type="submit"  class="btn-flat" id="buscar" value="Buscar"></input>
                        </div> 
                    </div>    
                    </form>
                    <hr>
                   

<?php 

if($_POST){  //inicio if _POST

$ci_prof = $_POST['ci_prof'];

$buscarPersona="SELECT * FROM dp_prof WHERE ci_prof='$ci_prof'";
$conectando = new Conection();

$verificaPersona = pg_query($conectando->conectar(), $buscarPersona) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizarPersona=pg_num_rows($verificaPersona);


    if ($localizarPersona == 1){  //inicio if registrar medico

        $ATRIBUTO=pg_fetch_array($verificaPersona);


         echo '       
                    <h2>Modificando Datos</h2>
            <h3>Datos Personales</h3>
                <form method="POST" action="../control/upd_prof.php" autocomplete="off">
                <input name="id_prof" id="id_prof" value ="'.$ATRIBUTO['id_prof'].'" class="form-control" required type="hidden">
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
                        <input name="nom_prof" type="txt" class="form-control" id="nom_prof" placeholder="Nombres" value="'.$ATRIBUTO['nom_prof'].'" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Apellidos</label>
                      <div class="col-sm-6">
                        <input name="apel_prof" type="txt" class="form-control" id="apel_prof" value="'.$ATRIBUTO['apel_prof'].'" onblur="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                      <label class="col-sm-3">Fecha de Nacimiento</label>
                      <div class="col-sm-6">
                        <input name="fn_prof" type="text" class="form-control" id="fn_prof" value="'.$ATRIBUTO['fn_prof'].'" required>
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
                        <input name="email_prof" type="email_afl" class="form-control" id="email_prof" value="'.$ATRIBUTO['email_prof'].'" onblur="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Estado Civil</label>
                      <div class="col-sm-6">
                        <select name="ecivil_prof" class="form-control" id="ecivil_prof">
                            <option value="'.$ATRIBUTO['apel_prof'].'">'.$ATRIBUTO['ecivil_prof'].'</option>
                            <option value="SOLTERO">Soltero</option>
                            <option value="CASADO">Casado</option>
                        </select>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Grupo Familiar</label>
                      <div class="col-sm-6">
                        <input name="grpf_prof" type="text" class="form-control" id="grpf_prof" value="'.$ATRIBUTO['grpf_prof'].'" onblur="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Direccion de Residencia</label>
                      <div class="col-sm-6">
                        <input name="dir_prof" type="text" class="form-control" id="dir_prof" value="'.$ATRIBUTO['dir_prof'].'" onblur="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Numero de Telefono</label>
                      <div class="col-sm-6">
                        <input name="tlf_prof" type="number" class="form-control" id="tlf_prof" value="'.$ATRIBUTO['tlf_prof'].'" required>
                        <input name="tlf2_prof" type="number" class="form-control" id="tlf2_prof" value="'.$ATRIBUTO['tlf2_prof'].'">
                        </br></br></br>
                        <button type="submit" class="btn btn-info btn-block">Continuar</button>
                      </div>
                    </div>

                </form>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-3"></div>';


}//fin if registra medico

else{ 
    
    print ("<script>alert('El medico con la cedula:$ci_prof ya esta Registrado');</script>");

     }

?>

<?php

} //fin if _POST

?>

              
            
           