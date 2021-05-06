<?php
namespace OnixMessage\Product;

class Product{
    
    public string $RecordReference;
    public int $NotificationType;
    public int $RecordSourceType;
    public RecordSourceIdentifier $RecordSourceIdentifier; //ok
    public string $RecordSourceName;
    public ProductIdentifier $ProductIdentifier = array(); //!!!!
    public DescriptiveDetail $DescriptiveDetail;
    public CollateralDetail $CollateralDetail;
    public PublishingDetail $PublishingDetail;
    public RelatedMaterial $RelatedMaterial;
    public ProductSupply $ProductSupply;
    
    public function __construct($RecordReference,$NotificationType, $RecordSourceType, $RecordSourceIdentifier, $RecordSourceName, 
        $ProductIdentifier,$DescriptiveDetail,$CollateralDetail,$PublishingDetail,$RelatedMaterial,$ProductSupply){
        $this->RecordReference = $RecordReference;
        $this->NotificationType = $NotificationType;
        $this->RecordSourceType = $RecordSourceType;
        $this->RecordSourceIdentifier = $RecordSourceIdentifier;
        $this->RecordSourceName = $RecordSourceName;
        $this->ProductIdentifier = $ProductIdentifier;
        $this->DescriptiveDetail = $DescriptiveDetail;
        $this->CollateralDetail = $CollateralDetail;
        $this->PublishingDetail = $PublishingDetail;
        $this->RelatedMaterial = $RelatedMaterial;
        $this->ProductSupply = $ProductSupply;
    }
    
    
}