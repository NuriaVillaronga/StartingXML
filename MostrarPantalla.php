<?php
include 'ObtenerDatos.php';

class MostrarPantalla
{
    public static function mostrarPantalla($nombre_fichero){
        $arrayDatos = ObtenerDatos::obtener_Datos($nombre_fichero);
        for ($i = 0; $i < count($arrayDatos); $i++) {
            echo $arrayDatos[$i] ."/n";
        }
    }
    
}

