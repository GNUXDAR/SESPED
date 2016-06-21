<?php 
/*Desarrollo para: SESPED Sistema Experto de Seleccion de Personal Docente
 *Desarrollo por: @Gnuxdar
 */ 
 include_once('conexion.php');
 
ini_set('display_errors', 'on');


// var_dump($_POST); 
	$ci_prof	= $_POST['ci_prof'];
	$login_usr	= $_POST['login_usr'];
	$pass_usr 	= $_POST['pass_usr'];
	$status_usr = $_POST['status_usr'];
	$tipo_usr 	= $_POST['tipo_usr'];
	$pass_usr2 	= $_POST['pass_usr2'];
	

	if ($pass_usr != $pass_usr2) {
	print ("<script>alert('Contraseña Diferente');</script>");
	print('<meta http-equiv="refresh" content="0; URL=../vistas/page_register.php">');
	}else{

	//$pass_usr =	password_hash($pass_usr, PASSWORD_DEFAULT)."\n";  //encriptando clave con password_hash
	
	$conectando = new Conection();

	$buscarUsuario="SELECT * FROM user_system WHERE login_usr ='$login_usr'";

    $verificaUsuario = pg_query($conectando->conectar(), $buscarUsuario) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
    $localizarUsuario=pg_num_rows($verificaUsuario);

     if ($localizarUsuario > 0){
     	print ("<script>alert('El Nombre de usuario: $login_usr No esta Disponible');</script>");
		print('<meta http-equiv="refresh" content="0; URL=../vistas/page_register.php">');

     }

     else{

		$INSERTAR=pg_query($conectando->conectar(), "INSERT INTO user_system (login_usr, pass_usr, status_usr, tipo_usr)
		VALUES ('$login_usr', '$pass_usr', '$status_usr', '$tipo_usr')");

		$INSERTAR2=pg_query($conectando->conectar(), "INSERT INTO dp_prof (ci_prof, id_user, email_prof)
		VALUES ('$ci_prof', (SELECT id_user FROM user_system WHERE login_usr = '$login_usr'), '$login_usr')");

	if (!$INSERTAR AND !$INSERTAR2) { 
	    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/page_register.php">');
	    }

	else { 
	    print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/principal.php">');
	    }

}
}
?>