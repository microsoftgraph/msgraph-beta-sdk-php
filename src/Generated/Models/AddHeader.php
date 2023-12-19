<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddHeader extends MarkContent implements Parsable 
{
    /**
     * Instantiates a new addHeader and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.addHeader');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddHeader
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddHeader {
        return new AddHeader();
    }

    /**
     * Gets the alignment property value. The alignment property
     * @return AddHeader_alignment|null
    */
    public function getAlignment(): ?AddHeader_alignment {
        $val = $this->getBackingStore()->get('alignment');
        if (is_null($val) || $val instanceof AddHeader_alignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alignment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alignment' => fn(ParseNode $n) => $o->setAlignment($n->getEnumValue(AddHeader_alignment::class)),
            'margin' => fn(ParseNode $n) => $o->setMargin($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the margin property value. The margin property
     * @return int|null
    */
    public function getMargin(): ?int {
        $val = $this->getBackingStore()->get('margin');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'margin'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('alignment', $this->getAlignment());
        $writer->writeIntegerValue('margin', $this->getMargin());
    }

    /**
     * Sets the alignment property value. The alignment property
     * @param AddHeader_alignment|null $value Value to set for the alignment property.
    */
    public function setAlignment(?AddHeader_alignment $value): void {
        $this->getBackingStore()->set('alignment', $value);
    }

    /**
     * Sets the margin property value. The margin property
     * @param int|null $value Value to set for the margin property.
    */
    public function setMargin(?int $value): void {
        $this->getBackingStore()->set('margin', $value);
    }

}
