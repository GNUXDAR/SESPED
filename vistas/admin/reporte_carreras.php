<?php 
include_once('../../control/conexion.php');
include_once('../Chart.class.php'); 
include_once('menu.php');
// ini_set('display_errors', 'on');

?>

<?php  

    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: index.php");
    }
?>
   <!-- main container -->
    <div class="content">

        <!-- end upper main stats -->

        <div id="pad-wrapper" class="form-page">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row form-wrapper">
                <!-- left column -->

                <div class="col-md-2"></div><!--primera columna de centrado-->

                <div id="miPagina" class="col-md-7 column"><!--segunda columna-->

<?php


    $conectando = new Conection();
    //enero
    $sqlcarreras="SELECT * FROM carreras";

    $resulcarreras= pg_query($conectando->conectar(), $sqlcarreras) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    //$carreras=pg_fetch_array($resulcarreras);
    while($carreras=pg_fetch_array($resulcarreras)) {
        $id=$carreras['id_carrera'];
        $sqlCountCarrera="SELECT count(*) FROM prestamo
                          INNER JOIN personas ON (personas.id_persona = prestamo.id_persona)
                           WHERE personas.carrera='$id'";
         $resulCountCarrera= pg_query($conectando->conectar(), $sqlCountCarrera) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
         $countCarrera=pg_fetch_array($resulCountCarrera);
         $title[]=$carreras['nombre_carrera'];
         $value[]=$countCarrera['count'];


    }

    $chart = new Chart_img();
    $chart->chart($value,$title,$name = 'nombre de la imagen',$width = 800,$height = 500,$title_chart = 'Estadistica de Actividad Por Carreras');

    echo '<img src="../img/nombre de la imagen.png">';

?>


                    
 
                </div>
                <div class="col-md-2"></div><!--tercera columna de centrado-->

                </div>
            </div>
        </div>
    </div>


