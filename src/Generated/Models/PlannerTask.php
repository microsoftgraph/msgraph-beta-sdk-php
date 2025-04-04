<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PlannerTask extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTask {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.businessScenarioTask': return new BusinessScenarioTask();
            }
        }
        return new PlannerTask();
    }

    /**
     * Gets the activeChecklistItemCount property value. The number of checklist items with value set to false, representing incomplete items.
     * @return int|null
    */
    public function getActiveChecklistItemCount(): ?int {
        $val = $this->getBackingStore()->get('activeChecklistItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeChecklistItemCount'");
    }

    /**
     * Gets the appliedCategories property value. The categories to which the task is applied. See plannerAppliedCategories resource type for possible values.
     * @return PlannerAppliedCategories|null
    */
    public function getAppliedCategories(): ?PlannerAppliedCategories {
        $val = $this->getBackingStore()->get('appliedCategories');
        if (is_null($val) || $val instanceof PlannerAppliedCategories) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedCategories'");
    }

    /**
     * Gets the archivalInfo property value. Read-only. Nullable. Contains information about who archived or unarchived the task and why.
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
     * Gets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @return PlannerAssignedToTaskBoardTaskFormat|null
    */
    public function getAssignedToTaskBoardFormat(): ?PlannerAssignedToTaskBoardTaskFormat {
        $val = $this->getBackingStore()->get('assignedToTaskBoardFormat');
        if (is_null($val) || $val instanceof PlannerAssignedToTaskBoardTaskFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedToTaskBoardFormat'");
    }

    /**
     * Gets the assigneePriority property value. A hint that is used to order items of this type in a list view. For more information, see Using order hints in planner.
     * @return string|null
    */
    public function getAssigneePriority(): ?string {
        $val = $this->getBackingStore()->get('assigneePriority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assigneePriority'");
    }

    /**
     * Gets the assignments property value. The set of assignees the task is assigned to.
     * @return PlannerAssignments|null
    */
    public function getAssignments(): ?PlannerAssignments {
        $val = $this->getBackingStore()->get('assignments');
        if (is_null($val) || $val instanceof PlannerAssignments) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the same plan as the task. The value of the bucketId property is 28 characters long and case-sensitive. Format validation is done on the service.
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
     * Gets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @return PlannerBucketTaskBoardTaskFormat|null
    */
    public function getBucketTaskBoardFormat(): ?PlannerBucketTaskBoardTaskFormat {
        $val = $this->getBackingStore()->get('bucketTaskBoardFormat');
        if (is_null($val) || $val instanceof PlannerBucketTaskBoardTaskFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bucketTaskBoardFormat'");
    }

    /**
     * Gets the checklistItemCount property value. The number of checklist items that are present on the task.
     * @return int|null
    */
    public function getChecklistItemCount(): ?int {
        $val = $this->getBackingStore()->get('checklistItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklistItemCount'");
    }

    /**
     * Gets the completedBy property value. The identity of the user that completed the task.
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
     * Gets the completedDateTime property value. Read-only. The date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the conversationThreadId property value. The thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        $val = $this->getBackingStore()->get('conversationThreadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationThreadId'");
    }

    /**
     * Gets the createdBy property value. The identity of the user who created the task.
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
     * Gets the createdDateTime property value. Read-only. The date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the creationSource property value. Information about the origin of the task.
     * @return PlannerTaskCreation|null
    */
    public function getCreationSource(): ?PlannerTaskCreation {
        $val = $this->getBackingStore()->get('creationSource');
        if (is_null($val) || $val instanceof PlannerTaskCreation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSource'");
    }

    /**
     * Gets the details property value. Read-only. Nullable. More details about the task.
     * @return PlannerTaskDetails|null
    */
    public function getDetails(): ?PlannerTaskDetails {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof PlannerTaskDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * Gets the dueDateTime property value. The date and time at which the task is due. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
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
            'activeChecklistItemCount' => fn(ParseNode $n) => $o->setActiveChecklistItemCount($n->getIntegerValue()),
            'appliedCategories' => fn(ParseNode $n) => $o->setAppliedCategories($n->getObjectValue([PlannerAppliedCategories::class, 'createFromDiscriminatorValue'])),
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'assignedToTaskBoardFormat' => fn(ParseNode $n) => $o->setAssignedToTaskBoardFormat($n->getObjectValue([PlannerAssignedToTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'assigneePriority' => fn(ParseNode $n) => $o->setAssigneePriority($n->getStringValue()),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getObjectValue([PlannerAssignments::class, 'createFromDiscriminatorValue'])),
            'bucketId' => fn(ParseNode $n) => $o->setBucketId($n->getStringValue()),
            'bucketTaskBoardFormat' => fn(ParseNode $n) => $o->setBucketTaskBoardFormat($n->getObjectValue([PlannerBucketTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'checklistItemCount' => fn(ParseNode $n) => $o->setChecklistItemCount($n->getIntegerValue()),
            'completedBy' => fn(ParseNode $n) => $o->setCompletedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'conversationThreadId' => fn(ParseNode $n) => $o->setConversationThreadId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getObjectValue([PlannerTaskCreation::class, 'createFromDiscriminatorValue'])),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([PlannerTaskDetails::class, 'createFromDiscriminatorValue'])),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'hasDescription' => fn(ParseNode $n) => $o->setHasDescription($n->getBooleanValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isOnMyDay' => fn(ParseNode $n) => $o->setIsOnMyDay($n->getBooleanValue()),
            'isOnMyDayLastModifiedDate' => fn(ParseNode $n) => $o->setIsOnMyDayLastModifiedDate($n->getDateValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'orderHint' => fn(ParseNode $n) => $o->setOrderHint($n->getStringValue()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getIntegerValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'progressTaskBoardFormat' => fn(ParseNode $n) => $o->setProgressTaskBoardFormat($n->getObjectValue([PlannerProgressTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PlannerTaskRecurrence::class, 'createFromDiscriminatorValue'])),
            'referenceCount' => fn(ParseNode $n) => $o->setReferenceCount($n->getIntegerValue()),
            'specifiedCompletionRequirements' => fn(ParseNode $n) => $o->setSpecifiedCompletionRequirements($n->getEnumValue(PlannerTaskCompletionRequirements::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasDescription property value. Read-only. This value is true if the details object of the task has a nonempty description. Otherwise,false.
     * @return bool|null
    */
    public function getHasDescription(): ?bool {
        $val = $this->getBackingStore()->get('hasDescription');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDescription'");
    }

    /**
     * Gets the isArchived property value. Read-only. If set to true, the task is archived. An archived task is read-only.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
    }

    /**
     * Gets the isOnMyDay property value. Indicates whether to show this task in the MyDay view. If true, it shows the task.
     * @return bool|null
    */
    public function getIsOnMyDay(): ?bool {
        $val = $this->getBackingStore()->get('isOnMyDay');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnMyDay'");
    }

    /**
     * Gets the isOnMyDayLastModifiedDate property value. Read-only. The date on which task is added to or removed from MyDay.
     * @return Date|null
    */
    public function getIsOnMyDayLastModifiedDate(): ?Date {
        $val = $this->getBackingStore()->get('isOnMyDayLastModifiedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnMyDayLastModifiedDate'");
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
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
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
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
     * Gets the orderHint property value. The hint used to order items of this type in a list view. For more information, see Using order hints in plannern.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        $val = $this->getBackingStore()->get('orderHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderHint'");
    }

    /**
     * Gets the percentComplete property value. The percentage of task completion. When set to 100, the task is completed.
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
     * Gets the planId property value. Plan ID to which the task belongs.
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
     * Gets the previewType property value. The type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference.
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        $val = $this->getBackingStore()->get('previewType');
        if (is_null($val) || $val instanceof PlannerPreviewType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewType'");
    }

    /**
     * Gets the priority property value. The priority of the task. Valid values are between 0 and 10, inclusive. Larger values indicate lower priority. For example, 0 has the highest priority and 10 has the lowest priority. Currently, planner interprets values 0 and 1 as 'urgent', 2 and 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'. Currently, planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
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
     * Gets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @return PlannerProgressTaskBoardTaskFormat|null
    */
    public function getProgressTaskBoardFormat(): ?PlannerProgressTaskBoardTaskFormat {
        $val = $this->getBackingStore()->get('progressTaskBoardFormat');
        if (is_null($val) || $val instanceof PlannerProgressTaskBoardTaskFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'progressTaskBoardFormat'");
    }

    /**
     * Gets the recurrence property value. Defines active or inactive recurrence for the task. null when the recurrence has never been defined for the task.
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
     * Gets the referenceCount property value. Number of external references that exist on the task.
     * @return int|null
    */
    public function getReferenceCount(): ?int {
        $val = $this->getBackingStore()->get('referenceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceCount'");
    }

    /**
     * Gets the specifiedCompletionRequirements property value. Indicates all the requirements specified on the plannerTask. Possible values are: none, checklistCompletion, unknownFutureValue, formCompletion, approvalCompletion. Read-only. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: formCompletion, approvalCompletion. The plannerTaskCompletionRequirementDetails in plannerTaskDetails has details of the requirements specified, if any.
     * @return PlannerTaskCompletionRequirements|null
    */
    public function getSpecifiedCompletionRequirements(): ?PlannerTaskCompletionRequirements {
        $val = $this->getBackingStore()->get('specifiedCompletionRequirements');
        if (is_null($val) || $val instanceof PlannerTaskCompletionRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specifiedCompletionRequirements'");
    }

    /**
     * Gets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the title property value. Title of the task.
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
        $writer->writeIntegerValue('activeChecklistItemCount', $this->getActiveChecklistItemCount());
        $writer->writeObjectValue('appliedCategories', $this->getAppliedCategories());
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeObjectValue('assignedToTaskBoardFormat', $this->getAssignedToTaskBoardFormat());
        $writer->writeStringValue('assigneePriority', $this->getAssigneePriority());
        $writer->writeObjectValue('assignments', $this->getAssignments());
        $writer->writeStringValue('bucketId', $this->getBucketId());
        $writer->writeObjectValue('bucketTaskBoardFormat', $this->getBucketTaskBoardFormat());
        $writer->writeIntegerValue('checklistItemCount', $this->getChecklistItemCount());
        $writer->writeObjectValue('completedBy', $this->getCompletedBy());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeStringValue('conversationThreadId', $this->getConversationThreadId());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('creationSource', $this->getCreationSource());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeBooleanValue('hasDescription', $this->getHasDescription());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isOnMyDay', $this->getIsOnMyDay());
        $writer->writeDateValue('isOnMyDayLastModifiedDate', $this->getIsOnMyDayLastModifiedDate());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('orderHint', $this->getOrderHint());
        $writer->writeIntegerValue('percentComplete', $this->getPercentComplete());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeEnumValue('previewType', $this->getPreviewType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('progressTaskBoardFormat', $this->getProgressTaskBoardFormat());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeIntegerValue('referenceCount', $this->getReferenceCount());
        $writer->writeEnumValue('specifiedCompletionRequirements', $this->getSpecifiedCompletionRequirements());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the activeChecklistItemCount property value. The number of checklist items with value set to false, representing incomplete items.
     * @param int|null $value Value to set for the activeChecklistItemCount property.
    */
    public function setActiveChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('activeChecklistItemCount', $value);
    }

    /**
     * Sets the appliedCategories property value. The categories to which the task is applied. See plannerAppliedCategories resource type for possible values.
     * @param PlannerAppliedCategories|null $value Value to set for the appliedCategories property.
    */
    public function setAppliedCategories(?PlannerAppliedCategories $value): void {
        $this->getBackingStore()->set('appliedCategories', $value);
    }

    /**
     * Sets the archivalInfo property value. Read-only. Nullable. Contains information about who archived or unarchived the task and why.
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @param PlannerAssignedToTaskBoardTaskFormat|null $value Value to set for the assignedToTaskBoardFormat property.
    */
    public function setAssignedToTaskBoardFormat(?PlannerAssignedToTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('assignedToTaskBoardFormat', $value);
    }

    /**
     * Sets the assigneePriority property value. A hint that is used to order items of this type in a list view. For more information, see Using order hints in planner.
     * @param string|null $value Value to set for the assigneePriority property.
    */
    public function setAssigneePriority(?string $value): void {
        $this->getBackingStore()->set('assigneePriority', $value);
    }

    /**
     * Sets the assignments property value. The set of assignees the task is assigned to.
     * @param PlannerAssignments|null $value Value to set for the assignments property.
    */
    public function setAssignments(?PlannerAssignments $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the same plan as the task. The value of the bucketId property is 28 characters long and case-sensitive. Format validation is done on the service.
     * @param string|null $value Value to set for the bucketId property.
    */
    public function setBucketId(?string $value): void {
        $this->getBackingStore()->set('bucketId', $value);
    }

    /**
     * Sets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @param PlannerBucketTaskBoardTaskFormat|null $value Value to set for the bucketTaskBoardFormat property.
    */
    public function setBucketTaskBoardFormat(?PlannerBucketTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('bucketTaskBoardFormat', $value);
    }

    /**
     * Sets the checklistItemCount property value. The number of checklist items that are present on the task.
     * @param int|null $value Value to set for the checklistItemCount property.
    */
    public function setChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('checklistItemCount', $value);
    }

    /**
     * Sets the completedBy property value. The identity of the user that completed the task.
     * @param IdentitySet|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('completedBy', $value);
    }

    /**
     * Sets the completedDateTime property value. Read-only. The date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the conversationThreadId property value. The thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value): void {
        $this->getBackingStore()->set('conversationThreadId', $value);
    }

    /**
     * Sets the createdBy property value. The identity of the user who created the task.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Read-only. The date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creationSource property value. Information about the origin of the task.
     * @param PlannerTaskCreation|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?PlannerTaskCreation $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the details property value. Read-only. Nullable. More details about the task.
     * @param PlannerTaskDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerTaskDetails $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the dueDateTime property value. The date and time at which the task is due. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the hasDescription property value. Read-only. This value is true if the details object of the task has a nonempty description. Otherwise,false.
     * @param bool|null $value Value to set for the hasDescription property.
    */
    public function setHasDescription(?bool $value): void {
        $this->getBackingStore()->set('hasDescription', $value);
    }

    /**
     * Sets the isArchived property value. Read-only. If set to true, the task is archived. An archived task is read-only.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the isOnMyDay property value. Indicates whether to show this task in the MyDay view. If true, it shows the task.
     * @param bool|null $value Value to set for the isOnMyDay property.
    */
    public function setIsOnMyDay(?bool $value): void {
        $this->getBackingStore()->set('isOnMyDay', $value);
    }

    /**
     * Sets the isOnMyDayLastModifiedDate property value. Read-only. The date on which task is added to or removed from MyDay.
     * @param Date|null $value Value to set for the isOnMyDayLastModifiedDate property.
    */
    public function setIsOnMyDayLastModifiedDate(?Date $value): void {
        $this->getBackingStore()->set('isOnMyDayLastModifiedDate', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the orderHint property value. The hint used to order items of this type in a list view. For more information, see Using order hints in plannern.
     * @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value): void {
        $this->getBackingStore()->set('orderHint', $value);
    }

    /**
     * Sets the percentComplete property value. The percentage of task completion. When set to 100, the task is completed.
     * @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the planId property value. Plan ID to which the task belongs.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the previewType property value. The type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference.
     * @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the priority property value. The priority of the task. Valid values are between 0 and 10, inclusive. Larger values indicate lower priority. For example, 0 has the highest priority and 10 has the lowest priority. Currently, planner interprets values 0 and 1 as 'urgent', 2 and 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'. Currently, planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @param PlannerProgressTaskBoardTaskFormat|null $value Value to set for the progressTaskBoardFormat property.
    */
    public function setProgressTaskBoardFormat(?PlannerProgressTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('progressTaskBoardFormat', $value);
    }

    /**
     * Sets the recurrence property value. Defines active or inactive recurrence for the task. null when the recurrence has never been defined for the task.
     * @param PlannerTaskRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PlannerTaskRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the referenceCount property value. Number of external references that exist on the task.
     * @param int|null $value Value to set for the referenceCount property.
    */
    public function setReferenceCount(?int $value): void {
        $this->getBackingStore()->set('referenceCount', $value);
    }

    /**
     * Sets the specifiedCompletionRequirements property value. Indicates all the requirements specified on the plannerTask. Possible values are: none, checklistCompletion, unknownFutureValue, formCompletion, approvalCompletion. Read-only. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: formCompletion, approvalCompletion. The plannerTaskCompletionRequirementDetails in plannerTaskDetails has details of the requirements specified, if any.
     * @param PlannerTaskCompletionRequirements|null $value Value to set for the specifiedCompletionRequirements property.
    */
    public function setSpecifiedCompletionRequirements(?PlannerTaskCompletionRequirements $value): void {
        $this->getBackingStore()->set('specifiedCompletionRequirements', $value);
    }

    /**
     * Sets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the title property value. Title of the task.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
