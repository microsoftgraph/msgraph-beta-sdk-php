<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationSimpleSettingValue>|null $simpleSettingCollectionValue Simple setting collection instance value
    */
    private ?array $simpleSettingCollectionValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingCollectionInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingCollectionInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingCollectionInstance {
        return new DeviceManagementConfigurationSimpleSettingCollectionInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'simpleSettingCollectionValue' => function (ParseNode $n) use ($o) { $o->setSimpleSettingCollectionValue($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSimpleSettingValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the simpleSettingCollectionValue property value. Simple setting collection instance value
     * @return array<DeviceManagementConfigurationSimpleSettingValue>|null
    */
    public function getSimpleSettingCollectionValue(): ?array {
        return $this->simpleSettingCollectionValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('simpleSettingCollectionValue', $this->simpleSettingCollectionValue);
    }

    /**
     * Sets the simpleSettingCollectionValue property value. Simple setting collection instance value
     *  @param array<DeviceManagementConfigurationSimpleSettingValue>|null $value Value to set for the simpleSettingCollectionValue property.
    */
    public function setSimpleSettingCollectionValue(?array $value ): void {
        $this->simpleSettingCollectionValue = $value;
    }

}
