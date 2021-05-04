<?php
//Se va a utilizar lo que hay dentro del fichero LeerFichero.php
//Include y require tienen que ir antes del namescape aunque eclipse de un error
/*require dirname(__DIR__).'/LeerFichero.php';*/
//Lo de arriba estaría dando la ruta en la que se encuentra el fichero, que actualmente es esta: 
// '/home/usuario/eclipse-workspace/Proyecto2/LeerFichero.php'; 


namespace Nuria\Proyecto2;
use SimpleXMLElement;


class ObtenerObjXML
{
    public function obxml(string $nombre_fichero):SimpleXMLElement{
        //$fichero_objeto= simplexml_load_string(LeerFichero::leer_fichero($nombre_fichero)); si fuese static
        //return simplexml_load_string($leer_fichero); //simplexml_load_string devuelve un string
        
        $leer_fichero = new LeerFichero(); //$leer_fichero es un objeto de LeerFichero(), mientras que 
        //$leer_fichero->leer_fichero($nombre_fichero) es el contenido de la propia funcion, que si será un string
        return \simplexml_load_string($leer_fichero->leer_fichero($nombre_fichero)); //simplexml_load_string devuelve un objeto SimpleXMLElement
    }
}

