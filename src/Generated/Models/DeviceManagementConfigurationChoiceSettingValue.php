<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingValue extends DeviceManagementConfigurationSettingValue implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingValue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingValue {
        return new DeviceManagementConfigurationChoiceSettingValue();
    }

    /**
     * Gets the children property value. Child settings.
     * @return array<DeviceManagementConfigurationSettingInstance>|null
    */
    public function getChildren(): ?array {
        return $this->getBackingStore()->get('children');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the value property value. Choice setting value: an OptionDefinition ItemId.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the children property value. Child settings.
     *  @param array<DeviceManagementConfigurationSettingInstance>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the value property value. Choice setting value: an OptionDefinition ItemId.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
