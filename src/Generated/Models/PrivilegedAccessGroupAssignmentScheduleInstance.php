<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessGroupAssignmentScheduleInstance extends PrivilegedAccessScheduleInstance implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccessGroupAssignmentScheduleInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroupAssignmentScheduleInstance {
        return new PrivilegedAccessGroupAssignmentScheduleInstance();
    }

    /**
     * Gets the accessId property value. The accessId property
     * @return PrivilegedAccessGroupRelationships|null
    */
    public function getAccessId(): ?PrivilegedAccessGroupRelationships {
        return $this->getBackingStore()->get('accessId');
    }

    /**
     * Gets the activatedUsing property value. The activatedUsing property
     * @return PrivilegedAccessGroupEligibilityScheduleInstance|null
    */
    public function getActivatedUsing(): ?PrivilegedAccessGroupEligibilityScheduleInstance {
        return $this->getBackingStore()->get('activatedUsing');
    }

    /**
     * Gets the assignmentScheduleId property value. The assignmentScheduleId property
     * @return string|null
    */
    public function getAssignmentScheduleId(): ?string {
        return $this->getBackingStore()->get('assignmentScheduleId');
    }

    /**
     * Gets the assignmentType property value. The assignmentType property
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
            'activatedUsing' => fn(ParseNode $n) => $o->setActivatedUsing($n->getObjectValue([PrivilegedAccessGroupEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'assignmentScheduleId' => fn(ParseNode $n) => $o->setAssignmentScheduleId($n->getStringValue()),
            'assignmentType' => fn(ParseNode $n) => $o->setAssignmentType($n->getEnumValue(PrivilegedAccessGroupAssignmentType::class)),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getEnumValue(PrivilegedAccessGroupMemberType::class)),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->getBackingStore()->get('group');
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Gets the memberType property value. The memberType property
     * @return PrivilegedAccessGroupMemberType|null
    */
    public function getMemberType(): ?PrivilegedAccessGroupMemberType {
        return $this->getBackingStore()->get('memberType');
    }

    /**
     * Gets the principal property value. The principal property
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->getBackingStore()->get('principal');
    }

    /**
     * Gets the principalId property value. The principalId property
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
        $writer->writeStringValue('assignmentScheduleId', $this->getAssignmentScheduleId());
        $writer->writeEnumValue('assignmentType', $this->getAssignmentType());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeEnumValue('memberType', $this->getMemberType());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
    }

    /**
     * Sets the accessId property value. The accessId property
     * @param PrivilegedAccessGroupRelationships|null $value Value to set for the accessId property.
    */
    public function setAccessId(?PrivilegedAccessGroupRelationships $value): void {
        $this->getBackingStore()->set('accessId', $value);
    }

    /**
     * Sets the activatedUsing property value. The activatedUsing property
     * @param PrivilegedAccessGroupEligibilityScheduleInstance|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?PrivilegedAccessGroupEligibilityScheduleInstance $value): void {
        $this->getBackingStore()->set('activatedUsing', $value);
    }

    /**
     * Sets the assignmentScheduleId property value. The assignmentScheduleId property
     * @param string|null $value Value to set for the assignmentScheduleId property.
    */
    public function setAssignmentScheduleId(?string $value): void {
        $this->getBackingStore()->set('assignmentScheduleId', $value);
    }

    /**
     * Sets the assignmentType property value. The assignmentType property
     * @param PrivilegedAccessGroupAssignmentType|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?PrivilegedAccessGroupAssignmentType $value): void {
        $this->getBackingStore()->set('assignmentType', $value);
    }

    /**
     * Sets the group property value. The group property
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the memberType property value. The memberType property
     * @param PrivilegedAccessGroupMemberType|null $value Value to set for the memberType property.
    */
    public function setMemberType(?PrivilegedAccessGroupMemberType $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the principal property value. The principal property
     * @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. The principalId property
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

}
