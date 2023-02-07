<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistration extends MeetingRegistrationBase implements Parsable 
{
    /**
     * Instantiates a new MeetingRegistration and sets the default values.
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
        return $this->getBackingStore()->get('customQuestions');
    }

    /**
     * Gets the description property value. The description of the meeting.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the endDateTime property value. The meeting end time in UTC.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('registrationPageViewCount');
    }

    /**
     * Gets the registrationPageWebUrl property value. The URL of the registration page. Read-only.
     * @return string|null
    */
    public function getRegistrationPageWebUrl(): ?string {
        return $this->getBackingStore()->get('registrationPageWebUrl');
    }

    /**
     * Gets the speakers property value. The meeting speaker's information.
     * @return array<MeetingSpeaker>|null
    */
    public function getSpeakers(): ?array {
        return $this->getBackingStore()->get('speakers');
    }

    /**
     * Gets the startDateTime property value. The meeting start time in UTC.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the subject property value. The subject of the meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
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
