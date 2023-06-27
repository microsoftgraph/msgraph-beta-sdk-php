<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The user experience analytics Work From Anywhere metrics devices summary.
*/
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the autopilotDevicesSummary property value. The user experience analytics work from anywhere Autopilot devices summary. Read-only.
     * @return UserExperienceAnalyticsAutopilotDevicesSummary|null
    */
    public function getAutopilotDevicesSummary(): ?UserExperienceAnalyticsAutopilotDevicesSummary {
        return $this->getBackingStore()->get('autopilotDevicesSummary');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudIdentityDevicesSummary property value. The user experience analytics work from anywhere Cloud Identity devices summary. Read-only.
     * @return UserExperienceAnalyticsCloudIdentityDevicesSummary|null
    */
    public function getCloudIdentityDevicesSummary(): ?UserExperienceAnalyticsCloudIdentityDevicesSummary {
        return $this->getBackingStore()->get('cloudIdentityDevicesSummary');
    }

    /**
     * Gets the cloudManagementDevicesSummary property value. The user experience analytics work from anywhere Cloud management devices summary. Read-only.
     * @return UserExperienceAnalyticsCloudManagementDevicesSummary|null
    */
    public function getCloudManagementDevicesSummary(): ?UserExperienceAnalyticsCloudManagementDevicesSummary {
        return $this->getBackingStore()->get('cloudManagementDevicesSummary');
    }

    /**
     * Gets the coManagedDevices property value. Total number of co-managed devices. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCoManagedDevices(): ?int {
        return $this->getBackingStore()->get('coManagedDevices');
    }

    /**
     * Gets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesNotAutopilotRegistered(): ?int {
        return $this->getBackingStore()->get('devicesNotAutopilotRegistered');
    }

    /**
     * Gets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesWithoutAutopilotProfileAssigned(): ?int {
        return $this->getBackingStore()->get('devicesWithoutAutopilotProfileAssigned');
    }

    /**
     * Gets the devicesWithoutCloudIdentity property value. The count of devices that are not cloud identity. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDevicesWithoutCloudIdentity(): ?int {
        return $this->getBackingStore()->get('devicesWithoutCloudIdentity');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autopilotDevicesSummary' => fn(ParseNode $n) => $o->setAutopilotDevicesSummary($n->getObjectValue([UserExperienceAnalyticsAutopilotDevicesSummary::class, 'createFromDiscriminatorValue'])),
            'cloudIdentityDevicesSummary' => fn(ParseNode $n) => $o->setCloudIdentityDevicesSummary($n->getObjectValue([UserExperienceAnalyticsCloudIdentityDevicesSummary::class, 'createFromDiscriminatorValue'])),
            'cloudManagementDevicesSummary' => fn(ParseNode $n) => $o->setCloudManagementDevicesSummary($n->getObjectValue([UserExperienceAnalyticsCloudManagementDevicesSummary::class, 'createFromDiscriminatorValue'])),
            'coManagedDevices' => fn(ParseNode $n) => $o->setCoManagedDevices($n->getIntegerValue()),
            'devicesNotAutopilotRegistered' => fn(ParseNode $n) => $o->setDevicesNotAutopilotRegistered($n->getIntegerValue()),
            'devicesWithoutAutopilotProfileAssigned' => fn(ParseNode $n) => $o->setDevicesWithoutAutopilotProfileAssigned($n->getIntegerValue()),
            'devicesWithoutCloudIdentity' => fn(ParseNode $n) => $o->setDevicesWithoutCloudIdentity($n->getIntegerValue()),
            'intuneDevices' => fn(ParseNode $n) => $o->setIntuneDevices($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantAttachDevices' => fn(ParseNode $n) => $o->setTenantAttachDevices($n->getIntegerValue()),
            'totalDevices' => fn(ParseNode $n) => $o->setTotalDevices($n->getIntegerValue()),
            'unsupportedOSversionDevices' => fn(ParseNode $n) => $o->setUnsupportedOSversionDevices($n->getIntegerValue()),
            'windows10Devices' => fn(ParseNode $n) => $o->setWindows10Devices($n->getIntegerValue()),
            'windows10DevicesSummary' => fn(ParseNode $n) => $o->setWindows10DevicesSummary($n->getObjectValue([UserExperienceAnalyticsWindows10DevicesSummary::class, 'createFromDiscriminatorValue'])),
            'windows10DevicesWithoutTenantAttach' => fn(ParseNode $n) => $o->setWindows10DevicesWithoutTenantAttach($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the intuneDevices property value. The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getIntuneDevices(): ?int {
        return $this->getBackingStore()->get('intuneDevices');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the tenantAttachDevices property value. Total count of tenant attach devices. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTenantAttachDevices(): ?int {
        return $this->getBackingStore()->get('tenantAttachDevices');
    }

    /**
     * Gets the totalDevices property value. The total count of devices. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDevices(): ?int {
        return $this->getBackingStore()->get('totalDevices');
    }

    /**
     * Gets the unsupportedOSversionDevices property value. The count of Windows 10 devices that have unsupported OS versions. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getUnsupportedOSversionDevices(): ?int {
        return $this->getBackingStore()->get('unsupportedOSversionDevices');
    }

    /**
     * Gets the windows10Devices property value. The count of windows 10 devices. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getWindows10Devices(): ?int {
        return $this->getBackingStore()->get('windows10Devices');
    }

    /**
     * Gets the windows10DevicesSummary property value. The user experience analytics work from anywhere Windows 10 devices summary. Read-only.
     * @return UserExperienceAnalyticsWindows10DevicesSummary|null
    */
    public function getWindows10DevicesSummary(): ?UserExperienceAnalyticsWindows10DevicesSummary {
        return $this->getBackingStore()->get('windows10DevicesSummary');
    }

    /**
     * Gets the windows10DevicesWithoutTenantAttach property value. The count of windows 10 devices that are Intune and co-managed. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getWindows10DevicesWithoutTenantAttach(): ?int {
        return $this->getBackingStore()->get('windows10DevicesWithoutTenantAttach');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('autopilotDevicesSummary', $this->getAutopilotDevicesSummary());
        $writer->writeObjectValue('cloudIdentityDevicesSummary', $this->getCloudIdentityDevicesSummary());
        $writer->writeObjectValue('cloudManagementDevicesSummary', $this->getCloudManagementDevicesSummary());
        $writer->writeIntegerValue('coManagedDevices', $this->getCoManagedDevices());
        $writer->writeIntegerValue('devicesNotAutopilotRegistered', $this->getDevicesNotAutopilotRegistered());
        $writer->writeIntegerValue('devicesWithoutAutopilotProfileAssigned', $this->getDevicesWithoutAutopilotProfileAssigned());
        $writer->writeIntegerValue('devicesWithoutCloudIdentity', $this->getDevicesWithoutCloudIdentity());
        $writer->writeIntegerValue('intuneDevices', $this->getIntuneDevices());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('tenantAttachDevices', $this->getTenantAttachDevices());
        $writer->writeIntegerValue('totalDevices', $this->getTotalDevices());
        $writer->writeIntegerValue('unsupportedOSversionDevices', $this->getUnsupportedOSversionDevices());
        $writer->writeIntegerValue('windows10Devices', $this->getWindows10Devices());
        $writer->writeObjectValue('windows10DevicesSummary', $this->getWindows10DevicesSummary());
        $writer->writeIntegerValue('windows10DevicesWithoutTenantAttach', $this->getWindows10DevicesWithoutTenantAttach());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the autopilotDevicesSummary property value. The user experience analytics work from anywhere Autopilot devices summary. Read-only.
     * @param UserExperienceAnalyticsAutopilotDevicesSummary|null $value Value to set for the autopilotDevicesSummary property.
    */
    public function setAutopilotDevicesSummary(?UserExperienceAnalyticsAutopilotDevicesSummary $value): void {
        $this->getBackingStore()->set('autopilotDevicesSummary', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudIdentityDevicesSummary property value. The user experience analytics work from anywhere Cloud Identity devices summary. Read-only.
     * @param UserExperienceAnalyticsCloudIdentityDevicesSummary|null $value Value to set for the cloudIdentityDevicesSummary property.
    */
    public function setCloudIdentityDevicesSummary(?UserExperienceAnalyticsCloudIdentityDevicesSummary $value): void {
        $this->getBackingStore()->set('cloudIdentityDevicesSummary', $value);
    }

    /**
     * Sets the cloudManagementDevicesSummary property value. The user experience analytics work from anywhere Cloud management devices summary. Read-only.
     * @param UserExperienceAnalyticsCloudManagementDevicesSummary|null $value Value to set for the cloudManagementDevicesSummary property.
    */
    public function setCloudManagementDevicesSummary(?UserExperienceAnalyticsCloudManagementDevicesSummary $value): void {
        $this->getBackingStore()->set('cloudManagementDevicesSummary', $value);
    }

    /**
     * Sets the coManagedDevices property value. Total number of co-managed devices. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the coManagedDevices property.
    */
    public function setCoManagedDevices(?int $value): void {
        $this->getBackingStore()->set('coManagedDevices', $value);
    }

    /**
     * Sets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the devicesNotAutopilotRegistered property.
    */
    public function setDevicesNotAutopilotRegistered(?int $value): void {
        $this->getBackingStore()->set('devicesNotAutopilotRegistered', $value);
    }

    /**
     * Sets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the devicesWithoutAutopilotProfileAssigned property.
    */
    public function setDevicesWithoutAutopilotProfileAssigned(?int $value): void {
        $this->getBackingStore()->set('devicesWithoutAutopilotProfileAssigned', $value);
    }

    /**
     * Sets the devicesWithoutCloudIdentity property value. The count of devices that are not cloud identity. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the devicesWithoutCloudIdentity property.
    */
    public function setDevicesWithoutCloudIdentity(?int $value): void {
        $this->getBackingStore()->set('devicesWithoutCloudIdentity', $value);
    }

    /**
     * Sets the intuneDevices property value. The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the intuneDevices property.
    */
    public function setIntuneDevices(?int $value): void {
        $this->getBackingStore()->set('intuneDevices', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantAttachDevices property value. Total count of tenant attach devices. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the tenantAttachDevices property.
    */
    public function setTenantAttachDevices(?int $value): void {
        $this->getBackingStore()->set('tenantAttachDevices', $value);
    }

    /**
     * Sets the totalDevices property value. The total count of devices. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the totalDevices property.
    */
    public function setTotalDevices(?int $value): void {
        $this->getBackingStore()->set('totalDevices', $value);
    }

    /**
     * Sets the unsupportedOSversionDevices property value. The count of Windows 10 devices that have unsupported OS versions. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the unsupportedOSversionDevices property.
    */
    public function setUnsupportedOSversionDevices(?int $value): void {
        $this->getBackingStore()->set('unsupportedOSversionDevices', $value);
    }

    /**
     * Sets the windows10Devices property value. The count of windows 10 devices. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the windows10Devices property.
    */
    public function setWindows10Devices(?int $value): void {
        $this->getBackingStore()->set('windows10Devices', $value);
    }

    /**
     * Sets the windows10DevicesSummary property value. The user experience analytics work from anywhere Windows 10 devices summary. Read-only.
     * @param UserExperienceAnalyticsWindows10DevicesSummary|null $value Value to set for the windows10DevicesSummary property.
    */
    public function setWindows10DevicesSummary(?UserExperienceAnalyticsWindows10DevicesSummary $value): void {
        $this->getBackingStore()->set('windows10DevicesSummary', $value);
    }

    /**
     * Sets the windows10DevicesWithoutTenantAttach property value. The count of windows 10 devices that are Intune and co-managed. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the windows10DevicesWithoutTenantAttach property.
    */
    public function setWindows10DevicesWithoutTenantAttach(?int $value): void {
        $this->getBackingStore()->set('windows10DevicesWithoutTenantAttach', $value);
    }

}
