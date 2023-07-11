<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleAssignment {
        return new GovernanceRoleAssignment();
    }

    /**
     * Gets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment or Active if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
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
     * Gets the endDateTime property value. For a non-permanent role assignment, this is the time when the role assignment will be expired. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the externalId property value. The external ID the resource that is used to identify the role assignment in the provider.
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
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'linkedEligibleRoleAssignment' => fn(ParseNode $n) => $o->setLinkedEligibleRoleAssignment($n->getObjectValue([GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'linkedEligibleRoleAssignmentId' => fn(ParseNode $n) => $o->setLinkedEligibleRoleAssignmentId($n->getStringValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([GovernanceSubject::class, 'createFromDiscriminatorValue'])),
            'subjectId' => fn(ParseNode $n) => $o->setSubjectId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the linkedEligibleRoleAssignment property value. Read-only. If this is an active assignment and created due to activation on an eligible assignment, it represents the object of that eligible assignment; Otherwise, the value is null.
     * @return GovernanceRoleAssignment|null
    */
    public function getLinkedEligibleRoleAssignment(): ?GovernanceRoleAssignment {
        $val = $this->getBackingStore()->get('linkedEligibleRoleAssignment');
        if (is_null($val) || $val instanceof GovernanceRoleAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkedEligibleRoleAssignment'");
    }

    /**
     * Gets the linkedEligibleRoleAssignmentId property value. If this is an active assignment and created due to activation on an eligible assignment, it represents the ID of that eligible assignment; Otherwise, the value is null.
     * @return string|null
    */
    public function getLinkedEligibleRoleAssignmentId(): ?string {
        $val = $this->getBackingStore()->get('linkedEligibleRoleAssignmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkedEligibleRoleAssignmentId'");
    }

    /**
     * Gets the memberType property value. The type of member. The value can be: Inherited (if the role assignment is inherited from a parent resource scope), Group (if the role assignment is not inherited, but comes from the membership of a group assignment), or User (if the role assignment is neither inherited nor from a group assignment).
     * @return string|null
    */
    public function getMemberType(): ?string {
        $val = $this->getBackingStore()->get('memberType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberType'");
    }

    /**
     * Gets the resource property value. Read-only. The resource associated with the role assignment.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof GovernanceResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Gets the resourceId property value. Required. The ID of the resource which the role assignment is associated with.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the roleDefinition property value. Read-only. The role definition associated with the role assignment.
     * @return GovernanceRoleDefinition|null
    */
    public function getRoleDefinition(): ?GovernanceRoleDefinition {
        $val = $this->getBackingStore()->get('roleDefinition');
        if (is_null($val) || $val instanceof GovernanceRoleDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinition'");
    }

    /**
     * Gets the roleDefinitionId property value. Required. The ID of the role definition which the role assignment is associated with.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('roleDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitionId'");
    }

    /**
     * Gets the startDateTime property value. The start time of the role assignment. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the subject property value. Read-only. The subject associated with the role assignment.
     * @return GovernanceSubject|null
    */
    public function getSubject(): ?GovernanceSubject {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof GovernanceSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the subjectId property value. Required. The ID of the subject which the role assignment is associated with.
     * @return string|null
    */
    public function getSubjectId(): ?string {
        $val = $this->getBackingStore()->get('subjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('linkedEligibleRoleAssignment', $this->getLinkedEligibleRoleAssignment());
        $writer->writeStringValue('linkedEligibleRoleAssignmentId', $this->getLinkedEligibleRoleAssignmentId());
        $writer->writeStringValue('memberType', $this->getMemberType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeStringValue('subjectId', $this->getSubjectId());
    }

    /**
     * Sets the assignmentState property value. The state of the assignment. The value can be Eligible for eligible assignment or Active if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the endDateTime property value. For a non-permanent role assignment, this is the time when the role assignment will be expired. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the externalId property value. The external ID the resource that is used to identify the role assignment in the provider.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the linkedEligibleRoleAssignment property value. Read-only. If this is an active assignment and created due to activation on an eligible assignment, it represents the object of that eligible assignment; Otherwise, the value is null.
     * @param GovernanceRoleAssignment|null $value Value to set for the linkedEligibleRoleAssignment property.
    */
    public function setLinkedEligibleRoleAssignment(?GovernanceRoleAssignment $value): void {
        $this->getBackingStore()->set('linkedEligibleRoleAssignment', $value);
    }

    /**
     * Sets the linkedEligibleRoleAssignmentId property value. If this is an active assignment and created due to activation on an eligible assignment, it represents the ID of that eligible assignment; Otherwise, the value is null.
     * @param string|null $value Value to set for the linkedEligibleRoleAssignmentId property.
    */
    public function setLinkedEligibleRoleAssignmentId(?string $value): void {
        $this->getBackingStore()->set('linkedEligibleRoleAssignmentId', $value);
    }

    /**
     * Sets the memberType property value. The type of member. The value can be: Inherited (if the role assignment is inherited from a parent resource scope), Group (if the role assignment is not inherited, but comes from the membership of a group assignment), or User (if the role assignment is neither inherited nor from a group assignment).
     * @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the resource property value. Read-only. The resource associated with the role assignment.
     * @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceId property value. Required. The ID of the resource which the role assignment is associated with.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the roleDefinition property value. Read-only. The role definition associated with the role assignment.
     * @param GovernanceRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?GovernanceRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Required. The ID of the role definition which the role assignment is associated with.
     * @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the startDateTime property value. The start time of the role assignment. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. Read-only. The subject associated with the role assignment.
     * @param GovernanceSubject|null $value Value to set for the subject property.
    */
    public function setSubject(?GovernanceSubject $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the subjectId property value. Required. The ID of the subject which the role assignment is associated with.
     * @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value): void {
        $this->getBackingStore()->set('subjectId', $value);
    }

}
