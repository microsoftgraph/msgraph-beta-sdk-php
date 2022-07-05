<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionWipeAction extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $lastCheckInDateTime Last checkin time of the device that was targeted by this wipe action.
    */
    private ?DateTime $lastCheckInDateTime = null;
    
    /**
     * @var ActionState|null $status Wipe action status. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    */
    private ?ActionState $status = null;
    
    /**
     * @var string|null $targetedDeviceMacAddress Targeted device Mac address.
    */
    private ?string $targetedDeviceMacAddress = null;
    
    /**
     * @var string|null $targetedDeviceName Targeted device name.
    */
    private ?string $targetedDeviceName = null;
    
    /**
     * @var string|null $targetedDeviceRegistrationId The DeviceRegistrationId being targeted by this wipe action.
    */
    private ?string $targetedDeviceRegistrationId = null;
    
    /**
     * @var string|null $targetedUserId The UserId being targeted by this wipe action.
    */
    private ?string $targetedUserId = null;
    
    /**
     * Instantiates a new windowsInformationProtectionWipeAction and sets the default values.
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
            'lastCheckInDateTime' => function (ParseNode $n) use ($o) { $o->setLastCheckInDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ActionState::class)); },
            'targetedDeviceMacAddress' => function (ParseNode $n) use ($o) { $o->setTargetedDeviceMacAddress($n->getStringValue()); },
            'targetedDeviceName' => function (ParseNode $n) use ($o) { $o->setTargetedDeviceName($n->getStringValue()); },
            'targetedDeviceRegistrationId' => function (ParseNode $n) use ($o) { $o->setTargetedDeviceRegistrationId($n->getStringValue()); },
            'targetedUserId' => function (ParseNode $n) use ($o) { $o->setTargetedUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastCheckInDateTime property value. Last checkin time of the device that was targeted by this wipe action.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        return $this->lastCheckInDateTime;
    }

    /**
     * Gets the status property value. Wipe action status. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     * @return ActionState|null
    */
    public function getStatus(): ?ActionState {
        return $this->status;
    }

    /**
     * Gets the targetedDeviceMacAddress property value. Targeted device Mac address.
     * @return string|null
    */
    public function getTargetedDeviceMacAddress(): ?string {
        return $this->targetedDeviceMacAddress;
    }

    /**
     * Gets the targetedDeviceName property value. Targeted device name.
     * @return string|null
    */
    public function getTargetedDeviceName(): ?string {
        return $this->targetedDeviceName;
    }

    /**
     * Gets the targetedDeviceRegistrationId property value. The DeviceRegistrationId being targeted by this wipe action.
     * @return string|null
    */
    public function getTargetedDeviceRegistrationId(): ?string {
        return $this->targetedDeviceRegistrationId;
    }

    /**
     * Gets the targetedUserId property value. The UserId being targeted by this wipe action.
     * @return string|null
    */
    public function getTargetedUserId(): ?string {
        return $this->targetedUserId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->lastCheckInDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('targetedDeviceMacAddress', $this->targetedDeviceMacAddress);
        $writer->writeStringValue('targetedDeviceName', $this->targetedDeviceName);
        $writer->writeStringValue('targetedDeviceRegistrationId', $this->targetedDeviceRegistrationId);
        $writer->writeStringValue('targetedUserId', $this->targetedUserId);
    }

    /**
     * Sets the lastCheckInDateTime property value. Last checkin time of the device that was targeted by this wipe action.
     *  @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value ): void {
        $this->lastCheckInDateTime = $value;
    }

    /**
     * Sets the status property value. Wipe action status. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     *  @param ActionState|null $value Value to set for the status property.
    */
    public function setStatus(?ActionState $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the targetedDeviceMacAddress property value. Targeted device Mac address.
     *  @param string|null $value Value to set for the targetedDeviceMacAddress property.
    */
    public function setTargetedDeviceMacAddress(?string $value ): void {
        $this->targetedDeviceMacAddress = $value;
    }

    /**
     * Sets the targetedDeviceName property value. Targeted device name.
     *  @param string|null $value Value to set for the targetedDeviceName property.
    */
    public function setTargetedDeviceName(?string $value ): void {
        $this->targetedDeviceName = $value;
    }

    /**
     * Sets the targetedDeviceRegistrationId property value. The DeviceRegistrationId being targeted by this wipe action.
     *  @param string|null $value Value to set for the targetedDeviceRegistrationId property.
    */
    public function setTargetedDeviceRegistrationId(?string $value ): void {
        $this->targetedDeviceRegistrationId = $value;
    }

    /**
     * Sets the targetedUserId property value. The UserId being targeted by this wipe action.
     *  @param string|null $value Value to set for the targetedUserId property.
    */
    public function setTargetedUserId(?string $value ): void {
        $this->targetedUserId = $value;
    }

}
