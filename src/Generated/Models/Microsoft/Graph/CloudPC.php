<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPC extends Entity 
{
    /** @var string|null $aadDeviceId The Azure Active Directory (Azure AD) device ID of the Cloud PC. */
    private ?string $aadDeviceId = null;
    
    /** @var string|null $displayName The display name of the Cloud PC. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $gracePeriodEndDateTime The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $gracePeriodEndDateTime = null;
    
    /** @var string|null $imageDisplayName Name of the OS image that's on the Cloud PC. */
    private ?string $imageDisplayName = null;
    
    /** @var CloudPcLoginResult|null $lastLoginResult The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}. */
    private ?CloudPcLoginResult $lastLoginResult = null;
    
    /** @var DateTime|null $lastModifiedDateTime The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var CloudPcRemoteActionResult|null $lastRemoteActionResult The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot. */
    private ?CloudPcRemoteActionResult $lastRemoteActionResult = null;
    
    /** @var string|null $managedDeviceId The Intune device ID of the Cloud PC. */
    private ?string $managedDeviceId = null;
    
    /** @var string|null $managedDeviceName The Intune device name of the Cloud PC. */
    private ?string $managedDeviceName = null;
    
    /** @var string|null $onPremisesConnectionName The on-premises connection that is applied during the provisioning of Cloud PCs. */
    private ?string $onPremisesConnectionName = null;
    
    /** @var CloudPcOperatingSystem|null $osVersion The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue. */
    private ?CloudPcOperatingSystem $osVersion = null;
    
    /** @var string|null $provisioningPolicyId The provisioning policy ID of the Cloud PC. */
    private ?string $provisioningPolicyId = null;
    
    /** @var string|null $provisioningPolicyName The provisioning policy that is applied during the provisioning of Cloud PCs. */
    private ?string $provisioningPolicyName = null;
    
    /** @var string|null $servicePlanId The service plan ID of the Cloud PC. */
    private ?string $servicePlanId = null;
    
    /** @var string|null $servicePlanName The service plan name of the Cloud PC. */
    private ?string $servicePlanName = null;
    
    /** @var CloudPcServicePlanType|null $servicePlanType The service plan type of the Cloud PC. */
    private ?CloudPcServicePlanType $servicePlanType = null;
    
    /** @var CloudPcStatus|null $status The status of the Cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed, restoring. */
    private ?CloudPcStatus $status = null;
    
    /** @var CloudPcStatusDetails|null $statusDetails The details of the Cloud PC status. */
    private ?CloudPcStatusDetails $statusDetails = null;
    
    /** @var CloudPcUserAccountType|null $userAccountType The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue. */
    private ?CloudPcUserAccountType $userAccountType = null;
    
    /** @var string|null $userPrincipalName The user principal name (UPN) of the user assigned to the Cloud PC. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new cloudPC and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPC
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPC {
        return new CloudPC();
    }

    /**
     * Gets the aadDeviceId property value. The Azure Active Directory (Azure AD) device ID of the Cloud PC.
     * @return string|null
    */
    public function getAadDeviceId(): ?string {
        return $this->aadDeviceId;
    }

    /**
     * Gets the displayName property value. The display name of the Cloud PC.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'aadDeviceId' => function (self $o, ParseNode $n) { $o->setAadDeviceId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'gracePeriodEndDateTime' => function (self $o, ParseNode $n) { $o->setGracePeriodEndDateTime($n->getDateTimeValue()); },
            'imageDisplayName' => function (self $o, ParseNode $n) { $o->setImageDisplayName($n->getStringValue()); },
            'lastLoginResult' => function (self $o, ParseNode $n) { $o->setLastLoginResult($n->getObjectValue(CloudPcLoginResult::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lastRemoteActionResult' => function (self $o, ParseNode $n) { $o->setLastRemoteActionResult($n->getObjectValue(CloudPcRemoteActionResult::class)); },
            'managedDeviceId' => function (self $o, ParseNode $n) { $o->setManagedDeviceId($n->getStringValue()); },
            'managedDeviceName' => function (self $o, ParseNode $n) { $o->setManagedDeviceName($n->getStringValue()); },
            'onPremisesConnectionName' => function (self $o, ParseNode $n) { $o->setOnPremisesConnectionName($n->getStringValue()); },
            'osVersion' => function (self $o, ParseNode $n) { $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)); },
            'provisioningPolicyId' => function (self $o, ParseNode $n) { $o->setProvisioningPolicyId($n->getStringValue()); },
            'provisioningPolicyName' => function (self $o, ParseNode $n) { $o->setProvisioningPolicyName($n->getStringValue()); },
            'servicePlanId' => function (self $o, ParseNode $n) { $o->setServicePlanId($n->getStringValue()); },
            'servicePlanName' => function (self $o, ParseNode $n) { $o->setServicePlanName($n->getStringValue()); },
            'servicePlanType' => function (self $o, ParseNode $n) { $o->setServicePlanType($n->getEnumValue(CloudPcServicePlanType::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(CloudPcStatus::class)); },
            'statusDetails' => function (self $o, ParseNode $n) { $o->setStatusDetails($n->getObjectValue(CloudPcStatusDetails::class)); },
            'userAccountType' => function (self $o, ParseNode $n) { $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the gracePeriodEndDateTime property value. The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getGracePeriodEndDateTime(): ?DateTime {
        return $this->gracePeriodEndDateTime;
    }

    /**
     * Gets the imageDisplayName property value. Name of the OS image that's on the Cloud PC.
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        return $this->imageDisplayName;
    }

    /**
     * Gets the lastLoginResult property value. The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
     * @return CloudPcLoginResult|null
    */
    public function getLastLoginResult(): ?CloudPcLoginResult {
        return $this->lastLoginResult;
    }

    /**
     * Gets the lastModifiedDateTime property value. The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastRemoteActionResult property value. The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
     * @return CloudPcRemoteActionResult|null
    */
    public function getLastRemoteActionResult(): ?CloudPcRemoteActionResult {
        return $this->lastRemoteActionResult;
    }

    /**
     * Gets the managedDeviceId property value. The Intune device ID of the Cloud PC.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managedDeviceName property value. The Intune device name of the Cloud PC.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the onPremisesConnectionName property value. The on-premises connection that is applied during the provisioning of Cloud PCs.
     * @return string|null
    */
    public function getOnPremisesConnectionName(): ?string {
        return $this->onPremisesConnectionName;
    }

    /**
     * Gets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        return $this->osVersion;
    }

    /**
     * Gets the provisioningPolicyId property value. The provisioning policy ID of the Cloud PC.
     * @return string|null
    */
    public function getProvisioningPolicyId(): ?string {
        return $this->provisioningPolicyId;
    }

    /**
     * Gets the provisioningPolicyName property value. The provisioning policy that is applied during the provisioning of Cloud PCs.
     * @return string|null
    */
    public function getProvisioningPolicyName(): ?string {
        return $this->provisioningPolicyName;
    }

    /**
     * Gets the servicePlanId property value. The service plan ID of the Cloud PC.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        return $this->servicePlanId;
    }

    /**
     * Gets the servicePlanName property value. The service plan name of the Cloud PC.
     * @return string|null
    */
    public function getServicePlanName(): ?string {
        return $this->servicePlanName;
    }

    /**
     * Gets the servicePlanType property value. The service plan type of the Cloud PC.
     * @return CloudPcServicePlanType|null
    */
    public function getServicePlanType(): ?CloudPcServicePlanType {
        return $this->servicePlanType;
    }

    /**
     * Gets the status property value. The status of the Cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed, restoring.
     * @return CloudPcStatus|null
    */
    public function getStatus(): ?CloudPcStatus {
        return $this->status;
    }

    /**
     * Gets the statusDetails property value. The details of the Cloud PC status.
     * @return CloudPcStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcStatusDetails {
        return $this->statusDetails;
    }

    /**
     * Gets the userAccountType property value. The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        return $this->userAccountType;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the Cloud PC.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aadDeviceId', $this->aadDeviceId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('gracePeriodEndDateTime', $this->gracePeriodEndDateTime);
        $writer->writeStringValue('imageDisplayName', $this->imageDisplayName);
        $writer->writeObjectValue('lastLoginResult', $this->lastLoginResult);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('lastRemoteActionResult', $this->lastRemoteActionResult);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeStringValue('onPremisesConnectionName', $this->onPremisesConnectionName);
        $writer->writeEnumValue('osVersion', $this->osVersion);
        $writer->writeStringValue('provisioningPolicyId', $this->provisioningPolicyId);
        $writer->writeStringValue('provisioningPolicyName', $this->provisioningPolicyName);
        $writer->writeStringValue('servicePlanId', $this->servicePlanId);
        $writer->writeStringValue('servicePlanName', $this->servicePlanName);
        $writer->writeEnumValue('servicePlanType', $this->servicePlanType);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeObjectValue('statusDetails', $this->statusDetails);
        $writer->writeEnumValue('userAccountType', $this->userAccountType);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the aadDeviceId property value. The Azure Active Directory (Azure AD) device ID of the Cloud PC.
     *  @param string|null $value Value to set for the aadDeviceId property.
    */
    public function setAadDeviceId(?string $value ): void {
        $this->aadDeviceId = $value;
    }

    /**
     * Sets the displayName property value. The display name of the Cloud PC.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the gracePeriodEndDateTime property value. The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the gracePeriodEndDateTime property.
    */
    public function setGracePeriodEndDateTime(?DateTime $value ): void {
        $this->gracePeriodEndDateTime = $value;
    }

    /**
     * Sets the imageDisplayName property value. Name of the OS image that's on the Cloud PC.
     *  @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value ): void {
        $this->imageDisplayName = $value;
    }

    /**
     * Sets the lastLoginResult property value. The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
     *  @param CloudPcLoginResult|null $value Value to set for the lastLoginResult property.
    */
    public function setLastLoginResult(?CloudPcLoginResult $value ): void {
        $this->lastLoginResult = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastRemoteActionResult property value. The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
     *  @param CloudPcRemoteActionResult|null $value Value to set for the lastRemoteActionResult property.
    */
    public function setLastRemoteActionResult(?CloudPcRemoteActionResult $value ): void {
        $this->lastRemoteActionResult = $value;
    }

    /**
     * Sets the managedDeviceId property value. The Intune device ID of the Cloud PC.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managedDeviceName property value. The Intune device name of the Cloud PC.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the onPremisesConnectionName property value. The on-premises connection that is applied during the provisioning of Cloud PCs.
     *  @param string|null $value Value to set for the onPremisesConnectionName property.
    */
    public function setOnPremisesConnectionName(?string $value ): void {
        $this->onPremisesConnectionName = $value;
    }

    /**
     * Sets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
     *  @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the provisioningPolicyId property value. The provisioning policy ID of the Cloud PC.
     *  @param string|null $value Value to set for the provisioningPolicyId property.
    */
    public function setProvisioningPolicyId(?string $value ): void {
        $this->provisioningPolicyId = $value;
    }

    /**
     * Sets the provisioningPolicyName property value. The provisioning policy that is applied during the provisioning of Cloud PCs.
     *  @param string|null $value Value to set for the provisioningPolicyName property.
    */
    public function setProvisioningPolicyName(?string $value ): void {
        $this->provisioningPolicyName = $value;
    }

    /**
     * Sets the servicePlanId property value. The service plan ID of the Cloud PC.
     *  @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value ): void {
        $this->servicePlanId = $value;
    }

    /**
     * Sets the servicePlanName property value. The service plan name of the Cloud PC.
     *  @param string|null $value Value to set for the servicePlanName property.
    */
    public function setServicePlanName(?string $value ): void {
        $this->servicePlanName = $value;
    }

    /**
     * Sets the servicePlanType property value. The service plan type of the Cloud PC.
     *  @param CloudPcServicePlanType|null $value Value to set for the servicePlanType property.
    */
    public function setServicePlanType(?CloudPcServicePlanType $value ): void {
        $this->servicePlanType = $value;
    }

    /**
     * Sets the status property value. The status of the Cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed, restoring.
     *  @param CloudPcStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDetails property value. The details of the Cloud PC status.
     *  @param CloudPcStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcStatusDetails $value ): void {
        $this->statusDetails = $value;
    }

    /**
     * Sets the userAccountType property value. The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
     *  @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value ): void {
        $this->userAccountType = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the Cloud PC.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
