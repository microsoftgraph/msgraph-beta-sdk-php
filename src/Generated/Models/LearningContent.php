<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $additionalTags The additionalTags property
    */
    private ?array $additionalTags = null;
    
    /**
     * @var string|null $contentWebUrl The contentWebUrl property
    */
    private ?string $contentWebUrl = null;
    
    /**
     * @var string|null $contributor The contributor property
    */
    private ?string $contributor = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var DateInterval|null $duration The duration property
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var string|null $externalId The externalId property
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var bool|null $isActive The isActive property
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isPremium The isPremium property
    */
    private ?bool $isPremium = null;
    
    /**
     * @var bool|null $isSearchable The isSearchable property
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var string|null $languageTag The languageTag property
    */
    private ?string $languageTag = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $numberOfPages The numberOfPages property
    */
    private ?int $numberOfPages = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $skillTags The skillTags property
    */
    private ?array $skillTags = null;
    
    /**
     * @var string|null $sourceName The sourceName property
    */
    private ?string $sourceName = null;
    
    /**
     * @var string|null $thumbnailWebUrl The thumbnailWebUrl property
    */
    private ?string $thumbnailWebUrl = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new learningContent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalTags property value. The additionalTags property
     * @return array<string>|null
    */
    public function getAdditionalTags(): ?array {
        return $this->additionalTags;
    }

    /**
     * Gets the contentWebUrl property value. The contentWebUrl property
     * @return string|null
    */
    public function getContentWebUrl(): ?string {
        return $this->contentWebUrl;
    }

    /**
     * Gets the contributor property value. The contributor property
     * @return string|null
    */
    public function getContributor(): ?string {
        return $this->contributor;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the duration property value. The duration property
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the externalId property value. The externalId property
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
        return  [
            'additionalTags' => function (ParseNode $n) use ($o) { $o->setAdditionalTags($n->getCollectionOfPrimitiveValues()); },
            'contentWebUrl' => function (ParseNode $n) use ($o) { $o->setContentWebUrl($n->getStringValue()); },
            'contributor' => function (ParseNode $n) use ($o) { $o->setContributor($n->getStringValue()); },
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'skillTags' => function (ParseNode $n) use ($o) { $o->setSkillTags($n->getCollectionOfPrimitiveValues()); },
            'sourceName' => function (ParseNode $n) use ($o) { $o->setSourceName($n->getStringValue()); },
            'thumbnailWebUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailWebUrl($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the isActive property value. The isActive property
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isPremium property value. The isPremium property
     * @return bool|null
    */
    public function getIsPremium(): ?bool {
        return $this->isPremium;
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the languageTag property value. The languageTag property
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the numberOfPages property value. The numberOfPages property
     * @return int|null
    */
    public function getNumberOfPages(): ?int {
        return $this->numberOfPages;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the skillTags property value. The skillTags property
     * @return array<string>|null
    */
    public function getSkillTags(): ?array {
        return $this->skillTags;
    }

    /**
     * Gets the sourceName property value. The sourceName property
     * @return string|null
    */
    public function getSourceName(): ?string {
        return $this->sourceName;
    }

    /**
     * Gets the thumbnailWebUrl property value. The thumbnailWebUrl property
     * @return string|null
    */
    public function getThumbnailWebUrl(): ?string {
        return $this->thumbnailWebUrl;
    }

    /**
     * Gets the title property value. The title property
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
        $writer->writeCollectionOfPrimitiveValues('additionalTags', $this->additionalTags);
        $writer->writeStringValue('contentWebUrl', $this->contentWebUrl);
        $writer->writeStringValue('contributor', $this->contributor);
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
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('skillTags', $this->skillTags);
        $writer->writeStringValue('sourceName', $this->sourceName);
        $writer->writeStringValue('thumbnailWebUrl', $this->thumbnailWebUrl);
        $writer->writeStringValue('title', $this->title);
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
     * Sets the additionalTags property value. The additionalTags property
     *  @param array<string>|null $value Value to set for the additionalTags property.
    */
    public function setAdditionalTags(?array $value ): void {
        $this->additionalTags = $value;
    }

    /**
     * Sets the contentWebUrl property value. The contentWebUrl property
     *  @param string|null $value Value to set for the contentWebUrl property.
    */
    public function setContentWebUrl(?string $value ): void {
        $this->contentWebUrl = $value;
    }

    /**
     * Sets the contributor property value. The contributor property
     *  @param string|null $value Value to set for the contributor property.
    */
    public function setContributor(?string $value ): void {
        $this->contributor = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the duration property value. The duration property
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the externalId property value. The externalId property
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the format property value. The format property
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the isActive property value. The isActive property
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isPremium property value. The isPremium property
     *  @param bool|null $value Value to set for the isPremium property.
    */
    public function setIsPremium(?bool $value ): void {
        $this->isPremium = $value;
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the languageTag property value. The languageTag property
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the numberOfPages property value. The numberOfPages property
     *  @param int|null $value Value to set for the numberOfPages property.
    */
    public function setNumberOfPages(?int $value ): void {
        $this->numberOfPages = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the skillTags property value. The skillTags property
     *  @param array<string>|null $value Value to set for the skillTags property.
    */
    public function setSkillTags(?array $value ): void {
        $this->skillTags = $value;
    }

    /**
     * Sets the sourceName property value. The sourceName property
     *  @param string|null $value Value to set for the sourceName property.
    */
    public function setSourceName(?string $value ): void {
        $this->sourceName = $value;
    }

    /**
     * Sets the thumbnailWebUrl property value. The thumbnailWebUrl property
     *  @param string|null $value Value to set for the thumbnailWebUrl property.
    */
    public function setThumbnailWebUrl(?string $value ): void {
        $this->thumbnailWebUrl = $value;
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
