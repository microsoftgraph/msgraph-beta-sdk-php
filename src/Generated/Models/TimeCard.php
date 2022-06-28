<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeCard extends ChangeTrackedEntity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<TimeCardBreak>|null $breaks The list of breaks associated with the timeCard.
    */
    private ?array $breaks = null;
    
    /**
     * @var TimeCardEvent|null $clockInEvent The clock-in event of the timeCard.
    */
    private ?TimeCardEvent $clockInEvent = null;
    
    /**
     * @var TimeCardEvent|null $clockOutEvent The clock-out event of the timeCard.
    */
    private ?TimeCardEvent $clockOutEvent = null;
    
    /**
     * @var ConfirmedBy|null $confirmedBy Indicate if this timeCard entry is confirmed. Possible values are none, user, manager, unknownFutureValue.
    */
    private ?ConfirmedBy $confirmedBy = null;
    
    /**
     * @var ItemBody|null $notes Notes about the timeCard.
    */
    private ?ItemBody $notes = null;
    
    /**
     * @var TimeCardEntry|null $originalEntry The original timeCardEntry of the timeCard, before user edits.
    */
    private ?TimeCardEntry $originalEntry = null;
    
    /**
     * @var TimeCardState|null $state The current state of the timeCard during its life cycle.Possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
    */
    private ?TimeCardState $state = null;
    
    /**
     * @var string|null $userId User ID to which  the timeCard belongs.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new TimeCard and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCard
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCard {
        return new TimeCard();
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
     * Gets the confirmedBy property value. Indicate if this timeCard entry is confirmed. Possible values are none, user, manager, unknownFutureValue.
     * @return ConfirmedBy|null
    */
    public function getConfirmedBy(): ?ConfirmedBy {
        return $this->confirmedBy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'breaks' => function (ParseNode $n) use ($o) { $o->setBreaks($n->getCollectionOfObjectValues(array(TimeCardBreak::class, 'createFromDiscriminatorValue'))); },
            'clockInEvent' => function (ParseNode $n) use ($o) { $o->setClockInEvent($n->getObjectValue(array(TimeCardEvent::class, 'createFromDiscriminatorValue'))); },
            'clockOutEvent' => function (ParseNode $n) use ($o) { $o->setClockOutEvent($n->getObjectValue(array(TimeCardEvent::class, 'createFromDiscriminatorValue'))); },
            'confirmedBy' => function (ParseNode $n) use ($o) { $o->setConfirmedBy($n->getEnumValue(ConfirmedBy::class)); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'originalEntry' => function (ParseNode $n) use ($o) { $o->setOriginalEntry($n->getObjectValue(array(TimeCardEntry::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(TimeCardState::class)); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the notes property value. Notes about the timeCard.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        return $this->notes;
    }

    /**
     * Gets the originalEntry property value. The original timeCardEntry of the timeCard, before user edits.
     * @return TimeCardEntry|null
    */
    public function getOriginalEntry(): ?TimeCardEntry {
        return $this->originalEntry;
    }

    /**
     * Gets the state property value. The current state of the timeCard during its life cycle.Possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     * @return TimeCardState|null
    */
    public function getState(): ?TimeCardState {
        return $this->state;
    }

    /**
     * Gets the userId property value. User ID to which  the timeCard belongs.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('breaks', $this->breaks);
        $writer->writeObjectValue('clockInEvent', $this->clockInEvent);
        $writer->writeObjectValue('clockOutEvent', $this->clockOutEvent);
        $writer->writeEnumValue('confirmedBy', $this->confirmedBy);
        $writer->writeObjectValue('notes', $this->notes);
        $writer->writeObjectValue('originalEntry', $this->originalEntry);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userId', $this->userId);
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

    /**
     * Sets the confirmedBy property value. Indicate if this timeCard entry is confirmed. Possible values are none, user, manager, unknownFutureValue.
     *  @param ConfirmedBy|null $value Value to set for the confirmedBy property.
    */
    public function setConfirmedBy(?ConfirmedBy $value ): void {
        $this->confirmedBy = $value;
    }

    /**
     * Sets the notes property value. Notes about the timeCard.
     *  @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the originalEntry property value. The original timeCardEntry of the timeCard, before user edits.
     *  @param TimeCardEntry|null $value Value to set for the originalEntry property.
    */
    public function setOriginalEntry(?TimeCardEntry $value ): void {
        $this->originalEntry = $value;
    }

    /**
     * Sets the state property value. The current state of the timeCard during its life cycle.Possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     *  @param TimeCardState|null $value Value to set for the state property.
    */
    public function setState(?TimeCardState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userId property value. User ID to which  the timeCard belongs.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
