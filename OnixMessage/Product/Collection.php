<?php
namespace OnixMessage\Product;

class Collection{

    public int $CollectionType; 
    public TitleDetail $TitleDetail;
    
    public function __construct($CollectionType, $TitleDetail){
            $this->CollectionType = $CollectionType;
            $this->TitleDetail = $TitleDetail;
    }
}

