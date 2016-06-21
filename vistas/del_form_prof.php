<?php

$ci_prof = $_GET['ci_prof'];


$buscarPersona="DELETE FROM dp_prof WHERE ci_prof='$ci_prof'";
$conectando = new Conection();

$verificaPersona = pg_query($conectando->conectar(), $buscarPersona) or die('ERROR AL BUSCAR DATOS: ' . pg_last_error());
$localizarPersona=pg_num_rows($verificaPersona);


    if ($localizarPersona > 0){  //inicio if registrar profesional

      print ("<script>alert('El Profesional Fue eliminado'); 
            window.location.href='postulado_list.php';

      </script>");
    }else{ 

      print ("<script>alert('El Profesional con la cedula:$ci_prof no esta Registrado'); 
      window.location.href='postulado_list.php';

      </script>");
    //header("location: postulado_list.php"); 

     }


?>