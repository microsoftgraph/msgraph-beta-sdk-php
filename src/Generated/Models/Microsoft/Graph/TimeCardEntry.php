<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeCardEntry implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<TimeCardBreak>|null $breaks The list of breaks associated with the timeCard. */
    private ?array $breaks = null;
    
    /** @var TimeCardEvent|null $clockInEvent The clock-in event of the timeCard. */
    private ?TimeCardEvent $clockInEvent = null;
    
    /** @var TimeCardEvent|null $clockOutEvent The clock-out event of the timeCard. */
    private ?TimeCardEvent $clockOutEvent = null;
    
    /**
     * Instantiates a new timeCardEntry and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardEntry
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardEntry {
        return new TimeCardEntry();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the breaks property value. The list of breaks associated with the timeCard.
     * @return array<TimeCardBreak>|null
    */
    public function getBreaks(): ?array {
        return $this->breaks;
    }

    /**
     * Gets the clockInEvent property value. The clock-in event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockInEvent(): ?TimeCardEvent {
        return $this->clockInEvent;
    }

    /**
     * Gets the clockOutEvent property value. The clock-out event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockOutEvent(): ?TimeCardEvent {
        return $this->clockOutEvent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'breaks' => function (self $o, ParseNode $n) { $o->setBreaks($n->getCollectionOfObjectValues(TimeCardBreak::class)); },
            'clockInEvent' => function (self $o, ParseNode $n) { $o->setClockInEvent($n->getObjectValue(TimeCardEvent::class)); },
            'clockOutEvent' => function (self $o, ParseNode $n) { $o->setClockOutEvent($n->getObjectValue(TimeCardEvent::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('breaks', $this->breaks);
        $writer->writeObjectValue('clockInEvent', $this->clockInEvent);
        $writer->writeObjectValue('clockOutEvent', $this->clockOutEvent);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the breaks property value. The list of breaks associated with the timeCard.
     *  @param array<TimeCardBreak>|null $value Value to set for the breaks property.
    */
    public function setBreaks(?array $value ): void {
        $this->breaks = $value;
    }

    /**
     * Sets the clockInEvent property value. The clock-in event of the timeCard.
     *  @param TimeCardEvent|null $value Value to set for the clockInEvent property.
    */
    public function setClockInEvent(?TimeCardEvent $value ): void {
        $this->clockInEvent = $value;
    }

    /**
     * Sets the clockOutEvent property value. The clock-out event of the timeCard.
     *  @param TimeCardEvent|null $value Value to set for the clockOutEvent property.
    */
    public function setClockOutEvent(?TimeCardEvent $value ): void {
        $this->clockOutEvent = $value;
    }

}
