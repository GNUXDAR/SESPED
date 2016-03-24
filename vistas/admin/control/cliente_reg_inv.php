<?php 
// para registrar investigador cliente_investigador.php

include_once('conexion.php');


	$cedula_persona = $_POST['ci_persona'];
	$nombre_persona = $_POST['nombre_persona'];
	$apel_persona = $_POST['apel_persona'];
	$edad_persona = $_POST['edad_persona'];
    $sexo = $_POST['sexo'];
    $procedencia=$_POST['procedencia'];
    $carrera=$_POST['carrera']; //verificar para reportes por carreras


	//$carrera_clin = $_POST['carrera_clin'];
	//echo var_dump(cedula_clin);

$comparar="SELECT * FROM personas WHERE ci_persona='$cedula_persona'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar==0) {

$INSERTAR=pg_query($conectando->conectar(),  "INSERT INTO personas (ci_persona, nombre_persona, apel_persona, edad_persona, sexo_persona, carrera)
VALUES ('$cedula_persona','$nombre_persona', '$apel_persona', '$edad_persona','$sexo', '$carrera')");

// -------------------------------PROBANDO INSERT------------------------------
$INSERTAR_VISITANTE=pg_query($conectando->conectar(),  "INSERT INTO visitantes (ci_visitante, procedencia, id_carrera)
VALUES ('$cedula_persona','$procedencia', '$carrera')");


if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente.php">');
    }

}

else {
    print ("<script>alert('La cedula: $cedula_persona ya se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/cliente.php">');
}

?>
