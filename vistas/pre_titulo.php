<?php
	
	$id_titulo=$_POST['id_pre_acadmics_tit'];
	include_once('../control/conexion.php');
	$conectando = new Conection();
	$comparar="SELECT * FROM pre_acadmics where id_pre_acadmics_tit='$id_titulo'";
	$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
	$option='';
		while ( $titulo=pg_fetch_array($verifica)) {
		 	$option.="<option value='".$titulo['id_pre_acadmics']."'>".$titulo['nom_pre_acadmics']."</option>";
		// }
		 } ;

		 echo $option;


 ?>