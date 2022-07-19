<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LookupResultRow extends Entity implements Parsable 
{
    /**
     * @var string|null $row The row property
    */
    private ?string $row = null;
    
    /**
     * Instantiates a new lookupResultRow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.lookupResultRow');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'row' => function (ParseNode $n) use ($o) { $o->setRow($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the row property value. The row property
     * @return string|null
    */
    public function getRow(): ?string {
        return $this->row;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('row', $this->row);
    }

    /**
     * Sets the row property value. The row property
     *  @param string|null $value Value to set for the row property.
    */
    public function setRow(?string $value ): void {
        $this->row = $value;
    }

}
