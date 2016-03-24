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
<!DOCTYPE html>
<html lang="es">
<head>
   
<body>
   
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
    $sqlCountEnero="SELECT count(id_prestamo) as enero FROM prestamo WHERE fecha_prestamo between '2015-01-01' and '2015-01-31'";

    $resulCountEnero= pg_query($conectando->conectar(), $sqlCountEnero) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countEnero=pg_fetch_array($resulCountEnero);

    //febrero
    $sqlCountFebrero="SELECT count(id_prestamo) as febrero FROM prestamo WHERE fecha_prestamo between '2015-02-01' and '2015-02-28'";

    $resulCountFebrero= pg_query($conectando->conectar(), $sqlCountFebrero) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countFebrero=pg_fetch_array($resulCountFebrero);

    //marzo
    $sqlCountMarzo="SELECT count(id_prestamo) as marzo FROM prestamo WHERE fecha_prestamo between '2015-03-01' and '2015-03-31'";

    $resulCountMarzo= pg_query($conectando->conectar(), $sqlCountMarzo) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countMarzo=pg_fetch_array($resulCountMarzo);

    //abrir
    $sqlCountAbril="SELECT count(id_prestamo) as abril FROM prestamo WHERE fecha_prestamo between '2015-04-01' and '2015-04-30'";

    $resulCountAbril= pg_query($conectando->conectar(), $sqlCountAbril) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countAbril=pg_fetch_array($resulCountAbril);


    //mayo
    $sqlCountMayo="SELECT count(id_prestamo) as mayo FROM prestamo WHERE fecha_prestamo between '2015-05-01' and '2015-05-31'";

    $resulCountMayo= pg_query($conectando->conectar(), $sqlCountMayo) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countMayo=pg_fetch_array($resulCountMayo);

    //junio
    $sqlCountJunio="SELECT count(id_prestamo) as junio FROM prestamo WHERE fecha_prestamo between '2015-06-01' and '2015-06-30'";

    $resulCountJunio= pg_query($conectando->conectar(), $sqlCountJunio) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countJunio=pg_fetch_array($resulCountJunio);

    // //julio
    $sqlCountJulio="SELECT count(id_prestamo) as julio FROM prestamo WHERE fecha_prestamo between '2015-07-01' and '2015-07-31'";

    $resulCountJulio= pg_query($conectando->conectar(), $sqlCountJulio) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countJulio=pg_fetch_array($resulCountJulio);

    // //agosto
    $sqlCountAgosto="SELECT count(id_prestamo) as agosto FROM prestamo WHERE fecha_prestamo between '2015-08-01' and '2015-08-31'";

    $resulCountAgosto= pg_query($conectando->conectar(), $sqlCountAgosto) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countAgosto=pg_fetch_array($resulCountAgosto);

    // //septiembre
    $sqlCountSeptiembre="SELECT count(id_prestamo) as septiembre FROM prestamo WHERE fecha_prestamo between '2015-09-01' and '2015-09-30'";

    $resulCountSeptiembre= pg_query($conectando->conectar(), $sqlCountSeptiembre) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countSeptiembre=pg_fetch_array($resulCountSeptiembre);

    // //octubre
    $sqlCountOctubre="SELECT count(id_prestamo) as octubre FROM prestamo WHERE fecha_prestamo between '2015-10-01' and '2015-10-31'";

    $resulCountOctubre= pg_query($conectando->conectar(), $sqlCountOctubre) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countOctubre=pg_fetch_array($resulCountOctubre);

    // //noviembre
    $sqlCountNoviembre="SELECT count(id_prestamo) as noviembre FROM prestamo WHERE fecha_prestamo between '2015-11-01' and '2015-11-30'";

    $resulCountNoviembre= pg_query($conectando->conectar(), $sqlCountNoviembre) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countNoviembre=pg_fetch_array($resulCountNoviembre);

    //diciembre
    $sqlCountDiciembre="SELECT count(id_prestamo) as diciembre FROM prestamo WHERE fecha_prestamo between '2015-12-01' and '2015-12-31'";

    $resulCountDiciembre= pg_query($conectando->conectar(), $sqlCountDiciembre) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $countDiciembre=pg_fetch_array($resulCountDiciembre);


    $title[]='Enero';
    $value[]=$countEnero['enero'];
    $title[]='Febrero';
    $value[]=$countFebrero['febrero'];
    $title[]='Marzo';
    $value[]=$countMarzo['marzo'];
    $title[]='Abril';
    $value[]=$countAbril['abril'];
    $title[]='Mayo';
    $value[]=$countMayo['mayo'];
    $title[]='Junio';
    $value[]=$countJunio['junio'];
    $title[]='Julio';
    $value[]=$countJulio['julio'];
    $title[]='Agosto';
    $value[]=$countAgosto['agosto'];
    $title[]='Septiembre';
    $value[]=$countSeptiembre['septiembre'];
    $title[]='Octubre';
    $value[]=$countOctubre['octubre'];
    $title[]='Noviembre';
    $value[]=$countNoviembre['noviembre'];
    $title[]='Diciembre';
    $value[]=$countDiciembre['diciembre'];
    // var_dump($value);

    $chart = new Chart_img();
    $chart->chartBar($value,$title,$name = 'nombre de la imagen',$width = 700,$height = 500,$title_chart = 'Estadistica de Actividad Mensual');

    echo '<img src="../img/nombre de la imagen.png">';

?>


                    
 
                </div>
                <div class="col-md-2"></div><!--tercera columna de centrado-->

                </div>
            </div>
        </div>
    </div>


