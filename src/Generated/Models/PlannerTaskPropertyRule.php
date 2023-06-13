<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTaskPropertyRule extends PlannerPropertyRule implements Parsable 
{
    /**
     * Instantiates a new PlannerTaskPropertyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerTaskPropertyRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskPropertyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskPropertyRule {
        return new PlannerTaskPropertyRule();
    }

    /**
     * Gets the appliedCategories property value. Rules and restrictions for applied categories. This value does not currently support overrides. Accepted values for the default rule and individual overrides are allow, block.
     * @return PlannerFieldRules|null
    */
    public function getAppliedCategories(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('appliedCategories');
    }

    /**
     * Gets the assignments property value. Rules and restrictions for assignments. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, addSelf, addOther, remove, removeSelf, removeOther, block.
     * @return PlannerFieldRules|null
    */
    public function getAssignments(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the checkLists property value. Rules and restrictions for checklist. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, update, check, reorder, block.
     * @return PlannerFieldRules|null
    */
    public function getCheckLists(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('checkLists');
    }

    /**
     * Gets the completionRequirements property value. Rules and restrictions for completion requirements of the task. Accepted values are allow, add, remove, edit, and block.
     * @return array<string>|null
    */
    public function getCompletionRequirements(): ?array {
        return $this->getBackingStore()->get('completionRequirements');
    }

    /**
     * Gets the delete property value. Rules and restrictions for deleting the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getDelete(): ?array {
        return $this->getBackingStore()->get('delete');
    }

    /**
     * Gets the dueDate property value. Rules and restrictions for changing the due date of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getDueDate(): ?array {
        return $this->getBackingStore()->get('dueDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliedCategories' => fn(ParseNode $n) => $o->setAppliedCategories($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'checkLists' => fn(ParseNode $n) => $o->setCheckLists($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'completionRequirements' => fn(ParseNode $n) => $o->setCompletionRequirements($n->getCollectionOfPrimitiveValues()),
            'delete' => fn(ParseNode $n) => $o->setDelete($n->getCollectionOfPrimitiveValues()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getCollectionOfPrimitiveValues()),
            'move' => fn(ParseNode $n) => $o->setMove($n->getCollectionOfPrimitiveValues()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getCollectionOfPrimitiveValues()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getCollectionOfPrimitiveValues()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getCollectionOfPrimitiveValues()),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getCollectionOfPrimitiveValues()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getCollectionOfPrimitiveValues()),
            'references' => fn(ParseNode $n) => $o->setReferences($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getCollectionOfPrimitiveValues()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the move property value. Rules and restrictions for moving the task between buckets or plans. Accepted values are allow, moveBetweenPlans, moveBetweenBuckets, and block.
     * @return array<string>|null
    */
    public function getMove(): ?array {
        return $this->getBackingStore()->get('move');
    }

    /**
     * Gets the notes property value. Rules and restrictions for changing the notes of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getNotes(): ?array {
        return $this->getBackingStore()->get('notes');
    }

    /**
     * Gets the order property value. Rules and restrictions for changing the order of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getOrder(): ?array {
        return $this->getBackingStore()->get('order');
    }

    /**
     * Gets the percentComplete property value. Rules and restrictions for changing the completion percentage of the task. Accepted values are allow, setToComplete, overrideRequirements, setToNotStarted, setToInProgress, and block.
     * @return array<string>|null
    */
    public function getPercentComplete(): ?array {
        return $this->getBackingStore()->get('percentComplete');
    }

    /**
     * Gets the previewType property value. Rules and restrictions for changing the preview type of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getPreviewType(): ?array {
        return $this->getBackingStore()->get('previewType');
    }

    /**
     * Gets the priority property value. Rules and restrictions for changing the priority of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getPriority(): ?array {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the references property value. Rules and restrictions for references. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, block.
     * @return PlannerFieldRules|null
    */
    public function getReferences(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('references');
    }

    /**
     * Gets the startDate property value. Rules and restrictions for changing the start date of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getStartDate(): ?array {
        return $this->getBackingStore()->get('startDate');
    }

    /**
     * Gets the title property value. Rules and restrictions for changing the title of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getTitle(): ?array {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appliedCategories', $this->getAppliedCategories());
        $writer->writeObjectValue('assignments', $this->getAssignments());
        $writer->writeObjectValue('checkLists', $this->getCheckLists());
        $writer->writeCollectionOfPrimitiveValues('completionRequirements', $this->getCompletionRequirements());
        $writer->writeCollectionOfPrimitiveValues('delete', $this->getDelete());
        $writer->writeCollectionOfPrimitiveValues('dueDate', $this->getDueDate());
        $writer->writeCollectionOfPrimitiveValues('move', $this->getMove());
        $writer->writeCollectionOfPrimitiveValues('notes', $this->getNotes());
        $writer->writeCollectionOfPrimitiveValues('order', $this->getOrder());
        $writer->writeCollectionOfPrimitiveValues('percentComplete', $this->getPercentComplete());
        $writer->writeCollectionOfPrimitiveValues('previewType', $this->getPreviewType());
        $writer->writeCollectionOfPrimitiveValues('priority', $this->getPriority());
        $writer->writeObjectValue('references', $this->getReferences());
        $writer->writeCollectionOfPrimitiveValues('startDate', $this->getStartDate());
        $writer->writeCollectionOfPrimitiveValues('title', $this->getTitle());
    }

    /**
     * Sets the appliedCategories property value. Rules and restrictions for applied categories. This value does not currently support overrides. Accepted values for the default rule and individual overrides are allow, block.
     * @param PlannerFieldRules|null $value Value to set for the appliedCategories property.
    */
    public function setAppliedCategories(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('appliedCategories', $value);
    }

    /**
     * Sets the assignments property value. Rules and restrictions for assignments. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, addSelf, addOther, remove, removeSelf, removeOther, block.
     * @param PlannerFieldRules|null $value Value to set for the assignments property.
    */
    public function setAssignments(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the checkLists property value. Rules and restrictions for checklist. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, update, check, reorder, block.
     * @param PlannerFieldRules|null $value Value to set for the checkLists property.
    */
    public function setCheckLists(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('checkLists', $value);
    }

    /**
     * Sets the completionRequirements property value. Rules and restrictions for completion requirements of the task. Accepted values are allow, add, remove, edit, and block.
     * @param array<string>|null $value Value to set for the completionRequirements property.
    */
    public function setCompletionRequirements(?array $value): void {
        $this->getBackingStore()->set('completionRequirements', $value);
    }

    /**
     * Sets the delete property value. Rules and restrictions for deleting the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the delete property.
    */
    public function setDelete(?array $value): void {
        $this->getBackingStore()->set('delete', $value);
    }

    /**
     * Sets the dueDate property value. Rules and restrictions for changing the due date of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?array $value): void {
        $this->getBackingStore()->set('dueDate', $value);
    }

    /**
     * Sets the move property value. Rules and restrictions for moving the task between buckets or plans. Accepted values are allow, moveBetweenPlans, moveBetweenBuckets, and block.
     * @param array<string>|null $value Value to set for the move property.
    */
    public function setMove(?array $value): void {
        $this->getBackingStore()->set('move', $value);
    }

    /**
     * Sets the notes property value. Rules and restrictions for changing the notes of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the notes property.
    */
    public function setNotes(?array $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the order property value. Rules and restrictions for changing the order of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the order property.
    */
    public function setOrder(?array $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the percentComplete property value. Rules and restrictions for changing the completion percentage of the task. Accepted values are allow, setToComplete, overrideRequirements, setToNotStarted, setToInProgress, and block.
     * @param array<string>|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?array $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the previewType property value. Rules and restrictions for changing the preview type of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?array $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the priority property value. Rules and restrictions for changing the priority of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the priority property.
    */
    public function setPriority(?array $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the references property value. Rules and restrictions for references. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, block.
     * @param PlannerFieldRules|null $value Value to set for the references property.
    */
    public function setReferences(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('references', $value);
    }

    /**
     * Sets the startDate property value. Rules and restrictions for changing the start date of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the startDate property.
    */
    public function setStartDate(?array $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the title property value. Rules and restrictions for changing the title of the task. Accepted values are allow and block.
     * @param array<string>|null $value Value to set for the title property.
    */
    public function setTitle(?array $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
