<?php
namespace OnixMessage\Product;

use Exception;

class TitleElementList
{
    /**
     * @var TitleElement[]
     */
    
    private $TitleElements = array();
    
    public function __construct(array $TitleElements){
        foreach ($TitleElements as $TitleElement){
            if ($TitleElement instanceof TitleElement){
                $this->TitleElements = $TitleElements;
            }
            else {
                throw new Exception("El array no es de tipo TitleElement");
            }
        }
    }
    
}

