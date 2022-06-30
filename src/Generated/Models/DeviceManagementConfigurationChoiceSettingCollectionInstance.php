<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationChoiceSettingValue>|null $choiceSettingCollectionValue Choice setting collection value
    */
    private ?array $choiceSettingCollectionValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingCollectionInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingCollectionInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingCollectionInstance {
        return new DeviceManagementConfigurationChoiceSettingCollectionInstance();
    }

    /**
     * Gets the choiceSettingCollectionValue property value. Choice setting collection value
     * @return array<DeviceManagementConfigurationChoiceSettingValue>|null
    */
    public function getChoiceSettingCollectionValue(): ?array {
        return $this->choiceSettingCollectionValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'choiceSettingCollectionValue' => function (ParseNode $n) use ($o) { $o->setChoiceSettingCollectionValue($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationChoiceSettingValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('choiceSettingCollectionValue', $this->choiceSettingCollectionValue);
    }

    /**
     * Sets the choiceSettingCollectionValue property value. Choice setting collection value
     *  @param array<DeviceManagementConfigurationChoiceSettingValue>|null $value Value to set for the choiceSettingCollectionValue property.
    */
    public function setChoiceSettingCollectionValue(?array $value ): void {
        $this->choiceSettingCollectionValue = $value;
    }

}
