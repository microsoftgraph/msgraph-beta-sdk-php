<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TranslationPreferences implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<TranslationLanguageOverride>|null $languageOverrides Translation override behavior for languages, if any.Returned by default. */
    private ?array $languageOverrides = null;
    
    /** @var TranslationBehavior|null $translationBehavior The user's preferred translation behavior.Returned by default. Not nullable. */
    private ?TranslationBehavior $translationBehavior = null;
    
    /** @var array<string>|null $untranslatedLanguages The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only. */
    private ?array $untranslatedLanguages = null;
    
    /**
     * Instantiates a new translationPreferences and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslationPreferences
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TranslationPreferences {
        return new TranslationPreferences();
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
            'languageOverrides' => function (self $o, ParseNode $n) { $o->setLanguageOverrides($n->getCollectionOfObjectValues(TranslationLanguageOverride::class)); },
            'translationBehavior' => function (self $o, ParseNode $n) { $o->setTranslationBehavior($n->getEnumValue(TranslationBehavior::class)); },
            'untranslatedLanguages' => function (self $o, ParseNode $n) { $o->setUntranslatedLanguages($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     * @return array<TranslationLanguageOverride>|null
    */
    public function getLanguageOverrides(): ?array {
        return $this->languageOverrides;
    }

    /**
     * Gets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     * @return TranslationBehavior|null
    */
    public function getTranslationBehavior(): ?TranslationBehavior {
        return $this->translationBehavior;
    }

    /**
     * Gets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     * @return array<string>|null
    */
    public function getUntranslatedLanguages(): ?array {
        return $this->untranslatedLanguages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('languageOverrides', $this->languageOverrides);
        $writer->writeEnumValue('translationBehavior', $this->translationBehavior);
        $writer->writeCollectionOfPrimitiveValues('untranslatedLanguages', $this->untranslatedLanguages);
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
     * Sets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     *  @param array<TranslationLanguageOverride>|null $value Value to set for the languageOverrides property.
    */
    public function setLanguageOverrides(?array $value ): void {
        $this->languageOverrides = $value;
    }

    /**
     * Sets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     *  @param TranslationBehavior|null $value Value to set for the translationBehavior property.
    */
    public function setTranslationBehavior(?TranslationBehavior $value ): void {
        $this->translationBehavior = $value;
    }

    /**
     * Sets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     *  @param array<string>|null $value Value to set for the untranslatedLanguages property.
    */
    public function setUntranslatedLanguages(?array $value ): void {
        $this->untranslatedLanguages = $value;
    }

}
