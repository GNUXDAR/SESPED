<?php 

include('menu.php');
include_once('../../control/conexion.php');

$ci = $_POST['ci'];

$buscar="SELECT * FROM personas WHERE ci_persona='$ci'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){

  
echo '
<h1 align="center">Datos de la Persona</h1>
 
<br/>

<form method="post" action="../../vistas/admin/cliente_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="ci" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="0" cellpadding="4">

<tr id="esquema_tabla">

    <th><b>CEDULA</b></th>
    <th><b>NOMBRES</b></th>
    <th><b>APELLIDOS</b></th>
    <th><b>EDAD</b></th>
    <th><b>SEXO</b></th>
    <!--<th>CARRERA</th>-->
    <th><b>STATUS</b></th>
    
</tr>

<tbody>';

while($ATRIBUTO=pg_fetch_array($verifica)) {

    echo '<tr><br><br>
     
        <td>'.$ATRIBUTO['ci_persona'].'</td>
        <td>'.$ATRIBUTO['nombre_persona'].'</td>
        <td>'.$ATRIBUTO['apel_persona'].'</td>
        <td>'.$ATRIBUTO['edad_persona'].'</td>
        <td>'.$ATRIBUTO['sexo_persona'].'</td>
        <td>'.$ATRIBUTO['status'].'</td>
        </tr>';

}

echo '   
</tbody>

</table>

</center>';
}

elseif ($localizar==0) {
    print ("<script>alert('No se localizo ningun personal con la cedula especificada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/cliente_bus.php">');
}

else {
    print ("<script>alert('Ocurrio un error al intentar localizar al personal');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/cliente_bus.php">');
}

?>

</body>

</html>