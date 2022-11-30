<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Document extends Entity implements Parsable 
{
    /**
     * Instantiates a new Document and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Document
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Document {
        return new Document();
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<DocumentComment>|null
    */
    public function getComments(): ?array {
        return $this->getBackingStore()->get('comments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([DocumentComment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('comments', $this->getComments());
    }

    /**
     * Sets the comments property value. The comments property
     *  @param array<DocumentComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

}
