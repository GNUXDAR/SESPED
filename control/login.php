<?php
    /* Sistema de seleccion de personal Desarrollado por: @gnuxdar*/
    include_once('conexion.php');

    $usuario = $_POST['login_usr'];
    $contra = $_POST['pass_usr'];



    $sql="SELECT * FROM user_system WHERE login_usr='$usuario' and pass_usr='$contra'";

    $conectando = new Conection();

    $resultado = pg_query($conectando->conectar(), $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    /*$resultado = pg_exec($sql);*/

    //*******************************************
    // $row = pg_fetch_array($resultado)
    //     $hash = "$row["pass_usr"]";

    //     if (password_verify($hash)) {
    //         echo '¡La contraseña es válida!';
    //     } else {
    //         echo 'La contraseña no es válida.';
    //     }
    //     die('Error');
    //*******************************************
    
    $cant = pg_num_rows($resultado);

    if($cant > 0){

        session_start();
        $user = pg_fetch_array($resultado);
        $_SESSION['usuario_id'] = $user['id_user'];
        $_SESSION['usuario']    = $usuario;
        //$_SESSION['tiempo']=time();  //control de tiempo de sesion (inactivo)

        $sql2="SELECT status_usr FROM user_system WHERE login_usr='$usuario' and pass_usr='$contra' ";
        
        /* $resultado2=pg_exec($slq2);   */
        $resultado2 = pg_query($conectando->conectar(), $sql2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
        $encontrad=pg_num_rows($resultado2);
        $resultusera=pg_fetch_array($resultado2);
        
        $status_usr=$resultusera['status_usr'];
        
        $_SESSION['status_usr']=$resultusera['status_usr'];




        if ($status_usr==3) {
            session_destroy();
            echo "<script>alert('Usted se encuentra temporalmente inactivo')</script>";
            echo "<script>location.href = '../index.php';</script>";

        }
                
        else {
            if ($status_usr==2 or $status_usr==1) {
                header("location:../vistas/principal.php");
            }
            else{
                header("location:../vistas/principal.php"); //principal2 con otro menu (admin)
            }
        }
        
        }
        
    else
    {
        echo "<script>alert('Los datos son incorrectos, intente nuevamente!')</script>";
        echo "<script>location.href = '../index.php';</script>";
    }
    
?>