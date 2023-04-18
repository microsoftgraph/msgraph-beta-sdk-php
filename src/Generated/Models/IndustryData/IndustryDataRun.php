<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IndustryDataRun extends Entity implements Parsable 
{
    /**
     * Instantiates a new IndustryDataRun and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataRun
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataRun {
        return new IndustryDataRun();
    }

    /**
     * Gets the activities property value. The set of activities performed during the run.
     * @return array<IndustryDataRunActivity>|null
    */
    public function getActivities(): ?array {
        return $this->getBackingStore()->get('activities');
    }

    /**
     * Gets the blockingError property value. An error object to diagnose critical failures in the run.
     * @return PublicError|null
    */
    public function getBlockingError(): ?PublicError {
        return $this->getBackingStore()->get('blockingError');
    }

    /**
     * Gets the displayName property value. The name of the run for rendering in a user interface.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. The date and time when the run finished or null if the run is still in-progress. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([IndustryDataRunActivity::class, 'createFromDiscriminatorValue'])),
            'blockingError' => fn(ParseNode $n) => $o->setBlockingError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IndustryDataRunStatus::class)),
        ]);
    }

    /**
     * Gets the startDateTime property value. The date and time when the run started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return IndustryDataRunStatus|null
    */
    public function getStatus(): ?IndustryDataRunStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activities', $this->getActivities());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the activities property value. The set of activities performed during the run.
     * @param array<IndustryDataRunActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the blockingError property value. An error object to diagnose critical failures in the run.
     * @param PublicError|null $value Value to set for the blockingError property.
    */
    public function setBlockingError(?PublicError $value): void {
        $this->getBackingStore()->set('blockingError', $value);
    }

    /**
     * Sets the displayName property value. The name of the run for rendering in a user interface.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The date and time when the run finished or null if the run is still in-progress. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the run started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IndustryDataRunStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IndustryDataRunStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
