<?php  
/* Sistema de seleccion de personal Desarrollado por: @Arturognuxdar*/
    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: index.php");
    }
?>
<?php   
        
        include_once('../control/conexion.php');
        include_once('sidebar.php');
        include_once('script.php');

?>  
    <div class="content">
        <div id="pad-wrapper" class="form-page">
            <div class="row header">
                <h3> {SESPED} </h3><br>
                <h4>Sistema Experto para la Selección del Personal Docente de la uptp</h4>

                
            </div>
        </div>
        
    </div>
