<?php  

    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: ../vistas/index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Configuraciones</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="../../vistas/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../vistas/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="../../vistas/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../../vistas/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="../../vistas/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
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
                    Usuario<?php echo ": ".$_SESSION['usuario'] ?>                   
                </a>                
            </li>             
            <li class="settings hidden-xs hidden-sm">
                <a href="../control/cerrarSesion.php" role="button">
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
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="principal.php">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            
            <li>
                <a class="dropdown-toggle" href="cliente.php">
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Investigadores</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="cliente.php">Registrar</a></li>
                    <li><a href="#">Consultar</a></li> 
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#" >Inhabilitar</a></li>
                </ul>
            </li> 
            
            
            <li>
                <a class="dropdown-toggle" href="user.php"><!--separacion-->
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Usuarios</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="user.php" >Registrar</a></li>
                    <li><a href="#" >Consultar</a></li>
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#" >Inhabilitar</a></li>
                </ul>
            </li> 
            <!--usuarios-->
           
            
             <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <!--<i class="icon-laptop"></i><!--icon-->
                    <span>Equipo</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="#" >Consultar</a></li>                    
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#" >Inhabilitar</a></li>
                </ul>
			</li> 
            <!--equipo-->
            
            <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <!--<i class="icon-group"></i><!--icon-->
                    <span>Salas</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="salas.php" >Registrar</a></li>  
                    <li><a href="#" >Consultar</a></li>                  
                    <li><a href="#" >Modificar</a></li>
                    <li><a href="#" >Inhabilitar</a></li>
                </ul>
			</li> 
            <!--salas-->

             <li>
                <a class="dropdown-toggle" href="#"><!--separacion-->
                    <i class="icon-gear"></i><!--icon-->
                    <span>Reportes</span>
                    <i class="icon-chevron-down"></i><!--flecha-->
                </a> <!--fin class ="dropdown-toggle"-->
                <ul class="submenu">
                    <li><a href="#" >Mostrar</a></li>                    
                </ul>
			</li> 
            <!--reporte-->
        </ul>
    </div>
    <!-- end sidebar -->


    <!-- main container -->
    <div class="content">

        <!-- end upper main stats -->

        <div id="pad-wrapper" class="form-page">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row form-wrapper">
                <!-- left column -->

                <div class="col-md-2"></div><!--primera columna de centrado-->

                <div id="miPagina" class="col-md-7 column"><!--segunda columna-->
					<h2 align="center">Registrar Carreras</h2></br></br>

        <!--FORMULARIO-->

                    <form method="POST" action="../control/carreras_reg.php" autocomplete="off">
    
                        <div class="field-box">
                            <label>Carrera:</label>
                            <div class="col-md-7">
                                <input name="nombre_carrera" id="nombre_carrera" type="text" placeholder="Informatica" class="form-control" required autofocus onblur="javascript:this.value=this.value.toUpperCase();">
                            </div> 

                        </div>

                        <div class="field-box">
                            <label>Departamento:</label>
                            <div class="col-md-7">

                            <!--selecciona y muestrar las carreras que se encuentran disponible-->
                            <?php
                            include_once('../control/conexion.php');

                                $buscar="SELECT * FROM departamento";

                                $conectando = new Conection();

                                $verifica = pg_query($conectando->conectar(), $buscar) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
                                $localizar=pg_num_rows($verifica);


                                if ($localizar > 0){

                                    while ($departamento=pg_fetch_array($verifica)) {
                                        $option.='<option value="'.$departamento["id_departamento"].'">'.$departamento["nombre_departamento"].' </option>';
                                    }

                                }
                                else
                                {
                                    $option.='<option value="">No Hay Datos en Departamento </option>';


                                }
                            ?>

                                <SELECT name="id_departamento" id="id_departamento" required>
                                    <option value="">-------</option>
                                    <?php echo $option;   ?>
                                </SELECT>
                                
                            </div>                            
                        </div>


                        <div class="action">
                            
                            <input type="submit"  class="btn-flat" id="registrar" value="Registrar" ></input>

                        </div>
                        
                    </form>

                    <div id="mensaje" class="col-md-6">
                        
                    </div>

                </div>
                <div class="col-md-2"></div><!--tercera columna de centrado-->

                <!-- right column -->
                <div id="miTabla" class="col-md-7 column pull-right">
                    <div id="cargando"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- scripts -->
<!--    <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
	<script src="../vistas/js/jquery-1.10.2.js"></script>  <!--menu desplegable local-->
    <script src="../vistas/js/wysihtml5-0.3.0.js"></script>
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="../vistas/js/bootstrap.min.js"></script>
    <script src="../vistas/js/bootstrap.datepicker.js"></script>
    <script src="../vistas/js/jquery.uniform.min.js"></script>
    <script src="../vistas/js/select2.min.js"></script>
    <script src="../vistas/js/jquery-ui-1.10.2.custom.min.js"></script>  
    <script src="../vistas/js/theme.js"></script>
    <script src="../vistas/js/jquery.dataTables.js"></script>
    <script src="../vistas/js/personal.js"></script>
    <script type="text/javascript">
        // registrarCliente();
    </script>
</body>
</html>