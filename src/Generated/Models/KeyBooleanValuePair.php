<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KeyBooleanValuePair extends KeyTypedValuePair implements Parsable 
{
    /**
     * @var bool|null $value The Boolean value of the key-value pair.
    */
    private ?bool $value = null;
    
    /**
     * Instantiates a new KeyBooleanValuePair and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.keyBooleanValuePair');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyBooleanValuePair
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyBooleanValuePair {
        return new KeyBooleanValuePair();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the value property value. The Boolean value of the key-value pair.
     * @return bool|null
    */
    public function getValue(): ?bool {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('value', $this->value);
    }

    /**
     * Sets the value property value. The Boolean value of the key-value pair.
     *  @param bool|null $value Value to set for the value property.
    */
    public function setValue(?bool $value ): void {
        $this->value = $value;
    }

}
