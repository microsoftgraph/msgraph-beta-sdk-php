<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationProfileStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationSynchronizationProfileStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationProfileStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationProfileStatus {
        return new EducationSynchronizationProfileStatus();
    }

    /**
     * Gets the errorCount property value. The errorCount property
     * @return int|null
    */
    public function getErrorCount(): ?int {
        $val = $this->getBackingStore()->get('errorCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'lastActivityDateTime' => fn(ParseNode $n) => $o->setLastActivityDateTime($n->getDateTimeValue()),
            'lastSynchronizationDateTime' => fn(ParseNode $n) => $o->setLastSynchronizationDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EducationSynchronizationStatus::class)),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActivityDateTime property value. The lastActivityDateTime property
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActivityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActivityDateTime'");
    }

    /**
     * Gets the lastSynchronizationDateTime property value. The lastSynchronizationDateTime property
     * @return DateTime|null
    */
    public function getLastSynchronizationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSynchronizationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSynchronizationDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return EducationSynchronizationStatus|null
    */
    public function getStatus(): ?EducationSynchronizationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof EducationSynchronizationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the statusMessage property value. The statusMessage property
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        $val = $this->getBackingStore()->get('statusMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusMessage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCount', $this->getErrorCount());
        $writer->writeDateTimeValue('lastActivityDateTime', $this->getLastActivityDateTime());
        $writer->writeDateTimeValue('lastSynchronizationDateTime', $this->getLastSynchronizationDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusMessage', $this->getStatusMessage());
    }

    /**
     * Sets the errorCount property value. The errorCount property
     * @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the lastActivityDateTime property value. The lastActivityDateTime property
     * @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivityDateTime', $value);
    }

    /**
     * Sets the lastSynchronizationDateTime property value. The lastSynchronizationDateTime property
     * @param DateTime|null $value Value to set for the lastSynchronizationDateTime property.
    */
    public function setLastSynchronizationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSynchronizationDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param EducationSynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationSynchronizationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusMessage property value. The statusMessage property
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->getBackingStore()->set('statusMessage', $value);
    }

}
