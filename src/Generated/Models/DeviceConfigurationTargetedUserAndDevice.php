<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationTargetedUserAndDevice implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $deviceId The id of the device in the checkin. */
    private ?string $deviceId = null;
    
    /** @var string|null $deviceName The name of the device in the checkin. */
    private ?string $deviceName = null;
    
    /** @var DateTime|null $lastCheckinDateTime Last checkin time for this user/device pair. */
    private ?DateTime $lastCheckinDateTime = null;
    
    /** @var string|null $userDisplayName The display name of the user in the checkin */
    private ?string $userDisplayName = null;
    
    /** @var string|null $userId The id of the user in the checkin. */
    private ?string $userId = null;
    
    /** @var string|null $userPrincipalName The UPN of the user in the checkin. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceConfigurationTargetedUserAndDevice and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationTargetedUserAndDevice {
        return new DeviceConfigurationTargetedUserAndDevice();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. The id of the device in the checkin.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The name of the device in the checkin.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'lastCheckinDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckinDateTime($n->getDateTimeValue()); },
            'userDisplayName' => function (self $o, ParseNode $n) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastCheckinDateTime property value. Last checkin time for this user/device pair.
     * @return DateTime|null
    */
    public function getLastCheckinDateTime(): ?DateTime {
        return $this->lastCheckinDateTime;
    }

    /**
     * Gets the userDisplayName property value. The display name of the user in the checkin
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. The id of the user in the checkin.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The UPN of the user in the checkin.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->lastCheckinDateTime);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceId property value. The id of the device in the checkin.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The name of the device in the checkin.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the lastCheckinDateTime property value. Last checkin time for this user/device pair.
     *  @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value ): void {
        $this->lastCheckinDateTime = $value;
    }

    /**
     * Sets the userDisplayName property value. The display name of the user in the checkin
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. The id of the user in the checkin.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The UPN of the user in the checkin.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
