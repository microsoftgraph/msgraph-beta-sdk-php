<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HistoryItem extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new HistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HistoryItem {
        return new HistoryItem();
    }

    /**
     * Gets the actor property value. Identity of the user (or application) that performed the change.
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        $val = $this->getBackingStore()->get('actor');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actor'");
    }

    /**
     * Gets the entityId property value. ID of the entity the history item describes.
     * @return string|null
    */
    public function getEntityId(): ?string {
        $val = $this->getBackingStore()->get('entityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityId'");
    }

    /**
     * Gets the entityType property value. Type of the entity the history item describes. The possible values are: task, unknownFutureValue.
     * @return HistoryEntityType|null
    */
    public function getEntityType(): ?HistoryEntityType {
        $val = $this->getBackingStore()->get('entityType');
        if (is_null($val) || $val instanceof HistoryEntityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityType'");
    }

    /**
     * Gets the eventType property value. Type of the change event that occurred. The possible values are: created, updated, deleted, undeleted, moved, unknownFutureValue.
     * @return HistoryEventType|null
    */
    public function getEventType(): ?HistoryEventType {
        $val = $this->getBackingStore()->get('eventType');
        if (is_null($val) || $val instanceof HistoryEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'entityId' => fn(ParseNode $n) => $o->setEntityId($n->getStringValue()),
            'entityType' => fn(ParseNode $n) => $o->setEntityType($n->getEnumValue(HistoryEntityType::class)),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getEnumValue(HistoryEventType::class)),
            'newData' => fn(ParseNode $n) => $o->setNewData($n->getStringValue()),
            'occurredDateTime' => fn(ParseNode $n) => $o->setOccurredDateTime($n->getDateTimeValue()),
            'oldData' => fn(ParseNode $n) => $o->setOldData($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the newData property value. Serialized representation of the entity state after the change.
     * @return string|null
    */
    public function getNewData(): ?string {
        $val = $this->getBackingStore()->get('newData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newData'");
    }

    /**
     * Gets the occurredDateTime property value. Date and time the change occurred. Read-only.
     * @return DateTime|null
    */
    public function getOccurredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('occurredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'occurredDateTime'");
    }

    /**
     * Gets the oldData property value. Serialized representation of the entity state before the change.
     * @return string|null
    */
    public function getOldData(): ?string {
        $val = $this->getBackingStore()->get('oldData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldData'");
    }

    /**
     * Gets the planId property value. ID of the plan the change occurred in.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeStringValue('entityId', $this->getEntityId());
        $writer->writeEnumValue('entityType', $this->getEntityType());
        $writer->writeEnumValue('eventType', $this->getEventType());
        $writer->writeStringValue('newData', $this->getNewData());
        $writer->writeStringValue('oldData', $this->getOldData());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the actor property value. Identity of the user (or application) that performed the change.
     * @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value): void {
        $this->getBackingStore()->set('actor', $value);
    }

    /**
     * Sets the entityId property value. ID of the entity the history item describes.
     * @param string|null $value Value to set for the entityId property.
    */
    public function setEntityId(?string $value): void {
        $this->getBackingStore()->set('entityId', $value);
    }

    /**
     * Sets the entityType property value. Type of the entity the history item describes. The possible values are: task, unknownFutureValue.
     * @param HistoryEntityType|null $value Value to set for the entityType property.
    */
    public function setEntityType(?HistoryEntityType $value): void {
        $this->getBackingStore()->set('entityType', $value);
    }

    /**
     * Sets the eventType property value. Type of the change event that occurred. The possible values are: created, updated, deleted, undeleted, moved, unknownFutureValue.
     * @param HistoryEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?HistoryEventType $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

    /**
     * Sets the newData property value. Serialized representation of the entity state after the change.
     * @param string|null $value Value to set for the newData property.
    */
    public function setNewData(?string $value): void {
        $this->getBackingStore()->set('newData', $value);
    }

    /**
     * Sets the occurredDateTime property value. Date and time the change occurred. Read-only.
     * @param DateTime|null $value Value to set for the occurredDateTime property.
    */
    public function setOccurredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('occurredDateTime', $value);
    }

    /**
     * Sets the oldData property value. Serialized representation of the entity state before the change.
     * @param string|null $value Value to set for the oldData property.
    */
    public function setOldData(?string $value): void {
        $this->getBackingStore()->set('oldData', $value);
    }

    /**
     * Sets the planId property value. ID of the plan the change occurred in.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

}
