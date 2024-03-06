<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectRoutingLogRow extends CallLogRow implements Parsable 
{
    /**
     * Instantiates a new DirectRoutingLogRow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectRoutingLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectRoutingLogRow {
        return new DirectRoutingLogRow();
    }

    /**
     * Gets the calleeNumber property value. Number of the user or bot who received the call (E.164 format, but might include more data).
     * @return string|null
    */
    public function getCalleeNumber(): ?string {
        $val = $this->getBackingStore()->get('calleeNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calleeNumber'");
    }

    /**
     * Gets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     * @return int|null
    */
    public function getCallEndSubReason(): ?int {
        $val = $this->getBackingStore()->get('callEndSubReason');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callEndSubReason'");
    }

    /**
     * Gets the callerNumber property value. Number of the user or bot who made the call (E.164 format, but might include more data).
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        $val = $this->getBackingStore()->get('callerNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callerNumber'");
    }

    /**
     * Gets the callType property value. Call type and direction.
     * @return string|null
    */
    public function getCallType(): ?string {
        $val = $this->getBackingStore()->get('callType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callType'");
    }

    /**
     * Gets the correlationId property value. Identifier (GUID) for the call that you can use when calling Microsoft Support.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the duration property value. Duration of the call in seconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the endDateTime property value. Only exists for successful (fully established) calls. The time when the call ended.
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
     * Gets the failureDateTime property value. Only exists for failed (not fully established) calls.
     * @return DateTime|null
    */
    public function getFailureDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('failureDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calleeNumber' => fn(ParseNode $n) => $o->setCalleeNumber($n->getStringValue()),
            'callEndSubReason' => fn(ParseNode $n) => $o->setCallEndSubReason($n->getIntegerValue()),
            'callerNumber' => fn(ParseNode $n) => $o->setCallerNumber($n->getStringValue()),
            'callType' => fn(ParseNode $n) => $o->setCallType($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'failureDateTime' => fn(ParseNode $n) => $o->setFailureDateTime($n->getDateTimeValue()),
            'finalSipCode' => fn(ParseNode $n) => $o->setFinalSipCode($n->getIntegerValue()),
            'finalSipCodePhrase' => fn(ParseNode $n) => $o->setFinalSipCodePhrase($n->getStringValue()),
            'inviteDateTime' => fn(ParseNode $n) => $o->setInviteDateTime($n->getDateTimeValue()),
            'mediaBypassEnabled' => fn(ParseNode $n) => $o->setMediaBypassEnabled($n->getBooleanValue()),
            'mediaPathLocation' => fn(ParseNode $n) => $o->setMediaPathLocation($n->getStringValue()),
            'signalingLocation' => fn(ParseNode $n) => $o->setSignalingLocation($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'successfulCall' => fn(ParseNode $n) => $o->setSuccessfulCall($n->getBooleanValue()),
            'transferorCorrelationId' => fn(ParseNode $n) => $o->setTransferorCorrelationId($n->getStringValue()),
            'trunkFullyQualifiedDomainName' => fn(ParseNode $n) => $o->setTrunkFullyQualifiedDomainName($n->getStringValue()),
            'userCountryCode' => fn(ParseNode $n) => $o->setUserCountryCode($n->getStringValue()),
        ]);
    }

    /**
     * Gets the finalSipCode property value. The final response code with which the call ended (RFC 3261).
     * @return int|null
    */
    public function getFinalSipCode(): ?int {
        $val = $this->getBackingStore()->get('finalSipCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finalSipCode'");
    }

    /**
     * Gets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     * @return string|null
    */
    public function getFinalSipCodePhrase(): ?string {
        $val = $this->getBackingStore()->get('finalSipCodePhrase');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finalSipCodePhrase'");
    }

    /**
     * Gets the inviteDateTime property value. The date and time when the initial invite was sent.
     * @return DateTime|null
    */
    public function getInviteDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('inviteDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inviteDateTime'");
    }

    /**
     * Gets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     * @return bool|null
    */
    public function getMediaBypassEnabled(): ?bool {
        $val = $this->getBackingStore()->get('mediaBypassEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaBypassEnabled'");
    }

    /**
     * Gets the mediaPathLocation property value. The data center used for media path in non-bypass call.
     * @return string|null
    */
    public function getMediaPathLocation(): ?string {
        $val = $this->getBackingStore()->get('mediaPathLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaPathLocation'");
    }

    /**
     * Gets the signalingLocation property value. The data center used for signaling for both bypass and non-bypass calls.
     * @return string|null
    */
    public function getSignalingLocation(): ?string {
        $val = $this->getBackingStore()->get('signalingLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signalingLocation'");
    }

    /**
     * Gets the startDateTime property value. Call start time.For failed and unanswered calls, this value can be equal to invite or failure time.
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
     * Gets the successfulCall property value. Success or attempt.
     * @return bool|null
    */
    public function getSuccessfulCall(): ?bool {
        $val = $this->getBackingStore()->get('successfulCall');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulCall'");
    }

    /**
     * Gets the transferorCorrelationId property value. Correlation ID of the call to the transferor.
     * @return string|null
    */
    public function getTransferorCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('transferorCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transferorCorrelationId'");
    }

    /**
     * Gets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     * @return string|null
    */
    public function getTrunkFullyQualifiedDomainName(): ?string {
        $val = $this->getBackingStore()->get('trunkFullyQualifiedDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trunkFullyQualifiedDomainName'");
    }

    /**
     * Gets the userCountryCode property value. Country/region code of the user. For details, see ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getUserCountryCode(): ?string {
        $val = $this->getBackingStore()->get('userCountryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCountryCode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('calleeNumber', $this->getCalleeNumber());
        $writer->writeIntegerValue('callEndSubReason', $this->getCallEndSubReason());
        $writer->writeStringValue('callerNumber', $this->getCallerNumber());
        $writer->writeStringValue('callType', $this->getCallType());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeDateTimeValue('failureDateTime', $this->getFailureDateTime());
        $writer->writeIntegerValue('finalSipCode', $this->getFinalSipCode());
        $writer->writeStringValue('finalSipCodePhrase', $this->getFinalSipCodePhrase());
        $writer->writeDateTimeValue('inviteDateTime', $this->getInviteDateTime());
        $writer->writeBooleanValue('mediaBypassEnabled', $this->getMediaBypassEnabled());
        $writer->writeStringValue('mediaPathLocation', $this->getMediaPathLocation());
        $writer->writeStringValue('signalingLocation', $this->getSignalingLocation());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeBooleanValue('successfulCall', $this->getSuccessfulCall());
        $writer->writeStringValue('transferorCorrelationId', $this->getTransferorCorrelationId());
        $writer->writeStringValue('trunkFullyQualifiedDomainName', $this->getTrunkFullyQualifiedDomainName());
        $writer->writeStringValue('userCountryCode', $this->getUserCountryCode());
    }

    /**
     * Sets the calleeNumber property value. Number of the user or bot who received the call (E.164 format, but might include more data).
     * @param string|null $value Value to set for the calleeNumber property.
    */
    public function setCalleeNumber(?string $value): void {
        $this->getBackingStore()->set('calleeNumber', $value);
    }

    /**
     * Sets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     * @param int|null $value Value to set for the callEndSubReason property.
    */
    public function setCallEndSubReason(?int $value): void {
        $this->getBackingStore()->set('callEndSubReason', $value);
    }

    /**
     * Sets the callerNumber property value. Number of the user or bot who made the call (E.164 format, but might include more data).
     * @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value): void {
        $this->getBackingStore()->set('callerNumber', $value);
    }

    /**
     * Sets the callType property value. Call type and direction.
     * @param string|null $value Value to set for the callType property.
    */
    public function setCallType(?string $value): void {
        $this->getBackingStore()->set('callType', $value);
    }

    /**
     * Sets the correlationId property value. Identifier (GUID) for the call that you can use when calling Microsoft Support.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the duration property value. Duration of the call in seconds.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDateTime property value. Only exists for successful (fully established) calls. The time when the call ended.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the failureDateTime property value. Only exists for failed (not fully established) calls.
     * @param DateTime|null $value Value to set for the failureDateTime property.
    */
    public function setFailureDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('failureDateTime', $value);
    }

    /**
     * Sets the finalSipCode property value. The final response code with which the call ended (RFC 3261).
     * @param int|null $value Value to set for the finalSipCode property.
    */
    public function setFinalSipCode(?int $value): void {
        $this->getBackingStore()->set('finalSipCode', $value);
    }

    /**
     * Sets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     * @param string|null $value Value to set for the finalSipCodePhrase property.
    */
    public function setFinalSipCodePhrase(?string $value): void {
        $this->getBackingStore()->set('finalSipCodePhrase', $value);
    }

    /**
     * Sets the inviteDateTime property value. The date and time when the initial invite was sent.
     * @param DateTime|null $value Value to set for the inviteDateTime property.
    */
    public function setInviteDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('inviteDateTime', $value);
    }

    /**
     * Sets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     * @param bool|null $value Value to set for the mediaBypassEnabled property.
    */
    public function setMediaBypassEnabled(?bool $value): void {
        $this->getBackingStore()->set('mediaBypassEnabled', $value);
    }

    /**
     * Sets the mediaPathLocation property value. The data center used for media path in non-bypass call.
     * @param string|null $value Value to set for the mediaPathLocation property.
    */
    public function setMediaPathLocation(?string $value): void {
        $this->getBackingStore()->set('mediaPathLocation', $value);
    }

    /**
     * Sets the signalingLocation property value. The data center used for signaling for both bypass and non-bypass calls.
     * @param string|null $value Value to set for the signalingLocation property.
    */
    public function setSignalingLocation(?string $value): void {
        $this->getBackingStore()->set('signalingLocation', $value);
    }

    /**
     * Sets the startDateTime property value. Call start time.For failed and unanswered calls, this value can be equal to invite or failure time.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the successfulCall property value. Success or attempt.
     * @param bool|null $value Value to set for the successfulCall property.
    */
    public function setSuccessfulCall(?bool $value): void {
        $this->getBackingStore()->set('successfulCall', $value);
    }

    /**
     * Sets the transferorCorrelationId property value. Correlation ID of the call to the transferor.
     * @param string|null $value Value to set for the transferorCorrelationId property.
    */
    public function setTransferorCorrelationId(?string $value): void {
        $this->getBackingStore()->set('transferorCorrelationId', $value);
    }

    /**
     * Sets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     * @param string|null $value Value to set for the trunkFullyQualifiedDomainName property.
    */
    public function setTrunkFullyQualifiedDomainName(?string $value): void {
        $this->getBackingStore()->set('trunkFullyQualifiedDomainName', $value);
    }

    /**
     * Sets the userCountryCode property value. Country/region code of the user. For details, see ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the userCountryCode property.
    */
    public function setUserCountryCode(?string $value): void {
        $this->getBackingStore()->set('userCountryCode', $value);
    }

}
