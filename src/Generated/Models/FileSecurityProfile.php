<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileSecurityProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new fileSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileSecurityProfile {
        return new FileSecurityProfile();
    }

    /**
     * Gets the activityGroupNames property value. The activityGroupNames property
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->getBackingStore()->get('activityGroupNames');
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
     * Gets the certificateThumbprint property value. The certificateThumbprint property
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        return $this->getBackingStore()->get('certificateThumbprint');
    }

    /**
     * Gets the extensions property value. The extensions property
     * @return array<string>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => fn(ParseNode $n) => $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()),
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'certificateThumbprint' => fn(ParseNode $n) => $o->setCertificateThumbprint($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfPrimitiveValues()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'hashes' => fn(ParseNode $n) => $o->setHashes($n->getCollectionOfObjectValues([FileHash::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'malwareStates' => fn(ParseNode $n) => $o->setMalwareStates($n->getCollectionOfObjectValues([MalwareState::class, 'createFromDiscriminatorValue'])),
            'names' => fn(ParseNode $n) => $o->setNames($n->getCollectionOfPrimitiveValues()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
            'vulnerabilityStates' => fn(ParseNode $n) => $o->setVulnerabilityStates($n->getCollectionOfObjectValues([VulnerabilityState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fileType property value. The fileType property
     * @return string|null
    */
    public function getFileType(): ?string {
        return $this->getBackingStore()->get('fileType');
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the hashes property value. The hashes property
     * @return array<FileHash>|null
    */
    public function getHashes(): ?array {
        return $this->getBackingStore()->get('hashes');
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSeenDateTime');
    }

    /**
     * Gets the malwareStates property value. The malwareStates property
     * @return array<MalwareState>|null
    */
    public function getMalwareStates(): ?array {
        return $this->getBackingStore()->get('malwareStates');
    }

    /**
     * Gets the names property value. The names property
     * @return array<string>|null
    */
    public function getNames(): ?array {
        return $this->getBackingStore()->get('names');
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
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
     * Gets the vulnerabilityStates property value. The vulnerabilityStates property
     * @return array<VulnerabilityState>|null
    */
    public function getVulnerabilityStates(): ?array {
        return $this->getBackingStore()->get('vulnerabilityStates');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->getActivityGroupNames());
        $writer->writeStringValue('azureSubscriptionId', $this->getAzureSubscriptionId());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeStringValue('certificateThumbprint', $this->getCertificateThumbprint());
        $writer->writeCollectionOfPrimitiveValues('extensions', $this->getExtensions());
        $writer->writeStringValue('fileType', $this->getFileType());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeCollectionOfObjectValues('hashes', $this->getHashes());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeCollectionOfObjectValues('malwareStates', $this->getMalwareStates());
        $writer->writeCollectionOfPrimitiveValues('names', $this->getNames());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
        $writer->writeCollectionOfObjectValues('vulnerabilityStates', $this->getVulnerabilityStates());
    }

    /**
     * Sets the activityGroupNames property value. The activityGroupNames property
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value): void {
        $this->getBackingStore()->set('activityGroupNames', $value);
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('azureSubscriptionId', $value);
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the certificateThumbprint property value. The certificateThumbprint property
     *  @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value): void {
        $this->getBackingStore()->set('certificateThumbprint', $value);
    }

    /**
     * Sets the extensions property value. The extensions property
     *  @param array<string>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the fileType property value. The fileType property
     *  @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the hashes property value. The hashes property
     *  @param array<FileHash>|null $value Value to set for the hashes property.
    */
    public function setHashes(?array $value): void {
        $this->getBackingStore()->set('hashes', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the malwareStates property value. The malwareStates property
     *  @param array<MalwareState>|null $value Value to set for the malwareStates property.
    */
    public function setMalwareStates(?array $value): void {
        $this->getBackingStore()->set('malwareStates', $value);
    }

    /**
     * Sets the names property value. The names property
     *  @param array<string>|null $value Value to set for the names property.
    */
    public function setNames(?array $value): void {
        $this->getBackingStore()->set('names', $value);
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

    /**
     * Sets the vulnerabilityStates property value. The vulnerabilityStates property
     *  @param array<VulnerabilityState>|null $value Value to set for the vulnerabilityStates property.
    */
    public function setVulnerabilityStates(?array $value): void {
        $this->getBackingStore()->set('vulnerabilityStates', $value);
    }

}
