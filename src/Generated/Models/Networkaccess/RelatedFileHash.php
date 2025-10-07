<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedFileHash extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedFileHash and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedFileHash');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedFileHash
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedFileHash {
        return new RelatedFileHash();
    }

    /**
     * Gets the algorithm property value. The algorithm property
     * @return Algorithm|null
    */
    public function getAlgorithm(): ?Algorithm {
        $val = $this->getBackingStore()->get('algorithm');
        if (is_null($val) || $val instanceof Algorithm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'algorithm'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'algorithm' => fn(ParseNode $n) => $o->setAlgorithm($n->getEnumValue(Algorithm::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the value property value. The hash value. Required.
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
        $writer->writeEnumValue('algorithm', $this->getAlgorithm());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the algorithm property value. The algorithm property
     * @param Algorithm|null $value Value to set for the algorithm property.
    */
    public function setAlgorithm(?Algorithm $value): void {
        $this->getBackingStore()->set('algorithm', $value);
    }

    /**
     * Sets the value property value. The hash value. Required.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
