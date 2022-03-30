<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\Queries\Item\ApplyTags;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\Tag;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplyTagsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<Tag>|null $tagsToAdd  */
    private ?array $tagsToAdd = null;
    
    /** @var array<Tag>|null $tagsToRemove  */
    private ?array $tagsToRemove = null;
    
    /**
     * Instantiates a new applyTagsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyTagsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ApplyTagsRequestBody {
        return new ApplyTagsRequestBody();
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
        return  [
            'tagsToAdd' => function (self $o, ParseNode $n) { $o->setTagsToAdd($n->getCollectionOfObjectValues(Tag::class)); },
            'tagsToRemove' => function (self $o, ParseNode $n) { $o->setTagsToRemove($n->getCollectionOfObjectValues(Tag::class)); },
        ];
    }

    /**
     * Gets the tagsToAdd property value. 
     * @return array<Tag>|null
    */
    public function getTagsToAdd(): ?array {
        return $this->tagsToAdd;
    }

    /**
     * Gets the tagsToRemove property value. 
     * @return array<Tag>|null
    */
    public function getTagsToRemove(): ?array {
        return $this->tagsToRemove;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('tagsToAdd', $this->tagsToAdd);
        $writer->writeCollectionOfObjectValues('tagsToRemove', $this->tagsToRemove);
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
     * Sets the tagsToAdd property value. 
     *  @param array<Tag>|null $value Value to set for the tagsToAdd property.
    */
    public function setTagsToAdd(?array $value ): void {
        $this->tagsToAdd = $value;
    }

    /**
     * Sets the tagsToRemove property value. 
     *  @param array<Tag>|null $value Value to set for the tagsToRemove property.
    */
    public function setTagsToRemove(?array $value ): void {
        $this->tagsToRemove = $value;
    }

}
