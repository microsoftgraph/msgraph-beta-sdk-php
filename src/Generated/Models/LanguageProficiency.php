<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LanguageProficiency extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new LanguageProficiency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.languageProficiency');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LanguageProficiency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LanguageProficiency {
        return new LanguageProficiency();
    }

    /**
     * Gets the displayName property value. Contains the long-form name for the language.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'proficiency' => fn(ParseNode $n) => $o->setProficiency($n->getEnumValue(LanguageProficiencyLevel::class)),
            'reading' => fn(ParseNode $n) => $o->setReading($n->getEnumValue(LanguageProficiencyLevel::class)),
            'spoken' => fn(ParseNode $n) => $o->setSpoken($n->getEnumValue(LanguageProficiencyLevel::class)),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getStringValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'written' => fn(ParseNode $n) => $o->setWritten($n->getEnumValue(LanguageProficiencyLevel::class)),
        ]);
    }

    /**
     * Gets the proficiency property value. The proficiency property
     * @return LanguageProficiencyLevel|null
    */
    public function getProficiency(): ?LanguageProficiencyLevel {
        return $this->getBackingStore()->get('proficiency');
    }

    /**
     * Gets the reading property value. Represents the users reading comprehension for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getReading(): ?LanguageProficiencyLevel {
        return $this->getBackingStore()->get('reading');
    }

    /**
     * Gets the spoken property value. Represents the users spoken proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getSpoken(): ?LanguageProficiencyLevel {
        return $this->getBackingStore()->get('spoken');
    }

    /**
     * Gets the tag property value. Contains the four-character BCP47 name for the language (en-US, no-NB, en-AU).
     * @return string|null
    */
    public function getTag(): ?string {
        return $this->getBackingStore()->get('tag');
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->getBackingStore()->get('thumbnailUrl');
    }

    /**
     * Gets the written property value. Represents the users written proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getWritten(): ?LanguageProficiencyLevel {
        return $this->getBackingStore()->get('written');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('proficiency', $this->getProficiency());
        $writer->writeEnumValue('reading', $this->getReading());
        $writer->writeEnumValue('spoken', $this->getSpoken());
        $writer->writeStringValue('tag', $this->getTag());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeEnumValue('written', $this->getWritten());
    }

    /**
     * Sets the displayName property value. Contains the long-form name for the language.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the proficiency property value. The proficiency property
     *  @param LanguageProficiencyLevel|null $value Value to set for the proficiency property.
    */
    public function setProficiency(?LanguageProficiencyLevel $value): void {
        $this->getBackingStore()->set('proficiency', $value);
    }

    /**
     * Sets the reading property value. Represents the users reading comprehension for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the reading property.
    */
    public function setReading(?LanguageProficiencyLevel $value): void {
        $this->getBackingStore()->set('reading', $value);
    }

    /**
     * Sets the spoken property value. Represents the users spoken proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the spoken property.
    */
    public function setSpoken(?LanguageProficiencyLevel $value): void {
        $this->getBackingStore()->set('spoken', $value);
    }

    /**
     * Sets the tag property value. Contains the four-character BCP47 name for the language (en-US, no-NB, en-AU).
     *  @param string|null $value Value to set for the tag property.
    */
    public function setTag(?string $value): void {
        $this->getBackingStore()->set('tag', $value);
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

    /**
     * Sets the written property value. Represents the users written proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the written property.
    */
    public function setWritten(?LanguageProficiencyLevel $value): void {
        $this->getBackingStore()->set('written', $value);
    }

}
