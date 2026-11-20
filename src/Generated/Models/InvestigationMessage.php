<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Addressable transcript entity owned only by an agent run and referenced by the session aggregate. The key explicitly maps Graph id to backend messageId without shadowing an inherited property; ids are unique across the containing session.
*/
class InvestigationMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new InvestigationMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvestigationMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvestigationMessage {
        return new InvestigationMessage();
    }

    /**
     * Gets the agentTurnId property value. Opaque identifier of the agent-processing turn associated with this message, when available. Does not identify the overall session or run.
     * @return string|null
    */
    public function getAgentTurnId(): ?string {
        $val = $this->getBackingStore()->get('agentTurnId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentTurnId'");
    }

    /**
     * Gets the author property value. Embedded message-author role and identifier, not an independently addressable resource.
     * @return InvestigationMessageAuthor|null
    */
    public function getAuthor(): ?InvestigationMessageAuthor {
        $val = $this->getBackingStore()->get('author');
        if (is_null($val) || $val instanceof InvestigationMessageAuthor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'author'");
    }

    /**
     * Gets the content property value. Optional in historical transcript reads when the source omits content.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. UTC persistence timestamp. Backend wire name: timestamp.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentTurnId' => fn(ParseNode $n) => $o->setAgentTurnId($n->getStringValue()),
            'author' => fn(ParseNode $n) => $o->setAuthor($n->getObjectValue([InvestigationMessageAuthor::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(InvestigationMessageType::class)),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(InvestigationMessageRole::class)),
            'sequenceId' => fn(ParseNode $n) => $o->setSequenceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the kind property value. Read-only message categories from the existing transcript contract.
     * @return InvestigationMessageType|null
    */
    public function getKind(): ?InvestigationMessageType {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || $val instanceof InvestigationMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Gets the role property value. Transcript message role or recorded author kind. These are independent fields; a tool or system message can have an agent author.
     * @return InvestigationMessageRole|null
    */
    public function getRole(): ?InvestigationMessageRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof InvestigationMessageRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the sequenceId property value. Opaque chronological sequence identifier, when available. Does not advertise Graph delta or a message-item key.
     * @return string|null
    */
    public function getSequenceId(): ?string {
        $val = $this->getBackingStore()->get('sequenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sequenceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('author', $this->getAuthor());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeEnumValue('kind', $this->getKind());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the agentTurnId property value. Opaque identifier of the agent-processing turn associated with this message, when available. Does not identify the overall session or run.
     * @param string|null $value Value to set for the agentTurnId property.
    */
    public function setAgentTurnId(?string $value): void {
        $this->getBackingStore()->set('agentTurnId', $value);
    }

    /**
     * Sets the author property value. Embedded message-author role and identifier, not an independently addressable resource.
     * @param InvestigationMessageAuthor|null $value Value to set for the author property.
    */
    public function setAuthor(?InvestigationMessageAuthor $value): void {
        $this->getBackingStore()->set('author', $value);
    }

    /**
     * Sets the content property value. Optional in historical transcript reads when the source omits content.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. UTC persistence timestamp. Backend wire name: timestamp.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the kind property value. Read-only message categories from the existing transcript contract.
     * @param InvestigationMessageType|null $value Value to set for the kind property.
    */
    public function setKind(?InvestigationMessageType $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

    /**
     * Sets the role property value. Transcript message role or recorded author kind. These are independent fields; a tool or system message can have an agent author.
     * @param InvestigationMessageRole|null $value Value to set for the role property.
    */
    public function setRole(?InvestigationMessageRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the sequenceId property value. Opaque chronological sequence identifier, when available. Does not advertise Graph delta or a message-item key.
     * @param string|null $value Value to set for the sequenceId property.
    */
    public function setSequenceId(?string $value): void {
        $this->getBackingStore()->set('sequenceId', $value);
    }

}
