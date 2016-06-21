<?php 

include_once('conexion.php');
include_once('PerfilProfesional.php');
include_once('session.php');
//valida los errores imnternos de php
//ini_set('display_errors', 'on');

$ci_prof		= $_POST['ci_prof'];
$inst_exp		= $_POST['inst_exp'];
$anios_servc_exp= $_POST['anios_servc_exp'];
$cargo_exp		= $_POST['cargo_exp'];
$des_cargo_exp	= $_POST['des_cargo_exp'];


$conectando = new Conection();
$perfilProfesional = new PerfilProfesional();
$perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
$ci_prof = $perfil["ci_prof"];

		$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO exp_laboral_prof (id_prof, inst_exp, anios_servc_exp, cargo_exp,  des_cargo_exp)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),'$inst_exp', '$anios_servc_exp', '$cargo_exp', '$des_cargo_exp')");	
		
		if (!$INSERTAR) { 
		    print ("<script>alert('Los datos no pudieron ser registrado');</script>");
		    // print('<meta http-equiv="refresh" content="0; URL=../vistas/explab_new.php">');
		    }

		else { 
		    // print ("<script>alert('Los datos fueron registrado exitosamente');</script>");
		    $id_prof= $perfil["id_prof"];
			$consulta = "SELECT * FROM exp_laboral_prof where id_prof = $id_prof " ;
			$conectando = new Conection();
			$resultado = pg_query($conectando->conectar(), $consulta);

			?>
			<table class="table table-striped">
			<tr class="success">
				<td><h6><b>Instituto</b></h6></td>
				<td><h6><b>Cargo</b></h6></td>
				
			</tr>
			<?php
			while($row = pg_fetch_array($resultado)){
				echo "<tr>";
				echo " 		<td>".($row["inst_exp"])."</td>";
				echo " 		<td>".($row["cargo_exp"])."</td>";

				echo "</tr>";
			}
			?>
			</table>
		  
<?php

		//header("Location: ../vistas/actuacion_new.php?ci_prof=$ci_prof"); 
	}

?>