<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationGroupSettingInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * @var DeviceManagementConfigurationGroupSettingValue|null $groupSettingValue The groupSettingValue property
    */
    private ?DeviceManagementConfigurationGroupSettingValue $groupSettingValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingInstance {
        return new DeviceManagementConfigurationGroupSettingInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupSettingValue' => function (ParseNode $n) use ($o) { $o->setGroupSettingValue($n->getObjectValue(array(DeviceManagementConfigurationGroupSettingValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupSettingValue property value. The groupSettingValue property
     * @return DeviceManagementConfigurationGroupSettingValue|null
    */
    public function getGroupSettingValue(): ?DeviceManagementConfigurationGroupSettingValue {
        return $this->groupSettingValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('groupSettingValue', $this->groupSettingValue);
    }

    /**
     * Sets the groupSettingValue property value. The groupSettingValue property
     *  @param DeviceManagementConfigurationGroupSettingValue|null $value Value to set for the groupSettingValue property.
    */
    public function setGroupSettingValue(?DeviceManagementConfigurationGroupSettingValue $value ): void {
        $this->groupSettingValue = $value;
    }

}
