<?php 

include_once('conexion.php');
include_once('session.php');
//valida los errores imnternos de php
ini_set('display_errors', 'on');


$id_prof		= $_POST['id_prof'];
$nom_prof		= $_POST['nom_prof'];
$apel_prof		= $_POST['apel_prof'];
$email_prof		= $_POST['email_prof'];
$fn_prof		= $_POST['fn_prof'];
$ecivil_prof	= $_POST['ecivil_prof'];
$grpf_prof		= $_POST['grpf_prof'];
$dir_prof		= $_POST['dir_prof'];
$tlf_prof		= $_POST['tlf_prof'];
$tlf2_prof		= $_POST['tlf2_prof'];

$comparar="SELECT * FROM dp_prof WHERE id_prof = '$id_prof'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
	if ($localizar==1) {


		$INSERTAR=pg_query($conectando->conectar(), "UPDATE dp_prof (nom_prof, apel_prof,  email_prof, fn_prof, ecivil_prof, grpf_prof, dir_prof, tlf_prof)
		VALUES ('$nom_prof', '$apel_prof', '$email_prof', '$fn_prof', '$ecivil_prof', '$grpf_prof', '$dir_prof', '$tlf_prof')");	

		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/prof_mod.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/prof_mod.php">');
		    }

	}

	else {
	    print ("<script>alert('Ha ocurrido un problema');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/prof_mod.php">');
}

?>