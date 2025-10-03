<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddToReviewSetOperation extends CaseOperation implements Parsable 
{
    /**
     * Instantiates a new AddToReviewSetOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'reviewSet' => fn(ParseNode $n) => $o->setReviewSet($n->getObjectValue([ReviewSet::class, 'createFromDiscriminatorValue'])),
            'sourceCollection' => fn(ParseNode $n) => $o->setSourceCollection($n->getObjectValue([SourceCollection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the reviewSet property value. The review set to which items matching the source collection query are added to.
     * @return ReviewSet|null
    */
    public function getReviewSet(): ?ReviewSet {
        $val = $this->getBackingStore()->get('reviewSet');
        if (is_null($val) || $val instanceof ReviewSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewSet'");
    }

    /**
     * Gets the sourceCollection property value. The sourceCollection that items are being added from.
     * @return SourceCollection|null
    */
    public function getSourceCollection(): ?SourceCollection {
        $val = $this->getBackingStore()->get('sourceCollection');
        if (is_null($val) || $val instanceof SourceCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceCollection'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('reviewSet', $this->getReviewSet());
        $writer->writeObjectValue('sourceCollection', $this->getSourceCollection());
    }

    /**
     * Sets the reviewSet property value. The review set to which items matching the source collection query are added to.
     * @param ReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?ReviewSet $value): void {
        $this->getBackingStore()->set('reviewSet', $value);
    }

    /**
     * Sets the sourceCollection property value. The sourceCollection that items are being added from.
     * @param SourceCollection|null $value Value to set for the sourceCollection property.
    */
    public function setSourceCollection(?SourceCollection $value): void {
        $this->getBackingStore()->set('sourceCollection', $value);
    }

}
