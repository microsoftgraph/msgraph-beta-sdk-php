<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageLocalizedContent implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $defaultText The fallback string, which is used when a requested localization is not available. Required. */
    private ?string $defaultText = null;
    
    /** @var array<AccessPackageLocalizedText>|null $localizedTexts Content represented in a format for a specific locale. */
    private ?array $localizedTexts = null;
    
    /**
     * Instantiates a new accessPackageLocalizedContent and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageLocalizedContent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageLocalizedContent {
        return new AccessPackageLocalizedContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultText property value. The fallback string, which is used when a requested localization is not available. Required.
     * @return string|null
    */
    public function getDefaultText(): ?string {
        return $this->defaultText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'defaultText' => function (self $o, ParseNode $n) { $o->setDefaultText($n->getStringValue()); },
            'localizedTexts' => function (self $o, ParseNode $n) { $o->setLocalizedTexts($n->getCollectionOfObjectValues(AccessPackageLocalizedText::class)); },
        ];
    }

    /**
     * Gets the localizedTexts property value. Content represented in a format for a specific locale.
     * @return array<AccessPackageLocalizedText>|null
    */
    public function getLocalizedTexts(): ?array {
        return $this->localizedTexts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultText', $this->defaultText);
        $writer->writeCollectionOfObjectValues('localizedTexts', $this->localizedTexts);
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
     * Sets the defaultText property value. The fallback string, which is used when a requested localization is not available. Required.
     *  @param string|null $value Value to set for the defaultText property.
    */
    public function setDefaultText(?string $value ): void {
        $this->defaultText = $value;
    }

    /**
     * Sets the localizedTexts property value. Content represented in a format for a specific locale.
     *  @param array<AccessPackageLocalizedText>|null $value Value to set for the localizedTexts property.
    */
    public function setLocalizedTexts(?array $value ): void {
        $this->localizedTexts = $value;
    }

}
