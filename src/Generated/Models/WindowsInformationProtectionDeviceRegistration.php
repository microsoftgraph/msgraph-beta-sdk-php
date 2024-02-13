<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents device registration records for Bring-Your-Own-Device(BYOD) Windows devices.
*/
class WindowsInformationProtectionDeviceRegistration extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsInformationProtectionDeviceRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionDeviceRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionDeviceRegistration {
        return new WindowsInformationProtectionDeviceRegistration();
    }

    /**
     * Gets the deviceMacAddress property value. Device Mac address.
     * @return string|null
    */
    public function getDeviceMacAddress(): ?string {
        $val = $this->getBackingStore()->get('deviceMacAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceMacAddress'");
    }

    /**
     * Gets the deviceName property value. Device name.
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
     * Gets the deviceRegistrationId property value. Device identifier for this device registration record.
     * @return string|null
    */
    public function getDeviceRegistrationId(): ?string {
        $val = $this->getBackingStore()->get('deviceRegistrationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRegistrationId'");
    }

    /**
     * Gets the deviceType property value. Device type, for example, Windows laptop VS Windows phone.
     * @return string|null
    */
    public function getDeviceType(): ?string {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceMacAddress' => fn(ParseNode $n) => $o->setDeviceMacAddress($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceRegistrationId' => fn(ParseNode $n) => $o->setDeviceRegistrationId($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'lastCheckInDateTime' => fn(ParseNode $n) => $o->setLastCheckInDateTime($n->getDateTimeValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastCheckInDateTime property value. Last checkin time of the device.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastCheckInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastCheckInDateTime'");
    }

    /**
     * Gets the userId property value. UserId associated with this device registration record.
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
        $writer->writeStringValue('deviceMacAddress', $this->getDeviceMacAddress());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('deviceRegistrationId', $this->getDeviceRegistrationId());
        $writer->writeStringValue('deviceType', $this->getDeviceType());
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->getLastCheckInDateTime());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the deviceMacAddress property value. Device Mac address.
     * @param string|null $value Value to set for the deviceMacAddress property.
    */
    public function setDeviceMacAddress(?string $value): void {
        $this->getBackingStore()->set('deviceMacAddress', $value);
    }

    /**
     * Sets the deviceName property value. Device name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceRegistrationId property value. Device identifier for this device registration record.
     * @param string|null $value Value to set for the deviceRegistrationId property.
    */
    public function setDeviceRegistrationId(?string $value): void {
        $this->getBackingStore()->set('deviceRegistrationId', $value);
    }

    /**
     * Sets the deviceType property value. Device type, for example, Windows laptop VS Windows phone.
     * @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the lastCheckInDateTime property value. Last checkin time of the device.
     * @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckInDateTime', $value);
    }

    /**
     * Sets the userId property value. UserId associated with this device registration record.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
