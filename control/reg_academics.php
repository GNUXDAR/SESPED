<?php 

include_once('conexion.php');
include_once('session.php');
//valida los errores imnternos de php
//ini_set('display_errors', 'on');

$ci_prof			 = $_POST['ci_prof'];
$pre_acadmics		 = $_POST['pre_acadmics'];
$post_acadmics		 = $_POST['post_acadmics'];
$prom_acadmics		 = $_POST['prom_acadmics'];
$univ_acadmics_pre   = $_POST['univ_acadmics_pre'];
$pre_acadmics_tit  = $_POST['pre_acadmics_tit'];
$post_acadmics_tit = $_POST['post_acadmics_tit'];
$univ_acadmics_post  = $_POST['univ_acadmics_post'];
if($pre_acadmics_tit == "TSU"){
	$pre_acadmics_valor = 5;
}elseif($pre_acadmics_tit == "LICENCIADO"){
	$pre_acadmics_valor = 10;
}elseif($pre_acadmics_tit == "INGENIERO"){
	$pre_acadmics_valor = 10;
};
if($post_acadmics_tit == "ESPECIALISTA"){
	$post_acadmics_valor = 15;
}elseif($post_acadmics_tit == "MAGÍSTER"){
	$post_acadmics_valor = 20;
}elseif($post_acadmics_tit == "DOCTOR"){
	$post_acadmics_valor = 25;
}else{
	$post_acadmics_valor = 0;
};

//$comparar="SELECT ci_prof FROM acadmics_prof INNER JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof ";
//INSERT INTO acadmics_prof (id_prof) SELECT id_prof FROM dp_prof WHERE ci_prof = $ci_prof'

$comparar="SELECT * FROM dp_prof WHERE ci_prof = '$ci_prof'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar!=0) {
	
	$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO acadmics_prof (id_prof, pre_acadmics, post_acadmics, prom_acadmics,  univ_acadmics_pre, pre_acadmics_tit, post_acadmics_tit, univ_acadmics_post, pre_acadmics_valor, post_acadmics_valor)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),'$pre_acadmics', '$post_acadmics', '$prom_acadmics', '$univ_acadmics_pre', '$pre_acadmics_tit', '$post_acadmics_tit', '$univ_acadmics_post', '$pre_acadmics_valor', '$post_acadmics_valor')");	
	if (!$INSERTAR) { 
		print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_new.php">');
	}

	else { 
		print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		header("Location: ../vistas/actuacion_new.php?ci_prof=$ci_prof"); 
	}

}

else {
	print ("<script>alert('El Profesional ya se encuentra Registrado');</script>");
	print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_new.php">');
}

?>
