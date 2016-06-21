<?php

$ci_prof = $_GET['ci_prof'];


$buscarPersona="SELECT * FROM dp_prof WHERE ci_prof='$ci_prof'";
$conectando = new Conection();

$verificaPersona = pg_query($conectando->conectar(), $buscarPersona) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizarPersona=pg_num_rows($verificaPersona);


    if ($localizarPersona == 1){  //inicio if registrar profesional

        $ATRIBUTO=pg_fetch_array($verificaPersona);?>

                  <h2>Mostrando Mis Datos</h2>
            <h3>Profesional</h3>
                <table class="table table-striped" id="documentacion">
                <tbody>

                <input name="ci_prof" id="ci_prof" value ="'.$ATRIBUTO['ci_prof'].'" class="form-control" required type="hidden">
                    </br></br></br><!-- saltos de lineas en bootstrap -->
                   
                    </div>
                    </br></br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Nombres</label>
                      <div class="col-sm-6">
                        <label class="col-sm-3"><?php echo $ATRIBUTO['nom_prof']; ?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Apellidos</label>
                      <div class="col-sm-6">
                        <label class="col-sm-6"><?php echo $ATRIBUTO['apel_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                      <label class="col-sm-3">Fecha de Nacimiento</label>
                      <div class="col-sm-3">
                        <label class="col-sm-6"><?php echo $ATRIBUTO['fn_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                      <label class="col-sm-3">Correo</label>
                      <div class="col-sm-6">
                        <label class="col-sm-6"><?php echo $ATRIBUTO['email_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Estado Civil</label>
                      <div class="col-sm-3">
                       <label class="col-sm-6"><?php echo $ATRIBUTO['ecivil_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Grupo Familiar</label>
                      <div class="col-sm-6">
                        <label class="col-sm-6"><?php echo $ATRIBUTO['grpf_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Direccion de Residencia</label>
                      <div class="col-sm-6">
                        <label class="col-sm-6"><?php echo $ATRIBUTO['dir_prof'];?></label>
                      </div>
                    </div>
                    </br></br><!-- saltos de lineas en bootstrap -->
                    <div class="form-group">
                        <label class="col-sm-3">Numero de Telefono</label>
                      <div class="col-sm-3">
                      <label class="col-sm-6"><?php echo $ATRIBUTO['tlf_prof'];?></label> 
                      <label class="col-sm-6"><?php echo $ATRIBUTO['tlf2_prof'];?></label>
                        </br></br></br>
                       <!--  <button type="submit" class="btn btn-info btn-block">Continuar</button> -->
                      </div>
                    </div>
</tbody>
                </form>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-3"></div>';
<?php
                }//fin if registra profesional

    else{ 
    
    print ("<script>alert('El Profesional con la cedula:$ci_prof no esta Registrado');</script>");

     }


?>