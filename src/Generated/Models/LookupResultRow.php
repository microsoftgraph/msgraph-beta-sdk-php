<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LookupResultRow extends Entity implements Parsable 
{
    /**
     * Instantiates a new LookupResultRow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LookupResultRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LookupResultRow {
        return new LookupResultRow();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'row' => fn(ParseNode $n) => $o->setRow($n->getStringValue()),
        ]);
    }

    /**
     * Gets the row property value. The row property
     * @return string|null
    */
    public function getRow(): ?string {
        $val = $this->getBackingStore()->get('row');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'row'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('row', $this->getRow());
    }

    /**
     * Sets the row property value. The row property
     * @param string|null $value Value to set for the row property.
    */
    public function setRow(?string $value): void {
        $this->getBackingStore()->set('row', $value);
    }

}
