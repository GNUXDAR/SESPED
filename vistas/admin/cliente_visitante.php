<!-- ----------------------main container -----------tipo externo-------------------------------------------->
					<!-- <h2 align="center">Registrar Visitantes</h2></br></br> -->

                    <form method="POST" action="../control/cliente_reg.php" autocomplete="off">
    
                        

                        <div class="field-box">
                            <label>Cedula:</label>
                            <div class="col-md-7">
                                <input name="ci_persona" id="ci_persona" class="form-control" required type="number" min="00000000" max="99999999" autofocus placeholder="12345678">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Nombre:</label>
                            <div class="col-md-7">
                                <input name="nombre_persona" id="nombre_persona" class="form-control" required autofocus type="text" onblur="javascript:this.value=this.value.toUpperCase();" placeholder="Ana  Maria">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Apellido:</label>
                            <div class="col-md-7">
                                <input name="apel_persona" id="apel_persona" class="form-control" required type="text" onblur="javascript:this.value=this.value.toUpperCase();" placeholder="Lunar Guerra">
                            </div>                            
                        </div>
                        
                        <div class="field-box">
                            <label>Edad:</label>
                            <div class="col-md-7">
                                <input name="edad_persona" id="edad_persona" class="form-control" required type="number" min="00000000" max="99999999" placeholder="33">
                            </div>                            
                        </div>
                        
                        <div class="field-box">
                            <label>Sexo:</label>
                            <div class="col-md-7">
                                <select name="sexo">
                                    <option value="" selected>Seleccione</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                            </div>                            
                        </div>

                        <div class="field-box">
                            <label>Estados:</label>
                            <div class="col-md-7">
                               
                                   
                                   <?php
                                   include_once('../control/conexion.php');
                                   $comparar="SELECT * FROM estados";

                                    $conectando = new Conection();

                                    $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                     $option='';
                                 while ( $estado=pg_fetch_array($verifica)) {
                                            $option.="<option value='".$estado['id_estado']."'>".$estado['estado']."</option>";
        
                                     } ;

                                     echo '<select id="estado" name="estado" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo "</select >";
                                   ?>

                               
                            </div>                            
                        </div> 

                        <div class="field-box">
                            <label>Municipio:</label>
                            <div class="col-md-7">
                               <select name="municipio" id="municipio">
                                         <option value="" selected>........</option>

                               </select>

                               
                            </div>                            
                        </div> 

                        <div class="field-box">
                            <label>Parroquia:</label>
                            <div class="col-md-7">
                               <select name="parroquia" id="parroquia">
                                         <option value="" selected>........</option>

                               </select>

                               
                            </div>                            
                        </div> 


                        <div class="action">
                            <input type="submit"  class="btn-flat" id="registrar" value="Registrar"></input>
                            
                        </div> 
                        
                    </form>

<script type="text/javascript">
    
$(document).ready(function () {
 

    $("#estado").click(function(){
        
        $("#municipio").load('ajax_municipio.php', { id_estado : $("#estado").val() } , function(resp) { });
    });
    
    $("#municipio").click(function(){
        
        $("#parroquia").load('ajax_parroquia.php', { id_municipio : $("#municipio").val() } , function(resp) { });
    });

 });

</script>

 