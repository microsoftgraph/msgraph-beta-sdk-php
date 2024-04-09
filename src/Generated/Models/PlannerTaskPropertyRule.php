<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('appliedCategories');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedCategories'");
    }

    /**
     * Gets the approvalAttachment property value. The approvalAttachment property
     * @return PlannerFieldRules|null
    */
    public function getApprovalAttachment(): ?PlannerFieldRules {
        $val = $this->getBackingStore()->get('approvalAttachment');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalAttachment'");
    }

    /**
     * Gets the assignments property value. Rules and restrictions for assignments. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, addSelf, addOther, remove, removeSelf, removeOther, block.
     * @return PlannerFieldRules|null
    */
    public function getAssignments(): ?PlannerFieldRules {
        $val = $this->getBackingStore()->get('assignments');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the checkLists property value. Rules and restrictions for checklist. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, update, check, reorder, block.
     * @return PlannerFieldRules|null
    */
    public function getCheckLists(): ?PlannerFieldRules {
        $val = $this->getBackingStore()->get('checkLists');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checkLists'");
    }

    /**
     * Gets the completionRequirements property value. Rules and restrictions for completion requirements of the task. Accepted values are allow, add, remove, edit, and block.
     * @return array<string>|null
    */
    public function getCompletionRequirements(): ?array {
        $val = $this->getBackingStore()->get('completionRequirements');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionRequirements'");
    }

    /**
     * Gets the delete property value. Rules and restrictions for deleting the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getDelete(): ?array {
        $val = $this->getBackingStore()->get('delete');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delete'");
    }

    /**
     * Gets the dueDate property value. Rules and restrictions for changing the due date of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getDueDate(): ?array {
        $val = $this->getBackingStore()->get('dueDate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliedCategories' => fn(ParseNode $n) => $o->setAppliedCategories($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'approvalAttachment' => fn(ParseNode $n) => $o->setApprovalAttachment($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'checkLists' => fn(ParseNode $n) => $o->setCheckLists($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'completionRequirements' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCompletionRequirements($val);
            },
            'delete' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDelete($val);
            },
            'dueDate' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDueDate($val);
            },
            'forms' => fn(ParseNode $n) => $o->setForms($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'move' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMove($val);
            },
            'notes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotes($val);
            },
            'order' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOrder($val);
            },
            'percentComplete' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPercentComplete($val);
            },
            'previewType' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPreviewType($val);
            },
            'priority' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPriority($val);
            },
            'references' => fn(ParseNode $n) => $o->setReferences($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'startDate' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStartDate($val);
            },
            'title' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTitle($val);
            },
        ]);
    }

    /**
     * Gets the forms property value. Rules and restrictions for forms. Allowed overrides are userCreated and applicationCreated. The following are the accepted values for the default rule and individual overrides: allow, add, addResponse, remove, update, block.
     * @return PlannerFieldRules|null
    */
    public function getForms(): ?PlannerFieldRules {
        $val = $this->getBackingStore()->get('forms');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forms'");
    }

    /**
     * Gets the move property value. Rules and restrictions for moving the task between buckets or plans. Accepted values are allow, moveBetweenPlans, moveBetweenBuckets, and block.
     * @return array<string>|null
    */
    public function getMove(): ?array {
        $val = $this->getBackingStore()->get('move');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'move'");
    }

    /**
     * Gets the notes property value. Rules and restrictions for changing the notes of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getNotes(): ?array {
        $val = $this->getBackingStore()->get('notes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the order property value. Rules and restrictions for changing the order of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getOrder(): ?array {
        $val = $this->getBackingStore()->get('order');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'order'");
    }

    /**
     * Gets the percentComplete property value. Rules and restrictions for changing the completion percentage of the task. Accepted values are allow, setToComplete, overrideRequirements, setToNotStarted, setToInProgress, and block.
     * @return array<string>|null
    */
    public function getPercentComplete(): ?array {
        $val = $this->getBackingStore()->get('percentComplete');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentComplete'");
    }

    /**
     * Gets the previewType property value. Rules and restrictions for changing the preview type of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getPreviewType(): ?array {
        $val = $this->getBackingStore()->get('previewType');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewType'");
    }

    /**
     * Gets the priority property value. Rules and restrictions for changing the priority of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getPriority(): ?array {
        $val = $this->getBackingStore()->get('priority');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the references property value. Rules and restrictions for references. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, block.
     * @return PlannerFieldRules|null
    */
    public function getReferences(): ?PlannerFieldRules {
        $val = $this->getBackingStore()->get('references');
        if (is_null($val) || $val instanceof PlannerFieldRules) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'references'");
    }

    /**
     * Gets the startDate property value. Rules and restrictions for changing the start date of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getStartDate(): ?array {
        $val = $this->getBackingStore()->get('startDate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the title property value. Rules and restrictions for changing the title of the task. Accepted values are allow and block.
     * @return array<string>|null
    */
    public function getTitle(): ?array {
        $val = $this->getBackingStore()->get('title');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
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
        $writer->writeObjectValue('appliedCategories', $this->getAppliedCategories());
        $writer->writeObjectValue('approvalAttachment', $this->getApprovalAttachment());
        $writer->writeObjectValue('assignments', $this->getAssignments());
        $writer->writeObjectValue('checkLists', $this->getCheckLists());
        $writer->writeCollectionOfPrimitiveValues('completionRequirements', $this->getCompletionRequirements());
        $writer->writeCollectionOfPrimitiveValues('delete', $this->getDelete());
        $writer->writeCollectionOfPrimitiveValues('dueDate', $this->getDueDate());
        $writer->writeObjectValue('forms', $this->getForms());
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
     * Sets the approvalAttachment property value. The approvalAttachment property
     * @param PlannerFieldRules|null $value Value to set for the approvalAttachment property.
    */
    public function setApprovalAttachment(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('approvalAttachment', $value);
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
     * Sets the forms property value. Rules and restrictions for forms. Allowed overrides are userCreated and applicationCreated. The following are the accepted values for the default rule and individual overrides: allow, add, addResponse, remove, update, block.
     * @param PlannerFieldRules|null $value Value to set for the forms property.
    */
    public function setForms(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('forms', $value);
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
