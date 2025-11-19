<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CallEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emergencyCallEvent': return new EmergencyCallEvent();
            }
        }
        return new CallEvent();
    }

    /**
     * Gets the callConversationId property value. The callConversationId property
     * @return string|null
    */
    public function getCallConversationId(): ?string {
        $val = $this->getBackingStore()->get('callConversationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callConversationId'");
    }

    /**
     * Gets the callEventType property value. The event type of the call. Possible values are: callStarted, callEnded, unknownFutureValue, rosterUpdated. You must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: rosterUpdated.
     * @return CallEventType|null
    */
    public function getCallEventType(): ?CallEventType {
        $val = $this->getBackingStore()->get('callEventType');
        if (is_null($val) || $val instanceof CallEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callEventType'");
    }

    /**
     * Gets the eventDateTime property value. The date and time when the event occurred. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callConversationId' => fn(ParseNode $n) => $o->setCallConversationId($n->getStringValue()),
            'callEventType' => fn(ParseNode $n) => $o->setCallEventType($n->getEnumValue(CallEventType::class)),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([Participant::class, 'createFromDiscriminatorValue'])),
            'recordingState' => fn(ParseNode $n) => $o->setRecordingState($n->getObjectValue([RecordingState::class, 'createFromDiscriminatorValue'])),
            'transcriptionState' => fn(ParseNode $n) => $o->setTranscriptionState($n->getObjectValue([TranscriptionState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the participants property value. Participants collection for the call event.
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        $val = $this->getBackingStore()->get('participants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Participant::class);
            /** @var array<Participant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participants'");
    }

    /**
     * Gets the recordingState property value. The recordingState property
     * @return RecordingState|null
    */
    public function getRecordingState(): ?RecordingState {
        $val = $this->getBackingStore()->get('recordingState');
        if (is_null($val) || $val instanceof RecordingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordingState'");
    }

    /**
     * Gets the transcriptionState property value. The transcriptionState property
     * @return TranscriptionState|null
    */
    public function getTranscriptionState(): ?TranscriptionState {
        $val = $this->getBackingStore()->get('transcriptionState');
        if (is_null($val) || $val instanceof TranscriptionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transcriptionState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('callConversationId', $this->getCallConversationId());
        $writer->writeEnumValue('callEventType', $this->getCallEventType());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
        $writer->writeObjectValue('recordingState', $this->getRecordingState());
        $writer->writeObjectValue('transcriptionState', $this->getTranscriptionState());
    }

    /**
     * Sets the callConversationId property value. The callConversationId property
     * @param string|null $value Value to set for the callConversationId property.
    */
    public function setCallConversationId(?string $value): void {
        $this->getBackingStore()->set('callConversationId', $value);
    }

    /**
     * Sets the callEventType property value. The event type of the call. Possible values are: callStarted, callEnded, unknownFutureValue, rosterUpdated. You must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: rosterUpdated.
     * @param CallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?CallEventType $value): void {
        $this->getBackingStore()->set('callEventType', $value);
    }

    /**
     * Sets the eventDateTime property value. The date and time when the event occurred. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the participants property value. Participants collection for the call event.
     * @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the recordingState property value. The recordingState property
     * @param RecordingState|null $value Value to set for the recordingState property.
    */
    public function setRecordingState(?RecordingState $value): void {
        $this->getBackingStore()->set('recordingState', $value);
    }

    /**
     * Sets the transcriptionState property value. The transcriptionState property
     * @param TranscriptionState|null $value Value to set for the transcriptionState property.
    */
    public function setTranscriptionState(?TranscriptionState $value): void {
        $this->getBackingStore()->set('transcriptionState', $value);
    }

}
