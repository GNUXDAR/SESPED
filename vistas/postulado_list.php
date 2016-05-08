<?php 
include_once('../control/conexion.php');
include_once('../control/session.php');        
include_once('sidebar.php');
include_once('script.php');
        //ini_set('display_errors', 'on');  	//muestra los errores de php
$consulta = "SELECT acadmics_prof.id_prof, acadmics_prof.pre_acadmics_valor, acadmics_prof.post_acadmics_valor, acadmics_prof.pre_acadmics_tit, acadmics_prof.pre_acadmics, exp_laboral_prof.anios_servc_exp, dp_prof.nom_prof, dp_prof.apel_prof, dp_prof.ci_prof, (acadmics_prof.pre_acadmics_valor + acadmics_prof.post_acadmics_valor + exp_laboral_prof.anios_servc_exp) as ordenar from acadmics_prof JOIN exp_laboral_prof ON acadmics_prof.id_prof = exp_laboral_prof.id_prof JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof order by ordenar desc";
$conectando = new Conection();
$resultado = pg_query($conectando->conectar(), $consulta);
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
			<tr>
				<td></td>
				<td></td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Cedula</td>
				<td>Titulo</td>
			</tr>
			<?php
			while($row = pg_fetch_array($resultado)){
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo " 		<td>".($row["nom_prof"])."</td>";
				echo " 		<td>".($row["apel_prof"])."</td>";
				echo " 		<td>".($row["ci_prof"])."</td>";
				echo " 		<td>".($row["pre_acadmics_tit"])." ".($row["pre_acadmics"])."</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-3"></div>
