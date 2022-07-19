<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationProfileStatus extends Entity implements Parsable 
{
    /**
     * @var int|null $errorCount Number of errors during synchronization.
    */
    private ?int $errorCount = null;
    
    /**
     * @var DateTime|null $lastActivityDateTime Represents the time when most recent changes were observed in profile.
    */
    private ?DateTime $lastActivityDateTime = null;
    
    /**
     * @var DateTime|null $lastSynchronizationDateTime Represents the time of the most recent successful  synchronization.
    */
    private ?DateTime $lastSynchronizationDateTime = null;
    
    /**
     * @var EducationSynchronizationStatus|null $status The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
    */
    private ?EducationSynchronizationStatus $status = null;
    
    /**
     * @var string|null $statusMessage Status message for the current profile's synchronization stage.
    */
    private ?string $statusMessage = null;
    
    /**
     * Instantiates a new educationSynchronizationProfileStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSynchronizationProfileStatus');
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
     * Gets the errorCount property value. Number of errors during synchronization.
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCount' => function (ParseNode $n) use ($o) { $o->setErrorCount($n->getIntegerValue()); },
            'lastActivityDateTime' => function (ParseNode $n) use ($o) { $o->setLastActivityDateTime($n->getDateTimeValue()); },
            'lastSynchronizationDateTime' => function (ParseNode $n) use ($o) { $o->setLastSynchronizationDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(EducationSynchronizationStatus::class)); },
            'statusMessage' => function (ParseNode $n) use ($o) { $o->setStatusMessage($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActivityDateTime property value. Represents the time when most recent changes were observed in profile.
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        return $this->lastActivityDateTime;
    }

    /**
     * Gets the lastSynchronizationDateTime property value. Represents the time of the most recent successful  synchronization.
     * @return DateTime|null
    */
    public function getLastSynchronizationDateTime(): ?DateTime {
        return $this->lastSynchronizationDateTime;
    }

    /**
     * Gets the status property value. The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
     * @return EducationSynchronizationStatus|null
    */
    public function getStatus(): ?EducationSynchronizationStatus {
        return $this->status;
    }

    /**
     * Gets the statusMessage property value. Status message for the current profile's synchronization stage.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->statusMessage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCount', $this->errorCount);
        $writer->writeDateTimeValue('lastActivityDateTime', $this->lastActivityDateTime);
        $writer->writeDateTimeValue('lastSynchronizationDateTime', $this->lastSynchronizationDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('statusMessage', $this->statusMessage);
    }

    /**
     * Sets the errorCount property value. Number of errors during synchronization.
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the lastActivityDateTime property value. Represents the time when most recent changes were observed in profile.
     *  @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value ): void {
        $this->lastActivityDateTime = $value;
    }

    /**
     * Sets the lastSynchronizationDateTime property value. Represents the time of the most recent successful  synchronization.
     *  @param DateTime|null $value Value to set for the lastSynchronizationDateTime property.
    */
    public function setLastSynchronizationDateTime(?DateTime $value ): void {
        $this->lastSynchronizationDateTime = $value;
    }

    /**
     * Sets the status property value. The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
     *  @param EducationSynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationSynchronizationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusMessage property value. Status message for the current profile's synchronization stage.
     *  @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value ): void {
        $this->statusMessage = $value;
    }

}
