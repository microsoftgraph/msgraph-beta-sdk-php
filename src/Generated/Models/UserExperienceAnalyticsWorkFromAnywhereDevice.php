<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereDevice extends Entity implements Parsable 
{
    /**
     * @var bool|null $autoPilotProfileAssigned The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
    */
    private ?bool $autoPilotProfileAssigned = null;
    
    /**
     * @var bool|null $autoPilotRegistered The user experience work from anywhere intune device's autopilotRegistered.
    */
    private ?bool $autoPilotRegistered = null;
    
    /**
     * @var string|null $azureAdDeviceId The user experience work from anywhere azure Ad device Id.
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * @var string|null $azureAdJoinType The user experience work from anywhere device's azure Ad joinType.
    */
    private ?string $azureAdJoinType = null;
    
    /**
     * @var bool|null $azureAdRegistered The user experience work from anywhere device's azureAdRegistered.
    */
    private ?bool $azureAdRegistered = null;
    
    /**
     * @var float|null $cloudIdentityScore The user experience work from anywhere per device cloud identity score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudIdentityScore = null;
    
    /**
     * @var float|null $cloudManagementScore The user experience work from anywhere per device cloud management score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudManagementScore = null;
    
    /**
     * @var float|null $cloudProvisioningScore The user experience work from anywhere per device cloud provisioning score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudProvisioningScore = null;
    
    /**
     * @var bool|null $compliancePolicySetToIntune The user experience work from anywhere device's compliancePolicySetToIntune.
    */
    private ?bool $compliancePolicySetToIntune = null;
    
    /**
     * @var string|null $deviceId The user experience work from anywhere device Id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName The work from anywhere device's name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The user experience work from anywhere per device health status. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var bool|null $isCloudManagedGatewayEnabled The user experience work from anywhere device's Cloud Management Gateway for Configuration Manager is enabled.
    */
    private ?bool $isCloudManagedGatewayEnabled = null;
    
    /**
     * @var string|null $managedBy The user experience work from anywhere management agent of the device.
    */
    private ?string $managedBy = null;
    
    /**
     * @var string|null $manufacturer The user experience work from anywhere device's manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience work from anywhere device's model.
    */
    private ?string $model = null;
    
    /**
     * @var bool|null $osCheckFailed The user experience work from anywhere device, Is OS check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $osCheckFailed = null;
    
    /**
     * @var string|null $osDescription The user experience work from anywhere device's OS Description.
    */
    private ?string $osDescription = null;
    
    /**
     * @var string|null $osVersion The user experience work from anywhere device's OS Version.
    */
    private ?string $osVersion = null;
    
    /**
     * @var bool|null $otherWorkloadsSetToIntune The user experience work from anywhere device's otherWorkloadsSetToIntune.
    */
    private ?bool $otherWorkloadsSetToIntune = null;
    
    /**
     * @var string|null $ownership The user experience work from anywhere device's ownership.
    */
    private ?string $ownership = null;
    
    /**
     * @var bool|null $processor64BitCheckFailed The user experience work from anywhere device, Is processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $processor64BitCheckFailed = null;
    
    /**
     * @var bool|null $processorCoreCountCheckFailed The user experience work from anywhere device, Is processor hardware core count check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $processorCoreCountCheckFailed = null;
    
    /**
     * @var bool|null $processorFamilyCheckFailed The user experience work from anywhere device, Is processor hardware family check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $processorFamilyCheckFailed = null;
    
    /**
     * @var bool|null $processorSpeedCheckFailed The user experience work from anywhere device, Is processor hardware speed check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $processorSpeedCheckFailed = null;
    
    /**
     * @var bool|null $ramCheckFailed Is the user experience analytics work from anywhere device RAM hardware check failed for device to upgrade to the latest version of windows
    */
    private ?bool $ramCheckFailed = null;
    
    /**
     * @var bool|null $secureBootCheckFailed The user experience work from anywhere device, Is secure boot hardware check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $secureBootCheckFailed = null;
    
    /**
     * @var string|null $serialNumber The user experience work from anywhere device's serial number.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var bool|null $storageCheckFailed The user experience work from anywhere device, Is storage hardware check failed for device to upgrade to the latest version of windows.
    */
    private ?bool $storageCheckFailed = null;
    
    /**
     * @var bool|null $tenantAttached The user experience work from anywhere device's tenantAttached.
    */
    private ?bool $tenantAttached = null;
    
    /**
     * @var bool|null $tpmCheckFailed The user experience work from anywhere device, Is Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows.
    */
    private ?bool $tpmCheckFailed = null;
    
    /**
     * @var OperatingSystemUpgradeEligibility|null $upgradeEligibility The user experience work from anywhere windows upgrade eligibility status of device. Possible values are: upgraded, unknown, notCapable, capable.
    */
    private ?OperatingSystemUpgradeEligibility $upgradeEligibility = null;
    
    /**
     * @var float|null $windowsScore The user experience work from anywhere per device windows score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $windowsScore = null;
    
    /**
     * @var float|null $workFromAnywhereScore The user experience work from anywhere per device overall score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $workFromAnywhereScore = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereDevice {
        return new UserExperienceAnalyticsWorkFromAnywhereDevice();
    }

    /**
     * Gets the autoPilotProfileAssigned property value. The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
     * @return bool|null
    */
    public function getAutoPilotProfileAssigned(): ?bool {
        return $this->autoPilotProfileAssigned;
    }

    /**
     * Gets the autoPilotRegistered property value. The user experience work from anywhere intune device's autopilotRegistered.
     * @return bool|null
    */
    public function getAutoPilotRegistered(): ?bool {
        return $this->autoPilotRegistered;
    }

    /**
     * Gets the azureAdDeviceId property value. The user experience work from anywhere azure Ad device Id.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->azureAdDeviceId;
    }

    /**
     * Gets the azureAdJoinType property value. The user experience work from anywhere device's azure Ad joinType.
     * @return string|null
    */
    public function getAzureAdJoinType(): ?string {
        return $this->azureAdJoinType;
    }

    /**
     * Gets the azureAdRegistered property value. The user experience work from anywhere device's azureAdRegistered.
     * @return bool|null
    */
    public function getAzureAdRegistered(): ?bool {
        return $this->azureAdRegistered;
    }

    /**
     * Gets the cloudIdentityScore property value. The user experience work from anywhere per device cloud identity score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudIdentityScore(): ?float {
        return $this->cloudIdentityScore;
    }

    /**
     * Gets the cloudManagementScore property value. The user experience work from anywhere per device cloud management score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudManagementScore(): ?float {
        return $this->cloudManagementScore;
    }

    /**
     * Gets the cloudProvisioningScore property value. The user experience work from anywhere per device cloud provisioning score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudProvisioningScore(): ?float {
        return $this->cloudProvisioningScore;
    }

    /**
     * Gets the compliancePolicySetToIntune property value. The user experience work from anywhere device's compliancePolicySetToIntune.
     * @return bool|null
    */
    public function getCompliancePolicySetToIntune(): ?bool {
        return $this->compliancePolicySetToIntune;
    }

    /**
     * Gets the deviceId property value. The user experience work from anywhere device Id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The work from anywhere device's name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoPilotProfileAssigned' => function (ParseNode $n) use ($o) { $o->setAutoPilotProfileAssigned($n->getBooleanValue()); },
            'autoPilotRegistered' => function (ParseNode $n) use ($o) { $o->setAutoPilotRegistered($n->getBooleanValue()); },
            'azureAdDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureAdDeviceId($n->getStringValue()); },
            'azureAdJoinType' => function (ParseNode $n) use ($o) { $o->setAzureAdJoinType($n->getStringValue()); },
            'azureAdRegistered' => function (ParseNode $n) use ($o) { $o->setAzureAdRegistered($n->getBooleanValue()); },
            'cloudIdentityScore' => function (ParseNode $n) use ($o) { $o->setCloudIdentityScore($n->getFloatValue()); },
            'cloudManagementScore' => function (ParseNode $n) use ($o) { $o->setCloudManagementScore($n->getFloatValue()); },
            'cloudProvisioningScore' => function (ParseNode $n) use ($o) { $o->setCloudProvisioningScore($n->getFloatValue()); },
            'compliancePolicySetToIntune' => function (ParseNode $n) use ($o) { $o->setCompliancePolicySetToIntune($n->getBooleanValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'isCloudManagedGatewayEnabled' => function (ParseNode $n) use ($o) { $o->setIsCloudManagedGatewayEnabled($n->getBooleanValue()); },
            'managedBy' => function (ParseNode $n) use ($o) { $o->setManagedBy($n->getStringValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'osCheckFailed' => function (ParseNode $n) use ($o) { $o->setOsCheckFailed($n->getBooleanValue()); },
            'osDescription' => function (ParseNode $n) use ($o) { $o->setOsDescription($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'otherWorkloadsSetToIntune' => function (ParseNode $n) use ($o) { $o->setOtherWorkloadsSetToIntune($n->getBooleanValue()); },
            'ownership' => function (ParseNode $n) use ($o) { $o->setOwnership($n->getStringValue()); },
            'processor64BitCheckFailed' => function (ParseNode $n) use ($o) { $o->setProcessor64BitCheckFailed($n->getBooleanValue()); },
            'processorCoreCountCheckFailed' => function (ParseNode $n) use ($o) { $o->setProcessorCoreCountCheckFailed($n->getBooleanValue()); },
            'processorFamilyCheckFailed' => function (ParseNode $n) use ($o) { $o->setProcessorFamilyCheckFailed($n->getBooleanValue()); },
            'processorSpeedCheckFailed' => function (ParseNode $n) use ($o) { $o->setProcessorSpeedCheckFailed($n->getBooleanValue()); },
            'ramCheckFailed' => function (ParseNode $n) use ($o) { $o->setRamCheckFailed($n->getBooleanValue()); },
            'secureBootCheckFailed' => function (ParseNode $n) use ($o) { $o->setSecureBootCheckFailed($n->getBooleanValue()); },
            'serialNumber' => function (ParseNode $n) use ($o) { $o->setSerialNumber($n->getStringValue()); },
            'storageCheckFailed' => function (ParseNode $n) use ($o) { $o->setStorageCheckFailed($n->getBooleanValue()); },
            'tenantAttached' => function (ParseNode $n) use ($o) { $o->setTenantAttached($n->getBooleanValue()); },
            'tpmCheckFailed' => function (ParseNode $n) use ($o) { $o->setTpmCheckFailed($n->getBooleanValue()); },
            'upgradeEligibility' => function (ParseNode $n) use ($o) { $o->setUpgradeEligibility($n->getEnumValue(OperatingSystemUpgradeEligibility::class)); },
            'windowsScore' => function (ParseNode $n) use ($o) { $o->setWindowsScore($n->getFloatValue()); },
            'workFromAnywhereScore' => function (ParseNode $n) use ($o) { $o->setWorkFromAnywhereScore($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the healthStatus property value. The user experience work from anywhere per device health status. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->healthStatus;
    }

    /**
     * Gets the isCloudManagedGatewayEnabled property value. The user experience work from anywhere device's Cloud Management Gateway for Configuration Manager is enabled.
     * @return bool|null
    */
    public function getIsCloudManagedGatewayEnabled(): ?bool {
        return $this->isCloudManagedGatewayEnabled;
    }

    /**
     * Gets the managedBy property value. The user experience work from anywhere management agent of the device.
     * @return string|null
    */
    public function getManagedBy(): ?string {
        return $this->managedBy;
    }

    /**
     * Gets the manufacturer property value. The user experience work from anywhere device's manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The user experience work from anywhere device's model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the osCheckFailed property value. The user experience work from anywhere device, Is OS check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getOsCheckFailed(): ?bool {
        return $this->osCheckFailed;
    }

    /**
     * Gets the osDescription property value. The user experience work from anywhere device's OS Description.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->osDescription;
    }

    /**
     * Gets the osVersion property value. The user experience work from anywhere device's OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the otherWorkloadsSetToIntune property value. The user experience work from anywhere device's otherWorkloadsSetToIntune.
     * @return bool|null
    */
    public function getOtherWorkloadsSetToIntune(): ?bool {
        return $this->otherWorkloadsSetToIntune;
    }

    /**
     * Gets the ownership property value. The user experience work from anywhere device's ownership.
     * @return string|null
    */
    public function getOwnership(): ?string {
        return $this->ownership;
    }

    /**
     * Gets the processor64BitCheckFailed property value. The user experience work from anywhere device, Is processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getProcessor64BitCheckFailed(): ?bool {
        return $this->processor64BitCheckFailed;
    }

    /**
     * Gets the processorCoreCountCheckFailed property value. The user experience work from anywhere device, Is processor hardware core count check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getProcessorCoreCountCheckFailed(): ?bool {
        return $this->processorCoreCountCheckFailed;
    }

    /**
     * Gets the processorFamilyCheckFailed property value. The user experience work from anywhere device, Is processor hardware family check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getProcessorFamilyCheckFailed(): ?bool {
        return $this->processorFamilyCheckFailed;
    }

    /**
     * Gets the processorSpeedCheckFailed property value. The user experience work from anywhere device, Is processor hardware speed check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getProcessorSpeedCheckFailed(): ?bool {
        return $this->processorSpeedCheckFailed;
    }

    /**
     * Gets the ramCheckFailed property value. Is the user experience analytics work from anywhere device RAM hardware check failed for device to upgrade to the latest version of windows
     * @return bool|null
    */
    public function getRamCheckFailed(): ?bool {
        return $this->ramCheckFailed;
    }

    /**
     * Gets the secureBootCheckFailed property value. The user experience work from anywhere device, Is secure boot hardware check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getSecureBootCheckFailed(): ?bool {
        return $this->secureBootCheckFailed;
    }

    /**
     * Gets the serialNumber property value. The user experience work from anywhere device's serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the storageCheckFailed property value. The user experience work from anywhere device, Is storage hardware check failed for device to upgrade to the latest version of windows.
     * @return bool|null
    */
    public function getStorageCheckFailed(): ?bool {
        return $this->storageCheckFailed;
    }

    /**
     * Gets the tenantAttached property value. The user experience work from anywhere device's tenantAttached.
     * @return bool|null
    */
    public function getTenantAttached(): ?bool {
        return $this->tenantAttached;
    }

    /**
     * Gets the tpmCheckFailed property value. The user experience work from anywhere device, Is Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows.
     * @return bool|null
    */
    public function getTpmCheckFailed(): ?bool {
        return $this->tpmCheckFailed;
    }

    /**
     * Gets the upgradeEligibility property value. The user experience work from anywhere windows upgrade eligibility status of device. Possible values are: upgraded, unknown, notCapable, capable.
     * @return OperatingSystemUpgradeEligibility|null
    */
    public function getUpgradeEligibility(): ?OperatingSystemUpgradeEligibility {
        return $this->upgradeEligibility;
    }

    /**
     * Gets the windowsScore property value. The user experience work from anywhere per device windows score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWindowsScore(): ?float {
        return $this->windowsScore;
    }

    /**
     * Gets the workFromAnywhereScore property value. The user experience work from anywhere per device overall score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        return $this->workFromAnywhereScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoPilotProfileAssigned', $this->autoPilotProfileAssigned);
        $writer->writeBooleanValue('autoPilotRegistered', $this->autoPilotRegistered);
        $writer->writeStringValue('azureAdDeviceId', $this->azureAdDeviceId);
        $writer->writeStringValue('azureAdJoinType', $this->azureAdJoinType);
        $writer->writeBooleanValue('azureAdRegistered', $this->azureAdRegistered);
        $writer->writeFloatValue('cloudIdentityScore', $this->cloudIdentityScore);
        $writer->writeFloatValue('cloudManagementScore', $this->cloudManagementScore);
        $writer->writeFloatValue('cloudProvisioningScore', $this->cloudProvisioningScore);
        $writer->writeBooleanValue('compliancePolicySetToIntune', $this->compliancePolicySetToIntune);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeBooleanValue('isCloudManagedGatewayEnabled', $this->isCloudManagedGatewayEnabled);
        $writer->writeStringValue('managedBy', $this->managedBy);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeBooleanValue('osCheckFailed', $this->osCheckFailed);
        $writer->writeStringValue('osDescription', $this->osDescription);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeBooleanValue('otherWorkloadsSetToIntune', $this->otherWorkloadsSetToIntune);
        $writer->writeStringValue('ownership', $this->ownership);
        $writer->writeBooleanValue('processor64BitCheckFailed', $this->processor64BitCheckFailed);
        $writer->writeBooleanValue('processorCoreCountCheckFailed', $this->processorCoreCountCheckFailed);
        $writer->writeBooleanValue('processorFamilyCheckFailed', $this->processorFamilyCheckFailed);
        $writer->writeBooleanValue('processorSpeedCheckFailed', $this->processorSpeedCheckFailed);
        $writer->writeBooleanValue('ramCheckFailed', $this->ramCheckFailed);
        $writer->writeBooleanValue('secureBootCheckFailed', $this->secureBootCheckFailed);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeBooleanValue('storageCheckFailed', $this->storageCheckFailed);
        $writer->writeBooleanValue('tenantAttached', $this->tenantAttached);
        $writer->writeBooleanValue('tpmCheckFailed', $this->tpmCheckFailed);
        $writer->writeEnumValue('upgradeEligibility', $this->upgradeEligibility);
        $writer->writeFloatValue('windowsScore', $this->windowsScore);
        $writer->writeFloatValue('workFromAnywhereScore', $this->workFromAnywhereScore);
    }

    /**
     * Sets the autoPilotProfileAssigned property value. The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
     *  @param bool|null $value Value to set for the autoPilotProfileAssigned property.
    */
    public function setAutoPilotProfileAssigned(?bool $value ): void {
        $this->autoPilotProfileAssigned = $value;
    }

    /**
     * Sets the autoPilotRegistered property value. The user experience work from anywhere intune device's autopilotRegistered.
     *  @param bool|null $value Value to set for the autoPilotRegistered property.
    */
    public function setAutoPilotRegistered(?bool $value ): void {
        $this->autoPilotRegistered = $value;
    }

    /**
     * Sets the azureAdDeviceId property value. The user experience work from anywhere azure Ad device Id.
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

    /**
     * Sets the azureAdJoinType property value. The user experience work from anywhere device's azure Ad joinType.
     *  @param string|null $value Value to set for the azureAdJoinType property.
    */
    public function setAzureAdJoinType(?string $value ): void {
        $this->azureAdJoinType = $value;
    }

    /**
     * Sets the azureAdRegistered property value. The user experience work from anywhere device's azureAdRegistered.
     *  @param bool|null $value Value to set for the azureAdRegistered property.
    */
    public function setAzureAdRegistered(?bool $value ): void {
        $this->azureAdRegistered = $value;
    }

    /**
     * Sets the cloudIdentityScore property value. The user experience work from anywhere per device cloud identity score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudIdentityScore property.
    */
    public function setCloudIdentityScore(?float $value ): void {
        $this->cloudIdentityScore = $value;
    }

    /**
     * Sets the cloudManagementScore property value. The user experience work from anywhere per device cloud management score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudManagementScore property.
    */
    public function setCloudManagementScore(?float $value ): void {
        $this->cloudManagementScore = $value;
    }

    /**
     * Sets the cloudProvisioningScore property value. The user experience work from anywhere per device cloud provisioning score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudProvisioningScore property.
    */
    public function setCloudProvisioningScore(?float $value ): void {
        $this->cloudProvisioningScore = $value;
    }

    /**
     * Sets the compliancePolicySetToIntune property value. The user experience work from anywhere device's compliancePolicySetToIntune.
     *  @param bool|null $value Value to set for the compliancePolicySetToIntune property.
    */
    public function setCompliancePolicySetToIntune(?bool $value ): void {
        $this->compliancePolicySetToIntune = $value;
    }

    /**
     * Sets the deviceId property value. The user experience work from anywhere device Id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The work from anywhere device's name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the healthStatus property value. The user experience work from anywhere per device health status. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the isCloudManagedGatewayEnabled property value. The user experience work from anywhere device's Cloud Management Gateway for Configuration Manager is enabled.
     *  @param bool|null $value Value to set for the isCloudManagedGatewayEnabled property.
    */
    public function setIsCloudManagedGatewayEnabled(?bool $value ): void {
        $this->isCloudManagedGatewayEnabled = $value;
    }

    /**
     * Sets the managedBy property value. The user experience work from anywhere management agent of the device.
     *  @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value ): void {
        $this->managedBy = $value;
    }

    /**
     * Sets the manufacturer property value. The user experience work from anywhere device's manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The user experience work from anywhere device's model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the osCheckFailed property value. The user experience work from anywhere device, Is OS check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the osCheckFailed property.
    */
    public function setOsCheckFailed(?bool $value ): void {
        $this->osCheckFailed = $value;
    }

    /**
     * Sets the osDescription property value. The user experience work from anywhere device's OS Description.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value ): void {
        $this->osDescription = $value;
    }

    /**
     * Sets the osVersion property value. The user experience work from anywhere device's OS Version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the otherWorkloadsSetToIntune property value. The user experience work from anywhere device's otherWorkloadsSetToIntune.
     *  @param bool|null $value Value to set for the otherWorkloadsSetToIntune property.
    */
    public function setOtherWorkloadsSetToIntune(?bool $value ): void {
        $this->otherWorkloadsSetToIntune = $value;
    }

    /**
     * Sets the ownership property value. The user experience work from anywhere device's ownership.
     *  @param string|null $value Value to set for the ownership property.
    */
    public function setOwnership(?string $value ): void {
        $this->ownership = $value;
    }

    /**
     * Sets the processor64BitCheckFailed property value. The user experience work from anywhere device, Is processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the processor64BitCheckFailed property.
    */
    public function setProcessor64BitCheckFailed(?bool $value ): void {
        $this->processor64BitCheckFailed = $value;
    }

    /**
     * Sets the processorCoreCountCheckFailed property value. The user experience work from anywhere device, Is processor hardware core count check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the processorCoreCountCheckFailed property.
    */
    public function setProcessorCoreCountCheckFailed(?bool $value ): void {
        $this->processorCoreCountCheckFailed = $value;
    }

    /**
     * Sets the processorFamilyCheckFailed property value. The user experience work from anywhere device, Is processor hardware family check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the processorFamilyCheckFailed property.
    */
    public function setProcessorFamilyCheckFailed(?bool $value ): void {
        $this->processorFamilyCheckFailed = $value;
    }

    /**
     * Sets the processorSpeedCheckFailed property value. The user experience work from anywhere device, Is processor hardware speed check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the processorSpeedCheckFailed property.
    */
    public function setProcessorSpeedCheckFailed(?bool $value ): void {
        $this->processorSpeedCheckFailed = $value;
    }

    /**
     * Sets the ramCheckFailed property value. Is the user experience analytics work from anywhere device RAM hardware check failed for device to upgrade to the latest version of windows
     *  @param bool|null $value Value to set for the ramCheckFailed property.
    */
    public function setRamCheckFailed(?bool $value ): void {
        $this->ramCheckFailed = $value;
    }

    /**
     * Sets the secureBootCheckFailed property value. The user experience work from anywhere device, Is secure boot hardware check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the secureBootCheckFailed property.
    */
    public function setSecureBootCheckFailed(?bool $value ): void {
        $this->secureBootCheckFailed = $value;
    }

    /**
     * Sets the serialNumber property value. The user experience work from anywhere device's serial number.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the storageCheckFailed property value. The user experience work from anywhere device, Is storage hardware check failed for device to upgrade to the latest version of windows.
     *  @param bool|null $value Value to set for the storageCheckFailed property.
    */
    public function setStorageCheckFailed(?bool $value ): void {
        $this->storageCheckFailed = $value;
    }

    /**
     * Sets the tenantAttached property value. The user experience work from anywhere device's tenantAttached.
     *  @param bool|null $value Value to set for the tenantAttached property.
    */
    public function setTenantAttached(?bool $value ): void {
        $this->tenantAttached = $value;
    }

    /**
     * Sets the tpmCheckFailed property value. The user experience work from anywhere device, Is Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows.
     *  @param bool|null $value Value to set for the tpmCheckFailed property.
    */
    public function setTpmCheckFailed(?bool $value ): void {
        $this->tpmCheckFailed = $value;
    }

    /**
     * Sets the upgradeEligibility property value. The user experience work from anywhere windows upgrade eligibility status of device. Possible values are: upgraded, unknown, notCapable, capable.
     *  @param OperatingSystemUpgradeEligibility|null $value Value to set for the upgradeEligibility property.
    */
    public function setUpgradeEligibility(?OperatingSystemUpgradeEligibility $value ): void {
        $this->upgradeEligibility = $value;
    }

    /**
     * Sets the windowsScore property value. The user experience work from anywhere per device windows score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the windowsScore property.
    */
    public function setWindowsScore(?float $value ): void {
        $this->windowsScore = $value;
    }

    /**
     * Sets the workFromAnywhereScore property value. The user experience work from anywhere per device overall score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value ): void {
        $this->workFromAnywhereScore = $value;
    }

}
