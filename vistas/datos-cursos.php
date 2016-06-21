<?php 
include_once('../control/conexion.php');
include_once('../control/PerfilProfesional.php');
include_once('../control/session.php');
ini_set('display_errors', 'on');

         $perfilProfesional = new PerfilProfesional();
         $perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
         
		    $id_prof= $perfil["id_prof"];
		$consulta = "SELECT * FROM actuacion_prof where id_prof = $id_prof " ;
		$conectando = new Conection();
		$resultado = pg_query($conectando->conectar(), $consulta);

?>
<table class="table table-striped">
			<tr class="success">
				<td><h6><b>Curso</b></h6></td>
				<td><h6><b>Taller</b></h6></td>
				<td><h6><b>Reconocimiento</b></h6></td>
				
			</tr>
			<?php
			while($row = pg_fetch_array($resultado)){
				echo "<tr>";
				echo " 		<td>".($row["curs_act"])."</td>";
				echo " 		<td>".($row["tall_act"])."</td>";
				echo " 		<td>".($row["rec_act"])."</td>";

				echo "</tr>";
			}
			?>
		</table>