<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationIntegerSettingValueTemplate extends DeviceManagementConfigurationSimpleSettingValueTemplate implements Parsable 
{
    /**
     * @var DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null $defaultValue Integer Setting Value Default Template.
    */
    private ?DeviceManagementConfigurationIntegerSettingValueDefaultTemplate $defaultValue = null;
    
    /**
     * @var DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $recommendedValueDefinition Recommended value definition.
    */
    private ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $recommendedValueDefinition = null;
    
    /**
     * @var DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $requiredValueDefinition Required value definition.
    */
    private ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $requiredValueDefinition = null;
    
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
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getObjectValue(array(DeviceManagementConfigurationIntegerSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'))); },
            'recommendedValueDefinition' => function (ParseNode $n) use ($o) { $o->setRecommendedValueDefinition($n->getObjectValue(array(DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'))); },
            'requiredValueDefinition' => function (ParseNode $n) use ($o) { $o->setRequiredValueDefinition($n->getObjectValue(array(DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the recommendedValueDefinition property value. Recommended value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null
    */
    public function getRecommendedValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate {
        return $this->recommendedValueDefinition;
    }

    /**
     * Gets the requiredValueDefinition property value. Required value definition.
     * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null
    */
    public function getRequiredValueDefinition(): ?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate {
        return $this->requiredValueDefinition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultValue', $this->defaultValue);
        $writer->writeObjectValue('recommendedValueDefinition', $this->recommendedValueDefinition);
        $writer->writeObjectValue('requiredValueDefinition', $this->requiredValueDefinition);
    }

    /**
     * Sets the defaultValue property value. Integer Setting Value Default Template.
     *  @param DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationIntegerSettingValueDefaultTemplate $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the recommendedValueDefinition property value. Recommended value definition.
     *  @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $value Value to set for the recommendedValueDefinition property.
    */
    public function setRecommendedValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $value ): void {
        $this->recommendedValueDefinition = $value;
    }

    /**
     * Sets the requiredValueDefinition property value. Required value definition.
     *  @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null $value Value to set for the requiredValueDefinition property.
    */
    public function setRequiredValueDefinition(?DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $value ): void {
        $this->requiredValueDefinition = $value;
    }

}
