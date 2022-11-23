<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingInstance {
        return new DeviceManagementConfigurationChoiceSettingInstance();
    }

    /**
     * Gets the choiceSettingValue property value. The choiceSettingValue property
     * @return DeviceManagementConfigurationChoiceSettingValue|null
    */
    public function getChoiceSettingValue(): ?DeviceManagementConfigurationChoiceSettingValue {
        return $this->getBackingStore()->get('choiceSettingValue');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'choiceSettingValue' => fn(ParseNode $n) => $o->setChoiceSettingValue($n->getObjectValue([DeviceManagementConfigurationChoiceSettingValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('choiceSettingValue', $this->getChoiceSettingValue());
    }

    /**
     * Sets the choiceSettingValue property value. The choiceSettingValue property
     *  @param DeviceManagementConfigurationChoiceSettingValue|null $value Value to set for the choiceSettingValue property.
    */
    public function setChoiceSettingValue(?DeviceManagementConfigurationChoiceSettingValue $value): void {
        $this->getBackingStore()->set('choiceSettingValue', $value);
    }

}
