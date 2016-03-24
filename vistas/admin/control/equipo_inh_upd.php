<?php 

include_once('../control/conexion.php');


	$codigo_equipo = $_POST['codigo_equipo'];
	// echo var_dump(ci, nombre_persona);

$comparar="SELECT * FROM equipos WHERE codigo_equipos='$codigo_equipo'";
$conectando = new Conection();
$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar > 0) { 

$mod=pg_query($conectando->conectar(),  "UPDATE personas set nombre_persona = '$nombre_persona', apel_persona = '$apel_persona', edad_persona = '$edad_persona', sexo_persona = '$sexo_persona' WHERE ci_persona = '$ci'");

    if (!$mod) { 

        // $mod_visitante=pg_query($conectando->conectar(),  "UPDATE personas set nombre_persona = $nombre_persona, apel_persona = $apel_persona, edad_persona = $edad_persona, sexo = $sexo WHERE ci_persona = $ci_persona");

        print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente_upd2.php">');
        }

    else { 
        print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente_upd2.php">');
        }

}

else {
    print ("<script>alert('La cedula: $ci_persona no se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente_upd2.php">');
}

?>
