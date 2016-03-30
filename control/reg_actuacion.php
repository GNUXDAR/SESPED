<?php 

include_once('conexion.php');
include_once('session.php');
//valida los errores imnternos de php
//ini_set('display_errors', 'on');

$ci_prof		= $_POST['ci_prof'];
$curs_act		= $_POST['curs_act'];
$tall_act		= $_POST['tall_act'];
$rec_act		= $_POST['rec_act'];
$form_act		= $_POST['form_act'];
$even_act		= $_POST['even_act'];
$tri_act		= $_POST['tri_act'];
$proy_sc_act	= $_POST['proy_sc_act'];



//$comparar="SELECT ci_prof FROM actuacion_prof INNER JOIN dp_prof ON actuacion_prof.id_prof = dp_prof.id_prof ";

$comparar="SELECT * FROM dp_prof WHERE ci_prof = '$ci_prof'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
	if ($localizar!=0) {
		$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO actuacion_prof (id_prof, curs_act, tall_act, rec_act,  form_act, even_act, tri_act, proy_sc_act)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),'$curs_act', '$tall_act', '$rec_act', '$form_act', '$even_act', '$tri_act', '$proy_sc_act')");	
		
		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/actuacion_new.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    header("Location: ../vistas/explab_new.php?ci_prof=$ci_prof");
		    //print('<meta http-equiv="refresh" content="0; URL=../vistas/explab_new.php">');
		    }

	}

	else {
	    print ("<script>alert('Ha ocurrido un Error');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/actuacion_new.php">');
}

?>