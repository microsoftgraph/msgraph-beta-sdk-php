<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Qna extends SearchAnswer implements Parsable 
{
    /**
     * @var DateTime|null $availabilityEndDateTime Timestamp of when the qna will stop to appear as a search result. Set as null for always available.
    */
    private ?DateTime $availabilityEndDateTime = null;
    
    /**
     * @var DateTime|null $availabilityStartDateTime Timestamp of when the qna will start to appear as a search result. Set as null for always available.
    */
    private ?DateTime $availabilityStartDateTime = null;
    
    /**
     * @var array<string>|null $groupIds List of security groups able to view this qna.
    */
    private ?array $groupIds = null;
    
    /**
     * @var bool|null $isSuggested True if this qna was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
    */
    private ?bool $isSuggested = null;
    
    /**
     * @var AnswerKeyword|null $keywords Keywords that trigger this qna to appear in search results.
    */
    private ?AnswerKeyword $keywords = null;
    
    /**
     * @var array<string>|null $languageTags A list of language names that are geographically specific and that this QnA can be viewed in. Each language tag value follows the pattern {language}-{region}. As an example, en-us is English as used in the United States. See supported language tags for the list of possible values.
    */
    private ?array $languageTags = null;
    
    /**
     * @var array<string>|null $platforms List of devices and operating systems able to view this qna. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
    */
    private ?array $platforms = null;
    
    /**
     * @var AnswerState|null $state State of the qna. Possible values are: published, draft, excluded, or unknownFutureValue.
    */
    private ?AnswerState $state = null;
    
    /**
     * @var array<AnswerVariant>|null $targetedVariations Variations of a qna for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
    */
    private ?array $targetedVariations = null;
    
    /**
     * Instantiates a new Qna and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Qna
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Qna {
        return new Qna();
    }

    /**
     * Gets the availabilityEndDateTime property value. Timestamp of when the qna will stop to appear as a search result. Set as null for always available.
     * @return DateTime|null
    */
    public function getAvailabilityEndDateTime(): ?DateTime {
        return $this->availabilityEndDateTime;
    }

    /**
     * Gets the availabilityStartDateTime property value. Timestamp of when the qna will start to appear as a search result. Set as null for always available.
     * @return DateTime|null
    */
    public function getAvailabilityStartDateTime(): ?DateTime {
        return $this->availabilityStartDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityEndDateTime' => function (ParseNode $n) use ($o) { $o->setAvailabilityEndDateTime($n->getDateTimeValue()); },
            'availabilityStartDateTime' => function (ParseNode $n) use ($o) { $o->setAvailabilityStartDateTime($n->getDateTimeValue()); },
            'groupIds' => function (ParseNode $n) use ($o) { $o->setGroupIds($n->getCollectionOfPrimitiveValues()); },
            'isSuggested' => function (ParseNode $n) use ($o) { $o->setIsSuggested($n->getBooleanValue()); },
            'keywords' => function (ParseNode $n) use ($o) { $o->setKeywords($n->getObjectValue(array(AnswerKeyword::class, 'createFromDiscriminatorValue'))); },
            'languageTags' => function (ParseNode $n) use ($o) { $o->setLanguageTags($n->getCollectionOfPrimitiveValues()); },
            'platforms' => function (ParseNode $n) use ($o) { $o->setPlatforms($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(AnswerState::class)); },
            'targetedVariations' => function (ParseNode $n) use ($o) { $o->setTargetedVariations($n->getCollectionOfObjectValues(array(AnswerVariant::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupIds property value. List of security groups able to view this qna.
     * @return array<string>|null
    */
    public function getGroupIds(): ?array {
        return $this->groupIds;
    }

    /**
     * Gets the isSuggested property value. True if this qna was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
     * @return bool|null
    */
    public function getIsSuggested(): ?bool {
        return $this->isSuggested;
    }

    /**
     * Gets the keywords property value. Keywords that trigger this qna to appear in search results.
     * @return AnswerKeyword|null
    */
    public function getKeywords(): ?AnswerKeyword {
        return $this->keywords;
    }

    /**
     * Gets the languageTags property value. A list of language names that are geographically specific and that this QnA can be viewed in. Each language tag value follows the pattern {language}-{region}. As an example, en-us is English as used in the United States. See supported language tags for the list of possible values.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        return $this->languageTags;
    }

    /**
     * Gets the platforms property value. List of devices and operating systems able to view this qna. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
     * @return array<string>|null
    */
    public function getPlatforms(): ?array {
        return $this->platforms;
    }

    /**
     * Gets the state property value. State of the qna. Possible values are: published, draft, excluded, or unknownFutureValue.
     * @return AnswerState|null
    */
    public function getState(): ?AnswerState {
        return $this->state;
    }

    /**
     * Gets the targetedVariations property value. Variations of a qna for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
     * @return array<AnswerVariant>|null
    */
    public function getTargetedVariations(): ?array {
        return $this->targetedVariations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('availabilityEndDateTime', $this->availabilityEndDateTime);
        $writer->writeDateTimeValue('availabilityStartDateTime', $this->availabilityStartDateTime);
        $writer->writeCollectionOfPrimitiveValues('groupIds', $this->groupIds);
        $writer->writeBooleanValue('isSuggested', $this->isSuggested);
        $writer->writeObjectValue('keywords', $this->keywords);
        $writer->writeCollectionOfPrimitiveValues('languageTags', $this->languageTags);
        $writer->writeCollectionOfPrimitiveValues('platforms', $this->platforms);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeCollectionOfObjectValues('targetedVariations', $this->targetedVariations);
    }

    /**
     * Sets the availabilityEndDateTime property value. Timestamp of when the qna will stop to appear as a search result. Set as null for always available.
     *  @param DateTime|null $value Value to set for the availabilityEndDateTime property.
    */
    public function setAvailabilityEndDateTime(?DateTime $value ): void {
        $this->availabilityEndDateTime = $value;
    }

    /**
     * Sets the availabilityStartDateTime property value. Timestamp of when the qna will start to appear as a search result. Set as null for always available.
     *  @param DateTime|null $value Value to set for the availabilityStartDateTime property.
    */
    public function setAvailabilityStartDateTime(?DateTime $value ): void {
        $this->availabilityStartDateTime = $value;
    }

    /**
     * Sets the groupIds property value. List of security groups able to view this qna.
     *  @param array<string>|null $value Value to set for the groupIds property.
    */
    public function setGroupIds(?array $value ): void {
        $this->groupIds = $value;
    }

    /**
     * Sets the isSuggested property value. True if this qna was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
     *  @param bool|null $value Value to set for the isSuggested property.
    */
    public function setIsSuggested(?bool $value ): void {
        $this->isSuggested = $value;
    }

    /**
     * Sets the keywords property value. Keywords that trigger this qna to appear in search results.
     *  @param AnswerKeyword|null $value Value to set for the keywords property.
    */
    public function setKeywords(?AnswerKeyword $value ): void {
        $this->keywords = $value;
    }

    /**
     * Sets the languageTags property value. A list of language names that are geographically specific and that this QnA can be viewed in. Each language tag value follows the pattern {language}-{region}. As an example, en-us is English as used in the United States. See supported language tags for the list of possible values.
     *  @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value ): void {
        $this->languageTags = $value;
    }

    /**
     * Sets the platforms property value. List of devices and operating systems able to view this qna. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
     *  @param array<string>|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?array $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the state property value. State of the qna. Possible values are: published, draft, excluded, or unknownFutureValue.
     *  @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the targetedVariations property value. Variations of a qna for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
     *  @param array<AnswerVariant>|null $value Value to set for the targetedVariations property.
    */
    public function setTargetedVariations(?array $value ): void {
        $this->targetedVariations = $value;
    }

}
