<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentUserStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementIntentUserStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentUserStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentUserStateSummary {
        return new DeviceManagementIntentUserStateSummary();
    }

    /**
     * Gets the conflictCount property value. Number of users in conflict
     * @return int|null
    */
    public function getConflictCount(): ?int {
        return $this->getBackingStore()->get('conflictCount');
    }

    /**
     * Gets the errorCount property value. Number of error users
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->getBackingStore()->get('errorCount');
    }

    /**
     * Gets the failedCount property value. Number of failed users
     * @return int|null
    */
    public function getFailedCount(): ?int {
        return $this->getBackingStore()->get('failedCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictCount' => fn(ParseNode $n) => $o->setConflictCount($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->getBackingStore()->get('notApplicableCount');
    }

    /**
     * Gets the successCount property value. Number of succeeded users
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->getBackingStore()->get('successCount');
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
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the conflictCount property value. Number of users in conflict
     *  @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value): void {
        $this->getBackingStore()->set('conflictCount', $value);
    }

    /**
     * Sets the errorCount property value. Number of error users
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the failedCount property value. Number of failed users
     *  @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable users
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableCount', $value);
    }

    /**
     * Sets the successCount property value. Number of succeeded users
     *  @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
