<?php
require dirname(__DIR__).'/ObtenerDatos.php';
namespace Nuria\Proyecto2; 

class MostrarPantalla
{
    public function mostrarPantalla(string $nombre_fichero):void{
        /*$arrayDatos = ObtenerDatos::obtener_Datos($nombre_fichero); si fuese static
        for ($i = 0; $i < count($arrayDatos); $i++) {
            echo $arrayDatos[$i] ."\n";
        }
        */
        
        $obtenerDatos = new ObtenerDatos();
        $arrayDatos = $obtenerDatos->obtener_Datos($nombre_fichero);
        foreach($arrayDatos as $clave => $valor) {
            print "$clave => $valor" ."\n";
        }
        /* Esto seria utilizando indices numericos
        for ($i = 0; $i < count($arrayDatos); $i++) {
            echo "$i => $arrayDatos[$i]" ."\n";
        }
        */
    }
    
}

