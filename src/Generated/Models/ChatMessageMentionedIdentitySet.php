<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageMentionedIdentitySet extends IdentitySet 
{
    /** @var TeamworkConversationIdentity|null $conversation If present, represents a conversation (for example, team or channel) @mentioned in a message. */
    private ?TeamworkConversationIdentity $conversation = null;
    
    /** @var TeamworkTagIdentity|null $tag If present, represents a tag @mentioned in a team message. */
    private ?TeamworkTagIdentity $tag = null;
    
    /**
     * Instantiates a new chatMessageMentionedIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageMentionedIdentitySet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageMentionedIdentitySet {
        return new ChatMessageMentionedIdentitySet();
    }

    /**
     * Gets the conversation property value. If present, represents a conversation (for example, team or channel) @mentioned in a message.
     * @return TeamworkConversationIdentity|null
    */
    public function getConversation(): ?TeamworkConversationIdentity {
        return $this->conversation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'conversation' => function (self $o, ParseNode $n) { $o->setConversation($n->getObjectValue(TeamworkConversationIdentity::class)); },
            'tag' => function (self $o, ParseNode $n) { $o->setTag($n->getObjectValue(TeamworkTagIdentity::class)); },
        ]);
    }

    /**
     * Gets the tag property value. If present, represents a tag @mentioned in a team message.
     * @return TeamworkTagIdentity|null
    */
    public function getTag(): ?TeamworkTagIdentity {
        return $this->tag;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conversation', $this->conversation);
        $writer->writeObjectValue('tag', $this->tag);
    }

    /**
     * Sets the conversation property value. If present, represents a conversation (for example, team or channel) @mentioned in a message.
     *  @param TeamworkConversationIdentity|null $value Value to set for the conversation property.
    */
    public function setConversation(?TeamworkConversationIdentity $value ): void {
        $this->conversation = $value;
    }

    /**
     * Sets the tag property value. If present, represents a tag @mentioned in a team message.
     *  @param TeamworkTagIdentity|null $value Value to set for the tag property.
    */
    public function setTag(?TeamworkTagIdentity $value ): void {
        $this->tag = $value;
    }

}
