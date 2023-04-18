<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OnlineMeeting extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnlineMeeting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableCamera(): ?bool {
        return $this->getBackingStore()->get('allowAttendeeToEnableCamera');
    }

    /**
     * Gets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableMic(): ?bool {
        return $this->getBackingStore()->get('allowAttendeeToEnableMic');
    }

    /**
     * Gets the allowedPresenters property value. Specifies who can be a presenter in a meeting.
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        return $this->getBackingStore()->get('allowedPresenters');
    }

    /**
     * Gets the allowMeetingChat property value. Specifies the mode of meeting chat.
     * @return MeetingChatMode|null
    */
    public function getAllowMeetingChat(): ?MeetingChatMode {
        return $this->getBackingStore()->get('allowMeetingChat');
    }

    /**
     * Gets the allowParticipantsToChangeName property value. Specifies if participants are allowed to rename themselves in an instance of the meeting.
     * @return bool|null
    */
    public function getAllowParticipantsToChangeName(): ?bool {
        return $this->getBackingStore()->get('allowParticipantsToChangeName');
    }

    /**
     * Gets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTeamworkReactions(): ?bool {
        return $this->getBackingStore()->get('allowTeamworkReactions');
    }

    /**
     * Gets the alternativeRecording property value. The content stream of the alternative recording of a Microsoft Teams live event. Read-only.
     * @return StreamInterface|null
    */
    public function getAlternativeRecording(): ?StreamInterface {
        return $this->getBackingStore()->get('alternativeRecording');
    }

    /**
     * Gets the anonymizeIdentityForRoles property value. The anonymizeIdentityForRoles property
     * @return array<OnlineMeetingRole>|null
    */
    public function getAnonymizeIdentityForRoles(): ?array {
        return $this->getBackingStore()->get('anonymizeIdentityForRoles');
    }

    /**
     * Gets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @return array<MeetingAttendanceReport>|null
    */
    public function getAttendanceReports(): ?array {
        return $this->getBackingStore()->get('attendanceReports');
    }

    /**
     * Gets the attendeeReport property value. The content stream of the attendee report of a Teams live event. Read-only.
     * @return StreamInterface|null
    */
    public function getAttendeeReport(): ?StreamInterface {
        return $this->getBackingStore()->get('attendeeReport');
    }

    /**
     * Gets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @return AudioConferencing|null
    */
    public function getAudioConferencing(): ?AudioConferencing {
        return $this->getBackingStore()->get('audioConferencing');
    }

    /**
     * Gets the broadcastSettings property value. Settings related to a live event.
     * @return BroadcastMeetingSettings|null
    */
    public function getBroadcastSettings(): ?BroadcastMeetingSettings {
        return $this->getBackingStore()->get('broadcastSettings');
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return array<MeetingCapabilities>|null
    */
    public function getCapabilities(): ?array {
        return $this->getBackingStore()->get('capabilities');
    }

    /**
     * Gets the chatInfo property value. The chat information associated with this online meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->getBackingStore()->get('chatInfo');
    }

    /**
     * Gets the creationDateTime property value. The meeting creation time in UTC. Read-only.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('creationDateTime');
    }

    /**
     * Gets the endDateTime property value. The meeting end time in UTC.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the externalId property value. The external ID. A custom ID. Optional.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->getBackingStore()->get('externalId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAttendeeToEnableCamera' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableCamera($n->getBooleanValue()),
            'allowAttendeeToEnableMic' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableMic($n->getBooleanValue()),
            'allowedPresenters' => fn(ParseNode $n) => $o->setAllowedPresenters($n->getEnumValue(OnlineMeetingPresenters::class)),
            'allowMeetingChat' => fn(ParseNode $n) => $o->setAllowMeetingChat($n->getEnumValue(MeetingChatMode::class)),
            'allowParticipantsToChangeName' => fn(ParseNode $n) => $o->setAllowParticipantsToChangeName($n->getBooleanValue()),
            'allowTeamworkReactions' => fn(ParseNode $n) => $o->setAllowTeamworkReactions($n->getBooleanValue()),
            'alternativeRecording' => fn(ParseNode $n) => $o->setAlternativeRecording($n->getBinaryContent()),
            'anonymizeIdentityForRoles' => fn(ParseNode $n) => $o->setAnonymizeIdentityForRoles($n->getCollectionOfEnumValues(OnlineMeetingRole::class)),
            'attendanceReports' => fn(ParseNode $n) => $o->setAttendanceReports($n->getCollectionOfObjectValues([MeetingAttendanceReport::class, 'createFromDiscriminatorValue'])),
            'attendeeReport' => fn(ParseNode $n) => $o->setAttendeeReport($n->getBinaryContent()),
            'audioConferencing' => fn(ParseNode $n) => $o->setAudioConferencing($n->getObjectValue([AudioConferencing::class, 'createFromDiscriminatorValue'])),
            'broadcastSettings' => fn(ParseNode $n) => $o->setBroadcastSettings($n->getObjectValue([BroadcastMeetingSettings::class, 'createFromDiscriminatorValue'])),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(MeetingCapabilities::class)),
            'chatInfo' => fn(ParseNode $n) => $o->setChatInfo($n->getObjectValue([ChatInfo::class, 'createFromDiscriminatorValue'])),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'isBroadcast' => fn(ParseNode $n) => $o->setIsBroadcast($n->getBooleanValue()),
            'isEntryExitAnnounced' => fn(ParseNode $n) => $o->setIsEntryExitAnnounced($n->getBooleanValue()),
            'joinInformation' => fn(ParseNode $n) => $o->setJoinInformation($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'joinMeetingIdSettings' => fn(ParseNode $n) => $o->setJoinMeetingIdSettings($n->getObjectValue([JoinMeetingIdSettings::class, 'createFromDiscriminatorValue'])),
            'joinUrl' => fn(ParseNode $n) => $o->setJoinUrl($n->getStringValue()),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            'lobbyBypassSettings' => fn(ParseNode $n) => $o->setLobbyBypassSettings($n->getObjectValue([LobbyBypassSettings::class, 'createFromDiscriminatorValue'])),
            'meetingAttendanceReport' => fn(ParseNode $n) => $o->setMeetingAttendanceReport($n->getObjectValue([MeetingAttendanceReport::class, 'createFromDiscriminatorValue'])),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getObjectValue([MeetingParticipants::class, 'createFromDiscriminatorValue'])),
            'recordAutomatically' => fn(ParseNode $n) => $o->setRecordAutomatically($n->getBooleanValue()),
            'recording' => fn(ParseNode $n) => $o->setRecording($n->getBinaryContent()),
            'registration' => fn(ParseNode $n) => $o->setRegistration($n->getObjectValue([MeetingRegistration::class, 'createFromDiscriminatorValue'])),
            'shareMeetingChatHistoryDefault' => fn(ParseNode $n) => $o->setShareMeetingChatHistoryDefault($n->getEnumValue(MeetingChatHistoryDefaultMode::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'transcripts' => fn(ParseNode $n) => $o->setTranscripts($n->getCollectionOfObjectValues([CallTranscript::class, 'createFromDiscriminatorValue'])),
            'videoTeleconferenceId' => fn(ParseNode $n) => $o->setVideoTeleconferenceId($n->getStringValue()),
            'virtualAppointment' => fn(ParseNode $n) => $o->setVirtualAppointment($n->getObjectValue([VirtualAppointment::class, 'createFromDiscriminatorValue'])),
            'watermarkProtection' => fn(ParseNode $n) => $o->setWatermarkProtection($n->getObjectValue([WatermarkProtectionValues::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isBroadcast property value. Indicates whether this is a Teams live event.
     * @return bool|null
    */
    public function getIsBroadcast(): ?bool {
        return $this->getBackingStore()->get('isBroadcast');
    }

    /**
     * Gets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @return bool|null
    */
    public function getIsEntryExitAnnounced(): ?bool {
        return $this->getBackingStore()->get('isEntryExitAnnounced');
    }

    /**
     * Gets the joinInformation property value. The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @return ItemBody|null
    */
    public function getJoinInformation(): ?ItemBody {
        return $this->getBackingStore()->get('joinInformation');
    }

    /**
     * Gets the joinMeetingIdSettings property value. Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings cannot be modified. To make any changes to this property, the meeting needs to be canceled and a new one needs to be created.
     * @return JoinMeetingIdSettings|null
    */
    public function getJoinMeetingIdSettings(): ?JoinMeetingIdSettings {
        return $this->getBackingStore()->get('joinMeetingIdSettings');
    }

    /**
     * Gets the joinUrl property value. The joinUrl property
     * @return string|null
    */
    public function getJoinUrl(): ?string {
        return $this->getBackingStore()->get('joinUrl');
    }

    /**
     * Gets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->getBackingStore()->get('joinWebUrl');
    }

    /**
     * Gets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting lobby.
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        return $this->getBackingStore()->get('lobbyBypassSettings');
    }

    /**
     * Gets the meetingAttendanceReport property value. The meetingAttendanceReport property
     * @return MeetingAttendanceReport|null
    */
    public function getMeetingAttendanceReport(): ?MeetingAttendanceReport {
        return $this->getBackingStore()->get('meetingAttendanceReport');
    }

    /**
     * Gets the participants property value. The participants associated with the online meeting. This includes the organizer and the attendees.
     * @return MeetingParticipants|null
    */
    public function getParticipants(): ?MeetingParticipants {
        return $this->getBackingStore()->get('participants');
    }

    /**
     * Gets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @return bool|null
    */
    public function getRecordAutomatically(): ?bool {
        return $this->getBackingStore()->get('recordAutomatically');
    }

    /**
     * Gets the recording property value. The content stream of the recording of a Teams live event. Read-only.
     * @return StreamInterface|null
    */
    public function getRecording(): ?StreamInterface {
        return $this->getBackingStore()->get('recording');
    }

    /**
     * Gets the registration property value. The registration that has been enabled for an online meeting. One online meeting can only have one registration enabled.
     * @return MeetingRegistration|null
    */
    public function getRegistration(): ?MeetingRegistration {
        return $this->getBackingStore()->get('registration');
    }

    /**
     * Gets the shareMeetingChatHistoryDefault property value. The shareMeetingChatHistoryDefault property
     * @return MeetingChatHistoryDefaultMode|null
    */
    public function getShareMeetingChatHistoryDefault(): ?MeetingChatHistoryDefaultMode {
        return $this->getBackingStore()->get('shareMeetingChatHistoryDefault');
    }

    /**
     * Gets the startDateTime property value. The meeting start time in UTC.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the subject property value. The subject of the online meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the transcripts property value. The transcripts of an online meeting. Read-only.
     * @return array<CallTranscript>|null
    */
    public function getTranscripts(): ?array {
        return $this->getBackingStore()->get('transcripts');
    }

    /**
     * Gets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @return string|null
    */
    public function getVideoTeleconferenceId(): ?string {
        return $this->getBackingStore()->get('videoTeleconferenceId');
    }

    /**
     * Gets the virtualAppointment property value. The virtualAppointment property
     * @return VirtualAppointment|null
    */
    public function getVirtualAppointment(): ?VirtualAppointment {
        return $this->getBackingStore()->get('virtualAppointment');
    }

    /**
     * Gets the watermarkProtection property value. Specifies whether a watermark should be applied to a content type by the client application.
     * @return WatermarkProtectionValues|null
    */
    public function getWatermarkProtection(): ?WatermarkProtectionValues {
        return $this->getBackingStore()->get('watermarkProtection');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAttendeeToEnableCamera', $this->getAllowAttendeeToEnableCamera());
        $writer->writeBooleanValue('allowAttendeeToEnableMic', $this->getAllowAttendeeToEnableMic());
        $writer->writeEnumValue('allowedPresenters', $this->getAllowedPresenters());
        $writer->writeEnumValue('allowMeetingChat', $this->getAllowMeetingChat());
        $writer->writeBooleanValue('allowParticipantsToChangeName', $this->getAllowParticipantsToChangeName());
        $writer->writeBooleanValue('allowTeamworkReactions', $this->getAllowTeamworkReactions());
        $writer->writeBinaryContent('alternativeRecording', $this->getAlternativeRecording());
        $writer->writeCollectionOfEnumValues('anonymizeIdentityForRoles', $this->getAnonymizeIdentityForRoles());
        $writer->writeCollectionOfObjectValues('attendanceReports', $this->getAttendanceReports());
        $writer->writeBinaryContent('attendeeReport', $this->getAttendeeReport());
        $writer->writeObjectValue('audioConferencing', $this->getAudioConferencing());
        $writer->writeObjectValue('broadcastSettings', $this->getBroadcastSettings());
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeObjectValue('chatInfo', $this->getChatInfo());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeBooleanValue('isBroadcast', $this->getIsBroadcast());
        $writer->writeBooleanValue('isEntryExitAnnounced', $this->getIsEntryExitAnnounced());
        $writer->writeObjectValue('joinInformation', $this->getJoinInformation());
        $writer->writeObjectValue('joinMeetingIdSettings', $this->getJoinMeetingIdSettings());
        $writer->writeStringValue('joinUrl', $this->getJoinUrl());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeObjectValue('lobbyBypassSettings', $this->getLobbyBypassSettings());
        $writer->writeObjectValue('meetingAttendanceReport', $this->getMeetingAttendanceReport());
        $writer->writeObjectValue('participants', $this->getParticipants());
        $writer->writeBooleanValue('recordAutomatically', $this->getRecordAutomatically());
        $writer->writeBinaryContent('recording', $this->getRecording());
        $writer->writeObjectValue('registration', $this->getRegistration());
        $writer->writeEnumValue('shareMeetingChatHistoryDefault', $this->getShareMeetingChatHistoryDefault());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('transcripts', $this->getTranscripts());
        $writer->writeStringValue('videoTeleconferenceId', $this->getVideoTeleconferenceId());
        $writer->writeObjectValue('virtualAppointment', $this->getVirtualAppointment());
        $writer->writeObjectValue('watermarkProtection', $this->getWatermarkProtection());
    }

    /**
     * Sets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @param bool|null $value Value to set for the allowAttendeeToEnableCamera property.
    */
    public function setAllowAttendeeToEnableCamera(?bool $value): void {
        $this->getBackingStore()->set('allowAttendeeToEnableCamera', $value);
    }

    /**
     * Sets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @param bool|null $value Value to set for the allowAttendeeToEnableMic property.
    */
    public function setAllowAttendeeToEnableMic(?bool $value): void {
        $this->getBackingStore()->set('allowAttendeeToEnableMic', $value);
    }

    /**
     * Sets the allowedPresenters property value. Specifies who can be a presenter in a meeting.
     * @param OnlineMeetingPresenters|null $value Value to set for the allowedPresenters property.
    */
    public function setAllowedPresenters(?OnlineMeetingPresenters $value): void {
        $this->getBackingStore()->set('allowedPresenters', $value);
    }

    /**
     * Sets the allowMeetingChat property value. Specifies the mode of meeting chat.
     * @param MeetingChatMode|null $value Value to set for the allowMeetingChat property.
    */
    public function setAllowMeetingChat(?MeetingChatMode $value): void {
        $this->getBackingStore()->set('allowMeetingChat', $value);
    }

    /**
     * Sets the allowParticipantsToChangeName property value. Specifies if participants are allowed to rename themselves in an instance of the meeting.
     * @param bool|null $value Value to set for the allowParticipantsToChangeName property.
    */
    public function setAllowParticipantsToChangeName(?bool $value): void {
        $this->getBackingStore()->set('allowParticipantsToChangeName', $value);
    }

    /**
     * Sets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @param bool|null $value Value to set for the allowTeamworkReactions property.
    */
    public function setAllowTeamworkReactions(?bool $value): void {
        $this->getBackingStore()->set('allowTeamworkReactions', $value);
    }

    /**
     * Sets the alternativeRecording property value. The content stream of the alternative recording of a Microsoft Teams live event. Read-only.
     * @param StreamInterface|null $value Value to set for the alternativeRecording property.
    */
    public function setAlternativeRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('alternativeRecording', $value);
    }

    /**
     * Sets the anonymizeIdentityForRoles property value. The anonymizeIdentityForRoles property
     * @param array<OnlineMeetingRole>|null $value Value to set for the anonymizeIdentityForRoles property.
    */
    public function setAnonymizeIdentityForRoles(?array $value): void {
        $this->getBackingStore()->set('anonymizeIdentityForRoles', $value);
    }

    /**
     * Sets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @param array<MeetingAttendanceReport>|null $value Value to set for the attendanceReports property.
    */
    public function setAttendanceReports(?array $value): void {
        $this->getBackingStore()->set('attendanceReports', $value);
    }

    /**
     * Sets the attendeeReport property value. The content stream of the attendee report of a Teams live event. Read-only.
     * @param StreamInterface|null $value Value to set for the attendeeReport property.
    */
    public function setAttendeeReport(?StreamInterface $value): void {
        $this->getBackingStore()->set('attendeeReport', $value);
    }

    /**
     * Sets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @param AudioConferencing|null $value Value to set for the audioConferencing property.
    */
    public function setAudioConferencing(?AudioConferencing $value): void {
        $this->getBackingStore()->set('audioConferencing', $value);
    }

    /**
     * Sets the broadcastSettings property value. Settings related to a live event.
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
     * Sets the chatInfo property value. The chat information associated with this online meeting.
     * @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value): void {
        $this->getBackingStore()->set('chatInfo', $value);
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
     * Sets the isBroadcast property value. Indicates whether this is a Teams live event.
     * @param bool|null $value Value to set for the isBroadcast property.
    */
    public function setIsBroadcast(?bool $value): void {
        $this->getBackingStore()->set('isBroadcast', $value);
    }

    /**
     * Sets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @param bool|null $value Value to set for the isEntryExitAnnounced property.
    */
    public function setIsEntryExitAnnounced(?bool $value): void {
        $this->getBackingStore()->set('isEntryExitAnnounced', $value);
    }

    /**
     * Sets the joinInformation property value. The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @param ItemBody|null $value Value to set for the joinInformation property.
    */
    public function setJoinInformation(?ItemBody $value): void {
        $this->getBackingStore()->set('joinInformation', $value);
    }

    /**
     * Sets the joinMeetingIdSettings property value. Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings cannot be modified. To make any changes to this property, the meeting needs to be canceled and a new one needs to be created.
     * @param JoinMeetingIdSettings|null $value Value to set for the joinMeetingIdSettings property.
    */
    public function setJoinMeetingIdSettings(?JoinMeetingIdSettings $value): void {
        $this->getBackingStore()->set('joinMeetingIdSettings', $value);
    }

    /**
     * Sets the joinUrl property value. The joinUrl property
     * @param string|null $value Value to set for the joinUrl property.
    */
    public function setJoinUrl(?string $value): void {
        $this->getBackingStore()->set('joinUrl', $value);
    }

    /**
     * Sets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting lobby.
     * @param LobbyBypassSettings|null $value Value to set for the lobbyBypassSettings property.
    */
    public function setLobbyBypassSettings(?LobbyBypassSettings $value): void {
        $this->getBackingStore()->set('lobbyBypassSettings', $value);
    }

    /**
     * Sets the meetingAttendanceReport property value. The meetingAttendanceReport property
     * @param MeetingAttendanceReport|null $value Value to set for the meetingAttendanceReport property.
    */
    public function setMeetingAttendanceReport(?MeetingAttendanceReport $value): void {
        $this->getBackingStore()->set('meetingAttendanceReport', $value);
    }

    /**
     * Sets the participants property value. The participants associated with the online meeting. This includes the organizer and the attendees.
     * @param MeetingParticipants|null $value Value to set for the participants property.
    */
    public function setParticipants(?MeetingParticipants $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @param bool|null $value Value to set for the recordAutomatically property.
    */
    public function setRecordAutomatically(?bool $value): void {
        $this->getBackingStore()->set('recordAutomatically', $value);
    }

    /**
     * Sets the recording property value. The content stream of the recording of a Teams live event. Read-only.
     * @param StreamInterface|null $value Value to set for the recording property.
    */
    public function setRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('recording', $value);
    }

    /**
     * Sets the registration property value. The registration that has been enabled for an online meeting. One online meeting can only have one registration enabled.
     * @param MeetingRegistration|null $value Value to set for the registration property.
    */
    public function setRegistration(?MeetingRegistration $value): void {
        $this->getBackingStore()->set('registration', $value);
    }

    /**
     * Sets the shareMeetingChatHistoryDefault property value. The shareMeetingChatHistoryDefault property
     * @param MeetingChatHistoryDefaultMode|null $value Value to set for the shareMeetingChatHistoryDefault property.
    */
    public function setShareMeetingChatHistoryDefault(?MeetingChatHistoryDefaultMode $value): void {
        $this->getBackingStore()->set('shareMeetingChatHistoryDefault', $value);
    }

    /**
     * Sets the startDateTime property value. The meeting start time in UTC.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the subject property value. The subject of the online meeting.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the transcripts property value. The transcripts of an online meeting. Read-only.
     * @param array<CallTranscript>|null $value Value to set for the transcripts property.
    */
    public function setTranscripts(?array $value): void {
        $this->getBackingStore()->set('transcripts', $value);
    }

    /**
     * Sets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @param string|null $value Value to set for the videoTeleconferenceId property.
    */
    public function setVideoTeleconferenceId(?string $value): void {
        $this->getBackingStore()->set('videoTeleconferenceId', $value);
    }

    /**
     * Sets the virtualAppointment property value. The virtualAppointment property
     * @param VirtualAppointment|null $value Value to set for the virtualAppointment property.
    */
    public function setVirtualAppointment(?VirtualAppointment $value): void {
        $this->getBackingStore()->set('virtualAppointment', $value);
    }

    /**
     * Sets the watermarkProtection property value. Specifies whether a watermark should be applied to a content type by the client application.
     * @param WatermarkProtectionValues|null $value Value to set for the watermarkProtection property.
    */
    public function setWatermarkProtection(?WatermarkProtectionValues $value): void {
        $this->getBackingStore()->set('watermarkProtection', $value);
    }

}
