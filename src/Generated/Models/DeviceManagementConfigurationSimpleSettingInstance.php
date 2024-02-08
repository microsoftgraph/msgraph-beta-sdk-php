<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Simple setting instance
*/
class DeviceManagementConfigurationSimpleSettingInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSimpleSettingInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingInstance {
        return new DeviceManagementConfigurationSimpleSettingInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'simpleSettingValue' => fn(ParseNode $n) => $o->setSimpleSettingValue($n->getObjectValue([DeviceManagementConfigurationSimpleSettingValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the simpleSettingValue property value. The simpleSettingValue property
     * @return DeviceManagementConfigurationSimpleSettingValue|null
    */
    public function getSimpleSettingValue(): ?DeviceManagementConfigurationSimpleSettingValue {
        $val = $this->getBackingStore()->get('simpleSettingValue');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSimpleSettingValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simpleSettingValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('simpleSettingValue', $this->getSimpleSettingValue());
    }

    /**
     * Sets the simpleSettingValue property value. The simpleSettingValue property
     * @param DeviceManagementConfigurationSimpleSettingValue|null $value Value to set for the simpleSettingValue property.
    */
    public function setSimpleSettingValue(?DeviceManagementConfigurationSimpleSettingValue $value): void {
        $this->getBackingStore()->set('simpleSettingValue', $value);
    }

}
