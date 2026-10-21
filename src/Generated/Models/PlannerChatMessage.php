<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerChatMessage extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerChatMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerChatMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerChatMessage {
        return new PlannerChatMessage();
    }

    /**
     * Gets the content property value. Body content of the chat message.
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
     * Gets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
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
     * Gets the createdDateTime property value. Date and time the entity was created. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
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
     * Gets the deletedTime property value. Date and time the message was deleted.
     * @return DateTime|null
    */
    public function getDeletedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedTime'");
    }

    /**
     * Gets the editedTime property value. Date and time the message was last edited.
     * @return DateTime|null
    */
    public function getEditedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('editedTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editedTime'");
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
            'deletedTime' => fn(ParseNode $n) => $o->setDeletedTime($n->getDateTimeValue()),
            'editedTime' => fn(ParseNode $n) => $o->setEditedTime($n->getDateTimeValue()),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'isEdited' => fn(ParseNode $n) => $o->setIsEdited($n->getBooleanValue()),
            'messageType' => fn(ParseNode $n) => $o->setMessageType($n->getEnumValue(PlannerChatMessageType::class)),
            'parentEntityId' => fn(ParseNode $n) => $o->setParentEntityId($n->getStringValue()),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([ChatMessageProperties::class, 'createFromDiscriminatorValue'])),
            'threadType' => fn(ParseNode $n) => $o->setThreadType($n->getEnumValue(PlannerChatThreadType::class)),
        ]);
    }

    /**
     * Gets the isDeleted property value. Indicates whether the message was deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        $val = $this->getBackingStore()->get('isDeleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleted'");
    }

    /**
     * Gets the isEdited property value. Indicates whether the message was edited after it was sent.
     * @return bool|null
    */
    public function getIsEdited(): ?bool {
        $val = $this->getBackingStore()->get('isEdited');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEdited'");
    }

    /**
     * Gets the messageType property value. Format of the message content. The possible values are: richTextHtml, plainText, unknownFutureValue.
     * @return PlannerChatMessageType|null
    */
    public function getMessageType(): ?PlannerChatMessageType {
        $val = $this->getBackingStore()->get('messageType');
        if (is_null($val) || $val instanceof PlannerChatMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageType'");
    }

    /**
     * Gets the parentEntityId property value. ID of the task or plan the message belongs to.
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
     * Gets the properties property value. @mentions and reactions associated with the message.
     * @return ChatMessageProperties|null
    */
    public function getProperties(): ?ChatMessageProperties {
        $val = $this->getBackingStore()->get('properties');
        if (is_null($val) || $val instanceof ChatMessageProperties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'properties'");
    }

    /**
     * Gets the threadType property value. Indicates whether the message belongs to a task-level or plan-level conversation. The possible values are: task, plan, unknownFutureValue.
     * @return PlannerChatThreadType|null
    */
    public function getThreadType(): ?PlannerChatThreadType {
        $val = $this->getBackingStore()->get('threadType');
        if (is_null($val) || $val instanceof PlannerChatThreadType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threadType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeDateTimeValue('deletedTime', $this->getDeletedTime());
        $writer->writeDateTimeValue('editedTime', $this->getEditedTime());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeBooleanValue('isEdited', $this->getIsEdited());
        $writer->writeEnumValue('messageType', $this->getMessageType());
        $writer->writeStringValue('parentEntityId', $this->getParentEntityId());
        $writer->writeObjectValue('properties', $this->getProperties());
        $writer->writeEnumValue('threadType', $this->getThreadType());
    }

    /**
     * Sets the content property value. Body content of the chat message.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time the entity was created. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedTime property value. Date and time the message was deleted.
     * @param DateTime|null $value Value to set for the deletedTime property.
    */
    public function setDeletedTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedTime', $value);
    }

    /**
     * Sets the editedTime property value. Date and time the message was last edited.
     * @param DateTime|null $value Value to set for the editedTime property.
    */
    public function setEditedTime(?DateTime $value): void {
        $this->getBackingStore()->set('editedTime', $value);
    }

    /**
     * Sets the isDeleted property value. Indicates whether the message was deleted.
     * @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the isEdited property value. Indicates whether the message was edited after it was sent.
     * @param bool|null $value Value to set for the isEdited property.
    */
    public function setIsEdited(?bool $value): void {
        $this->getBackingStore()->set('isEdited', $value);
    }

    /**
     * Sets the messageType property value. Format of the message content. The possible values are: richTextHtml, plainText, unknownFutureValue.
     * @param PlannerChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?PlannerChatMessageType $value): void {
        $this->getBackingStore()->set('messageType', $value);
    }

    /**
     * Sets the parentEntityId property value. ID of the task or plan the message belongs to.
     * @param string|null $value Value to set for the parentEntityId property.
    */
    public function setParentEntityId(?string $value): void {
        $this->getBackingStore()->set('parentEntityId', $value);
    }

    /**
     * Sets the properties property value. @mentions and reactions associated with the message.
     * @param ChatMessageProperties|null $value Value to set for the properties property.
    */
    public function setProperties(?ChatMessageProperties $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

    /**
     * Sets the threadType property value. Indicates whether the message belongs to a task-level or plan-level conversation. The possible values are: task, plan, unknownFutureValue.
     * @param PlannerChatThreadType|null $value Value to set for the threadType property.
    */
    public function setThreadType(?PlannerChatThreadType $value): void {
        $this->getBackingStore()->set('threadType', $value);
    }

}
