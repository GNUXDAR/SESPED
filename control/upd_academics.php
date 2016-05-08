<?php 
include_once('conexion.php');
include_once('session.php');
ini_set('display_errors', 'on'); //valida los errores imnternos de php

$ci_prof			= $_POST['ci_prof'];
$pre_acadmics		= $_POST['pre_acadmics'];
$post_acadmics		= $_POST['post_acadmics'];
$prom_acadmics		= $_POST['prom_acadmics'];
$univ_academics		= $_POST['univ_academics'];

//echo $ci_prof;
$comparar = "SELECT * FROM acadmics_prof INNER JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof WHERE ci_prof = $ci_prof";
//echo $comparar;
//die();
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
	if ($localizar > 0) {

		$INSERTAR=pg_query($conectando->conectar(), "UPDATE acadmics_prof set pre_acadmics = '$pre_acadmics', post_acadmics = '$post_acadmics',  prom_acadmics = '$prom_acadmics', univ_academics =  '$univ_academics' WHERE ci_prof = $ci_prof");

		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_mod.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_mod.php">');
		    }


	}

	else {
	    print ("<script>alert('Ha ocurrido un problema');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_mod.php">');
}

?>