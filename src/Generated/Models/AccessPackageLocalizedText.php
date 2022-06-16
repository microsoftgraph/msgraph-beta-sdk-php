<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageLocalizedText implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $languageCode The ISO code for the intended language. Required. */
    private ?string $languageCode = null;
    
    /** @var string|null $text The text in the specific language. Required. */
    private ?string $text = null;
    
    /**
     * Instantiates a new accessPackageLocalizedText and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageLocalizedText
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageLocalizedText {
        return new AccessPackageLocalizedText();
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
            'languageCode' => function (self $o, ParseNode $n) { $o->setLanguageCode($n->getStringValue()); },
            'text' => function (self $o, ParseNode $n) { $o->setText($n->getStringValue()); },
        ];
    }

    /**
     * Gets the languageCode property value. The ISO code for the intended language. Required.
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->languageCode;
    }

    /**
     * Gets the text property value. The text in the specific language. Required.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('languageCode', $this->languageCode);
        $writer->writeStringValue('text', $this->text);
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
     * Sets the languageCode property value. The ISO code for the intended language. Required.
     *  @param string|null $value Value to set for the languageCode property.
    */
    public function setLanguageCode(?string $value ): void {
        $this->languageCode = $value;
    }

    /**
     * Sets the text property value. The text in the specific language. Required.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
