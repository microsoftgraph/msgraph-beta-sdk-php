<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for device run state of the device management script.
*/
class DeviceManagementScriptDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementScriptDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptDeviceState {
        return new DeviceManagementScriptDeviceState();
    }

    /**
     * Gets the errorCode property value. Error code corresponding to erroneous execution of the device management script.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * Gets the errorDescription property value. Error description corresponding to erroneous execution of the device management script.
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        $val = $this->getBackingStore()->get('errorDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDescription'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'errorDescription' => fn(ParseNode $n) => $o->setErrorDescription($n->getStringValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'managedDevice' => fn(ParseNode $n) => $o->setManagedDevice($n->getObjectValue([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'resultMessage' => fn(ParseNode $n) => $o->setResultMessage($n->getStringValue()),
            'runState' => fn(ParseNode $n) => $o->setRunState($n->getEnumValue(RunState::class)),
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. Latest time the device management script executes.
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
     * Gets the managedDevice property value. The managed devices that executes the device management script.
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        $val = $this->getBackingStore()->get('managedDevice');
        if (is_null($val) || $val instanceof ManagedDevice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevice'");
    }

    /**
     * Gets the resultMessage property value. Details of execution output.
     * @return string|null
    */
    public function getResultMessage(): ?string {
        $val = $this->getBackingStore()->get('resultMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultMessage'");
    }

    /**
     * Gets the runState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getRunState(): ?RunState {
        $val = $this->getBackingStore()->get('runState');
        if (is_null($val) || $val instanceof RunState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('errorDescription', $this->getErrorDescription());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeObjectValue('managedDevice', $this->getManagedDevice());
        $writer->writeStringValue('resultMessage', $this->getResultMessage());
        $writer->writeEnumValue('runState', $this->getRunState());
    }

    /**
     * Sets the errorCode property value. Error code corresponding to erroneous execution of the device management script.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the errorDescription property value. Error description corresponding to erroneous execution of the device management script.
     * @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value): void {
        $this->getBackingStore()->set('errorDescription', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. Latest time the device management script executes.
     * @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the managedDevice property value. The managed devices that executes the device management script.
     * @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value): void {
        $this->getBackingStore()->set('managedDevice', $value);
    }

    /**
     * Sets the resultMessage property value. Details of execution output.
     * @param string|null $value Value to set for the resultMessage property.
    */
    public function setResultMessage(?string $value): void {
        $this->getBackingStore()->set('resultMessage', $value);
    }

    /**
     * Sets the runState property value. Indicates the type of execution status of the device management script.
     * @param RunState|null $value Value to set for the runState property.
    */
    public function setRunState(?RunState $value): void {
        $this->getBackingStore()->set('runState', $value);
    }

}
