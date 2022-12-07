<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionWipeAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsInformationProtectionWipeAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionWipeAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionWipeAction {
        return new WindowsInformationProtectionWipeAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastCheckInDateTime' => fn(ParseNode $n) => $o->setLastCheckInDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ActionState::class)),
            'targetedDeviceMacAddress' => fn(ParseNode $n) => $o->setTargetedDeviceMacAddress($n->getStringValue()),
            'targetedDeviceName' => fn(ParseNode $n) => $o->setTargetedDeviceName($n->getStringValue()),
            'targetedDeviceRegistrationId' => fn(ParseNode $n) => $o->setTargetedDeviceRegistrationId($n->getStringValue()),
            'targetedUserId' => fn(ParseNode $n) => $o->setTargetedUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastCheckInDateTime property value. Last checkin time of the device that was targeted by this wipe action.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCheckInDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return ActionState|null
    */
    public function getStatus(): ?ActionState {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the targetedDeviceMacAddress property value. Targeted device Mac address.
     * @return string|null
    */
    public function getTargetedDeviceMacAddress(): ?string {
        return $this->getBackingStore()->get('targetedDeviceMacAddress');
    }

    /**
     * Gets the targetedDeviceName property value. Targeted device name.
     * @return string|null
    */
    public function getTargetedDeviceName(): ?string {
        return $this->getBackingStore()->get('targetedDeviceName');
    }

    /**
     * Gets the targetedDeviceRegistrationId property value. The DeviceRegistrationId being targeted by this wipe action.
     * @return string|null
    */
    public function getTargetedDeviceRegistrationId(): ?string {
        return $this->getBackingStore()->get('targetedDeviceRegistrationId');
    }

    /**
     * Gets the targetedUserId property value. The UserId being targeted by this wipe action.
     * @return string|null
    */
    public function getTargetedUserId(): ?string {
        return $this->getBackingStore()->get('targetedUserId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->getLastCheckInDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('targetedDeviceMacAddress', $this->getTargetedDeviceMacAddress());
        $writer->writeStringValue('targetedDeviceName', $this->getTargetedDeviceName());
        $writer->writeStringValue('targetedDeviceRegistrationId', $this->getTargetedDeviceRegistrationId());
        $writer->writeStringValue('targetedUserId', $this->getTargetedUserId());
    }

    /**
     * Sets the lastCheckInDateTime property value. Last checkin time of the device that was targeted by this wipe action.
     *  @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckInDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param ActionState|null $value Value to set for the status property.
    */
    public function setStatus(?ActionState $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetedDeviceMacAddress property value. Targeted device Mac address.
     *  @param string|null $value Value to set for the targetedDeviceMacAddress property.
    */
    public function setTargetedDeviceMacAddress(?string $value): void {
        $this->getBackingStore()->set('targetedDeviceMacAddress', $value);
    }

    /**
     * Sets the targetedDeviceName property value. Targeted device name.
     *  @param string|null $value Value to set for the targetedDeviceName property.
    */
    public function setTargetedDeviceName(?string $value): void {
        $this->getBackingStore()->set('targetedDeviceName', $value);
    }

    /**
     * Sets the targetedDeviceRegistrationId property value. The DeviceRegistrationId being targeted by this wipe action.
     *  @param string|null $value Value to set for the targetedDeviceRegistrationId property.
    */
    public function setTargetedDeviceRegistrationId(?string $value): void {
        $this->getBackingStore()->set('targetedDeviceRegistrationId', $value);
    }

    /**
     * Sets the targetedUserId property value. The UserId being targeted by this wipe action.
     *  @param string|null $value Value to set for the targetedUserId property.
    */
    public function setTargetedUserId(?string $value): void {
        $this->getBackingStore()->set('targetedUserId', $value);
    }

}
