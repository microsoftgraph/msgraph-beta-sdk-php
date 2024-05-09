<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubstringTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new SubstringTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.substringTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubstringTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubstringTransformation {
        return new SubstringTransformation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the index property value. The index property
     * @return int|null
    */
    public function getIndex(): ?int {
        $val = $this->getBackingStore()->get('index');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'index'");
    }

    /**
     * Gets the length property value. The length property
     * @return int|null
    */
    public function getLength(): ?int {
        $val = $this->getBackingStore()->get('length');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'length'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeIntegerValue('length', $this->getLength());
    }

    /**
     * Sets the index property value. The index property
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the length property value. The length property
     * @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value): void {
        $this->getBackingStore()->set('length', $value);
    }

}
