<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriverUpdateDeviceStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new DriverUpdateDeviceStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriverUpdateDeviceStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriverUpdateDeviceStatus {
        return new DriverUpdateDeviceStatus();
    }

    /**
     * Gets the aadDeviceId property value. The Microsoft Entra identifier of the device. Read-only.
     * @return string|null
    */
    public function getAadDeviceId(): ?string {
        $val = $this->getBackingStore()->get('aadDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aadDeviceId'");
    }

    /**
     * Gets the clientState property value. The clientState property
     * @return DeviceClientState|null
    */
    public function getClientState(): ?DeviceClientState {
        $val = $this->getBackingStore()->get('clientState');
        if (is_null($val) || $val instanceof DeviceClientState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientState'");
    }

    /**
     * Gets the clientSubstate property value. The clientSubstate property
     * @return DeviceClientSubstate|null
    */
    public function getClientSubstate(): ?DeviceClientSubstate {
        $val = $this->getBackingStore()->get('clientSubstate');
        if (is_null($val) || $val instanceof DeviceClientSubstate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSubstate'");
    }

    /**
     * Gets the deviceName property value. The device name. Read-only.
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
            'aadDeviceId' => fn(ParseNode $n) => $o->setAadDeviceId($n->getStringValue()),
            'clientState' => fn(ParseNode $n) => $o->setClientState($n->getEnumValue(DeviceClientState::class)),
            'clientSubstate' => fn(ParseNode $n) => $o->setClientSubstate($n->getEnumValue(DeviceClientSubstate::class)),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'lastEventDateTime' => fn(ParseNode $n) => $o->setLastEventDateTime($n->getDateTimeValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'ringId' => fn(ParseNode $n) => $o->setRingId($n->getStringValue()),
            'ringName' => fn(ParseNode $n) => $o->setRingName($n->getStringValue()),
            'serviceState' => fn(ParseNode $n) => $o->setServiceState($n->getEnumValue(DeviceServiceState::class)),
            'serviceSubstate' => fn(ParseNode $n) => $o->setServiceSubstate($n->getEnumValue(DeviceServiceSubstate::class)),
        ]);
    }

    /**
     * Gets the lastEventDateTime property value. The date and time of the latest status event. Read-only.
     * @return DateTime|null
    */
    public function getLastEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastEventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastEventDateTime'");
    }

    /**
     * Gets the policyId property value. The identifier of the driver update policy. Read-only.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyName property value. The display name of the driver update policy. Read-only.
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Gets the ringId property value. The identifier of the Windows Autopatch ring. Read-only.
     * @return string|null
    */
    public function getRingId(): ?string {
        $val = $this->getBackingStore()->get('ringId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ringId'");
    }

    /**
     * Gets the ringName property value. The display name of the Windows Autopatch ring. Read-only.
     * @return string|null
    */
    public function getRingName(): ?string {
        $val = $this->getBackingStore()->get('ringName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ringName'");
    }

    /**
     * Gets the serviceState property value. The serviceState property
     * @return DeviceServiceState|null
    */
    public function getServiceState(): ?DeviceServiceState {
        $val = $this->getBackingStore()->get('serviceState');
        if (is_null($val) || $val instanceof DeviceServiceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceState'");
    }

    /**
     * Gets the serviceSubstate property value. The serviceSubstate property
     * @return DeviceServiceSubstate|null
    */
    public function getServiceSubstate(): ?DeviceServiceSubstate {
        $val = $this->getBackingStore()->get('serviceSubstate');
        if (is_null($val) || $val instanceof DeviceServiceSubstate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceSubstate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('clientState', $this->getClientState());
        $writer->writeEnumValue('clientSubstate', $this->getClientSubstate());
        $writer->writeEnumValue('serviceState', $this->getServiceState());
        $writer->writeEnumValue('serviceSubstate', $this->getServiceSubstate());
    }

    /**
     * Sets the aadDeviceId property value. The Microsoft Entra identifier of the device. Read-only.
     * @param string|null $value Value to set for the aadDeviceId property.
    */
    public function setAadDeviceId(?string $value): void {
        $this->getBackingStore()->set('aadDeviceId', $value);
    }

    /**
     * Sets the clientState property value. The clientState property
     * @param DeviceClientState|null $value Value to set for the clientState property.
    */
    public function setClientState(?DeviceClientState $value): void {
        $this->getBackingStore()->set('clientState', $value);
    }

    /**
     * Sets the clientSubstate property value. The clientSubstate property
     * @param DeviceClientSubstate|null $value Value to set for the clientSubstate property.
    */
    public function setClientSubstate(?DeviceClientSubstate $value): void {
        $this->getBackingStore()->set('clientSubstate', $value);
    }

    /**
     * Sets the deviceName property value. The device name. Read-only.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the lastEventDateTime property value. The date and time of the latest status event. Read-only.
     * @param DateTime|null $value Value to set for the lastEventDateTime property.
    */
    public function setLastEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastEventDateTime', $value);
    }

    /**
     * Sets the policyId property value. The identifier of the driver update policy. Read-only.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The display name of the driver update policy. Read-only.
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the ringId property value. The identifier of the Windows Autopatch ring. Read-only.
     * @param string|null $value Value to set for the ringId property.
    */
    public function setRingId(?string $value): void {
        $this->getBackingStore()->set('ringId', $value);
    }

    /**
     * Sets the ringName property value. The display name of the Windows Autopatch ring. Read-only.
     * @param string|null $value Value to set for the ringName property.
    */
    public function setRingName(?string $value): void {
        $this->getBackingStore()->set('ringName', $value);
    }

    /**
     * Sets the serviceState property value. The serviceState property
     * @param DeviceServiceState|null $value Value to set for the serviceState property.
    */
    public function setServiceState(?DeviceServiceState $value): void {
        $this->getBackingStore()->set('serviceState', $value);
    }

    /**
     * Sets the serviceSubstate property value. The serviceSubstate property
     * @param DeviceServiceSubstate|null $value Value to set for the serviceSubstate property.
    */
    public function setServiceSubstate(?DeviceServiceSubstate $value): void {
        $this->getBackingStore()->set('serviceSubstate', $value);
    }

}
