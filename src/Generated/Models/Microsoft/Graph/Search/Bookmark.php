<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Search;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DevicePlatformType;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Bookmark extends SearchAnswer 
{
    /** @var DateTime|null $availabilityEndDateTime Timestamp of when the bookmark will stop to appear as a search result. Set as null for always available. */
    private ?DateTime $availabilityEndDateTime = null;
    
    /** @var DateTime|null $availabilityStartDateTime Timestamp of when the bookmark will start to appear as a search result. Set as null for always available. */
    private ?DateTime $availabilityStartDateTime = null;
    
    /** @var array<string>|null $categories Categories commonly used to describe this bookmark. For example, IT and HR. */
    private ?array $categories = null;
    
    /** @var array<string>|null $groupIds List of security groups able to view this bookmark. */
    private ?array $groupIds = null;
    
    /** @var bool|null $isSuggested True if this bookmark was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only. */
    private ?bool $isSuggested = null;
    
    /** @var AnswerKeyword|null $keywords Keywords that trigger this bookmark to appear in search results. */
    private ?AnswerKeyword $keywords = null;
    
    /** @var array<string>|null $languageTags A list of language names that are geographically specific and that this bookmark can be viewed in. Each language tag value follows the pattern {language}-{REGION}. As an example, en-US is English as used in the United States. See supported language tags for the list of possible values. */
    private ?array $languageTags = null;
    
    /** @var array<DevicePlatformType>|null $platforms List of devices and operating systems able to view this bookmark. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP. */
    private ?array $platforms = null;
    
    /** @var array<string>|null $powerAppIds List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks, such as to enter vacation time or to report expenses on the search results page. */
    private ?array $powerAppIds = null;
    
    /** @var AnswerState|null $state State of the bookmark. Possible values are: published, draft, excluded, or unknownFutureValue. */
    private ?AnswerState $state = null;
    
    /** @var array<AnswerVariant>|null $targetedVariations Variations of a bookmark for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations. */
    private ?array $targetedVariations = null;
    
    /**
     * Instantiates a new bookmark and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Bookmark
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Bookmark {
        return new Bookmark();
    }

    /**
     * Gets the availabilityEndDateTime property value. Timestamp of when the bookmark will stop to appear as a search result. Set as null for always available.
     * @return DateTime|null
    */
    public function getAvailabilityEndDateTime(): ?DateTime {
        return $this->availabilityEndDateTime;
    }

    /**
     * Gets the availabilityStartDateTime property value. Timestamp of when the bookmark will start to appear as a search result. Set as null for always available.
     * @return DateTime|null
    */
    public function getAvailabilityStartDateTime(): ?DateTime {
        return $this->availabilityStartDateTime;
    }

    /**
     * Gets the categories property value. Categories commonly used to describe this bookmark. For example, IT and HR.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityEndDateTime' => function (self $o, ParseNode $n) { $o->setAvailabilityEndDateTime($n->getDateTimeValue()); },
            'availabilityStartDateTime' => function (self $o, ParseNode $n) { $o->setAvailabilityStartDateTime($n->getDateTimeValue()); },
            'categories' => function (self $o, ParseNode $n) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'groupIds' => function (self $o, ParseNode $n) { $o->setGroupIds($n->getCollectionOfPrimitiveValues()); },
            'isSuggested' => function (self $o, ParseNode $n) { $o->setIsSuggested($n->getBooleanValue()); },
            'keywords' => function (self $o, ParseNode $n) { $o->setKeywords($n->getObjectValue(AnswerKeyword::class)); },
            'languageTags' => function (self $o, ParseNode $n) { $o->setLanguageTags($n->getCollectionOfPrimitiveValues()); },
            'platforms' => function (self $o, ParseNode $n) { $o->setPlatforms($n->getCollectionOfEnumValues(DevicePlatformType::class)); },
            'powerAppIds' => function (self $o, ParseNode $n) { $o->setPowerAppIds($n->getCollectionOfPrimitiveValues()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(AnswerState::class)); },
            'targetedVariations' => function (self $o, ParseNode $n) { $o->setTargetedVariations($n->getCollectionOfObjectValues(AnswerVariant::class)); },
        ]);
    }

    /**
     * Gets the groupIds property value. List of security groups able to view this bookmark.
     * @return array<string>|null
    */
    public function getGroupIds(): ?array {
        return $this->groupIds;
    }

    /**
     * Gets the isSuggested property value. True if this bookmark was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
     * @return bool|null
    */
    public function getIsSuggested(): ?bool {
        return $this->isSuggested;
    }

    /**
     * Gets the keywords property value. Keywords that trigger this bookmark to appear in search results.
     * @return AnswerKeyword|null
    */
    public function getKeywords(): ?AnswerKeyword {
        return $this->keywords;
    }

    /**
     * Gets the languageTags property value. A list of language names that are geographically specific and that this bookmark can be viewed in. Each language tag value follows the pattern {language}-{REGION}. As an example, en-US is English as used in the United States. See supported language tags for the list of possible values.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        return $this->languageTags;
    }

    /**
     * Gets the platforms property value. List of devices and operating systems able to view this bookmark. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
     * @return array<DevicePlatformType>|null
    */
    public function getPlatforms(): ?array {
        return $this->platforms;
    }

    /**
     * Gets the powerAppIds property value. List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks, such as to enter vacation time or to report expenses on the search results page.
     * @return array<string>|null
    */
    public function getPowerAppIds(): ?array {
        return $this->powerAppIds;
    }

    /**
     * Gets the state property value. State of the bookmark. Possible values are: published, draft, excluded, or unknownFutureValue.
     * @return AnswerState|null
    */
    public function getState(): ?AnswerState {
        return $this->state;
    }

    /**
     * Gets the targetedVariations property value. Variations of a bookmark for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
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
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeCollectionOfPrimitiveValues('groupIds', $this->groupIds);
        $writer->writeBooleanValue('isSuggested', $this->isSuggested);
        $writer->writeObjectValue('keywords', $this->keywords);
        $writer->writeCollectionOfPrimitiveValues('languageTags', $this->languageTags);
        $writer->writeCollectionOfEnumValues('platforms', $this->platforms);
        $writer->writeCollectionOfPrimitiveValues('powerAppIds', $this->powerAppIds);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeCollectionOfObjectValues('targetedVariations', $this->targetedVariations);
    }

    /**
     * Sets the availabilityEndDateTime property value. Timestamp of when the bookmark will stop to appear as a search result. Set as null for always available.
     *  @param DateTime|null $value Value to set for the availabilityEndDateTime property.
    */
    public function setAvailabilityEndDateTime(?DateTime $value ): void {
        $this->availabilityEndDateTime = $value;
    }

    /**
     * Sets the availabilityStartDateTime property value. Timestamp of when the bookmark will start to appear as a search result. Set as null for always available.
     *  @param DateTime|null $value Value to set for the availabilityStartDateTime property.
    */
    public function setAvailabilityStartDateTime(?DateTime $value ): void {
        $this->availabilityStartDateTime = $value;
    }

    /**
     * Sets the categories property value. Categories commonly used to describe this bookmark. For example, IT and HR.
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the groupIds property value. List of security groups able to view this bookmark.
     *  @param array<string>|null $value Value to set for the groupIds property.
    */
    public function setGroupIds(?array $value ): void {
        $this->groupIds = $value;
    }

    /**
     * Sets the isSuggested property value. True if this bookmark was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
     *  @param bool|null $value Value to set for the isSuggested property.
    */
    public function setIsSuggested(?bool $value ): void {
        $this->isSuggested = $value;
    }

    /**
     * Sets the keywords property value. Keywords that trigger this bookmark to appear in search results.
     *  @param AnswerKeyword|null $value Value to set for the keywords property.
    */
    public function setKeywords(?AnswerKeyword $value ): void {
        $this->keywords = $value;
    }

    /**
     * Sets the languageTags property value. A list of language names that are geographically specific and that this bookmark can be viewed in. Each language tag value follows the pattern {language}-{REGION}. As an example, en-US is English as used in the United States. See supported language tags for the list of possible values.
     *  @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value ): void {
        $this->languageTags = $value;
    }

    /**
     * Sets the platforms property value. List of devices and operating systems able to view this bookmark. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
     *  @param array<DevicePlatformType>|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?array $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the powerAppIds property value. List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks, such as to enter vacation time or to report expenses on the search results page.
     *  @param array<string>|null $value Value to set for the powerAppIds property.
    */
    public function setPowerAppIds(?array $value ): void {
        $this->powerAppIds = $value;
    }

    /**
     * Sets the state property value. State of the bookmark. Possible values are: published, draft, excluded, or unknownFutureValue.
     *  @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the targetedVariations property value. Variations of a bookmark for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
     *  @param array<AnswerVariant>|null $value Value to set for the targetedVariations property.
    */
    public function setTargetedVariations(?array $value ): void {
        $this->targetedVariations = $value;
    }

}
