<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecurityProfile extends Entity implements Parsable 
{
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deploymentPackageUrl The deploymentPackageUrl property
    */
    private ?string $deploymentPackageUrl = null;
    
    /**
     * @var string|null $destinationServiceName The destinationServiceName property
    */
    private ?string $destinationServiceName = null;
    
    /**
     * @var bool|null $isSigned The isSigned property
    */
    private ?bool $isSigned = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $manifest The manifest property
    */
    private ?string $manifest = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var ApplicationPermissionsRequired|null $permissionsRequired The permissionsRequired property
    */
    private ?ApplicationPermissionsRequired $permissionsRequired = null;
    
    /**
     * @var string|null $platform The platform property
    */
    private ?string $platform = null;
    
    /**
     * @var string|null $policyName The policyName property
    */
    private ?string $policyName = null;
    
    /**
     * @var string|null $publisher The publisher property
    */
    private ?string $publisher = null;
    
    /**
     * @var string|null $riskScore The riskScore property
    */
    private ?string $riskScore = null;
    
    /**
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new CloudAppSecurityProfile and sets the default values.
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
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deploymentPackageUrl property value. The deploymentPackageUrl property
     * @return string|null
    */
    public function getDeploymentPackageUrl(): ?string {
        return $this->deploymentPackageUrl;
    }

    /**
     * Gets the destinationServiceName property value. The destinationServiceName property
     * @return string|null
    */
    public function getDestinationServiceName(): ?string {
        return $this->destinationServiceName;
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
        return $this->isSigned;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the manifest property value. The manifest property
     * @return string|null
    */
    public function getManifest(): ?string {
        return $this->manifest;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the permissionsRequired property value. The permissionsRequired property
     * @return ApplicationPermissionsRequired|null
    */
    public function getPermissionsRequired(): ?ApplicationPermissionsRequired {
        return $this->permissionsRequired;
    }

    /**
     * Gets the platform property value. The platform property
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->platform;
    }

    /**
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the publisher property value. The publisher property
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
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
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
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
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deploymentPackageUrl', $this->deploymentPackageUrl);
        $writer->writeStringValue('destinationServiceName', $this->destinationServiceName);
        $writer->writeBooleanValue('isSigned', $this->isSigned);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('manifest', $this->manifest);
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('permissionsRequired', $this->permissionsRequired);
        $writer->writeStringValue('platform', $this->platform);
        $writer->writeStringValue('policyName', $this->policyName);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('type', $this->type);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
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
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deploymentPackageUrl property value. The deploymentPackageUrl property
     *  @param string|null $value Value to set for the deploymentPackageUrl property.
    */
    public function setDeploymentPackageUrl(?string $value ): void {
        $this->deploymentPackageUrl = $value;
    }

    /**
     * Sets the destinationServiceName property value. The destinationServiceName property
     *  @param string|null $value Value to set for the destinationServiceName property.
    */
    public function setDestinationServiceName(?string $value ): void {
        $this->destinationServiceName = $value;
    }

    /**
     * Sets the isSigned property value. The isSigned property
     *  @param bool|null $value Value to set for the isSigned property.
    */
    public function setIsSigned(?bool $value ): void {
        $this->isSigned = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the manifest property value. The manifest property
     *  @param string|null $value Value to set for the manifest property.
    */
    public function setManifest(?string $value ): void {
        $this->manifest = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the permissionsRequired property value. The permissionsRequired property
     *  @param ApplicationPermissionsRequired|null $value Value to set for the permissionsRequired property.
    */
    public function setPermissionsRequired(?ApplicationPermissionsRequired $value ): void {
        $this->permissionsRequired = $value;
    }

    /**
     * Sets the platform property value. The platform property
     *  @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the policyName property value. The policyName property
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the publisher property value. The publisher property
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
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
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
