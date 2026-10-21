<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Task extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new Task and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Task
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Task {
        return new Task();
    }

    /**
     * Gets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the bucketId property value. ID of the bucket that the task belongs to.
     * @return string|null
    */
    public function getBucketId(): ?string {
        $val = $this->getBackingStore()->get('bucketId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bucketId'");
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return TaskCapability|null
    */
    public function getCapabilities(): ?TaskCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof TaskCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the checklist property value. The collection of checklist items on the task. Read-only. Nullable.
     * @return array<ChecklistItemV4>|null
    */
    public function getChecklist(): ?array {
        $val = $this->getBackingStore()->get('checklist');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChecklistItemV4::class);
            /** @var array<ChecklistItemV4>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklist'");
    }

    /**
     * Gets the completedBy property value. Identity of the user who marked the task complete.
     * @return IdentitySet|null
    */
    public function getCompletedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('completedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedBy'");
    }

    /**
     * Gets the completedDateTime property value. Date and time the task was completed.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the creationInfo property value. Read-only creation metadata for the entity.
     * @return CreationInfo|null
    */
    public function getCreationInfo(): ?CreationInfo {
        $val = $this->getBackingStore()->get('creationInfo');
        if (is_null($val) || $val instanceof CreationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationInfo'");
    }

    /**
     * Gets the customFieldValues property value. The collection of custom field values set on the task. Read-only. Nullable.
     * @return array<CustomFieldValue>|null
    */
    public function getCustomFieldValues(): ?array {
        $val = $this->getBackingStore()->get('customFieldValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomFieldValue::class);
            /** @var array<CustomFieldValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFieldValues'");
    }

    /**
     * Gets the displayName property value. Title of the task.
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
     * Gets the dueDateTime property value. Date and, optionally, time the task is due.
     * @return DateWithOptionalTime|null
    */
    public function getDueDateTime(): ?DateWithOptionalTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateWithOptionalTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * Gets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @return ExtensionFieldCollection|null
    */
    public function getExtensions(): ?ExtensionFieldCollection {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof ExtensionFieldCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'bucketId' => fn(ParseNode $n) => $o->setBucketId($n->getStringValue()),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([TaskCapability::class, 'createFromDiscriminatorValue'])),
            'checklist' => fn(ParseNode $n) => $o->setChecklist($n->getCollectionOfObjectValues([ChecklistItemV4::class, 'createFromDiscriminatorValue'])),
            'completedBy' => fn(ParseNode $n) => $o->setCompletedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'creationInfo' => fn(ParseNode $n) => $o->setCreationInfo($n->getObjectValue([CreationInfo::class, 'createFromDiscriminatorValue'])),
            'customFieldValues' => fn(ParseNode $n) => $o->setCustomFieldValues($n->getCollectionOfObjectValues([CustomFieldValue::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getObjectValue([DateWithOptionalTime::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
            'finishDateTime' => fn(ParseNode $n) => $o->setFinishDateTime($n->getObjectValue([DateWithOptionalTime::class, 'createFromDiscriminatorValue'])),
            'goalIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGoalIds($val);
            },
            'hasChat' => fn(ParseNode $n) => $o->setHasChat($n->getBooleanValue()),
            'hasChildren' => fn(ParseNode $n) => $o->setHasChildren($n->getBooleanValue()),
            'isCritical' => fn(ParseNode $n) => $o->setIsCritical($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getCollectionOfObjectValues([ContentLink::class, 'createFromDiscriminatorValue'])),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([PlannerChatMessage::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'parentTaskId' => fn(ParseNode $n) => $o->setParentTaskId($n->getStringValue()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getIntegerValue()),
            'personalView' => fn(ParseNode $n) => $o->setPersonalView($n->getObjectValue([TaskPersonalView::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'planView' => fn(ParseNode $n) => $o->setPlanView($n->getObjectValue([TaskPlanView::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PlannerTaskRecurrence::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateWithOptionalTime::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PlannerTaskStatus::class)),
            'userAssignments' => fn(ParseNode $n) => $o->setUserAssignments($n->getCollectionOfObjectValues([UserAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the finishDateTime property value. Date and, optionally, time the task was finished.
     * @return DateWithOptionalTime|null
    */
    public function getFinishDateTime(): ?DateWithOptionalTime {
        $val = $this->getBackingStore()->get('finishDateTime');
        if (is_null($val) || $val instanceof DateWithOptionalTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishDateTime'");
    }

    /**
     * Gets the goalIds property value. IDs of the goals that the task is associated with.
     * @return array<string>|null
    */
    public function getGoalIds(): ?array {
        $val = $this->getBackingStore()->get('goalIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'goalIds'");
    }

    /**
     * Gets the hasChat property value. Indicates whether the task has an associated chat.
     * @return bool|null
    */
    public function getHasChat(): ?bool {
        $val = $this->getBackingStore()->get('hasChat');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasChat'");
    }

    /**
     * Gets the hasChildren property value. Indicates whether the task has subtasks.
     * @return bool|null
    */
    public function getHasChildren(): ?bool {
        $val = $this->getBackingStore()->get('hasChildren');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasChildren'");
    }

    /**
     * Gets the isCritical property value. Indicates whether the task is on the critical path, as computed from its dependencies.
     * @return bool|null
    */
    public function getIsCritical(): ?bool {
        $val = $this->getBackingStore()->get('isCritical');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCritical'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the links property value. The collection of content links attached to the task. Read-only. Nullable.
     * @return array<ContentLink>|null
    */
    public function getLinks(): ?array {
        $val = $this->getBackingStore()->get('links');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentLink::class);
            /** @var array<ContentLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the messages property value. The collection of chat messages associated with the task. Read-only. Nullable.
     * @return array<PlannerChatMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerChatMessage::class);
            /** @var array<PlannerChatMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the notes property value. Additional details or notes about the task.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the parentTaskId property value. ID of the parent task, if this task is a subtask.
     * @return string|null
    */
    public function getParentTaskId(): ?string {
        $val = $this->getBackingStore()->get('parentTaskId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentTaskId'");
    }

    /**
     * Gets the percentComplete property value. Percentage of the task's completion, ranging from 0 to 100.
     * @return int|null
    */
    public function getPercentComplete(): ?int {
        $val = $this->getBackingStore()->get('percentComplete');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentComplete'");
    }

    /**
     * Gets the personalView property value. Per-user personal view settings for the task, such as My Day membership.
     * @return TaskPersonalView|null
    */
    public function getPersonalView(): ?TaskPersonalView {
        $val = $this->getBackingStore()->get('personalView');
        if (is_null($val) || $val instanceof TaskPersonalView) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalView'");
    }

    /**
     * Gets the planId property value. ID of the plan that contains the task. Immutable after creation.
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
     * Gets the planView property value. Task view settings scoped to the plan, such as applied category IDs.
     * @return TaskPlanView|null
    */
    public function getPlanView(): ?TaskPlanView {
        $val = $this->getBackingStore()->get('planView');
        if (is_null($val) || $val instanceof TaskPlanView) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planView'");
    }

    /**
     * Gets the priority property value. Priority of the task. Supported values range from 0 (urgent) to 10 (low).
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the recurrence property value. Recurrence pattern for the task, if it repeats.
     * @return PlannerTaskRecurrence|null
    */
    public function getRecurrence(): ?PlannerTaskRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PlannerTaskRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
    }

    /**
     * Gets the startDateTime property value. Date and, optionally, time the task is scheduled to start.
     * @return DateWithOptionalTime|null
    */
    public function getStartDateTime(): ?DateWithOptionalTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateWithOptionalTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. Indicates progress on the task. The possible values are: notStarted, inProgress, completed, blocked, unknownFutureValue.
     * @return PlannerTaskStatus|null
    */
    public function getStatus(): ?PlannerTaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PlannerTaskStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userAssignments property value. The collection of user assignments on the task. Read-only. Nullable.
     * @return array<UserAssignment>|null
    */
    public function getUserAssignments(): ?array {
        $val = $this->getBackingStore()->get('userAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserAssignment::class);
            /** @var array<UserAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAssignments'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeStringValue('bucketId', $this->getBucketId());
        $writer->writeCollectionOfObjectValues('checklist', $this->getChecklist());
        $writer->writeObjectValue('completedBy', $this->getCompletedBy());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeCollectionOfObjectValues('customFieldValues', $this->getCustomFieldValues());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('dueDateTime', $this->getDueDateTime());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeObjectValue('finishDateTime', $this->getFinishDateTime());
        $writer->writeCollectionOfPrimitiveValues('goalIds', $this->getGoalIds());
        $writer->writeBooleanValue('hasChat', $this->getHasChat());
        $writer->writeBooleanValue('hasChildren', $this->getHasChildren());
        $writer->writeBooleanValue('isCritical', $this->getIsCritical());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('links', $this->getLinks());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('parentTaskId', $this->getParentTaskId());
        $writer->writeIntegerValue('percentComplete', $this->getPercentComplete());
        $writer->writeObjectValue('personalView', $this->getPersonalView());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeObjectValue('planView', $this->getPlanView());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('userAssignments', $this->getUserAssignments());
    }

    /**
     * Sets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the bucketId property value. ID of the bucket that the task belongs to.
     * @param string|null $value Value to set for the bucketId property.
    */
    public function setBucketId(?string $value): void {
        $this->getBackingStore()->set('bucketId', $value);
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param TaskCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?TaskCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the checklist property value. The collection of checklist items on the task. Read-only. Nullable.
     * @param array<ChecklistItemV4>|null $value Value to set for the checklist property.
    */
    public function setChecklist(?array $value): void {
        $this->getBackingStore()->set('checklist', $value);
    }

    /**
     * Sets the completedBy property value. Identity of the user who marked the task complete.
     * @param IdentitySet|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('completedBy', $value);
    }

    /**
     * Sets the completedDateTime property value. Date and time the task was completed.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the creationInfo property value. Read-only creation metadata for the entity.
     * @param CreationInfo|null $value Value to set for the creationInfo property.
    */
    public function setCreationInfo(?CreationInfo $value): void {
        $this->getBackingStore()->set('creationInfo', $value);
    }

    /**
     * Sets the customFieldValues property value. The collection of custom field values set on the task. Read-only. Nullable.
     * @param array<CustomFieldValue>|null $value Value to set for the customFieldValues property.
    */
    public function setCustomFieldValues(?array $value): void {
        $this->getBackingStore()->set('customFieldValues', $value);
    }

    /**
     * Sets the displayName property value. Title of the task.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. Date and, optionally, time the task is due.
     * @param DateWithOptionalTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateWithOptionalTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @param ExtensionFieldCollection|null $value Value to set for the extensions property.
    */
    public function setExtensions(?ExtensionFieldCollection $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the finishDateTime property value. Date and, optionally, time the task was finished.
     * @param DateWithOptionalTime|null $value Value to set for the finishDateTime property.
    */
    public function setFinishDateTime(?DateWithOptionalTime $value): void {
        $this->getBackingStore()->set('finishDateTime', $value);
    }

    /**
     * Sets the goalIds property value. IDs of the goals that the task is associated with.
     * @param array<string>|null $value Value to set for the goalIds property.
    */
    public function setGoalIds(?array $value): void {
        $this->getBackingStore()->set('goalIds', $value);
    }

    /**
     * Sets the hasChat property value. Indicates whether the task has an associated chat.
     * @param bool|null $value Value to set for the hasChat property.
    */
    public function setHasChat(?bool $value): void {
        $this->getBackingStore()->set('hasChat', $value);
    }

    /**
     * Sets the hasChildren property value. Indicates whether the task has subtasks.
     * @param bool|null $value Value to set for the hasChildren property.
    */
    public function setHasChildren(?bool $value): void {
        $this->getBackingStore()->set('hasChildren', $value);
    }

    /**
     * Sets the isCritical property value. Indicates whether the task is on the critical path, as computed from its dependencies.
     * @param bool|null $value Value to set for the isCritical property.
    */
    public function setIsCritical(?bool $value): void {
        $this->getBackingStore()->set('isCritical', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the links property value. The collection of content links attached to the task. Read-only. Nullable.
     * @param array<ContentLink>|null $value Value to set for the links property.
    */
    public function setLinks(?array $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the messages property value. The collection of chat messages associated with the task. Read-only. Nullable.
     * @param array<PlannerChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the notes property value. Additional details or notes about the task.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the parentTaskId property value. ID of the parent task, if this task is a subtask.
     * @param string|null $value Value to set for the parentTaskId property.
    */
    public function setParentTaskId(?string $value): void {
        $this->getBackingStore()->set('parentTaskId', $value);
    }

    /**
     * Sets the percentComplete property value. Percentage of the task's completion, ranging from 0 to 100.
     * @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the personalView property value. Per-user personal view settings for the task, such as My Day membership.
     * @param TaskPersonalView|null $value Value to set for the personalView property.
    */
    public function setPersonalView(?TaskPersonalView $value): void {
        $this->getBackingStore()->set('personalView', $value);
    }

    /**
     * Sets the planId property value. ID of the plan that contains the task. Immutable after creation.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the planView property value. Task view settings scoped to the plan, such as applied category IDs.
     * @param TaskPlanView|null $value Value to set for the planView property.
    */
    public function setPlanView(?TaskPlanView $value): void {
        $this->getBackingStore()->set('planView', $value);
    }

    /**
     * Sets the priority property value. Priority of the task. Supported values range from 0 (urgent) to 10 (low).
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the recurrence property value. Recurrence pattern for the task, if it repeats.
     * @param PlannerTaskRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PlannerTaskRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the startDateTime property value. Date and, optionally, time the task is scheduled to start.
     * @param DateWithOptionalTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateWithOptionalTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. Indicates progress on the task. The possible values are: notStarted, inProgress, completed, blocked, unknownFutureValue.
     * @param PlannerTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PlannerTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userAssignments property value. The collection of user assignments on the task. Read-only. Nullable.
     * @param array<UserAssignment>|null $value Value to set for the userAssignments property.
    */
    public function setUserAssignments(?array $value): void {
        $this->getBackingStore()->set('userAssignments', $value);
    }

}
