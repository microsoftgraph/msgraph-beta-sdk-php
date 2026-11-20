<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An agent's contribution to a session. Read this resource to observe the agent's processing status.
*/
class AgentRun extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentRun and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentRun
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentRun {
        return new AgentRun();
    }

    /**
     * Gets the agent property value. Embedded description of the agent that performed a run, without an independently addressable catalog.
     * @return AgentInfo|null
    */
    public function getAgent(): ?AgentInfo {
        $val = $this->getBackingStore()->get('agent');
        if (is_null($val) || $val instanceof AgentInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agent'");
    }

    /**
     * Gets the completedDateTime property value. The UTC date and time when the run completed successfully, in ISO 8601 format. Absent otherwise. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the resource was created, in ISO 8601 format. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the durationInMilliseconds property value. The elapsed time from creation to successful completion, in milliseconds. Absent otherwise. Read-only.
     * @return int|null
    */
    public function getDurationInMilliseconds(): ?int {
        $val = $this->getBackingStore()->get('durationInMilliseconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInMilliseconds'");
    }

    /**
     * Gets the failureInfo property value. The run-level failure details, when available. Read-only.
     * @return AgentRunFailureInfo|null
    */
    public function getFailureInfo(): ?AgentRunFailureInfo {
        $val = $this->getBackingStore()->get('failureInfo');
        if (is_null($val) || $val instanceof AgentRunFailureInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agent' => fn(ParseNode $n) => $o->setAgent($n->getObjectValue([AgentInfo::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'durationInMilliseconds' => fn(ParseNode $n) => $o->setDurationInMilliseconds($n->getIntegerValue()),
            'failureInfo' => fn(ParseNode $n) => $o->setFailureInfo($n->getObjectValue([AgentRunFailureInfo::class, 'createFromDiscriminatorValue'])),
            'initiatedBy' => fn(ParseNode $n) => $o->setInitiatedBy($n->getObjectValue([InvestigationIdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([InvestigationMessage::class, 'createFromDiscriminatorValue'])),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)),
            'statusDetail' => fn(ParseNode $n) => $o->setStatusDetail($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedBy property value. The initiating principals recorded by the service, when available. Read-only. This property doesn't select an execution identity.
     * @return InvestigationIdentitySet|null
    */
    public function getInitiatedBy(): ?InvestigationIdentitySet {
        $val = $this->getBackingStore()->get('initiatedBy');
        if (is_null($val) || $val instanceof InvestigationIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the resource was last updated, in ISO 8601 format. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the messages property value. Read-only investigation messages contained by this run; id maps backend messageId. Supports collection and keyed reads. Message creation is not supported. Collection overflow requires an @odata.nextLink preserving tenant, caller, parent and query context; this schema requirement does not attest runtime implementation.
     * @return array<InvestigationMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InvestigationMessage::class);
            /** @var array<InvestigationMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the startedDateTime property value. The UTC start timestamp, in ISO 8601 format. Currently reflects creation time, not a distinct execution-start measurement. Read-only.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startedDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof LongRunningOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the statusDetail property value. Additional processing detail, including pendingInput or canceled, when the status alone doesn't describe the source lifecycle. Read-only. Doesn't support $filter.
     * @return string|null
    */
    public function getStatusDetail(): ?string {
        $val = $this->getBackingStore()->get('statusDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetail'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agent', $this->getAgent());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the agent property value. Embedded description of the agent that performed a run, without an independently addressable catalog.
     * @param AgentInfo|null $value Value to set for the agent property.
    */
    public function setAgent(?AgentInfo $value): void {
        $this->getBackingStore()->set('agent', $value);
    }

    /**
     * Sets the completedDateTime property value. The UTC date and time when the run completed successfully, in ISO 8601 format. Absent otherwise. Read-only.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the resource was created, in ISO 8601 format. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the durationInMilliseconds property value. The elapsed time from creation to successful completion, in milliseconds. Absent otherwise. Read-only.
     * @param int|null $value Value to set for the durationInMilliseconds property.
    */
    public function setDurationInMilliseconds(?int $value): void {
        $this->getBackingStore()->set('durationInMilliseconds', $value);
    }

    /**
     * Sets the failureInfo property value. The run-level failure details, when available. Read-only.
     * @param AgentRunFailureInfo|null $value Value to set for the failureInfo property.
    */
    public function setFailureInfo(?AgentRunFailureInfo $value): void {
        $this->getBackingStore()->set('failureInfo', $value);
    }

    /**
     * Sets the initiatedBy property value. The initiating principals recorded by the service, when available. Read-only. This property doesn't select an execution identity.
     * @param InvestigationIdentitySet|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?InvestigationIdentitySet $value): void {
        $this->getBackingStore()->set('initiatedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the resource was last updated, in ISO 8601 format. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the messages property value. Read-only investigation messages contained by this run; id maps backend messageId. Supports collection and keyed reads. Message creation is not supported. Collection overflow requires an @odata.nextLink preserving tenant, caller, parent and query context; this schema requirement does not attest runtime implementation.
     * @param array<InvestigationMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the startedDateTime property value. The UTC start timestamp, in ISO 8601 format. Currently reflects creation time, not a distinct execution-start measurement. Read-only.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetail property value. Additional processing detail, including pendingInput or canceled, when the status alone doesn't describe the source lifecycle. Read-only. Doesn't support $filter.
     * @param string|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?string $value): void {
        $this->getBackingStore()->set('statusDetail', $value);
    }

}
