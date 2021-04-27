<?php
/*
$fichero = file_get_contents ( './book.xml');
echo $fichero;
*/

function leer_fichero_completo($nombre_fichero){
    $fichero_texto = fopen ($nombre_fichero, "r");
    $contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
    fclose($fichero_texto);
    return $contenido_fichero;
}
echo leer_fichero_completo('./book.xml')
//Sirven ambas
?>