<?php
namespace OnixMessage\Product;
use Exception;

class TitleDetailList
{
    /**
     * The title details
     * @var TitleDetail[]
     */
    
    private $TitleDetails = array(); 
    
    public function __construct(array $TitleDetails){
        foreach ($TitleDetails as $TitleDetail){
            if ($TitleDetail instanceof TitleDetail){
                $this->TitleDetails = $TitleDetails;
            }
            else {
                throw new Exception("No es de tipo TitleDetail");
            }
        }
    }
    
    /*Otra opcion:  [Aqui no estarias dejando que se introdujese ningun array, habria que hacerlo directamente con el método]
     * 
    public function __construct(){
    }
    
    public function add(TitleDetail $TitleDetails){
        $this->TitleDetails[] = $TitleDetails;
    }
    */
    
}

