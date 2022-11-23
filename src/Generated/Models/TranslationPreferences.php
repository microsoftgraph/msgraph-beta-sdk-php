<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TranslationPreferences implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new translationPreferences and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslationPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranslationPreferences {
        return new TranslationPreferences();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'languageOverrides' => fn(ParseNode $n) => $o->setLanguageOverrides($n->getCollectionOfObjectValues([TranslationLanguageOverride::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'translationBehavior' => fn(ParseNode $n) => $o->setTranslationBehavior($n->getEnumValue(TranslationBehavior::class)),
            'untranslatedLanguages' => fn(ParseNode $n) => $o->setUntranslatedLanguages($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     * @return array<TranslationLanguageOverride>|null
    */
    public function getLanguageOverrides(): ?array {
        return $this->getBackingStore()->get('languageOverrides');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     * @return TranslationBehavior|null
    */
    public function getTranslationBehavior(): ?TranslationBehavior {
        return $this->getBackingStore()->get('translationBehavior');
    }

    /**
     * Gets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     * @return array<string>|null
    */
    public function getUntranslatedLanguages(): ?array {
        return $this->getBackingStore()->get('untranslatedLanguages');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('languageOverrides', $this->getLanguageOverrides());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('translationBehavior', $this->getTranslationBehavior());
        $writer->writeCollectionOfPrimitiveValues('untranslatedLanguages', $this->getUntranslatedLanguages());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     *  @param array<TranslationLanguageOverride>|null $value Value to set for the languageOverrides property.
    */
    public function setLanguageOverrides(?array $value): void {
        $this->getBackingStore()->set('languageOverrides', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     *  @param TranslationBehavior|null $value Value to set for the translationBehavior property.
    */
    public function setTranslationBehavior(?TranslationBehavior $value): void {
        $this->getBackingStore()->set('translationBehavior', $value);
    }

    /**
     * Sets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     *  @param array<string>|null $value Value to set for the untranslatedLanguages property.
    */
    public function setUntranslatedLanguages(?array $value): void {
        $this->getBackingStore()->set('untranslatedLanguages', $value);
    }

}
