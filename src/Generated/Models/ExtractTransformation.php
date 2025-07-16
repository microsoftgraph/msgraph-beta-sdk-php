<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExtractTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new ExtractTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.extractTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtractTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtractTransformation {
        return new ExtractTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'value2' => fn(ParseNode $n) => $o->setValue2($n->getStringValue()),
        ]);
    }

    /**
     * Gets the type property value. The type of extract transformation to apply.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the value property value. The value to be used as part of the transformation.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Gets the value2 property value. An optional secondary value to be used when dealing with between extract operations.
     * @return string|null
    */
    public function getValue2(): ?string {
        $val = $this->getBackingStore()->get('value2');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value2'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeStringValue('value2', $this->getValue2());
    }

    /**
     * Sets the type property value. The type of extract transformation to apply.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the value property value. The value to be used as part of the transformation.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

    /**
     * Sets the value2 property value. An optional secondary value to be used when dealing with between extract operations.
     * @param string|null $value Value to set for the value2 property.
    */
    public function setValue2(?string $value): void {
        $this->getBackingStore()->set('value2', $value);
    }

}
