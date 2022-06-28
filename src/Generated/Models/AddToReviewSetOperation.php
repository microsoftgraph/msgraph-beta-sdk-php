<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ReviewSet;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\SourceCollection;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddToReviewSetOperation extends CaseOperation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
