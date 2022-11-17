<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new baseTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.baseTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseTask {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.task': return new Task();
            }
        }
        return new BaseTask();
    }

    /**
     * Gets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getBodyLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('bodyLastModifiedDateTime');
    }

    /**
     * Gets the checklistItems property value. A collection of smaller subtasks linked to the more complex parent task.
     * @return array<ChecklistItem>|null
    */
    public function getChecklistItems(): ?array {
        return $this->getBackingStore()->get('checklistItems');
    }

    /**
     * Gets the completedDateTime property value. The date when the task was finished.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. The name of the task.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('dueDateTime');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task .
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bodyLastModifiedDateTime' => fn(ParseNode $n) => $o->setBodyLastModifiedDateTime($n->getDateTimeValue()),
            'checklistItems' => fn(ParseNode $n) => $o->setChecklistItems($n->getCollectionOfObjectValues([ChecklistItem::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'linkedResources' => fn(ParseNode $n) => $o->setLinkedResources($n->getCollectionOfObjectValues([LinkedResource_v2::class, 'createFromDiscriminatorValue'])),
            'parentList' => fn(ParseNode $n) => $o->setParentList($n->getObjectValue([BaseTaskList::class, 'createFromDiscriminatorValue'])),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TaskStatus_v2::class)),
            'textBody' => fn(ParseNode $n) => $o->setTextBody($n->getStringValue()),
            'viewpoint' => fn(ParseNode $n) => $o->setViewpoint($n->getObjectValue([TaskViewpoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->getBackingStore()->get('importance');
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the linkedResources property value. A collection of resources linked to the task.
     * @return array<LinkedResource_v2>|null
    */
    public function getLinkedResources(): ?array {
        return $this->getBackingStore()->get('linkedResources');
    }

    /**
     * Gets the parentList property value. The list which contains the task.
     * @return BaseTaskList|null
    */
    public function getParentList(): ?BaseTaskList {
        return $this->getBackingStore()->get('parentList');
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->getBackingStore()->get('recurrence');
    }

    /**
     * Gets the startDateTime property value. The date in the specified time zone when the task is to begin.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return TaskStatus_v2|null
    */
    public function getStatus(): ?TaskStatus_v2 {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the textBody property value. The task body in text format that typically contains information about the task.
     * @return string|null
    */
    public function getTextBody(): ?string {
        return $this->getBackingStore()->get('textBody');
    }

    /**
     * Gets the viewpoint property value. The viewpoint property
     * @return TaskViewpoint|null
    */
    public function getViewpoint(): ?TaskViewpoint {
        return $this->getBackingStore()->get('viewpoint');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('bodyLastModifiedDateTime', $this->getBodyLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('checklistItems', $this->getChecklistItems());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('dueDateTime', $this->getDueDateTime());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('linkedResources', $this->getLinkedResources());
        $writer->writeObjectValue('parentList', $this->getParentList());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('textBody', $this->getTextBody());
        $writer->writeObjectValue('viewpoint', $this->getViewpoint());
    }

    /**
     * Sets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the bodyLastModifiedDateTime property.
    */
    public function setBodyLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('bodyLastModifiedDateTime', $value);
    }

    /**
     * Sets the checklistItems property value. A collection of smaller subtasks linked to the more complex parent task.
     *  @param array<ChecklistItem>|null $value Value to set for the checklistItems property.
    */
    public function setChecklistItems(?array $value): void {
        $this->getBackingStore()->set('checklistItems', $value);
    }

    /**
     * Sets the completedDateTime property value. The date when the task was finished.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the task.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task .
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the importance property value. The importance property
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the linkedResources property value. A collection of resources linked to the task.
     *  @param array<LinkedResource_v2>|null $value Value to set for the linkedResources property.
    */
    public function setLinkedResources(?array $value): void {
        $this->getBackingStore()->set('linkedResources', $value);
    }

    /**
     * Sets the parentList property value. The list which contains the task.
     *  @param BaseTaskList|null $value Value to set for the parentList property.
    */
    public function setParentList(?BaseTaskList $value): void {
        $this->getBackingStore()->set('parentList', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the startDateTime property value. The date in the specified time zone when the task is to begin.
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param TaskStatus_v2|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus_v2 $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the textBody property value. The task body in text format that typically contains information about the task.
     *  @param string|null $value Value to set for the textBody property.
    */
    public function setTextBody(?string $value): void {
        $this->getBackingStore()->set('textBody', $value);
    }

    /**
     * Sets the viewpoint property value. The viewpoint property
     *  @param TaskViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?TaskViewpoint $value): void {
        $this->getBackingStore()->set('viewpoint', $value);
    }

}
