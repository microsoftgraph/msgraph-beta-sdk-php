<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that represents device state summary for an intent
*/
class DeviceManagementIntentDeviceStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementIntentDeviceStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentDeviceStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentDeviceStateSummary {
        return new DeviceManagementIntentDeviceStateSummary();
    }

    /**
     * Gets the conflictCount property value. Number of devices in conflict
     * @return int|null
    */
    public function getConflictCount(): ?int {
        $val = $this->getBackingStore()->get('conflictCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictCount'");
    }

    /**
     * Gets the errorCount property value. Number of error devices
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
     * Gets the failedCount property value. Number of failed devices
     * @return int|null
    */
    public function getFailedCount(): ?int {
        $val = $this->getBackingStore()->get('failedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictCount' => fn(ParseNode $n) => $o->setConflictCount($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'notApplicablePlatformCount' => fn(ParseNode $n) => $o->setNotApplicablePlatformCount($n->getIntegerValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableCount'");
    }

    /**
     * Gets the notApplicablePlatformCount property value. Number of not applicable devices due to mismatch platform and policy
     * @return int|null
    */
    public function getNotApplicablePlatformCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicablePlatformCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicablePlatformCount'");
    }

    /**
     * Gets the successCount property value. Number of succeeded devices
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        $val = $this->getBackingStore()->get('successCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('conflictCount', $this->getConflictCount());
        $writer->writeIntegerValue('errorCount', $this->getErrorCount());
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeIntegerValue('notApplicableCount', $this->getNotApplicableCount());
        $writer->writeIntegerValue('notApplicablePlatformCount', $this->getNotApplicablePlatformCount());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the conflictCount property value. Number of devices in conflict
     * @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value): void {
        $this->getBackingStore()->set('conflictCount', $value);
    }

    /**
     * Sets the errorCount property value. Number of error devices
     * @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the failedCount property value. Number of failed devices
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     * @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableCount', $value);
    }

    /**
     * Sets the notApplicablePlatformCount property value. Number of not applicable devices due to mismatch platform and policy
     * @param int|null $value Value to set for the notApplicablePlatformCount property.
    */
    public function setNotApplicablePlatformCount(?int $value): void {
        $this->getBackingStore()->set('notApplicablePlatformCount', $value);
    }

    /**
     * Sets the successCount property value. Number of succeeded devices
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
