<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\AddToReviewSet;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\AdditionalDataOptions;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\SourceCollection;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddToReviewSetRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AdditionalDataOptions|null $additionalDataOptions  */
    private ?AdditionalDataOptions $additionalDataOptions = null;
    
    /** @var SourceCollection|null $sourceCollection  */
    private ?SourceCollection $sourceCollection = null;
    
    /**
     * Instantiates a new addToReviewSetRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddToReviewSetRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AddToReviewSetRequestBody {
        return new AddToReviewSetRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalDataOptions property value. 
     * @return AdditionalDataOptions|null
    */
    public function getAdditionalDataOptions(): ?AdditionalDataOptions {
        return $this->additionalDataOptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'additionalDataOptions' => function (self $o, ParseNode $n) { $o->setAdditionalDataOptions($n->getEnumValue(AdditionalDataOptions::class)); },
            'sourceCollection' => function (self $o, ParseNode $n) { $o->setSourceCollection($n->getObjectValue(SourceCollection::class)); },
        ];
    }

    /**
     * Gets the sourceCollection property value. 
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
        $writer->writeEnumValue('additionalDataOptions', $this->additionalDataOptions);
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
     * Sets the additionalDataOptions property value. 
     *  @param AdditionalDataOptions|null $value Value to set for the additionalDataOptions property.
    */
    public function setAdditionalDataOptions(?AdditionalDataOptions $value ): void {
        $this->additionalDataOptions = $value;
    }

    /**
     * Sets the sourceCollection property value. 
     *  @param SourceCollection|null $value Value to set for the sourceCollection property.
    */
    public function setSourceCollection(?SourceCollection $value ): void {
        $this->sourceCollection = $value;
    }

}
