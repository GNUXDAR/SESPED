<?php   

include('menu.php');
include_once('../../control/conexion.php');

$ci = $_POST['ci'];

$buscar="SELECT * FROM personal WHERE ci_personal='$ci'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){

 
echo '
<h1 align="center">Datos del Cliente</h1>

<br/>

<form method="post" action="../../vistas/admin/personal_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="ci" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="1" cellpadding="0" cellpadding="0">

<tr id="esquema_tabla">

    <th>CEDULA</th>
    <th>NOMBRE</th>
    <th>APELLIDOS</th>
    <th>ESTADO</th>
    
</tr>

<tbody>';

while($ATRIBUTO=pg_fetch_array($verifica)) {

    echo '<tr>
     
        <td>'.$ATRIBUTO['ci_personal'].'</td>
        <td>'.$ATRIBUTO['nombre_personal'].'</td>
        <td>'.$ATRIBUTO['apellido_personal'].'</td>
        <td>1</td>
        
        </tr>';

}

echo '   
</tbody>

</table>

</center>';
}

elseif ($localizar==0) {
    print ("<script>alert('No se localizo ningun personal con la cedula especificada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/reporte_personal.php">');
}

else {
    print ("<script>alert('Ocurrio un error al intentar localizar al personal');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/reporte_personal.php">');
}

?>

</body>

</html>