<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AttachmentSession extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $content The content streams that are uploaded.
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var DateTime|null $expirationDateTime The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var array<string>|null $nextExpectedRanges Indicates a single value {start} that represents the location in the file where the next upload should begin.
    */
    private ?array $nextExpectedRanges = null;
    
    /**
     * Instantiates a new attachmentSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.attachmentSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentSession {
        return new AttachmentSession();
    }

    /**
     * Gets the content property value. The content streams that are uploaded.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the expirationDateTime property value. The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'nextExpectedRanges' => function (ParseNode $n) use ($o) { $o->setNextExpectedRanges($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the nextExpectedRanges property value. Indicates a single value {start} that represents the location in the file where the next upload should begin.
     * @return array<string>|null
    */
    public function getNextExpectedRanges(): ?array {
        return $this->nextExpectedRanges;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeCollectionOfPrimitiveValues('nextExpectedRanges', $this->nextExpectedRanges);
    }

    /**
     * Sets the content property value. The content streams that are uploaded.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the expirationDateTime property value. The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the nextExpectedRanges property value. Indicates a single value {start} that represents the location in the file where the next upload should begin.
     *  @param array<string>|null $value Value to set for the nextExpectedRanges property.
    */
    public function setNextExpectedRanges(?array $value ): void {
        $this->nextExpectedRanges = $value;
    }

}
