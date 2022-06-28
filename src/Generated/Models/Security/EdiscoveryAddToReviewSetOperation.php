<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryAddToReviewSetOperation extends CaseOperation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EdiscoveryReviewSet|null $reviewSet eDiscovery review set to which items matching source collection query gets added.
    */
    private ?EdiscoveryReviewSet $reviewSet = null;
    
    /**
     * @var EdiscoverySearch|null $search eDiscovery search that gets added to review set.
    */
    private ?EdiscoverySearch $search = null;
    
    /**
     * Instantiates a new EdiscoveryAddToReviewSetOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryAddToReviewSetOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryAddToReviewSetOperation {
        return new EdiscoveryAddToReviewSetOperation();
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
            'reviewSet' => function (ParseNode $n) use ($o) { $o->setReviewSet($n->getObjectValue(array(EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'))); },
            'search' => function (ParseNode $n) use ($o) { $o->setSearch($n->getObjectValue(array(EdiscoverySearch::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the reviewSet property value. eDiscovery review set to which items matching source collection query gets added.
     * @return EdiscoveryReviewSet|null
    */
    public function getReviewSet(): ?EdiscoveryReviewSet {
        return $this->reviewSet;
    }

    /**
     * Gets the search property value. eDiscovery search that gets added to review set.
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        return $this->search;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('reviewSet', $this->reviewSet);
        $writer->writeObjectValue('search', $this->search);
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
     * Sets the reviewSet property value. eDiscovery review set to which items matching source collection query gets added.
     *  @param EdiscoveryReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?EdiscoveryReviewSet $value ): void {
        $this->reviewSet = $value;
    }

    /**
     * Sets the search property value. eDiscovery search that gets added to review set.
     *  @param EdiscoverySearch|null $value Value to set for the search property.
    */
    public function setSearch(?EdiscoverySearch $value ): void {
        $this->search = $value;
    }

}
