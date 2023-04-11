<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpSecurityProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new IpSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('activityGroupNames');
    }

    /**
     * Gets the address property value. The address property
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->getBackingStore()->get('azureSubscriptionId');
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->getBackingStore()->get('azureTenantId');
    }

    /**
     * Gets the countHits property value. The countHits property
     * @return int|null
    */
    public function getCountHits(): ?int {
        return $this->getBackingStore()->get('countHits');
    }

    /**
     * Gets the countHosts property value. The countHosts property
     * @return int|null
    */
    public function getCountHosts(): ?int {
        return $this->getBackingStore()->get('countHosts');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => fn(ParseNode $n) => $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()),
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'countHits' => fn(ParseNode $n) => $o->setCountHits($n->getIntegerValue()),
            'countHosts' => fn(ParseNode $n) => $o->setCountHosts($n->getIntegerValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'ipCategories' => fn(ParseNode $n) => $o->setIpCategories($n->getCollectionOfObjectValues([IpCategory::class, 'createFromDiscriminatorValue'])),
            'ipReferenceData' => fn(ParseNode $n) => $o->setIpReferenceData($n->getCollectionOfObjectValues([IpReferenceData::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the ipCategories property value. The ipCategories property
     * @return array<IpCategory>|null
    */
    public function getIpCategories(): ?array {
        return $this->getBackingStore()->get('ipCategories');
    }

    /**
     * Gets the ipReferenceData property value. The ipReferenceData property
     * @return array<IpReferenceData>|null
    */
    public function getIpReferenceData(): ?array {
        return $this->getBackingStore()->get('ipReferenceData');
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSeenDateTime');
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->getBackingStore()->get('vendorInformation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->getActivityGroupNames());
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeStringValue('azureSubscriptionId', $this->getAzureSubscriptionId());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeIntegerValue('countHits', $this->getCountHits());
        $writer->writeIntegerValue('countHosts', $this->getCountHosts());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeCollectionOfObjectValues('ipCategories', $this->getIpCategories());
        $writer->writeCollectionOfObjectValues('ipReferenceData', $this->getIpReferenceData());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
    }

    /**
     * Sets the activityGroupNames property value. The activityGroupNames property
     * @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value): void {
        $this->getBackingStore()->set('activityGroupNames', $value);
    }

    /**
     * Sets the address property value. The address property
     * @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     * @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('azureSubscriptionId', $value);
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     * @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the countHits property value. The countHits property
     * @param int|null $value Value to set for the countHits property.
    */
    public function setCountHits(?int $value): void {
        $this->getBackingStore()->set('countHits', $value);
    }

    /**
     * Sets the countHosts property value. The countHosts property
     * @param int|null $value Value to set for the countHosts property.
    */
    public function setCountHosts(?int $value): void {
        $this->getBackingStore()->set('countHosts', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the ipCategories property value. The ipCategories property
     * @param array<IpCategory>|null $value Value to set for the ipCategories property.
    */
    public function setIpCategories(?array $value): void {
        $this->getBackingStore()->set('ipCategories', $value);
    }

    /**
     * Sets the ipReferenceData property value. The ipReferenceData property
     * @param array<IpReferenceData>|null $value Value to set for the ipReferenceData property.
    */
    public function setIpReferenceData(?array $value): void {
        $this->getBackingStore()->set('ipReferenceData', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the riskScore property value. The riskScore property
     * @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the tags property value. The tags property
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     * @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
