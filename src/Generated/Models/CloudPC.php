<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPC extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPC {
        return new CloudPC();
    }

    /**
     * Gets the aadDeviceId property value. The Azure Active Directory (Azure AD) device ID of the Cloud PC.
     * @return string|null
    */
    public function getAadDeviceId(): ?string {
        return $this->getBackingStore()->get('aadDeviceId');
    }

    /**
     * Gets the connectivityResult property value. The connectivity health check result of a Cloud PC, including the updated timestamp and whether the Cloud PC is able to be connected or not.
     * @return CloudPcConnectivityResult|null
    */
    public function getConnectivityResult(): ?CloudPcConnectivityResult {
        return $this->getBackingStore()->get('connectivityResult');
    }

    /**
     * Gets the diskEncryptionState property value. The diskEncryptionState property
     * @return CloudPcDiskEncryptionState|null
    */
    public function getDiskEncryptionState(): ?CloudPcDiskEncryptionState {
        return $this->getBackingStore()->get('diskEncryptionState');
    }

    /**
     * Gets the displayName property value. The display name of the Cloud PC.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aadDeviceId' => fn(ParseNode $n) => $o->setAadDeviceId($n->getStringValue()),
            'connectivityResult' => fn(ParseNode $n) => $o->setConnectivityResult($n->getObjectValue([CloudPcConnectivityResult::class, 'createFromDiscriminatorValue'])),
            'diskEncryptionState' => fn(ParseNode $n) => $o->setDiskEncryptionState($n->getEnumValue(CloudPcDiskEncryptionState::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'gracePeriodEndDateTime' => fn(ParseNode $n) => $o->setGracePeriodEndDateTime($n->getDateTimeValue()),
            'imageDisplayName' => fn(ParseNode $n) => $o->setImageDisplayName($n->getStringValue()),
            'lastLoginResult' => fn(ParseNode $n) => $o->setLastLoginResult($n->getObjectValue([CloudPcLoginResult::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastRemoteActionResult' => fn(ParseNode $n) => $o->setLastRemoteActionResult($n->getObjectValue([CloudPcRemoteActionResult::class, 'createFromDiscriminatorValue'])),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'onPremisesConnectionName' => fn(ParseNode $n) => $o->setOnPremisesConnectionName($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)),
            'partnerAgentInstallResults' => fn(ParseNode $n) => $o->setPartnerAgentInstallResults($n->getCollectionOfObjectValues([CloudPcPartnerAgentInstallResult::class, 'createFromDiscriminatorValue'])),
            'provisioningPolicyId' => fn(ParseNode $n) => $o->setProvisioningPolicyId($n->getStringValue()),
            'provisioningPolicyName' => fn(ParseNode $n) => $o->setProvisioningPolicyName($n->getStringValue()),
            'provisioningType' => fn(ParseNode $n) => $o->setProvisioningType($n->getEnumValue(CloudPcProvisioningType::class)),
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getStringValue()),
            'servicePlanName' => fn(ParseNode $n) => $o->setServicePlanName($n->getStringValue()),
            'servicePlanType' => fn(ParseNode $n) => $o->setServicePlanType($n->getEnumValue(CloudPcServicePlanType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcStatus::class)),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getObjectValue([CloudPcStatusDetails::class, 'createFromDiscriminatorValue'])),
            'userAccountType' => fn(ParseNode $n) => $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the gracePeriodEndDateTime property value. The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getGracePeriodEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('gracePeriodEndDateTime');
    }

    /**
     * Gets the imageDisplayName property value. Name of the OS image that's on the Cloud PC.
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        return $this->getBackingStore()->get('imageDisplayName');
    }

    /**
     * Gets the lastLoginResult property value. The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
     * @return CloudPcLoginResult|null
    */
    public function getLastLoginResult(): ?CloudPcLoginResult {
        return $this->getBackingStore()->get('lastLoginResult');
    }

    /**
     * Gets the lastModifiedDateTime property value. The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lastRemoteActionResult property value. The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
     * @return CloudPcRemoteActionResult|null
    */
    public function getLastRemoteActionResult(): ?CloudPcRemoteActionResult {
        return $this->getBackingStore()->get('lastRemoteActionResult');
    }

    /**
     * Gets the managedDeviceId property value. The Intune device ID of the Cloud PC.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the managedDeviceName property value. The Intune device name of the Cloud PC.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the onPremisesConnectionName property value. The Azure network connection that is applied during the provisioning of Cloud PCs.
     * @return string|null
    */
    public function getOnPremisesConnectionName(): ?string {
        return $this->getBackingStore()->get('onPremisesConnectionName');
    }

    /**
     * Gets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the partnerAgentInstallResults property value. The results of every partner agent's installation status on Cloud PC.
     * @return array<CloudPcPartnerAgentInstallResult>|null
    */
    public function getPartnerAgentInstallResults(): ?array {
        return $this->getBackingStore()->get('partnerAgentInstallResults');
    }

    /**
     * Gets the provisioningPolicyId property value. The provisioning policy ID of the Cloud PC.
     * @return string|null
    */
    public function getProvisioningPolicyId(): ?string {
        return $this->getBackingStore()->get('provisioningPolicyId');
    }

    /**
     * Gets the provisioningPolicyName property value. The provisioning policy that is applied during the provisioning of Cloud PCs.
     * @return string|null
    */
    public function getProvisioningPolicyName(): ?string {
        return $this->getBackingStore()->get('provisioningPolicyName');
    }

    /**
     * Gets the provisioningType property value. The provisioningType property
     * @return CloudPcProvisioningType|null
    */
    public function getProvisioningType(): ?CloudPcProvisioningType {
        return $this->getBackingStore()->get('provisioningType');
    }

    /**
     * Gets the servicePlanId property value. The service plan ID of the Cloud PC.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        return $this->getBackingStore()->get('servicePlanId');
    }

    /**
     * Gets the servicePlanName property value. The service plan name of the Cloud PC.
     * @return string|null
    */
    public function getServicePlanName(): ?string {
        return $this->getBackingStore()->get('servicePlanName');
    }

    /**
     * Gets the servicePlanType property value. The service plan type of the Cloud PC.
     * @return CloudPcServicePlanType|null
    */
    public function getServicePlanType(): ?CloudPcServicePlanType {
        return $this->getBackingStore()->get('servicePlanType');
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcStatus|null
    */
    public function getStatus(): ?CloudPcStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the statusDetails property value. The details of the Cloud PC status.
     * @return CloudPcStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcStatusDetails {
        return $this->getBackingStore()->get('statusDetails');
    }

    /**
     * Gets the userAccountType property value. The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        return $this->getBackingStore()->get('userAccountType');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the Cloud PC.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aadDeviceId', $this->getAadDeviceId());
        $writer->writeObjectValue('connectivityResult', $this->getConnectivityResult());
        $writer->writeEnumValue('diskEncryptionState', $this->getDiskEncryptionState());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('gracePeriodEndDateTime', $this->getGracePeriodEndDateTime());
        $writer->writeStringValue('imageDisplayName', $this->getImageDisplayName());
        $writer->writeObjectValue('lastLoginResult', $this->getLastLoginResult());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('lastRemoteActionResult', $this->getLastRemoteActionResult());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeStringValue('onPremisesConnectionName', $this->getOnPremisesConnectionName());
        $writer->writeEnumValue('osVersion', $this->getOsVersion());
        $writer->writeCollectionOfObjectValues('partnerAgentInstallResults', $this->getPartnerAgentInstallResults());
        $writer->writeStringValue('provisioningPolicyId', $this->getProvisioningPolicyId());
        $writer->writeStringValue('provisioningPolicyName', $this->getProvisioningPolicyName());
        $writer->writeEnumValue('provisioningType', $this->getProvisioningType());
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
        $writer->writeStringValue('servicePlanName', $this->getServicePlanName());
        $writer->writeEnumValue('servicePlanType', $this->getServicePlanType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('statusDetails', $this->getStatusDetails());
        $writer->writeEnumValue('userAccountType', $this->getUserAccountType());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the aadDeviceId property value. The Azure Active Directory (Azure AD) device ID of the Cloud PC.
     *  @param string|null $value Value to set for the aadDeviceId property.
    */
    public function setAadDeviceId(?string $value): void {
        $this->getBackingStore()->set('aadDeviceId', $value);
    }

    /**
     * Sets the connectivityResult property value. The connectivity health check result of a Cloud PC, including the updated timestamp and whether the Cloud PC is able to be connected or not.
     *  @param CloudPcConnectivityResult|null $value Value to set for the connectivityResult property.
    */
    public function setConnectivityResult(?CloudPcConnectivityResult $value): void {
        $this->getBackingStore()->set('connectivityResult', $value);
    }

    /**
     * Sets the diskEncryptionState property value. The diskEncryptionState property
     *  @param CloudPcDiskEncryptionState|null $value Value to set for the diskEncryptionState property.
    */
    public function setDiskEncryptionState(?CloudPcDiskEncryptionState $value): void {
        $this->getBackingStore()->set('diskEncryptionState', $value);
    }

    /**
     * Sets the displayName property value. The display name of the Cloud PC.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the gracePeriodEndDateTime property value. The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the gracePeriodEndDateTime property.
    */
    public function setGracePeriodEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('gracePeriodEndDateTime', $value);
    }

    /**
     * Sets the imageDisplayName property value. Name of the OS image that's on the Cloud PC.
     *  @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value): void {
        $this->getBackingStore()->set('imageDisplayName', $value);
    }

    /**
     * Sets the lastLoginResult property value. The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
     *  @param CloudPcLoginResult|null $value Value to set for the lastLoginResult property.
    */
    public function setLastLoginResult(?CloudPcLoginResult $value): void {
        $this->getBackingStore()->set('lastLoginResult', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastRemoteActionResult property value. The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
     *  @param CloudPcRemoteActionResult|null $value Value to set for the lastRemoteActionResult property.
    */
    public function setLastRemoteActionResult(?CloudPcRemoteActionResult $value): void {
        $this->getBackingStore()->set('lastRemoteActionResult', $value);
    }

    /**
     * Sets the managedDeviceId property value. The Intune device ID of the Cloud PC.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managedDeviceName property value. The Intune device name of the Cloud PC.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the onPremisesConnectionName property value. The Azure network connection that is applied during the provisioning of Cloud PCs.
     *  @param string|null $value Value to set for the onPremisesConnectionName property.
    */
    public function setOnPremisesConnectionName(?string $value): void {
        $this->getBackingStore()->set('onPremisesConnectionName', $value);
    }

    /**
     * Sets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
     *  @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the partnerAgentInstallResults property value. The results of every partner agent's installation status on Cloud PC.
     *  @param array<CloudPcPartnerAgentInstallResult>|null $value Value to set for the partnerAgentInstallResults property.
    */
    public function setPartnerAgentInstallResults(?array $value): void {
        $this->getBackingStore()->set('partnerAgentInstallResults', $value);
    }

    /**
     * Sets the provisioningPolicyId property value. The provisioning policy ID of the Cloud PC.
     *  @param string|null $value Value to set for the provisioningPolicyId property.
    */
    public function setProvisioningPolicyId(?string $value): void {
        $this->getBackingStore()->set('provisioningPolicyId', $value);
    }

    /**
     * Sets the provisioningPolicyName property value. The provisioning policy that is applied during the provisioning of Cloud PCs.
     *  @param string|null $value Value to set for the provisioningPolicyName property.
    */
    public function setProvisioningPolicyName(?string $value): void {
        $this->getBackingStore()->set('provisioningPolicyName', $value);
    }

    /**
     * Sets the provisioningType property value. The provisioningType property
     *  @param CloudPcProvisioningType|null $value Value to set for the provisioningType property.
    */
    public function setProvisioningType(?CloudPcProvisioningType $value): void {
        $this->getBackingStore()->set('provisioningType', $value);
    }

    /**
     * Sets the servicePlanId property value. The service plan ID of the Cloud PC.
     *  @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

    /**
     * Sets the servicePlanName property value. The service plan name of the Cloud PC.
     *  @param string|null $value Value to set for the servicePlanName property.
    */
    public function setServicePlanName(?string $value): void {
        $this->getBackingStore()->set('servicePlanName', $value);
    }

    /**
     * Sets the servicePlanType property value. The service plan type of the Cloud PC.
     *  @param CloudPcServicePlanType|null $value Value to set for the servicePlanType property.
    */
    public function setServicePlanType(?CloudPcServicePlanType $value): void {
        $this->getBackingStore()->set('servicePlanType', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetails property value. The details of the Cloud PC status.
     *  @param CloudPcStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcStatusDetails $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

    /**
     * Sets the userAccountType property value. The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
     *  @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value): void {
        $this->getBackingStore()->set('userAccountType', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the Cloud PC.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
