<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class OnlineMeeting extends OnlineMeetingBase implements Parsable 
{
    /**
     * Instantiates a new OnlineMeeting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onlineMeeting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeeting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeeting {
        return new OnlineMeeting();
    }

    /**
     * Gets the alternativeRecording property value. The alternativeRecording property
     * @return StreamInterface|null
    */
    public function getAlternativeRecording(): ?StreamInterface {
        $val = $this->getBackingStore()->get('alternativeRecording');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternativeRecording'");
    }

    /**
     * Gets the attendeeReport property value. The attendeeReport property
     * @return StreamInterface|null
    */
    public function getAttendeeReport(): ?StreamInterface {
        $val = $this->getBackingStore()->get('attendeeReport');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendeeReport'");
    }

    /**
     * Gets the broadcastRecording property value. The broadcastRecording property
     * @return StreamInterface|null
    */
    public function getBroadcastRecording(): ?StreamInterface {
        $val = $this->getBackingStore()->get('broadcastRecording');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'broadcastRecording'");
    }

    /**
     * Gets the broadcastSettings property value. The broadcastSettings property
     * @return BroadcastMeetingSettings|null
    */
    public function getBroadcastSettings(): ?BroadcastMeetingSettings {
        $val = $this->getBackingStore()->get('broadcastSettings');
        if (is_null($val) || $val instanceof BroadcastMeetingSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'broadcastSettings'");
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return array<MeetingCapabilities>|null
    */
    public function getCapabilities(): ?array {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingCapabilities::class);
            /** @var array<MeetingCapabilities>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the creationDateTime property value. The meeting creation time in UTC. Read-only.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
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
     * Gets the externalId property value. The external ID. A custom ID. Optional.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternativeRecording' => fn(ParseNode $n) => $o->setAlternativeRecording($n->getBinaryContent()),
            'attendeeReport' => fn(ParseNode $n) => $o->setAttendeeReport($n->getBinaryContent()),
            'broadcastRecording' => fn(ParseNode $n) => $o->setBroadcastRecording($n->getBinaryContent()),
            'broadcastSettings' => fn(ParseNode $n) => $o->setBroadcastSettings($n->getObjectValue([BroadcastMeetingSettings::class, 'createFromDiscriminatorValue'])),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(MeetingCapabilities::class)),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'isBroadcast' => fn(ParseNode $n) => $o->setIsBroadcast($n->getBooleanValue()),
            'joinUrl' => fn(ParseNode $n) => $o->setJoinUrl($n->getStringValue()),
            'meetingAttendanceReport' => fn(ParseNode $n) => $o->setMeetingAttendanceReport($n->getObjectValue([MeetingAttendanceReport::class, 'createFromDiscriminatorValue'])),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getObjectValue([MeetingParticipants::class, 'createFromDiscriminatorValue'])),
            'recording' => fn(ParseNode $n) => $o->setRecording($n->getBinaryContent()),
            'recordings' => fn(ParseNode $n) => $o->setRecordings($n->getCollectionOfObjectValues([CallRecording::class, 'createFromDiscriminatorValue'])),
            'registration' => fn(ParseNode $n) => $o->setRegistration($n->getObjectValue([MeetingRegistration::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'transcripts' => fn(ParseNode $n) => $o->setTranscripts($n->getCollectionOfObjectValues([CallTranscript::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isBroadcast property value. The isBroadcast property
     * @return bool|null
    */
    public function getIsBroadcast(): ?bool {
        $val = $this->getBackingStore()->get('isBroadcast');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBroadcast'");
    }

    /**
     * Gets the joinUrl property value. The joinUrl property
     * @return string|null
    */
    public function getJoinUrl(): ?string {
        $val = $this->getBackingStore()->get('joinUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinUrl'");
    }

    /**
     * Gets the meetingAttendanceReport property value. The meetingAttendanceReport property
     * @return MeetingAttendanceReport|null
    */
    public function getMeetingAttendanceReport(): ?MeetingAttendanceReport {
        $val = $this->getBackingStore()->get('meetingAttendanceReport');
        if (is_null($val) || $val instanceof MeetingAttendanceReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingAttendanceReport'");
    }

    /**
     * Gets the participants property value. The participants associated with the online meeting, including the organizer and the attendees.
     * @return MeetingParticipants|null
    */
    public function getParticipants(): ?MeetingParticipants {
        $val = $this->getBackingStore()->get('participants');
        if (is_null($val) || $val instanceof MeetingParticipants) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participants'");
    }

    /**
     * Gets the recording property value. The recording property
     * @return StreamInterface|null
    */
    public function getRecording(): ?StreamInterface {
        $val = $this->getBackingStore()->get('recording');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recording'");
    }

    /**
     * Gets the recordings property value. The recordings of an online meeting. Read-only.
     * @return array<CallRecording>|null
    */
    public function getRecordings(): ?array {
        $val = $this->getBackingStore()->get('recordings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CallRecording::class);
            /** @var array<CallRecording>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordings'");
    }

    /**
     * Gets the registration property value. The registration that is enabled for an online meeting. One online meeting can only have one registration enabled.
     * @return MeetingRegistration|null
    */
    public function getRegistration(): ?MeetingRegistration {
        $val = $this->getBackingStore()->get('registration');
        if (is_null($val) || $val instanceof MeetingRegistration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registration'");
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
     * Gets the transcripts property value. The transcripts of an online meeting. Read-only.
     * @return array<CallTranscript>|null
    */
    public function getTranscripts(): ?array {
        $val = $this->getBackingStore()->get('transcripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CallTranscript::class);
            /** @var array<CallTranscript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transcripts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('alternativeRecording', $this->getAlternativeRecording());
        $writer->writeBinaryContent('attendeeReport', $this->getAttendeeReport());
        $writer->writeBinaryContent('broadcastRecording', $this->getBroadcastRecording());
        $writer->writeObjectValue('broadcastSettings', $this->getBroadcastSettings());
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeBooleanValue('isBroadcast', $this->getIsBroadcast());
        $writer->writeStringValue('joinUrl', $this->getJoinUrl());
        $writer->writeObjectValue('meetingAttendanceReport', $this->getMeetingAttendanceReport());
        $writer->writeObjectValue('participants', $this->getParticipants());
        $writer->writeBinaryContent('recording', $this->getRecording());
        $writer->writeCollectionOfObjectValues('recordings', $this->getRecordings());
        $writer->writeObjectValue('registration', $this->getRegistration());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeCollectionOfObjectValues('transcripts', $this->getTranscripts());
    }

    /**
     * Sets the alternativeRecording property value. The alternativeRecording property
     * @param StreamInterface|null $value Value to set for the alternativeRecording property.
    */
    public function setAlternativeRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('alternativeRecording', $value);
    }

    /**
     * Sets the attendeeReport property value. The attendeeReport property
     * @param StreamInterface|null $value Value to set for the attendeeReport property.
    */
    public function setAttendeeReport(?StreamInterface $value): void {
        $this->getBackingStore()->set('attendeeReport', $value);
    }

    /**
     * Sets the broadcastRecording property value. The broadcastRecording property
     * @param StreamInterface|null $value Value to set for the broadcastRecording property.
    */
    public function setBroadcastRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('broadcastRecording', $value);
    }

    /**
     * Sets the broadcastSettings property value. The broadcastSettings property
     * @param BroadcastMeetingSettings|null $value Value to set for the broadcastSettings property.
    */
    public function setBroadcastSettings(?BroadcastMeetingSettings $value): void {
        $this->getBackingStore()->set('broadcastSettings', $value);
    }

    /**
     * Sets the capabilities property value. The capabilities property
     * @param array<MeetingCapabilities>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the creationDateTime property value. The meeting creation time in UTC. Read-only.
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the endDateTime property value. The meeting end time in UTC.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the externalId property value. The external ID. A custom ID. Optional.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the isBroadcast property value. The isBroadcast property
     * @param bool|null $value Value to set for the isBroadcast property.
    */
    public function setIsBroadcast(?bool $value): void {
        $this->getBackingStore()->set('isBroadcast', $value);
    }

    /**
     * Sets the joinUrl property value. The joinUrl property
     * @param string|null $value Value to set for the joinUrl property.
    */
    public function setJoinUrl(?string $value): void {
        $this->getBackingStore()->set('joinUrl', $value);
    }

    /**
     * Sets the meetingAttendanceReport property value. The meetingAttendanceReport property
     * @param MeetingAttendanceReport|null $value Value to set for the meetingAttendanceReport property.
    */
    public function setMeetingAttendanceReport(?MeetingAttendanceReport $value): void {
        $this->getBackingStore()->set('meetingAttendanceReport', $value);
    }

    /**
     * Sets the participants property value. The participants associated with the online meeting, including the organizer and the attendees.
     * @param MeetingParticipants|null $value Value to set for the participants property.
    */
    public function setParticipants(?MeetingParticipants $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the recording property value. The recording property
     * @param StreamInterface|null $value Value to set for the recording property.
    */
    public function setRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('recording', $value);
    }

    /**
     * Sets the recordings property value. The recordings of an online meeting. Read-only.
     * @param array<CallRecording>|null $value Value to set for the recordings property.
    */
    public function setRecordings(?array $value): void {
        $this->getBackingStore()->set('recordings', $value);
    }

    /**
     * Sets the registration property value. The registration that is enabled for an online meeting. One online meeting can only have one registration enabled.
     * @param MeetingRegistration|null $value Value to set for the registration property.
    */
    public function setRegistration(?MeetingRegistration $value): void {
        $this->getBackingStore()->set('registration', $value);
    }

    /**
     * Sets the startDateTime property value. The meeting start time in UTC.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the transcripts property value. The transcripts of an online meeting. Read-only.
     * @param array<CallTranscript>|null $value Value to set for the transcripts property.
    */
    public function setTranscripts(?array $value): void {
        $this->getBackingStore()->set('transcripts', $value);
    }

}
