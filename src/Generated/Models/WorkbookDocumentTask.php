<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookDocumentTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookDocumentTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookDocumentTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookDocumentTask {
        return new WorkbookDocumentTask();
    }

    /**
     * Gets the assignees property value. A collection of user identities the task is assigned to.
     * @return array<WorkbookEmailIdentity>|null
    */
    public function getAssignees(): ?array {
        $val = $this->getBackingStore()->get('assignees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookEmailIdentity::class);
            /** @var array<WorkbookEmailIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignees'");
    }

    /**
     * Gets the changes property value. A collection of task change histories.
     * @return array<WorkbookDocumentTaskChange>|null
    */
    public function getChanges(): ?array {
        $val = $this->getBackingStore()->get('changes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookDocumentTaskChange::class);
            /** @var array<WorkbookDocumentTaskChange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changes'");
    }

    /**
     * Gets the comment property value. The comment that the task is associated with.
     * @return WorkbookComment|null
    */
    public function getComment(): ?WorkbookComment {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || $val instanceof WorkbookComment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * Gets the completedBy property value. The identity of the user who completed the task. Nullable.
     * @return WorkbookEmailIdentity|null
    */
    public function getCompletedBy(): ?WorkbookEmailIdentity {
        $val = $this->getBackingStore()->get('completedBy');
        if (is_null($val) || $val instanceof WorkbookEmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedBy'");
    }

    /**
     * Gets the completedDateTime property value. Date and time when the task was completed. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the createdBy property value. A user identity that creates the task. Nullable.
     * @return WorkbookEmailIdentity|null
    */
    public function getCreatedBy(): ?WorkbookEmailIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof WorkbookEmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Date and time when the task was created. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
            'assignees' => fn(ParseNode $n) => $o->setAssignees($n->getCollectionOfObjectValues([WorkbookEmailIdentity::class, 'createFromDiscriminatorValue'])),
            'changes' => fn(ParseNode $n) => $o->setChanges($n->getCollectionOfObjectValues([WorkbookDocumentTaskChange::class, 'createFromDiscriminatorValue'])),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getObjectValue([WorkbookComment::class, 'createFromDiscriminatorValue'])),
            'completedBy' => fn(ParseNode $n) => $o->setCompletedBy($n->getObjectValue([WorkbookEmailIdentity::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([WorkbookEmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getIntegerValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'startAndDueDateTime' => fn(ParseNode $n) => $o->setStartAndDueDateTime($n->getObjectValue([WorkbookDocumentTaskSchedule::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the percentComplete property value. An integer value from 0 to 100 that represents the percentage of the completion of the task. 100 means that the task is completed. Nullable.
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
     * Gets the priority property value. An integer value from 0 to 10 that represents the priority of the task. A lower value indicates a higher priority. Nullable.
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
     * Gets the startAndDueDateTime property value. Start and due date of the task. Nullable.
     * @return WorkbookDocumentTaskSchedule|null
    */
    public function getStartAndDueDateTime(): ?WorkbookDocumentTaskSchedule {
        $val = $this->getBackingStore()->get('startAndDueDateTime');
        if (is_null($val) || $val instanceof WorkbookDocumentTaskSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startAndDueDateTime'");
    }

    /**
     * Gets the title property value. The title of the task.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignees', $this->getAssignees());
        $writer->writeCollectionOfObjectValues('changes', $this->getChanges());
        $writer->writeObjectValue('comment', $this->getComment());
        $writer->writeObjectValue('completedBy', $this->getCompletedBy());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('percentComplete', $this->getPercentComplete());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('startAndDueDateTime', $this->getStartAndDueDateTime());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the assignees property value. A collection of user identities the task is assigned to.
     * @param array<WorkbookEmailIdentity>|null $value Value to set for the assignees property.
    */
    public function setAssignees(?array $value): void {
        $this->getBackingStore()->set('assignees', $value);
    }

    /**
     * Sets the changes property value. A collection of task change histories.
     * @param array<WorkbookDocumentTaskChange>|null $value Value to set for the changes property.
    */
    public function setChanges(?array $value): void {
        $this->getBackingStore()->set('changes', $value);
    }

    /**
     * Sets the comment property value. The comment that the task is associated with.
     * @param WorkbookComment|null $value Value to set for the comment property.
    */
    public function setComment(?WorkbookComment $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the completedBy property value. The identity of the user who completed the task. Nullable.
     * @param WorkbookEmailIdentity|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?WorkbookEmailIdentity $value): void {
        $this->getBackingStore()->set('completedBy', $value);
    }

    /**
     * Sets the completedDateTime property value. Date and time when the task was completed. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. A user identity that creates the task. Nullable.
     * @param WorkbookEmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?WorkbookEmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when the task was created. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the percentComplete property value. An integer value from 0 to 100 that represents the percentage of the completion of the task. 100 means that the task is completed. Nullable.
     * @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the priority property value. An integer value from 0 to 10 that represents the priority of the task. A lower value indicates a higher priority. Nullable.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the startAndDueDateTime property value. Start and due date of the task. Nullable.
     * @param WorkbookDocumentTaskSchedule|null $value Value to set for the startAndDueDateTime property.
    */
    public function setStartAndDueDateTime(?WorkbookDocumentTaskSchedule $value): void {
        $this->getBackingStore()->set('startAndDueDateTime', $value);
    }

    /**
     * Sets the title property value. The title of the task.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
