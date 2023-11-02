<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTaskRecurrence implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new plannerTaskRecurrence and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskRecurrence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskRecurrence {
        return new PlannerTaskRecurrence();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'nextInSeriesTaskId' => fn(ParseNode $n) => $o->setNextInSeriesTaskId($n->getStringValue()),
            'occurrenceId' => fn(ParseNode $n) => $o->setOccurrenceId($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previousInSeriesTaskId' => fn(ParseNode $n) => $o->setPreviousInSeriesTaskId($n->getStringValue()),
            'recurrenceStartDateTime' => fn(ParseNode $n) => $o->setRecurrenceStartDateTime($n->getDateTimeValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([PlannerRecurrenceSchedule::class, 'createFromDiscriminatorValue'])),
            'seriesId' => fn(ParseNode $n) => $o->setSeriesId($n->getStringValue()),
        ];
    }

    /**
     * Gets the nextInSeriesTaskId property value. The taskId of the next task in this series. This value is assigned at the time the next task in the series is created, and is null prior to that time.
     * @return string|null
    */
    public function getNextInSeriesTaskId(): ?string {
        $val = $this->getBackingStore()->get('nextInSeriesTaskId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextInSeriesTaskId'");
    }

    /**
     * Gets the occurrenceId property value. The 1-based index of this task within the recurrence series. The first task in a series has the value 1, the next task in the series has the value 2, and so on.
     * @return int|null
    */
    public function getOccurrenceId(): ?int {
        $val = $this->getBackingStore()->get('occurrenceId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'occurrenceId'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the previousInSeriesTaskId property value. The taskId of the previous task in this series. null for the first task in a series since it has no predecessor. All subsequent tasks in the series have a value that corresponds to their predecessors.
     * @return string|null
    */
    public function getPreviousInSeriesTaskId(): ?string {
        $val = $this->getBackingStore()->get('previousInSeriesTaskId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousInSeriesTaskId'");
    }

    /**
     * Gets the recurrenceStartDateTime property value. The date and time when this recurrence series begin. For the first task in a series (occurrenceId = 1) this value is copied from schedule.patternStartDateTime. For subsequent tasks in the series (occurrenceId >= 2) this value is copied from the previous task and never changes; it preserves the start date of the recurring series. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRecurrenceStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('recurrenceStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceStartDateTime'");
    }

    /**
     * Gets the schedule property value. The schedule for recurrence. Clients define and edit recurrence by specifying the schedule. If nextInSeriesTaskId isn't assigned, clients may terminate the series by assigning null to this property.
     * @return PlannerRecurrenceSchedule|null
    */
    public function getSchedule(): ?PlannerRecurrenceSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof PlannerRecurrenceSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the seriesId property value. The recurrence series this task belongs to. A GUID-based value that serves as the unique identifier for a series.
     * @return string|null
    */
    public function getSeriesId(): ?string {
        $val = $this->getBackingStore()->get('seriesId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seriesId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('nextInSeriesTaskId', $this->getNextInSeriesTaskId());
        $writer->writeIntegerValue('occurrenceId', $this->getOccurrenceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('previousInSeriesTaskId', $this->getPreviousInSeriesTaskId());
        $writer->writeDateTimeValue('recurrenceStartDateTime', $this->getRecurrenceStartDateTime());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeStringValue('seriesId', $this->getSeriesId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the nextInSeriesTaskId property value. The taskId of the next task in this series. This value is assigned at the time the next task in the series is created, and is null prior to that time.
     * @param string|null $value Value to set for the nextInSeriesTaskId property.
    */
    public function setNextInSeriesTaskId(?string $value): void {
        $this->getBackingStore()->set('nextInSeriesTaskId', $value);
    }

    /**
     * Sets the occurrenceId property value. The 1-based index of this task within the recurrence series. The first task in a series has the value 1, the next task in the series has the value 2, and so on.
     * @param int|null $value Value to set for the occurrenceId property.
    */
    public function setOccurrenceId(?int $value): void {
        $this->getBackingStore()->set('occurrenceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previousInSeriesTaskId property value. The taskId of the previous task in this series. null for the first task in a series since it has no predecessor. All subsequent tasks in the series have a value that corresponds to their predecessors.
     * @param string|null $value Value to set for the previousInSeriesTaskId property.
    */
    public function setPreviousInSeriesTaskId(?string $value): void {
        $this->getBackingStore()->set('previousInSeriesTaskId', $value);
    }

    /**
     * Sets the recurrenceStartDateTime property value. The date and time when this recurrence series begin. For the first task in a series (occurrenceId = 1) this value is copied from schedule.patternStartDateTime. For subsequent tasks in the series (occurrenceId >= 2) this value is copied from the previous task and never changes; it preserves the start date of the recurring series. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the recurrenceStartDateTime property.
    */
    public function setRecurrenceStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recurrenceStartDateTime', $value);
    }

    /**
     * Sets the schedule property value. The schedule for recurrence. Clients define and edit recurrence by specifying the schedule. If nextInSeriesTaskId isn't assigned, clients may terminate the series by assigning null to this property.
     * @param PlannerRecurrenceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?PlannerRecurrenceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the seriesId property value. The recurrence series this task belongs to. A GUID-based value that serves as the unique identifier for a series.
     * @param string|null $value Value to set for the seriesId property.
    */
    public function setSeriesId(?string $value): void {
        $this->getBackingStore()->set('seriesId', $value);
    }

}
