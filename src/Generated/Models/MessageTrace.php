<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MessageTrace extends Entity implements Parsable 
{
    /**
     * Instantiates a new MessageTrace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageTrace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageTrace {
        return new MessageTrace();
    }

    /**
     * Gets the destinationIPAddress property value. The destinationIPAddress property
     * @return string|null
    */
    public function getDestinationIPAddress(): ?string {
        $val = $this->getBackingStore()->get('destinationIPAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationIPAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationIPAddress' => fn(ParseNode $n) => $o->setDestinationIPAddress($n->getStringValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([MessageRecipient::class, 'createFromDiscriminatorValue'])),
            'senderEmail' => fn(ParseNode $n) => $o->setSenderEmail($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sourceIPAddress' => fn(ParseNode $n) => $o->setSourceIPAddress($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the messageId property value. The messageId property
     * @return string|null
    */
    public function getMessageId(): ?string {
        $val = $this->getBackingStore()->get('messageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageId'");
    }

    /**
     * Gets the receivedDateTime property value. The receivedDateTime property
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('receivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedDateTime'");
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<MessageRecipient>|null
    */
    public function getRecipients(): ?array {
        $val = $this->getBackingStore()->get('recipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MessageRecipient::class);
            /** @var array<MessageRecipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Gets the senderEmail property value. The senderEmail property
     * @return string|null
    */
    public function getSenderEmail(): ?string {
        $val = $this->getBackingStore()->get('senderEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderEmail'");
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Gets the sourceIPAddress property value. The sourceIPAddress property
     * @return string|null
    */
    public function getSourceIPAddress(): ?string {
        $val = $this->getBackingStore()->get('sourceIPAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceIPAddress'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('destinationIPAddress', $this->getDestinationIPAddress());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeCollectionOfObjectValues('recipients', $this->getRecipients());
        $writer->writeStringValue('senderEmail', $this->getSenderEmail());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeStringValue('sourceIPAddress', $this->getSourceIPAddress());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the destinationIPAddress property value. The destinationIPAddress property
     * @param string|null $value Value to set for the destinationIPAddress property.
    */
    public function setDestinationIPAddress(?string $value): void {
        $this->getBackingStore()->set('destinationIPAddress', $value);
    }

    /**
     * Sets the messageId property value. The messageId property
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the receivedDateTime property value. The receivedDateTime property
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipients property value. The recipients property
     * @param array<MessageRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the senderEmail property value. The senderEmail property
     * @param string|null $value Value to set for the senderEmail property.
    */
    public function setSenderEmail(?string $value): void {
        $this->getBackingStore()->set('senderEmail', $value);
    }

    /**
     * Sets the size property value. The size property
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sourceIPAddress property value. The sourceIPAddress property
     * @param string|null $value Value to set for the sourceIPAddress property.
    */
    public function setSourceIPAddress(?string $value): void {
        $this->getBackingStore()->set('sourceIPAddress', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
