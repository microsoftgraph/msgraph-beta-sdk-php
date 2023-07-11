<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Base properties of the script parameter.
*/
class DeviceHealthScriptBooleanParameter extends DeviceHealthScriptParameter implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceHealthScriptBooleanParameter and sets the default values.
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
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_bool($val)) {
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
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the defaultValue property value. The default value of boolean param
     * @param bool|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?bool $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

}
