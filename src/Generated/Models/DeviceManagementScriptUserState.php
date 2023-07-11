<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties for user run state of the device management script.
*/
class DeviceManagementScriptUserState extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptUserState {
        return new DeviceManagementScriptUserState();
    }

    /**
     * Gets the deviceRunStates property value. List of run states for this script across all devices of specific user.
     * @return array<DeviceManagementScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        $val = $this->getBackingStore()->get('deviceRunStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScriptDeviceState::class);
            /** @var array<DeviceManagementScriptDeviceState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRunStates'");
    }

    /**
     * Gets the errorDeviceCount property value. Error device count for specific user.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'])),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successDeviceCount' => fn(ParseNode $n) => $o->setSuccessDeviceCount($n->getIntegerValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the successDeviceCount property value. Success device count for specific user.
     * @return int|null
    */
    public function getSuccessDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('successDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successDeviceCount'");
    }

    /**
     * Gets the userPrincipalName property value. User principle name of specific user.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->getDeviceRunStates());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successDeviceCount', $this->getSuccessDeviceCount());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the deviceRunStates property value. List of run states for this script across all devices of specific user.
     * @param array<DeviceManagementScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value): void {
        $this->getBackingStore()->set('deviceRunStates', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Error device count for specific user.
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successDeviceCount property value. Success device count for specific user.
     * @param int|null $value Value to set for the successDeviceCount property.
    */
    public function setSuccessDeviceCount(?int $value): void {
        $this->getBackingStore()->set('successDeviceCount', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principle name of specific user.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
