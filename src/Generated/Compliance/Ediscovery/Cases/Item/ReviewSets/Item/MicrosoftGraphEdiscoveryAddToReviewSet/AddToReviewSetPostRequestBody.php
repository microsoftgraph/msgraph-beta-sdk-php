<?php

namespace Microsoft\\Graph\\Beta\\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\MicrosoftGraphEdiscoveryAddToReviewSet;

use Microsoft\\Graph\\Beta\\Generated\Models\Ediscovery\AdditionalDataOptions;
use Microsoft\\Graph\\Beta\\Generated\Models\Ediscovery\SourceCollection;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AddToReviewSetPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AddToReviewSetPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddToReviewSetPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddToReviewSetPostRequestBody {
        return new AddToReviewSetPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the additionalDataOptions property value. The additionalDataOptions property
     * @return AdditionalDataOptions|null
    */
    public function getAdditionalDataOptions(): ?AdditionalDataOptions {
        $val = $this->getBackingStore()->get('additionalDataOptions');
        if (is_null($val) || $val instanceof AdditionalDataOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDataOptions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDataOptions' => fn(ParseNode $n) => $o->setAdditionalDataOptions($n->getEnumValue(AdditionalDataOptions::class)),
            'sourceCollection' => fn(ParseNode $n) => $o->setSourceCollection($n->getObjectValue([SourceCollection::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sourceCollection property value. The sourceCollection property
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
        $writer->writeEnumValue('additionalDataOptions', $this->getAdditionalDataOptions());
        $writer->writeObjectValue('sourceCollection', $this->getSourceCollection());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalDataOptions property value. The additionalDataOptions property
     * @param AdditionalDataOptions|null $value Value to set for the additionalDataOptions property.
    */
    public function setAdditionalDataOptions(?AdditionalDataOptions $value): void {
        $this->getBackingStore()->set('additionalDataOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the sourceCollection property value. The sourceCollection property
     * @param SourceCollection|null $value Value to set for the sourceCollection property.
    */
    public function setSourceCollection(?SourceCollection $value): void {
        $this->getBackingStore()->set('sourceCollection', $value);
    }

}
