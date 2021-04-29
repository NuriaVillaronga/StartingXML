<?php
include 'ObtenerObjXML.php';
class ObtenerDatos
{
    public function obtener_Datos(string $nombre_fichero):string{
        /*$objetoXML= ObtenerObjXML::obxml($nombre_fichero); Si fuese static la funcion
        $datos_Obtener= array($objetoXML->Product->RecordReference,
            $objetoXML->Product->ProductIdentifier->IDValue,
            $objetoXML->Product->DescriptiveDetail->ProductFormDetail,
            $objetoXML->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName
        );
        return $datos_Obtener;
        */
        
        $objetoXML= new ObtenerObjXML();
        $objetoXML->obxml($nombre_fichero);
        $datos_Obtener= array($objetoXML->Product->RecordReference,
            $objetoXML->Product->ProductIdentifier->IDValue,
            $objetoXML->Product->DescriptiveDetail->ProductFormDetail,
            $objetoXML->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName
        );
        return $datos_Obtener;
    }
}

