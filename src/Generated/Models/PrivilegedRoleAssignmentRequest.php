<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleAssignmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedRoleAssignmentRequest and sets the default values.
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
     * Gets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->getBackingStore()->get('assignmentState');
    }

    /**
     * Gets the duration property value. The duration of a role assignment.
     * @return string|null
    */
    public function getDuration(): ?string {
        return $this->getBackingStore()->get('duration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getStringValue()),
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
     * Gets the reason property value. The reason for the role assignment.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->getBackingStore()->get('reason');
    }

    /**
     * Gets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('requestedDateTime');
    }

    /**
     * Gets the roleId property value. The id of the role.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->getBackingStore()->get('roleId');
    }

    /**
     * Gets the roleInfo property value. The roleInfo object of the role assignment request.
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->getBackingStore()->get('roleInfo');
    }

    /**
     * Gets the schedule property value. The schedule object of the role assignment request.
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the status property value. Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the ticketNumber property value. The ticketNumber for the role assignment.
     * @return string|null
    */
    public function getTicketNumber(): ?string {
        return $this->getBackingStore()->get('ticketNumber');
    }

    /**
     * Gets the ticketSystem property value. The ticketSystem for the role assignment.
     * @return string|null
    */
    public function getTicketSystem(): ?string {
        return $this->getBackingStore()->get('ticketSystem');
    }

    /**
     * Gets the type property value. Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the userId property value. The id of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeStringValue('duration', $this->getDuration());
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
     * Sets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the duration property value. The duration of a role assignment.
     * @param string|null $value Value to set for the duration property.
    */
    public function setDuration(?string $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the reason property value. The reason for the role assignment.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTime', $value);
    }

    /**
     * Sets the roleId property value. The id of the role.
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleInfo property value. The roleInfo object of the role assignment request.
     * @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value): void {
        $this->getBackingStore()->set('roleInfo', $value);
    }

    /**
     * Sets the schedule property value. The schedule object of the role assignment request.
     * @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the status property value. Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the ticketNumber property value. The ticketNumber for the role assignment.
     * @param string|null $value Value to set for the ticketNumber property.
    */
    public function setTicketNumber(?string $value): void {
        $this->getBackingStore()->set('ticketNumber', $value);
    }

    /**
     * Sets the ticketSystem property value. The ticketSystem for the role assignment.
     * @param string|null $value Value to set for the ticketSystem property.
    */
    public function setTicketSystem(?string $value): void {
        $this->getBackingStore()->set('ticketSystem', $value);
    }

    /**
     * Sets the type property value. Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the userId property value. The id of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
