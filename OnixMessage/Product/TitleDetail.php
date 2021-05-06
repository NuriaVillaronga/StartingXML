<?php
namespace OnixMessage\Product;

class TitleDetail
{
    public int $TitleType; 
    public TitleElementList $TitleElementList; 

    public function __construct($TitleType, $TitleElementList){
            $this->TitleType = $TitleType;
            $this->TitleElementList = $TitleElementList;
    }
}

