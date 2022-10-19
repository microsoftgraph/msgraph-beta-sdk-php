<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistration extends MeetingRegistrationBase implements Parsable 
{
    /**
     * @var array<MeetingRegistrationQuestion>|null $customQuestions Custom registration questions.
    */
    private ?array $customQuestions = null;
    
    /**
     * @var string|null $description The description of the meeting.
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $endDateTime The meeting end time in UTC.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var int|null $registrationPageViewCount The number of times the registration page has been visited. Read-only.
    */
    private ?int $registrationPageViewCount = null;
    
    /**
     * @var string|null $registrationPageWebUrl The URL of the registration page. Read-only.
    */
    private ?string $registrationPageWebUrl = null;
    
    /**
     * @var array<MeetingSpeaker>|null $speakers The meeting speaker's information.
    */
    private ?array $speakers = null;
    
    /**
     * @var DateTime|null $startDateTime The meeting start time in UTC.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $subject The subject of the meeting.
    */
    private ?string $subject = null;
    
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
        return $this->customQuestions;
    }

    /**
     * Gets the description property value. The description of the meeting.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the endDateTime property value. The meeting end time in UTC.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
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
        return $this->registrationPageViewCount;
    }

    /**
     * Gets the registrationPageWebUrl property value. The URL of the registration page. Read-only.
     * @return string|null
    */
    public function getRegistrationPageWebUrl(): ?string {
        return $this->registrationPageWebUrl;
    }

    /**
     * Gets the speakers property value. The meeting speaker's information.
     * @return array<MeetingSpeaker>|null
    */
    public function getSpeakers(): ?array {
        return $this->speakers;
    }

    /**
     * Gets the startDateTime property value. The meeting start time in UTC.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the subject property value. The subject of the meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customQuestions', $this->customQuestions);
        $writer->writeStringValue('description', $this->description);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeIntegerValue('registrationPageViewCount', $this->registrationPageViewCount);
        $writer->writeStringValue('registrationPageWebUrl', $this->registrationPageWebUrl);
        $writer->writeCollectionOfObjectValues('speakers', $this->speakers);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('subject', $this->subject);
    }

    /**
     * Sets the customQuestions property value. Custom registration questions.
     *  @param array<MeetingRegistrationQuestion>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value ): void {
        $this->customQuestions = $value;
    }

    /**
     * Sets the description property value. The description of the meeting.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the endDateTime property value. The meeting end time in UTC.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the registrationPageViewCount property value. The number of times the registration page has been visited. Read-only.
     *  @param int|null $value Value to set for the registrationPageViewCount property.
    */
    public function setRegistrationPageViewCount(?int $value ): void {
        $this->registrationPageViewCount = $value;
    }

    /**
     * Sets the registrationPageWebUrl property value. The URL of the registration page. Read-only.
     *  @param string|null $value Value to set for the registrationPageWebUrl property.
    */
    public function setRegistrationPageWebUrl(?string $value ): void {
        $this->registrationPageWebUrl = $value;
    }

    /**
     * Sets the speakers property value. The meeting speaker's information.
     *  @param array<MeetingSpeaker>|null $value Value to set for the speakers property.
    */
    public function setSpeakers(?array $value ): void {
        $this->speakers = $value;
    }

    /**
     * Sets the startDateTime property value. The meeting start time in UTC.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the subject property value. The subject of the meeting.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
