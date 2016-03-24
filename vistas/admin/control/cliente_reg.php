<?php 
 session_start();
// para registrar visitantes cliente_visitante.php

include_once('conexion.php');


	$ci_persona = $_POST['ci_persona'];
	$nombre_persona = $_POST['nombre_persona'];
	$apel_persona = $_POST['apel_persona'];
	$edad_persona = $_POST['edad_persona'];
    $sexo = $_POST['sexo'];
    $parroquia=$_POST['parroquia'];

	//$carrera_clin = $_POST['carrera_clin'];
	//echo var_dump(cedula_clin);

$comparar="SELECT * FROM personas WHERE ci_persona='$ci_persona'";
//$verifica=pg_exec($comparar);
$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$localizar=pg_num_rows($verifica);
if ($localizar==0) {

$INSERTAR=pg_query($conectando->conectar(),  "INSERT INTO personas (ci_persona, nombre_persona, apel_persona, edad_persona, sexo_persona)
VALUES ('$ci_persona','$nombre_persona', '$apel_persona', '$edad_persona','$sexo')");


if (!$INSERTAR) { 

        if ($_SESSION['status_user']==1) {
             print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/admin/cliente.php">');
        } 

        if ($_SESSION['status_user']==2) {
             print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente.php">');
        } 
    }

else { 
        if ($_SESSION['status_user']==1) {
             print ("<script>alert('Los datos fueron almacenados Exitosamente');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/admin/cliente.php">');
        } 

        if ($_SESSION['status_user']==2) {
             print ("<script>alert('Los datos fueron almacenados Exitosamente');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/admin/cliente.php">');
        } 

    }

}

else {
    if ($_SESSION['status_user']==1) {
        print ("<script>alert('La cedula: $cedula_persona ya se encuentra registrada');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/admin/cliente.php">');
        } 

    if ($_SESSION['status_user']==2) {
        print ("<script>alert('La cedula: $cedula_persona ya se encuentra registrada');</script>");
        print('<meta http-equiv="refresh" content="0; URL=../vistas/admin/cliente.php">');
        } 
}

?>
