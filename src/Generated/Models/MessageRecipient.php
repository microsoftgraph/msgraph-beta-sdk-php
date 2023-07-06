<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MessageRecipient extends Entity implements Parsable 
{
    /**
     * Instantiates a new MessageRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageRecipient {
        return new MessageRecipient();
    }

    /**
     * Gets the deliveryStatus property value. The deliveryStatus property
     * @return MessageStatus|null
    */
    public function getDeliveryStatus(): ?MessageStatus {
        $val = $this->getBackingStore()->get('deliveryStatus');
        if (is_null($val) || $val instanceof MessageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryStatus'");
    }

    /**
     * Gets the events property value. The events property
     * @return array<MessageEvent>|null
    */
    public function getEvents(): ?array {
        $val = $this->getBackingStore()->get('events');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MessageEvent::class);
            /** @var array<MessageEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'events'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryStatus' => fn(ParseNode $n) => $o->setDeliveryStatus($n->getEnumValue(MessageStatus::class)),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([MessageEvent::class, 'createFromDiscriminatorValue'])),
            'recipientEmail' => fn(ParseNode $n) => $o->setRecipientEmail($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recipientEmail property value. The recipientEmail property
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        $val = $this->getBackingStore()->get('recipientEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmail'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryStatus', $this->getDeliveryStatus());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('recipientEmail', $this->getRecipientEmail());
    }

    /**
     * Sets the deliveryStatus property value. The deliveryStatus property
     * @param MessageStatus|null $value Value to set for the deliveryStatus property.
    */
    public function setDeliveryStatus(?MessageStatus $value): void {
        $this->getBackingStore()->set('deliveryStatus', $value);
    }

    /**
     * Sets the events property value. The events property
     * @param array<MessageEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->getBackingStore()->set('events', $value);
    }

    /**
     * Sets the recipientEmail property value. The recipientEmail property
     * @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value): void {
        $this->getBackingStore()->set('recipientEmail', $value);
    }

}
