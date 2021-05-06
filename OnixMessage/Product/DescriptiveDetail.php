<?php
namespace OnixMessage\Product;

class DescriptiveDetail
{ 
    public int $ProductComposition; 
    public string $ProductForm; 
    public string $ProductFormDetail; 
    public Measure $Measure = array(); //!!!!
    public string $CountryOfManufacture; 
    public ProductClassification $ProductClassification; //ok
    public Collection $Collection; //ok
    public TitleDetailList $TitleDetailList;  //ok
    public Contributor $Contributor = array(); //!!!!
    public string $ContributorStatement; 
    public string $NoEdition = null;
    public Language $Language = array(); //!!!!
    public Extent $Extent = array(); //!!!!
    public Subject $Subject = array(); //!!!!
    public Audience $Audience = array(); //!!!!
    

    public function __construct($ProductComposition, $ProductForm, $ProductFormDetail, $Measure, $CountryOfManufacture, $ProductClassification, 
        $Collection, $TitleDetail, $Contributor, $ContributorStatement, $Language, $Extent, $Subject, $Audience){
            $this->ProductComposition = $ProductComposition;
            $this->ProductForm = $ProductForm;
            $this->ProductFormDetail = $ProductFormDetail;
            $this->Measure = $Measure;
            $this->CountryOfManufacture = $CountryOfManufacture;
            $this->ProductClassification = $ProductClassification;
            $this->Collection = $Collection;
            $this->TitleDetail = $TitleDetail;
            $this->Contributor = $Contributor;
            $this->ContributorStatement = $ContributorStatement;
            $this->NoEdition = $NoEdition;
            $this->Language = $Language;
            $this->Extent = $Extent;
            $this->Subject = $Subject;
            $this->Audience = $Audience; 
    }
}