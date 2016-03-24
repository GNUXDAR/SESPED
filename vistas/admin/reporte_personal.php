<?php 

include('menu.php');
include_once('../../control/conexion.php');

$ci = $_POST['ci'];

$buscar="SELECT * FROM personal 
INNER JOIN  salas ON personal.id_salas = salas.id_salas ";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){

// modificar 
 
echo '
<h1 align="center">Datos del Personal</h1>

<br/>

<form method="post" action="../../vistas/admin/personal_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="ci" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="1" cellpadding="2" align="center">

<tr id="esquema_tabla">

    <th>CEDULA</th>
    <th>NOMBRE</th>
    <th>APELLIDOS</th>
    <th>SEXO</th>
    <th>TLF</th>
    <th>SALA</th>
    <th>STATUS</th>
    
</tr>

<tbody>';

while($ATRIBUTO=pg_fetch_array($verifica)) {
//seleccionar nombre de la tabla
    echo '<tr>
     
        <td>'.$ATRIBUTO['ci_personal'].'</td>
        <td>'.$ATRIBUTO['nombre_personal'].'</td>
        <td>'.$ATRIBUTO['apellido_personal'].'</td>
        <td>'.$ATRIBUTO['sexo_personal'].'</td>
        <td>'.$ATRIBUTO['tlf_personal'].'</td>
        <td>'.$ATRIBUTO['direcc_salas'].'</td>       
        <td>'.$ATRIBUTO['status'].'</td>
        </tr>';

}

echo '   
</tbody>

</table>

</br>
<a class="btn btn-primary" href="../../vistas/reportes/pdf_personal.php">Imprimir</a>


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