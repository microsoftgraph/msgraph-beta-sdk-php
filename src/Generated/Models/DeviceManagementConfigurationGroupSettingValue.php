<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationGroupSettingValue extends DeviceManagementConfigurationSettingValue implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationSettingInstance>|null $children Collection of child setting instances contained within this GroupSetting
    */
    private ?array $children = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingValue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingValue {
        return new DeviceManagementConfigurationGroupSettingValue();
    }

    /**
     * Gets the children property value. Collection of child setting instances contained within this GroupSetting
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->children);
    }

    /**
     * Sets the children property value. Collection of child setting instances contained within this GroupSetting
     *  @param array<DeviceManagementConfigurationSettingInstance>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

}
