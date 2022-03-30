<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecurityProfile extends Entity 
{
    /** @var string|null $azureSubscriptionId  */
    private ?string $azureSubscriptionId = null;
    
    /** @var string|null $azureTenantId  */
    private ?string $azureTenantId = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $deploymentPackageUrl  */
    private ?string $deploymentPackageUrl = null;
    
    /** @var string|null $destinationServiceName  */
    private ?string $destinationServiceName = null;
    
    /** @var bool|null $isSigned  */
    private ?bool $isSigned = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $manifest  */
    private ?string $manifest = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var ApplicationPermissionsRequired|null $permissionsRequired  */
    private ?ApplicationPermissionsRequired $permissionsRequired = null;
    
    /** @var string|null $platform  */
    private ?string $platform = null;
    
    /** @var string|null $policyName  */
    private ?string $policyName = null;
    
    /** @var string|null $publisher  */
    private ?string $publisher = null;
    
    /** @var string|null $riskScore  */
    private ?string $riskScore = null;
    
    /** @var array<string>|null $tags  */
    private ?array $tags = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /** @var SecurityVendorInformation|null $vendorInformation  */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new cloudAppSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecurityProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecurityProfile {
        return new CloudAppSecurityProfile();
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
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deploymentPackageUrl property value. 
     * @return string|null
    */
    public function getDeploymentPackageUrl(): ?string {
        return $this->deploymentPackageUrl;
    }

    /**
     * Gets the destinationServiceName property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'azureSubscriptionId' => function (self $o, ParseNode $n) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (self $o, ParseNode $n) { $o->setAzureTenantId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deploymentPackageUrl' => function (self $o, ParseNode $n) { $o->setDeploymentPackageUrl($n->getStringValue()); },
            'destinationServiceName' => function (self $o, ParseNode $n) { $o->setDestinationServiceName($n->getStringValue()); },
            'isSigned' => function (self $o, ParseNode $n) { $o->setIsSigned($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'manifest' => function (self $o, ParseNode $n) { $o->setManifest($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'permissionsRequired' => function (self $o, ParseNode $n) { $o->setPermissionsRequired($n->getEnumValue(ApplicationPermissionsRequired::class)); },
            'platform' => function (self $o, ParseNode $n) { $o->setPlatform($n->getStringValue()); },
            'policyName' => function (self $o, ParseNode $n) { $o->setPolicyName($n->getStringValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
            'riskScore' => function (self $o, ParseNode $n) { $o->setRiskScore($n->getStringValue()); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'vendorInformation' => function (self $o, ParseNode $n) { $o->setVendorInformation($n->getObjectValue(SecurityVendorInformation::class)); },
        ]);
    }

    /**
     * Gets the isSigned property value. 
     * @return bool|null
    */
    public function getIsSigned(): ?bool {
        return $this->isSigned;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the manifest property value. 
     * @return string|null
    */
    public function getManifest(): ?string {
        return $this->manifest;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the permissionsRequired property value. 
     * @return ApplicationPermissionsRequired|null
    */
    public function getPermissionsRequired(): ?ApplicationPermissionsRequired {
        return $this->permissionsRequired;
    }

    /**
     * Gets the platform property value. 
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->platform;
    }

    /**
     * Gets the policyName property value. 
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the publisher property value. 
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
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
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
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
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deploymentPackageUrl property value. 
     *  @param string|null $value Value to set for the deploymentPackageUrl property.
    */
    public function setDeploymentPackageUrl(?string $value ): void {
        $this->deploymentPackageUrl = $value;
    }

    /**
     * Sets the destinationServiceName property value. 
     *  @param string|null $value Value to set for the destinationServiceName property.
    */
    public function setDestinationServiceName(?string $value ): void {
        $this->destinationServiceName = $value;
    }

    /**
     * Sets the isSigned property value. 
     *  @param bool|null $value Value to set for the isSigned property.
    */
    public function setIsSigned(?bool $value ): void {
        $this->isSigned = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the manifest property value. 
     *  @param string|null $value Value to set for the manifest property.
    */
    public function setManifest(?string $value ): void {
        $this->manifest = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the permissionsRequired property value. 
     *  @param ApplicationPermissionsRequired|null $value Value to set for the permissionsRequired property.
    */
    public function setPermissionsRequired(?ApplicationPermissionsRequired $value ): void {
        $this->permissionsRequired = $value;
    }

    /**
     * Sets the platform property value. 
     *  @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the policyName property value. 
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the publisher property value. 
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
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
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the vendorInformation property value. 
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
