<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
	
	$direcc_salas = $_POST['direcc_salas'];
	$codigo_salas = $_POST['codigo_salas'];
	


$comparar="SELECT * FROM salas WHERE codigo_salas='$direcc_salas'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO salas (direcc_salas, codigo_salas)
	VALUES ('$direcc_salas','$codigo_salas')");	
	//No registra con el estado

if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/salas.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitsamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/salas.php">');
    }

}

else {
    print ("<script>alert('El codigo: $codigo_salas ya se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/salas.php">');
}

?>