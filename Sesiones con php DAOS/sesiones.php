<?php
require ("./daos/usuarios.php");
require ("./daos/errores.php");

session_start();

if(isset($_POST["usuario"]) && isset($_POST["pass"])){

    if (existeUsuario($_POST["usuario"], $_POST["pass"])){

        $_SESSION["usuario"] = $_POST["usuario"];
        header("location: home.php");

    }else{

        $_SESSION["error"] = encontrarError(1);
        header("location: index.php");

    } 
}else{

        $_SESSION["error"] = encontrarError(2);
        header("location: index.php");

        };

?>