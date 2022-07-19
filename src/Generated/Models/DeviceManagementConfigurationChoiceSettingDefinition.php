<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * @var string|null $defaultOptionId Default option for choice setting
    */
    private ?string $defaultOptionId = null;
    
    /**
     * @var array<DeviceManagementConfigurationOptionDefinition>|null $options Options for the setting that can be selected
    */
    private ?array $options = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionDefinition': return new DeviceManagementConfigurationChoiceSettingCollectionDefinition();
            }
        }
        return new DeviceManagementConfigurationChoiceSettingDefinition();
    }

    /**
     * Gets the defaultOptionId property value. Default option for choice setting
     * @return string|null
    */
    public function getDefaultOptionId(): ?string {
        return $this->defaultOptionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultOptionId' => function (ParseNode $n) use ($o) { $o->setDefaultOptionId($n->getStringValue()); },
            'options' => function (ParseNode $n) use ($o) { $o->setOptions($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationOptionDefinition::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the options property value. Options for the setting that can be selected
     * @return array<DeviceManagementConfigurationOptionDefinition>|null
    */
    public function getOptions(): ?array {
        return $this->options;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultOptionId', $this->defaultOptionId);
        $writer->writeCollectionOfObjectValues('options', $this->options);
    }

    /**
     * Sets the defaultOptionId property value. Default option for choice setting
     *  @param string|null $value Value to set for the defaultOptionId property.
    */
    public function setDefaultOptionId(?string $value ): void {
        $this->defaultOptionId = $value;
    }

    /**
     * Sets the options property value. Options for the setting that can be selected
     *  @param array<DeviceManagementConfigurationOptionDefinition>|null $value Value to set for the options property.
    */
    public function setOptions(?array $value ): void {
        $this->options = $value;
    }

}
