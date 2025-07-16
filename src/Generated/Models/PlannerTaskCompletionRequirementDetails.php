<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTaskCompletionRequirementDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlannerTaskCompletionRequirementDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskCompletionRequirementDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskCompletionRequirementDetails {
        return new PlannerTaskCompletionRequirementDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the approvalRequirement property value. Information about the requirements of an approval.
     * @return PlannerApprovalRequirement|null
    */
    public function getApprovalRequirement(): ?PlannerApprovalRequirement {
        $val = $this->getBackingStore()->get('approvalRequirement');
        if (is_null($val) || $val instanceof PlannerApprovalRequirement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalRequirement'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the checklistRequirement property value. Information about the requirements for completing the checklist.
     * @return PlannerChecklistRequirement|null
    */
    public function getChecklistRequirement(): ?PlannerChecklistRequirement {
        $val = $this->getBackingStore()->get('checklistRequirement');
        if (is_null($val) || $val instanceof PlannerChecklistRequirement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklistRequirement'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalRequirement' => fn(ParseNode $n) => $o->setApprovalRequirement($n->getObjectValue([PlannerApprovalRequirement::class, 'createFromDiscriminatorValue'])),
            'checklistRequirement' => fn(ParseNode $n) => $o->setChecklistRequirement($n->getObjectValue([PlannerChecklistRequirement::class, 'createFromDiscriminatorValue'])),
            'formsRequirement' => fn(ParseNode $n) => $o->setFormsRequirement($n->getObjectValue([PlannerFormsRequirement::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the formsRequirement property value. Information about the requirements for completing the forms.
     * @return PlannerFormsRequirement|null
    */
    public function getFormsRequirement(): ?PlannerFormsRequirement {
        $val = $this->getBackingStore()->get('formsRequirement');
        if (is_null($val) || $val instanceof PlannerFormsRequirement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formsRequirement'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('approvalRequirement', $this->getApprovalRequirement());
        $writer->writeObjectValue('checklistRequirement', $this->getChecklistRequirement());
        $writer->writeObjectValue('formsRequirement', $this->getFormsRequirement());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the approvalRequirement property value. Information about the requirements of an approval.
     * @param PlannerApprovalRequirement|null $value Value to set for the approvalRequirement property.
    */
    public function setApprovalRequirement(?PlannerApprovalRequirement $value): void {
        $this->getBackingStore()->set('approvalRequirement', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the checklistRequirement property value. Information about the requirements for completing the checklist.
     * @param PlannerChecklistRequirement|null $value Value to set for the checklistRequirement property.
    */
    public function setChecklistRequirement(?PlannerChecklistRequirement $value): void {
        $this->getBackingStore()->set('checklistRequirement', $value);
    }

    /**
     * Sets the formsRequirement property value. Information about the requirements for completing the forms.
     * @param PlannerFormsRequirement|null $value Value to set for the formsRequirement property.
    */
    public function setFormsRequirement(?PlannerFormsRequirement $value): void {
        $this->getBackingStore()->set('formsRequirement', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
