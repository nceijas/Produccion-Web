<?php

$FILE = "./daos/usuarios.json";

class usuarios{

    static function existeUsuario($usuario, $pwd){

    //global $FILE;
    $content = file_get_contents("./daos/usuarios.json");

    $arr_usuarios = json_decode($content, true);
    
    $return = false;

    foreach ($arr_usuarios as $cred){

        if ($cred["user"] == $usuario && $cred["pwd"] == $pwd){
            $return = true;
            break;
        };

    };

    return $return;

    }

    static function crearUsuario($usuario, $pwd){

    global $FILE;
    $content = file_get_contents("./daos/usuarios.json");

    $arr_usuarios = json_decode($content, true);

    $user = array(
        "user"=>$usuario,
        "pwd"=>$pwd
    );

    array_push($arr_usuarios,$user);

    $jsondata = json_encode($arr_usuarios, JSON_PRETTY_PRINT);

    file_put_contents($FILE, $jsondata);

    }
}

?>