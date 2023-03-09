<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleAssignmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new GovernanceRoleAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleAssignmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleAssignmentRequest {
        return new GovernanceRoleAssignmentRequest();
    }

    /**
     * Gets the assignmentState property value. Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->getBackingStore()->get('assignmentState');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'linkedEligibleRoleAssignmentId' => fn(ParseNode $n) => $o->setLinkedEligibleRoleAssignmentId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'requestedDateTime' => fn(ParseNode $n) => $o->setRequestedDateTime($n->getDateTimeValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([GovernanceSchedule::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([GovernanceRoleAssignmentRequestStatus::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([GovernanceSubject::class, 'createFromDiscriminatorValue'])),
            'subjectId' => fn(ParseNode $n) => $o->setSubjectId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the linkedEligibleRoleAssignmentId property value. If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
     * @return string|null
    */
    public function getLinkedEligibleRoleAssignmentId(): ?string {
        return $this->getBackingStore()->get('linkedEligibleRoleAssignmentId');
    }

    /**
     * Gets the reason property value. A message provided by users and administrators when create the request about why it is needed.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->getBackingStore()->get('reason');
    }

    /**
     * Gets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('requestedDateTime');
    }

    /**
     * Gets the resource property value. Read-only. The resource that the request aims to.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceId property value. Required. The unique identifier of the Azure resource that is associated with the role assignment request. Azure resources can include subscriptions, resource groups, virtual machines, and SQL databases.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->getBackingStore()->get('resourceId');
    }

    /**
     * Gets the roleDefinition property value. Read-only. The role definition that the request aims to.
     * @return GovernanceRoleDefinition|null
    */
    public function getRoleDefinition(): ?GovernanceRoleDefinition {
        return $this->getBackingStore()->get('roleDefinition');
    }

    /**
     * Gets the roleDefinitionId property value. Required. The identifier of the Azure role definition that the role assignment request is associated with.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->getBackingStore()->get('roleDefinitionId');
    }

    /**
     * Gets the schedule property value. The schedule object of the role assignment request.
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the status property value. The status of the role assignment request.
     * @return GovernanceRoleAssignmentRequestStatus|null
    */
    public function getStatus(): ?GovernanceRoleAssignmentRequestStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the subject property value. Read-only. The user/group principal.
     * @return GovernanceSubject|null
    */
    public function getSubject(): ?GovernanceSubject {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the subjectId property value. Required. The unique identifier of the principal or subject that the role assignment request is associated with. Principals can be users, groups, or service principals.
     * @return string|null
    */
    public function getSubjectId(): ?string {
        return $this->getBackingStore()->get('subjectId');
    }

    /**
     * Gets the type property value. Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeStringValue('linkedEligibleRoleAssignmentId', $this->getLinkedEligibleRoleAssignmentId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('requestedDateTime', $this->getRequestedDateTime());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeStringValue('subjectId', $this->getSubjectId());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the assignmentState property value. Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the linkedEligibleRoleAssignmentId property value. If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
     * @param string|null $value Value to set for the linkedEligibleRoleAssignmentId property.
    */
    public function setLinkedEligibleRoleAssignmentId(?string $value): void {
        $this->getBackingStore()->set('linkedEligibleRoleAssignmentId', $value);
    }

    /**
     * Sets the reason property value. A message provided by users and administrators when create the request about why it is needed.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTime', $value);
    }

    /**
     * Sets the resource property value. Read-only. The resource that the request aims to.
     * @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceId property value. Required. The unique identifier of the Azure resource that is associated with the role assignment request. Azure resources can include subscriptions, resource groups, virtual machines, and SQL databases.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the roleDefinition property value. Read-only. The role definition that the request aims to.
     * @param GovernanceRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?GovernanceRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Required. The identifier of the Azure role definition that the role assignment request is associated with.
     * @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the schedule property value. The schedule object of the role assignment request.
     * @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the status property value. The status of the role assignment request.
     * @param GovernanceRoleAssignmentRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?GovernanceRoleAssignmentRequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. Read-only. The user/group principal.
     * @param GovernanceSubject|null $value Value to set for the subject property.
    */
    public function setSubject(?GovernanceSubject $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the subjectId property value. Required. The unique identifier of the principal or subject that the role assignment request is associated with. Principals can be users, groups, or service principals.
     * @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value): void {
        $this->getBackingStore()->set('subjectId', $value);
    }

    /**
     * Sets the type property value. Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
