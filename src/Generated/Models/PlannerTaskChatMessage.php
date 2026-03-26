<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerTaskChatMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerTaskChatMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskChatMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskChatMessage {
        return new PlannerTaskChatMessage();
    }

    /**
     * Gets the content property value. The content of the chat message. Supports plain text and sanitized HTML.
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
     * Gets the createdBy property value. The identity of the user who created the message.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the message was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the deletedDateTime property value. The deletedDateTime property
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * Gets the editedDateTime property value. The editedDateTime property
     * @return DateTime|null
    */
    public function getEditedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('editedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'editedDateTime' => fn(ParseNode $n) => $o->setEditedDateTime($n->getDateTimeValue()),
            'mentions' => fn(ParseNode $n) => $o->setMentions($n->getCollectionOfObjectValues([PlannerTaskChatMention::class, 'createFromDiscriminatorValue'])),
            'messageType' => fn(ParseNode $n) => $o->setMessageType($n->getEnumValue(PlannerTaskChatMessageType::class)),
            'parentEntityId' => fn(ParseNode $n) => $o->setParentEntityId($n->getStringValue()),
            'reactions' => fn(ParseNode $n) => $o->setReactions($n->getCollectionOfObjectValues([PlannerTaskChatReaction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mentions property value. The list of mentions in the message.
     * @return array<PlannerTaskChatMention>|null
    */
    public function getMentions(): ?array {
        $val = $this->getBackingStore()->get('mentions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTaskChatMention::class);
            /** @var array<PlannerTaskChatMention>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentions'");
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return PlannerTaskChatMessageType|null
    */
    public function getMessageType(): ?PlannerTaskChatMessageType {
        $val = $this->getBackingStore()->get('messageType');
        if (is_null($val) || $val instanceof PlannerTaskChatMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageType'");
    }

    /**
     * Gets the parentEntityId property value. The ID of the parent plannerTask that this message belongs to.
     * @return string|null
    */
    public function getParentEntityId(): ?string {
        $val = $this->getBackingStore()->get('parentEntityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentEntityId'");
    }

    /**
     * Gets the reactions property value. The reactions on the message.
     * @return array<PlannerTaskChatReaction>|null
    */
    public function getReactions(): ?array {
        $val = $this->getBackingStore()->get('reactions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTaskChatReaction::class);
            /** @var array<PlannerTaskChatReaction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeDateTimeValue('editedDateTime', $this->getEditedDateTime());
        $writer->writeCollectionOfObjectValues('mentions', $this->getMentions());
        $writer->writeEnumValue('messageType', $this->getMessageType());
        $writer->writeStringValue('parentEntityId', $this->getParentEntityId());
        $writer->writeCollectionOfObjectValues('reactions', $this->getReactions());
    }

    /**
     * Sets the content property value. The content of the chat message. Supports plain text and sanitized HTML.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdBy property value. The identity of the user who created the message.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the message was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedDateTime property value. The deletedDateTime property
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the editedDateTime property value. The editedDateTime property
     * @param DateTime|null $value Value to set for the editedDateTime property.
    */
    public function setEditedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('editedDateTime', $value);
    }

    /**
     * Sets the mentions property value. The list of mentions in the message.
     * @param array<PlannerTaskChatMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value): void {
        $this->getBackingStore()->set('mentions', $value);
    }

    /**
     * Sets the messageType property value. The messageType property
     * @param PlannerTaskChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?PlannerTaskChatMessageType $value): void {
        $this->getBackingStore()->set('messageType', $value);
    }

    /**
     * Sets the parentEntityId property value. The ID of the parent plannerTask that this message belongs to.
     * @param string|null $value Value to set for the parentEntityId property.
    */
    public function setParentEntityId(?string $value): void {
        $this->getBackingStore()->set('parentEntityId', $value);
    }

    /**
     * Sets the reactions property value. The reactions on the message.
     * @param array<PlannerTaskChatReaction>|null $value Value to set for the reactions property.
    */
    public function setReactions(?array $value): void {
        $this->getBackingStore()->set('reactions', $value);
    }

}
