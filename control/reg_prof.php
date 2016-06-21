<?php 

include_once('conexion.php');
include_once('PerfilProfesional.php');
include_once('session.php');
//valida los errores imnternos de php
ini_set('display_errors', 'on');
//var_dump($_POST);

//$ci_prof		= $_POST['ci_prof'];
$nom_prof		= $_POST['nom_prof'];
$apel_prof		= $_POST['apel_prof'];
//$email_prof		= $_POST['email_prof'];
$fn_prof		= $_POST['fn_prof'];
$ecivil_prof	= $_POST['ecivil_prof'];
$dir_prof		= $_POST['dir_prof'];
$tlf_prof		= $_POST['tlf_prof'];

$conectando = new Conection();
$perfilProfesional = new PerfilProfesional();
$perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
$ci_prof = $perfil['ci_prof'];

		$INSERTAR = pg_query($conectando->conectar(), "UPDATE dp_prof set nom_prof = '$nom_prof', apel_prof = '$apel_prof', fn_prof = '$fn_prof' , ecivil_prof = '$ecivil_prof', dir_prof = '$dir_prof', tlf_prof = '$tlf_prof'  WHERE  ci_prof = '$ci_prof'");	

		if (!$INSERTAR) { 
		    echo "Los datos no pudieron ser registrado";
		    //print('<meta http-equiv="refresh" content="0; URL=../vistas/prof_new.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    header("location: ../vistas/academics_new.php"); 
		    }

?>