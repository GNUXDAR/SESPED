<?php 
        include_once('../control/conexion.php');
        include_once('../control/session.php');
        include_once('../control/PerfilProfesional.php');
        include_once('sidebar.php');
        include_once('script.php');
        ini_set('display_errors', 'on');  //muestra los errores de php

?> 
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<div id="social" class="pull-right">
</div>
<?php
// $conectando = new Conection();
// $perfilProfesional = new PerfilProfesional();
// $perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
// $ci_prof = $perfil['ci_prof'];
 ?>
<div class="col-xs-12 col-sm-8 col-md-2"></div>
<div class="col-xs-12 col-sm-4 col-md-9">
			<h2>Gestionar Profesional <small>1/4</small></h2>
			<h3>Datos Personales <?php //echo $ci_prof ?></h3>
		<?php include_once('form_prof_new.php'); ?>
</div>
<div class="col-xs-12 col-sm-8 col-md-3"></div>

