<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');
 
ini_set('display_errors', 'on');


// var_dump($_POST); 
	$ci_user = $_POST['ci_user'];

	$usuario = $_POST['usuario'];
	$contra = $_POST['contra'];
	$contra2 = $_POST['contra2'];
// die('no se');

// $comparar="SELECT * FROM personal WHERE ci_personal='$ci_per'";
if ($contra != $contra2) {
	print ("<script>alert('Contraseña Diferente');</script>");
	print('<meta http-equiv="refresh" content="0; URL=../../admin/user.php">');

}

else{

	$conectando = new Conection();

	$buscarUsuario="SELECT * FROM usuarios WHERE usuario ='$usuario'";

    $verificaUsuario = pg_query($conectando->conectar(), $buscarUsuario) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $localizarUsuario=pg_num_rows($verificaUsuario);

     if ($localizarUsuario > 0){
     	print ("<script>alert('El Nombre de usuario: $usuario No esta Disponible');</script>");
		print('<meta http-equiv="refresh" content="0; URL=../../admin/user.php">');

     }

     else{



$conectando = new Conection();

// $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

// $localizar=pg_num_rows($verifica);
// // echo "'$ci_user','$nombre_user','$apel_user', '$edad_user','$direc_user','$usuario', '$contra'";
// if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO usuarios (ci_user, usuario, contra)
	VALUES ('$ci_user', '$usuario', '$contra')");	

	if (!$INSERTAR) { 
	    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
	    }

	else { 
	    print ("<script>alert('Los datos fueron almacenados exitsamente');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../../admin/user.php">');
	    }

}
}

// else {
//     print ("<script>alert('La cedula: $ci_personal ya se encuentra registrada');</script>");
//     print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
// }

?>