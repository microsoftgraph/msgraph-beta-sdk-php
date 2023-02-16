<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedAccessGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroup {
        return new PrivilegedAccessGroup();
    }

    /**
     * Gets the assignmentScheduleInstances property value. The assignmentScheduleInstances property
     * @return array<PrivilegedAccessGroupAssignmentScheduleInstance>|null
    */
    public function getAssignmentScheduleInstances(): ?array {
        return $this->getBackingStore()->get('assignmentScheduleInstances');
    }

    /**
     * Gets the assignmentScheduleRequests property value. The assignmentScheduleRequests property
     * @return array<PrivilegedAccessGroupAssignmentScheduleRequest>|null
    */
    public function getAssignmentScheduleRequests(): ?array {
        return $this->getBackingStore()->get('assignmentScheduleRequests');
    }

    /**
     * Gets the assignmentSchedules property value. The assignmentSchedules property
     * @return array<PrivilegedAccessGroupAssignmentSchedule>|null
    */
    public function getAssignmentSchedules(): ?array {
        return $this->getBackingStore()->get('assignmentSchedules');
    }

    /**
     * Gets the eligibilityScheduleInstances property value. The eligibilityScheduleInstances property
     * @return array<PrivilegedAccessGroupEligibilityScheduleInstance>|null
    */
    public function getEligibilityScheduleInstances(): ?array {
        return $this->getBackingStore()->get('eligibilityScheduleInstances');
    }

    /**
     * Gets the eligibilityScheduleRequests property value. The eligibilityScheduleRequests property
     * @return array<PrivilegedAccessGroupEligibilityScheduleRequest>|null
    */
    public function getEligibilityScheduleRequests(): ?array {
        return $this->getBackingStore()->get('eligibilityScheduleRequests');
    }

    /**
     * Gets the eligibilitySchedules property value. The eligibilitySchedules property
     * @return array<PrivilegedAccessGroupEligibilitySchedule>|null
    */
    public function getEligibilitySchedules(): ?array {
        return $this->getBackingStore()->get('eligibilitySchedules');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentScheduleInstances' => fn(ParseNode $n) => $o->setAssignmentScheduleInstances($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'assignmentScheduleRequests' => fn(ParseNode $n) => $o->setAssignmentScheduleRequests($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'assignmentSchedules' => fn(ParseNode $n) => $o->setAssignmentSchedules($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentSchedule::class, 'createFromDiscriminatorValue'])),
            'eligibilityScheduleInstances' => fn(ParseNode $n) => $o->setEligibilityScheduleInstances($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'eligibilityScheduleRequests' => fn(ParseNode $n) => $o->setEligibilityScheduleRequests($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'eligibilitySchedules' => fn(ParseNode $n) => $o->setEligibilitySchedules($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentScheduleInstances', $this->getAssignmentScheduleInstances());
        $writer->writeCollectionOfObjectValues('assignmentScheduleRequests', $this->getAssignmentScheduleRequests());
        $writer->writeCollectionOfObjectValues('assignmentSchedules', $this->getAssignmentSchedules());
        $writer->writeCollectionOfObjectValues('eligibilityScheduleInstances', $this->getEligibilityScheduleInstances());
        $writer->writeCollectionOfObjectValues('eligibilityScheduleRequests', $this->getEligibilityScheduleRequests());
        $writer->writeCollectionOfObjectValues('eligibilitySchedules', $this->getEligibilitySchedules());
    }

    /**
     * Sets the assignmentScheduleInstances property value. The assignmentScheduleInstances property
     * @param array<PrivilegedAccessGroupAssignmentScheduleInstance>|null $value Value to set for the assignmentScheduleInstances property.
    */
    public function setAssignmentScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('assignmentScheduleInstances', $value);
    }

    /**
     * Sets the assignmentScheduleRequests property value. The assignmentScheduleRequests property
     * @param array<PrivilegedAccessGroupAssignmentScheduleRequest>|null $value Value to set for the assignmentScheduleRequests property.
    */
    public function setAssignmentScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('assignmentScheduleRequests', $value);
    }

    /**
     * Sets the assignmentSchedules property value. The assignmentSchedules property
     * @param array<PrivilegedAccessGroupAssignmentSchedule>|null $value Value to set for the assignmentSchedules property.
    */
    public function setAssignmentSchedules(?array $value): void {
        $this->getBackingStore()->set('assignmentSchedules', $value);
    }

    /**
     * Sets the eligibilityScheduleInstances property value. The eligibilityScheduleInstances property
     * @param array<PrivilegedAccessGroupEligibilityScheduleInstance>|null $value Value to set for the eligibilityScheduleInstances property.
    */
    public function setEligibilityScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('eligibilityScheduleInstances', $value);
    }

    /**
     * Sets the eligibilityScheduleRequests property value. The eligibilityScheduleRequests property
     * @param array<PrivilegedAccessGroupEligibilityScheduleRequest>|null $value Value to set for the eligibilityScheduleRequests property.
    */
    public function setEligibilityScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('eligibilityScheduleRequests', $value);
    }

    /**
     * Sets the eligibilitySchedules property value. The eligibilitySchedules property
     * @param array<PrivilegedAccessGroupEligibilitySchedule>|null $value Value to set for the eligibilitySchedules property.
    */
    public function setEligibilitySchedules(?array $value): void {
        $this->getBackingStore()->set('eligibilitySchedules', $value);
    }

}
