<?php

session_start();

if(isset($_POST["usuario"]) && isset($_POST["pass"])){
    if($_POST["usuario"] == "admin" && $_POST["pass"] == "admin"){

        $_SESSION["usuario"] = $_POST["usuario"];
        header("location: home.php");
        }else{
            $_SESSION["error"] = "¡Usuario y/o contraseña incorrectos!";
            header("location: index.php");
        }
    };


?>