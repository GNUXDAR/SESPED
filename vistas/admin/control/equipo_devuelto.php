<?php 

include_once('../control/conexion.php');

    $fecha_prestamo = $_POST['fecha_prestamo'];
    $hora_prestamo = $_POST['hora_prestamo'];
    $id_persona = $_POST['id_persona'];
    $equipo = $_POST['equipo'];
    $prestamo = $_POST['id_prestamo'];


$comparar="SELECT * FROM personas WHERE id_persona = $id_persona AND persona_status_prestamo = 2";
 //die('chao');
//die($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL ACTUALIZAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar>0) {
    $slqInsert= "UPDATE equipos set status_prestamo = '1' WHERE id_equipos='$equipo'";
    // $slqInsert2="UPDATE personas set persona_status_prestamo = '1' WHERE id_persona='$id_persona'";
    // $slqInsert= "INSERT INTO prestamo (fecha_prestamo, hora_prestamo, id_persona, id_equipos)
    // VALUES ('$fecha_prestamo', '$hora_prestamo','$id_persona', '$equipo')";

    $INSERTAR=pg_query($conectando->conectar(), $slqInsert)or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());


    if (!$INSERTAR) { 

        // $INSERTAR_VISITANTE=pg_query($conectando->conectar(),  "INSERT INTO visitantes (ci_visitante, procedencia)
    // VALUES ('$cedula_persona','$procedencia')");

        print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_devolver.php">');
        }

    else {  
        $modificar_equipos = pg_query($conectando->conectar(), "UPDATE equipos set status_prestamo = '1' WHERE id_equipos='$equipo'");
        $modificar_personas = pg_query($conectando->conectar(), "UPDATE personas set persona_status_prestamo = '1' WHERE id_persona='$id_persona'");
        $modificar_prestamo = pg_query($conectando->conectar(), "UPDATE prestamo set status = '3' 
            WHERE id_prestamo='$prestamo'");

        if ($modificar_equipos && $modificar_personas && $modificar_prestamo){
            print ("<script>alert('Equipo devuelto con Exito');</script>");
            print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_devolver.php">');
        }
        else{
            print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
            print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_devolver.php">');

        }

    }
}

else {
    print ("<script>alert('La persona ya devolvio el equipo ');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo_devolver.php">');
}

?>
