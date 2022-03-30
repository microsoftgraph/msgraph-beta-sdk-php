<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageEvent extends Entity 
{
    /** @var DateTime|null $dateTime  */
    private ?DateTime $dateTime = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var MessageEventType|null $eventType  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): MessageEvent {
        return new MessageEvent();
    }

    /**
     * Gets the dateTime property value. 
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the eventType property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'dateTime' => function (self $o, ParseNode $n) { $o->setDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'eventType' => function (self $o, ParseNode $n) { $o->setEventType($n->getEnumValue(MessageEventType::class)); },
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
     * Sets the dateTime property value. 
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the eventType property value. 
     *  @param MessageEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?MessageEventType $value ): void {
        $this->eventType = $value;
    }

}
