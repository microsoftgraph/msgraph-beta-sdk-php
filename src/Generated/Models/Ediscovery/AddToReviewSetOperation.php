<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddToReviewSetOperation extends CaseOperation implements Parsable 
{
    /**
     * @var ReviewSet|null $reviewSet The review set to which items matching the source collection query are added to.
    */
    private ?ReviewSet $reviewSet = null;
    
    /**
     * @var SourceCollection|null $sourceCollection The sourceCollection that items are being added from.
    */
    private ?SourceCollection $sourceCollection = null;
    
    /**
     * Instantiates a new AddToReviewSetOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.addToReviewSetOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddToReviewSetOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddToReviewSetOperation {
        return new AddToReviewSetOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'reviewSet' => function (ParseNode $n) use ($o) { $o->setReviewSet($n->getObjectValue(array(ReviewSet::class, 'createFromDiscriminatorValue'))); },
            'sourceCollection' => function (ParseNode $n) use ($o) { $o->setSourceCollection($n->getObjectValue(array(SourceCollection::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the reviewSet property value. The review set to which items matching the source collection query are added to.
     * @return ReviewSet|null
    */
    public function getReviewSet(): ?ReviewSet {
        return $this->reviewSet;
    }

    /**
     * Gets the sourceCollection property value. The sourceCollection that items are being added from.
     * @return SourceCollection|null
    */
    public function getSourceCollection(): ?SourceCollection {
        return $this->sourceCollection;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('reviewSet', $this->reviewSet);
        $writer->writeObjectValue('sourceCollection', $this->sourceCollection);
    }

    /**
     * Sets the reviewSet property value. The review set to which items matching the source collection query are added to.
     *  @param ReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?ReviewSet $value ): void {
        $this->reviewSet = $value;
    }

    /**
     * Sets the sourceCollection property value. The sourceCollection that items are being added from.
     *  @param SourceCollection|null $value Value to set for the sourceCollection property.
    */
    public function setSourceCollection(?SourceCollection $value ): void {
        $this->sourceCollection = $value;
    }

}
