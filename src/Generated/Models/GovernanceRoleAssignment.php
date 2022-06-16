<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleAssignment extends Entity 
{
    /** @var string|null $assignmentState The state of the assignment. The value can be Eligible for eligible assignment or Active if it is directly assigned Active by administrators, or activated on an eligible assignment by the users. */
    private ?string $assignmentState = null;
    
    /** @var DateTime|null $endDateTime For a non-permanent role assignment, this is the time when the role assignment will be expired. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $endDateTime = null;
    
    /** @var string|null $externalId The external ID the resource that is used to identify the role assignment in the provider. */
    private ?string $externalId = null;
    
    /** @var GovernanceRoleAssignment|null $linkedEligibleRoleAssignment Read-only. If this is an active assignment and created due to activation on an eligible assignment, it represents the object of that eligible assignment; Otherwise, the value is null. */
    private ?GovernanceRoleAssignment $linkedEligibleRoleAssignment = null;
    
    /** @var string|null $linkedEligibleRoleAssignmentId If this is an active assignment and created due to activation on an eligible assignment, it represents the ID of that eligible assignment; Otherwise, the value is null. */
    private ?string $linkedEligibleRoleAssignmentId = null;
    
    /** @var string|null $memberType The type of member. The value can be: Inherited (if the role assignment is inherited from a parent resource scope), Group (if the role assignment is not inherited, but comes from the membership of a group assignment), or User (if the role assignment is neither inherited nor from a group assignment). */
    private ?string $memberType = null;
    
    /** @var GovernanceResource|null $resource Read-only. The resource associated with the role assignment. */
    private ?GovernanceResource $resource = null;
    
    /** @var string|null $resourceId Required. The ID of the resource which the role assignment is associated with. */
    private ?string $resourceId = null;
    
    /** @var GovernanceRoleDefinition|null $roleDefinition Read-only. The role definition associated with the role assignment. */
    private ?GovernanceRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Required. The ID of the role definition which the role assignment is associated with. */
    private ?string $roleDefinitionId = null;
    
    /** @var DateTime|null $startDateTime The start time of the role assignment. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $startDateTime = null;
    
    /** @var string|null $status The status property */
    private ?string $status = null;
    
    /** @var GovernanceSubject|null $subject Read-only. The subject associated with the role assignment. */
    private ?GovernanceSubject $subject = null;
    
    /** @var string|null $subjectId Required. The ID of the subject which the role assignment is associated with. */
    private ?string $subjectId = null;
    
    /**
     * Instantiates a new governanceRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleAssignment {
        return new GovernanceRoleAssignment();
    }

    /**
     * Gets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment or Active if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->assignmentState;
    }

    /**
     * Gets the endDateTime property value. For a non-permanent role assignment, this is the time when the role assignment will be expired. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the externalId property value. The external ID the resource that is used to identify the role assignment in the provider.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => function (self $o, ParseNode $n) { $o->setAssignmentState($n->getStringValue()); },
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getDateTimeValue()); },
            'externalId' => function (self $o, ParseNode $n) { $o->setExternalId($n->getStringValue()); },
            'linkedEligibleRoleAssignment' => function (self $o, ParseNode $n) { $o->setLinkedEligibleRoleAssignment($n->getObjectValue(GovernanceRoleAssignment::class)); },
            'linkedEligibleRoleAssignmentId' => function (self $o, ParseNode $n) { $o->setLinkedEligibleRoleAssignmentId($n->getStringValue()); },
            'memberType' => function (self $o, ParseNode $n) { $o->setMemberType($n->getStringValue()); },
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getObjectValue(GovernanceResource::class)); },
            'resourceId' => function (self $o, ParseNode $n) { $o->setResourceId($n->getStringValue()); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(GovernanceRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getObjectValue(GovernanceSubject::class)); },
            'subjectId' => function (self $o, ParseNode $n) { $o->setSubjectId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the linkedEligibleRoleAssignment property value. Read-only. If this is an active assignment and created due to activation on an eligible assignment, it represents the object of that eligible assignment; Otherwise, the value is null.
     * @return GovernanceRoleAssignment|null
    */
    public function getLinkedEligibleRoleAssignment(): ?GovernanceRoleAssignment {
        return $this->linkedEligibleRoleAssignment;
    }

    /**
     * Gets the linkedEligibleRoleAssignmentId property value. If this is an active assignment and created due to activation on an eligible assignment, it represents the ID of that eligible assignment; Otherwise, the value is null.
     * @return string|null
    */
    public function getLinkedEligibleRoleAssignmentId(): ?string {
        return $this->linkedEligibleRoleAssignmentId;
    }

    /**
     * Gets the memberType property value. The type of member. The value can be: Inherited (if the role assignment is inherited from a parent resource scope), Group (if the role assignment is not inherited, but comes from the membership of a group assignment), or User (if the role assignment is neither inherited nor from a group assignment).
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->memberType;
    }

    /**
     * Gets the resource property value. Read-only. The resource associated with the role assignment.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        return $this->resource;
    }

    /**
     * Gets the resourceId property value. Required. The ID of the resource which the role assignment is associated with.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the roleDefinition property value. Read-only. The role definition associated with the role assignment.
     * @return GovernanceRoleDefinition|null
    */
    public function getRoleDefinition(): ?GovernanceRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Required. The ID of the role definition which the role assignment is associated with.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the startDateTime property value. The start time of the role assignment. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the subject property value. Read-only. The subject associated with the role assignment.
     * @return GovernanceSubject|null
    */
    public function getSubject(): ?GovernanceSubject {
        return $this->subject;
    }

    /**
     * Gets the subjectId property value. Required. The ID of the subject which the role assignment is associated with.
     * @return string|null
    */
    public function getSubjectId(): ?string {
        return $this->subjectId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->assignmentState);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeObjectValue('linkedEligibleRoleAssignment', $this->linkedEligibleRoleAssignment);
        $writer->writeStringValue('linkedEligibleRoleAssignmentId', $this->linkedEligibleRoleAssignmentId);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('status', $this->status);
        $writer->writeObjectValue('subject', $this->subject);
        $writer->writeStringValue('subjectId', $this->subjectId);
    }

    /**
     * Sets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment or Active if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     *  @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value ): void {
        $this->assignmentState = $value;
    }

    /**
     * Sets the endDateTime property value. For a non-permanent role assignment, this is the time when the role assignment will be expired. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the externalId property value. The external ID the resource that is used to identify the role assignment in the provider.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the linkedEligibleRoleAssignment property value. Read-only. If this is an active assignment and created due to activation on an eligible assignment, it represents the object of that eligible assignment; Otherwise, the value is null.
     *  @param GovernanceRoleAssignment|null $value Value to set for the linkedEligibleRoleAssignment property.
    */
    public function setLinkedEligibleRoleAssignment(?GovernanceRoleAssignment $value ): void {
        $this->linkedEligibleRoleAssignment = $value;
    }

    /**
     * Sets the linkedEligibleRoleAssignmentId property value. If this is an active assignment and created due to activation on an eligible assignment, it represents the ID of that eligible assignment; Otherwise, the value is null.
     *  @param string|null $value Value to set for the linkedEligibleRoleAssignmentId property.
    */
    public function setLinkedEligibleRoleAssignmentId(?string $value ): void {
        $this->linkedEligibleRoleAssignmentId = $value;
    }

    /**
     * Sets the memberType property value. The type of member. The value can be: Inherited (if the role assignment is inherited from a parent resource scope), Group (if the role assignment is not inherited, but comes from the membership of a group assignment), or User (if the role assignment is neither inherited nor from a group assignment).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the resource property value. Read-only. The resource associated with the role assignment.
     *  @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceId property value. Required. The ID of the resource which the role assignment is associated with.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the roleDefinition property value. Read-only. The role definition associated with the role assignment.
     *  @param GovernanceRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?GovernanceRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Required. The ID of the role definition which the role assignment is associated with.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the startDateTime property value. The start time of the role assignment. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. Read-only. The subject associated with the role assignment.
     *  @param GovernanceSubject|null $value Value to set for the subject property.
    */
    public function setSubject(?GovernanceSubject $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the subjectId property value. Required. The ID of the subject which the role assignment is associated with.
     *  @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value ): void {
        $this->subjectId = $value;
    }

}
