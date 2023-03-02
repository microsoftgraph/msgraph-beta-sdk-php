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

class PlannerRecurrenceSchedule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new plannerRecurrenceSchedule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerRecurrenceSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerRecurrenceSchedule {
        return new PlannerRecurrenceSchedule();
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
            'nextOccurrenceDateTime' => fn(ParseNode $n) => $o->setNextOccurrenceDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pattern' => fn(ParseNode $n) => $o->setPattern($n->getObjectValue([RecurrencePattern::class, 'createFromDiscriminatorValue'])),
            'patternStartDateTime' => fn(ParseNode $n) => $o->setPatternStartDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the nextOccurrenceDateTime property value. The nextOccurrenceDateTime property
     * @return DateTime|null
    */
    public function getNextOccurrenceDateTime(): ?DateTime {
        return $this->getBackingStore()->get('nextOccurrenceDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the pattern property value. The pattern property
     * @return RecurrencePattern|null
    */
    public function getPattern(): ?RecurrencePattern {
        return $this->getBackingStore()->get('pattern');
    }

    /**
     * Gets the patternStartDateTime property value. The patternStartDateTime property
     * @return DateTime|null
    */
    public function getPatternStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('patternStartDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('nextOccurrenceDateTime', $this->getNextOccurrenceDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('pattern', $this->getPattern());
        $writer->writeDateTimeValue('patternStartDateTime', $this->getPatternStartDateTime());
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
     * Sets the nextOccurrenceDateTime property value. The nextOccurrenceDateTime property
     * @param DateTime|null $value Value to set for the nextOccurrenceDateTime property.
    */
    public function setNextOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextOccurrenceDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pattern property value. The pattern property
     * @param RecurrencePattern|null $value Value to set for the pattern property.
    */
    public function setPattern(?RecurrencePattern $value): void {
        $this->getBackingStore()->set('pattern', $value);
    }

    /**
     * Sets the patternStartDateTime property value. The patternStartDateTime property
     * @param DateTime|null $value Value to set for the patternStartDateTime property.
    */
    public function setPatternStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('patternStartDateTime', $value);
    }

}
