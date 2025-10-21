<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\IndustryData;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\\Graph\\Beta\\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('activities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IndustryDataRunActivity::class);
            /** @var array<IndustryDataRunActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the blockingError property value. An error object to diagnose critical failures in the run.
     * @return PublicError|null
    */
    public function getBlockingError(): ?PublicError {
        $val = $this->getBackingStore()->get('blockingError');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockingError'");
    }

    /**
     * Gets the displayName property value. The name of the run for rendering in a user interface.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDateTime property value. The date and time when the run finished or null if the run is still in-progress. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return IndustryDataRunStatus|null
    */
    public function getStatus(): ?IndustryDataRunStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof IndustryDataRunStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
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
