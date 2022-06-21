<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnswerKeyword implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $keywords A collection of keywords used to trigger the search answer.
    */
    private ?array $keywords = null;
    
    /**
     * @var bool|null $matchSimilarKeywords If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
    */
    private ?bool $matchSimilarKeywords = null;
    
    /**
     * @var array<string>|null $reservedKeywords Unique keywords that will guarantee the search answer is triggered.
    */
    private ?array $reservedKeywords = null;
    
    /**
     * Instantiates a new answerKeyword and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
        return  [
            'keywords' => function (ParseNode $n) use ($o) { $o->setKeywords($n->getCollectionOfPrimitiveValues()); },
            'matchSimilarKeywords' => function (ParseNode $n) use ($o) { $o->setMatchSimilarKeywords($n->getBooleanValue()); },
            'reservedKeywords' => function (ParseNode $n) use ($o) { $o->setReservedKeywords($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the keywords property value. A collection of keywords used to trigger the search answer.
     * @return array<string>|null
    */
    public function getKeywords(): ?array {
        return $this->keywords;
    }

    /**
     * Gets the matchSimilarKeywords property value. If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     * @return bool|null
    */
    public function getMatchSimilarKeywords(): ?bool {
        return $this->matchSimilarKeywords;
    }

    /**
     * Gets the reservedKeywords property value. Unique keywords that will guarantee the search answer is triggered.
     * @return array<string>|null
    */
    public function getReservedKeywords(): ?array {
        return $this->reservedKeywords;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->keywords);
        $writer->writeBooleanValue('matchSimilarKeywords', $this->matchSimilarKeywords);
        $writer->writeCollectionOfPrimitiveValues('reservedKeywords', $this->reservedKeywords);
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
     * Sets the keywords property value. A collection of keywords used to trigger the search answer.
     *  @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value ): void {
        $this->keywords = $value;
    }

    /**
     * Sets the matchSimilarKeywords property value. If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     *  @param bool|null $value Value to set for the matchSimilarKeywords property.
    */
    public function setMatchSimilarKeywords(?bool $value ): void {
        $this->matchSimilarKeywords = $value;
    }

    /**
     * Sets the reservedKeywords property value. Unique keywords that will guarantee the search answer is triggered.
     *  @param array<string>|null $value Value to set for the reservedKeywords property.
    */
    public function setReservedKeywords(?array $value ): void {
        $this->reservedKeywords = $value;
    }

}
