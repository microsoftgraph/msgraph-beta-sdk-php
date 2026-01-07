<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Conversation is a first class object in the system, and consists of persistent metadata plus a stream of messages,typically alternating request/response, implicitly forming a turn.Represents a conversation with Copilot Chat.
*/
class CopilotConversation extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotConversation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotConversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotConversation {
        return new CopilotConversation();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the conversation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The display name of the conversation.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([CopilotConversationMessage::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(CopilotConversationState::class)),
            'turnCount' => fn(ParseNode $n) => $o->setTurnCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the messages property value. The ordered list of messages in the conversation.
     * @return array<CopilotConversationMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotConversationMessage::class);
            /** @var array<CopilotConversationMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the state property value. The state of a Copilot conversation.
     * @return CopilotConversationState|null
    */
    public function getState(): ?CopilotConversationState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof CopilotConversationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the turnCount property value. The number of turns in the conversation.
     * @return int|null
    */
    public function getTurnCount(): ?int {
        $val = $this->getBackingStore()->get('turnCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'turnCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the createdDateTime property value. The date and time when the conversation was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the conversation.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the messages property value. The ordered list of messages in the conversation.
     * @param array<CopilotConversationMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the state property value. The state of a Copilot conversation.
     * @param CopilotConversationState|null $value Value to set for the state property.
    */
    public function setState(?CopilotConversationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the turnCount property value. The number of turns in the conversation.
     * @param int|null $value Value to set for the turnCount property.
    */
    public function setTurnCount(?int $value): void {
        $this->getBackingStore()->set('turnCount', $value);
    }

}
