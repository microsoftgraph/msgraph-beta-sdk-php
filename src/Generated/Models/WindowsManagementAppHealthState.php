<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows management app health state entity.
*/
class WindowsManagementAppHealthState extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsManagementAppHealthState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagementAppHealthState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementAppHealthState {
        return new WindowsManagementAppHealthState();
    }

    /**
     * Gets the deviceName property value. Name of the device on which Windows management app is installed.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceOSVersion property value. Windows 10 OS version of the device on which Windows management app is installed.
     * @return string|null
    */
    public function getDeviceOSVersion(): ?string {
        return $this->getBackingStore()->get('deviceOSVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceOSVersion' => fn(ParseNode $n) => $o->setDeviceOSVersion($n->getStringValue()),
            'healthState' => fn(ParseNode $n) => $o->setHealthState($n->getEnumValue(HealthState::class)),
            'installedVersion' => fn(ParseNode $n) => $o->setInstalledVersion($n->getStringValue()),
            'lastCheckInDateTime' => fn(ParseNode $n) => $o->setLastCheckInDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the healthState property value. Indicates health state of the Windows management app.
     * @return HealthState|null
    */
    public function getHealthState(): ?HealthState {
        return $this->getBackingStore()->get('healthState');
    }

    /**
     * Gets the installedVersion property value. Windows management app installed version.
     * @return string|null
    */
    public function getInstalledVersion(): ?string {
        return $this->getBackingStore()->get('installedVersion');
    }

    /**
     * Gets the lastCheckInDateTime property value. Windows management app last check-in time.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCheckInDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('deviceOSVersion', $this->getDeviceOSVersion());
        $writer->writeEnumValue('healthState', $this->getHealthState());
        $writer->writeStringValue('installedVersion', $this->getInstalledVersion());
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->getLastCheckInDateTime());
    }

    /**
     * Sets the deviceName property value. Name of the device on which Windows management app is installed.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceOSVersion property value. Windows 10 OS version of the device on which Windows management app is installed.
     * @param string|null $value Value to set for the deviceOSVersion property.
    */
    public function setDeviceOSVersion(?string $value): void {
        $this->getBackingStore()->set('deviceOSVersion', $value);
    }

    /**
     * Sets the healthState property value. Indicates health state of the Windows management app.
     * @param HealthState|null $value Value to set for the healthState property.
    */
    public function setHealthState(?HealthState $value): void {
        $this->getBackingStore()->set('healthState', $value);
    }

    /**
     * Sets the installedVersion property value. Windows management app installed version.
     * @param string|null $value Value to set for the installedVersion property.
    */
    public function setInstalledVersion(?string $value): void {
        $this->getBackingStore()->set('installedVersion', $value);
    }

    /**
     * Sets the lastCheckInDateTime property value. Windows management app last check-in time.
     * @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckInDateTime', $value);
    }

}
