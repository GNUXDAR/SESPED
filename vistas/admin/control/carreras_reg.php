<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
	
	$nombre_carrera = $_POST['nombre_carrera'];
    $id_departamento = $_POST['id_departamento'];
	


$comparar="SELECT * FROM carreras WHERE nombre_carrera='$nombre_carrera'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO carreras (nombre_carrera, id_departamento)
	VALUES ('$nombre_carrera','$id_departamento')");	
	

if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/carreras.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitsamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/departamentos.php">');
    }

}

else {
    print ("<script>alert('La cedula: $nombre_carrera ya se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/carreras.php">');
}

?>