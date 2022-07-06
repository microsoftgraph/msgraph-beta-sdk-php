<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LanguageProficiency extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $displayName Contains the long-form name for the language.
    */
    private ?string $displayName = null;
    
    /**
     * @var LanguageProficiencyLevel|null $proficiency The proficiency property
    */
    private ?LanguageProficiencyLevel $proficiency = null;
    
    /**
     * @var LanguageProficiencyLevel|null $reading Represents the users reading comprehension for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
    */
    private ?LanguageProficiencyLevel $reading = null;
    
    /**
     * @var LanguageProficiencyLevel|null $spoken Represents the users spoken proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
    */
    private ?LanguageProficiencyLevel $spoken = null;
    
    /**
     * @var string|null $tag Contains the four-character BCP47 name for the language (en-US, no-NB, en-AU).
    */
    private ?string $tag = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var LanguageProficiencyLevel|null $written Represents the users written proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
    */
    private ?LanguageProficiencyLevel $written = null;
    
    /**
     * Instantiates a new LanguageProficiency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'proficiency' => function (ParseNode $n) use ($o) { $o->setProficiency($n->getEnumValue(LanguageProficiencyLevel::class)); },
            'reading' => function (ParseNode $n) use ($o) { $o->setReading($n->getEnumValue(LanguageProficiencyLevel::class)); },
            'spoken' => function (ParseNode $n) use ($o) { $o->setSpoken($n->getEnumValue(LanguageProficiencyLevel::class)); },
            'tag' => function (ParseNode $n) use ($o) { $o->setTag($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
            'written' => function (ParseNode $n) use ($o) { $o->setWritten($n->getEnumValue(LanguageProficiencyLevel::class)); },
        ]);
    }

    /**
     * Gets the proficiency property value. The proficiency property
     * @return LanguageProficiencyLevel|null
    */
    public function getProficiency(): ?LanguageProficiencyLevel {
        return $this->proficiency;
    }

    /**
     * Gets the reading property value. Represents the users reading comprehension for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getReading(): ?LanguageProficiencyLevel {
        return $this->reading;
    }

    /**
     * Gets the spoken property value. Represents the users spoken proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getSpoken(): ?LanguageProficiencyLevel {
        return $this->spoken;
    }

    /**
     * Gets the tag property value. Contains the four-character BCP47 name for the language (en-US, no-NB, en-AU).
     * @return string|null
    */
    public function getTag(): ?string {
        return $this->tag;
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the written property value. Represents the users written proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     * @return LanguageProficiencyLevel|null
    */
    public function getWritten(): ?LanguageProficiencyLevel {
        return $this->written;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('proficiency', $this->proficiency);
        $writer->writeEnumValue('reading', $this->reading);
        $writer->writeEnumValue('spoken', $this->spoken);
        $writer->writeStringValue('tag', $this->tag);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeEnumValue('written', $this->written);
    }

    /**
     * Sets the displayName property value. Contains the long-form name for the language.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the proficiency property value. The proficiency property
     *  @param LanguageProficiencyLevel|null $value Value to set for the proficiency property.
    */
    public function setProficiency(?LanguageProficiencyLevel $value ): void {
        $this->proficiency = $value;
    }

    /**
     * Sets the reading property value. Represents the users reading comprehension for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the reading property.
    */
    public function setReading(?LanguageProficiencyLevel $value ): void {
        $this->reading = $value;
    }

    /**
     * Sets the spoken property value. Represents the users spoken proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the spoken property.
    */
    public function setSpoken(?LanguageProficiencyLevel $value ): void {
        $this->spoken = $value;
    }

    /**
     * Sets the tag property value. Contains the four-character BCP47 name for the language (en-US, no-NB, en-AU).
     *  @param string|null $value Value to set for the tag property.
    */
    public function setTag(?string $value ): void {
        $this->tag = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the written property value. Represents the users written proficiency for the language represented by the object. Possible values are: elementary, conversational, limitedWorking, professionalWorking, fullProfessional, nativeOrBilingual, unknownFutureValue.
     *  @param LanguageProficiencyLevel|null $value Value to set for the written property.
    */
    public function setWritten(?LanguageProficiencyLevel $value ): void {
        $this->written = $value;
    }

}
