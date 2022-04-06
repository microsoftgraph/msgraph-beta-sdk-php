<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseTask extends Entity 
{
    /** @var DateTime|null $bodyLastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $bodyLastModifiedDateTime = null;
    
    /** @var array<ChecklistItem>|null $checklistItems A collection of checklistItems linked to a task. */
    private ?array $checklistItems = null;
    
    /** @var DateTime|null $completedDateTime The date when the task was finished. */
    private ?DateTime $completedDateTime = null;
    
    /** @var DateTime|null $createdDateTime The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $displayName The name of the task. */
    private ?string $displayName = null;
    
    /** @var DateTimeTimeZone|null $dueDateTime The date in the specified time zone that the task is to be finished. */
    private ?DateTimeTimeZone $dueDateTime = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the task . */
    private ?array $extensions = null;
    
    /** @var Importance|null $importance The importance of the task. Possible values are: low, normal, high.  The possible values are: low, normal, high. */
    private ?Importance $importance = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<LinkedResource_v2>|null $linkedResources A collection of resources linked to the task. */
    private ?array $linkedResources = null;
    
    /** @var BaseTaskList|null $parentList The list which contains the task. */
    private ?BaseTaskList $parentList = null;
    
    /** @var PatternedRecurrence|null $recurrence The recurrence pattern for the task. */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var DateTimeTimeZone|null $startDateTime The date in the specified time zone when the task is to begin. */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /** @var TaskStatus_v2|null $status Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed,unknownFutureValue. */
    private ?TaskStatus_v2 $status = null;
    
    /** @var string|null $textBody The task body in text format that typically contains information about the task. */
    private ?string $textBody = null;
    
    /** @var TaskViewpoint|null $viewpoint The viewpoint property */
    private ?TaskViewpoint $viewpoint = null;
    
    /**
     * Instantiates a new baseTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseTask
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BaseTask {
        return new BaseTask();
    }

    /**
     * Gets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getBodyLastModifiedDateTime(): ?DateTime {
        return $this->bodyLastModifiedDateTime;
    }

    /**
     * Gets the checklistItems property value. A collection of checklistItems linked to a task.
     * @return array<ChecklistItem>|null
    */
    public function getChecklistItems(): ?array {
        return $this->checklistItems;
    }

    /**
     * Gets the completedDateTime property value. The date when the task was finished.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The name of the task.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->dueDateTime;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task .
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'bodyLastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setBodyLastModifiedDateTime($n->getDateTimeValue()); },
            'checklistItems' => function (self $o, ParseNode $n) { $o->setChecklistItems($n->getCollectionOfObjectValues(ChecklistItem::class)); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'dueDateTime' => function (self $o, ParseNode $n) { $o->setDueDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'importance' => function (self $o, ParseNode $n) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'linkedResources' => function (self $o, ParseNode $n) { $o->setLinkedResources($n->getCollectionOfObjectValues(LinkedResource_v2::class)); },
            'parentList' => function (self $o, ParseNode $n) { $o->setParentList($n->getObjectValue(BaseTaskList::class)); },
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(TaskStatus_v2::class)); },
            'textBody' => function (self $o, ParseNode $n) { $o->setTextBody($n->getStringValue()); },
            'viewpoint' => function (self $o, ParseNode $n) { $o->setViewpoint($n->getObjectValue(TaskViewpoint::class)); },
        ]);
    }

    /**
     * Gets the importance property value. The importance of the task. Possible values are: low, normal, high.  The possible values are: low, normal, high.
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the linkedResources property value. A collection of resources linked to the task.
     * @return array<LinkedResource_v2>|null
    */
    public function getLinkedResources(): ?array {
        return $this->linkedResources;
    }

    /**
     * Gets the parentList property value. The list which contains the task.
     * @return BaseTaskList|null
    */
    public function getParentList(): ?BaseTaskList {
        return $this->parentList;
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the startDateTime property value. The date in the specified time zone when the task is to begin.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed,unknownFutureValue.
     * @return TaskStatus_v2|null
    */
    public function getStatus(): ?TaskStatus_v2 {
        return $this->status;
    }

    /**
     * Gets the textBody property value. The task body in text format that typically contains information about the task.
     * @return string|null
    */
    public function getTextBody(): ?string {
        return $this->textBody;
    }

    /**
     * Gets the viewpoint property value. The viewpoint property
     * @return TaskViewpoint|null
    */
    public function getViewpoint(): ?TaskViewpoint {
        return $this->viewpoint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('bodyLastModifiedDateTime', $this->bodyLastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('checklistItems', $this->checklistItems);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('dueDateTime', $this->dueDateTime);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('linkedResources', $this->linkedResources);
        $writer->writeObjectValue('parentList', $this->parentList);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('textBody', $this->textBody);
        $writer->writeObjectValue('viewpoint', $this->viewpoint);
    }

    /**
     * Sets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the bodyLastModifiedDateTime property.
    */
    public function setBodyLastModifiedDateTime(?DateTime $value ): void {
        $this->bodyLastModifiedDateTime = $value;
    }

    /**
     * Sets the checklistItems property value. A collection of checklistItems linked to a task.
     *  @param array<ChecklistItem>|null $value Value to set for the checklistItems property.
    */
    public function setChecklistItems(?array $value ): void {
        $this->checklistItems = $value;
    }

    /**
     * Sets the completedDateTime property value. The date when the task was finished.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The name of the task.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task .
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the importance property value. The importance of the task. Possible values are: low, normal, high.  The possible values are: low, normal, high.
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the linkedResources property value. A collection of resources linked to the task.
     *  @param array<LinkedResource_v2>|null $value Value to set for the linkedResources property.
    */
    public function setLinkedResources(?array $value ): void {
        $this->linkedResources = $value;
    }

    /**
     * Sets the parentList property value. The list which contains the task.
     *  @param BaseTaskList|null $value Value to set for the parentList property.
    */
    public function setParentList(?BaseTaskList $value ): void {
        $this->parentList = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the startDateTime property value. The date in the specified time zone when the task is to begin.
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed,unknownFutureValue.
     *  @param TaskStatus_v2|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus_v2 $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the textBody property value. The task body in text format that typically contains information about the task.
     *  @param string|null $value Value to set for the textBody property.
    */
    public function setTextBody(?string $value ): void {
        $this->textBody = $value;
    }

    /**
     * Sets the viewpoint property value. The viewpoint property
     *  @param TaskViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?TaskViewpoint $value ): void {
        $this->viewpoint = $value;
    }

}
