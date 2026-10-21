<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAssignment extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new UserAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAssignment {
        return new UserAssignment();
    }

    /**
     * Gets the assignedBy property value. Identity of the user (or application) that made the assignment.
     * @return IdentitySet|null
    */
    public function getAssignedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('assignedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedBy'");
    }

    /**
     * Gets the assignedDateTime property value. Date and time the assignment was made.
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('assignedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedDateTime'");
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return UserAssignmentCapability|null
    */
    public function getCapabilities(): ?UserAssignmentCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof UserAssignmentCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedBy' => fn(ParseNode $n) => $o->setAssignedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'assignedDateTime' => fn(ParseNode $n) => $o->setAssignedDateTime($n->getDateTimeValue()),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([UserAssignmentCapability::class, 'createFromDiscriminatorValue'])),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the user property value. The user property
     * @return Identity|null
    */
    public function getUser(): ?Identity {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedBy', $this->getAssignedBy());
        $writer->writeDateTimeValue('assignedDateTime', $this->getAssignedDateTime());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the assignedBy property value. Identity of the user (or application) that made the assignment.
     * @param IdentitySet|null $value Value to set for the assignedBy property.
    */
    public function setAssignedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('assignedBy', $value);
    }

    /**
     * Sets the assignedDateTime property value. Date and time the assignment was made.
     * @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignedDateTime', $value);
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param UserAssignmentCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?UserAssignmentCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the user property value. The user property
     * @param Identity|null $value Value to set for the user property.
    */
    public function setUser(?Identity $value): void {
        $this->getBackingStore()->set('user', $value);
    }

}
