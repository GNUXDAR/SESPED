<?php 
	/* destruye la sesion  
	 * y vuelve al login = index.php
	*/
	session_start();
	$_SESSION['usuario'] = array();
	session_destroy();
	header("Location: ../vistas/index.php");
 ?>