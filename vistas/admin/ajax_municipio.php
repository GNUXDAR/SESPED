<?php
	
	$id_estado=$_POST['id_estado'];
	include_once('../control/conexion.php');
	$conectando = new Conection();
	$comparar="SELECT * FROM municipios where id_estado='$id_estado'";
	$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
	$option='';
		while ( $estado=pg_fetch_array($verifica)) {
		 	$option.="<option value='".$estado['id_municipio']."'>".$estado['municipio']."</option>";
		// }
		 } ;

		 echo $option;


 ?>