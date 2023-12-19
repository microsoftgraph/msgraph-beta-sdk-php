<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionsRequestChange extends Entity implements Parsable 
{
    /**
     * Instantiates a new permissionsRequestChange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsRequestChange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsRequestChange {
        return new PermissionsRequestChange();
    }

    /**
     * Gets the activeOccurrenceStatus property value. The status of the active occurence of the schedule if one exists. The possible values are: grantingFailed, granted, granting, revoked, revoking, revokingFailed, unknownFutureValue.
     * @return PermissionsRequestChange_activeOccurrenceStatus|null
    */
    public function getActiveOccurrenceStatus(): ?PermissionsRequestChange_activeOccurrenceStatus {
        $val = $this->getBackingStore()->get('activeOccurrenceStatus');
        if (is_null($val) || $val instanceof PermissionsRequestChange_activeOccurrenceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeOccurrenceStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeOccurrenceStatus' => fn(ParseNode $n) => $o->setActiveOccurrenceStatus($n->getEnumValue(PermissionsRequestChange_activeOccurrenceStatus::class)),
            'modificationDateTime' => fn(ParseNode $n) => $o->setModificationDateTime($n->getDateTimeValue()),
            'permissionsRequestId' => fn(ParseNode $n) => $o->setPermissionsRequestId($n->getStringValue()),
            'statusDetail' => fn(ParseNode $n) => $o->setStatusDetail($n->getEnumValue(StatusDetail::class)),
            'ticketId' => fn(ParseNode $n) => $o->setTicketId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the modificationDateTime property value. Time when the change occurred.
     * @return DateTime|null
    */
    public function getModificationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modificationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modificationDateTime'");
    }

    /**
     * Gets the permissionsRequestId property value. The ID of the scheduledPermissionsRequest object.
     * @return string|null
    */
    public function getPermissionsRequestId(): ?string {
        $val = $this->getBackingStore()->get('permissionsRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsRequestId'");
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
     * Gets the ticketId property value. Represents the ticketing system identifier.
     * @return string|null
    */
    public function getTicketId(): ?string {
        $val = $this->getBackingStore()->get('ticketId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activeOccurrenceStatus', $this->getActiveOccurrenceStatus());
        $writer->writeDateTimeValue('modificationDateTime', $this->getModificationDateTime());
        $writer->writeStringValue('permissionsRequestId', $this->getPermissionsRequestId());
        $writer->writeEnumValue('statusDetail', $this->getStatusDetail());
        $writer->writeStringValue('ticketId', $this->getTicketId());
    }

    /**
     * Sets the activeOccurrenceStatus property value. The status of the active occurence of the schedule if one exists. The possible values are: grantingFailed, granted, granting, revoked, revoking, revokingFailed, unknownFutureValue.
     * @param PermissionsRequestChange_activeOccurrenceStatus|null $value Value to set for the activeOccurrenceStatus property.
    */
    public function setActiveOccurrenceStatus(?PermissionsRequestChange_activeOccurrenceStatus $value): void {
        $this->getBackingStore()->set('activeOccurrenceStatus', $value);
    }

    /**
     * Sets the modificationDateTime property value. Time when the change occurred.
     * @param DateTime|null $value Value to set for the modificationDateTime property.
    */
    public function setModificationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modificationDateTime', $value);
    }

    /**
     * Sets the permissionsRequestId property value. The ID of the scheduledPermissionsRequest object.
     * @param string|null $value Value to set for the permissionsRequestId property.
    */
    public function setPermissionsRequestId(?string $value): void {
        $this->getBackingStore()->set('permissionsRequestId', $value);
    }

    /**
     * Sets the statusDetail property value. The statusDetail property
     * @param StatusDetail|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?StatusDetail $value): void {
        $this->getBackingStore()->set('statusDetail', $value);
    }

    /**
     * Sets the ticketId property value. Represents the ticketing system identifier.
     * @param string|null $value Value to set for the ticketId property.
    */
    public function setTicketId(?string $value): void {
        $this->getBackingStore()->set('ticketId', $value);
    }

}
