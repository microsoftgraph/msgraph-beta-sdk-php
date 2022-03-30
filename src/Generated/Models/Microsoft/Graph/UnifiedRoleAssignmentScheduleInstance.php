<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentScheduleInstance extends UnifiedRoleScheduleInstanceBase 
{
    /** @var UnifiedRoleEligibilityScheduleInstance|null $activatedUsing If the roleAssignmentScheduleInstance is activated by a roleEligibilityScheduleRequest, this is the link to the related schedule instance. */
    private ?UnifiedRoleEligibilityScheduleInstance $activatedUsing = null;
    
    /** @var string|null $assignmentType Type of the assignment. It can either be Assigned or Activated. */
    private ?string $assignmentType = null;
    
    /** @var DateTime|null $endDateTime Time that the roleAssignmentInstance will expire */
    private ?DateTime $endDateTime = null;
    
    /** @var string|null $memberType Membership type of the assignment. It can either be Inherited, Direct, or Group. */
    private ?string $memberType = null;
    
    /** @var string|null $roleAssignmentOriginId ID of the roleAssignment in the directory */
    private ?string $roleAssignmentOriginId = null;
    
    /** @var string|null $roleAssignmentScheduleId ID of the parent roleAssignmentSchedule for this instance */
    private ?string $roleAssignmentScheduleId = null;
    
    /** @var DateTime|null $startDateTime Time that the roleAssignmentInstance will start */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new unifiedRoleAssignmentScheduleInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentScheduleInstance {
        return new UnifiedRoleAssignmentScheduleInstance();
    }

    /**
     * Gets the activatedUsing property value. If the roleAssignmentScheduleInstance is activated by a roleEligibilityScheduleRequest, this is the link to the related schedule instance.
     * @return UnifiedRoleEligibilityScheduleInstance|null
    */
    public function getActivatedUsing(): ?UnifiedRoleEligibilityScheduleInstance {
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
     * Gets the endDateTime property value. Time that the roleAssignmentInstance will expire
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => function (self $o, ParseNode $n) { $o->setActivatedUsing($n->getObjectValue(UnifiedRoleEligibilityScheduleInstance::class)); },
            'assignmentType' => function (self $o, ParseNode $n) { $o->setAssignmentType($n->getStringValue()); },
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getDateTimeValue()); },
            'memberType' => function (self $o, ParseNode $n) { $o->setMemberType($n->getStringValue()); },
            'roleAssignmentOriginId' => function (self $o, ParseNode $n) { $o->setRoleAssignmentOriginId($n->getStringValue()); },
            'roleAssignmentScheduleId' => function (self $o, ParseNode $n) { $o->setRoleAssignmentScheduleId($n->getStringValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
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
     * Gets the roleAssignmentOriginId property value. ID of the roleAssignment in the directory
     * @return string|null
    */
    public function getRoleAssignmentOriginId(): ?string {
        return $this->roleAssignmentOriginId;
    }

    /**
     * Gets the roleAssignmentScheduleId property value. ID of the parent roleAssignmentSchedule for this instance
     * @return string|null
    */
    public function getRoleAssignmentScheduleId(): ?string {
        return $this->roleAssignmentScheduleId;
    }

    /**
     * Gets the startDateTime property value. Time that the roleAssignmentInstance will start
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->activatedUsing);
        $writer->writeStringValue('assignmentType', $this->assignmentType);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeStringValue('roleAssignmentOriginId', $this->roleAssignmentOriginId);
        $writer->writeStringValue('roleAssignmentScheduleId', $this->roleAssignmentScheduleId);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the activatedUsing property value. If the roleAssignmentScheduleInstance is activated by a roleEligibilityScheduleRequest, this is the link to the related schedule instance.
     *  @param UnifiedRoleEligibilityScheduleInstance|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilityScheduleInstance $value ): void {
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
     * Sets the endDateTime property value. Time that the roleAssignmentInstance will expire
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the memberType property value. Membership type of the assignment. It can either be Inherited, Direct, or Group.
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the roleAssignmentOriginId property value. ID of the roleAssignment in the directory
     *  @param string|null $value Value to set for the roleAssignmentOriginId property.
    */
    public function setRoleAssignmentOriginId(?string $value ): void {
        $this->roleAssignmentOriginId = $value;
    }

    /**
     * Sets the roleAssignmentScheduleId property value. ID of the parent roleAssignmentSchedule for this instance
     *  @param string|null $value Value to set for the roleAssignmentScheduleId property.
    */
    public function setRoleAssignmentScheduleId(?string $value ): void {
        $this->roleAssignmentScheduleId = $value;
    }

    /**
     * Sets the startDateTime property value. Time that the roleAssignmentInstance will start
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
