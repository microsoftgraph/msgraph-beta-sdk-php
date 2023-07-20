<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonName extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new personName and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.personName');
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
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'first' => fn(ParseNode $n) => $o->setFirst($n->getStringValue()),
            'initials' => fn(ParseNode $n) => $o->setInitials($n->getStringValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'last' => fn(ParseNode $n) => $o->setLast($n->getStringValue()),
            'maiden' => fn(ParseNode $n) => $o->setMaiden($n->getStringValue()),
            'middle' => fn(ParseNode $n) => $o->setMiddle($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'pronunciation' => fn(ParseNode $n) => $o->setPronunciation($n->getObjectValue([PersonNamePronounciation::class, 'createFromDiscriminatorValue'])),
            'suffix' => fn(ParseNode $n) => $o->setSuffix($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the first property value. First name of the user.
     * @return string|null
    */
    public function getFirst(): ?string {
        $val = $this->getBackingStore()->get('first');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'first'");
    }

    /**
     * Gets the initials property value. Initials of the user.
     * @return string|null
    */
    public function getInitials(): ?string {
        $val = $this->getBackingStore()->get('initials');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initials'");
    }

    /**
     * Gets the languageTag property value. Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        $val = $this->getBackingStore()->get('languageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTag'");
    }

    /**
     * Gets the last property value. Last name of the user.
     * @return string|null
    */
    public function getLast(): ?string {
        $val = $this->getBackingStore()->get('last');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'last'");
    }

    /**
     * Gets the maiden property value. Maiden name of the user.
     * @return string|null
    */
    public function getMaiden(): ?string {
        $val = $this->getBackingStore()->get('maiden');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maiden'");
    }

    /**
     * Gets the middle property value. Middle name of the user.
     * @return string|null
    */
    public function getMiddle(): ?string {
        $val = $this->getBackingStore()->get('middle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'middle'");
    }

    /**
     * Gets the nickname property value. Nickname of the user.
     * @return string|null
    */
    public function getNickname(): ?string {
        $val = $this->getBackingStore()->get('nickname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nickname'");
    }

    /**
     * Gets the pronunciation property value. Guidance on how to pronounce the users name.
     * @return PersonNamePronounciation|null
    */
    public function getPronunciation(): ?PersonNamePronounciation {
        $val = $this->getBackingStore()->get('pronunciation');
        if (is_null($val) || $val instanceof PersonNamePronounciation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pronunciation'");
    }

    /**
     * Gets the suffix property value. Designators used after the users name (eg: PhD.)
     * @return string|null
    */
    public function getSuffix(): ?string {
        $val = $this->getBackingStore()->get('suffix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suffix'");
    }

    /**
     * Gets the title property value. Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('first', $this->getFirst());
        $writer->writeStringValue('initials', $this->getInitials());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeStringValue('last', $this->getLast());
        $writer->writeStringValue('maiden', $this->getMaiden());
        $writer->writeStringValue('middle', $this->getMiddle());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeObjectValue('pronunciation', $this->getPronunciation());
        $writer->writeStringValue('suffix', $this->getSuffix());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the displayName property value. Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the first property value. First name of the user.
     * @param string|null $value Value to set for the first property.
    */
    public function setFirst(?string $value): void {
        $this->getBackingStore()->set('first', $value);
    }

    /**
     * Sets the initials property value. Initials of the user.
     * @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value): void {
        $this->getBackingStore()->set('initials', $value);
    }

    /**
     * Sets the languageTag property value. Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
     * @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the last property value. Last name of the user.
     * @param string|null $value Value to set for the last property.
    */
    public function setLast(?string $value): void {
        $this->getBackingStore()->set('last', $value);
    }

    /**
     * Sets the maiden property value. Maiden name of the user.
     * @param string|null $value Value to set for the maiden property.
    */
    public function setMaiden(?string $value): void {
        $this->getBackingStore()->set('maiden', $value);
    }

    /**
     * Sets the middle property value. Middle name of the user.
     * @param string|null $value Value to set for the middle property.
    */
    public function setMiddle(?string $value): void {
        $this->getBackingStore()->set('middle', $value);
    }

    /**
     * Sets the nickname property value. Nickname of the user.
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->getBackingStore()->set('nickname', $value);
    }

    /**
     * Sets the pronunciation property value. Guidance on how to pronounce the users name.
     * @param PersonNamePronounciation|null $value Value to set for the pronunciation property.
    */
    public function setPronunciation(?PersonNamePronounciation $value): void {
        $this->getBackingStore()->set('pronunciation', $value);
    }

    /**
     * Sets the suffix property value. Designators used after the users name (eg: PhD.)
     * @param string|null $value Value to set for the suffix property.
    */
    public function setSuffix(?string $value): void {
        $this->getBackingStore()->set('suffix', $value);
    }

    /**
     * Sets the title property value. Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
