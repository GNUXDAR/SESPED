<?php 

include_once('../control/conexion.php');

	$fecha_prestamo = $_POST['fecha_prestamo'];
	$hora_prestamo = $_POST['hora_prestamo'];
	$id_persona = $_POST['id_persona'];
    $equipo = $_POST['equipo'];

$comparar="SELECT * FROM personas WHERE id_persona = $id_persona AND persona_status_prestamo = 1";
//die($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar>0) {
$slqInsert= "INSERT INTO prestamo (fecha_prestamo, hora_prestamo, id_persona, id_equipos)
VALUES ('$fecha_prestamo', '$hora_prestamo','$id_persona', '$equipo')";

$INSERTAR=pg_query($conectando->conectar(), $slqInsert)or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());


if (!$INSERTAR) { 

    // $INSERTAR_VISITANTE=pg_query($conectando->conectar(),  "INSERT INTO visitantes (ci_visitante, procedencia)
// VALUES ('$cedula_persona','$procedencia')");

    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_prestamo.php">');
    }

else {  
    $modificar_eqipos = pg_query($conectando->conectar(), "UPDATE equipos set status_prestamo = '2' WHERE id_equipos='$equipo'");
    $modificar_personas = pg_query($conectando->conectar(), "UPDATE personas set persona_status_prestamo = '2' WHERE id_persona='$id_persona'");

    if ($modificar_eqipos && $modificar_personas){
        print ("<script>alert('Prestamo Realizado');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_prestamo.php">');
    }
    else{
        print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_prestamo.php">');

    }

    }

}

else {
    print ("<script>alert('La persona ya esta usando un equipo ');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_prestamo.php">');
}

?>
