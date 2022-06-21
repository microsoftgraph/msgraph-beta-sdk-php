<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookTask extends OutlookItem 
{
    /** @var string|null $assignedTo The name of the person who has been assigned the task in Outlook. Read-only. */
    private ?string $assignedTo = null;
    
    /** @var array<Attachment>|null $attachments The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the task.  Read-only. Nullable. */
    private ?array $attachments = null;
    
    /** @var ItemBody|null $body The task body that typically contains information about the task. Note that only HTML type is supported. */
    private ?ItemBody $body = null;
    
    /** @var DateTimeTimeZone|null $completedDateTime The date in the specified time zone that the task was finished. */
    private ?DateTimeTimeZone $completedDateTime = null;
    
    /** @var DateTimeTimeZone|null $dueDateTime The date in the specified time zone that the task is to be finished. */
    private ?DateTimeTimeZone $dueDateTime = null;
    
    /** @var bool|null $hasAttachments Set to true if the task has attachments. */
    private ?bool $hasAttachments = null;
    
    /** @var Importance|null $importance The importance property */
    private ?Importance $importance = null;
    
    /** @var bool|null $isReminderOn The isReminderOn property */
    private ?bool $isReminderOn = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the task. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $owner The owner property */
    private ?string $owner = null;
    
    /** @var string|null $parentFolderId The parentFolderId property */
    private ?string $parentFolderId = null;
    
    /** @var PatternedRecurrence|null $recurrence The recurrence property */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var DateTimeTimeZone|null $reminderDateTime The reminderDateTime property */
    private ?DateTimeTimeZone $reminderDateTime = null;
    
    /** @var Sensitivity|null $sensitivity The sensitivity property */
    private ?Sensitivity $sensitivity = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the task. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /** @var DateTimeTimeZone|null $startDateTime The startDateTime property */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /** @var TaskStatus|null $status The status property */
    private ?TaskStatus $status = null;
    
    /** @var string|null $subject The subject property */
    private ?string $subject = null;
    
    /**
     * Instantiates a new outlookTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookTask
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OutlookTask {
        return new OutlookTask();
    }

    /**
     * Gets the assignedTo property value. The name of the person who has been assigned the task in Outlook. Read-only.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the attachments property value. The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the task.  Read-only. Nullable.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the body property value. The task body that typically contains information about the task. Note that only HTML type is supported.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the completedDateTime property value. The date in the specified time zone that the task was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        return $this->completedDateTime;
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->dueDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => function (self $o, ParseNode $n) { $o->setAssignedTo($n->getStringValue()); },
            'attachments' => function (self $o, ParseNode $n) { $o->setAttachments($n->getCollectionOfObjectValues(Attachment::class)); },
            'body' => function (self $o, ParseNode $n) { $o->setBody($n->getObjectValue(ItemBody::class)); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'dueDateTime' => function (self $o, ParseNode $n) { $o->setDueDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'hasAttachments' => function (self $o, ParseNode $n) { $o->setHasAttachments($n->getBooleanValue()); },
            'importance' => function (self $o, ParseNode $n) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'isReminderOn' => function (self $o, ParseNode $n) { $o->setIsReminderOn($n->getBooleanValue()); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getStringValue()); },
            'parentFolderId' => function (self $o, ParseNode $n) { $o->setParentFolderId($n->getStringValue()); },
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'reminderDateTime' => function (self $o, ParseNode $n) { $o->setReminderDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'sensitivity' => function (self $o, ParseNode $n) { $o->setSensitivity($n->getEnumValue(Sensitivity::class)); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(TaskStatus::class)); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Set to true if the task has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the isReminderOn property value. The isReminderOn property
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        return $this->isReminderOn;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the parentFolderId property value. The parentFolderId property
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderDateTime property value. The reminderDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getReminderDateTime(): ?DateTimeTimeZone {
        return $this->reminderDateTime;
    }

    /**
     * Gets the sensitivity property value. The sensitivity property
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        return $this->sensitivity;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return TaskStatus|null
    */
    public function getStatus(): ?TaskStatus {
        return $this->status;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeObjectValue('completedDateTime', $this->completedDateTime);
        $writer->writeObjectValue('dueDateTime', $this->dueDateTime);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeBooleanValue('isReminderOn', $this->isReminderOn);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeObjectValue('reminderDateTime', $this->reminderDateTime);
        $writer->writeEnumValue('sensitivity', $this->sensitivity);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('subject', $this->subject);
    }

    /**
     * Sets the assignedTo property value. The name of the person who has been assigned the task in Outlook. Read-only.
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the attachments property value. The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the task.  Read-only. Nullable.
     *  @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the body property value. The task body that typically contains information about the task. Note that only HTML type is supported.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the completedDateTime property value. The date in the specified time zone that the task was finished.
     *  @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the hasAttachments property value. Set to true if the task has attachments.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the importance property value. The importance property
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the isReminderOn property value. The isReminderOn property
     *  @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value ): void {
        $this->isReminderOn = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the owner property value. The owner property
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the parentFolderId property value. The parentFolderId property
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence property
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderDateTime property value. The reminderDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the reminderDateTime property.
    */
    public function setReminderDateTime(?DateTimeTimeZone $value ): void {
        $this->reminderDateTime = $value;
    }

    /**
     * Sets the sensitivity property value. The sensitivity property
     *  @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
