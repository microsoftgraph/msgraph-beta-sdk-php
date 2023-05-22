<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionDefinition': return new DeviceManagementConfigurationSimpleSettingCollectionDefinition();
            }
        }
        return new DeviceManagementConfigurationSimpleSettingDefinition();
    }

    /**
     * Gets the defaultValue property value. Default setting value for this setting.
     * @return DeviceManagementConfigurationSettingValue|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationSettingValue {
        return $this->getBackingStore()->get('defaultValue');
    }

    /**
     * Gets the dependedOnBy property value. list of child settings that depend on this setting.
     * @return array<DeviceManagementConfigurationSettingDependedOnBy>|null
    */
    public function getDependedOnBy(): ?array {
        return $this->getBackingStore()->get('dependedOnBy');
    }

    /**
     * Gets the dependentOn property value. list of parent settings this setting is dependent on.
     * @return array<DeviceManagementConfigurationDependentOn>|null
    */
    public function getDependentOn(): ?array {
        return $this->getBackingStore()->get('dependentOn');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getObjectValue([DeviceManagementConfigurationSettingValue::class, 'createFromDiscriminatorValue'])),
            'dependedOnBy' => fn(ParseNode $n) => $o->setDependedOnBy($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDependedOnBy::class, 'createFromDiscriminatorValue'])),
            'dependentOn' => fn(ParseNode $n) => $o->setDependentOn($n->getCollectionOfObjectValues([DeviceManagementConfigurationDependentOn::class, 'createFromDiscriminatorValue'])),
            'valueDefinition' => fn(ParseNode $n) => $o->setValueDefinition($n->getObjectValue([DeviceManagementConfigurationSettingValueDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the valueDefinition property value. Definition of the value for this setting.
     * @return DeviceManagementConfigurationSettingValueDefinition|null
    */
    public function getValueDefinition(): ?DeviceManagementConfigurationSettingValueDefinition {
        return $this->getBackingStore()->get('valueDefinition');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultValue', $this->getDefaultValue());
        $writer->writeCollectionOfObjectValues('dependedOnBy', $this->getDependedOnBy());
        $writer->writeCollectionOfObjectValues('dependentOn', $this->getDependentOn());
        $writer->writeObjectValue('valueDefinition', $this->getValueDefinition());
    }

    /**
     * Sets the defaultValue property value. Default setting value for this setting.
     * @param DeviceManagementConfigurationSettingValue|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationSettingValue $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the dependedOnBy property value. list of child settings that depend on this setting.
     * @param array<DeviceManagementConfigurationSettingDependedOnBy>|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?array $value): void {
        $this->getBackingStore()->set('dependedOnBy', $value);
    }

    /**
     * Sets the dependentOn property value. list of parent settings this setting is dependent on.
     * @param array<DeviceManagementConfigurationDependentOn>|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?array $value): void {
        $this->getBackingStore()->set('dependentOn', $value);
    }

    /**
     * Sets the valueDefinition property value. Definition of the value for this setting.
     * @param DeviceManagementConfigurationSettingValueDefinition|null $value Value to set for the valueDefinition property.
    */
    public function setValueDefinition(?DeviceManagementConfigurationSettingValueDefinition $value): void {
        $this->getBackingStore()->set('valueDefinition', $value);
    }

}
