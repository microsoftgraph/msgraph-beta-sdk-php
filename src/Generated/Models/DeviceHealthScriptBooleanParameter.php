<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptBooleanParameter extends DeviceHealthScriptParameter implements Parsable 
{
    /**
     * @var bool|null $defaultValue The default value of boolean param
    */
    private ?bool $defaultValue = null;
    
    /**
     * Instantiates a new DeviceHealthScriptBooleanParameter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceHealthScriptBooleanParameter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptBooleanParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptBooleanParameter {
        return new DeviceHealthScriptBooleanParameter();
    }

    /**
     * Gets the defaultValue property value. The default value of boolean param
     * @return bool|null
    */
    public function getDefaultValue(): ?bool {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('defaultValue', $this->defaultValue);
    }

    /**
     * Sets the defaultValue property value. The default value of boolean param
     *  @param bool|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?bool $value ): void {
        $this->defaultValue = $value;
    }

}
