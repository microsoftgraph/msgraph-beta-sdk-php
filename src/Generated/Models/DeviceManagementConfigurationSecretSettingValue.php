<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSecretSettingValue extends DeviceManagementConfigurationSimpleSettingValue implements Parsable 
{
    /**
     * @var string|null $value Value of the secret setting.
    */
    private ?string $value = null;
    
    /**
     * @var DeviceManagementConfigurationSecretSettingValueState|null $valueState Gets or sets a value indicating the encryption state of the Value property. Possible values are: invalid, notEncrypted, encryptedValueToken.
    */
    private ?DeviceManagementConfigurationSecretSettingValueState $valueState = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSecretSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
            'valueState' => function (ParseNode $n) use ($o) { $o->setValueState($n->getEnumValue(DeviceManagementConfigurationSecretSettingValueState::class)); },
        ]);
    }

    /**
     * Gets the value property value. Value of the secret setting.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the valueState property value. Gets or sets a value indicating the encryption state of the Value property. Possible values are: invalid, notEncrypted, encryptedValueToken.
     * @return DeviceManagementConfigurationSecretSettingValueState|null
    */
    public function getValueState(): ?DeviceManagementConfigurationSecretSettingValueState {
        return $this->valueState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('value', $this->value);
        $writer->writeEnumValue('valueState', $this->valueState);
    }

    /**
     * Sets the value property value. Value of the secret setting.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

    /**
     * Sets the valueState property value. Gets or sets a value indicating the encryption state of the Value property. Possible values are: invalid, notEncrypted, encryptedValueToken.
     *  @param DeviceManagementConfigurationSecretSettingValueState|null $value Value to set for the valueState property.
    */
    public function setValueState(?DeviceManagementConfigurationSecretSettingValueState $value ): void {
        $this->valueState = $value;
    }

}
