<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMembersNotificationRecipient extends TeamworkNotificationRecipient implements Parsable 
{
    /**
     * @var string|null $chatId The chat's identifier.
    */
    private ?string $chatId = null;
    
    /**
     * Instantiates a new ChatMembersNotificationRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMembersNotificationRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMembersNotificationRecipient {
        return new ChatMembersNotificationRecipient();
    }

    /**
     * Gets the chatId property value. The chat's identifier.
     * @return string|null
    */
    public function getChatId(): ?string {
        return $this->chatId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatId' => function (ParseNode $n) use ($o) { $o->setChatId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('chatId', $this->chatId);
    }

    /**
     * Sets the chatId property value. The chat's identifier.
     *  @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value ): void {
        $this->chatId = $value;
    }

}
