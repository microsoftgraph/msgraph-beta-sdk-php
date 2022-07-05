<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptIntegerParameter extends DeviceHealthScriptParameter implements Parsable 
{
    /**
     * @var int|null $defaultValue The default value of Integer param. Valid values -2147483648 to 2147483647
    */
    private ?int $defaultValue = null;
    
    /**
     * Instantiates a new DeviceHealthScriptIntegerParameter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultValue', $this->defaultValue);
    }

    /**
     * Sets the defaultValue property value. The default value of Integer param. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?int $value ): void {
        $this->defaultValue = $value;
    }

}
