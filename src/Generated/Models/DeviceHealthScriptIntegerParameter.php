<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Properties of the  Integer script parameter.
*/
class DeviceHealthScriptIntegerParameter extends DeviceHealthScriptParameter implements Parsable 
{
    /**
     * Instantiates a new DeviceHealthScriptIntegerParameter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceHealthScriptIntegerParameter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptIntegerParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptIntegerParameter {
        return new DeviceHealthScriptIntegerParameter();
    }

    /**
     * Gets the defaultValue property value. The default value of Integer param. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDefaultValue(): ?int {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultValue', $this->getDefaultValue());
    }

    /**
     * Sets the defaultValue property value. The default value of Integer param. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?int $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

}
