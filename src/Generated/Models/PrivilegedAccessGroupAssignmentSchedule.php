<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessGroupAssignmentSchedule extends PrivilegedAccessSchedule implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccessGroupAssignmentSchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroupAssignmentSchedule {
        return new PrivilegedAccessGroupAssignmentSchedule();
    }

    /**
     * Gets the accessId property value. The identifier of the membership or ownership assignment to the group that is governed by PIM. Required. The possible values are: owner, member, unknownFutureValue.
     * @return PrivilegedAccessGroupRelationships|null
    */
    public function getAccessId(): ?PrivilegedAccessGroupRelationships {
        return $this->getBackingStore()->get('accessId');
    }

    /**
     * Gets the activatedUsing property value. When the request activates an ownership or membership assignment in PIM for groups, this object represents the eligibility relationship. Otherwise, it is null. Supports $expand.
     * @return PrivilegedAccessGroupEligibilitySchedule|null
    */
    public function getActivatedUsing(): ?PrivilegedAccessGroupEligibilitySchedule {
        return $this->getBackingStore()->get('activatedUsing');
    }

    /**
     * Gets the assignmentType property value. Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
     * @return PrivilegedAccessGroupAssignmentType|null
    */
    public function getAssignmentType(): ?PrivilegedAccessGroupAssignmentType {
        return $this->getBackingStore()->get('assignmentType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessId' => fn(ParseNode $n) => $o->setAccessId($n->getEnumValue(PrivilegedAccessGroupRelationships::class)),
            'activatedUsing' => fn(ParseNode $n) => $o->setActivatedUsing($n->getObjectValue([PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'assignmentType' => fn(ParseNode $n) => $o->setAssignmentType($n->getEnumValue(PrivilegedAccessGroupAssignmentType::class)),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getEnumValue(PrivilegedAccessGroupMemberType::class)),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the group property value. References the group that is the scope of the membership or ownership assignment through PIM for groups. Supports $expand.
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->getBackingStore()->get('group');
    }

    /**
     * Gets the groupId property value. The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Gets the memberType property value. Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue.
     * @return PrivilegedAccessGroupMemberType|null
    */
    public function getMemberType(): ?PrivilegedAccessGroupMemberType {
        return $this->getBackingStore()->get('memberType');
    }

    /**
     * Gets the principal property value. References the principal that's in the scope of this membership or ownership assignment request to the group that's governed by PIM. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->getBackingStore()->get('principal');
    }

    /**
     * Gets the principalId property value. The identifier of the principal whose membership or ownership assignment is granted through PIM for groups. Required.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->getBackingStore()->get('principalId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessId', $this->getAccessId());
        $writer->writeObjectValue('activatedUsing', $this->getActivatedUsing());
        $writer->writeEnumValue('assignmentType', $this->getAssignmentType());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeEnumValue('memberType', $this->getMemberType());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
    }

    /**
     * Sets the accessId property value. The identifier of the membership or ownership assignment to the group that is governed by PIM. Required. The possible values are: owner, member, unknownFutureValue.
     * @param PrivilegedAccessGroupRelationships|null $value Value to set for the accessId property.
    */
    public function setAccessId(?PrivilegedAccessGroupRelationships $value): void {
        $this->getBackingStore()->set('accessId', $value);
    }

    /**
     * Sets the activatedUsing property value. When the request activates an ownership or membership assignment in PIM for groups, this object represents the eligibility relationship. Otherwise, it is null. Supports $expand.
     * @param PrivilegedAccessGroupEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?PrivilegedAccessGroupEligibilitySchedule $value): void {
        $this->getBackingStore()->set('activatedUsing', $value);
    }

    /**
     * Sets the assignmentType property value. Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
     * @param PrivilegedAccessGroupAssignmentType|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?PrivilegedAccessGroupAssignmentType $value): void {
        $this->getBackingStore()->set('assignmentType', $value);
    }

    /**
     * Sets the group property value. References the group that is the scope of the membership or ownership assignment through PIM for groups. Supports $expand.
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the groupId property value. The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the memberType property value. Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue.
     * @param PrivilegedAccessGroupMemberType|null $value Value to set for the memberType property.
    */
    public function setMemberType(?PrivilegedAccessGroupMemberType $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the principal property value. References the principal that's in the scope of this membership or ownership assignment request to the group that's governed by PIM. Supports $expand.
     * @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. The identifier of the principal whose membership or ownership assignment is granted through PIM for groups. Required.
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

}
