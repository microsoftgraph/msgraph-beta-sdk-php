<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpSecurityProfile extends Entity 
{
    /** @var array<string>|null $activityGroupNames  */
    private ?array $activityGroupNames = null;
    
    /** @var string|null $address  */
    private ?string $address = null;
    
    /** @var string|null $azureSubscriptionId  */
    private ?string $azureSubscriptionId = null;
    
    /** @var string|null $azureTenantId  */
    private ?string $azureTenantId = null;
    
    /** @var int|null $countHits  */
    private ?int $countHits = null;
    
    /** @var int|null $countHosts  */
    private ?int $countHosts = null;
    
    /** @var DateTime|null $firstSeenDateTime  */
    private ?DateTime $firstSeenDateTime = null;
    
    /** @var array<IpCategory>|null $ipCategories  */
    private ?array $ipCategories = null;
    
    /** @var array<IpReferenceData>|null $ipReferenceData  */
    private ?array $ipReferenceData = null;
    
    /** @var DateTime|null $lastSeenDateTime  */
    private ?DateTime $lastSeenDateTime = null;
    
    /** @var string|null $riskScore  */
    private ?string $riskScore = null;
    
    /** @var array<string>|null $tags  */
    private ?array $tags = null;
    
    /** @var SecurityVendorInformation|null $vendorInformation  */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new ipSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpSecurityProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IpSecurityProfile {
        return new IpSecurityProfile();
    }

    /**
     * Gets the activityGroupNames property value. 
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->activityGroupNames;
    }

    /**
     * Gets the address property value. 
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the azureSubscriptionId property value. 
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->azureSubscriptionId;
    }

    /**
     * Gets the azureTenantId property value. 
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the countHits property value. 
     * @return int|null
    */
    public function getCountHits(): ?int {
        return $this->countHits;
    }

    /**
     * Gets the countHosts property value. 
     * @return int|null
    */
    public function getCountHosts(): ?int {
        return $this->countHosts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => function (self $o, ParseNode $n) { $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()); },
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getStringValue()); },
            'azureSubscriptionId' => function (self $o, ParseNode $n) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (self $o, ParseNode $n) { $o->setAzureTenantId($n->getStringValue()); },
            'countHits' => function (self $o, ParseNode $n) { $o->setCountHits($n->getIntegerValue()); },
            'countHosts' => function (self $o, ParseNode $n) { $o->setCountHosts($n->getIntegerValue()); },
            'firstSeenDateTime' => function (self $o, ParseNode $n) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'ipCategories' => function (self $o, ParseNode $n) { $o->setIpCategories($n->getCollectionOfObjectValues(IpCategory::class)); },
            'ipReferenceData' => function (self $o, ParseNode $n) { $o->setIpReferenceData($n->getCollectionOfObjectValues(IpReferenceData::class)); },
            'lastSeenDateTime' => function (self $o, ParseNode $n) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'riskScore' => function (self $o, ParseNode $n) { $o->setRiskScore($n->getStringValue()); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'vendorInformation' => function (self $o, ParseNode $n) { $o->setVendorInformation($n->getObjectValue(SecurityVendorInformation::class)); },
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. 
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the ipCategories property value. 
     * @return array<IpCategory>|null
    */
    public function getIpCategories(): ?array {
        return $this->ipCategories;
    }

    /**
     * Gets the ipReferenceData property value. 
     * @return array<IpReferenceData>|null
    */
    public function getIpReferenceData(): ?array {
        return $this->ipReferenceData;
    }

    /**
     * Gets the lastSeenDateTime property value. 
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the riskScore property value. 
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the tags property value. 
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the vendorInformation property value. 
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->vendorInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->activityGroupNames);
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeIntegerValue('countHits', $this->countHits);
        $writer->writeIntegerValue('countHosts', $this->countHosts);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeCollectionOfObjectValues('ipCategories', $this->ipCategories);
        $writer->writeCollectionOfObjectValues('ipReferenceData', $this->ipReferenceData);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the activityGroupNames property value. 
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value ): void {
        $this->activityGroupNames = $value;
    }

    /**
     * Sets the address property value. 
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the azureSubscriptionId property value. 
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the azureTenantId property value. 
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the countHits property value. 
     *  @param int|null $value Value to set for the countHits property.
    */
    public function setCountHits(?int $value ): void {
        $this->countHits = $value;
    }

    /**
     * Sets the countHosts property value. 
     *  @param int|null $value Value to set for the countHosts property.
    */
    public function setCountHosts(?int $value ): void {
        $this->countHosts = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. 
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the ipCategories property value. 
     *  @param array<IpCategory>|null $value Value to set for the ipCategories property.
    */
    public function setIpCategories(?array $value ): void {
        $this->ipCategories = $value;
    }

    /**
     * Sets the ipReferenceData property value. 
     *  @param array<IpReferenceData>|null $value Value to set for the ipReferenceData property.
    */
    public function setIpReferenceData(?array $value ): void {
        $this->ipReferenceData = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the riskScore property value. 
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the tags property value. 
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the vendorInformation property value. 
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
