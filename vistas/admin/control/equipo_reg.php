<?php 

include_once('conexion.php');


	$codigo_equipo = $_POST['codigo_equipo'];
    $placa = $_POST['placa'];
	$sistema_operativo = $_POST['sistema_operativo'];
	$tipo_sistema = $_POST['tipo_sistema'];
    $procesador = $_POST['procesador'];
    $memoria=$_POST['memoria'];
    $dd=$_POST['dd'];

	//$carrera_clin = $_POST['carrera_clin'];
	//echo var_dump(cedula_clin);

$comparar="SELECT * FROM equipos WHERE codigo_equipos='$codigo_equipo'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar==0) {

$INSERTAR=pg_query($conectando->conectar(),  "INSERT INTO equipos (codigo_equipos, placa, sistema_operativo, tipo_sistema, procesador, memoria,dd)
VALUES ('$codigo_equipo', '$placa', '$sistema_operativo','$tipo_sistema', '$procesador', '$memoria','$dd')");


if (!$INSERTAR) { 

//     $INSERTAR_VISITANTE=pg_query($conectando->conectar(),  "INSERT INTO visitantes (ci_visitante, procedencia)
// VALUES ('$cedula_persona','$procedencia')");

    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo.php">');
    }

}

else {
    print ("<script>alert('El codigo: $codigo_equipo ya se encuentra registrado');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/equipo.php">');
}

?>
