<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageMentionedIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new chatMessageMentionedIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatMessageMentionedIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageMentionedIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageMentionedIdentitySet {
        return new ChatMessageMentionedIdentitySet();
    }

    /**
     * Gets the conversation property value. If present, represents a conversation (for example, team or channel) @mentioned in a message.
     * @return TeamworkConversationIdentity|null
    */
    public function getConversation(): ?TeamworkConversationIdentity {
        $val = $this->getBackingStore()->get('conversation');
        if (is_null($val) || $val instanceof TeamworkConversationIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversation' => fn(ParseNode $n) => $o->setConversation($n->getObjectValue([TeamworkConversationIdentity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getObjectValue([TeamworkTagIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tag property value. If present, represents a tag @mentioned in a team message.
     * @return TeamworkTagIdentity|null
    */
    public function getTag(): ?TeamworkTagIdentity {
        $val = $this->getBackingStore()->get('tag');
        if (is_null($val) || $val instanceof TeamworkTagIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tag'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conversation', $this->getConversation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('tag', $this->getTag());
    }

    /**
     * Sets the conversation property value. If present, represents a conversation (for example, team or channel) @mentioned in a message.
     * @param TeamworkConversationIdentity|null $value Value to set for the conversation property.
    */
    public function setConversation(?TeamworkConversationIdentity $value): void {
        $this->getBackingStore()->set('conversation', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tag property value. If present, represents a tag @mentioned in a team message.
     * @param TeamworkTagIdentity|null $value Value to set for the tag property.
    */
    public function setTag(?TeamworkTagIdentity $value): void {
        $this->getBackingStore()->set('tag', $value);
    }

}
