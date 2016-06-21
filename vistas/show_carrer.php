<?php 
include_once('../control/conexion.php');
include_once('../control/PerfilProfesional.php');
include_once('../control/session.php');
ini_set('display_errors', 'on');

         //$perfilProfesional = new PerfilProfesional();
        //$perfil = $perfilProfesional->perfil($_SESSION['usuario_id']);
        $carrera_valor = $_POST['carrera_valor'];
        $titulo_valor = $_POST['titulo_valor'];
         
         //$id_prof= $perfil["id_prof"];
       $consulta = "SELECT * from acadmics_prof INNER JOIN dp_prof ON acadmics_prof.id_prof = dp_prof.id_prof WHERE pre_acadmics = '$carrera_valor' and pre_acadmics_tit = '$titulo_valor'";

       
         $conectando = new Conection();
         $resultado = pg_query($conectando->conectar(), $consulta);
?>
<table class="table table-striped">
            <tr class="success">
                <td></td>
                <td></td>
                <td><h4><b>Nombre</b></h4></td>
                <td><h4><b>Apellido</b></h4></td>
                <td><h4><b>Cedula</b></h4></td>
                <td><h4><b>Titulos</b></h4></td>
                <!-- <td><h4><b>Pts</b></h4></td> -->
                <td><h4><b>Acción</b></h4></td>
                <!-- <td><h4><b>Descargar</b></h4></td> -->
                
            </tr>
            <?php
            while($row = pg_fetch_array($resultado)){
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "      <td>".($row["nom_prof"])."</td>";
                echo "      <td>".($row["apel_prof"])."</td>";
                echo "      <td>".($row["ci_prof"])."</td>";
                echo "      <td>".($row["pre_acadmics_tit"])." en ".($row["pre_acadmics"])."</td>";
               //echo "      <td>".($row["ordenar"])."</td>";
                echo '      <td><div><a class="btn btn-info"href="edit_form.php?ci_prof='.$row['ci_prof'].'"><i class="icon-edit"></i></a>

                                    <a class="btn btn-primary" href=view_prof.php?ci_prof='.$row['ci_prof'].'><i class="icon-eye-open"></i></a></div>
                </td>';
                echo "<td></td>";
                echo "</tr>";
            }
            ?>
        </table>