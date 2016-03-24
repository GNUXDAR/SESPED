<?php

	require_once('conex.class.php');
	require_once('../config/config.php');
	/**
	* 
	*/
	class Actividad 
	{

		
		// public $co_actividad_usuario;
		// public $fecha;
		// public $actividad;
		// public $co_usuario;

		function __construct()
		{
			
		}


		public function actividad_usuario($co_actividad,$fecha,$actividad,$co_usuario)
		{
			$conectar= new conectorPGSQL();	// objeto de la clase base de datos
			$Consulta="INSERT INTO i030t_actividad_usuario (co_actividad,
														fecha,
														actividad,
														co_usuario) 

												VALUES ('$co_actividad',
														'$fecha',
														'$actividad',
														'$co_usuario'
														)";
				
				$Resultado=$conectar->Consultas($Consulta);
				if( pg_affected_rows($Resultado) > 0)//Si resulto almenos una fila afectada
         		return 1;         
         		else
         		return 0; 
		}




	}



?>