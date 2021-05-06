<?php
namespace OnixMessage\Product;

class TitleElement{
    
    public int $SequenceNumber; 
    public int $TitleElementLevel; 
    public TitlePrefix $TitlePrefix;
    public TitleWithoutPrefix $TitleWithoutPrefix; 
    public int $PartNumber; 
    public string $NoPrefix = null;
    public string $TitleText;


    public function __construct($TitleElementLevel)
    {
        $this->TitleElementLevel = $TitleElementLevel;
    }
    
    /**
     * @param mixed $NoPrefix
     */
    public function setNoPrefix($NoPrefix):string
    {
        $this->NoPrefix = $NoPrefix;
    }
    
    /**
     * @param mixed $SequenceNumber
     */
    public function setSequenceNumber($SequenceNumber):int
    {
        $this->SequenceNumber = $SequenceNumber;
    }

    /**
     * @param mixed $TitlePrefix
     */
    public function setTitlePrefix($TitlePrefix):TitlePrefix
    {
        $this->TitlePrefix = $TitlePrefix;
    }

    /**
     * @param mixed $TitleWithoutPrefix
     */
    public function setTitleWithoutPrefix($TitleWithoutPrefix):TitleWithoutPrefix
    {
        $this->TitleWithoutPrefix = $TitleWithoutPrefix;
    }

    /**
     * @param mixed $PartNumber
     */
    public function setPartNumber($PartNumber):int
    {
        $this->PartNumber = $PartNumber;
    }

    /**
     * @param mixed $TitleText
     */
    public function setTitleText($TitleText):string
    {
        $this->TitleText = $TitleText;
    }

    
}

