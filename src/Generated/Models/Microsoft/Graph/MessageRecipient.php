<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageRecipient extends Entity 
{
    /** @var MessageStatus|null $deliveryStatus  */
    private ?MessageStatus $deliveryStatus = null;
    
    /** @var array<MessageEvent>|null $events  */
    private ?array $events = null;
    
    /** @var string|null $recipientEmail  */
    private ?string $recipientEmail = null;
    
    /**
     * Instantiates a new messageRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageRecipient
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MessageRecipient {
        return new MessageRecipient();
    }

    /**
     * Gets the deliveryStatus property value. 
     * @return MessageStatus|null
    */
    public function getDeliveryStatus(): ?MessageStatus {
        return $this->deliveryStatus;
    }

    /**
     * Gets the events property value. 
     * @return array<MessageEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryStatus' => function (self $o, ParseNode $n) { $o->setDeliveryStatus($n->getEnumValue(MessageStatus::class)); },
            'events' => function (self $o, ParseNode $n) { $o->setEvents($n->getCollectionOfObjectValues(MessageEvent::class)); },
            'recipientEmail' => function (self $o, ParseNode $n) { $o->setRecipientEmail($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recipientEmail property value. 
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        return $this->recipientEmail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryStatus', $this->deliveryStatus);
        $writer->writeCollectionOfObjectValues('events', $this->events);
        $writer->writeStringValue('recipientEmail', $this->recipientEmail);
    }

    /**
     * Sets the deliveryStatus property value. 
     *  @param MessageStatus|null $value Value to set for the deliveryStatus property.
    */
    public function setDeliveryStatus(?MessageStatus $value ): void {
        $this->deliveryStatus = $value;
    }

    /**
     * Sets the events property value. 
     *  @param array<MessageEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

    /**
     * Sets the recipientEmail property value. 
     *  @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value ): void {
        $this->recipientEmail = $value;
    }

}
