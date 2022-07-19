<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleAssignmentRequest extends Entity implements Parsable 
{
    /**
     * @var string|null $assignmentState The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
    */
    private ?string $assignmentState = null;
    
    /**
     * @var string|null $duration The duration of a role assignment.
    */
    private ?string $duration = null;
    
    /**
     * @var string|null $reason The reason for the role assignment.
    */
    private ?string $reason = null;
    
    /**
     * @var DateTime|null $requestedDateTime Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $requestedDateTime = null;
    
    /**
     * @var string|null $roleId The id of the role.
    */
    private ?string $roleId = null;
    
    /**
     * @var PrivilegedRole|null $roleInfo The roleInfo object of the role assignment request.
    */
    private ?PrivilegedRole $roleInfo = null;
    
    /**
     * @var GovernanceSchedule|null $schedule The schedule object of the role assignment request.
    */
    private ?GovernanceSchedule $schedule = null;
    
    /**
     * @var string|null $status Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $ticketNumber The ticketNumber for the role assignment.
    */
    private ?string $ticketNumber = null;
    
    /**
     * @var string|null $ticketSystem The ticketSystem for the role assignment.
    */
    private ?string $ticketSystem = null;
    
    /**
     * @var string|null $type Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $userId The id of the user.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new privilegedRoleAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedRoleAssignmentRequest');
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
        return $this->assignmentState;
    }

    /**
     * Gets the duration property value. The duration of a role assignment.
     * @return string|null
    */
    public function getDuration(): ?string {
        return $this->duration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => function (ParseNode $n) use ($o) { $o->setAssignmentState($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getStringValue()); },
            'reason' => function (ParseNode $n) use ($o) { $o->setReason($n->getStringValue()); },
            'requestedDateTime' => function (ParseNode $n) use ($o) { $o->setRequestedDateTime($n->getDateTimeValue()); },
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleInfo' => function (ParseNode $n) use ($o) { $o->setRoleInfo($n->getObjectValue(array(PrivilegedRole::class, 'createFromDiscriminatorValue'))); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(GovernanceSchedule::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'ticketNumber' => function (ParseNode $n) use ($o) { $o->setTicketNumber($n->getStringValue()); },
            'ticketSystem' => function (ParseNode $n) use ($o) { $o->setTicketSystem($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the reason property value. The reason for the role assignment.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        return $this->requestedDateTime;
    }

    /**
     * Gets the roleId property value. The id of the role.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleInfo property value. The roleInfo object of the role assignment request.
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->roleInfo;
    }

    /**
     * Gets the schedule property value. The schedule object of the role assignment request.
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        return $this->schedule;
    }

    /**
     * Gets the status property value. Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the ticketNumber property value. The ticketNumber for the role assignment.
     * @return string|null
    */
    public function getTicketNumber(): ?string {
        return $this->ticketNumber;
    }

    /**
     * Gets the ticketSystem property value. The ticketSystem for the role assignment.
     * @return string|null
    */
    public function getTicketSystem(): ?string {
        return $this->ticketSystem;
    }

    /**
     * Gets the type property value. Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the userId property value. The id of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->assignmentState);
        $writer->writeStringValue('duration', $this->duration);
        $writer->writeStringValue('reason', $this->reason);
        $writer->writeDateTimeValue('requestedDateTime', $this->requestedDateTime);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeObjectValue('roleInfo', $this->roleInfo);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('ticketNumber', $this->ticketNumber);
        $writer->writeStringValue('ticketSystem', $this->ticketSystem);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     *  @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value ): void {
        $this->assignmentState = $value;
    }

    /**
     * Sets the duration property value. The duration of a role assignment.
     *  @param string|null $value Value to set for the duration property.
    */
    public function setDuration(?string $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the reason property value. The reason for the role assignment.
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value ): void {
        $this->requestedDateTime = $value;
    }

    /**
     * Sets the roleId property value. The id of the role.
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleInfo property value. The roleInfo object of the role assignment request.
     *  @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value ): void {
        $this->roleInfo = $value;
    }

    /**
     * Sets the schedule property value. The schedule object of the role assignment request.
     *  @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the status property value. Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the ticketNumber property value. The ticketNumber for the role assignment.
     *  @param string|null $value Value to set for the ticketNumber property.
    */
    public function setTicketNumber(?string $value ): void {
        $this->ticketNumber = $value;
    }

    /**
     * Sets the ticketSystem property value. The ticketSystem for the role assignment.
     *  @param string|null $value Value to set for the ticketSystem property.
    */
    public function setTicketSystem(?string $value ): void {
        $this->ticketSystem = $value;
    }

    /**
     * Sets the type property value. Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userId property value. The id of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
