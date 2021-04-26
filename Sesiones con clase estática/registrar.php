<?php

    session_start();
    require ("./daos/usuarios.php");
    require ("./daos/errores.php");

    if(isset($_POST["usuario"]) && isset($_POST["pass"])){

        if (usuarios::existeUsuario($_POST["usuario"], $_POST["pass"])){

            $_SESSION["error"] = errores::encontrarError(4);
            header("location: index.php");
    
        }else{
        
        usuarios::crearUsuario($_POST["usuario"], $_POST["pass"]);
        $_SESSION["error"] = errores::encontrarError(3);
        header("location: index.php");

        }
    }else{

        errores::encontrarError(2);   
        $_SESSION["error"] = $mensaje;
        header("location: index.php");

    }

?>