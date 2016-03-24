<?php 

include('menu.php');
include_once('../../control/conexion.php');

$ci = $_POST['ci'];

$buscar="SELECT * FROM personas ";
// INNER JOIN  
// carreras ON personas.id_carrera = carreras.id_carrera INNER JOIN  
// estados ON personas.id_estado = estados.id_estado ";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){ 

 
echo '
<h1 align="center">Datos de Investigadores</h1>

<br/>

<form method="post" action="../../vistas/cliente_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="ci" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="1" cellpadding="2">

<tr id="esquema_tabla">

    <th>CEDULA</th>
    <th>NOMBRE</th>
    <th>APELLIDOS</th>
    <th>EDAD</th>
    <th>SEXO</th>
   <!-- <th>CARRERA</th>-->
    <!--<th>ESTADO</th>-->
    
</tr>

<tbody>';

 while($ATRIBUTO=pg_fetch_array($verifica)) {

    echo '<tr>
     
        <td>'.$ATRIBUTO['ci_persona'].'</td>
        <td>'.$ATRIBUTO['nombre_persona'].'</td>
        <td>'.$ATRIBUTO['apel_persona'].'</td>
        <td>'.$ATRIBUTO['edad_persona'].'</td>
        <td>'.$ATRIBUTO['sexo_persona'].'</td>
        

        </tr>';

 }

// $arr = pg_fetch_array($verifica);
// $arrayColor = array("#8A2BE2","#00FF00","#00FFFF","#5F9EA0",
//     "#800000","#2F4F4F","#8A2BE2","#00FF00","#00FFFF","#5F9EA0","#800000","#2F4F4F","#800000","#2F4F4F");
// $i = 0;
// foreach ($arr as $value) {
//     # code...
//    $arrayJson = array();
//    $arrayJson['country'] = $value['nombre_persona'];
//    $arrayJson['visits'] = $value['apel_persona'];
//    $arrayJson['color'] = $arrayColor[$i];
//    $personas[] = $arrayJson;
//    $i ++;
// }
// echo $arrayEjemplo = json_encode($personas);

echo '   
</tbody>

</table>
</br>
<a class="btn btn-primary" href="../../vistas/reportes/pdf_personas.php">Imprimir</a>

</center>';
}

elseif ($localizar==0) {
    print ("<script>alert('No se localizo ningun personal con la cedula especificada');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente_bus.php">');
}

else {
    print ("<script>alert('Ocurrio un error al intentar localizar al personal');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../vistas/cliente_bus.php">');
}

?>

</body>

</html>