<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');        
include_once('sidebar.php');
include_once('script.php');
ini_set('display_errors', 'on');  	//muestra los errores de php
$consulta = "SELECT acadmics_prof.id_prof, acadmics_prof.pre_acadmics_valor, acadmics_prof.post_acadmics_valor, acadmics_prof.pre_acadmics_tit, acadmics_prof.pre_acadmics, exp_laboral_prof.anios_servc_exp, dp_prof.nom_prof, dp_prof.apel_prof, dp_prof.ci_prof, (acadmics_prof.pre_acadmics_valor + acadmics_prof.post_acadmics_valor + exp_laboral_prof.anios_servc_exp) as ordenar from acadmics_prof JOIN exp_laboral_prof ON acadmics_prof.id_prof = exp_laboral_prof.id_prof JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof order by ordenar desc";

//agrupar por id, evitar que aparezca el mismo user mas veces 

//pregrado + postgrado + anios de servicio
$conectando = new Conection();
$resultado = pg_query($conectando->conectar(), $consulta);
$cant = pg_num_rows($resultado);

?> 
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<div id="social" class="pull-right">
		</div>
		<div class="col-xs-12 col-sm-8 col-md-2"></div>
		<div class="col-xs-12 col-sm-4 col-md-9">
			<h2>Postulados</h2>
			<h3>Listado de Postulados</h3>
		</br></br></br><!-- saltos de lineas en bootstrap -->
		<table class="table table-striped">
			<tr class="success">
				<td></td>
				<td></td>
				<td><h4><b>Nombre</b></h4></td>
				<td><h4><b>Apellido</b></h4></td>
				<td><h4><b>Cedula</b></h4></td>
				<td><h4><b>Titulos</b></h4></td>
				<td><h4><b>Pts</b></h4></td>
				<td><h4><b>Acción</b></h4></td>
				<!-- <td><h4><b>Descargar</b></h4></td> -->
				
			</tr>
			<?php
			while($row = pg_fetch_array($resultado)){
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo " 		<td>".($row["nom_prof"])."</td>";
				echo " 		<td>".($row["apel_prof"])."</td>";
				echo " 		<td>".($row["ci_prof"])."</td>";
				echo " 		<td>".($row["pre_acadmics_tit"])." en ".($row["pre_acadmics"])."</td>";
				echo " 		<td>".($row["ordenar"])."</td>";
				echo '		<td><div><a class="btn btn-info"href="edit_form.php?ci_prof='.$row['ci_prof'].'"><i class="icon-edit"></i></a>
									<a class="btn btn-primary" href=view_prof.php?ci_prof='.$row['ci_prof'].'><i class="icon-eye-open"></i></a>
									<a class="btn btn-danger" href=del_prof.php?ci_prof='.$row['ci_prof'].'><i class="icon-trash"></i></a></div>
				</td>';
				echo "<td></td>";
				echo "</tr>";
			}


			?>
		</table>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-3"></div>
