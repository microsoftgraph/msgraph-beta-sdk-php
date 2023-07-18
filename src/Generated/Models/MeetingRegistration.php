<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MeetingRegistration extends MeetingRegistrationBase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new meetingRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingRegistration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingRegistration {
        return new MeetingRegistration();
    }

    /**
     * Gets the customQuestions property value. Custom registration questions.
     * @return array<MeetingRegistrationQuestion>|null
    */
    public function getCustomQuestions(): ?array {
        $val = $this->getBackingStore()->get('customQuestions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingRegistrationQuestion::class);
            /** @var array<MeetingRegistrationQuestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customQuestions'");
    }

    /**
     * Gets the description property value. The description of the meeting.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the endDateTime property value. The meeting end time in UTC.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customQuestions' => fn(ParseNode $n) => $o->setCustomQuestions($n->getCollectionOfObjectValues([MeetingRegistrationQuestion::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'registrationPageViewCount' => fn(ParseNode $n) => $o->setRegistrationPageViewCount($n->getIntegerValue()),
            'registrationPageWebUrl' => fn(ParseNode $n) => $o->setRegistrationPageWebUrl($n->getStringValue()),
            'speakers' => fn(ParseNode $n) => $o->setSpeakers($n->getCollectionOfObjectValues([MeetingSpeaker::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the registrationPageViewCount property value. The number of times the registration page has been visited. Read-only.
     * @return int|null
    */
    public function getRegistrationPageViewCount(): ?int {
        $val = $this->getBackingStore()->get('registrationPageViewCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationPageViewCount'");
    }

    /**
     * Gets the registrationPageWebUrl property value. The URL of the registration page. Read-only.
     * @return string|null
    */
    public function getRegistrationPageWebUrl(): ?string {
        $val = $this->getBackingStore()->get('registrationPageWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationPageWebUrl'");
    }

    /**
     * Gets the speakers property value. The meeting speaker's information.
     * @return array<MeetingSpeaker>|null
    */
    public function getSpeakers(): ?array {
        $val = $this->getBackingStore()->get('speakers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingSpeaker::class);
            /** @var array<MeetingSpeaker>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakers'");
    }

    /**
     * Gets the startDateTime property value. The meeting start time in UTC.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the subject property value. The subject of the meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customQuestions', $this->getCustomQuestions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('registrationPageViewCount', $this->getRegistrationPageViewCount());
        $writer->writeStringValue('registrationPageWebUrl', $this->getRegistrationPageWebUrl());
        $writer->writeCollectionOfObjectValues('speakers', $this->getSpeakers());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the customQuestions property value. Custom registration questions.
     * @param array<MeetingRegistrationQuestion>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value): void {
        $this->getBackingStore()->set('customQuestions', $value);
    }

    /**
     * Sets the description property value. The description of the meeting.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the endDateTime property value. The meeting end time in UTC.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the registrationPageViewCount property value. The number of times the registration page has been visited. Read-only.
     * @param int|null $value Value to set for the registrationPageViewCount property.
    */
    public function setRegistrationPageViewCount(?int $value): void {
        $this->getBackingStore()->set('registrationPageViewCount', $value);
    }

    /**
     * Sets the registrationPageWebUrl property value. The URL of the registration page. Read-only.
     * @param string|null $value Value to set for the registrationPageWebUrl property.
    */
    public function setRegistrationPageWebUrl(?string $value): void {
        $this->getBackingStore()->set('registrationPageWebUrl', $value);
    }

    /**
     * Sets the speakers property value. The meeting speaker's information.
     * @param array<MeetingSpeaker>|null $value Value to set for the speakers property.
    */
    public function setSpeakers(?array $value): void {
        $this->getBackingStore()->set('speakers', $value);
    }

    /**
     * Sets the startDateTime property value. The meeting start time in UTC.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the subject property value. The subject of the meeting.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
