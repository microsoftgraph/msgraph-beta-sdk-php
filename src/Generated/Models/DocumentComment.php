<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentComment extends Entity implements Parsable 
{
    /**
     * Instantiates a new documentComment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentComment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentComment {
        return new DocumentComment();
    }

    /**
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->getBackingStore()->get('content');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'replies' => fn(ParseNode $n) => $o->setReplies($n->getCollectionOfObjectValues([DocumentCommentReply::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the replies property value. The replies property
     * @return array<DocumentCommentReply>|null
    */
    public function getReplies(): ?array {
        return $this->getBackingStore()->get('replies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeCollectionOfObjectValues('replies', $this->getReplies());
    }

    /**
     * Sets the content property value. The content property
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the replies property value. The replies property
     *  @param array<DocumentCommentReply>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value): void {
        $this->getBackingStore()->set('replies', $value);
    }

}
