<?php

class LeerFichero
{
    public static function leer_fichero($nombre_fichero){
        $fichero = file_get_contents ($nombre_fichero);
        return $fichero;
    }
}

