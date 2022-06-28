<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentCommentReply extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
