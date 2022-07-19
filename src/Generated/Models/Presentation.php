<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Presentation extends Entity implements Parsable 
{
    /**
     * @var array<DocumentComment>|null $comments The comments property
    */
    private ?array $comments = null;
    
    /**
     * Instantiates a new Presentation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.presentation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Presentation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Presentation {
        return new Presentation();
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<DocumentComment>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comments' => function (ParseNode $n) use ($o) { $o->setComments($n->getCollectionOfObjectValues(array(DocumentComment::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('comments', $this->comments);
    }

    /**
     * Sets the comments property value. The comments property
     *  @param array<DocumentComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value ): void {
        $this->comments = $value;
    }

}
