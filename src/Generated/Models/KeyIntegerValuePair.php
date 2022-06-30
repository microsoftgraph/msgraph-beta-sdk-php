<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KeyIntegerValuePair extends KeyTypedValuePair implements Parsable 
{
    /**
     * @var int|null $value The integer value of the key-value pair.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new KeyIntegerValuePair and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyIntegerValuePair
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyIntegerValuePair {
        return new KeyIntegerValuePair();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the value property value. The integer value of the key-value pair.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('value', $this->value);
    }

    /**
     * Sets the value property value. The integer value of the key-value pair.
     *  @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value ): void {
        $this->value = $value;
    }

}
