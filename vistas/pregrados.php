<?php 
include_once('../control/conexion.php');
include_once('../control/PerfilProfesional.php');
include_once('../control/session.php');
ini_set('display_errors', 'on');

         //$perfilProfesional = new PerfilProfesional();
        //$perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
        $id_pre_acadmics_tit = $_POST['id_pre_acadmics_tit'];
         
         //$id_prof= $perfil["id_prof"];
         $consulta = "SELECT * from pre_acadmics WHERE id_pre_acadmics_tit = '$id_pre_acadmics_tit'";
         $conectando = new Conection();
         $resultado = pg_query($conectando->conectar(), $consulta);

         $html ='<option>Estudiantes</option>';
         while ($row = pg_fetch_array($resultado)) {
    
    			$html .='<option value="' . $row['id_pre_acadmics'] . '">' . $row['nom_pre_acadmics'] . '</option>';
		}
		echo $html;
?>