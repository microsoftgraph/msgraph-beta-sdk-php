<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentRequestRequirements implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccessPackageAssignmentRequestRequirements and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestRequirements
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestRequirements {
        return new AccessPackageAssignmentRequestRequirements();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the existingAnswers property value. Answers that have already been provided.
     * @return array<AccessPackageAnswer>|null
    */
    public function getExistingAnswers(): ?array {
        $val = $this->getBackingStore()->get('existingAnswers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAnswer::class);
            /** @var array<AccessPackageAnswer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'existingAnswers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'existingAnswers' => fn(ParseNode $n) => $o->setExistingAnswers($n->getCollectionOfObjectValues([AccessPackageAnswer::class, 'createFromDiscriminatorValue'])),
            'isApprovalRequired' => fn(ParseNode $n) => $o->setIsApprovalRequired($n->getBooleanValue()),
            'isApprovalRequiredForExtension' => fn(ParseNode $n) => $o->setIsApprovalRequiredForExtension($n->getBooleanValue()),
            'isCustomAssignmentScheduleAllowed' => fn(ParseNode $n) => $o->setIsCustomAssignmentScheduleAllowed($n->getBooleanValue()),
            'isRequestorJustificationRequired' => fn(ParseNode $n) => $o->setIsRequestorJustificationRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyDescription' => fn(ParseNode $n) => $o->setPolicyDescription($n->getStringValue()),
            'policyDisplayName' => fn(ParseNode $n) => $o->setPolicyDisplayName($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'verifiableCredentialRequirementStatus' => fn(ParseNode $n) => $o->setVerifiableCredentialRequirementStatus($n->getObjectValue([VerifiableCredentialRequirementStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApprovalRequired property value. Indicates whether a request must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequired'");
    }

    /**
     * Gets the isApprovalRequiredForExtension property value. Indicates whether approval is required when a user tries to extend their access.
     * @return bool|null
    */
    public function getIsApprovalRequiredForExtension(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequiredForExtension');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequiredForExtension'");
    }

    /**
     * Gets the isCustomAssignmentScheduleAllowed property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @return bool|null
    */
    public function getIsCustomAssignmentScheduleAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isCustomAssignmentScheduleAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCustomAssignmentScheduleAllowed'");
    }

    /**
     * Gets the isRequestorJustificationRequired property value. Indicates whether a requestor must supply justification when submitting an assignment request.
     * @return bool|null
    */
    public function getIsRequestorJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequestorJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequestorJustificationRequired'");
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
     * Gets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDescription(): ?string {
        $val = $this->getBackingStore()->get('policyDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDescription'");
    }

    /**
     * Gets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDisplayName(): ?string {
        $val = $this->getBackingStore()->get('policyDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDisplayName'");
    }

    /**
     * Gets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the questions property value. Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        $val = $this->getBackingStore()->get('questions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageQuestion::class);
            /** @var array<AccessPackageQuestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questions'");
    }

    /**
     * Gets the schedule property value. Schedule restrictions enforced, if any.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the verifiableCredentialRequirementStatus property value. The status of the process to process the verifiable credential, if any.
     * @return VerifiableCredentialRequirementStatus|null
    */
    public function getVerifiableCredentialRequirementStatus(): ?VerifiableCredentialRequirementStatus {
        $val = $this->getBackingStore()->get('verifiableCredentialRequirementStatus');
        if (is_null($val) || $val instanceof VerifiableCredentialRequirementStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiableCredentialRequirementStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('existingAnswers', $this->getExistingAnswers());
        $writer->writeBooleanValue('isApprovalRequired', $this->getIsApprovalRequired());
        $writer->writeBooleanValue('isApprovalRequiredForExtension', $this->getIsApprovalRequiredForExtension());
        $writer->writeBooleanValue('isCustomAssignmentScheduleAllowed', $this->getIsCustomAssignmentScheduleAllowed());
        $writer->writeBooleanValue('isRequestorJustificationRequired', $this->getIsRequestorJustificationRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyDescription', $this->getPolicyDescription());
        $writer->writeStringValue('policyDisplayName', $this->getPolicyDisplayName());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('verifiableCredentialRequirementStatus', $this->getVerifiableCredentialRequirementStatus());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the existingAnswers property value. Answers that have already been provided.
     * @param array<AccessPackageAnswer>|null $value Value to set for the existingAnswers property.
    */
    public function setExistingAnswers(?array $value): void {
        $this->getBackingStore()->set('existingAnswers', $value);
    }

    /**
     * Sets the isApprovalRequired property value. Indicates whether a request must be approved by an approver.
     * @param bool|null $value Value to set for the isApprovalRequired property.
    */
    public function setIsApprovalRequired(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequired', $value);
    }

    /**
     * Sets the isApprovalRequiredForExtension property value. Indicates whether approval is required when a user tries to extend their access.
     * @param bool|null $value Value to set for the isApprovalRequiredForExtension property.
    */
    public function setIsApprovalRequiredForExtension(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForExtension', $value);
    }

    /**
     * Sets the isCustomAssignmentScheduleAllowed property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @param bool|null $value Value to set for the isCustomAssignmentScheduleAllowed property.
    */
    public function setIsCustomAssignmentScheduleAllowed(?bool $value): void {
        $this->getBackingStore()->set('isCustomAssignmentScheduleAllowed', $value);
    }

    /**
     * Sets the isRequestorJustificationRequired property value. Indicates whether a requestor must supply justification when submitting an assignment request.
     * @param bool|null $value Value to set for the isRequestorJustificationRequired property.
    */
    public function setIsRequestorJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequestorJustificationRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @param string|null $value Value to set for the policyDescription property.
    */
    public function setPolicyDescription(?string $value): void {
        $this->getBackingStore()->set('policyDescription', $value);
    }

    /**
     * Sets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @param string|null $value Value to set for the policyDisplayName property.
    */
    public function setPolicyDisplayName(?string $value): void {
        $this->getBackingStore()->set('policyDisplayName', $value);
    }

    /**
     * Sets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the questions property value. Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
     * @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the schedule property value. Schedule restrictions enforced, if any.
     * @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the verifiableCredentialRequirementStatus property value. The status of the process to process the verifiable credential, if any.
     * @param VerifiableCredentialRequirementStatus|null $value Value to set for the verifiableCredentialRequirementStatus property.
    */
    public function setVerifiableCredentialRequirementStatus(?VerifiableCredentialRequirementStatus $value): void {
        $this->getBackingStore()->set('verifiableCredentialRequirementStatus', $value);
    }

}
