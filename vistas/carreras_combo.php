<?php
include_once('../control/conexion.php');
//obtenemos el id de  la  carrera
$id_pre_acadmics_tit = $_POST['titulo_id'];



//obtenemos el los  estudiantes que estudien    la  carrera del id  obtenido
$consulta = "SELECT * from pre_acadmics WHERE id_pre_acadmics_tit = '$id_pre_acadmics_tit'";
$conectando = new Conection();
$resultado = pg_query($conectando->conectar(), $consulta);

$html ='<option>Selecione</option>';
         while ($row = pg_fetch_array($resultado)) {
    
    			$html .='<option value="' . $row['nom_pre_acadmics'] . '">' . $row['nom_pre_acadmics'] . '</option>';
		}
		echo $html;

?>

