<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcProvisioningPolicy extends Entity 
{
    /** @var array<CloudPcProvisioningPolicyAssignment>|null $assignments A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship. */
    private ?array $assignments = null;
    
    /** @var string|null $description The provisioning policy description. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name for the provisioning policy. */
    private ?string $displayName = null;
    
    /** @var CloudPcDomainJoinConfiguration|null $domainJoinConfiguration Specifies how Cloud PCs will join Azure Active Directory. */
    private ?CloudPcDomainJoinConfiguration $domainJoinConfiguration = null;
    
    /** @var string|null $imageDisplayName The display name for the OS image you’re provisioning. */
    private ?string $imageDisplayName = null;
    
    /** @var string|null $imageId The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os. */
    private ?string $imageId = null;
    
    /** @var CloudPcProvisioningPolicyImageType|null $imageType The type of OS image (custom or gallery) you want to provision on Cloud PCs. Possible values are: gallery, custom. */
    private ?CloudPcProvisioningPolicyImageType $imageType = null;
    
    /** @var MicrosoftManagedDesktop|null $microsoftManagedDesktop The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it. */
    private ?MicrosoftManagedDesktop $microsoftManagedDesktop = null;
    
    /** @var string|null $onPremisesConnectionId The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service. */
    private ?string $onPremisesConnectionId = null;
    
    /** @var CloudPcWindowsSettings|null $windowsSettings Specific Windows settings to configure while creating Cloud PCs for this provisioning policy. */
    private ?CloudPcWindowsSettings $windowsSettings = null;
    
    /**
     * Instantiates a new cloudPcProvisioningPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcProvisioningPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicy {
        return new CloudPcProvisioningPolicy();
    }

    /**
     * Gets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
     * @return array<CloudPcProvisioningPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the description property value. The provisioning policy description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the provisioning policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the domainJoinConfiguration property value. Specifies how Cloud PCs will join Azure Active Directory.
     * @return CloudPcDomainJoinConfiguration|null
    */
    public function getDomainJoinConfiguration(): ?CloudPcDomainJoinConfiguration {
        return $this->domainJoinConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(CloudPcProvisioningPolicyAssignment::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'domainJoinConfiguration' => function (self $o, ParseNode $n) { $o->setDomainJoinConfiguration($n->getObjectValue(CloudPcDomainJoinConfiguration::class)); },
            'imageDisplayName' => function (self $o, ParseNode $n) { $o->setImageDisplayName($n->getStringValue()); },
            'imageId' => function (self $o, ParseNode $n) { $o->setImageId($n->getStringValue()); },
            'imageType' => function (self $o, ParseNode $n) { $o->setImageType($n->getEnumValue(CloudPcProvisioningPolicyImageType::class)); },
            'microsoftManagedDesktop' => function (self $o, ParseNode $n) { $o->setMicrosoftManagedDesktop($n->getObjectValue(MicrosoftManagedDesktop::class)); },
            'onPremisesConnectionId' => function (self $o, ParseNode $n) { $o->setOnPremisesConnectionId($n->getStringValue()); },
            'windowsSettings' => function (self $o, ParseNode $n) { $o->setWindowsSettings($n->getObjectValue(CloudPcWindowsSettings::class)); },
        ]);
    }

    /**
     * Gets the imageDisplayName property value. The display name for the OS image you’re provisioning.
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        return $this->imageDisplayName;
    }

    /**
     * Gets the imageId property value. The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
     * @return string|null
    */
    public function getImageId(): ?string {
        return $this->imageId;
    }

    /**
     * Gets the imageType property value. The type of OS image (custom or gallery) you want to provision on Cloud PCs. Possible values are: gallery, custom.
     * @return CloudPcProvisioningPolicyImageType|null
    */
    public function getImageType(): ?CloudPcProvisioningPolicyImageType {
        return $this->imageType;
    }

    /**
     * Gets the microsoftManagedDesktop property value. The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
     * @return MicrosoftManagedDesktop|null
    */
    public function getMicrosoftManagedDesktop(): ?MicrosoftManagedDesktop {
        return $this->microsoftManagedDesktop;
    }

    /**
     * Gets the onPremisesConnectionId property value. The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
     * @return string|null
    */
    public function getOnPremisesConnectionId(): ?string {
        return $this->onPremisesConnectionId;
    }

    /**
     * Gets the windowsSettings property value. Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
     * @return CloudPcWindowsSettings|null
    */
    public function getWindowsSettings(): ?CloudPcWindowsSettings {
        return $this->windowsSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('domainJoinConfiguration', $this->domainJoinConfiguration);
        $writer->writeStringValue('imageDisplayName', $this->imageDisplayName);
        $writer->writeStringValue('imageId', $this->imageId);
        $writer->writeEnumValue('imageType', $this->imageType);
        $writer->writeObjectValue('microsoftManagedDesktop', $this->microsoftManagedDesktop);
        $writer->writeStringValue('onPremisesConnectionId', $this->onPremisesConnectionId);
        $writer->writeObjectValue('windowsSettings', $this->windowsSettings);
    }

    /**
     * Sets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
     *  @param array<CloudPcProvisioningPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the description property value. The provisioning policy description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the provisioning policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the domainJoinConfiguration property value. Specifies how Cloud PCs will join Azure Active Directory.
     *  @param CloudPcDomainJoinConfiguration|null $value Value to set for the domainJoinConfiguration property.
    */
    public function setDomainJoinConfiguration(?CloudPcDomainJoinConfiguration $value ): void {
        $this->domainJoinConfiguration = $value;
    }

    /**
     * Sets the imageDisplayName property value. The display name for the OS image you’re provisioning.
     *  @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value ): void {
        $this->imageDisplayName = $value;
    }

    /**
     * Sets the imageId property value. The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
     *  @param string|null $value Value to set for the imageId property.
    */
    public function setImageId(?string $value ): void {
        $this->imageId = $value;
    }

    /**
     * Sets the imageType property value. The type of OS image (custom or gallery) you want to provision on Cloud PCs. Possible values are: gallery, custom.
     *  @param CloudPcProvisioningPolicyImageType|null $value Value to set for the imageType property.
    */
    public function setImageType(?CloudPcProvisioningPolicyImageType $value ): void {
        $this->imageType = $value;
    }

    /**
     * Sets the microsoftManagedDesktop property value. The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
     *  @param MicrosoftManagedDesktop|null $value Value to set for the microsoftManagedDesktop property.
    */
    public function setMicrosoftManagedDesktop(?MicrosoftManagedDesktop $value ): void {
        $this->microsoftManagedDesktop = $value;
    }

    /**
     * Sets the onPremisesConnectionId property value. The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
     *  @param string|null $value Value to set for the onPremisesConnectionId property.
    */
    public function setOnPremisesConnectionId(?string $value ): void {
        $this->onPremisesConnectionId = $value;
    }

    /**
     * Sets the windowsSettings property value. Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
     *  @param CloudPcWindowsSettings|null $value Value to set for the windowsSettings property.
    */
    public function setWindowsSettings(?CloudPcWindowsSettings $value ): void {
        $this->windowsSettings = $value;
    }

}
