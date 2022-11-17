<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TimeCardEntry implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new timeCardEntry and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.timeCardEntry');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardEntry {
        return new TimeCardEntry();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the breaks property value. The list of breaks associated with the timeCard.
     * @return array<TimeCardBreak>|null
    */
    public function getBreaks(): ?array {
        return $this->getBackingStore()->get('breaks');
    }

    /**
     * Gets the clockInEvent property value. The clock-in event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockInEvent(): ?TimeCardEvent {
        return $this->getBackingStore()->get('clockInEvent');
    }

    /**
     * Gets the clockOutEvent property value. The clock-out event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockOutEvent(): ?TimeCardEvent {
        return $this->getBackingStore()->get('clockOutEvent');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'breaks' => fn(ParseNode $n) => $o->setBreaks($n->getCollectionOfObjectValues([TimeCardBreak::class, 'createFromDiscriminatorValue'])),
            'clockInEvent' => fn(ParseNode $n) => $o->setClockInEvent($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
            'clockOutEvent' => fn(ParseNode $n) => $o->setClockOutEvent($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('breaks', $this->getBreaks());
        $writer->writeObjectValue('clockInEvent', $this->getClockInEvent());
        $writer->writeObjectValue('clockOutEvent', $this->getClockOutEvent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the breaks property value. The list of breaks associated with the timeCard.
     *  @param array<TimeCardBreak>|null $value Value to set for the breaks property.
    */
    public function setBreaks(?array $value): void {
        $this->getBackingStore()->set('breaks', $value);
    }

    /**
     * Sets the clockInEvent property value. The clock-in event of the timeCard.
     *  @param TimeCardEvent|null $value Value to set for the clockInEvent property.
    */
    public function setClockInEvent(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('clockInEvent', $value);
    }

    /**
     * Sets the clockOutEvent property value. The clock-out event of the timeCard.
     *  @param TimeCardEvent|null $value Value to set for the clockOutEvent property.
    */
    public function setClockOutEvent(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('clockOutEvent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
