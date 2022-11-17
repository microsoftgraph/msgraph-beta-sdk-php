<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecurityProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudAppSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudAppSecurityProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecurityProfile {
        return new CloudAppSecurityProfile();
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
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deploymentPackageUrl property value. The deploymentPackageUrl property
     * @return string|null
    */
    public function getDeploymentPackageUrl(): ?string {
        return $this->getBackingStore()->get('deploymentPackageUrl');
    }

    /**
     * Gets the destinationServiceName property value. The destinationServiceName property
     * @return string|null
    */
    public function getDestinationServiceName(): ?string {
        return $this->getBackingStore()->get('destinationServiceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deploymentPackageUrl' => fn(ParseNode $n) => $o->setDeploymentPackageUrl($n->getStringValue()),
            'destinationServiceName' => fn(ParseNode $n) => $o->setDestinationServiceName($n->getStringValue()),
            'isSigned' => fn(ParseNode $n) => $o->setIsSigned($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'manifest' => fn(ParseNode $n) => $o->setManifest($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'permissionsRequired' => fn(ParseNode $n) => $o->setPermissionsRequired($n->getEnumValue(ApplicationPermissionsRequired::class)),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isSigned property value. The isSigned property
     * @return bool|null
    */
    public function getIsSigned(): ?bool {
        return $this->getBackingStore()->get('isSigned');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the manifest property value. The manifest property
     * @return string|null
    */
    public function getManifest(): ?string {
        return $this->getBackingStore()->get('manifest');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the permissionsRequired property value. The permissionsRequired property
     * @return ApplicationPermissionsRequired|null
    */
    public function getPermissionsRequired(): ?ApplicationPermissionsRequired {
        return $this->getBackingStore()->get('permissionsRequired');
    }

    /**
     * Gets the platform property value. The platform property
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->getBackingStore()->get('platform');
    }

    /**
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->getBackingStore()->get('policyName');
    }

    /**
     * Gets the publisher property value. The publisher property
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->getBackingStore()->get('publisher');
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
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
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
        $writer->writeStringValue('azureSubscriptionId', $this->getAzureSubscriptionId());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deploymentPackageUrl', $this->getDeploymentPackageUrl());
        $writer->writeStringValue('destinationServiceName', $this->getDestinationServiceName());
        $writer->writeBooleanValue('isSigned', $this->getIsSigned());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('manifest', $this->getManifest());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('permissionsRequired', $this->getPermissionsRequired());
        $writer->writeStringValue('platform', $this->getPlatform());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
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
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deploymentPackageUrl property value. The deploymentPackageUrl property
     *  @param string|null $value Value to set for the deploymentPackageUrl property.
    */
    public function setDeploymentPackageUrl(?string $value): void {
        $this->getBackingStore()->set('deploymentPackageUrl', $value);
    }

    /**
     * Sets the destinationServiceName property value. The destinationServiceName property
     *  @param string|null $value Value to set for the destinationServiceName property.
    */
    public function setDestinationServiceName(?string $value): void {
        $this->getBackingStore()->set('destinationServiceName', $value);
    }

    /**
     * Sets the isSigned property value. The isSigned property
     *  @param bool|null $value Value to set for the isSigned property.
    */
    public function setIsSigned(?bool $value): void {
        $this->getBackingStore()->set('isSigned', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the manifest property value. The manifest property
     *  @param string|null $value Value to set for the manifest property.
    */
    public function setManifest(?string $value): void {
        $this->getBackingStore()->set('manifest', $value);
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the permissionsRequired property value. The permissionsRequired property
     *  @param ApplicationPermissionsRequired|null $value Value to set for the permissionsRequired property.
    */
    public function setPermissionsRequired(?ApplicationPermissionsRequired $value): void {
        $this->getBackingStore()->set('permissionsRequired', $value);
    }

    /**
     * Sets the platform property value. The platform property
     *  @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the policyName property value. The policyName property
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the publisher property value. The publisher property
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
