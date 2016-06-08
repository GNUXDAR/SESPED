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
                                <input value="<?php echo $_POST['ci_prof'];?>" name="ci_prof" id="ci_prof" class="form-control" required type="number" placeholder="12345678" autofocus>  
                            </div>      
                       <div class="action">
                            <input type="submit"  class="btn-flat" id="buscar" value="Buscar"></input>
                        </div> 
                    </div>    
                    </form>
                    <hr>
                   

<?php 

         include_once('form_prof_mod.php');

?>