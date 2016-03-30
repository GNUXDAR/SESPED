<?php 

include_once('conexion.php');
include_once('session.php');
//valida los errores imnternos de php
ini_set('display_errors', 'on');

$ci_prof		= $_POST['ci_prof'];
$inst_exp		= $_POST['inst_exp'];
$anios_servc_exp= $_POST['anios_servc_exp'];
$cargo_exp		= $_POST['cargo_exp'];
$des_cargo_exp	= $_POST['des_cargo_exp'];

//$comparar="SELECT ci_prof FROM  	exp_laboral_prof INNER JOIN exp_laboral_prof ON  	exp_laboral_prof.id_prof = exp_laboral_prof.id_prof ";

$comparar="SELECT * FROM dp_prof WHERE ci_prof = '$ci_prof'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
	if ($localizar!=0) {
		$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO exp_laboral_prof (id_prof, inst_exp, anios_servc_exp, cargo_exp,  des_cargo_exp)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),'$inst_exp', '$anios_servc_exp', '$cargo_exp', '$des_cargo_exp')");	
		
		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/explab_new.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    header("Location: ../vistas/principal.php?ci_prof=$ci_prof");
		    header(string)
		    //print('<meta http-equiv="refresh" content="0; URL=../vistas/principal.php">');
		    }

	}

	else {
	    print ("<script>alert('El Profesional ya se encuentra Registrado');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/explab_new.php">');
}

?>