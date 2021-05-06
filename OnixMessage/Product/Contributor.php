<?php
namespace OnixMessage\Product;

class Contributor{
    
    public $SequenceNumber; //int
    public $ContributorRole; //string
    public NameIdentifier $NameIdentifier; //unos contributor tienen 2 nameIdentifier, otros 1 y otros ninguno
    public $NamesBeforeKey; /*string*/
    public $KeyNames; /*string*/
    public $BiographicalNote; //no lo tienen todos //<BiographicalNote textformat="05"> 
    public $FromLanguage; //string //no lo tienen todos

}

