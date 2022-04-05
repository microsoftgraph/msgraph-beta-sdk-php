<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use Microsoft\Graph\Beta\Generated\Models\DevicePlatformType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnswerVariant implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $description Answer variation description shown on search results page. */
    private ?string $description = null;
    
    /** @var string|null $displayName Answer variation name displayed in search results. */
    private ?string $displayName = null;
    
    /** @var string|null $languageTag The languageTag property */
    private ?string $languageTag = null;
    
    /** @var DevicePlatformType|null $platform The platform property */
    private ?DevicePlatformType $platform = null;
    
    /** @var string|null $webUrl Answer variation URL link. When users click this answer variation in search results, they will go to this URL. */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new answerVariant and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnswerVariant
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AnswerVariant {
        return new AnswerVariant();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Answer variation description shown on search results page.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Answer variation name displayed in search results.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'languageTag' => function (self $o, ParseNode $n) { $o->setLanguageTag($n->getStringValue()); },
            'platform' => function (self $o, ParseNode $n) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
            'webUrl' => function (self $o, ParseNode $n) { $o->setWebUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the languageTag property value. The languageTag property
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the platform property value. The platform property
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Gets the webUrl property value. Answer variation URL link. When users click this answer variation in search results, they will go to this URL.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeStringValue('webUrl', $this->webUrl);
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
     * Sets the description property value. Answer variation description shown on search results page.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Answer variation name displayed in search results.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the languageTag property value. The languageTag property
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the platform property value. The platform property
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the webUrl property value. Answer variation URL link. When users click this answer variation in search results, they will go to this URL.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
