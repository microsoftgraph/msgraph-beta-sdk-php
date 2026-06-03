<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Integer Setting Value Template
*/
class DeviceManagementConfigurationIntegerSettingValueTemplate extends DeviceManagementConfigurationSimpleSettingValueTemplate implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationIntegerSettingValueTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationIntegerSettingValueTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationIntegerSettingValueTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationIntegerSettingValueTemplate {
        return new DeviceManagementConfigurationIntegerSettingValueTemplate();
    }

    /**
     * Gets the defaultValue property value. Integer Setting Value Default Template.
     * @return DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationIntegerSettingValueDefaultTemplate {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationIntegerSettingValueDefaultTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'])),
            'recommendedValueDefinition' => fn(ParseNode $n) => $o->setRecommendedValueDefinition($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4::class, 'createFromDiscriminatorValue'])),
            'requiredValueDefinition' => fn(ParseNode $n) => $o->setRequiredValueDefinition($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recommendedValueDefinition property value. Recommended value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4|null
    */
    public function getRecommendedValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4 {
        $val = $this->getBackingStore()->get('recommendedValueDefinition');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedValueDefinition'");
    }

    /**
     * Gets the requiredValueDefinition property value. Required value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4|null
    */
    public function getRequiredValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4 {
        $val = $this->getBackingStore()->get('requiredValueDefinition');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredValueDefinition'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultValue', $this->getDefaultValue());
        $writer->writeObjectValue('recommendedValueDefinition', $this->getRecommendedValueDefinition());
        $writer->writeObjectValue('requiredValueDefinition', $this->getRequiredValueDefinition());
    }

    /**
     * Sets the defaultValue property value. Integer Setting Value Default Template.
     * @param DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationIntegerSettingValueDefaultTemplate $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the recommendedValueDefinition property value. Recommended value definition.
     * @param DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4|null $value Value to set for the recommendedValueDefinition property.
    */
    public function setRecommendedValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4 $value): void {
        $this->getBackingStore()->set('recommendedValueDefinition', $value);
    }

    /**
     * Sets the requiredValueDefinition property value. Required value definition.
     * @param DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4|null $value Value to set for the requiredValueDefinition property.
    */
    public function setRequiredValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinit_b7e57fe4 $value): void {
        $this->getBackingStore()->set('requiredValueDefinition', $value);
    }

}
