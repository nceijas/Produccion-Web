<?php

    session_start();
    require ("./daos/usuarios.php");
    require ("./daos/errores.php");

    if(isset($_POST["usuario"]) && isset($_POST["pass"])){

        if (existeUsuario($_POST["usuario"], $_POST["pass"])){

            $_SESSION["error"] = encontrarError(4);
            header("location: index.php");
    
        }else{
        
        crearUsuario($_POST["usuario"], $_POST["pass"]);
        $_SESSION["error"] = encontrarError(3);
        header("location: index.php");

        }
    }else{

        encontrarError(2);   
        $_SESSION["error"] = $mensaje;
        header("location: index.php");

    }

?>