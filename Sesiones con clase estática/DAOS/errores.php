<?php

    //$ARCHIVO = "./daos/errores.json";

     class errores{

    static function encontrarError($codigo){

        global $ARCHIVO;
        $contenido = file_get_contents("./daos/errores.json");

        $arr_errores = json_decode($contenido, true);
        
        foreach ($arr_errores as $cred){

            if ($cred["codigo"] == $codigo){
                $mensaje = $cred["mensaje"];
                break;
            }

        }

        return $mensaje;
    }
}
?>