<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExtractNumberTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new ExtractNumberTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.extractNumberTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtractNumberTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtractNumberTransformation {
        return new ExtractNumberTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(TransformationExtractType::class)),
        ]);
    }

    /**
     * Gets the type property value. The type property
     * @return TransformationExtractType|null
    */
    public function getType(): ?TransformationExtractType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof TransformationExtractType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the type property value. The type property
     * @param TransformationExtractType|null $value Value to set for the type property.
    */
    public function setType(?TransformationExtractType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
