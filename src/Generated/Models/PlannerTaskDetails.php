<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTaskDetails extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerTaskDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskDetails {
        return new PlannerTaskDetails();
    }

    /**
     * Gets the approvalAttachment property value. Detailed information about the approval that is attached to the task.
     * @return PlannerBaseApprovalAttachment|null
    */
    public function getApprovalAttachment(): ?PlannerBaseApprovalAttachment {
        $val = $this->getBackingStore()->get('approvalAttachment');
        if (is_null($val) || $val instanceof PlannerBaseApprovalAttachment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalAttachment'");
    }

    /**
     * Gets the checklist property value. The collection of checklist items on the task.
     * @return PlannerChecklistItems|null
    */
    public function getChecklist(): ?PlannerChecklistItems {
        $val = $this->getBackingStore()->get('checklist');
        if (is_null($val) || $val instanceof PlannerChecklistItems) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklist'");
    }

    /**
     * Gets the completionRequirements property value. Contains detailed information about requirements on the task.
     * @return PlannerTaskCompletionRequirementDetails|null
    */
    public function getCompletionRequirements(): ?PlannerTaskCompletionRequirementDetails {
        $val = $this->getBackingStore()->get('completionRequirements');
        if (is_null($val) || $val instanceof PlannerTaskCompletionRequirementDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionRequirements'");
    }

    /**
     * Gets the description property value. Description of the task.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalAttachment' => fn(ParseNode $n) => $o->setApprovalAttachment($n->getObjectValue([PlannerBaseApprovalAttachment::class, 'createFromDiscriminatorValue'])),
            'checklist' => fn(ParseNode $n) => $o->setChecklist($n->getObjectValue([PlannerChecklistItems::class, 'createFromDiscriminatorValue'])),
            'completionRequirements' => fn(ParseNode $n) => $o->setCompletionRequirements($n->getObjectValue([PlannerTaskCompletionRequirementDetails::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'forms' => fn(ParseNode $n) => $o->setForms($n->getObjectValue([PlannerFormsDictionary::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)),
            'references' => fn(ParseNode $n) => $o->setReferences($n->getObjectValue([PlannerExternalReferences::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the forms property value. Read-only. Represents a dictionary of data about the forms associated with a task. Each entry in the dictionary is a key-value pair, and the value is a plannerFormReference object.
     * @return PlannerFormsDictionary|null
    */
    public function getForms(): ?PlannerFormsDictionary {
        $val = $this->getBackingStore()->get('forms');
        if (is_null($val) || $val instanceof PlannerFormsDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forms'");
    }

    /**
     * Gets the notes property value. Rich text description of the task. To be used by HTML-aware clients. For backwards compatibility, a plain-text version of the HTML description will be synced to the 'description' field. If this field hasn't previously been set but 'description' has been, the existing description is synchronized to 'notes' with minimal whitespace-preserving HTML markup. Setting both 'description' and 'notes' is an error and will result in an exception.
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
     * Gets the previewType property value. This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
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
     * Gets the references property value. The collection of references on the task.
     * @return PlannerExternalReferences|null
    */
    public function getReferences(): ?PlannerExternalReferences {
        $val = $this->getBackingStore()->get('references');
        if (is_null($val) || $val instanceof PlannerExternalReferences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'references'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('approvalAttachment', $this->getApprovalAttachment());
        $writer->writeObjectValue('checklist', $this->getChecklist());
        $writer->writeObjectValue('completionRequirements', $this->getCompletionRequirements());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('forms', $this->getForms());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeEnumValue('previewType', $this->getPreviewType());
        $writer->writeObjectValue('references', $this->getReferences());
    }

    /**
     * Sets the approvalAttachment property value. Detailed information about the approval that is attached to the task.
     * @param PlannerBaseApprovalAttachment|null $value Value to set for the approvalAttachment property.
    */
    public function setApprovalAttachment(?PlannerBaseApprovalAttachment $value): void {
        $this->getBackingStore()->set('approvalAttachment', $value);
    }

    /**
     * Sets the checklist property value. The collection of checklist items on the task.
     * @param PlannerChecklistItems|null $value Value to set for the checklist property.
    */
    public function setChecklist(?PlannerChecklistItems $value): void {
        $this->getBackingStore()->set('checklist', $value);
    }

    /**
     * Sets the completionRequirements property value. Contains detailed information about requirements on the task.
     * @param PlannerTaskCompletionRequirementDetails|null $value Value to set for the completionRequirements property.
    */
    public function setCompletionRequirements(?PlannerTaskCompletionRequirementDetails $value): void {
        $this->getBackingStore()->set('completionRequirements', $value);
    }

    /**
     * Sets the description property value. Description of the task.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the forms property value. Read-only. Represents a dictionary of data about the forms associated with a task. Each entry in the dictionary is a key-value pair, and the value is a plannerFormReference object.
     * @param PlannerFormsDictionary|null $value Value to set for the forms property.
    */
    public function setForms(?PlannerFormsDictionary $value): void {
        $this->getBackingStore()->set('forms', $value);
    }

    /**
     * Sets the notes property value. Rich text description of the task. To be used by HTML-aware clients. For backwards compatibility, a plain-text version of the HTML description will be synced to the 'description' field. If this field hasn't previously been set but 'description' has been, the existing description is synchronized to 'notes' with minimal whitespace-preserving HTML markup. Setting both 'description' and 'notes' is an error and will result in an exception.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the previewType property value. This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the references property value. The collection of references on the task.
     * @param PlannerExternalReferences|null $value Value to set for the references property.
    */
    public function setReferences(?PlannerExternalReferences $value): void {
        $this->getBackingStore()->set('references', $value);
    }

}
