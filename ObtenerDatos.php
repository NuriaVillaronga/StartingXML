<?php
require dirname(__DIR__).'/ObtenerObjXML.php';
namespace Nuria\Proyecto2;

class ObtenerDatos
{
    public function obtener_Datos(string $nombre_fichero):array{
        /*$objetoXML= ObtenerObjXML::obxml($nombre_fichero); Si fuese static la funcion
        $datos_Obtener= array($objetoXML->Product->RecordReference,
            $objetoXML->Product->ProductIdentifier->IDValue,
            $objetoXML->Product->DescriptiveDetail->ProductFormDetail,
            $objetoXML->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName
        );
        return $datos_Obtener;
        */
        
        $objetoXML= new ObtenerObjXML();
        /*Con una lista
        $datos_Obtener= array($objetoXML->obxml($nombre_fichero)->Product->RecordReference,
            $objetoXML->obxml($nombre_fichero)->Product->ProductIdentifier->IDValue,
            $objetoXML->obxml($nombre_fichero)->Product->DescriptiveDetail->ProductFormDetail,
            $objetoXML->obxml($nombre_fichero)->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName
        );
        */
        //Con mapas clave => valor
         $datos_Obtener = [
             "RecordReference" => $objetoXML->obxml($nombre_fichero)->Product->RecordReference,
             "ProductIdentifier" => $objetoXML->obxml($nombre_fichero)->Product->ProductIdentifier->IDValue,
             "ProductFormDetail" => $objetoXML->obxml($nombre_fichero)->Product->DescriptiveDetail->ProductFormDetail,
             "ContributorName" => $objetoXML->obxml($nombre_fichero)->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName,
         ];
        return $datos_Obtener;
    }
}

