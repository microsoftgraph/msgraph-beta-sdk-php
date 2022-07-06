<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonName extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $displayName Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $first First name of the user.
    */
    private ?string $first = null;
    
    /**
     * @var string|null $initials Initials of the user.
    */
    private ?string $initials = null;
    
    /**
     * @var string|null $languageTag Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
    */
    private ?string $languageTag = null;
    
    /**
     * @var string|null $last Last name of the user.
    */
    private ?string $last = null;
    
    /**
     * @var string|null $maiden Maiden name of the user.
    */
    private ?string $maiden = null;
    
    /**
     * @var string|null $middle Middle name of the user.
    */
    private ?string $middle = null;
    
    /**
     * @var string|null $nickname Nickname of the user.
    */
    private ?string $nickname = null;
    
    /**
     * @var PersonNamePronounciation|null $pronunciation Guidance on how to pronounce the users name.
    */
    private ?PersonNamePronounciation $pronunciation = null;
    
    /**
     * @var string|null $suffix Designators used after the users name (eg: PhD.)
    */
    private ?string $suffix = null;
    
    /**
     * @var string|null $title Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new PersonName and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonName
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonName {
        return new PersonName();
    }

    /**
     * Gets the displayName property value. Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
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
            'first' => function (ParseNode $n) use ($o) { $o->setFirst($n->getStringValue()); },
            'initials' => function (ParseNode $n) use ($o) { $o->setInitials($n->getStringValue()); },
            'languageTag' => function (ParseNode $n) use ($o) { $o->setLanguageTag($n->getStringValue()); },
            'last' => function (ParseNode $n) use ($o) { $o->setLast($n->getStringValue()); },
            'maiden' => function (ParseNode $n) use ($o) { $o->setMaiden($n->getStringValue()); },
            'middle' => function (ParseNode $n) use ($o) { $o->setMiddle($n->getStringValue()); },
            'nickname' => function (ParseNode $n) use ($o) { $o->setNickname($n->getStringValue()); },
            'pronunciation' => function (ParseNode $n) use ($o) { $o->setPronunciation($n->getObjectValue(array(PersonNamePronounciation::class, 'createFromDiscriminatorValue'))); },
            'suffix' => function (ParseNode $n) use ($o) { $o->setSuffix($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the first property value. First name of the user.
     * @return string|null
    */
    public function getFirst(): ?string {
        return $this->first;
    }

    /**
     * Gets the initials property value. Initials of the user.
     * @return string|null
    */
    public function getInitials(): ?string {
        return $this->initials;
    }

    /**
     * Gets the languageTag property value. Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the last property value. Last name of the user.
     * @return string|null
    */
    public function getLast(): ?string {
        return $this->last;
    }

    /**
     * Gets the maiden property value. Maiden name of the user.
     * @return string|null
    */
    public function getMaiden(): ?string {
        return $this->maiden;
    }

    /**
     * Gets the middle property value. Middle name of the user.
     * @return string|null
    */
    public function getMiddle(): ?string {
        return $this->middle;
    }

    /**
     * Gets the nickname property value. Nickname of the user.
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the pronunciation property value. Guidance on how to pronounce the users name.
     * @return PersonNamePronounciation|null
    */
    public function getPronunciation(): ?PersonNamePronounciation {
        return $this->pronunciation;
    }

    /**
     * Gets the suffix property value. Designators used after the users name (eg: PhD.)
     * @return string|null
    */
    public function getSuffix(): ?string {
        return $this->suffix;
    }

    /**
     * Gets the title property value. Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('first', $this->first);
        $writer->writeStringValue('initials', $this->initials);
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeStringValue('last', $this->last);
        $writer->writeStringValue('maiden', $this->maiden);
        $writer->writeStringValue('middle', $this->middle);
        $writer->writeStringValue('nickname', $this->nickname);
        $writer->writeObjectValue('pronunciation', $this->pronunciation);
        $writer->writeStringValue('suffix', $this->suffix);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the displayName property value. Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the first property value. First name of the user.
     *  @param string|null $value Value to set for the first property.
    */
    public function setFirst(?string $value ): void {
        $this->first = $value;
    }

    /**
     * Sets the initials property value. Initials of the user.
     *  @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value ): void {
        $this->initials = $value;
    }

    /**
     * Sets the languageTag property value. Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the last property value. Last name of the user.
     *  @param string|null $value Value to set for the last property.
    */
    public function setLast(?string $value ): void {
        $this->last = $value;
    }

    /**
     * Sets the maiden property value. Maiden name of the user.
     *  @param string|null $value Value to set for the maiden property.
    */
    public function setMaiden(?string $value ): void {
        $this->maiden = $value;
    }

    /**
     * Sets the middle property value. Middle name of the user.
     *  @param string|null $value Value to set for the middle property.
    */
    public function setMiddle(?string $value ): void {
        $this->middle = $value;
    }

    /**
     * Sets the nickname property value. Nickname of the user.
     *  @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value ): void {
        $this->nickname = $value;
    }

    /**
     * Sets the pronunciation property value. Guidance on how to pronounce the users name.
     *  @param PersonNamePronounciation|null $value Value to set for the pronunciation property.
    */
    public function setPronunciation(?PersonNamePronounciation $value ): void {
        $this->pronunciation = $value;
    }

    /**
     * Sets the suffix property value. Designators used after the users name (eg: PhD.)
     *  @param string|null $value Value to set for the suffix property.
    */
    public function setSuffix(?string $value ): void {
        $this->suffix = $value;
    }

    /**
     * Sets the title property value. Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
