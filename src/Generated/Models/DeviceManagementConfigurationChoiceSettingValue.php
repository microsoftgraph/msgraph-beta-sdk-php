<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingValue extends DeviceManagementConfigurationSettingValue implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationSettingInstance>|null $children Child settings.
    */
    private ?array $children = null;
    
    /**
     * @var string|null $value Choice setting value: an OptionDefinition ItemId.
    */
    private ?string $value = null;
    
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
        return $this->children;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => function (ParseNode $n) use ($o) { $o->setChildren($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'))); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the value property value. Choice setting value: an OptionDefinition ItemId.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeStringValue('value', $this->value);
    }

    /**
     * Sets the children property value. Child settings.
     *  @param array<DeviceManagementConfigurationSettingInstance>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the value property value. Choice setting value: an OptionDefinition ItemId.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
