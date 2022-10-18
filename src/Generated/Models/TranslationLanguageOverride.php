<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TranslationLanguageOverride implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $languageTag The language to apply the override.Returned by default. Not nullable.
    */
    private ?string $languageTag = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TranslationBehavior|null $translationBehavior The translation override behavior for the language, if any.Returned by default. Not nullable.
    */
    private ?TranslationBehavior $translationBehavior = null;
    
    /**
     * Instantiates a new translationLanguageOverride and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.translationLanguageOverride');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslationLanguageOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranslationLanguageOverride {
        return new TranslationLanguageOverride();
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
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'translationBehavior' => fn(ParseNode $n) => $o->setTranslationBehavior($n->getEnumValue(TranslationBehavior::class)),
        ];
    }

    /**
     * Gets the languageTag property value. The language to apply the override.Returned by default. Not nullable.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the translationBehavior property value. The translation override behavior for the language, if any.Returned by default. Not nullable.
     * @return TranslationBehavior|null
    */
    public function getTranslationBehavior(): ?TranslationBehavior {
        return $this->translationBehavior;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('translationBehavior', $this->translationBehavior);
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
     * Sets the languageTag property value. The language to apply the override.Returned by default. Not nullable.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the translationBehavior property value. The translation override behavior for the language, if any.Returned by default. Not nullable.
     *  @param TranslationBehavior|null $value Value to set for the translationBehavior property.
    */
    public function setTranslationBehavior(?TranslationBehavior $value ): void {
        $this->translationBehavior = $value;
    }

}
