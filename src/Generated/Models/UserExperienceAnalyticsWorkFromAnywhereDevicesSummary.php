<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UserExperienceAnalyticsAutopilotDevicesSummary|null $autopilotDevicesSummary The value of work from anywhere autopilot devices summary.
    */
    private ?UserExperienceAnalyticsAutopilotDevicesSummary $autopilotDevicesSummary = null;
    
    /**
     * @var UserExperienceAnalyticsCloudIdentityDevicesSummary|null $cloudIdentityDevicesSummary The user experience analytics work from anywhere Cloud Identity devices summary.
    */
    private ?UserExperienceAnalyticsCloudIdentityDevicesSummary $cloudIdentityDevicesSummary = null;
    
    /**
     * @var UserExperienceAnalyticsCloudManagementDevicesSummary|null $cloudManagementDevicesSummary The user experience work from anywhere Cloud management devices summary.
    */
    private ?UserExperienceAnalyticsCloudManagementDevicesSummary $cloudManagementDevicesSummary = null;
    
    /**
     * @var int|null $coManagedDevices Total number of co-managed devices. Valid values -2147483648 to 2147483647
    */
    private ?int $coManagedDevices = null;
    
    /**
     * @var int|null $devicesNotAutopilotRegistered The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    */
    private ?int $devicesNotAutopilotRegistered = null;
    
    /**
     * @var int|null $devicesWithoutAutopilotProfileAssigned The count of intune devices not autopilot profile assigned. Valid values -2147483648 to 2147483647
    */
    private ?int $devicesWithoutAutopilotProfileAssigned = null;
    
    /**
     * @var int|null $devicesWithoutCloudIdentity The count of devices that are not cloud identity. Valid values -2147483648 to 2147483647
    */
    private ?int $devicesWithoutCloudIdentity = null;
    
    /**
     * @var int|null $intuneDevices The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    */
    private ?int $intuneDevices = null;
    
    /**
     * @var int|null $tenantAttachDevices Total count of tenant attach devices. Valid values -2147483648 to 2147483647
    */
    private ?int $tenantAttachDevices = null;
    
    /**
     * @var int|null $totalDevices The total count of devices. Valid values -2147483648 to 2147483647
    */
    private ?int $totalDevices = null;
    
    /**
     * @var int|null $unsupportedOSversionDevices The count of Windows 10 devices that have unsupported OS versions. Valid values -2147483648 to 2147483647
    */
    private ?int $unsupportedOSversionDevices = null;
    
    /**
     * @var int|null $windows10Devices The count of windows 10 devices. Valid values -2147483648 to 2147483647
    */
    private ?int $windows10Devices = null;
    
    /**
     * @var UserExperienceAnalyticsWindows10DevicesSummary|null $windows10DevicesSummary The user experience analytics work from anywhere Windows 10 devices summary.
    */
    private ?UserExperienceAnalyticsWindows10DevicesSummary $windows10DevicesSummary = null;
    
    /**
     * @var int|null $windows10DevicesWithoutTenantAttach The count of windows 10 devices that are Intune and Comanaged. Valid values -2147483648 to 2147483647
    */
    private ?int $windows10DevicesWithoutTenantAttach = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereDevicesSummary {
        return new UserExperienceAnalyticsWorkFromAnywhereDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the autopilotDevicesSummary property value. The value of work from anywhere autopilot devices summary.
     * @return UserExperienceAnalyticsAutopilotDevicesSummary|null
    */
    public function getAutopilotDevicesSummary(): ?UserExperienceAnalyticsAutopilotDevicesSummary {
        return $this->autopilotDevicesSummary;
    }

    /**
     * Gets the cloudIdentityDevicesSummary property value. The user experience analytics work from anywhere Cloud Identity devices summary.
     * @return UserExperienceAnalyticsCloudIdentityDevicesSummary|null
    */
    public function getCloudIdentityDevicesSummary(): ?UserExperienceAnalyticsCloudIdentityDevicesSummary {
        return $this->cloudIdentityDevicesSummary;
    }

    /**
     * Gets the cloudManagementDevicesSummary property value. The user experience work from anywhere Cloud management devices summary.
     * @return UserExperienceAnalyticsCloudManagementDevicesSummary|null
    */
    public function getCloudManagementDevicesSummary(): ?UserExperienceAnalyticsCloudManagementDevicesSummary {
        return $this->cloudManagementDevicesSummary;
    }

    /**
     * Gets the coManagedDevices property value. Total number of co-managed devices. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCoManagedDevices(): ?int {
        return $this->coManagedDevices;
    }

    /**
     * Gets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesNotAutopilotRegistered(): ?int {
        return $this->devicesNotAutopilotRegistered;
    }

    /**
     * Gets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesWithoutAutopilotProfileAssigned(): ?int {
        return $this->devicesWithoutAutopilotProfileAssigned;
    }

    /**
     * Gets the devicesWithoutCloudIdentity property value. The count of devices that are not cloud identity. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesWithoutCloudIdentity(): ?int {
        return $this->devicesWithoutCloudIdentity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autopilotDevicesSummary' => function (ParseNode $n) use ($o) { $o->setAutopilotDevicesSummary($n->getObjectValue(array(UserExperienceAnalyticsAutopilotDevicesSummary::class, 'createFromDiscriminatorValue'))); },
            'cloudIdentityDevicesSummary' => function (ParseNode $n) use ($o) { $o->setCloudIdentityDevicesSummary($n->getObjectValue(array(UserExperienceAnalyticsCloudIdentityDevicesSummary::class, 'createFromDiscriminatorValue'))); },
            'cloudManagementDevicesSummary' => function (ParseNode $n) use ($o) { $o->setCloudManagementDevicesSummary($n->getObjectValue(array(UserExperienceAnalyticsCloudManagementDevicesSummary::class, 'createFromDiscriminatorValue'))); },
            'coManagedDevices' => function (ParseNode $n) use ($o) { $o->setCoManagedDevices($n->getIntegerValue()); },
            'devicesNotAutopilotRegistered' => function (ParseNode $n) use ($o) { $o->setDevicesNotAutopilotRegistered($n->getIntegerValue()); },
            'devicesWithoutAutopilotProfileAssigned' => function (ParseNode $n) use ($o) { $o->setDevicesWithoutAutopilotProfileAssigned($n->getIntegerValue()); },
            'devicesWithoutCloudIdentity' => function (ParseNode $n) use ($o) { $o->setDevicesWithoutCloudIdentity($n->getIntegerValue()); },
            'intuneDevices' => function (ParseNode $n) use ($o) { $o->setIntuneDevices($n->getIntegerValue()); },
            'tenantAttachDevices' => function (ParseNode $n) use ($o) { $o->setTenantAttachDevices($n->getIntegerValue()); },
            'totalDevices' => function (ParseNode $n) use ($o) { $o->setTotalDevices($n->getIntegerValue()); },
            'unsupportedOSversionDevices' => function (ParseNode $n) use ($o) { $o->setUnsupportedOSversionDevices($n->getIntegerValue()); },
            'windows10Devices' => function (ParseNode $n) use ($o) { $o->setWindows10Devices($n->getIntegerValue()); },
            'windows10DevicesSummary' => function (ParseNode $n) use ($o) { $o->setWindows10DevicesSummary($n->getObjectValue(array(UserExperienceAnalyticsWindows10DevicesSummary::class, 'createFromDiscriminatorValue'))); },
            'windows10DevicesWithoutTenantAttach' => function (ParseNode $n) use ($o) { $o->setWindows10DevicesWithoutTenantAttach($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the intuneDevices property value. The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getIntuneDevices(): ?int {
        return $this->intuneDevices;
    }

    /**
     * Gets the tenantAttachDevices property value. Total count of tenant attach devices. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTenantAttachDevices(): ?int {
        return $this->tenantAttachDevices;
    }

    /**
     * Gets the totalDevices property value. The total count of devices. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDevices(): ?int {
        return $this->totalDevices;
    }

    /**
     * Gets the unsupportedOSversionDevices property value. The count of Windows 10 devices that have unsupported OS versions. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getUnsupportedOSversionDevices(): ?int {
        return $this->unsupportedOSversionDevices;
    }

    /**
     * Gets the windows10Devices property value. The count of windows 10 devices. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getWindows10Devices(): ?int {
        return $this->windows10Devices;
    }

    /**
     * Gets the windows10DevicesSummary property value. The user experience analytics work from anywhere Windows 10 devices summary.
     * @return UserExperienceAnalyticsWindows10DevicesSummary|null
    */
    public function getWindows10DevicesSummary(): ?UserExperienceAnalyticsWindows10DevicesSummary {
        return $this->windows10DevicesSummary;
    }

    /**
     * Gets the windows10DevicesWithoutTenantAttach property value. The count of windows 10 devices that are Intune and Comanaged. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getWindows10DevicesWithoutTenantAttach(): ?int {
        return $this->windows10DevicesWithoutTenantAttach;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('autopilotDevicesSummary', $this->autopilotDevicesSummary);
        $writer->writeObjectValue('cloudIdentityDevicesSummary', $this->cloudIdentityDevicesSummary);
        $writer->writeObjectValue('cloudManagementDevicesSummary', $this->cloudManagementDevicesSummary);
        $writer->writeIntegerValue('coManagedDevices', $this->coManagedDevices);
        $writer->writeIntegerValue('devicesNotAutopilotRegistered', $this->devicesNotAutopilotRegistered);
        $writer->writeIntegerValue('devicesWithoutAutopilotProfileAssigned', $this->devicesWithoutAutopilotProfileAssigned);
        $writer->writeIntegerValue('devicesWithoutCloudIdentity', $this->devicesWithoutCloudIdentity);
        $writer->writeIntegerValue('intuneDevices', $this->intuneDevices);
        $writer->writeIntegerValue('tenantAttachDevices', $this->tenantAttachDevices);
        $writer->writeIntegerValue('totalDevices', $this->totalDevices);
        $writer->writeIntegerValue('unsupportedOSversionDevices', $this->unsupportedOSversionDevices);
        $writer->writeIntegerValue('windows10Devices', $this->windows10Devices);
        $writer->writeObjectValue('windows10DevicesSummary', $this->windows10DevicesSummary);
        $writer->writeIntegerValue('windows10DevicesWithoutTenantAttach', $this->windows10DevicesWithoutTenantAttach);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the autopilotDevicesSummary property value. The value of work from anywhere autopilot devices summary.
     *  @param UserExperienceAnalyticsAutopilotDevicesSummary|null $value Value to set for the autopilotDevicesSummary property.
    */
    public function setAutopilotDevicesSummary(?UserExperienceAnalyticsAutopilotDevicesSummary $value ): void {
        $this->autopilotDevicesSummary = $value;
    }

    /**
     * Sets the cloudIdentityDevicesSummary property value. The user experience analytics work from anywhere Cloud Identity devices summary.
     *  @param UserExperienceAnalyticsCloudIdentityDevicesSummary|null $value Value to set for the cloudIdentityDevicesSummary property.
    */
    public function setCloudIdentityDevicesSummary(?UserExperienceAnalyticsCloudIdentityDevicesSummary $value ): void {
        $this->cloudIdentityDevicesSummary = $value;
    }

    /**
     * Sets the cloudManagementDevicesSummary property value. The user experience work from anywhere Cloud management devices summary.
     *  @param UserExperienceAnalyticsCloudManagementDevicesSummary|null $value Value to set for the cloudManagementDevicesSummary property.
    */
    public function setCloudManagementDevicesSummary(?UserExperienceAnalyticsCloudManagementDevicesSummary $value ): void {
        $this->cloudManagementDevicesSummary = $value;
    }

    /**
     * Sets the coManagedDevices property value. Total number of co-managed devices. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the coManagedDevices property.
    */
    public function setCoManagedDevices(?int $value ): void {
        $this->coManagedDevices = $value;
    }

    /**
     * Sets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the devicesNotAutopilotRegistered property.
    */
    public function setDevicesNotAutopilotRegistered(?int $value ): void {
        $this->devicesNotAutopilotRegistered = $value;
    }

    /**
     * Sets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the devicesWithoutAutopilotProfileAssigned property.
    */
    public function setDevicesWithoutAutopilotProfileAssigned(?int $value ): void {
        $this->devicesWithoutAutopilotProfileAssigned = $value;
    }

    /**
     * Sets the devicesWithoutCloudIdentity property value. The count of devices that are not cloud identity. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the devicesWithoutCloudIdentity property.
    */
    public function setDevicesWithoutCloudIdentity(?int $value ): void {
        $this->devicesWithoutCloudIdentity = $value;
    }

    /**
     * Sets the intuneDevices property value. The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the intuneDevices property.
    */
    public function setIntuneDevices(?int $value ): void {
        $this->intuneDevices = $value;
    }

    /**
     * Sets the tenantAttachDevices property value. Total count of tenant attach devices. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the tenantAttachDevices property.
    */
    public function setTenantAttachDevices(?int $value ): void {
        $this->tenantAttachDevices = $value;
    }

    /**
     * Sets the totalDevices property value. The total count of devices. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the totalDevices property.
    */
    public function setTotalDevices(?int $value ): void {
        $this->totalDevices = $value;
    }

    /**
     * Sets the unsupportedOSversionDevices property value. The count of Windows 10 devices that have unsupported OS versions. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the unsupportedOSversionDevices property.
    */
    public function setUnsupportedOSversionDevices(?int $value ): void {
        $this->unsupportedOSversionDevices = $value;
    }

    /**
     * Sets the windows10Devices property value. The count of windows 10 devices. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the windows10Devices property.
    */
    public function setWindows10Devices(?int $value ): void {
        $this->windows10Devices = $value;
    }

    /**
     * Sets the windows10DevicesSummary property value. The user experience analytics work from anywhere Windows 10 devices summary.
     *  @param UserExperienceAnalyticsWindows10DevicesSummary|null $value Value to set for the windows10DevicesSummary property.
    */
    public function setWindows10DevicesSummary(?UserExperienceAnalyticsWindows10DevicesSummary $value ): void {
        $this->windows10DevicesSummary = $value;
    }

    /**
     * Sets the windows10DevicesWithoutTenantAttach property value. The count of windows 10 devices that are Intune and Comanaged. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the windows10DevicesWithoutTenantAttach property.
    */
    public function setWindows10DevicesWithoutTenantAttach(?int $value ): void {
        $this->windows10DevicesWithoutTenantAttach = $value;
    }

}
