<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentSchedule extends UnifiedRoleScheduleBase 
{
    /** @var UnifiedRoleEligibilitySchedule|null $activatedUsing If the roleAssignmentSchedule is activated by a roleEligibilitySchedule, this is the link to that schedule. */
    private ?UnifiedRoleEligibilitySchedule $activatedUsing = null;
    
    /** @var string|null $assignmentType Type of the assignment. It can either be Assigned or Activated. */
    private ?string $assignmentType = null;
    
    /** @var string|null $memberType Membership type of the assignment. It can either be Inherited, Direct, or Group. */
    private ?string $memberType = null;
    
    /** @var RequestSchedule|null $scheduleInfo The schedule object of the role assignment request. */
    private ?RequestSchedule $scheduleInfo = null;
    
    /**
     * Instantiates a new unifiedRoleAssignmentSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentSchedule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentSchedule {
        return new UnifiedRoleAssignmentSchedule();
    }

    /**
     * Gets the activatedUsing property value. If the roleAssignmentSchedule is activated by a roleEligibilitySchedule, this is the link to that schedule.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getActivatedUsing(): ?UnifiedRoleEligibilitySchedule {
        return $this->activatedUsing;
    }

    /**
     * Gets the assignmentType property value. Type of the assignment. It can either be Assigned or Activated.
     * @return string|null
    */
    public function getAssignmentType(): ?string {
        return $this->assignmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => function (self $o, ParseNode $n) { $o->setActivatedUsing($n->getObjectValue(UnifiedRoleEligibilitySchedule::class)); },
            'assignmentType' => function (self $o, ParseNode $n) { $o->setAssignmentType($n->getStringValue()); },
            'memberType' => function (self $o, ParseNode $n) { $o->setMemberType($n->getStringValue()); },
            'scheduleInfo' => function (self $o, ParseNode $n) { $o->setScheduleInfo($n->getObjectValue(RequestSchedule::class)); },
        ]);
    }

    /**
     * Gets the memberType property value. Membership type of the assignment. It can either be Inherited, Direct, or Group.
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->memberType;
    }

    /**
     * Gets the scheduleInfo property value. The schedule object of the role assignment request.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->activatedUsing);
        $writer->writeStringValue('assignmentType', $this->assignmentType);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeObjectValue('scheduleInfo', $this->scheduleInfo);
    }

    /**
     * Sets the activatedUsing property value. If the roleAssignmentSchedule is activated by a roleEligibilitySchedule, this is the link to that schedule.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilitySchedule $value ): void {
        $this->activatedUsing = $value;
    }

    /**
     * Sets the assignmentType property value. Type of the assignment. It can either be Assigned or Activated.
     *  @param string|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?string $value ): void {
        $this->assignmentType = $value;
    }

    /**
     * Sets the memberType property value. Membership type of the assignment. It can either be Inherited, Direct, or Group.
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the scheduleInfo property value. The schedule object of the role assignment request.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

}
