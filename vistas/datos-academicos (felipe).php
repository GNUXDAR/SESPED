<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');
ini_set('display_errors', 'on');

		 $id_prof = $_POST['id_prof'];
		 $consulta = "SELECT * FROM acadmics_prof where id_prof = '$id_prof' " ;
		 $conectando = new Conection();
         $resultado = pg_query($conectando->conectar(), $consulta);

?>
<table class="table table-striped">
			<tr class="success">
				<td><h4><b>Titulo</b></h4></td>
				<td><h4><b>Carrera</b></h4></td>
				<td><h4><b>Universidad</b></h4></td>
				<!-- <td><h4><b>Descargar</b></h4></td> -->
				
			</tr>
			<?php
			while($row = pg_fetch_array($resultado)){
				echo "<tr>";
				echo " 		<td>".($row["pre_acadmics_tit"])."</td>";
				echo " 		<td>".($row["pre_acadmics"])."</td>";
				echo " 		<td>".($row["univ_acadmics_pre"])."</td>";

				echo "</tr>";
			}
			?>
		</table>