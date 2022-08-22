<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcProvisioningPolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $alternateResourceUrl The URL of the alternate resource that links to this provisioning policy. Read-only.
    */
    private ?string $alternateResourceUrl = null;
    
    /**
     * @var array<CloudPcProvisioningPolicyAssignment>|null $assignments A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
    */
    private ?array $assignments = null;
    
    /**
     * @var string|null $cloudPcGroupDisplayName The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
    */
    private ?string $cloudPcGroupDisplayName = null;
    
    /**
     * @var string|null $description The provisioning policy description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the provisioning policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var CloudPcDomainJoinConfiguration|null $domainJoinConfiguration Specifies how Cloud PCs will join Azure Active Directory.
    */
    private ?CloudPcDomainJoinConfiguration $domainJoinConfiguration = null;
    
    /**
     * @var int|null $gracePeriodInHours The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
    */
    private ?int $gracePeriodInHours = null;
    
    /**
     * @var string|null $imageDisplayName The display name for the OS image you’re provisioning.
    */
    private ?string $imageDisplayName = null;
    
    /**
     * @var string|null $imageId The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
    */
    private ?string $imageId = null;
    
    /**
     * @var CloudPcProvisioningPolicyImageType|null $imageType The imageType property
    */
    private ?CloudPcProvisioningPolicyImageType $imageType = null;
    
    /**
     * @var bool|null $localAdminEnabled Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
    */
    private ?bool $localAdminEnabled = null;
    
    /**
     * @var CloudPcManagementService|null $managedBy The managedBy property
    */
    private ?CloudPcManagementService $managedBy = null;
    
    /**
     * @var MicrosoftManagedDesktop|null $microsoftManagedDesktop The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
    */
    private ?MicrosoftManagedDesktop $microsoftManagedDesktop = null;
    
    /**
     * @var string|null $onPremisesConnectionId The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
    */
    private ?string $onPremisesConnectionId = null;
    
    /**
     * @var CloudPcWindowsSettings|null $windowsSettings Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
    */
    private ?CloudPcWindowsSettings $windowsSettings = null;
    
    /**
     * Instantiates a new CloudPcProvisioningPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcProvisioningPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcProvisioningPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicy {
        return new CloudPcProvisioningPolicy();
    }

    /**
     * Gets the alternateResourceUrl property value. The URL of the alternate resource that links to this provisioning policy. Read-only.
     * @return string|null
    */
    public function getAlternateResourceUrl(): ?string {
        return $this->alternateResourceUrl;
    }

    /**
     * Gets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
     * @return array<CloudPcProvisioningPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the cloudPcGroupDisplayName property value. The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
     * @return string|null
    */
    public function getCloudPcGroupDisplayName(): ?string {
        return $this->cloudPcGroupDisplayName;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternateResourceUrl' => function (ParseNode $n) use ($o) { $o->setAlternateResourceUrl($n->getStringValue()); },
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(CloudPcProvisioningPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'cloudPcGroupDisplayName' => function (ParseNode $n) use ($o) { $o->setCloudPcGroupDisplayName($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'domainJoinConfiguration' => function (ParseNode $n) use ($o) { $o->setDomainJoinConfiguration($n->getObjectValue(array(CloudPcDomainJoinConfiguration::class, 'createFromDiscriminatorValue'))); },
            'gracePeriodInHours' => function (ParseNode $n) use ($o) { $o->setGracePeriodInHours($n->getIntegerValue()); },
            'imageDisplayName' => function (ParseNode $n) use ($o) { $o->setImageDisplayName($n->getStringValue()); },
            'imageId' => function (ParseNode $n) use ($o) { $o->setImageId($n->getStringValue()); },
            'imageType' => function (ParseNode $n) use ($o) { $o->setImageType($n->getEnumValue(CloudPcProvisioningPolicyImageType::class)); },
            'localAdminEnabled' => function (ParseNode $n) use ($o) { $o->setLocalAdminEnabled($n->getBooleanValue()); },
            'managedBy' => function (ParseNode $n) use ($o) { $o->setManagedBy($n->getEnumValue(CloudPcManagementService::class)); },
            'microsoftManagedDesktop' => function (ParseNode $n) use ($o) { $o->setMicrosoftManagedDesktop($n->getObjectValue(array(MicrosoftManagedDesktop::class, 'createFromDiscriminatorValue'))); },
            'onPremisesConnectionId' => function (ParseNode $n) use ($o) { $o->setOnPremisesConnectionId($n->getStringValue()); },
            'windowsSettings' => function (ParseNode $n) use ($o) { $o->setWindowsSettings($n->getObjectValue(array(CloudPcWindowsSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the gracePeriodInHours property value. The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
     * @return int|null
    */
    public function getGracePeriodInHours(): ?int {
        return $this->gracePeriodInHours;
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
     * Gets the imageType property value. The imageType property
     * @return CloudPcProvisioningPolicyImageType|null
    */
    public function getImageType(): ?CloudPcProvisioningPolicyImageType {
        return $this->imageType;
    }

    /**
     * Gets the localAdminEnabled property value. Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        return $this->localAdminEnabled;
    }

    /**
     * Gets the managedBy property value. The managedBy property
     * @return CloudPcManagementService|null
    */
    public function getManagedBy(): ?CloudPcManagementService {
        return $this->managedBy;
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
        $writer->writeStringValue('alternateResourceUrl', $this->alternateResourceUrl);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('cloudPcGroupDisplayName', $this->cloudPcGroupDisplayName);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('domainJoinConfiguration', $this->domainJoinConfiguration);
        $writer->writeIntegerValue('gracePeriodInHours', $this->gracePeriodInHours);
        $writer->writeStringValue('imageDisplayName', $this->imageDisplayName);
        $writer->writeStringValue('imageId', $this->imageId);
        $writer->writeEnumValue('imageType', $this->imageType);
        $writer->writeBooleanValue('localAdminEnabled', $this->localAdminEnabled);
        $writer->writeEnumValue('managedBy', $this->managedBy);
        $writer->writeObjectValue('microsoftManagedDesktop', $this->microsoftManagedDesktop);
        $writer->writeStringValue('onPremisesConnectionId', $this->onPremisesConnectionId);
        $writer->writeObjectValue('windowsSettings', $this->windowsSettings);
    }

    /**
     * Sets the alternateResourceUrl property value. The URL of the alternate resource that links to this provisioning policy. Read-only.
     *  @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value ): void {
        $this->alternateResourceUrl = $value;
    }

    /**
     * Sets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
     *  @param array<CloudPcProvisioningPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the cloudPcGroupDisplayName property value. The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
     *  @param string|null $value Value to set for the cloudPcGroupDisplayName property.
    */
    public function setCloudPcGroupDisplayName(?string $value ): void {
        $this->cloudPcGroupDisplayName = $value;
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
     * Sets the gracePeriodInHours property value. The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
     *  @param int|null $value Value to set for the gracePeriodInHours property.
    */
    public function setGracePeriodInHours(?int $value ): void {
        $this->gracePeriodInHours = $value;
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
     * Sets the imageType property value. The imageType property
     *  @param CloudPcProvisioningPolicyImageType|null $value Value to set for the imageType property.
    */
    public function setImageType(?CloudPcProvisioningPolicyImageType $value ): void {
        $this->imageType = $value;
    }

    /**
     * Sets the localAdminEnabled property value. Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
     *  @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value ): void {
        $this->localAdminEnabled = $value;
    }

    /**
     * Sets the managedBy property value. The managedBy property
     *  @param CloudPcManagementService|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?CloudPcManagementService $value ): void {
        $this->managedBy = $value;
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
