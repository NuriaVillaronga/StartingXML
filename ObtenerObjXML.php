<?php
include 'LeerFichero.php';
class ObtenerObjXML
{
    public function obxml(string $nombre_fichero):SimpleXMLElement{
        //$fichero_objeto= simplexml_load_string(LeerFichero::leer_fichero($nombre_fichero)); si fuese static
        //return simplexml_load_string($leer_fichero); //simplexml_load_string devuelve un string
        
        $leer_fichero = new LeerFichero(); //$leer_fichero es un objeto de LeerFichero(), mientras que 
        //$leer_fichero->leer_fichero($nombre_fichero) es el contenido de la propia funcion, que si será un string
        return simplexml_load_string($leer_fichero->leer_fichero($nombre_fichero)); //simplexml_load_string devuelve un objeto SimpleXMLElement
    }

}

