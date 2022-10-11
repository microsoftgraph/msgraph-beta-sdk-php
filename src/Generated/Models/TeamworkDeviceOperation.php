<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceOperation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var IdentitySet|null $createdBy Identity of the user who created the device operation.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The UTC date and time when the device operation was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var OperationError|null $error Error details are available only in case of a failed status.
    */
    private ?OperationError $error = null;
    
    /**
     * @var IdentitySet|null $lastActionBy Identity of the user who last modified the device operation.
    */
    private ?IdentitySet $lastActionBy = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The UTC date and time when the device operation was last modified.
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var TeamworkDeviceOperationType|null $operationType The operationType property
    */
    private ?TeamworkDeviceOperationType $operationType = null;
    
    /**
     * @var DateTime|null $startedDateTime Time at which the operation was started.
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var string|null $status The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new TeamworkDeviceOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkDeviceOperation');
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
        return $this->completedDateTime;
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device operation.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device operation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the error property value. Error details are available only in case of a failed status.
     * @return OperationError|null
    */
    public function getError(): ?OperationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(OperationError::class, 'createFromDiscriminatorValue'))); },
            'lastActionBy' => function (ParseNode $n) use ($o) { $o->setLastActionBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'operationType' => function (ParseNode $n) use ($o) { $o->setOperationType($n->getEnumValue(TeamworkDeviceOperationType::class)); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionBy property value. Identity of the user who last modified the device operation.
     * @return IdentitySet|null
    */
    public function getLastActionBy(): ?IdentitySet {
        return $this->lastActionBy;
    }

    /**
     * Gets the lastActionDateTime property value. The UTC date and time when the device operation was last modified.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return TeamworkDeviceOperationType|null
    */
    public function getOperationType(): ?TeamworkDeviceOperationType {
        return $this->operationType;
    }

    /**
     * Gets the startedDateTime property value. Time at which the operation was started.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->startedDateTime;
    }

    /**
     * Gets the status property value. The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeObjectValue('lastActionBy', $this->lastActionBy);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the completedDateTime property value. Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device operation.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device operation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the error property value. Error details are available only in case of a failed status.
     *  @param OperationError|null $value Value to set for the error property.
    */
    public function setError(?OperationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastActionBy property value. Identity of the user who last modified the device operation.
     *  @param IdentitySet|null $value Value to set for the lastActionBy property.
    */
    public function setLastActionBy(?IdentitySet $value ): void {
        $this->lastActionBy = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The UTC date and time when the device operation was last modified.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the operationType property value. The operationType property
     *  @param TeamworkDeviceOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?TeamworkDeviceOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the startedDateTime property value. Time at which the operation was started.
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value ): void {
        $this->startedDateTime = $value;
    }

    /**
     * Sets the status property value. The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
