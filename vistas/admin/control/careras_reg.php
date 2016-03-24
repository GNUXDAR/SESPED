<?php 
/*Desarrollo para: SIAT-SVO
 *Desarrollo por: @ArturoGnuxdar y Jessenia lopez y ...
 */ 
 include_once('../control/conexion.php');  
 
	
	$direcc_salas = $_POST['nombre_departamento'];
    $id_departamento = $_POST['id_departamento'];
	


$comparar="SELECT * FROM carreras WHERE id_salas='$ci_user'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
echo "('$ci_user','$nombre_user','$apel_user', '$edad_user','$direc_user','$usuario', '$contra'";
if ($localizar==0) {

	$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO usuarios (ci_user, nombre_user, apel_user, edad_user, direc_user, usuario, contra, estado_user)
	VALUES ('$ci_user','$nombre_user','$apel_user', '$edad_user','$direc_user','$usuario', '$contra', '1')");	
	//No registra con el estado

if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
    }

else { 
    print ("<script>alert('Los datos fueron almacenados exitsamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
    }

}

else {
    print ("<script>alert('La cedula: $ci_user ya se encuentra registrada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/user.php">');
}

?>