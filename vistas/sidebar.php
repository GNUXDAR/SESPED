<!-- /* Sistema de seleccion de personal Desarrollado por: @Arturognuxdar*/ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> {SESPED} </title>
    <meta name="description" content="seleccion de personal">
    <meta name="author" content="@arturognuxdar">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->	<!--modifica header, input, letra, etc-->
    <link href="../vistas/css/bootstrap/bootstrap.css" rel="stylesheet" />	<!--menu cerrar sesion-->
    <link href="../vistas/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />	

    <!-- libraries -->	<!--modifica icons-->

    <link href="../vistas/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../vistas/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />   <!--metaforas-->
    <link href="../vistas/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../vistas/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="../vistas/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />


<!--global styles--> 	<!--modifica el estilo del aside-->
    <link rel="stylesheet" type="text/css" href="../vistas/css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="../vistas/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="../vistas/css/compiled/icons.css" />

<!--this page specific styles -->
    <link rel="stylesheet" href="../vistas/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../vistas/css/compiled/form-showcase.css" type="text/css" media="screen" />

</head>
<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">            
            <a class="navbar-brand" href="principal.php">
                <img src="css/images/" alt="" width="150" />UPTP "Luis Mariano Rivera"
            </a>
        </div>

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
                    Usuario<?php echo ": ".$_SESSION['usuario'] ?>
                </a>                
            </li>             
            <li class="settings-hidden-xs hidden-sm">
                <a href="../control/cerrarSesion.php" role="button">
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
                    <!-- <div class="arrow_border"></div>  --> <!--layout.css-->
                </div>
                <a href="principal.php">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
<!--Registro de profesional-->            
            <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-group"></i>
                    <span>Profesional</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
					<li><a href="prof_new.php">Datos Personales</a></li>
                    <li><a href="academics_new.php">Datos Academicos</a></li>
                    <li><a href="actuacion_new.php">Campo de Actuacion </a></li>
                    <li><a href="explab_new.php">Experiencia Laboral</a></li>

                </ul>
            </li> 
<!--fin registro de profecionales-->

<!--Configuracion-->            
            <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-gear"></i>
                    <span>Ajustes</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="prof_mod.php">Datos Personales</a></li>
                    <li><a href="academics_new.php">Datos Academicos</a></li>
                    <li><a href="actuacion_new.php">Campo de Actuacion </a></li>
                    <li><a href="explab_new.php">Experiencia Laboral</a></li>

                </ul>
            </li> 
<!--fin Configuracion-->
            
             <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-laptop"></i><!--icon-->
                    <span>Postulados</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="pacientes.php">Registrar</a></li>
                    <li><a href="#">consultar</a></li>
                    <li><a href="hist.php">Historial Cinico</a></li>
                </ul>
			</li> 
<!--reporte-->

              <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-book"></i><!--icon-->
                    <span>Ayuda</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="Manual.pdf" >Manual</a></li>


                </ul>
            </li> 
<!--ayuda--> 
           
        </ul> <!--fin ul id="dashboard-menu"-->
    </div> <!--fin id="sidebar-nav"-->
    <!-- end sidebar -->
    
