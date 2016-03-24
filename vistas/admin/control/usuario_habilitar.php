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

$comparar="SELECT * FROM personal WHERE ci_personal='$ci'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica); 

if ($localizar > 0) { 

$mod=pg_query($conectando->conectar(),  "UPDATE personal set status = '1' WHERE ci_personal = '$ci'");
$mod2=pg_query($conectando->conectar(),  "UPDATE usuarios set status_user = '1' WHERE ci_user = '$ci'");

    if ($mod && mod2) { 

        // $mod_visitante=pg_query($conectando->conectar(),  "UPDATE personas set nombre_persona = $nombre_persona, apel_persona = $apel_persona, edad_persona = $edad_persona, sexo = $sexo WHERE ci_persona = $ci_persona");
        print ("<script>alert('El usuario fue Habilitada exitosamente');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_abh.php">');
       
        }

    else { 
        print ("<script>alert('El usuario no pudo ser Habilitada');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_abh.php">');
        
        }

}

else {
    print ("<script>alert('La cedula: $ci_personal no se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_inh.php">');
}

?>
