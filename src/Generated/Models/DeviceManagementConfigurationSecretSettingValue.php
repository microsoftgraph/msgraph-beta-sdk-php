<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Graph model for a secret setting value
*/
class DeviceManagementConfigurationSecretSettingValue extends DeviceManagementConfigurationSimpleSettingValue implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSecretSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSecretSettingValue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSecretSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSecretSettingValue {
        return new DeviceManagementConfigurationSecretSettingValue();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'valueState' => fn(ParseNode $n) => $o->setValueState($n->getEnumValue(DeviceManagementConfigurationSecretSettingValueState::class)),
        ]);
    }

    /**
     * Gets the value property value. Value of the secret setting.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Gets the valueState property value. type tracking the encryption state of a secret setting value
     * @return DeviceManagementConfigurationSecretSettingValueState|null
    */
    public function getValueState(): ?DeviceManagementConfigurationSecretSettingValueState {
        $val = $this->getBackingStore()->get('valueState');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSecretSettingValueState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeEnumValue('valueState', $this->getValueState());
    }

    /**
     * Sets the value property value. Value of the secret setting.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

    /**
     * Sets the valueState property value. type tracking the encryption state of a secret setting value
     * @param DeviceManagementConfigurationSecretSettingValueState|null $value Value to set for the valueState property.
    */
    public function setValueState(?DeviceManagementConfigurationSecretSettingValueState $value): void {
        $this->getBackingStore()->set('valueState', $value);
    }

}
