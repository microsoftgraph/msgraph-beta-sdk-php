<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegionalAndLanguageSettings extends Entity 
{
    /** @var array<LocaleInfo>|null $authoringLanguages Prioritized list of languages the user reads and authors in.Returned by default. Not nullable. */
    private ?array $authoringLanguages = null;
    
    /** @var LocaleInfo|null $defaultDisplayLanguage The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable. */
    private ?LocaleInfo $defaultDisplayLanguage = null;
    
    /** @var LocaleInfo|null $defaultRegionalFormat The locale that drives the default date, time, and calendar formatting.Returned by default. */
    private ?LocaleInfo $defaultRegionalFormat = null;
    
    /** @var LocaleInfo|null $defaultSpeechInputLanguage The language a user expected to use as input for text to speech scenarios.Returned by default. */
    private ?LocaleInfo $defaultSpeechInputLanguage = null;
    
    /** @var LocaleInfo|null $defaultTranslationLanguage The language a user expects to have documents, emails, and messages translated into.Returned by default. */
    private ?LocaleInfo $defaultTranslationLanguage = null;
    
    /** @var RegionalFormatOverrides|null $regionalFormatOverrides Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default. */
    private ?RegionalFormatOverrides $regionalFormatOverrides = null;
    
    /** @var TranslationPreferences|null $translationPreferences The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable. */
    private ?TranslationPreferences $translationPreferences = null;
    
    /**
     * Instantiates a new regionalAndLanguageSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionalAndLanguageSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RegionalAndLanguageSettings {
        return new RegionalAndLanguageSettings();
    }

    /**
     * Gets the authoringLanguages property value. Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
     * @return array<LocaleInfo>|null
    */
    public function getAuthoringLanguages(): ?array {
        return $this->authoringLanguages;
    }

    /**
     * Gets the defaultDisplayLanguage property value. The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
     * @return LocaleInfo|null
    */
    public function getDefaultDisplayLanguage(): ?LocaleInfo {
        return $this->defaultDisplayLanguage;
    }

    /**
     * Gets the defaultRegionalFormat property value. The locale that drives the default date, time, and calendar formatting.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultRegionalFormat(): ?LocaleInfo {
        return $this->defaultRegionalFormat;
    }

    /**
     * Gets the defaultSpeechInputLanguage property value. The language a user expected to use as input for text to speech scenarios.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultSpeechInputLanguage(): ?LocaleInfo {
        return $this->defaultSpeechInputLanguage;
    }

    /**
     * Gets the defaultTranslationLanguage property value. The language a user expects to have documents, emails, and messages translated into.Returned by default.
     * @return LocaleInfo|null
    */
    public function getDefaultTranslationLanguage(): ?LocaleInfo {
        return $this->defaultTranslationLanguage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'authoringLanguages' => function (self $o, ParseNode $n) { $o->setAuthoringLanguages($n->getCollectionOfObjectValues(LocaleInfo::class)); },
            'defaultDisplayLanguage' => function (self $o, ParseNode $n) { $o->setDefaultDisplayLanguage($n->getObjectValue(LocaleInfo::class)); },
            'defaultRegionalFormat' => function (self $o, ParseNode $n) { $o->setDefaultRegionalFormat($n->getObjectValue(LocaleInfo::class)); },
            'defaultSpeechInputLanguage' => function (self $o, ParseNode $n) { $o->setDefaultSpeechInputLanguage($n->getObjectValue(LocaleInfo::class)); },
            'defaultTranslationLanguage' => function (self $o, ParseNode $n) { $o->setDefaultTranslationLanguage($n->getObjectValue(LocaleInfo::class)); },
            'regionalFormatOverrides' => function (self $o, ParseNode $n) { $o->setRegionalFormatOverrides($n->getObjectValue(RegionalFormatOverrides::class)); },
            'translationPreferences' => function (self $o, ParseNode $n) { $o->setTranslationPreferences($n->getObjectValue(TranslationPreferences::class)); },
        ]);
    }

    /**
     * Gets the regionalFormatOverrides property value. Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
     * @return RegionalFormatOverrides|null
    */
    public function getRegionalFormatOverrides(): ?RegionalFormatOverrides {
        return $this->regionalFormatOverrides;
    }

    /**
     * Gets the translationPreferences property value. The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
     * @return TranslationPreferences|null
    */
    public function getTranslationPreferences(): ?TranslationPreferences {
        return $this->translationPreferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authoringLanguages', $this->authoringLanguages);
        $writer->writeObjectValue('defaultDisplayLanguage', $this->defaultDisplayLanguage);
        $writer->writeObjectValue('defaultRegionalFormat', $this->defaultRegionalFormat);
        $writer->writeObjectValue('defaultSpeechInputLanguage', $this->defaultSpeechInputLanguage);
        $writer->writeObjectValue('defaultTranslationLanguage', $this->defaultTranslationLanguage);
        $writer->writeObjectValue('regionalFormatOverrides', $this->regionalFormatOverrides);
        $writer->writeObjectValue('translationPreferences', $this->translationPreferences);
    }

    /**
     * Sets the authoringLanguages property value. Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
     *  @param array<LocaleInfo>|null $value Value to set for the authoringLanguages property.
    */
    public function setAuthoringLanguages(?array $value ): void {
        $this->authoringLanguages = $value;
    }

    /**
     * Sets the defaultDisplayLanguage property value. The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
     *  @param LocaleInfo|null $value Value to set for the defaultDisplayLanguage property.
    */
    public function setDefaultDisplayLanguage(?LocaleInfo $value ): void {
        $this->defaultDisplayLanguage = $value;
    }

    /**
     * Sets the defaultRegionalFormat property value. The locale that drives the default date, time, and calendar formatting.Returned by default.
     *  @param LocaleInfo|null $value Value to set for the defaultRegionalFormat property.
    */
    public function setDefaultRegionalFormat(?LocaleInfo $value ): void {
        $this->defaultRegionalFormat = $value;
    }

    /**
     * Sets the defaultSpeechInputLanguage property value. The language a user expected to use as input for text to speech scenarios.Returned by default.
     *  @param LocaleInfo|null $value Value to set for the defaultSpeechInputLanguage property.
    */
    public function setDefaultSpeechInputLanguage(?LocaleInfo $value ): void {
        $this->defaultSpeechInputLanguage = $value;
    }

    /**
     * Sets the defaultTranslationLanguage property value. The language a user expects to have documents, emails, and messages translated into.Returned by default.
     *  @param LocaleInfo|null $value Value to set for the defaultTranslationLanguage property.
    */
    public function setDefaultTranslationLanguage(?LocaleInfo $value ): void {
        $this->defaultTranslationLanguage = $value;
    }

    /**
     * Sets the regionalFormatOverrides property value. Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
     *  @param RegionalFormatOverrides|null $value Value to set for the regionalFormatOverrides property.
    */
    public function setRegionalFormatOverrides(?RegionalFormatOverrides $value ): void {
        $this->regionalFormatOverrides = $value;
    }

    /**
     * Sets the translationPreferences property value. The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
     *  @param TranslationPreferences|null $value Value to set for the translationPreferences property.
    */
    public function setTranslationPreferences(?TranslationPreferences $value ): void {
        $this->translationPreferences = $value;
    }

}
