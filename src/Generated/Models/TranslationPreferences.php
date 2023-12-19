<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'languageOverrides' => fn(ParseNode $n) => $o->setLanguageOverrides($n->getCollectionOfObjectValues([TranslationLanguageOverride::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'translationBehavior' => fn(ParseNode $n) => $o->setTranslationBehavior($n->getEnumValue(TranslationPreferences_translationBehavior::class)),
            'untranslatedLanguages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUntranslatedLanguages($val);
            },
        ];
    }

    /**
     * Gets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     * @return array<TranslationLanguageOverride>|null
    */
    public function getLanguageOverrides(): ?array {
        $val = $this->getBackingStore()->get('languageOverrides');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TranslationLanguageOverride::class);
            /** @var array<TranslationLanguageOverride>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageOverrides'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     * @return TranslationPreferences_translationBehavior|null
    */
    public function getTranslationBehavior(): ?TranslationPreferences_translationBehavior {
        $val = $this->getBackingStore()->get('translationBehavior');
        if (is_null($val) || $val instanceof TranslationPreferences_translationBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'translationBehavior'");
    }

    /**
     * Gets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     * @return array<string>|null
    */
    public function getUntranslatedLanguages(): ?array {
        $val = $this->getBackingStore()->get('untranslatedLanguages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'untranslatedLanguages'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the languageOverrides property value. Translation override behavior for languages, if any.Returned by default.
     * @param array<TranslationLanguageOverride>|null $value Value to set for the languageOverrides property.
    */
    public function setLanguageOverrides(?array $value): void {
        $this->getBackingStore()->set('languageOverrides', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the translationBehavior property value. The user's preferred translation behavior.Returned by default. Not nullable.
     * @param TranslationPreferences_translationBehavior|null $value Value to set for the translationBehavior property.
    */
    public function setTranslationBehavior(?TranslationPreferences_translationBehavior $value): void {
        $this->getBackingStore()->set('translationBehavior', $value);
    }

    /**
     * Sets the untranslatedLanguages property value. The list of languages the user does not need translated. This is computed from the authoringLanguages collection in regionalAndLanguageSettings, and the languageOverrides collection in translationPreferences. The list specifies neutral culture values that include the language code without any country or region association. For example, it would specify 'fr' for the neutral French culture, but not 'fr-FR' for the French culture in France. Returned by default. Read only.
     * @param array<string>|null $value Value to set for the untranslatedLanguages property.
    */
    public function setUntranslatedLanguages(?array $value): void {
        $this->getBackingStore()->set('untranslatedLanguages', $value);
    }

}
