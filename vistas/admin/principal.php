<?php  

    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>.:Principal:.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->	<!--modifica header, input, letra, etc-->
    <link href="../../vistas/css/bootstrap/bootstrap.css" rel="stylesheet" />	<!--menu cerrar sesion-->
    <link href="../../vistas/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />	

    <!-- libraries -->	<!--modifica icons-->

    <link href="../../vistas/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../../vistas/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />   <!--metaforas-->
    <link href="../../vistas/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />


<!--global styles--> 	<!--modifica el estilo del aside-->
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="../../vistas/css/compiled/icons.css" />

<!--this page specific styles -->
    <link rel="stylesheet" href="../../vistas/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../vistas/css/compiled/form-showcase.css" type="text/css" media="screen" />

</head>
<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
     
        <ul class="nav navbar-nav pull-right hidden-xs">                       
            <li class="notification-dropdown hidden-xs hidden-sm">   <!-- muestra el icono user-->
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
            <li class="settings-hidden-xs hidden-sm">
                <a href="../../control/cerrarSesion.php" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
     <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxMenu
                $("#jqxMenu").jqxMenu({ width: '200', mode: 'vertical'});
            });
        </script> 
         
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>  <!--layout.css-->
                    <div class="arrow_border"></div>  <!--layout.css-->
                </div>
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
            
             <li>
                <a class="dropdown-toggle" href="equipo.php"><!--separacion-->
                    <i class="icon-laptop"></i><!--icon-->
                    <span>Equipo</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="equipo_prestamo.php">Prestamo</a></li>
                    <li><a href="equipo_devolver.php">Devolver</a></li>
                    <li><a href="equipo.php">Registrar</a></li>
                  <!--   <li><a href="equipo_bus.php">Consultar</a></li>
                    <li><a href="equipo_upd.php" >Modificar</a></li> -->
                    <!-- <li><a href="equipo_inh.php" >Inhabilitar</a></li> -->
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
                   <!--  <li><a href="#" >Consultar</a></li>
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#">Inhabilitar</a></li> -->
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
                    <li><a href="reporte_carreras.php" >Carreras</a></li>
                    <li><a href="reporte.php" >Estadistica Mensual</a></li>

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
           <!--configuracion--> 

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
    
    <div class="content">
        <div id="pad-wrapper" class="form-page">
            <div class="row header">
                <h3>SIAT-SVO </h3></br>
                <h4>- Sistema Administrativo para la Toma de desiciones -</h4></br>
                <h4>- de las Salas virtuales OPSU -</h4>
                
            </div>

            <!-- <form method="post" action="../vistas/cliente_mostrar_principal.php" style="float: right; margin: 0 1.5% 5px 0;" autocomplete="off">
                <label>Buscar <input type="text" name="ci" /></label>
                <input type="submit" value="Buscar" />
            </form> -->
        </div>
        
    </div>


    <!-- scripts -->
    <script src="../../vistas/js/jquery-1.10.2.js"></script>  <!--menu desplegable local-->
    <script src="../../vistas/js/wysihtml5-0.3.0.js"></script>
    <script src="../../vistas/js/bootstrap.min.js"></script>
    <script src="../../vistas/js/bootstrap.datepicker.js"></script>
    <script src="../../vistas/js/jquery.uniform.min.js"></script>
    <script src="../../vistas/js/select2.min.js"></script>
    <script src="../../vistas/js/jquery-ui-1.10.2.custom.min.js"></script>  
    <script src="../../vistas/js/theme.js"></script>
    <script src="../../vistas/js/personal.js"></script>
    <script src="../../vistas/js/function.js"></script>

</body>
</html>

