<?php
	
	$id_municipio=$_POST['id_municipio'];
	include_once('../control/conexion.php');
	$conectando = new Conection();
	$comparar="SELECT * FROM parroquias where id_municipio='$id_municipio'";
	$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
	$option='';
		while ( $estado=pg_fetch_array($verifica)) {
		 	$option.="<option value='".$estado['id_parroquia']."'>".$estado['parroquia']."</option>";
		// }
		 } ;

		 echo $option;


 ?>