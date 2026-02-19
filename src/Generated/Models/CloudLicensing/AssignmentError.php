<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentError extends Entity implements Parsable 
{
    /**
     * Instantiates a new AssignmentError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentError {
        return new AssignmentError();
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
     * Gets the code property value. The error code associated with the assignment synchronization failure.
     * @return string|null
    */
    public function getCode(): ?string {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'occurrenceDateTime' => fn(ParseNode $n) => $o->setOccurrenceDateTime($n->getDateTimeValue()),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getStringValue()),
            'usageRight' => fn(ParseNode $n) => $o->setUsageRight($n->getObjectValue([UsageRight::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the message property value. The error message associated with the assignment synchronization failure.
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
    }

    /**
     * Gets the occurrenceDateTime property value. The date and time at which the error most recently occurred. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getOccurrenceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('occurrenceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'occurrenceDateTime'");
    }

    /**
     * Gets the skuId property value. Unique identifier (GUID) for the service SKU that is equal to the skuId property on the related subscribedSku object. Read-only. Supports $filter.
     * @return string|null
    */
    public function getSkuId(): ?string {
        $val = $this->getBackingStore()->get('skuId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuId'");
    }

    /**
     * Gets the usageRight property value. The affected usageRight, if one exists. Read-only.
     * @return UsageRight|null
    */
    public function getUsageRight(): ?UsageRight {
        $val = $this->getBackingStore()->get('usageRight');
        if (is_null($val) || $val instanceof UsageRight) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageRight'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('occurrenceDateTime', $this->getOccurrenceDateTime());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeObjectValue('usageRight', $this->getUsageRight());
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param DirectoryObject|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?DirectoryObject $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the code property value. The error code associated with the assignment synchronization failure.
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the message property value. The error message associated with the assignment synchronization failure.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the occurrenceDateTime property value. The date and time at which the error most recently occurred. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the occurrenceDateTime property.
    */
    public function setOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('occurrenceDateTime', $value);
    }

    /**
     * Sets the skuId property value. Unique identifier (GUID) for the service SKU that is equal to the skuId property on the related subscribedSku object. Read-only. Supports $filter.
     * @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

    /**
     * Sets the usageRight property value. The affected usageRight, if one exists. Read-only.
     * @param UsageRight|null $value Value to set for the usageRight property.
    */
    public function setUsageRight(?UsageRight $value): void {
        $this->getBackingStore()->set('usageRight', $value);
    }

}
