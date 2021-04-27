<?php
include 'LeerFichero.php';
class ObtenerObjXML
{
    public static function obxml($nombre_fichero){
        $fichero_objeto= simplexml_load_string(LeerFichero::leer_fichero($nombre_fichero));
        return $fichero_objeto;
    }

}

