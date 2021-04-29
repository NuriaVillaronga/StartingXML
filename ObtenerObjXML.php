<?php
include 'LeerFichero.php';
class ObtenerObjXML
{
    public function obxml(string $nombre_fichero):SimpleXMLElement{
        //$fichero_objeto= simplexml_load_string(LeerFichero::leer_fichero($nombre_fichero)); si fuese static
        //return simplexml_load_string($leer_fichero); //simplexml_load_string devuelve un string
        
        $leer_fichero = new LeerFichero();
        $leer_fichero->leer_fichero($nombre_fichero);
        return simplexml_load_string($leer_fichero); //simplexml_load_string devuelve un string
    }

}

