<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageEvent extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $dateTime The dateTime property
    */
    private ?DateTime $dateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var MessageEventType|null $eventType The eventType property
    */
    private ?MessageEventType $eventType = null;
    
    /**
     * Instantiates a new messageEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageEvent {
        return new MessageEvent();
    }

    /**
     * Gets the dateTime property value. The dateTime property
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return MessageEventType|null
    */
    public function getEventType(): ?MessageEventType {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dateTime' => function (ParseNode $n) use ($o) { $o->setDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'eventType' => function (ParseNode $n) use ($o) { $o->setEventType($n->getEnumValue(MessageEventType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('dateTime', $this->dateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('eventType', $this->eventType);
    }

    /**
     * Sets the dateTime property value. The dateTime property
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     *  @param MessageEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?MessageEventType $value ): void {
        $this->eventType = $value;
    }

}
