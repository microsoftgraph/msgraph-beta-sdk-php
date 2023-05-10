<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessScheduleRequest extends Request implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccessScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccessScheduleRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessScheduleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessScheduleRequest {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest': return new PrivilegedAccessGroupAssignmentScheduleRequest();
                case '#microsoft.graph.privilegedAccessGroupEligibilityScheduleRequest': return new PrivilegedAccessGroupEligibilityScheduleRequest();
            }
        }
        return new PrivilegedAccessScheduleRequest();
    }

    /**
     * Gets the action property value. Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.
     * @return ScheduleRequestActions|null
    */
    public function getAction(): ?ScheduleRequestActions {
        return $this->getBackingStore()->get('action');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(ScheduleRequestActions::class)),
            'isValidationOnly' => fn(ParseNode $n) => $o->setIsValidationOnly($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'ticketInfo' => fn(ParseNode $n) => $o->setTicketInfo($n->getObjectValue([TicketInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isValidationOnly property value. Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->getBackingStore()->get('isValidationOnly');
    }

    /**
     * Gets the justification property value. A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the scheduleInfo property value. The period of the group membership or ownership assignment. Recurring schedules are currently unsupported.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->getBackingStore()->get('scheduleInfo');
    }

    /**
     * Gets the ticketInfo property value. Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system.
     * @return TicketInfo|null
    */
    public function getTicketInfo(): ?TicketInfo {
        return $this->getBackingStore()->get('ticketInfo');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeBooleanValue('isValidationOnly', $this->getIsValidationOnly());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
        $writer->writeObjectValue('ticketInfo', $this->getTicketInfo());
    }

    /**
     * Sets the action property value. Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.
     * @param ScheduleRequestActions|null $value Value to set for the action property.
    */
    public function setAction(?ScheduleRequestActions $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the isValidationOnly property value. Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     * @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value): void {
        $this->getBackingStore()->set('isValidationOnly', $value);
    }

    /**
     * Sets the justification property value. A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the scheduleInfo property value. The period of the group membership or ownership assignment. Recurring schedules are currently unsupported.
     * @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

    /**
     * Sets the ticketInfo property value. Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system.
     * @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value): void {
        $this->getBackingStore()->set('ticketInfo', $value);
    }

}
