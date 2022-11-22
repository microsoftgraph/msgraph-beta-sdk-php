<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamworkDeviceOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceOperation {
        return new TeamworkDeviceOperation();
    }

    /**
     * Gets the completedDateTime property value. Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device operation.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device operation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the error property value. Error details are available only in case of a failed status.
     * @return OperationError|null
    */
    public function getError(): ?OperationError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([OperationError::class, 'createFromDiscriminatorValue'])),
            'lastActionBy' => fn(ParseNode $n) => $o->setLastActionBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(TeamworkDeviceOperationType::class)),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActionBy property value. Identity of the user who last modified the device operation.
     * @return IdentitySet|null
    */
    public function getLastActionBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastActionBy');
    }

    /**
     * Gets the lastActionDateTime property value. The UTC date and time when the device operation was last modified.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return TeamworkDeviceOperationType|null
    */
    public function getOperationType(): ?TeamworkDeviceOperationType {
        return $this->getBackingStore()->get('operationType');
    }

    /**
     * Gets the startedDateTime property value. Time at which the operation was started.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startedDateTime');
    }

    /**
     * Gets the status property value. The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('lastActionBy', $this->getLastActionBy());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the completedDateTime property value. Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device operation.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device operation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the error property value. Error details are available only in case of a failed status.
     *  @param OperationError|null $value Value to set for the error property.
    */
    public function setError(?OperationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastActionBy property value. Identity of the user who last modified the device operation.
     *  @param IdentitySet|null $value Value to set for the lastActionBy property.
    */
    public function setLastActionBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastActionBy', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The UTC date and time when the device operation was last modified.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the operationType property value. The operationType property
     *  @param TeamworkDeviceOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?TeamworkDeviceOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the startedDateTime property value. Time at which the operation was started.
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the status property value. The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
