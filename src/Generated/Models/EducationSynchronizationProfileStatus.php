<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationProfileStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationSynchronizationProfileStatus and sets the default values.
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
     * Gets the errorCount property value. Number of errors during synchronization.
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->getBackingStore()->get('errorCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the lastActivityDateTime property value. Date and time when most recent changes were observed in the profile.
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActivityDateTime');
    }

    /**
     * Gets the lastSynchronizationDateTime property value. Date and time of the most recent successful synchronization.
     * @return DateTime|null
    */
    public function getLastSynchronizationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSynchronizationDateTime');
    }

    /**
     * Gets the status property value. The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
     * @return EducationSynchronizationStatus|null
    */
    public function getStatus(): ?EducationSynchronizationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the statusMessage property value. Status message for the synchronization stage of the current profile.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->getBackingStore()->get('statusMessage');
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
     * Sets the errorCount property value. Number of errors during synchronization.
     * @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the lastActivityDateTime property value. Date and time when most recent changes were observed in the profile.
     * @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivityDateTime', $value);
    }

    /**
     * Sets the lastSynchronizationDateTime property value. Date and time of the most recent successful synchronization.
     * @param DateTime|null $value Value to set for the lastSynchronizationDateTime property.
    */
    public function setLastSynchronizationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSynchronizationDateTime', $value);
    }

    /**
     * Sets the status property value. The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
     * @param EducationSynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationSynchronizationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusMessage property value. Status message for the synchronization stage of the current profile.
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->getBackingStore()->set('statusMessage', $value);
    }

}
