<?php 

include_once('conexion.php');
include_once('PerfilProfesional.php');
include_once('session.php');
//valida los errores imnternos de php
//ini_set('display_errors', 'on');

//echo " ";
$pre_acadmics		= $_POST['pre_acadmics'];
//echo " ";
$post_acadmics		= $_POST['post_acadmics'];
//echo " ";
$prom_acadmics		= $_POST['prom_acadmics'];
//echo " "; $univ_acadmics_pre  = $_POST['univ_acadmics_pre'];
//echo " ";
$pre_acadmics_tit 	= $_POST['pre_acadmics_tit'];		//id
//echo " ";
$post_acadmics_tit 	= $_POST['post_acadmics_tit'];		//id
//echo " ";
$univ_acadmics_post = $_POST['univ_acadmics_post'];

if ($_POST['univ_acadmics_pre2'] != "") {
	$univ_acadmics_pre = $_POST['univ_acadmics_pre2']; 
} else {
   	$univ_acadmics_pre = $_POST['univ_acadmics_pre'];
   	
   }


//die();						//valores de prehgrado
if($pre_acadmics_tit == 1){  //id de TSU
	$pre_acadmics_valor = 5;
}elseif($pre_acadmics_tit == 2){	//id de licenciado
	$pre_acadmics_valor = 12;
}elseif($pre_acadmics_tit == 3){		//id de ing
	$pre_acadmics_valor = 10;
}else{
	$pre_acadmics_valor = 0;
}							//valores de postgrado
if($post_acadmics_tit == 1){		//id ESPECIALISTA"
	$post_acadmics_valor = 15;
}elseif($post_acadmics_tit == 2){	//id "MAGISTER"
	$post_acadmics_valor = 20;
}elseif($post_acadmics_tit == 3){	//id "DOCTOR"
	$post_acadmics_valor = 25;
}else{
	$post_acadmics_valor = 0;
};

$conectando = new Conection();
$perfilProfesional = new PerfilProfesional();
$perfil 	= $perfilProfesional->perfil($_SESSION['usuario_id']);
$ci_prof 	= $perfil["ci_prof"];

	$INSERTAR = pg_query($conectando->conectar(), "INSERT INTO acadmics_prof (id_prof, pre_acadmics, post_acadmics, prom_acadmics,  univ_acadmics_pre, pre_acadmics_tit, post_acadmics_tit, univ_acadmics_post, pre_acadmics_valor, post_acadmics_valor)
		VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),(SELECT nom_pre_acadmics FROM pre_acadmics WHERE id_pre_acadmics = '$pre_acadmics'), (SELECT nom_post_acadmics FROM post_acadmics WHERE id_post_acadmics = '$post_acadmics'), '$prom_acadmics', '$univ_acadmics_pre', (SELECT pre_acadmics_tit FROM titulo_pre WHERE id_pre_acadmics_tit = '$pre_acadmics_tit'), (SELECT post_acadmics_tit FROM titulo_post WHERE id_post_acadmics_tit = '$post_acadmics_tit'), '$univ_acadmics_post', '$pre_acadmics_valor', '$post_acadmics_valor')");

		// if ($post_acadmics_tit != "") {

		// $INSERTAR = pg_query($conectando->conectar(), "INSERT INTO acadmics_prof (id_prof, post_acadmics,post_acadmics_tit, univ_acadmics_post, post_acadmics_valor)
		// VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'), (SELECT nom_post_acadmics FROM post_acadmics WHERE id_post_acadmics = $post_acadmics), (SELECT post_acadmics_tit FROM titulo_post WHERE id_post_acadmics_tit = '$post_acadmics_tit'), '$univ_acadmics_post', '$post_acadmics_valor')");

		
			
		// }

		// $INSERTAR = pg_query($conectando->conectar(), "INSERT INTO acadmics_prof (id_prof, pre_acadmics, prom_acadmics,  univ_acadmics_pre, pre_acadmics_tit, univ_acadmics_post, pre_acadmics_valor)
		// VALUES ((SELECT id_prof FROM dp_prof WHERE ci_prof = '$ci_prof'),(SELECT nom_pre_acadmics FROM pre_acadmics WHERE id_pre_acadmics = '$pre_acadmics'), '$prom_acadmics', '$univ_acadmics_pre', (SELECT pre_acadmics_tit FROM titulo_pre WHERE id_pre_acadmics_tit = '$pre_acadmics_tit'), '$univ_acadmics_post', '$pre_acadmics_valor')");
	if (!$INSERTAR) { 
		echo "Los datos no pudieron ser registrado";
		//print('<meta http-equiv="refresh" content="0; URL=../vistas/academics_new.php">');
	}

	else { 
		//echo "Los datos fueron registrado exitosamente";
		
        $id_prof= $perfil["id_prof"];
		$consulta = "SELECT * FROM acadmics_prof where id_prof = $id_prof " ;
		$conectando = new Conection();
		$resultado = pg_query($conectando->conectar(), $consulta);

?>
<table class="table table-striped">
			<tr class="success">
				<td><h6><b>Titulo</b></h6></td>
				<td><h6><b>Carrera</b></h6></td>
				<td><h6><b>Universidad</b></h6></td>
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
<?php

		//header("Location: ../vistas/actuacion_new.php?ci_prof=$ci_prof"); 
	}

?>
