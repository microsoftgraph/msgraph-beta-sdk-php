<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JoinTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new JoinTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.joinTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JoinTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JoinTransformation {
        return new JoinTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'input2' => fn(ParseNode $n) => $o->setInput2($n->getObjectValue([TransformationAttribute::class, 'createFromDiscriminatorValue'])),
            'separator' => fn(ParseNode $n) => $o->setSeparator($n->getStringValue()),
        ]);
    }

    /**
     * Gets the input2 property value. The input2 property
     * @return TransformationAttribute|null
    */
    public function getInput2(): ?TransformationAttribute {
        $val = $this->getBackingStore()->get('input2');
        if (is_null($val) || $val instanceof TransformationAttribute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'input2'");
    }

    /**
     * Gets the separator property value. The separator value to be used.
     * @return string|null
    */
    public function getSeparator(): ?string {
        $val = $this->getBackingStore()->get('separator');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'separator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('input2', $this->getInput2());
        $writer->writeStringValue('separator', $this->getSeparator());
    }

    /**
     * Sets the input2 property value. The input2 property
     * @param TransformationAttribute|null $value Value to set for the input2 property.
    */
    public function setInput2(?TransformationAttribute $value): void {
        $this->getBackingStore()->set('input2', $value);
    }

    /**
     * Sets the separator property value. The separator value to be used.
     * @param string|null $value Value to set for the separator property.
    */
    public function setSeparator(?string $value): void {
        $this->getBackingStore()->set('separator', $value);
    }

}
