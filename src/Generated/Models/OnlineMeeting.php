<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class OnlineMeeting extends Entity implements Parsable 
{
    /**
     * Instantiates a new onlineMeeting and sets the default values.
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
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.virtualEventSession': return new VirtualEventSession();
            }
        }
        return new OnlineMeeting();
    }

    /**
     * Gets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableCamera(): ?bool {
        $val = $this->getBackingStore()->get('allowAttendeeToEnableCamera');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAttendeeToEnableCamera'");
    }

    /**
     * Gets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableMic(): ?bool {
        $val = $this->getBackingStore()->get('allowAttendeeToEnableMic');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAttendeeToEnableMic'");
    }

    /**
     * Gets the allowedPresenters property value. Specifies who can be a presenter in a meeting.
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        $val = $this->getBackingStore()->get('allowedPresenters');
        if (is_null($val) || $val instanceof OnlineMeetingPresenters) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedPresenters'");
    }

    /**
     * Gets the allowMeetingChat property value. Specifies the mode of meeting chat.
     * @return MeetingChatMode|null
    */
    public function getAllowMeetingChat(): ?MeetingChatMode {
        $val = $this->getBackingStore()->get('allowMeetingChat');
        if (is_null($val) || $val instanceof MeetingChatMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowMeetingChat'");
    }

    /**
     * Gets the allowParticipantsToChangeName property value. Specifies if participants are allowed to rename themselves in an instance of the meeting.
     * @return bool|null
    */
    public function getAllowParticipantsToChangeName(): ?bool {
        $val = $this->getBackingStore()->get('allowParticipantsToChangeName');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowParticipantsToChangeName'");
    }

    /**
     * Gets the allowRecording property value. Indicates whether recording is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowRecording(): ?bool {
        $val = $this->getBackingStore()->get('allowRecording');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowRecording'");
    }

    /**
     * Gets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTeamworkReactions(): ?bool {
        $val = $this->getBackingStore()->get('allowTeamworkReactions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTeamworkReactions'");
    }

    /**
     * Gets the allowTranscription property value. Indicates whether transcription is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTranscription(): ?bool {
        $val = $this->getBackingStore()->get('allowTranscription');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTranscription'");
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
     * Gets the anonymizeIdentityForRoles property value. Specifies whose identity will be anonymized in the meeting. Possible values are: attendee. The attendee value cannot be removed through a PATCH operation once added.
     * @return array<OnlineMeetingRole>|null
    */
    public function getAnonymizeIdentityForRoles(): ?array {
        $val = $this->getBackingStore()->get('anonymizeIdentityForRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnlineMeetingRole::class);
            /** @var array<OnlineMeetingRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anonymizeIdentityForRoles'");
    }

    /**
     * Gets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @return array<MeetingAttendanceReport>|null
    */
    public function getAttendanceReports(): ?array {
        $val = $this->getBackingStore()->get('attendanceReports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingAttendanceReport::class);
            /** @var array<MeetingAttendanceReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendanceReports'");
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
     * Gets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @return AudioConferencing|null
    */
    public function getAudioConferencing(): ?AudioConferencing {
        $val = $this->getBackingStore()->get('audioConferencing');
        if (is_null($val) || $val instanceof AudioConferencing) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audioConferencing'");
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
     * Gets the chatInfo property value. The chat information associated with this online meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        $val = $this->getBackingStore()->get('chatInfo');
        if (is_null($val) || $val instanceof ChatInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatInfo'");
    }

    /**
     * Gets the chatRestrictions property value. The chatRestrictions property
     * @return ChatRestrictions|null
    */
    public function getChatRestrictions(): ?ChatRestrictions {
        $val = $this->getBackingStore()->get('chatRestrictions');
        if (is_null($val) || $val instanceof ChatRestrictions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatRestrictions'");
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
            'allowAttendeeToEnableCamera' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableCamera($n->getBooleanValue()),
            'allowAttendeeToEnableMic' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableMic($n->getBooleanValue()),
            'allowedPresenters' => fn(ParseNode $n) => $o->setAllowedPresenters($n->getEnumValue(OnlineMeetingPresenters::class)),
            'allowMeetingChat' => fn(ParseNode $n) => $o->setAllowMeetingChat($n->getEnumValue(MeetingChatMode::class)),
            'allowParticipantsToChangeName' => fn(ParseNode $n) => $o->setAllowParticipantsToChangeName($n->getBooleanValue()),
            'allowRecording' => fn(ParseNode $n) => $o->setAllowRecording($n->getBooleanValue()),
            'allowTeamworkReactions' => fn(ParseNode $n) => $o->setAllowTeamworkReactions($n->getBooleanValue()),
            'allowTranscription' => fn(ParseNode $n) => $o->setAllowTranscription($n->getBooleanValue()),
            'alternativeRecording' => fn(ParseNode $n) => $o->setAlternativeRecording($n->getBinaryContent()),
            'anonymizeIdentityForRoles' => fn(ParseNode $n) => $o->setAnonymizeIdentityForRoles($n->getCollectionOfEnumValues(OnlineMeetingRole::class)),
            'attendanceReports' => fn(ParseNode $n) => $o->setAttendanceReports($n->getCollectionOfObjectValues([MeetingAttendanceReport::class, 'createFromDiscriminatorValue'])),
            'attendeeReport' => fn(ParseNode $n) => $o->setAttendeeReport($n->getBinaryContent()),
            'audioConferencing' => fn(ParseNode $n) => $o->setAudioConferencing($n->getObjectValue([AudioConferencing::class, 'createFromDiscriminatorValue'])),
            'broadcastRecording' => fn(ParseNode $n) => $o->setBroadcastRecording($n->getBinaryContent()),
            'broadcastSettings' => fn(ParseNode $n) => $o->setBroadcastSettings($n->getObjectValue([BroadcastMeetingSettings::class, 'createFromDiscriminatorValue'])),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(MeetingCapabilities::class)),
            'chatInfo' => fn(ParseNode $n) => $o->setChatInfo($n->getObjectValue([ChatInfo::class, 'createFromDiscriminatorValue'])),
            'chatRestrictions' => fn(ParseNode $n) => $o->setChatRestrictions($n->getObjectValue([ChatRestrictions::class, 'createFromDiscriminatorValue'])),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'isBroadcast' => fn(ParseNode $n) => $o->setIsBroadcast($n->getBooleanValue()),
            'isEndToEndEncryptionEnabled' => fn(ParseNode $n) => $o->setIsEndToEndEncryptionEnabled($n->getBooleanValue()),
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
            'recordings' => fn(ParseNode $n) => $o->setRecordings($n->getCollectionOfObjectValues([CallRecording::class, 'createFromDiscriminatorValue'])),
            'registration' => fn(ParseNode $n) => $o->setRegistration($n->getObjectValue([MeetingRegistration::class, 'createFromDiscriminatorValue'])),
            'shareMeetingChatHistoryDefault' => fn(ParseNode $n) => $o->setShareMeetingChatHistoryDefault($n->getEnumValue(MeetingChatHistoryDefaultMode::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'transcripts' => fn(ParseNode $n) => $o->setTranscripts($n->getCollectionOfObjectValues([CallTranscript::class, 'createFromDiscriminatorValue'])),
            'videoTeleconferenceId' => fn(ParseNode $n) => $o->setVideoTeleconferenceId($n->getStringValue()),
            'watermarkProtection' => fn(ParseNode $n) => $o->setWatermarkProtection($n->getObjectValue([WatermarkProtectionValues::class, 'createFromDiscriminatorValue'])),
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
     * Gets the isEndToEndEncryptionEnabled property value. The isEndToEndEncryptionEnabled property
     * @return bool|null
    */
    public function getIsEndToEndEncryptionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEndToEndEncryptionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEndToEndEncryptionEnabled'");
    }

    /**
     * Gets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @return bool|null
    */
    public function getIsEntryExitAnnounced(): ?bool {
        $val = $this->getBackingStore()->get('isEntryExitAnnounced');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEntryExitAnnounced'");
    }

    /**
     * Gets the joinInformation property value. The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @return ItemBody|null
    */
    public function getJoinInformation(): ?ItemBody {
        $val = $this->getBackingStore()->get('joinInformation');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinInformation'");
    }

    /**
     * Gets the joinMeetingIdSettings property value. Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings cannot be modified. To make any changes to this property, the meeting needs to be canceled and a new one needs to be created.
     * @return JoinMeetingIdSettings|null
    */
    public function getJoinMeetingIdSettings(): ?JoinMeetingIdSettings {
        $val = $this->getBackingStore()->get('joinMeetingIdSettings');
        if (is_null($val) || $val instanceof JoinMeetingIdSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinMeetingIdSettings'");
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
     * Gets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('joinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinWebUrl'");
    }

    /**
     * Gets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting lobby.
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        $val = $this->getBackingStore()->get('lobbyBypassSettings');
        if (is_null($val) || $val instanceof LobbyBypassSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lobbyBypassSettings'");
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
     * Gets the participants property value. The participants associated with the online meeting. This includes the organizer and the attendees.
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
     * Gets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @return bool|null
    */
    public function getRecordAutomatically(): ?bool {
        $val = $this->getBackingStore()->get('recordAutomatically');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordAutomatically'");
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
     * Gets the registration property value. The registration that has been enabled for an online meeting. One online meeting can only have one registration enabled.
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
     * Gets the shareMeetingChatHistoryDefault property value. Specifies whether meeting chat history is shared with participants.  Possible values are: all, none, unknownFutureValue.
     * @return MeetingChatHistoryDefaultMode|null
    */
    public function getShareMeetingChatHistoryDefault(): ?MeetingChatHistoryDefaultMode {
        $val = $this->getBackingStore()->get('shareMeetingChatHistoryDefault');
        if (is_null($val) || $val instanceof MeetingChatHistoryDefaultMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shareMeetingChatHistoryDefault'");
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
     * Gets the subject property value. The subject of the online meeting.
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
     * Gets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @return string|null
    */
    public function getVideoTeleconferenceId(): ?string {
        $val = $this->getBackingStore()->get('videoTeleconferenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoTeleconferenceId'");
    }

    /**
     * Gets the watermarkProtection property value. Specifies whether a watermark should be applied to a content type by the client application.
     * @return WatermarkProtectionValues|null
    */
    public function getWatermarkProtection(): ?WatermarkProtectionValues {
        $val = $this->getBackingStore()->get('watermarkProtection');
        if (is_null($val) || $val instanceof WatermarkProtectionValues) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'watermarkProtection'");
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
        $writer->writeBooleanValue('allowRecording', $this->getAllowRecording());
        $writer->writeBooleanValue('allowTeamworkReactions', $this->getAllowTeamworkReactions());
        $writer->writeBooleanValue('allowTranscription', $this->getAllowTranscription());
        $writer->writeBinaryContent('alternativeRecording', $this->getAlternativeRecording());
        $writer->writeCollectionOfEnumValues('anonymizeIdentityForRoles', $this->getAnonymizeIdentityForRoles());
        $writer->writeCollectionOfObjectValues('attendanceReports', $this->getAttendanceReports());
        $writer->writeBinaryContent('attendeeReport', $this->getAttendeeReport());
        $writer->writeObjectValue('audioConferencing', $this->getAudioConferencing());
        $writer->writeBinaryContent('broadcastRecording', $this->getBroadcastRecording());
        $writer->writeObjectValue('broadcastSettings', $this->getBroadcastSettings());
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeObjectValue('chatInfo', $this->getChatInfo());
        $writer->writeObjectValue('chatRestrictions', $this->getChatRestrictions());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeBooleanValue('isBroadcast', $this->getIsBroadcast());
        $writer->writeBooleanValue('isEndToEndEncryptionEnabled', $this->getIsEndToEndEncryptionEnabled());
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
        $writer->writeCollectionOfObjectValues('recordings', $this->getRecordings());
        $writer->writeObjectValue('registration', $this->getRegistration());
        $writer->writeEnumValue('shareMeetingChatHistoryDefault', $this->getShareMeetingChatHistoryDefault());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('transcripts', $this->getTranscripts());
        $writer->writeStringValue('videoTeleconferenceId', $this->getVideoTeleconferenceId());
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
     * Sets the allowRecording property value. Indicates whether recording is enabled for the meeting.
     * @param bool|null $value Value to set for the allowRecording property.
    */
    public function setAllowRecording(?bool $value): void {
        $this->getBackingStore()->set('allowRecording', $value);
    }

    /**
     * Sets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @param bool|null $value Value to set for the allowTeamworkReactions property.
    */
    public function setAllowTeamworkReactions(?bool $value): void {
        $this->getBackingStore()->set('allowTeamworkReactions', $value);
    }

    /**
     * Sets the allowTranscription property value. Indicates whether transcription is enabled for the meeting.
     * @param bool|null $value Value to set for the allowTranscription property.
    */
    public function setAllowTranscription(?bool $value): void {
        $this->getBackingStore()->set('allowTranscription', $value);
    }

    /**
     * Sets the alternativeRecording property value. The alternativeRecording property
     * @param StreamInterface|null $value Value to set for the alternativeRecording property.
    */
    public function setAlternativeRecording(?StreamInterface $value): void {
        $this->getBackingStore()->set('alternativeRecording', $value);
    }

    /**
     * Sets the anonymizeIdentityForRoles property value. Specifies whose identity will be anonymized in the meeting. Possible values are: attendee. The attendee value cannot be removed through a PATCH operation once added.
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
     * Sets the attendeeReport property value. The attendeeReport property
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
     * Sets the chatInfo property value. The chat information associated with this online meeting.
     * @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value): void {
        $this->getBackingStore()->set('chatInfo', $value);
    }

    /**
     * Sets the chatRestrictions property value. The chatRestrictions property
     * @param ChatRestrictions|null $value Value to set for the chatRestrictions property.
    */
    public function setChatRestrictions(?ChatRestrictions $value): void {
        $this->getBackingStore()->set('chatRestrictions', $value);
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
     * Sets the isEndToEndEncryptionEnabled property value. The isEndToEndEncryptionEnabled property
     * @param bool|null $value Value to set for the isEndToEndEncryptionEnabled property.
    */
    public function setIsEndToEndEncryptionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEndToEndEncryptionEnabled', $value);
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
     * Sets the registration property value. The registration that has been enabled for an online meeting. One online meeting can only have one registration enabled.
     * @param MeetingRegistration|null $value Value to set for the registration property.
    */
    public function setRegistration(?MeetingRegistration $value): void {
        $this->getBackingStore()->set('registration', $value);
    }

    /**
     * Sets the shareMeetingChatHistoryDefault property value. Specifies whether meeting chat history is shared with participants.  Possible values are: all, none, unknownFutureValue.
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
     * Sets the watermarkProtection property value. Specifies whether a watermark should be applied to a content type by the client application.
     * @param WatermarkProtectionValues|null $value Value to set for the watermarkProtection property.
    */
    public function setWatermarkProtection(?WatermarkProtectionValues $value): void {
        $this->getBackingStore()->set('watermarkProtection', $value);
    }

}
