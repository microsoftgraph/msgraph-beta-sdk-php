<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('defaultValue');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'])),
            'recommendedValueDefinition' => fn(ParseNode $n) => $o->setRecommendedValueDefinition($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'])),
            'requiredValueDefinition' => fn(ParseNode $n) => $o->setRequiredValueDefinition($n->getObjectValue([DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recommendedValueDefinition property value. Recommended value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null
    */
    public function getRecommendedValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate {
        return $this->getBackingStore()->get('recommendedValueDefinition');
    }

    /**
     * Gets the requiredValueDefinition property value. Required value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null
    */
    public function getRequiredValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate {
        return $this->getBackingStore()->get('requiredValueDefinition');
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
     *  @param DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationIntegerSettingValueDefaultTemplate $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the recommendedValueDefinition property value. Recommended value definition.
     *  @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $value Value to set for the recommendedValueDefinition property.
    */
    public function setRecommendedValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $value): void {
        $this->getBackingStore()->set('recommendedValueDefinition', $value);
    }

    /**
     * Sets the requiredValueDefinition property value. Required value definition.
     *  @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $value Value to set for the requiredValueDefinition property.
    */
    public function setRequiredValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $value): void {
        $this->getBackingStore()->set('requiredValueDefinition', $value);
    }

}
