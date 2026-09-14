<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerGoal extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerGoal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerGoal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerGoal {
        return new PlannerGoal();
    }

    /**
     * Gets the displayName property value. Required. The display name of the goal.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'finishDate' => fn(ParseNode $n) => $o->setFinishDate($n->getDateValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PlannerGoalStatus::class)),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the finishDate property value. Nullable. The date on which the goal is scheduled to finish.
     * @return Date|null
    */
    public function getFinishDate(): ?Date {
        $val = $this->getBackingStore()->get('finishDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishDate'");
    }

    /**
     * Gets the notes property value. Nullable. The notes associated with the goal.
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
     * Gets the planId property value. Required. The ID of the plan that contains the goal.
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
     * Gets the priority property value. Optional. The relative priority of the goal. Valid values range from 0 to 10, inclusive. The default value is 5.
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
     * Gets the startDate property value. Nullable. The date on which the goal is scheduled to start.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the status property value. The status property
     * @return PlannerGoalStatus|null
    */
    public function getStatus(): ?PlannerGoalStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PlannerGoalStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. The tasks associated with the goal. This relationship doesn't support direct retrieval or $expand. To identify the goals associated with a task, read the goalIds property of the plannerTask resource.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTask::class);
            /** @var array<PlannerTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('finishDate', $this->getFinishDate());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the displayName property value. Required. The display name of the goal.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the finishDate property value. Nullable. The date on which the goal is scheduled to finish.
     * @param Date|null $value Value to set for the finishDate property.
    */
    public function setFinishDate(?Date $value): void {
        $this->getBackingStore()->set('finishDate', $value);
    }

    /**
     * Sets the notes property value. Nullable. The notes associated with the goal.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the planId property value. Required. The ID of the plan that contains the goal.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the priority property value. Optional. The relative priority of the goal. Valid values range from 0 to 10, inclusive. The default value is 5.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the startDate property value. Nullable. The date on which the goal is scheduled to start.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param PlannerGoalStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PlannerGoalStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. The tasks associated with the goal. This relationship doesn't support direct retrieval or $expand. To identify the goals associated with a task, read the goalIds property of the plannerTask resource.
     * @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
