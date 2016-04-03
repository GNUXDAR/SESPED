<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('sidebar.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  //muestra los errores de php

?> 
    
  
					<h2 align="center">Modificar Datos</h2></br></br>

                    <div class="col-xs-12 col-sm-8 col-md-2"></div> 
                    <div class="col-xs-12 col-sm-4 col-md-9">
                    <form method="POST" action="academics_mod.php"> <!--form-->
    
                    <div class="form-group">
                            <label class="col-sm-3">Cedula:</label>
                            <div class="col-sm-6">
                                <input value="<?php echo $_POST['ci_prof'];?>" name="ci_prof" id="ci_prof" class="form-control" required type="number" placeholder="12345678" autofocus>  
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

$buscarPersona="SELECT * FROM acadmics_prof INNER JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof WHERE ci_prof = $ci_prof";
$conectando = new Conection();

$verificaPersona = pg_query($conectando->conectar(), $buscarPersona) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizarPersona=pg_num_rows($verificaPersona);


    if ($localizarPersona > 0){  //inicio if registrar profesional

        $ATRIBUTO=pg_fetch_array($verificaPersona);


         echo '       
                    <h2>Modificando Datos</h2>
            <h3>Datos Academicos</h3>
                <form method="POST" action="../control/upd_academics.php" autocomplete="off">
          </br></br></br><!-- saltos de lineas en bootstrap -->
          <div class="form-group">
                <label class="col-sm-3">Estudios PreGrado</label>
              <div class="col-sm-6">
                <input name="ci_prof" type="hidden" value="<?php echo $ci_prof; ?>">
                <input name="pre_acadmics" type="txt" class="form-control" id="pre_acadmics" value ="'.$ATRIBUTO['pre_acadmics'].'" onblur="javascript:this.value=this.value.toUpperCase();" autofocus required>
              </div>
          </div>
          </br></br></br><!-- saltos de lineas en bootstrap -->
          <div class="form-group">
              <label class="col-sm-3">Año de Graduacion</label>
              <div class="col-sm-6">
                <input name="prom_acadmics" type="text" class="form-control" id="prom_acadmics" value ="'.$ATRIBUTO['prom_acadmics'].'" required>
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
                <input name="post_acadmics" type="txt" class="form-control" id="post_acadmics" value ="'.$ATRIBUTO['post_acadmics'].'" onblur="javascript:this.value=this.value.toUpperCase();">
              </div>
          </div>
          </br></br><!-- saltos de lineas en bootstrap -->
          <div class="form-group">
              <label class="col-sm-3">Universidad</label>
              <div class="col-sm-6">
                <input name="univ_academics" type="email_afl" class="form-control" id="univ_academics" value ="'.$ATRIBUTO['univ_academics'].'" onblur="javascript:this.value=this.value.toUpperCase();" required>
                </br></br></br>
                <button type="submit" class="btn btn-info btn-block">Continuar</button>
              </div>
              </div>
          </div>
                
          </div>

        </form>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

';


}//fin if registra profesional

else{ 
    
    print ("<script>alert('El Profesional con la cedula:$ci_prof no esta Registrado');</script>");

     }

?>

<?php

} //fin if _POST

?>

              
            
           