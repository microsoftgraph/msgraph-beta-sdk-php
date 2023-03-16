<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcProvisioningPolicy extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicy {
        return new CloudPcProvisioningPolicy();
    }

    /**
     * Gets the alternateResourceUrl property value. The URL of the alternate resource that links to this provisioning policy. Read-only.
     * @return string|null
    */
    public function getAlternateResourceUrl(): ?string {
        return $this->getBackingStore()->get('alternateResourceUrl');
    }

    /**
     * Gets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. For an example about how to get the assignments relationship, see Get cloudPcProvisioningPolicy.
     * @return array<CloudPcProvisioningPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the cloudPcGroupDisplayName property value. The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
     * @return string|null
    */
    public function getCloudPcGroupDisplayName(): ?string {
        return $this->getBackingStore()->get('cloudPcGroupDisplayName');
    }

    /**
     * Gets the cloudPcNamingTemplate property value. The cloudPcNamingTemplate property
     * @return string|null
    */
    public function getCloudPcNamingTemplate(): ?string {
        return $this->getBackingStore()->get('cloudPcNamingTemplate');
    }

    /**
     * Gets the description property value. The provisioning policy description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name for the provisioning policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the domainJoinConfiguration property value. Specifies how Cloud PCs will join Azure Active Directory.
     * @return CloudPcDomainJoinConfiguration|null
    */
    public function getDomainJoinConfiguration(): ?CloudPcDomainJoinConfiguration {
        return $this->getBackingStore()->get('domainJoinConfiguration');
    }

    /**
     * Gets the domainJoinConfigurations property value. The domainJoinConfigurations property
     * @return array<CloudPcDomainJoinConfiguration>|null
    */
    public function getDomainJoinConfigurations(): ?array {
        return $this->getBackingStore()->get('domainJoinConfigurations');
    }

    /**
     * Gets the enableSingleSignOn property value. True if the provisioned Cloud PC can be accessed by single sign-on. False indicates that the provisioned Cloud PC doesn't support this feature. Default value is false. Windows 365 users can use single sign-on to authenticate to Azure Active Directory (Azure AD) with passwordless options (for example, FIDO keys) to access their Cloud PC. Optional.
     * @return bool|null
    */
    public function getEnableSingleSignOn(): ?bool {
        return $this->getBackingStore()->get('enableSingleSignOn');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternateResourceUrl' => fn(ParseNode $n) => $o->setAlternateResourceUrl($n->getStringValue()),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([CloudPcProvisioningPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'cloudPcGroupDisplayName' => fn(ParseNode $n) => $o->setCloudPcGroupDisplayName($n->getStringValue()),
            'cloudPcNamingTemplate' => fn(ParseNode $n) => $o->setCloudPcNamingTemplate($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainJoinConfiguration' => fn(ParseNode $n) => $o->setDomainJoinConfiguration($n->getObjectValue([CloudPcDomainJoinConfiguration::class, 'createFromDiscriminatorValue'])),
            'domainJoinConfigurations' => fn(ParseNode $n) => $o->setDomainJoinConfigurations($n->getCollectionOfObjectValues([CloudPcDomainJoinConfiguration::class, 'createFromDiscriminatorValue'])),
            'enableSingleSignOn' => fn(ParseNode $n) => $o->setEnableSingleSignOn($n->getBooleanValue()),
            'gracePeriodInHours' => fn(ParseNode $n) => $o->setGracePeriodInHours($n->getIntegerValue()),
            'imageDisplayName' => fn(ParseNode $n) => $o->setImageDisplayName($n->getStringValue()),
            'imageId' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'imageType' => fn(ParseNode $n) => $o->setImageType($n->getEnumValue(CloudPcProvisioningPolicyImageType::class)),
            'localAdminEnabled' => fn(ParseNode $n) => $o->setLocalAdminEnabled($n->getBooleanValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getEnumValue(CloudPcManagementService::class)),
            'microsoftManagedDesktop' => fn(ParseNode $n) => $o->setMicrosoftManagedDesktop($n->getObjectValue([MicrosoftManagedDesktop::class, 'createFromDiscriminatorValue'])),
            'onPremisesConnectionId' => fn(ParseNode $n) => $o->setOnPremisesConnectionId($n->getStringValue()),
            'provisioningType' => fn(ParseNode $n) => $o->setProvisioningType($n->getEnumValue(CloudPcProvisioningType::class)),
            'windowsSettings' => fn(ParseNode $n) => $o->setWindowsSettings($n->getObjectValue([CloudPcWindowsSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gracePeriodInHours property value. The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
     * @return int|null
    */
    public function getGracePeriodInHours(): ?int {
        return $this->getBackingStore()->get('gracePeriodInHours');
    }

    /**
     * Gets the imageDisplayName property value. The display name for the OS image you’re provisioning.
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        return $this->getBackingStore()->get('imageDisplayName');
    }

    /**
     * Gets the imageId property value. The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
     * @return string|null
    */
    public function getImageId(): ?string {
        return $this->getBackingStore()->get('imageId');
    }

    /**
     * Gets the imageType property value. The imageType property
     * @return CloudPcProvisioningPolicyImageType|null
    */
    public function getImageType(): ?CloudPcProvisioningPolicyImageType {
        return $this->getBackingStore()->get('imageType');
    }

    /**
     * Gets the localAdminEnabled property value. Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        return $this->getBackingStore()->get('localAdminEnabled');
    }

    /**
     * Gets the managedBy property value. The managedBy property
     * @return CloudPcManagementService|null
    */
    public function getManagedBy(): ?CloudPcManagementService {
        return $this->getBackingStore()->get('managedBy');
    }

    /**
     * Gets the microsoftManagedDesktop property value. The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
     * @return MicrosoftManagedDesktop|null
    */
    public function getMicrosoftManagedDesktop(): ?MicrosoftManagedDesktop {
        return $this->getBackingStore()->get('microsoftManagedDesktop');
    }

    /**
     * Gets the onPremisesConnectionId property value. The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
     * @return string|null
    */
    public function getOnPremisesConnectionId(): ?string {
        return $this->getBackingStore()->get('onPremisesConnectionId');
    }

    /**
     * Gets the provisioningType property value. Specifies the type of license used when provisioning Cloud PCs using this policy. By default, the license type is dedicated if the provisioningType isn't specified when you create the cloudPcProvisioningPolicy. You can't change this property after the cloudPcProvisioningPolicy was created. Possible values are: dedicated, shared, unknownFutureValue.
     * @return CloudPcProvisioningType|null
    */
    public function getProvisioningType(): ?CloudPcProvisioningType {
        return $this->getBackingStore()->get('provisioningType');
    }

    /**
     * Gets the windowsSettings property value. Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
     * @return CloudPcWindowsSettings|null
    */
    public function getWindowsSettings(): ?CloudPcWindowsSettings {
        return $this->getBackingStore()->get('windowsSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alternateResourceUrl', $this->getAlternateResourceUrl());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('cloudPcGroupDisplayName', $this->getCloudPcGroupDisplayName());
        $writer->writeStringValue('cloudPcNamingTemplate', $this->getCloudPcNamingTemplate());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('domainJoinConfiguration', $this->getDomainJoinConfiguration());
        $writer->writeCollectionOfObjectValues('domainJoinConfigurations', $this->getDomainJoinConfigurations());
        $writer->writeBooleanValue('enableSingleSignOn', $this->getEnableSingleSignOn());
        $writer->writeIntegerValue('gracePeriodInHours', $this->getGracePeriodInHours());
        $writer->writeStringValue('imageDisplayName', $this->getImageDisplayName());
        $writer->writeStringValue('imageId', $this->getImageId());
        $writer->writeEnumValue('imageType', $this->getImageType());
        $writer->writeBooleanValue('localAdminEnabled', $this->getLocalAdminEnabled());
        $writer->writeEnumValue('managedBy', $this->getManagedBy());
        $writer->writeObjectValue('microsoftManagedDesktop', $this->getMicrosoftManagedDesktop());
        $writer->writeStringValue('onPremisesConnectionId', $this->getOnPremisesConnectionId());
        $writer->writeEnumValue('provisioningType', $this->getProvisioningType());
        $writer->writeObjectValue('windowsSettings', $this->getWindowsSettings());
    }

    /**
     * Sets the alternateResourceUrl property value. The URL of the alternate resource that links to this provisioning policy. Read-only.
     * @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value): void {
        $this->getBackingStore()->set('alternateResourceUrl', $value);
    }

    /**
     * Sets the assignments property value. A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. For an example about how to get the assignments relationship, see Get cloudPcProvisioningPolicy.
     * @param array<CloudPcProvisioningPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the cloudPcGroupDisplayName property value. The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
     * @param string|null $value Value to set for the cloudPcGroupDisplayName property.
    */
    public function setCloudPcGroupDisplayName(?string $value): void {
        $this->getBackingStore()->set('cloudPcGroupDisplayName', $value);
    }

    /**
     * Sets the cloudPcNamingTemplate property value. The cloudPcNamingTemplate property
     * @param string|null $value Value to set for the cloudPcNamingTemplate property.
    */
    public function setCloudPcNamingTemplate(?string $value): void {
        $this->getBackingStore()->set('cloudPcNamingTemplate', $value);
    }

    /**
     * Sets the description property value. The provisioning policy description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the provisioning policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainJoinConfiguration property value. Specifies how Cloud PCs will join Azure Active Directory.
     * @param CloudPcDomainJoinConfiguration|null $value Value to set for the domainJoinConfiguration property.
    */
    public function setDomainJoinConfiguration(?CloudPcDomainJoinConfiguration $value): void {
        $this->getBackingStore()->set('domainJoinConfiguration', $value);
    }

    /**
     * Sets the domainJoinConfigurations property value. The domainJoinConfigurations property
     * @param array<CloudPcDomainJoinConfiguration>|null $value Value to set for the domainJoinConfigurations property.
    */
    public function setDomainJoinConfigurations(?array $value): void {
        $this->getBackingStore()->set('domainJoinConfigurations', $value);
    }

    /**
     * Sets the enableSingleSignOn property value. True if the provisioned Cloud PC can be accessed by single sign-on. False indicates that the provisioned Cloud PC doesn't support this feature. Default value is false. Windows 365 users can use single sign-on to authenticate to Azure Active Directory (Azure AD) with passwordless options (for example, FIDO keys) to access their Cloud PC. Optional.
     * @param bool|null $value Value to set for the enableSingleSignOn property.
    */
    public function setEnableSingleSignOn(?bool $value): void {
        $this->getBackingStore()->set('enableSingleSignOn', $value);
    }

    /**
     * Sets the gracePeriodInHours property value. The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
     * @param int|null $value Value to set for the gracePeriodInHours property.
    */
    public function setGracePeriodInHours(?int $value): void {
        $this->getBackingStore()->set('gracePeriodInHours', $value);
    }

    /**
     * Sets the imageDisplayName property value. The display name for the OS image you’re provisioning.
     * @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value): void {
        $this->getBackingStore()->set('imageDisplayName', $value);
    }

    /**
     * Sets the imageId property value. The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
     * @param string|null $value Value to set for the imageId property.
    */
    public function setImageId(?string $value): void {
        $this->getBackingStore()->set('imageId', $value);
    }

    /**
     * Sets the imageType property value. The imageType property
     * @param CloudPcProvisioningPolicyImageType|null $value Value to set for the imageType property.
    */
    public function setImageType(?CloudPcProvisioningPolicyImageType $value): void {
        $this->getBackingStore()->set('imageType', $value);
    }

    /**
     * Sets the localAdminEnabled property value. Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
     * @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value): void {
        $this->getBackingStore()->set('localAdminEnabled', $value);
    }

    /**
     * Sets the managedBy property value. The managedBy property
     * @param CloudPcManagementService|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?CloudPcManagementService $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the microsoftManagedDesktop property value. The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
     * @param MicrosoftManagedDesktop|null $value Value to set for the microsoftManagedDesktop property.
    */
    public function setMicrosoftManagedDesktop(?MicrosoftManagedDesktop $value): void {
        $this->getBackingStore()->set('microsoftManagedDesktop', $value);
    }

    /**
     * Sets the onPremisesConnectionId property value. The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
     * @param string|null $value Value to set for the onPremisesConnectionId property.
    */
    public function setOnPremisesConnectionId(?string $value): void {
        $this->getBackingStore()->set('onPremisesConnectionId', $value);
    }

    /**
     * Sets the provisioningType property value. Specifies the type of license used when provisioning Cloud PCs using this policy. By default, the license type is dedicated if the provisioningType isn't specified when you create the cloudPcProvisioningPolicy. You can't change this property after the cloudPcProvisioningPolicy was created. Possible values are: dedicated, shared, unknownFutureValue.
     * @param CloudPcProvisioningType|null $value Value to set for the provisioningType property.
    */
    public function setProvisioningType(?CloudPcProvisioningType $value): void {
        $this->getBackingStore()->set('provisioningType', $value);
    }

    /**
     * Sets the windowsSettings property value. Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
     * @param CloudPcWindowsSettings|null $value Value to set for the windowsSettings property.
    */
    public function setWindowsSettings(?CloudPcWindowsSettings $value): void {
        $this->getBackingStore()->set('windowsSettings', $value);
    }

}
