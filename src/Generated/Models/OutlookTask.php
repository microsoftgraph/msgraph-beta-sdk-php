<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OutlookTask extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new OutlookTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.outlookTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookTask {
        return new OutlookTask();
    }

    /**
     * Gets the assignedTo property value. The name of the person who has been assigned the task in Outlook. Read-only.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the attachments property value. The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the task.  Read-only. Nullable.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attachment::class);
            /** @var array<Attachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the body property value. The task body that typically contains information about the task. Note that only HTML type is supported.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the completedDateTime property value. The date in the specified time zone that the task was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'isReminderOn' => fn(ParseNode $n) => $o->setIsReminderOn($n->getBooleanValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'reminderDateTime' => fn(ParseNode $n) => $o->setReminderDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getEnumValue(Sensitivity::class)),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TaskStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Set to true if the task has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the importance property value. The importance of the event. Possible values are: low, normal, high.
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof Importance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        $val = $this->getBackingStore()->get('isReminderOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReminderOn'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the owner property value. The name of the person who created the task.
     * @return string|null
    */
    public function getOwner(): ?string {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the parentFolderId property value. The unique identifier for the task's parent folder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        $val = $this->getBackingStore()->get('parentFolderId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentFolderId'");
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PatternedRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
    }

    /**
     * Gets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('reminderDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminderDateTime'");
    }

    /**
     * Gets the sensitivity property value. Indicates the level of privacy for the task. Possible values are: normal, personal, private, confidential.
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        $val = $this->getBackingStore()->get('sensitivity');
        if (is_null($val) || $val instanceof Sensitivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivity'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Gets the startDateTime property value. The date in the specified time zone when the task is to begin.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     * @return TaskStatus|null
    */
    public function getStatus(): ?TaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof TaskStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subject property value. A brief description or title of the task.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeObjectValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('dueDateTime', $this->getDueDateTime());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeBooleanValue('isReminderOn', $this->getIsReminderOn());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeObjectValue('reminderDateTime', $this->getReminderDateTime());
        $writer->writeEnumValue('sensitivity', $this->getSensitivity());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the assignedTo property value. The name of the person who has been assigned the task in Outlook. Read-only.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the attachments property value. The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the task.  Read-only. Nullable.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The task body that typically contains information about the task. Note that only HTML type is supported.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the completedDateTime property value. The date in the specified time zone that the task was finished.
     * @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the hasAttachments property value. Set to true if the task has attachments.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the importance property value. The importance of the event. Possible values are: low, normal, high.
     * @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value): void {
        $this->getBackingStore()->set('isReminderOn', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the owner property value. The name of the person who created the task.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the parentFolderId property value. The unique identifier for the task's parent folder.
     * @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     * @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     * @param DateTimeTimeZone|null $value Value to set for the reminderDateTime property.
    */
    public function setReminderDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('reminderDateTime', $value);
    }

    /**
     * Sets the sensitivity property value. Indicates the level of privacy for the task. Possible values are: normal, personal, private, confidential.
     * @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value): void {
        $this->getBackingStore()->set('sensitivity', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the startDateTime property value. The date in the specified time zone when the task is to begin.
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     * @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. A brief description or title of the task.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
