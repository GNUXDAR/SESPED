<?php  
/* Sistema de seleccion de personal Desarrollado por: @Arturognuxdar*/
    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: index.php");
    }
?>