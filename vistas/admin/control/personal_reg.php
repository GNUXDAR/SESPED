<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
	
	$ci_personal = $_POST['ci_personal'];
	$nombre_personal = $_POST['nombre_personal'];
	$apellido_personal = $_POST['apellido_personal'];
	$id_salas = $_POST['id_salas'];
	$sexo_personal = $_POST['sexo_personal'];
	$tlf_personal = $_POST['tlf_personal'];

// echo $tlf_personal;
$comparar="SELECT * FROM personal WHERE ci_personal='$ci_personal'";
//$verifica=pg_exec($comparar); 
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
//echo "('$nombre_personal','$apellido_personal', '$ci_personal')";
if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO personal (nombre_personal, apellido_personal, ci_personal, id_salas, sexo_personal, tlf_personal)
	VALUES ('$nombre_personal','$apellido_personal', '$ci_personal', '$id_salas', '$sexo_personal', '$tlf_personal')");	
	
	
	

if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/personal.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/personal.php">');
    }

}

else {
    print ("<script>alert('La cedula: $ci_personal ya se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../admin/personal.php">');
}

?>