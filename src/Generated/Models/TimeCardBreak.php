<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeCardBreak implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $breakId ID of the timeCardBreak. */
    private ?string $breakId = null;
    
    /** @var TimeCardEvent|null $end The start event of the timeCardBreak. */
    private ?TimeCardEvent $end = null;
    
    /** @var ItemBody|null $notes Notes about the timeCardBreak. */
    private ?ItemBody $notes = null;
    
    /** @var TimeCardEvent|null $start The start property */
    private ?TimeCardEvent $start = null;
    
    /**
     * Instantiates a new timeCardBreak and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardBreak
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardBreak {
        return new TimeCardBreak();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the breakId property value. ID of the timeCardBreak.
     * @return string|null
    */
    public function getBreakId(): ?string {
        return $this->breakId;
    }

    /**
     * Gets the end property value. The start event of the timeCardBreak.
     * @return TimeCardEvent|null
    */
    public function getEnd(): ?TimeCardEvent {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'breakId' => function (self $o, ParseNode $n) { $o->setBreakId($n->getStringValue()); },
            'end' => function (self $o, ParseNode $n) { $o->setEnd($n->getObjectValue(TimeCardEvent::class)); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getObjectValue(ItemBody::class)); },
            'start' => function (self $o, ParseNode $n) { $o->setStart($n->getObjectValue(TimeCardEvent::class)); },
        ];
    }

    /**
     * Gets the notes property value. Notes about the timeCardBreak.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        return $this->notes;
    }

    /**
     * Gets the start property value. The start property
     * @return TimeCardEvent|null
    */
    public function getStart(): ?TimeCardEvent {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('breakId', $this->breakId);
        $writer->writeObjectValue('end', $this->end);
        $writer->writeObjectValue('notes', $this->notes);
        $writer->writeObjectValue('start', $this->start);
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
     * Sets the breakId property value. ID of the timeCardBreak.
     *  @param string|null $value Value to set for the breakId property.
    */
    public function setBreakId(?string $value ): void {
        $this->breakId = $value;
    }

    /**
     * Sets the end property value. The start event of the timeCardBreak.
     *  @param TimeCardEvent|null $value Value to set for the end property.
    */
    public function setEnd(?TimeCardEvent $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the notes property value. Notes about the timeCardBreak.
     *  @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the start property value. The start property
     *  @param TimeCardEvent|null $value Value to set for the start property.
    */
    public function setStart(?TimeCardEvent $value ): void {
        $this->start = $value;
    }

}
