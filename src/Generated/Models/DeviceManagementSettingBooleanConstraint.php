<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Constraint the enforces a particular boolean value
*/
class DeviceManagementSettingBooleanConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new deviceManagementSettingBooleanConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingBooleanConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingBooleanConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingBooleanConstraint {
        return new DeviceManagementSettingBooleanConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the value property value. The boolean value to compare against
     * @return bool|null
    */
    public function getValue(): ?bool {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. The boolean value to compare against
     * @param bool|null $value Value to set for the value property.
    */
    public function setValue(?bool $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
