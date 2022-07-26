<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpSecurityProfile extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $activityGroupNames The activityGroupNames property
    */
    private ?array $activityGroupNames = null;
    
    /**
     * @var string|null $address The address property
    */
    private ?string $address = null;
    
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var int|null $countHits The countHits property
    */
    private ?int $countHits = null;
    
    /**
     * @var int|null $countHosts The countHosts property
    */
    private ?int $countHosts = null;
    
    /**
     * @var DateTime|null $firstSeenDateTime The firstSeenDateTime property
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var array<IpCategory>|null $ipCategories The ipCategories property
    */
    private ?array $ipCategories = null;
    
    /**
     * @var array<IpReferenceData>|null $ipReferenceData The ipReferenceData property
    */
    private ?array $ipReferenceData = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime The lastSeenDateTime property
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var string|null $riskScore The riskScore property
    */
    private ?string $riskScore = null;
    
    /**
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new ipSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ipSecurityProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpSecurityProfile {
        return new IpSecurityProfile();
    }

    /**
     * Gets the activityGroupNames property value. The activityGroupNames property
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->activityGroupNames;
    }

    /**
     * Gets the address property value. The address property
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->azureSubscriptionId;
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the countHits property value. The countHits property
     * @return int|null
    */
    public function getCountHits(): ?int {
        return $this->countHits;
    }

    /**
     * Gets the countHosts property value. The countHosts property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => function (ParseNode $n) use ($o) { $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()); },
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'azureSubscriptionId' => function (ParseNode $n) use ($o) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (ParseNode $n) use ($o) { $o->setAzureTenantId($n->getStringValue()); },
            'countHits' => function (ParseNode $n) use ($o) { $o->setCountHits($n->getIntegerValue()); },
            'countHosts' => function (ParseNode $n) use ($o) { $o->setCountHosts($n->getIntegerValue()); },
            'firstSeenDateTime' => function (ParseNode $n) use ($o) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'ipCategories' => function (ParseNode $n) use ($o) { $o->setIpCategories($n->getCollectionOfObjectValues(array(IpCategory::class, 'createFromDiscriminatorValue'))); },
            'ipReferenceData' => function (ParseNode $n) use ($o) { $o->setIpReferenceData($n->getCollectionOfObjectValues(array(IpReferenceData::class, 'createFromDiscriminatorValue'))); },
            'lastSeenDateTime' => function (ParseNode $n) use ($o) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'vendorInformation' => function (ParseNode $n) use ($o) { $o->setVendorInformation($n->getObjectValue(array(SecurityVendorInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the ipCategories property value. The ipCategories property
     * @return array<IpCategory>|null
    */
    public function getIpCategories(): ?array {
        return $this->ipCategories;
    }

    /**
     * Gets the ipReferenceData property value. The ipReferenceData property
     * @return array<IpReferenceData>|null
    */
    public function getIpReferenceData(): ?array {
        return $this->ipReferenceData;
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
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
     * Sets the activityGroupNames property value. The activityGroupNames property
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value ): void {
        $this->activityGroupNames = $value;
    }

    /**
     * Sets the address property value. The address property
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the countHits property value. The countHits property
     *  @param int|null $value Value to set for the countHits property.
    */
    public function setCountHits(?int $value ): void {
        $this->countHits = $value;
    }

    /**
     * Sets the countHosts property value. The countHosts property
     *  @param int|null $value Value to set for the countHosts property.
    */
    public function setCountHosts(?int $value ): void {
        $this->countHosts = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the ipCategories property value. The ipCategories property
     *  @param array<IpCategory>|null $value Value to set for the ipCategories property.
    */
    public function setIpCategories(?array $value ): void {
        $this->ipCategories = $value;
    }

    /**
     * Sets the ipReferenceData property value. The ipReferenceData property
     *  @param array<IpReferenceData>|null $value Value to set for the ipReferenceData property.
    */
    public function setIpReferenceData(?array $value ): void {
        $this->ipReferenceData = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
