<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptUserState extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementScriptDeviceState>|null $deviceRunStates List of run states for this script across all devices of specific user.
    */
    private ?array $deviceRunStates = null;
    
    /**
     * @var int|null $errorDeviceCount Error device count for specific user.
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var int|null $successDeviceCount Success device count for specific user.
    */
    private ?int $successDeviceCount = null;
    
    /**
     * @var string|null $userPrincipalName User principle name of specific user.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceManagementScriptUserState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptUserState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptUserState {
        return new DeviceManagementScriptUserState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceRunStates' => function (ParseNode $n) use ($o) { $o->setDeviceRunStates($n->getCollectionOfObjectValues(array(DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'))); },
            'errorDeviceCount' => function (ParseNode $n) use ($o) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'successDeviceCount' => function (ParseNode $n) use ($o) { $o->setSuccessDeviceCount($n->getIntegerValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
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
