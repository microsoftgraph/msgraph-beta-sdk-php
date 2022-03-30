<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageTrace extends Entity 
{
    /** @var string|null $destinationIPAddress  */
    private ?string $destinationIPAddress = null;
    
    /** @var string|null $messageId  */
    private ?string $messageId = null;
    
    /** @var DateTime|null $receivedDateTime  */
    private ?DateTime $receivedDateTime = null;
    
    /** @var array<MessageRecipient>|null $recipients  */
    private ?array $recipients = null;
    
    /** @var string|null $senderEmail  */
    private ?string $senderEmail = null;
    
    /** @var int|null $size  */
    private ?int $size = null;
    
    /** @var string|null $sourceIPAddress  */
    private ?string $sourceIPAddress = null;
    
    /** @var string|null $subject  */
    private ?string $subject = null;
    
    /**
     * Instantiates a new messageTrace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageTrace
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MessageTrace {
        return new MessageTrace();
    }

    /**
     * Gets the destinationIPAddress property value. 
     * @return string|null
    */
    public function getDestinationIPAddress(): ?string {
        return $this->destinationIPAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'destinationIPAddress' => function (self $o, ParseNode $n) { $o->setDestinationIPAddress($n->getStringValue()); },
            'messageId' => function (self $o, ParseNode $n) { $o->setMessageId($n->getStringValue()); },
            'receivedDateTime' => function (self $o, ParseNode $n) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'recipients' => function (self $o, ParseNode $n) { $o->setRecipients($n->getCollectionOfObjectValues(MessageRecipient::class)); },
            'senderEmail' => function (self $o, ParseNode $n) { $o->setSenderEmail($n->getStringValue()); },
            'size' => function (self $o, ParseNode $n) { $o->setSize($n->getIntegerValue()); },
            'sourceIPAddress' => function (self $o, ParseNode $n) { $o->setSourceIPAddress($n->getStringValue()); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the messageId property value. 
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->messageId;
    }

    /**
     * Gets the receivedDateTime property value. 
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the recipients property value. 
     * @return array<MessageRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the senderEmail property value. 
     * @return string|null
    */
    public function getSenderEmail(): ?string {
        return $this->senderEmail;
    }

    /**
     * Gets the size property value. 
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sourceIPAddress property value. 
     * @return string|null
    */
    public function getSourceIPAddress(): ?string {
        return $this->sourceIPAddress;
    }

    /**
     * Gets the subject property value. 
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('destinationIPAddress', $this->destinationIPAddress);
        $writer->writeStringValue('messageId', $this->messageId);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeStringValue('senderEmail', $this->senderEmail);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeStringValue('sourceIPAddress', $this->sourceIPAddress);
        $writer->writeStringValue('subject', $this->subject);
    }

    /**
     * Sets the destinationIPAddress property value. 
     *  @param string|null $value Value to set for the destinationIPAddress property.
    */
    public function setDestinationIPAddress(?string $value ): void {
        $this->destinationIPAddress = $value;
    }

    /**
     * Sets the messageId property value. 
     *  @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value ): void {
        $this->messageId = $value;
    }

    /**
     * Sets the receivedDateTime property value. 
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the recipients property value. 
     *  @param array<MessageRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the senderEmail property value. 
     *  @param string|null $value Value to set for the senderEmail property.
    */
    public function setSenderEmail(?string $value ): void {
        $this->senderEmail = $value;
    }

    /**
     * Sets the size property value. 
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sourceIPAddress property value. 
     *  @param string|null $value Value to set for the sourceIPAddress property.
    */
    public function setSourceIPAddress(?string $value ): void {
        $this->sourceIPAddress = $value;
    }

    /**
     * Sets the subject property value. 
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
