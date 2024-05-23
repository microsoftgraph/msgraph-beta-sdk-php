<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContainsTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new ContainsTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.containsTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContainsTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContainsTransformation {
        return new ContainsTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'output' => fn(ParseNode $n) => $o->setOutput($n->getObjectValue([TransformationAttribute::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the output property value. The output property
     * @return TransformationAttribute|null
    */
    public function getOutput(): ?TransformationAttribute {
        $val = $this->getBackingStore()->get('output');
        if (is_null($val) || $val instanceof TransformationAttribute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'output'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('output', $this->getOutput());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the output property value. The output property
     * @param TransformationAttribute|null $value Value to set for the output property.
    */
    public function setOutput(?TransformationAttribute $value): void {
        $this->getBackingStore()->set('output', $value);
    }

    /**
     * Sets the value property value. The value to be used as part of the transformation.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
