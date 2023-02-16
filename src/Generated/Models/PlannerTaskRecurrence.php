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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the nextInSeriesTaskId property value. The nextInSeriesTaskId property
     * @return string|null
    */
    public function getNextInSeriesTaskId(): ?string {
        return $this->getBackingStore()->get('nextInSeriesTaskId');
    }

    /**
     * Gets the occurrenceId property value. The occurrenceId property
     * @return int|null
    */
    public function getOccurrenceId(): ?int {
        return $this->getBackingStore()->get('occurrenceId');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the previousInSeriesTaskId property value. The previousInSeriesTaskId property
     * @return string|null
    */
    public function getPreviousInSeriesTaskId(): ?string {
        return $this->getBackingStore()->get('previousInSeriesTaskId');
    }

    /**
     * Gets the recurrenceStartDateTime property value. The recurrenceStartDateTime property
     * @return DateTime|null
    */
    public function getRecurrenceStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('recurrenceStartDateTime');
    }

    /**
     * Gets the schedule property value. The schedule property
     * @return PlannerRecurrenceSchedule|null
    */
    public function getSchedule(): ?PlannerRecurrenceSchedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the seriesId property value. The seriesId property
     * @return string|null
    */
    public function getSeriesId(): ?string {
        return $this->getBackingStore()->get('seriesId');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the nextInSeriesTaskId property value. The nextInSeriesTaskId property
     * @param string|null $value Value to set for the nextInSeriesTaskId property.
    */
    public function setNextInSeriesTaskId(?string $value): void {
        $this->getBackingStore()->set('nextInSeriesTaskId', $value);
    }

    /**
     * Sets the occurrenceId property value. The occurrenceId property
     * @param int|null $value Value to set for the occurrenceId property.
    */
    public function setOccurrenceId(?int $value): void {
        $this->getBackingStore()->set('occurrenceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previousInSeriesTaskId property value. The previousInSeriesTaskId property
     * @param string|null $value Value to set for the previousInSeriesTaskId property.
    */
    public function setPreviousInSeriesTaskId(?string $value): void {
        $this->getBackingStore()->set('previousInSeriesTaskId', $value);
    }

    /**
     * Sets the recurrenceStartDateTime property value. The recurrenceStartDateTime property
     * @param DateTime|null $value Value to set for the recurrenceStartDateTime property.
    */
    public function setRecurrenceStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recurrenceStartDateTime', $value);
    }

    /**
     * Sets the schedule property value. The schedule property
     * @param PlannerRecurrenceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?PlannerRecurrenceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the seriesId property value. The seriesId property
     * @param string|null $value Value to set for the seriesId property.
    */
    public function setSeriesId(?string $value): void {
        $this->getBackingStore()->set('seriesId', $value);
    }

}
