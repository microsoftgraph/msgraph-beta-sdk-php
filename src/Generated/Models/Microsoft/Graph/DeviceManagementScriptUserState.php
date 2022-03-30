<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptUserState extends Entity 
{
    /** @var array<DeviceManagementScriptDeviceState>|null $deviceRunStates List of run states for this script across all devices of specific user. */
    private ?array $deviceRunStates = null;
    
    /** @var int|null $errorDeviceCount Error device count for specific user. */
    private ?int $errorDeviceCount = null;
    
    /** @var int|null $successDeviceCount Success device count for specific user. */
    private ?int $successDeviceCount = null;
    
    /** @var string|null $userPrincipalName User principle name of specific user. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceManagementScriptUserState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptUserState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptUserState {
        return new DeviceManagementScriptUserState();
    }

    /**
     * Gets the deviceRunStates property value. List of run states for this script across all devices of specific user.
     * @return array<DeviceManagementScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        return $this->deviceRunStates;
    }

    /**
     * Gets the errorDeviceCount property value. Error device count for specific user.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceRunStates' => function (self $o, ParseNode $n) { $o->setDeviceRunStates($n->getCollectionOfObjectValues(DeviceManagementScriptDeviceState::class)); },
            'errorDeviceCount' => function (self $o, ParseNode $n) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'successDeviceCount' => function (self $o, ParseNode $n) { $o->setSuccessDeviceCount($n->getIntegerValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the successDeviceCount property value. Success device count for specific user.
     * @return int|null
    */
    public function getSuccessDeviceCount(): ?int {
        return $this->successDeviceCount;
    }

    /**
     * Gets the userPrincipalName property value. User principle name of specific user.
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
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->deviceRunStates);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('successDeviceCount', $this->successDeviceCount);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the deviceRunStates property value. List of run states for this script across all devices of specific user.
     *  @param array<DeviceManagementScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value ): void {
        $this->deviceRunStates = $value;
    }

    /**
     * Sets the errorDeviceCount property value. Error device count for specific user.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the successDeviceCount property value. Success device count for specific user.
     *  @param int|null $value Value to set for the successDeviceCount property.
    */
    public function setSuccessDeviceCount(?int $value ): void {
        $this->successDeviceCount = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principle name of specific user.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
