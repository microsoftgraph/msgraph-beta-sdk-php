<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Device Access Rules in Exchange.
*/
class DeviceManagementExchangeAccessRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementExchangeAccessRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeAccessRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeAccessRule {
        return new DeviceManagementExchangeAccessRule();
    }

    /**
     * Gets the accessLevel property value. Access Level in Exchange.
     * @return DeviceManagementExchangeAccessLevel|null
    */
    public function getAccessLevel(): ?DeviceManagementExchangeAccessLevel {
        $val = $this->getBackingStore()->get('accessLevel');
        if (is_null($val) || $val instanceof DeviceManagementExchangeAccessLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessLevel'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceClass property value. Device Class which will be impacted by this rule.
     * @return DeviceManagementExchangeDeviceClass|null
    */
    public function getDeviceClass(): ?DeviceManagementExchangeDeviceClass {
        $val = $this->getBackingStore()->get('deviceClass');
        if (is_null($val) || $val instanceof DeviceManagementExchangeDeviceClass) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceClass'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessLevel' => fn(ParseNode $n) => $o->setAccessLevel($n->getEnumValue(DeviceManagementExchangeAccessLevel::class)),
            'deviceClass' => fn(ParseNode $n) => $o->setDeviceClass($n->getObjectValue([DeviceManagementExchangeDeviceClass::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessLevel', $this->getAccessLevel());
        $writer->writeObjectValue('deviceClass', $this->getDeviceClass());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessLevel property value. Access Level in Exchange.
     * @param DeviceManagementExchangeAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?DeviceManagementExchangeAccessLevel $value): void {
        $this->getBackingStore()->set('accessLevel', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceClass property value. Device Class which will be impacted by this rule.
     * @param DeviceManagementExchangeDeviceClass|null $value Value to set for the deviceClass property.
    */
    public function setDeviceClass(?DeviceManagementExchangeDeviceClass $value): void {
        $this->getBackingStore()->set('deviceClass', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
