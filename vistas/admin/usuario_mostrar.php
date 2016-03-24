<!DOCTYPE html>
<html lang="es">
<head>
    <title>Gestion de Usuarios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->  <!--modifica header-->
    <link href="../../vistas/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../vistas/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->  <!--modifica icons-->
    <link href="../..vistas/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../../vistas/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->  <!--modifica el estilo del nav-->
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../../vistas/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/compiled/form-showcase.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/compiled/datatables.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../css/pb/pb.css" type="text/css"/>
</head>
<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        
        <ul class="nav navbar-nav pull-right hidden-xs">                       
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-user"></i>
                </a>
                <div class="pop-dialog">                    
                </div>
            </li>
            <li class="dropdown open">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    ADMIN<?php echo ": ".$_SESSION['usuario'] ?>                   
                </a>                
            </li>             
            <li class="settings hidden-xs hidden-sm">
                <a href="../../control/cerrarSesion.php" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                <a href="principal.php">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            
            <li>
                <a class="dropdown-toggle" href="#">
                    <!--<i class="icon-group"></i><!--cliente-->
                    <span>Investigadores</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="cliente.php">Registrar</a></li>
                    <li><a href="cliente_bus.php" >Consultar</a></li>
                    <li><a href="cliente_upd.php">Modificar</a></li>
                    <li><a href="cliente_inh.php" >Inhabilitar</a></li> 
                </ul>
            </li> 
            <!--investigadores-->

            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>

                <a class="dropdown-toggle" href="user.php"><!--separaci_useron-->
                    <i class="icon-user"></i><!--icon-->
                    <span>Usuarios</span>
                    <!-- <i class="icon-chevron-down"></i>flecha -->
                </a> <!--fin class ="dropdown-toggle"-->
                  <ul class="submenu">
                    <li><a href="user.php" >Registrar</a></li> 
                    <li><a href="usuario_upd.php" >Modificar</a></li>
                    <li><a href="usuario_inh.php" >Inhabilitar</a></li>
                </ul>
            </li>
            <!--usuarios-->    
            
            <li>
                <a class="dropdown-toggle" href="equipo.php"><!--separacion-->
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Equipo</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="equipo.php" >Registrar</a></li>                    
                    <li><a href="quipo.php" >Modificar</a></li>                    
                </ul>
            </li> 
            <!--equipo-->
            
            <li>
                <a class="dropdown-toggle" href="equipo.php"><!--separacion-->
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Salas</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="#" >Registrar</a></li>                    
                    <li><a href="#" >Modificar</a></li>                    
                </ul>
            </li> 
            <!--salas-->
             <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Reportes</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="#" >Mostrar</a></li>                    
                </ul>
            </li> 
            <!--reporte-->

            <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <!--<i class="icon-gear"></i><!--icon-->
                    <span>Departamento</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="departamentos.php" >Configurar</a></li>                    
                </ul>
            </li> 
        </ul>
    </div>
    <!-- end sidebar -->



<?php 

// include('menu.php'); 
include_once('../../control/conexion.php');

$ci_personal = $_POST['ci_personal'];

// $buscar="SELECT * FROM personal WHERE ci_personal='$ci_personal'";
$buscar="SELECT * FROM personal 
INNER JOIN  salas ON personal.id_salas = salas.id_salas WHERE ci_personal='$ci_personal'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);


if ($localizar > 0){



echo '
<h1 align="center">Datos del Usurio</h1>

<br/>

<form method="post" action="../../vistas/usuario_mostrar.php" style="float: right; margin: 0 1.5% 5px 0;">
<label>Buscar <input type="text" name="pspell_config_personal(dictionary_link, file)" /></label>
<input type="submit" value="Buscar" />
</form>

<center>

<table id="tabla_muetral" border="1" cellpadding="2">

<tr id="esquema_tabla">

    <th>CEDULA</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>TLF</th>
    <th>SALA</th>
    <th>STATUS</th>
   
    
</tr>

<tbody>';

while($ATRIBUTO=pg_fetch_array($verifica)) {

    echo '<tr>
     
        <td>'.$ATRIBUTO['ci_personal'].'</td>
        <td>'.$ATRIBUTO['nombre_personal'].'</td>
        <td>'.$ATRIBUTO['apellido_personal'].'</td>
        <td>'.$ATRIBUTO['tlf_personal'].'</td>
        <td>'.$ATRIBUTO['direcc_salas'].'</td>   
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
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/usuario_bus.php">');

}

else {
    print ("<script>alert('Ocurrio un error al intentar localizar al personal');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../vistas/admin/usuario_bus.php">');
}

?>

</body>

</html>