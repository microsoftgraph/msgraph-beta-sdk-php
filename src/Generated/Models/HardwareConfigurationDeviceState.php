<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for device run state of the hardware configuration
*/
class HardwareConfigurationDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new HardwareConfigurationDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareConfigurationDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareConfigurationDeviceState {
        return new HardwareConfigurationDeviceState();
    }

    /**
     * Gets the assignmentFilterIds property value. A list of identifier strings of different assignment filters applied
     * @return string|null
    */
    public function getAssignmentFilterIds(): ?string {
        $val = $this->getBackingStore()->get('assignmentFilterIds');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterIds'");
    }

    /**
     * Gets the configurationError property value. Error from the hardware configuration execution
     * @return string|null
    */
    public function getConfigurationError(): ?string {
        $val = $this->getBackingStore()->get('configurationError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationError'");
    }

    /**
     * Gets the configurationOutput property value. Output of the hardware configuration execution
     * @return string|null
    */
    public function getConfigurationOutput(): ?string {
        $val = $this->getBackingStore()->get('configurationOutput');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationOutput'");
    }

    /**
     * Gets the configurationState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getConfigurationState(): ?RunState {
        $val = $this->getBackingStore()->get('configurationState');
        if (is_null($val) || $val instanceof RunState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationState'");
    }

    /**
     * Gets the deviceName property value. The name of the device
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentFilterIds' => fn(ParseNode $n) => $o->setAssignmentFilterIds($n->getStringValue()),
            'configurationError' => fn(ParseNode $n) => $o->setConfigurationError($n->getStringValue()),
            'configurationOutput' => fn(ParseNode $n) => $o->setConfigurationOutput($n->getStringValue()),
            'configurationState' => fn(ParseNode $n) => $o->setConfigurationState($n->getEnumValue(RunState::class)),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'internalVersion' => fn(ParseNode $n) => $o->setInternalVersion($n->getIntegerValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the internalVersion property value. The Policy internal version
     * @return int|null
    */
    public function getInternalVersion(): ?int {
        $val = $this->getBackingStore()->get('internalVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalVersion'");
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the hardware configuration executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastStateUpdateDateTime'");
    }

    /**
     * Gets the osVersion property value. Operating system version of the device (E.g. 10.0.19042.1165, 10.0.19042.1288 etc.)
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the upn property value. User Principal Name (UPN).
     * @return string|null
    */
    public function getUpn(): ?string {
        $val = $this->getBackingStore()->get('upn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upn'");
    }

    /**
     * Gets the userId property value. The unique identifier of the Entra user associated with the device for which policy is applied. Read-Only.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentFilterIds', $this->getAssignmentFilterIds());
        $writer->writeStringValue('configurationError', $this->getConfigurationError());
        $writer->writeStringValue('configurationOutput', $this->getConfigurationOutput());
        $writer->writeEnumValue('configurationState', $this->getConfigurationState());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeIntegerValue('internalVersion', $this->getInternalVersion());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('upn', $this->getUpn());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the assignmentFilterIds property value. A list of identifier strings of different assignment filters applied
     * @param string|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?string $value): void {
        $this->getBackingStore()->set('assignmentFilterIds', $value);
    }

    /**
     * Sets the configurationError property value. Error from the hardware configuration execution
     * @param string|null $value Value to set for the configurationError property.
    */
    public function setConfigurationError(?string $value): void {
        $this->getBackingStore()->set('configurationError', $value);
    }

    /**
     * Sets the configurationOutput property value. Output of the hardware configuration execution
     * @param string|null $value Value to set for the configurationOutput property.
    */
    public function setConfigurationOutput(?string $value): void {
        $this->getBackingStore()->set('configurationOutput', $value);
    }

    /**
     * Sets the configurationState property value. Indicates the type of execution status of the device management script.
     * @param RunState|null $value Value to set for the configurationState property.
    */
    public function setConfigurationState(?RunState $value): void {
        $this->getBackingStore()->set('configurationState', $value);
    }

    /**
     * Sets the deviceName property value. The name of the device
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the internalVersion property value. The Policy internal version
     * @param int|null $value Value to set for the internalVersion property.
    */
    public function setInternalVersion(?int $value): void {
        $this->getBackingStore()->set('internalVersion', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the hardware configuration executed
     * @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the osVersion property value. Operating system version of the device (E.g. 10.0.19042.1165, 10.0.19042.1288 etc.)
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the upn property value. User Principal Name (UPN).
     * @param string|null $value Value to set for the upn property.
    */
    public function setUpn(?string $value): void {
        $this->getBackingStore()->set('upn', $value);
    }

    /**
     * Sets the userId property value. The unique identifier of the Entra user associated with the device for which policy is applied. Read-Only.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
