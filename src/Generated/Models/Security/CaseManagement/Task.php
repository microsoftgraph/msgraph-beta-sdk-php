<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Task extends CaseManagementEntity implements Parsable 
{
    /**
     * Instantiates a new Task and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.task');
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
     * Gets the assignedTo property value. The user assigned to the task. Supports $filter.
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
     * Gets the category property value. The category property
     * @return CaseTaskCategory|null
    */
    public function getCategory(): ?CaseTaskCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof CaseTaskCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the closingNotes property value. Notes recorded when the task is completed. Supports $filter.
     * @return string|null
    */
    public function getClosingNotes(): ?string {
        $val = $this->getBackingStore()->get('closingNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closingNotes'");
    }

    /**
     * Gets the description property value. The description of the task. Supports $filter.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The title of the task. Supports $filter.
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
     * Gets the dueDateTime property value. The target completion date and time for the task. Supports $filter.
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
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(CaseTaskCategory::class)),
            'closingNotes' => fn(ParseNode $n) => $o->setClosingNotes($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(CaseTaskPriority::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TaskStatus::class)),
        ]);
    }

    /**
     * Gets the priority property value. The priority property
     * @return CaseTaskPriority|null
    */
    public function getPriority(): ?CaseTaskPriority {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || $val instanceof CaseTaskPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the status property value. The status property
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('closingNotes', $this->getClosingNotes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the assignedTo property value. The user assigned to the task. Supports $filter.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param CaseTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?CaseTaskCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the closingNotes property value. Notes recorded when the task is completed. Supports $filter.
     * @param string|null $value Value to set for the closingNotes property.
    */
    public function setClosingNotes(?string $value): void {
        $this->getBackingStore()->set('closingNotes', $value);
    }

    /**
     * Sets the description property value. The description of the task. Supports $filter.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The title of the task. Supports $filter.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. The target completion date and time for the task. Supports $filter.
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param CaseTaskPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?CaseTaskPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
