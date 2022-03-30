<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionDeviceRegistration extends Entity 
{
    /** @var string|null $deviceMacAddress Device Mac address. */
    private ?string $deviceMacAddress = null;
    
    /** @var string|null $deviceName Device name. */
    private ?string $deviceName = null;
    
    /** @var string|null $deviceRegistrationId Device identifier for this device registration record. */
    private ?string $deviceRegistrationId = null;
    
    /** @var string|null $deviceType Device type, for example, Windows laptop VS Windows phone. */
    private ?string $deviceType = null;
    
    /** @var DateTime|null $lastCheckInDateTime Last checkin time of the device. */
    private ?DateTime $lastCheckInDateTime = null;
    
    /** @var string|null $userId UserId associated with this device registration record. */
    private ?string $userId = null;
    
    /**
     * Instantiates a new windowsInformationProtectionDeviceRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionDeviceRegistration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionDeviceRegistration {
        return new WindowsInformationProtectionDeviceRegistration();
    }

    /**
     * Gets the deviceMacAddress property value. Device Mac address.
     * @return string|null
    */
    public function getDeviceMacAddress(): ?string {
        return $this->deviceMacAddress;
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceRegistrationId property value. Device identifier for this device registration record.
     * @return string|null
    */
    public function getDeviceRegistrationId(): ?string {
        return $this->deviceRegistrationId;
    }

    /**
     * Gets the deviceType property value. Device type, for example, Windows laptop VS Windows phone.
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->deviceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceMacAddress' => function (self $o, ParseNode $n) { $o->setDeviceMacAddress($n->getStringValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'deviceRegistrationId' => function (self $o, ParseNode $n) { $o->setDeviceRegistrationId($n->getStringValue()); },
            'deviceType' => function (self $o, ParseNode $n) { $o->setDeviceType($n->getStringValue()); },
            'lastCheckInDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckInDateTime($n->getDateTimeValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastCheckInDateTime property value. Last checkin time of the device.
     * @return DateTime|null
    */
    public function getLastCheckInDateTime(): ?DateTime {
        return $this->lastCheckInDateTime;
    }

    /**
     * Gets the userId property value. UserId associated with this device registration record.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceMacAddress', $this->deviceMacAddress);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('deviceRegistrationId', $this->deviceRegistrationId);
        $writer->writeStringValue('deviceType', $this->deviceType);
        $writer->writeDateTimeValue('lastCheckInDateTime', $this->lastCheckInDateTime);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the deviceMacAddress property value. Device Mac address.
     *  @param string|null $value Value to set for the deviceMacAddress property.
    */
    public function setDeviceMacAddress(?string $value ): void {
        $this->deviceMacAddress = $value;
    }

    /**
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceRegistrationId property value. Device identifier for this device registration record.
     *  @param string|null $value Value to set for the deviceRegistrationId property.
    */
    public function setDeviceRegistrationId(?string $value ): void {
        $this->deviceRegistrationId = $value;
    }

    /**
     * Sets the deviceType property value. Device type, for example, Windows laptop VS Windows phone.
     *  @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the lastCheckInDateTime property value. Last checkin time of the device.
     *  @param DateTime|null $value Value to set for the lastCheckInDateTime property.
    */
    public function setLastCheckInDateTime(?DateTime $value ): void {
        $this->lastCheckInDateTime = $value;
    }

    /**
     * Sets the userId property value. UserId associated with this device registration record.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
