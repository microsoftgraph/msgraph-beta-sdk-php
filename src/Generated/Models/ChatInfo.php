<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $messageId The unique identifier for a message in a Microsoft Teams channel.
    */
    private ?string $messageId = null;
    
    /**
     * @var string|null $replyChainMessageId The ID of the reply message.
    */
    private ?string $replyChainMessageId = null;
    
    /**
     * @var string|null $threadId The unique identifier for a thread in Microsoft Teams.
    */
    private ?string $threadId = null;
    
    /**
     * Instantiates a new chatInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatInfo {
        return new ChatInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'messageId' => function (ParseNode $n) use ($o) { $o->setMessageId($n->getStringValue()); },
            'replyChainMessageId' => function (ParseNode $n) use ($o) { $o->setReplyChainMessageId($n->getStringValue()); },
            'threadId' => function (ParseNode $n) use ($o) { $o->setThreadId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the messageId property value. The unique identifier for a message in a Microsoft Teams channel.
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->messageId;
    }

    /**
     * Gets the replyChainMessageId property value. The ID of the reply message.
     * @return string|null
    */
    public function getReplyChainMessageId(): ?string {
        return $this->replyChainMessageId;
    }

    /**
     * Gets the threadId property value. The unique identifier for a thread in Microsoft Teams.
     * @return string|null
    */
    public function getThreadId(): ?string {
        return $this->threadId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('messageId', $this->messageId);
        $writer->writeStringValue('replyChainMessageId', $this->replyChainMessageId);
        $writer->writeStringValue('threadId', $this->threadId);
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
     * Sets the messageId property value. The unique identifier for a message in a Microsoft Teams channel.
     *  @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value ): void {
        $this->messageId = $value;
    }

    /**
     * Sets the replyChainMessageId property value. The ID of the reply message.
     *  @param string|null $value Value to set for the replyChainMessageId property.
    */
    public function setReplyChainMessageId(?string $value ): void {
        $this->replyChainMessageId = $value;
    }

    /**
     * Sets the threadId property value. The unique identifier for a thread in Microsoft Teams.
     *  @param string|null $value Value to set for the threadId property.
    */
    public function setThreadId(?string $value ): void {
        $this->threadId = $value;
    }

}
