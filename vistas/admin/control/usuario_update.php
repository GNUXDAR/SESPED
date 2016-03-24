<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
ini_set('display_errors', 'on');


// var_dump($_POST); 
	$ci_user = $_POST['ci_user'];
	$contra = $_POST['contra'];
	$contra2 = $_POST['contra2'];
// die('no se');

// $comparar="SELECT * FROM personal WHERE ci_personal='$ci_per'";
if ($contra != $contra2) {
	print ("<script>alert('Contraseña Diferente');</script>");
	print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_upd.php">');

}

else{

$conectando = new Conection();

// $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

// $localizar=pg_num_rows($verifica);
// // echo "'$ci_user','$nombre_user','$apel_user', '$edad_user','$direc_user','$usuario', '$contra'";
// if ($localizar==0) {

	$mod=pg_query($conectando->conectar(),  "UPDATE usuarios set contra = '$contra' WHERE ci_user = '$ci_user'");

	if (!$mod) { 
	    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_upd.php">');
	    }

	else { 
	    print ("<script>alert('La Clave fue modificada exitsamente');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../../admin/usuario_upd.php">');
	    }

}

// else {
//     print ("<script>alert('La cedula: $ci_personal ya se encuentra registrada');</script>");
//     print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
// }

?>