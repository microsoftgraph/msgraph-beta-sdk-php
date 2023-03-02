<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnswerKeyword implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new answerKeyword and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnswerKeyword
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnswerKeyword {
        return new AnswerKeyword();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'keywords' => fn(ParseNode $n) => $o->setKeywords($n->getCollectionOfPrimitiveValues()),
            'matchSimilarKeywords' => fn(ParseNode $n) => $o->setMatchSimilarKeywords($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reservedKeywords' => fn(ParseNode $n) => $o->setReservedKeywords($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the keywords property value. A collection of keywords used to trigger the search answer.
     * @return array<string>|null
    */
    public function getKeywords(): ?array {
        return $this->getBackingStore()->get('keywords');
    }

    /**
     * Gets the matchSimilarKeywords property value. If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     * @return bool|null
    */
    public function getMatchSimilarKeywords(): ?bool {
        return $this->getBackingStore()->get('matchSimilarKeywords');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the reservedKeywords property value. Unique keywords that will guarantee the search answer is triggered.
     * @return array<string>|null
    */
    public function getReservedKeywords(): ?array {
        return $this->getBackingStore()->get('reservedKeywords');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->getKeywords());
        $writer->writeBooleanValue('matchSimilarKeywords', $this->getMatchSimilarKeywords());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('reservedKeywords', $this->getReservedKeywords());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the keywords property value. A collection of keywords used to trigger the search answer.
     * @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value): void {
        $this->getBackingStore()->set('keywords', $value);
    }

    /**
     * Sets the matchSimilarKeywords property value. If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     * @param bool|null $value Value to set for the matchSimilarKeywords property.
    */
    public function setMatchSimilarKeywords(?bool $value): void {
        $this->getBackingStore()->set('matchSimilarKeywords', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reservedKeywords property value. Unique keywords that will guarantee the search answer is triggered.
     * @param array<string>|null $value Value to set for the reservedKeywords property.
    */
    public function setReservedKeywords(?array $value): void {
        $this->getBackingStore()->set('reservedKeywords', $value);
    }

}
