<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Call extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $activeModalities The list of active modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. Read-only.
    */
    private ?array $activeModalities = null;
    
    /**
     * @var ParticipantInfo|null $answeredBy The participant that answered the call. Read-only.
    */
    private ?ParticipantInfo $answeredBy = null;
    
    /**
     * @var array<AudioRoutingGroup>|null $audioRoutingGroups The audioRoutingGroups property
    */
    private ?array $audioRoutingGroups = null;
    
    /**
     * @var string|null $callbackUri The callback URL on which callbacks will be delivered. Must be https.
    */
    private ?string $callbackUri = null;
    
    /**
     * @var string|null $callChainId A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
    */
    private ?string $callChainId = null;
    
    /**
     * @var CallOptions|null $callOptions Contains the optional features for the call.
    */
    private ?CallOptions $callOptions = null;
    
    /**
     * @var array<CallRoute>|null $callRoutes The routing information on how the call was retargeted. Read-only.
    */
    private ?array $callRoutes = null;
    
    /**
     * @var ChatInfo|null $chatInfo The chat information. Required information for meeting scenarios.
    */
    private ?ChatInfo $chatInfo = null;
    
    /**
     * @var array<ContentSharingSession>|null $contentSharingSessions The contentSharingSessions property
    */
    private ?array $contentSharingSessions = null;
    
    /**
     * @var CallDirection|null $direction The direction of the call. The possible value are incoming or outgoing. Read-only.
    */
    private ?CallDirection $direction = null;
    
    /**
     * @var IncomingContext|null $incomingContext The context associated with an incoming call. Read-only. Server generated.
    */
    private ?IncomingContext $incomingContext = null;
    
    /**
     * @var MediaConfig|null $mediaConfig The media configuration. Required information for creating peer to peer calls or joining meetings.
    */
    private ?MediaConfig $mediaConfig = null;
    
    /**
     * @var CallMediaState|null $mediaState Read-only. The call media state.
    */
    private ?CallMediaState $mediaState = null;
    
    /**
     * @var MeetingCapability|null $meetingCapability Contains the capabilities of a meeting. Read-only.
    */
    private ?MeetingCapability $meetingCapability = null;
    
    /**
     * @var MeetingInfo|null $meetingInfo The meeting information. Required information for meeting scenarios.
    */
    private ?MeetingInfo $meetingInfo = null;
    
    /**
     * @var string|null $myParticipantId The myParticipantId property
    */
    private ?string $myParticipantId = null;
    
    /**
     * @var array<CommsOperation>|null $operations The operations property
    */
    private ?array $operations = null;
    
    /**
     * @var array<Participant>|null $participants The participants property
    */
    private ?array $participants = null;
    
    /**
     * @var array<string>|null $requestedModalities The requestedModalities property
    */
    private ?array $requestedModalities = null;
    
    /**
     * @var ResultInfo|null $resultInfo The resultInfo property
    */
    private ?ResultInfo $resultInfo = null;
    
    /**
     * @var int|null $ringingTimeoutInSeconds The ringingTimeoutInSeconds property
    */
    private ?int $ringingTimeoutInSeconds = null;
    
    /**
     * @var array<string>|null $routingPolicies The routingPolicies property
    */
    private ?array $routingPolicies = null;
    
    /**
     * @var ParticipantInfo|null $source The source property
    */
    private ?ParticipantInfo $source = null;
    
    /**
     * @var CallState|null $state The state property
    */
    private ?CallState $state = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var array<InvitationParticipantInfo>|null $targets The targets property
    */
    private ?array $targets = null;
    
    /**
     * @var string|null $tenantId The tenantId property
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $terminationReason The terminationReason property
    */
    private ?string $terminationReason = null;
    
    /**
     * @var ToneInfo|null $toneInfo The toneInfo property
    */
    private ?ToneInfo $toneInfo = null;
    
    /**
     * @var CallTranscriptionInfo|null $transcription The transcription information for the call. Read-only.
    */
    private ?CallTranscriptionInfo $transcription = null;
    
    /**
     * Instantiates a new call and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Call
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Call {
        return new Call();
    }

    /**
     * Gets the activeModalities property value. The list of active modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. Read-only.
     * @return array<string>|null
    */
    public function getActiveModalities(): ?array {
        return $this->activeModalities;
    }

    /**
     * Gets the answeredBy property value. The participant that answered the call. Read-only.
     * @return ParticipantInfo|null
    */
    public function getAnsweredBy(): ?ParticipantInfo {
        return $this->answeredBy;
    }

    /**
     * Gets the audioRoutingGroups property value. The audioRoutingGroups property
     * @return array<AudioRoutingGroup>|null
    */
    public function getAudioRoutingGroups(): ?array {
        return $this->audioRoutingGroups;
    }

    /**
     * Gets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * Gets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @return string|null
    */
    public function getCallChainId(): ?string {
        return $this->callChainId;
    }

    /**
     * Gets the callOptions property value. Contains the optional features for the call.
     * @return CallOptions|null
    */
    public function getCallOptions(): ?CallOptions {
        return $this->callOptions;
    }

    /**
     * Gets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     * @return array<CallRoute>|null
    */
    public function getCallRoutes(): ?array {
        return $this->callRoutes;
    }

    /**
     * Gets the chatInfo property value. The chat information. Required information for meeting scenarios.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->chatInfo;
    }

    /**
     * Gets the contentSharingSessions property value. The contentSharingSessions property
     * @return array<ContentSharingSession>|null
    */
    public function getContentSharingSessions(): ?array {
        return $this->contentSharingSessions;
    }

    /**
     * Gets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     * @return CallDirection|null
    */
    public function getDirection(): ?CallDirection {
        return $this->direction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeModalities' => function (ParseNode $n) use ($o) { $o->setActiveModalities($n->getCollectionOfPrimitiveValues()); },
            'answeredBy' => function (ParseNode $n) use ($o) { $o->setAnsweredBy($n->getObjectValue(array(ParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'audioRoutingGroups' => function (ParseNode $n) use ($o) { $o->setAudioRoutingGroups($n->getCollectionOfObjectValues(array(AudioRoutingGroup::class, 'createFromDiscriminatorValue'))); },
            'callbackUri' => function (ParseNode $n) use ($o) { $o->setCallbackUri($n->getStringValue()); },
            'callChainId' => function (ParseNode $n) use ($o) { $o->setCallChainId($n->getStringValue()); },
            'callOptions' => function (ParseNode $n) use ($o) { $o->setCallOptions($n->getObjectValue(array(CallOptions::class, 'createFromDiscriminatorValue'))); },
            'callRoutes' => function (ParseNode $n) use ($o) { $o->setCallRoutes($n->getCollectionOfObjectValues(array(CallRoute::class, 'createFromDiscriminatorValue'))); },
            'chatInfo' => function (ParseNode $n) use ($o) { $o->setChatInfo($n->getObjectValue(array(ChatInfo::class, 'createFromDiscriminatorValue'))); },
            'contentSharingSessions' => function (ParseNode $n) use ($o) { $o->setContentSharingSessions($n->getCollectionOfObjectValues(array(ContentSharingSession::class, 'createFromDiscriminatorValue'))); },
            'direction' => function (ParseNode $n) use ($o) { $o->setDirection($n->getEnumValue(CallDirection::class)); },
            'incomingContext' => function (ParseNode $n) use ($o) { $o->setIncomingContext($n->getObjectValue(array(IncomingContext::class, 'createFromDiscriminatorValue'))); },
            'mediaConfig' => function (ParseNode $n) use ($o) { $o->setMediaConfig($n->getObjectValue(array(MediaConfig::class, 'createFromDiscriminatorValue'))); },
            'mediaState' => function (ParseNode $n) use ($o) { $o->setMediaState($n->getObjectValue(array(CallMediaState::class, 'createFromDiscriminatorValue'))); },
            'meetingCapability' => function (ParseNode $n) use ($o) { $o->setMeetingCapability($n->getObjectValue(array(MeetingCapability::class, 'createFromDiscriminatorValue'))); },
            'meetingInfo' => function (ParseNode $n) use ($o) { $o->setMeetingInfo($n->getObjectValue(array(MeetingInfo::class, 'createFromDiscriminatorValue'))); },
            'myParticipantId' => function (ParseNode $n) use ($o) { $o->setMyParticipantId($n->getStringValue()); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(CommsOperation::class, 'createFromDiscriminatorValue'))); },
            'participants' => function (ParseNode $n) use ($o) { $o->setParticipants($n->getCollectionOfObjectValues(array(Participant::class, 'createFromDiscriminatorValue'))); },
            'requestedModalities' => function (ParseNode $n) use ($o) { $o->setRequestedModalities($n->getCollectionOfPrimitiveValues()); },
            'resultInfo' => function (ParseNode $n) use ($o) { $o->setResultInfo($n->getObjectValue(array(ResultInfo::class, 'createFromDiscriminatorValue'))); },
            'ringingTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setRingingTimeoutInSeconds($n->getIntegerValue()); },
            'routingPolicies' => function (ParseNode $n) use ($o) { $o->setRoutingPolicies($n->getCollectionOfPrimitiveValues()); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getObjectValue(array(ParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(CallState::class)); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'targets' => function (ParseNode $n) use ($o) { $o->setTargets($n->getCollectionOfObjectValues(array(InvitationParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'terminationReason' => function (ParseNode $n) use ($o) { $o->setTerminationReason($n->getStringValue()); },
            'toneInfo' => function (ParseNode $n) use ($o) { $o->setToneInfo($n->getObjectValue(array(ToneInfo::class, 'createFromDiscriminatorValue'))); },
            'transcription' => function (ParseNode $n) use ($o) { $o->setTranscription($n->getObjectValue(array(CallTranscriptionInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the incomingContext property value. The context associated with an incoming call. Read-only. Server generated.
     * @return IncomingContext|null
    */
    public function getIncomingContext(): ?IncomingContext {
        return $this->incomingContext;
    }

    /**
     * Gets the mediaConfig property value. The media configuration. Required information for creating peer to peer calls or joining meetings.
     * @return MediaConfig|null
    */
    public function getMediaConfig(): ?MediaConfig {
        return $this->mediaConfig;
    }

    /**
     * Gets the mediaState property value. Read-only. The call media state.
     * @return CallMediaState|null
    */
    public function getMediaState(): ?CallMediaState {
        return $this->mediaState;
    }

    /**
     * Gets the meetingCapability property value. Contains the capabilities of a meeting. Read-only.
     * @return MeetingCapability|null
    */
    public function getMeetingCapability(): ?MeetingCapability {
        return $this->meetingCapability;
    }

    /**
     * Gets the meetingInfo property value. The meeting information. Required information for meeting scenarios.
     * @return MeetingInfo|null
    */
    public function getMeetingInfo(): ?MeetingInfo {
        return $this->meetingInfo;
    }

    /**
     * Gets the myParticipantId property value. The myParticipantId property
     * @return string|null
    */
    public function getMyParticipantId(): ?string {
        return $this->myParticipantId;
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<CommsOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the participants property value. The participants property
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Gets the requestedModalities property value. The requestedModalities property
     * @return array<string>|null
    */
    public function getRequestedModalities(): ?array {
        return $this->requestedModalities;
    }

    /**
     * Gets the resultInfo property value. The resultInfo property
     * @return ResultInfo|null
    */
    public function getResultInfo(): ?ResultInfo {
        return $this->resultInfo;
    }

    /**
     * Gets the ringingTimeoutInSeconds property value. The ringingTimeoutInSeconds property
     * @return int|null
    */
    public function getRingingTimeoutInSeconds(): ?int {
        return $this->ringingTimeoutInSeconds;
    }

    /**
     * Gets the routingPolicies property value. The routingPolicies property
     * @return array<string>|null
    */
    public function getRoutingPolicies(): ?array {
        return $this->routingPolicies;
    }

    /**
     * Gets the source property value. The source property
     * @return ParticipantInfo|null
    */
    public function getSource(): ?ParticipantInfo {
        return $this->source;
    }

    /**
     * Gets the state property value. The state property
     * @return CallState|null
    */
    public function getState(): ?CallState {
        return $this->state;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the terminationReason property value. The terminationReason property
     * @return string|null
    */
    public function getTerminationReason(): ?string {
        return $this->terminationReason;
    }

    /**
     * Gets the toneInfo property value. The toneInfo property
     * @return ToneInfo|null
    */
    public function getToneInfo(): ?ToneInfo {
        return $this->toneInfo;
    }

    /**
     * Gets the transcription property value. The transcription information for the call. Read-only.
     * @return CallTranscriptionInfo|null
    */
    public function getTranscription(): ?CallTranscriptionInfo {
        return $this->transcription;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('activeModalities', $this->activeModalities);
        $writer->writeObjectValue('answeredBy', $this->answeredBy);
        $writer->writeCollectionOfObjectValues('audioRoutingGroups', $this->audioRoutingGroups);
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeStringValue('callChainId', $this->callChainId);
        $writer->writeObjectValue('callOptions', $this->callOptions);
        $writer->writeCollectionOfObjectValues('callRoutes', $this->callRoutes);
        $writer->writeObjectValue('chatInfo', $this->chatInfo);
        $writer->writeCollectionOfObjectValues('contentSharingSessions', $this->contentSharingSessions);
        $writer->writeEnumValue('direction', $this->direction);
        $writer->writeObjectValue('incomingContext', $this->incomingContext);
        $writer->writeObjectValue('mediaConfig', $this->mediaConfig);
        $writer->writeObjectValue('mediaState', $this->mediaState);
        $writer->writeObjectValue('meetingCapability', $this->meetingCapability);
        $writer->writeObjectValue('meetingInfo', $this->meetingInfo);
        $writer->writeStringValue('myParticipantId', $this->myParticipantId);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
        $writer->writeCollectionOfPrimitiveValues('requestedModalities', $this->requestedModalities);
        $writer->writeObjectValue('resultInfo', $this->resultInfo);
        $writer->writeIntegerValue('ringingTimeoutInSeconds', $this->ringingTimeoutInSeconds);
        $writer->writeCollectionOfPrimitiveValues('routingPolicies', $this->routingPolicies);
        $writer->writeObjectValue('source', $this->source);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('terminationReason', $this->terminationReason);
        $writer->writeObjectValue('toneInfo', $this->toneInfo);
        $writer->writeObjectValue('transcription', $this->transcription);
    }

    /**
     * Sets the activeModalities property value. The list of active modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. Read-only.
     *  @param array<string>|null $value Value to set for the activeModalities property.
    */
    public function setActiveModalities(?array $value ): void {
        $this->activeModalities = $value;
    }

    /**
     * Sets the answeredBy property value. The participant that answered the call. Read-only.
     *  @param ParticipantInfo|null $value Value to set for the answeredBy property.
    */
    public function setAnsweredBy(?ParticipantInfo $value ): void {
        $this->answeredBy = $value;
    }

    /**
     * Sets the audioRoutingGroups property value. The audioRoutingGroups property
     *  @param array<AudioRoutingGroup>|null $value Value to set for the audioRoutingGroups property.
    */
    public function setAudioRoutingGroups(?array $value ): void {
        $this->audioRoutingGroups = $value;
    }

    /**
     * Sets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     *  @param string|null $value Value to set for the callChainId property.
    */
    public function setCallChainId(?string $value ): void {
        $this->callChainId = $value;
    }

    /**
     * Sets the callOptions property value. Contains the optional features for the call.
     *  @param CallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?CallOptions $value ): void {
        $this->callOptions = $value;
    }

    /**
     * Sets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     *  @param array<CallRoute>|null $value Value to set for the callRoutes property.
    */
    public function setCallRoutes(?array $value ): void {
        $this->callRoutes = $value;
    }

    /**
     * Sets the chatInfo property value. The chat information. Required information for meeting scenarios.
     *  @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value ): void {
        $this->chatInfo = $value;
    }

    /**
     * Sets the contentSharingSessions property value. The contentSharingSessions property
     *  @param array<ContentSharingSession>|null $value Value to set for the contentSharingSessions property.
    */
    public function setContentSharingSessions(?array $value ): void {
        $this->contentSharingSessions = $value;
    }

    /**
     * Sets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     *  @param CallDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?CallDirection $value ): void {
        $this->direction = $value;
    }

    /**
     * Sets the incomingContext property value. The context associated with an incoming call. Read-only. Server generated.
     *  @param IncomingContext|null $value Value to set for the incomingContext property.
    */
    public function setIncomingContext(?IncomingContext $value ): void {
        $this->incomingContext = $value;
    }

    /**
     * Sets the mediaConfig property value. The media configuration. Required information for creating peer to peer calls or joining meetings.
     *  @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value ): void {
        $this->mediaConfig = $value;
    }

    /**
     * Sets the mediaState property value. Read-only. The call media state.
     *  @param CallMediaState|null $value Value to set for the mediaState property.
    */
    public function setMediaState(?CallMediaState $value ): void {
        $this->mediaState = $value;
    }

    /**
     * Sets the meetingCapability property value. Contains the capabilities of a meeting. Read-only.
     *  @param MeetingCapability|null $value Value to set for the meetingCapability property.
    */
    public function setMeetingCapability(?MeetingCapability $value ): void {
        $this->meetingCapability = $value;
    }

    /**
     * Sets the meetingInfo property value. The meeting information. Required information for meeting scenarios.
     *  @param MeetingInfo|null $value Value to set for the meetingInfo property.
    */
    public function setMeetingInfo(?MeetingInfo $value ): void {
        $this->meetingInfo = $value;
    }

    /**
     * Sets the myParticipantId property value. The myParticipantId property
     *  @param string|null $value Value to set for the myParticipantId property.
    */
    public function setMyParticipantId(?string $value ): void {
        $this->myParticipantId = $value;
    }

    /**
     * Sets the operations property value. The operations property
     *  @param array<CommsOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the participants property value. The participants property
     *  @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

    /**
     * Sets the requestedModalities property value. The requestedModalities property
     *  @param array<string>|null $value Value to set for the requestedModalities property.
    */
    public function setRequestedModalities(?array $value ): void {
        $this->requestedModalities = $value;
    }

    /**
     * Sets the resultInfo property value. The resultInfo property
     *  @param ResultInfo|null $value Value to set for the resultInfo property.
    */
    public function setResultInfo(?ResultInfo $value ): void {
        $this->resultInfo = $value;
    }

    /**
     * Sets the ringingTimeoutInSeconds property value. The ringingTimeoutInSeconds property
     *  @param int|null $value Value to set for the ringingTimeoutInSeconds property.
    */
    public function setRingingTimeoutInSeconds(?int $value ): void {
        $this->ringingTimeoutInSeconds = $value;
    }

    /**
     * Sets the routingPolicies property value. The routingPolicies property
     *  @param array<string>|null $value Value to set for the routingPolicies property.
    */
    public function setRoutingPolicies(?array $value ): void {
        $this->routingPolicies = $value;
    }

    /**
     * Sets the source property value. The source property
     *  @param ParticipantInfo|null $value Value to set for the source property.
    */
    public function setSource(?ParticipantInfo $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param CallState|null $value Value to set for the state property.
    */
    public function setState(?CallState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the targets property value. The targets property
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the terminationReason property value. The terminationReason property
     *  @param string|null $value Value to set for the terminationReason property.
    */
    public function setTerminationReason(?string $value ): void {
        $this->terminationReason = $value;
    }

    /**
     * Sets the toneInfo property value. The toneInfo property
     *  @param ToneInfo|null $value Value to set for the toneInfo property.
    */
    public function setToneInfo(?ToneInfo $value ): void {
        $this->toneInfo = $value;
    }

    /**
     * Sets the transcription property value. The transcription information for the call. Read-only.
     *  @param CallTranscriptionInfo|null $value Value to set for the transcription property.
    */
    public function setTranscription(?CallTranscriptionInfo $value ): void {
        $this->transcription = $value;
    }

}
