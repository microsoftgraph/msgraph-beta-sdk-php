<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScheduledPermissionsRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new scheduledPermissionsRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduledPermissionsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduledPermissionsRequest {
        return new ScheduledPermissionsRequest();
    }

    /**
     * Gets the createdDateTime property value. Defines when the identity created the request.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'requestedPermissions' => fn(ParseNode $n) => $o->setRequestedPermissions($n->getObjectValue([PermissionsDefinition::class, 'createFromDiscriminatorValue'])),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'statusDetail' => fn(ParseNode $n) => $o->setStatusDetail($n->getEnumValue(StatusDetail::class)),
            'ticketInfo' => fn(ParseNode $n) => $o->setTicketInfo($n->getObjectValue([TicketInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the justification property value. The identity's justification for the request.
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the notes property value. Additional context for the permissions request.
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the requestedPermissions property value. The requestedPermissions property
     * @return PermissionsDefinition|null
    */
    public function getRequestedPermissions(): ?PermissionsDefinition {
        $val = $this->getBackingStore()->get('requestedPermissions');
        if (is_null($val) || $val instanceof PermissionsDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedPermissions'");
    }

    /**
     * Gets the scheduleInfo property value. When to assign the requested permissions.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('scheduleInfo');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduleInfo'");
    }

    /**
     * Gets the statusDetail property value. The statusDetail property
     * @return StatusDetail|null
    */
    public function getStatusDetail(): ?StatusDetail {
        $val = $this->getBackingStore()->get('statusDetail');
        if (is_null($val) || $val instanceof StatusDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetail'");
    }

    /**
     * Gets the ticketInfo property value. Ticketing-related metadata that you can use to correlate to the request.
     * @return TicketInfo|null
    */
    public function getTicketInfo(): ?TicketInfo {
        $val = $this->getBackingStore()->get('ticketInfo');
        if (is_null($val) || $val instanceof TicketInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeObjectValue('requestedPermissions', $this->getRequestedPermissions());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
        $writer->writeEnumValue('statusDetail', $this->getStatusDetail());
        $writer->writeObjectValue('ticketInfo', $this->getTicketInfo());
    }

    /**
     * Sets the createdDateTime property value. Defines when the identity created the request.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the justification property value. The identity's justification for the request.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the notes property value. Additional context for the permissions request.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the requestedPermissions property value. The requestedPermissions property
     * @param PermissionsDefinition|null $value Value to set for the requestedPermissions property.
    */
    public function setRequestedPermissions(?PermissionsDefinition $value): void {
        $this->getBackingStore()->set('requestedPermissions', $value);
    }

    /**
     * Sets the scheduleInfo property value. When to assign the requested permissions.
     * @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

    /**
     * Sets the statusDetail property value. The statusDetail property
     * @param StatusDetail|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?StatusDetail $value): void {
        $this->getBackingStore()->set('statusDetail', $value);
    }

    /**
     * Sets the ticketInfo property value. Ticketing-related metadata that you can use to correlate to the request.
     * @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value): void {
        $this->getBackingStore()->set('ticketInfo', $value);
    }

}
