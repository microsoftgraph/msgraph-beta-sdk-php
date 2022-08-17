<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentCommentReply extends Entity implements Parsable 
{
    /**
     * @var string|null $content The content property
    */
    private ?string $content = null;
    
    /**
     * @var string|null $location The location property
    */
    private ?string $location = null;
    
    /**
     * Instantiates a new documentCommentReply and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.documentCommentReply');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentCommentReply
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentCommentReply {
        return new DocumentCommentReply();
    }

    /**
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getStringValue()); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the location property value. The location property
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->content);
        $writer->writeStringValue('location', $this->location);
    }

    /**
     * Sets the content property value. The content property
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the location property value. The location property
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value ): void {
        $this->location = $value;
    }

}
