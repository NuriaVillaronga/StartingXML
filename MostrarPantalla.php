<?php
include 'ObtenerDatos.php';

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
        for ($i = 0; $i < count($arrayDatos); $i++) {
            echo $arrayDatos[$i] ."\n";
        }
    }
    
}

