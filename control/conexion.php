<?php
//MODULO DE CONEXION ORIENTADA A OBJETOS

class Conection {
	public function conectar(){
		$CONECTAR="host='localhost' dbname='sesped1' user='gnuxdar' password='123'";
		$CONEXION=pg_connect($CONECTAR);

		if ($CONEXION==NULL) {
		    print("<center>La conexion es nula </center><br/>");
		}

		elseif (!$CONEXION) {
		    print("<center>Error en la conexion </center><br/>");
		}

		return $CONEXION;
	}

}

?>

