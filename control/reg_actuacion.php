<?php 

include_once('conexion.php');
include_once('PerfilProfesional.php');
include_once('session.php');
//valida los errores imnternos de php
//ini_set('display_errors', 'on');

$ci_prof		= $_POST['ci_prof'];
$curs_act		= $_POST['curs_act'];
$tall_act		= $_POST['tall_act'];
$rec_act		= $_POST['rec_act'];
$form_act		= $_POST['form_act'];
$even_act		= $_POST['even_act'];
$tri_act		= $_POST['tri_act'];
$proy_sc_act	= $_POST['proy_sc_act'];

$conectando = new Conection();
$perfilProfesional = new PerfilProfesional();
$perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
$ci_prof = $perfil["ci_prof"];

		$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO actuacion_prof (id_prof, curs_act, tall_act, rec_act,  form_act, even_act, tri_act, proy_sc_act)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),'$curs_act', '$tall_act', '$rec_act', '$form_act', '$even_act', '$tri_act', '$proy_sc_act')");	
		
		if (!$INSERTAR) { 
		    echo'Los datos no pudieron ser registrado';
		    }

		else { 
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
<?php

		//header("Location: ../vistas/actuacion_new.php?ci_prof=$ci_prof"); 
	}

?>