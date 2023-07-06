<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new MessageEvent and sets the default values.
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
        $val = $this->getBackingStore()->get('dateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dateTime'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return MessageEventType|null
    */
    public function getEventType(): ?MessageEventType {
        $val = $this->getBackingStore()->get('eventType');
        if (is_null($val) || $val instanceof MessageEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dateTime' => fn(ParseNode $n) => $o->setDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getEnumValue(MessageEventType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('dateTime', $this->getDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('eventType', $this->getEventType());
    }

    /**
     * Sets the dateTime property value. The dateTime property
     * @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param MessageEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?MessageEventType $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

}
