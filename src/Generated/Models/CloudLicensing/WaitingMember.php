<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WaitingMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new WaitingMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WaitingMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WaitingMember {
        return new WaitingMember();
    }

    /**
     * Gets the allotment property value. The allotment property
     * @return Allotment|null
    */
    public function getAllotment(): ?Allotment {
        $val = $this->getBackingStore()->get('allotment');
        if (is_null($val) || $val instanceof Allotment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotment'");
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return DirectoryObject|null
    */
    public function getAssignedTo(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allotment' => fn(ParseNode $n) => $o->setAllotment($n->getObjectValue([Allotment::class, 'createFromDiscriminatorValue'])),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'waitingSinceDateTime' => fn(ParseNode $n) => $o->setWaitingSinceDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the waitingSinceDateTime property value. Indicates the moment when the user or device first waited for this license. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getWaitingSinceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('waitingSinceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'waitingSinceDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('allotment', $this->getAllotment());
        $writer->writeObjectValue('assignedTo', $this->getAssignedTo());
        $writer->writeDateTimeValue('waitingSinceDateTime', $this->getWaitingSinceDateTime());
    }

    /**
     * Sets the allotment property value. The allotment property
     * @param Allotment|null $value Value to set for the allotment property.
    */
    public function setAllotment(?Allotment $value): void {
        $this->getBackingStore()->set('allotment', $value);
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param DirectoryObject|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?DirectoryObject $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the waitingSinceDateTime property value. Indicates the moment when the user or device first waited for this license. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the waitingSinceDateTime property.
    */
    public function setWaitingSinceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('waitingSinceDateTime', $value);
    }

}
