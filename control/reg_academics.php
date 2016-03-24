<?php 

include_once('conexion.php');
include_once('session.php');
//valida los errores imnternos de php
ini_set('display_errors', 'on');


$pre_acadmics		= $_POST['pre_acadmics'];
$post_acadmics		= $_POST['post_acadmics'];
$prom_acadmics		= $_POST['prom_acadmics'];
$univ_academics		= $_POST['univ_academics'];

//$comparar="SELECT ci_prof FROM acadmics_prof INNER JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof ";

$comparar="SELECT * FROM dp_prof ";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
	if ($localizar!=0) {
		$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO acadmics_prof (pre_acadmics, post_acadmics, prom_acadmics,  univ_academics)
		VALUES ('$pre_acadmics', '$post_acadmics', '$prom_acadmics', '$univ_academics')");	
		
		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_new.php">');
		    }

		else { 
		    print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    print('<meta http-equiv="refresh" content="0; URL=../vistas/actuacion_new.php">');
		    }

	}

	else {
	    print ("<script>alert('El Profesional ya se encuentra Registrado');</script>");
	    print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_new.php">');
}

?>