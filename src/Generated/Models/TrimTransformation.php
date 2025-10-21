<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrimTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new TrimTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.trimTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrimTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrimTransformation {
        return new TrimTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(TransformationTrimType::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the type property value. The type property
     * @return TransformationTrimType|null
    */
    public function getType(): ?TransformationTrimType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof TransformationTrimType) {
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the type property value. The type property
     * @param TransformationTrimType|null $value Value to set for the type property.
    */
    public function setType(?TransformationTrimType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the value property value. The value to be used as part of the transformation.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
