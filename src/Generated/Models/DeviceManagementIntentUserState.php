<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentUserState extends Entity implements Parsable 
{
    /**
     * @var int|null $deviceCount Count of Devices that belongs to a user for an intent
    */
    private ?int $deviceCount = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime Last modified date time of an intent report
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var ComplianceStatus|null $state The state property
    */
    private ?ComplianceStatus $state = null;
    
    /**
     * @var string|null $userName The user name that is being reported on a device
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name that is being reported on a device
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceManagementIntentUserState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementIntentUserState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentUserState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentUserState {
        return new DeviceManagementIntentUserState();
    }

    /**
     * Gets the deviceCount property value. Count of Devices that belongs to a user for an intent
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
            'lastReportedDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ComplianceStatus::class)); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Last modified date time of an intent report
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the state property value. The state property
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->state;
    }

    /**
     * Gets the userName property value. The user name that is being reported on a device
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name that is being reported on a device
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
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the deviceCount property value. Count of Devices that belongs to a user for an intent
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of an intent report
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userName property value. The user name that is being reported on a device
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name that is being reported on a device
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
