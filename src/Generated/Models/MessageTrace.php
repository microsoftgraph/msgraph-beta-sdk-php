<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageTrace extends Entity implements Parsable 
{
    /**
     * @var string|null $destinationIPAddress The destinationIPAddress property
    */
    private ?string $destinationIPAddress = null;
    
    /**
     * @var string|null $messageId The messageId property
    */
    private ?string $messageId = null;
    
    /**
     * @var DateTime|null $receivedDateTime The receivedDateTime property
    */
    private ?DateTime $receivedDateTime = null;
    
    /**
     * @var array<MessageRecipient>|null $recipients The recipients property
    */
    private ?array $recipients = null;
    
    /**
     * @var string|null $senderEmail The senderEmail property
    */
    private ?string $senderEmail = null;
    
    /**
     * @var int|null $size The size property
    */
    private ?int $size = null;
    
    /**
     * @var string|null $sourceIPAddress The sourceIPAddress property
    */
    private ?string $sourceIPAddress = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new messageTrace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.messageTrace');
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
        return $this->destinationIPAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->messageId;
    }

    /**
     * Gets the receivedDateTime property value. The receivedDateTime property
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<MessageRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the senderEmail property value. The senderEmail property
     * @return string|null
    */
    public function getSenderEmail(): ?string {
        return $this->senderEmail;
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sourceIPAddress property value. The sourceIPAddress property
     * @return string|null
    */
    public function getSourceIPAddress(): ?string {
        return $this->sourceIPAddress;
    }

    /**
     * Gets the subject property value. The subject property
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
     * Sets the destinationIPAddress property value. The destinationIPAddress property
     *  @param string|null $value Value to set for the destinationIPAddress property.
    */
    public function setDestinationIPAddress(?string $value ): void {
        $this->destinationIPAddress = $value;
    }

    /**
     * Sets the messageId property value. The messageId property
     *  @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value ): void {
        $this->messageId = $value;
    }

    /**
     * Sets the receivedDateTime property value. The receivedDateTime property
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<MessageRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the senderEmail property value. The senderEmail property
     *  @param string|null $value Value to set for the senderEmail property.
    */
    public function setSenderEmail(?string $value ): void {
        $this->senderEmail = $value;
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sourceIPAddress property value. The sourceIPAddress property
     *  @param string|null $value Value to set for the sourceIPAddress property.
    */
    public function setSourceIPAddress(?string $value ): void {
        $this->sourceIPAddress = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
