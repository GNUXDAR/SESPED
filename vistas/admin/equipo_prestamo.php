<?php  

    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: ../../vistas/index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Prestamos Equipos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->	<!--modifica header-->
    <link href="../../vistas/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../vistas/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->	<!--modifica icons-->
    <link href="../../vistas/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../../vistas/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->	<!--modifica el estilo del nav-->
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/icons.css" />

	<!-- this page specific styles -->
    <link rel="stylesheet" href="../../vistas/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/compiled/form-showcase.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/compiled/datatables.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/pb/pb.css" type="text/css"/>
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
                <a class="dropdown-toggle" href="cliente.php"><!--separacion-->
                    <i class="icon-group"></i>
                    <span>Investigadores</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
					<li><a href="cliente.php">Registrar</a></li>
                    <li><a href="cliente_bus.php">consultar</a></li>
                    <li><a href="cliente_upd2.php">modificar</a></li>
                    <li><a href="cliente_inh.php" >Inhabilitar</a></li>
                    <li><a href="cliente_abh.php">Habilitar</a></li>

                </ul>
            </li> 
            <!--investigadores-->
           
            <li>
                <a class="dropdown-toggle" href="user.php"><!--separacion-->
                    <i class="icon-user"></i>
                    <span>Usuarios</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="user.php" >Registrar</a></li>                    
                    <li><a href="usuario_bus.php">Consultar</a></li>
                    <li><a href="usuario_upd.php">Modificar</a></li>
                    <li><a href="usuario_inh.php">Inhabilitar</a></li>
                    <li><a href="usuario_abh.php">Habilitar</a></li>
                </ul>
            </li> 
            <!--usuarios-->
            
             <li class="active">
             	<div class="pointer">
                    <div class="arrow"></div>  <!--layout.css-->
                    <div class="arrow_border"></div>  <!--layout.css-->
                </div>
                <a class="dropdown-toggle" href="equipo.php"><!--separacion-->
                    <i class="icon-laptop"></i><!--icon-->
                    <span>Equipo</span>
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="equipo_devolver.php">Devolver</a></li>
                    <li><a href="equipo.php">Registrar</a></li>
                    <li><a href="equipo_bus.php">Consultar</a></li>
                    <li><a href="equipo_upd.php" >Modificar</a></li>
                    <li><a href="equipo_inh.php" >Inhabilitar</a></li>
                </ul>
			</li> 
            <!--equipo-->
            
            <li>
                <a class="dropdown-toggle" href="salas.php"><!--separacion-->
                   <i class="icon-map-marker"></i><!--icon-->
                    <span>Salas</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="salas.php" >Registrar</a></li>
                    <li><a href="#" >Consultar</a></li>
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#">Inhabilitar</a></li>
                </ul>
			</li> 
            <!--salas-->
            
             <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-print"></i><!--icon-->
                    <span>Reportes</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="reporte_personas.php" >Personas</a></li>
                    <li><a href="reporte_personal.php" >Personal</a></li>
                    <li><a href="reporte.php" >Estadistico</a></li>
                </ul>
			</li> 
            <!--reporte-->
            
            <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-gear"></i><!--icon-->
                    <span>Configuracion</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="personal.php" >Personal</a></li>  
                    <li><a href="departamentos.php" >Departamentos</a></li>
                    <li><a href="carreras.php" >Carreras</a></li>
                    <li><a href="servicios.php" >Servicios</a></li>


                </ul>
            </li> 
           <!--depatrtamentos--> 

              <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-book"></i><!--icon-->
                    <span>Ayuda</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="Manual de Usuario jessenia.pdf" >Manual</a></li>


                </ul>
            </li> 
           <!--ayuda--> 
           
        </ul> <!--fin ul id="dashboard-menu"-->
    </div> <!--fin id="sidebar-nav"-->
    <!-- end sidebar -->
                           <!-- main container -->
    <div class="content">

        <!-- end upper main stats -->

        <div id="pad-wrapper" class="form-page">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row form-wrapper">
                <!-- left column -->
                <div class="col-md-2"></div><!--primera columna de centrado-->
                <div id="miPagina" class="col-md-8 column"><!--segunda columna de centrado-->
					<h2 align="center">Prestar Equipo</h2></br></br>

                    <form method="POST" action="../admin/equipo_prestamo.php">

    
                        <div class="field-box">
                            <label>Cedula:</label>
                            <div class="col-md-7">
                                <input value="<?php echo $_POST['ci'];?>" name="ci" id="ci" class="form-control" required type="number" min="00000000" max="99999999" placeholder="12345678" autofocus>
                            </div>        
                                            
                        <div class="action">
                            <input type="submit"  class="btn-flat" name="buscar" id="buscar" value="Buscar"></input>
                           <!-- <input type="button" onclick="listarClientes();"  class="btn-flat" id="mostrar" value="Mostrar" ></input>-->
                        </div> 
                        
                    </form>
                    <hr>

                    
<?php 

include('../../control/conexion.php');

if($_POST){
$ci = $_POST['ci'];


$buscar="SELECT * FROM personas WHERE ci_persona='$ci'";

$conectando = new Conection();

$verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizar=pg_num_rows($verifica);

if ($localizar == 0){
	print ("<script>alert('Persona No Inscrito');</script>");
}
else{
	$ATRIBUTO=pg_fetch_array($verifica);

    echo '<div class="row">
    <div class="col-md-7"> <b>Gestionando prestamo para:</>
     '.$ATRIBUTO['nombre_persona'].'
     '.$ATRIBUTO['apel_persona'].'
      </div>
     </div>';

        $p = getdate(time());
		$hora=$p["hours"] . ":" . $p["minutes"] . ":" . $p["seconds"];
?>	
<hr> 

<!-- =============================main container ==============================-->

                    <form method="POST" action="../admin/control/equipo_prestamo_reg.php" autocomplete="off">
           				<input name="fecha_prestamo" id="fecha_prestamo" value ="<?php echo date('Y-m-d');?>" class="form-control" required type="hidden">
                        <input name="hora_prestamo" id="hora_prestamo" value ="<?php echo $hora; ?>" class="form-control" required type="hidden">
                       	<input name="id_persona" id="id_persona" value ="<?php echo $ATRIBUTO['id_persona'] ?>" class="form-control" required type="hidden">
                        
                        <div class="field-box">

                            <label>Equipos Disponibles:</label>
                            <div class="col-md-7">

                                   <?php
                                   include_once('../../control/conexion.php');
                                   $comparar="SELECT * FROM equipos where status_prestamo = 1 ORDER BY 	id_equipos asc  ";

                                    $conectando = new Conection();

                                    $verifica = pg_query($conectando->conectar(), $comparar) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                     $option='';
                                    $localizar=pg_num_rows($verifica);

									if ($localizar > 0){
                                 		while ( $equipo=pg_fetch_array($verifica)) {
                                            $option.="<option value='".$equipo['id_equipos']."'>".$equipo['codigo_equipos']."</option>";
        
                                     }

                                     echo '<select class="form-control" id="equipo" name="equipo" >';
                                     echo '<option value="" selected>Seleccione </option>';
                                     echo $option;
                                     echo "</select >";
                                     }

                                     else{
                                     	echo '<select class="form-control" id="equipo" name="equipo" >';
                                     echo '<option value="" selected>No Hay Equipos Disponibles</option>';
                                     echo "</select >";

                                     }

                                   ?>

                               
                            </div>                            
                        </div> 
                        
                        <div class="action">
                            <input type="submit"  class="btn-flat" id="registrar" value="Prestar"></input>
                            
                        </div> 
                        
                    </form>


<?php
}
}
?>




                </div>

                <!-- right column, Tabla para datos almacenados--> 
                <!--<div id="miTabla" class="col-md-7 column pull-right">
                    <div id="cargando"></div>-->
                </div>
            </div>
        </div>
    </div>



    <!-- scripts -->
<!--    <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="../../js/wysihtml5-0.3.0.js"></script><!--ojo-->
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->   <!--menu desplegable online-->
    <script src="../../vistas/js/jquery-1.10.2.js"></script>  <!--menu desplegable local-->
    <script src="../../vistas/js/bootstrap.min.js"></script>
    <script src="../../vistas/js/bootstrap.datepicker.js"></script>
    <script src="../../vistas/js/jquery.uniform.min.js"></script>
    <script src="../../vistas/js/select2.min.js"></script>
    <script src="../../vistas/js/jquery-ui-1.10.2.custom.min.js"></script>  
    <script src="../../vistas/js/theme.js"></script>
    <script src="../../vistas/js/jquery.dataTables.js"></script>
    <script src="../../vistas/js/personal.js"></script>
    <script src="../../vistas/js/function.js"></script>
    
</body>
</html>

