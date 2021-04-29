<?php
namespace Nuria\Proyecto2;
use Exception;

class LeerFichero
{
    private const file_type = "text/xml"; //En lugar de poner en la linea 17 !== "text/xml", defino una constante
    
    public function leer_fichero(string $nombre_fichero):string{
        //$fichero = file_get_contents ($nombre_fichero);
        //return $fichero;
        
        //Comprobar si no existe el fichero
        if(false == file_exists($nombre_fichero)){
            throw new Exception("No existe el fichero");
        }
        //Comprobar de que tipo es un fichero
        //Con los 3 = comparas el tipo y contenido (si ambos son del mismo tipo, file, string.. y ambos son xml, css...)
        if (self::file_type !== mime_content_type($nombre_fichero)) {
            throw new Exception("El fichero no es xml");
        }
	   //Si el fichero si existe, lo lee y lo devuelve
        return file_get_contents($nombre_fichero); //file_get_contents devuelve un string
   
    }

}


