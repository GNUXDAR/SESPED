<?php   
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
	
	$nombre_departamento = $_POST['nombre_departamento'];


$comparar="SELECT * FROM departamento WHERE nombre_departamento='$nombre_departamento'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);

if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO departamento (nombre_departamento)
	VALUES ('$nombre_departamento')");	
	
if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/departamentos.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitsamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/carreras.php">');
    }

}

else {
    print ("<script>alert('El departamento: $nombre_departamento ya se encuentra registrado');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/departamentos.php">');
}
?>