<?php 

include_once('../control/conexion.php');


	$ci = $_POST['ci'];
	// $nombre_persona = $_POST['nombre_persona'];
	// $apel_persona = $_POST['apel_persona'];
    //$edad_persona = $_POST['edad_persona'];
    //$sexo_persona = $_POST['sexo_persona'];
    // $procedencia=$_POST['procedencia'];
    // $parroquia=$_POST['parroquia'];
	//$carrera_clin = $_POST['carrera_clin'];
	// echo var_dump(ci, nombre_persona);

$comparar="SELECT * FROM personas WHERE ci_persona='$ci'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica); 

if ($localizar > 0) { 

$mod=pg_query($conectando->conectar(),  "UPDATE personas set status = '1' WHERE ci_persona = '$ci'");

    if ($mod) { 

        // $mod_visitante=pg_query($conectando->conectar(),  "UPDATE personas set nombre_persona = $nombre_persona, apel_persona = $apel_persona, edad_persona = $edad_persona, sexo = $sexo WHERE ci_persona = $ci_persona");
        print ("<script>alert('La persona fue Habilitada exitosamente');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente_abh.php">');
       
        }

    else { 
        print ("<script>alert('La persona no pudo ser Habilitada');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente_abh.php">');
        
        }

}

else {
    print ("<script>alert('La cedula: $ci_persona no se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente_abh.php">');
}

?>
