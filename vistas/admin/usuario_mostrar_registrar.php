<?php 

include('menu.php'); 
include_once('../../control/conexion.php');

$ci_personal = $_POST['ci_personal'];

$buscar="SELECT * FROM personal WHERE ci_personal='$ci_personal'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){



echo '
<h1 align="center">Datos del Usurio</h1>

<br/>

<form method="post" action="../../vistas/admin/usuario_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="ci_personal" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="1" cellpadding="1">

<tr id="esquema_tabla">

    <th>CEDULA</th>
    <th>NOMBRE</th>
    <th>APELLIDOS</th>
    <th>EDAD</th>
    <th>SEXO</th>
    <!--<th>CARRERA</th>-->
    <th>STATUS</th>
    
</tr>

<tbody>';

while($ATRIBUTO=pg_fetch_array($verifica)) {

    echo '<tr>
     
        <td>'.$ATRIBUTO['ci_personal'].'</td>
        <td>'.$ATRIBUTO['nombre_personal'].'</td>
        <td>'.$ATRIBUTO['apellido_personal'].'</td>
        
        </tr>';

}

echo '   
</tbody>

</table>

</center>';
}

elseif ($localizar==0) {
    print ("<script>alert('No se localizo ningun personal con la cedula especificada');</script>");
    echo "ci_personal";
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/usuario_bus.php">');

}

else {
    print ("<script>alert('Ocurrio un error al intentar localizar al personal');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/usuario_bus.php">');
}

?>

</body>

</html>