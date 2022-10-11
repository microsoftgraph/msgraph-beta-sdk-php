<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningContent extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $additionalTags Keywords, topics, and other tags associated with the learning content. Optional.
    */
    private ?array $additionalTags = null;
    
    /**
     * @var string|null $contentWebUrl The content web URL for the learning content. Required.
    */
    private ?string $contentWebUrl = null;
    
    /**
     * @var array<string>|null $contributors The authors, creators, or contributors of the learning content. Optional.
    */
    private ?array $contributors = null;
    
    /**
     * @var DateTime|null $createdDateTime The date when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description or summary for the learning content. Optional.
    */
    private ?string $description = null;
    
    /**
     * @var DateInterval|null $duration The duration of the learning content in seconds. Optional.
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var string|null $externalId Unique external content ID for the learning content. Required.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $format The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
    */
    private ?string $format = null;
    
    /**
     * @var bool|null $isActive Indicates whether the content is active or not. Inactive content will not show up in the UI. The default value is true. Optional.
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isPremium Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
    */
    private ?bool $isPremium = null;
    
    /**
     * @var bool|null $isSearchable Indicates whether the learning content is searchable or not. The default value is true. Optional.
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var string|null $languageTag The language of the learning content, for example, en-us or fr-fr. Required.
    */
    private ?string $languageTag = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $numberOfPages The number of pages of the learning content, for example, 9. Optional.
    */
    private ?int $numberOfPages = null;
    
    /**
     * @var array<string>|null $skillTags The skills tags associated with the learning content. Optional.
    */
    private ?array $skillTags = null;
    
    /**
     * @var string|null $sourceName The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
    */
    private ?string $sourceName = null;
    
    /**
     * @var string|null $thumbnailWebUrl The URL of learning content thumbnail image. Optional.
    */
    private ?string $thumbnailWebUrl = null;
    
    /**
     * @var string|null $title The title of the learning content. Required.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new learningContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.learningContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningContent {
        return new LearningContent();
    }

    /**
     * Gets the additionalTags property value. Keywords, topics, and other tags associated with the learning content. Optional.
     * @return array<string>|null
    */
    public function getAdditionalTags(): ?array {
        return $this->additionalTags;
    }

    /**
     * Gets the contentWebUrl property value. The content web URL for the learning content. Required.
     * @return string|null
    */
    public function getContentWebUrl(): ?string {
        return $this->contentWebUrl;
    }

    /**
     * Gets the contributors property value. The authors, creators, or contributors of the learning content. Optional.
     * @return array<string>|null
    */
    public function getContributors(): ?array {
        return $this->contributors;
    }

    /**
     * Gets the createdDateTime property value. The date when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description or summary for the learning content. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the duration property value. The duration of the learning content in seconds. Optional.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the externalId property value. Unique external content ID for the learning content. Required.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalTags' => function (ParseNode $n) use ($o) { $o->setAdditionalTags($n->getCollectionOfPrimitiveValues()); },
            'contentWebUrl' => function (ParseNode $n) use ($o) { $o->setContentWebUrl($n->getStringValue()); },
            'contributors' => function (ParseNode $n) use ($o) { $o->setContributors($n->getCollectionOfPrimitiveValues()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getDateIntervalValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getStringValue()); },
            'isActive' => function (ParseNode $n) use ($o) { $o->setIsActive($n->getBooleanValue()); },
            'isPremium' => function (ParseNode $n) use ($o) { $o->setIsPremium($n->getBooleanValue()); },
            'isSearchable' => function (ParseNode $n) use ($o) { $o->setIsSearchable($n->getBooleanValue()); },
            'languageTag' => function (ParseNode $n) use ($o) { $o->setLanguageTag($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'numberOfPages' => function (ParseNode $n) use ($o) { $o->setNumberOfPages($n->getIntegerValue()); },
            'skillTags' => function (ParseNode $n) use ($o) { $o->setSkillTags($n->getCollectionOfPrimitiveValues()); },
            'sourceName' => function (ParseNode $n) use ($o) { $o->setSourceName($n->getStringValue()); },
            'thumbnailWebUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailWebUrl($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the format property value. The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the isActive property value. Indicates whether the content is active or not. Inactive content will not show up in the UI. The default value is true. Optional.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isPremium property value. Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
     * @return bool|null
    */
    public function getIsPremium(): ?bool {
        return $this->isPremium;
    }

    /**
     * Gets the isSearchable property value. Indicates whether the learning content is searchable or not. The default value is true. Optional.
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the languageTag property value. The language of the learning content, for example, en-us or fr-fr. Required.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the numberOfPages property value. The number of pages of the learning content, for example, 9. Optional.
     * @return int|null
    */
    public function getNumberOfPages(): ?int {
        return $this->numberOfPages;
    }

    /**
     * Gets the skillTags property value. The skills tags associated with the learning content. Optional.
     * @return array<string>|null
    */
    public function getSkillTags(): ?array {
        return $this->skillTags;
    }

    /**
     * Gets the sourceName property value. The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
     * @return string|null
    */
    public function getSourceName(): ?string {
        return $this->sourceName;
    }

    /**
     * Gets the thumbnailWebUrl property value. The URL of learning content thumbnail image. Optional.
     * @return string|null
    */
    public function getThumbnailWebUrl(): ?string {
        return $this->thumbnailWebUrl;
    }

    /**
     * Gets the title property value. The title of the learning content. Required.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('additionalTags', $this->additionalTags);
        $writer->writeStringValue('contentWebUrl', $this->contentWebUrl);
        $writer->writeCollectionOfPrimitiveValues('contributors', $this->contributors);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeDateIntervalValue('duration', $this->duration);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeStringValue('format', $this->format);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeBooleanValue('isPremium', $this->isPremium);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('numberOfPages', $this->numberOfPages);
        $writer->writeCollectionOfPrimitiveValues('skillTags', $this->skillTags);
        $writer->writeStringValue('sourceName', $this->sourceName);
        $writer->writeStringValue('thumbnailWebUrl', $this->thumbnailWebUrl);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the additionalTags property value. Keywords, topics, and other tags associated with the learning content. Optional.
     *  @param array<string>|null $value Value to set for the additionalTags property.
    */
    public function setAdditionalTags(?array $value ): void {
        $this->additionalTags = $value;
    }

    /**
     * Sets the contentWebUrl property value. The content web URL for the learning content. Required.
     *  @param string|null $value Value to set for the contentWebUrl property.
    */
    public function setContentWebUrl(?string $value ): void {
        $this->contentWebUrl = $value;
    }

    /**
     * Sets the contributors property value. The authors, creators, or contributors of the learning content. Optional.
     *  @param array<string>|null $value Value to set for the contributors property.
    */
    public function setContributors(?array $value ): void {
        $this->contributors = $value;
    }

    /**
     * Sets the createdDateTime property value. The date when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description or summary for the learning content. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the duration property value. The duration of the learning content in seconds. Optional.
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the externalId property value. Unique external content ID for the learning content. Required.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the format property value. The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether the content is active or not. Inactive content will not show up in the UI. The default value is true. Optional.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isPremium property value. Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
     *  @param bool|null $value Value to set for the isPremium property.
    */
    public function setIsPremium(?bool $value ): void {
        $this->isPremium = $value;
    }

    /**
     * Sets the isSearchable property value. Indicates whether the learning content is searchable or not. The default value is true. Optional.
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the languageTag property value. The language of the learning content, for example, en-us or fr-fr. Required.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the numberOfPages property value. The number of pages of the learning content, for example, 9. Optional.
     *  @param int|null $value Value to set for the numberOfPages property.
    */
    public function setNumberOfPages(?int $value ): void {
        $this->numberOfPages = $value;
    }

    /**
     * Sets the skillTags property value. The skills tags associated with the learning content. Optional.
     *  @param array<string>|null $value Value to set for the skillTags property.
    */
    public function setSkillTags(?array $value ): void {
        $this->skillTags = $value;
    }

    /**
     * Sets the sourceName property value. The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
     *  @param string|null $value Value to set for the sourceName property.
    */
    public function setSourceName(?string $value ): void {
        $this->sourceName = $value;
    }

    /**
     * Sets the thumbnailWebUrl property value. The URL of learning content thumbnail image. Optional.
     *  @param string|null $value Value to set for the thumbnailWebUrl property.
    */
    public function setThumbnailWebUrl(?string $value ): void {
        $this->thumbnailWebUrl = $value;
    }

    /**
     * Sets the title property value. The title of the learning content. Required.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
