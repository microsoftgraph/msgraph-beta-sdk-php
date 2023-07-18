<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleAssignmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedRoleAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRoleAssignmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRoleAssignmentRequest {
        return new PrivilegedRoleAssignmentRequest();
    }

    /**
     * Gets the assignmentState property value. The assignmentState property
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        $val = $this->getBackingStore()->get('assignmentState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentState'");
    }

    /**
     * Gets the duration property value. The duration property
     * @return string|null
    */
    public function getDuration(): ?string {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'requestedDateTime' => fn(ParseNode $n) => $o->setRequestedDateTime($n->getDateTimeValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleInfo' => fn(ParseNode $n) => $o->setRoleInfo($n->getObjectValue([PrivilegedRole::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([GovernanceSchedule::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'ticketNumber' => fn(ParseNode $n) => $o->setTicketNumber($n->getStringValue()),
            'ticketSystem' => fn(ParseNode $n) => $o->setTicketSystem($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the requestedDateTime property value. The requestedDateTime property
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedDateTime'");
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        $val = $this->getBackingStore()->get('roleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleId'");
    }

    /**
     * Gets the roleInfo property value. The roleInfo property
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        $val = $this->getBackingStore()->get('roleInfo');
        if (is_null($val) || $val instanceof PrivilegedRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleInfo'");
    }

    /**
     * Gets the schedule property value. The schedule property
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof GovernanceSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the ticketNumber property value. The ticketNumber property
     * @return string|null
    */
    public function getTicketNumber(): ?string {
        $val = $this->getBackingStore()->get('ticketNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketNumber'");
    }

    /**
     * Gets the ticketSystem property value. The ticketSystem property
     * @return string|null
    */
    public function getTicketSystem(): ?string {
        $val = $this->getBackingStore()->get('ticketSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketSystem'");
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeStringValue('duration', $this->getDuration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('requestedDateTime', $this->getRequestedDateTime());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeObjectValue('roleInfo', $this->getRoleInfo());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('ticketNumber', $this->getTicketNumber());
        $writer->writeStringValue('ticketSystem', $this->getTicketSystem());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the assignmentState property value. The assignmentState property
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the duration property value. The duration property
     * @param string|null $value Value to set for the duration property.
    */
    public function setDuration(?string $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the requestedDateTime property value. The requestedDateTime property
     * @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTime', $value);
    }

    /**
     * Sets the roleId property value. The roleId property
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleInfo property value. The roleInfo property
     * @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value): void {
        $this->getBackingStore()->set('roleInfo', $value);
    }

    /**
     * Sets the schedule property value. The schedule property
     * @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the ticketNumber property value. The ticketNumber property
     * @param string|null $value Value to set for the ticketNumber property.
    */
    public function setTicketNumber(?string $value): void {
        $this->getBackingStore()->set('ticketNumber', $value);
    }

    /**
     * Sets the ticketSystem property value. The ticketSystem property
     * @param string|null $value Value to set for the ticketSystem property.
    */
    public function setTicketSystem(?string $value): void {
        $this->getBackingStore()->set('ticketSystem', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
