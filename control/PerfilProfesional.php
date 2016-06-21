<?php
//MODULO DE CONEXION ORIENTADA A OBJETOS
include_once('control/conexion.php');

class PerfilProfesional {

	public function perfil($idUser){

 		$consultaProf = "SELECT * FROM dp_prof where id_user = '$idUser' " ;
		$conectandoProf = new Conection();
        $resultadoProf = pg_query($conectandoProf->conectar(), $consultaProf);

        $rowProf = pg_fetch_array($resultadoProf);
		return $rowProf;
	}

}

?>

