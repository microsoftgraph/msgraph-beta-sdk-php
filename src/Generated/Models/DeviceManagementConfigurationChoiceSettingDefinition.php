<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementConfigurationChoiceSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('defaultOptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultOptionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultOptionId' => fn(ParseNode $n) => $o->setDefaultOptionId($n->getStringValue()),
            'options' => fn(ParseNode $n) => $o->setOptions($n->getCollectionOfObjectValues([DeviceManagementConfigurationOptionDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the options property value. Options for the setting that can be selected
     * @return array<DeviceManagementConfigurationOptionDefinition>|null
    */
    public function getOptions(): ?array {
        $val = $this->getBackingStore()->get('options');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationOptionDefinition::class);
            /** @var array<DeviceManagementConfigurationOptionDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'options'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultOptionId', $this->getDefaultOptionId());
        $writer->writeCollectionOfObjectValues('options', $this->getOptions());
    }

    /**
     * Sets the defaultOptionId property value. Default option for choice setting
     * @param string|null $value Value to set for the defaultOptionId property.
    */
    public function setDefaultOptionId(?string $value): void {
        $this->getBackingStore()->set('defaultOptionId', $value);
    }

    /**
     * Sets the options property value. Options for the setting that can be selected
     * @param array<DeviceManagementConfigurationOptionDefinition>|null $value Value to set for the options property.
    */
    public function setOptions(?array $value): void {
        $this->getBackingStore()->set('options', $value);
    }

}
