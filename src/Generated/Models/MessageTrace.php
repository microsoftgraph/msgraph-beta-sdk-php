<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageTrace extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
     * Instantiates a new MessageTrace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'destinationIPAddress' => function (ParseNode $n) use ($o) { $o->setDestinationIPAddress($n->getStringValue()); },
            'messageId' => function (ParseNode $n) use ($o) { $o->setMessageId($n->getStringValue()); },
            'receivedDateTime' => function (ParseNode $n) use ($o) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'recipients' => function (ParseNode $n) use ($o) { $o->setRecipients($n->getCollectionOfObjectValues(array(MessageRecipient::class, 'createFromDiscriminatorValue'))); },
            'senderEmail' => function (ParseNode $n) use ($o) { $o->setSenderEmail($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
            'sourceIPAddress' => function (ParseNode $n) use ($o) { $o->setSourceIPAddress($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
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
