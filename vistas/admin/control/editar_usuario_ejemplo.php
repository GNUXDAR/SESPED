<!DOCTYPE HTML> 
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Registros de Usuario</title>
<link rel="stylesheet" type="text/css" href="../css/Forms.css">
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="../css/template.css" type="text/css"/>

 <script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
 <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
 <script src="../js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
 <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <script src="../js/jquery.maskedinput.js" type="text/javascript" charset="utf-8"></script>
 
 <script>
 
 
		$(document).ready(function(){
			// se une el envío de formularios y campos para el motor de validación 
			$("#formID").validationEngine();

    
		 
	});
</script>
</head>

 <?php

    include("../clases/conex.class.php");
    $codigo=$_POST['codigo'];
  $conectar = new conectorPGSQL;
  $Consulta="SELECT *
                        FROM i001t_persona As persona

                        INNER JOIN i022t_empleado AS empleado ON (persona.tx_cedula = empleado.tx_cedula)

                        INNER JOIN i021t_usuarios AS usuario ON (empleado.co_empleado = usuario.co_empleado)
       where usuario.co_usuario='$codigo'";
    $datos= $conectar->Consultas($Consulta);
    $datos2=pg_fetch_object($datos)
   ?>

<body>
<div align='center' id="contenido_frame"><br /><br />
<form id="formID" action="../editar/editar_usuario.php" method="post">
<fieldset id="formulario_f"> 
  <table width="550" height="370" align="center">
     <td width="200" height="220"><br>
  <fieldset>
  <legend>Editar de Usuario</legend><br><br>
      <table cellpadding="0" width="100%" class="display" border="1" id="mi_tabla">
            
    <tr><th>NOMBRES</th><td><?php echo $datos2->tx_nombres_persona; ?></td></tr>
    <tr><th>APELLIDOS</th><td><?php echo $datos2->tx_apellidos_persona; ?></td></tr>
    <tr><th>CEDULA</th><td><?php echo $datos2->tx_cedula; ?></td></tr>
    <tr><th>INDICADOR</th><td><?php echo $datos2->tx_indicador; ?></td></tr>
    <tr><th>TIPO</th><td><select class="validate[required]" name="tipo">
                              <?php
                                      if ($datos2->tx_tipo === 'administrador') {
                              ?>
                                                <option selected="selected" value="administrador">Administrador</option>
                                                <option value="normal">Operador</option>
                              <?php   }
                                      if ($datos2->tx_tipo === 'normal') {
                              ?>
                                                <option  value="administrador">Administrador</option>
                                                <option  selected="selected" value="normal">Operador</option>
                              <?php   }?>
                        </select></td></tr>

    <tr><th>ESTADO</th><td><select class="validate[required]" name="estado">
                              <?php
                                      if ($datos2->status == 1) {
                              ?>
                                                <option selected="selected" value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                              <?php   }
                                      if ($datos2->status == 0) {
                              ?>
                                                <option   value="1">Activo</option>
                                                <option selected="selected" value="0">Inactivo</option>
                              <?php   }?>
                        </select></td></tr>
          
    </table>
</fieldset> 
</fieldset>
<center>
 
 <input type="hidden" name="tx_indicador" value="<?php echo $datos2->tx_indicador; ?>">
<input type="hidden" name="co_usuario" value="<?php echo $datos2->co_usuario; ?>">
<input type="submit" class="btn"  id="btn_guardar"  value="EDITAR" align="left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="btn" value="LIMPIAR" align="right">
</center>
<br>

</form>
</body>
</html>