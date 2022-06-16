<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsManagementAppHealthState extends Entity 
{
    /** @var string|null $deviceName Name of the device on which Windows management app is installed. */
    private ?string $deviceName = null;
    
    /** @var string|null $deviceOSVersion Windows 10 OS version of the device on which Windows management app is installed. */
    private ?string $deviceOSVersion = null;
    
    /** @var HealthState|null $healthState Windows management app health state. Possible values are: unknown, healthy, unhealthy. */
    private ?HealthState $healthState = null;
    
    /** @var string|null $installedVersion Windows management app installed version. */
    private ?string $installedVersion = null;
    
    /** @var DateTime|null $lastCheckInDateTime Windows management app last check-in time. */
    private ?DateTime $lastCheckInDateTime = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementAppHealthState {
        return new WindowsManagementAppHealthState();
    }

    /**
     * Gets the deviceName property value. Name of the device on which Windows management app is installed.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceOSVersion property value. Windows 10 OS version of the device on which Windows management app is installed.
     * @return string|null
    */
    public function getDeviceOSVersion(): ?string {
        return $this->deviceOSVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'deviceOSVersion' => function (self $o, ParseNode $n) { $o->setDeviceOSVersion($n->getStringValue()); },
            'healthState' => function (self $o, ParseNode $n) { $o->setHealthState($n->getEnumValue(HealthState::class)); },
            'installedVersion' => function (self $o, ParseNode $n) { $o->setInstalledVersion($n->getStringValue()); },
            'lastCheckInDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckInDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the healthState property value. Windows management app health state. Possible values are: unknown, healthy, unhealthy.
     * @return HealthState|null
    */
    public function getHealthState(): ?HealthState {
        return $this->healthState;
    }

    /**
     * Gets the installedVersion property value. Windows management app installed version.
     * @return string|null
    */
    public function getInstalledVersion(): ?string {
        return $this->installedVersion;
    }

    /**
     * Gets the lastCheckInDateTime property value. Windows management app last check-in time.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        return $this->lastCheckInDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('deviceOSVersion', $this->deviceOSVersion);
        $writer->writeEnumValue('healthState', $this->healthState);
        $writer->writeStringValue('installedVersion', $this->installedVersion);
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->lastCheckInDateTime);
    }

    /**
     * Sets the deviceName property value. Name of the device on which Windows management app is installed.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceOSVersion property value. Windows 10 OS version of the device on which Windows management app is installed.
     *  @param string|null $value Value to set for the deviceOSVersion property.
    */
    public function setDeviceOSVersion(?string $value ): void {
        $this->deviceOSVersion = $value;
    }

    /**
     * Sets the healthState property value. Windows management app health state. Possible values are: unknown, healthy, unhealthy.
     *  @param HealthState|null $value Value to set for the healthState property.
    */
    public function setHealthState(?HealthState $value ): void {
        $this->healthState = $value;
    }

    /**
     * Sets the installedVersion property value. Windows management app installed version.
     *  @param string|null $value Value to set for the installedVersion property.
    */
    public function setInstalledVersion(?string $value ): void {
        $this->installedVersion = $value;
    }

    /**
     * Sets the lastCheckInDateTime property value. Windows management app last check-in time.
     *  @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value ): void {
        $this->lastCheckInDateTime = $value;
    }

}
