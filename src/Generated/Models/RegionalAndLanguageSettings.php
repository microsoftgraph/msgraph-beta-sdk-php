<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RegionalAndLanguageSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new RegionalAndLanguageSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionalAndLanguageSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegionalAndLanguageSettings {
        return new RegionalAndLanguageSettings();
    }

    /**
     * Gets the authoringLanguages property value. Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
     * @return array<LocaleInfo>|null
    */
    public function getAuthoringLanguages(): ?array {
        $val = $this->getBackingStore()->get('authoringLanguages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocaleInfo::class);
            /** @var array<LocaleInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authoringLanguages'");
    }

    /**
     * Gets the defaultDisplayLanguage property value. The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
     * @return LocaleInfo|null
    */
    public function getDefaultDisplayLanguage(): ?LocaleInfo {
        $val = $this->getBackingStore()->get('defaultDisplayLanguage');
        if (is_null($val) || $val instanceof LocaleInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultDisplayLanguage'");
    }

    /**
     * Gets the defaultRegionalFormat property value. The locale that drives the default date, time, and calendar formatting.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultRegionalFormat(): ?LocaleInfo {
        $val = $this->getBackingStore()->get('defaultRegionalFormat');
        if (is_null($val) || $val instanceof LocaleInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultRegionalFormat'");
    }

    /**
     * Gets the defaultSpeechInputLanguage property value. The language a user expected to use as input for text to speech scenarios.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultSpeechInputLanguage(): ?LocaleInfo {
        $val = $this->getBackingStore()->get('defaultSpeechInputLanguage');
        if (is_null($val) || $val instanceof LocaleInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultSpeechInputLanguage'");
    }

    /**
     * Gets the defaultTranslationLanguage property value. The language a user expects to have documents, emails, and messages translated into.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultTranslationLanguage(): ?LocaleInfo {
        $val = $this->getBackingStore()->get('defaultTranslationLanguage');
        if (is_null($val) || $val instanceof LocaleInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultTranslationLanguage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authoringLanguages' => fn(ParseNode $n) => $o->setAuthoringLanguages($n->getCollectionOfObjectValues([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            'defaultDisplayLanguage' => fn(ParseNode $n) => $o->setDefaultDisplayLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            'defaultRegionalFormat' => fn(ParseNode $n) => $o->setDefaultRegionalFormat($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            'defaultSpeechInputLanguage' => fn(ParseNode $n) => $o->setDefaultSpeechInputLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            'defaultTranslationLanguage' => fn(ParseNode $n) => $o->setDefaultTranslationLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            'regionalFormatOverrides' => fn(ParseNode $n) => $o->setRegionalFormatOverrides($n->getObjectValue([RegionalFormatOverrides::class, 'createFromDiscriminatorValue'])),
            'translationPreferences' => fn(ParseNode $n) => $o->setTranslationPreferences($n->getObjectValue([TranslationPreferences::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the regionalFormatOverrides property value. Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
     * @return RegionalFormatOverrides|null
    */
    public function getRegionalFormatOverrides(): ?RegionalFormatOverrides {
        $val = $this->getBackingStore()->get('regionalFormatOverrides');
        if (is_null($val) || $val instanceof RegionalFormatOverrides) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionalFormatOverrides'");
    }

    /**
     * Gets the translationPreferences property value. The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
     * @return TranslationPreferences|null
    */
    public function getTranslationPreferences(): ?TranslationPreferences {
        $val = $this->getBackingStore()->get('translationPreferences');
        if (is_null($val) || $val instanceof TranslationPreferences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'translationPreferences'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authoringLanguages', $this->getAuthoringLanguages());
        $writer->writeObjectValue('defaultDisplayLanguage', $this->getDefaultDisplayLanguage());
        $writer->writeObjectValue('defaultRegionalFormat', $this->getDefaultRegionalFormat());
        $writer->writeObjectValue('defaultSpeechInputLanguage', $this->getDefaultSpeechInputLanguage());
        $writer->writeObjectValue('defaultTranslationLanguage', $this->getDefaultTranslationLanguage());
        $writer->writeObjectValue('regionalFormatOverrides', $this->getRegionalFormatOverrides());
        $writer->writeObjectValue('translationPreferences', $this->getTranslationPreferences());
    }

    /**
     * Sets the authoringLanguages property value. Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
     * @param array<LocaleInfo>|null $value Value to set for the authoringLanguages property.
    */
    public function setAuthoringLanguages(?array $value): void {
        $this->getBackingStore()->set('authoringLanguages', $value);
    }

    /**
     * Sets the defaultDisplayLanguage property value. The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
     * @param LocaleInfo|null $value Value to set for the defaultDisplayLanguage property.
    */
    public function setDefaultDisplayLanguage(?LocaleInfo $value): void {
        $this->getBackingStore()->set('defaultDisplayLanguage', $value);
    }

    /**
     * Sets the defaultRegionalFormat property value. The locale that drives the default date, time, and calendar formatting.Returned by default.
     * @param LocaleInfo|null $value Value to set for the defaultRegionalFormat property.
    */
    public function setDefaultRegionalFormat(?LocaleInfo $value): void {
        $this->getBackingStore()->set('defaultRegionalFormat', $value);
    }

    /**
     * Sets the defaultSpeechInputLanguage property value. The language a user expected to use as input for text to speech scenarios.Returned by default.
     * @param LocaleInfo|null $value Value to set for the defaultSpeechInputLanguage property.
    */
    public function setDefaultSpeechInputLanguage(?LocaleInfo $value): void {
        $this->getBackingStore()->set('defaultSpeechInputLanguage', $value);
    }

    /**
     * Sets the defaultTranslationLanguage property value. The language a user expects to have documents, emails, and messages translated into.Returned by default.
     * @param LocaleInfo|null $value Value to set for the defaultTranslationLanguage property.
    */
    public function setDefaultTranslationLanguage(?LocaleInfo $value): void {
        $this->getBackingStore()->set('defaultTranslationLanguage', $value);
    }

    /**
     * Sets the regionalFormatOverrides property value. Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
     * @param RegionalFormatOverrides|null $value Value to set for the regionalFormatOverrides property.
    */
    public function setRegionalFormatOverrides(?RegionalFormatOverrides $value): void {
        $this->getBackingStore()->set('regionalFormatOverrides', $value);
    }

    /**
     * Sets the translationPreferences property value. The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
     * @param TranslationPreferences|null $value Value to set for the translationPreferences property.
    */
    public function setTranslationPreferences(?TranslationPreferences $value): void {
        $this->getBackingStore()->set('translationPreferences', $value);
    }

}
