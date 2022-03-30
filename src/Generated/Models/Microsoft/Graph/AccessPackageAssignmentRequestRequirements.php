<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestRequirements implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AccessPackageAnswer>|null $existingAnswers Answers that have already been provided. */
    private ?array $existingAnswers = null;
    
    /** @var bool|null $isApprovalRequired Indicates whether a request must be approved by an approver. */
    private ?bool $isApprovalRequired = null;
    
    /** @var bool|null $isApprovalRequiredForExtension Indicates whether approval is required when a user tries to extend their access. */
    private ?bool $isApprovalRequiredForExtension = null;
    
    /** @var bool|null $isCustomAssignmentScheduleAllowed Indicates whether the requestor is allowed to set a custom schedule. */
    private ?bool $isCustomAssignmentScheduleAllowed = null;
    
    /** @var bool|null $isRequestorJustificationRequired Indicates whether a requestor must supply justification when submitting an assignment request. */
    private ?bool $isRequestorJustificationRequired = null;
    
    /** @var string|null $policyDescription The description of the policy that the user is trying to request access using. */
    private ?string $policyDescription = null;
    
    /** @var string|null $policyDisplayName The display name of the policy that the user is trying to request access using. */
    private ?string $policyDisplayName = null;
    
    /** @var string|null $policyId The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request. */
    private ?string $policyId = null;
    
    /** @var array<AccessPackageQuestion>|null $questions Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion. */
    private ?array $questions = null;
    
    /** @var RequestSchedule|null $schedule Schedule restrictions enforced, if any. */
    private ?RequestSchedule $schedule = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestRequirements and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestRequirements
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestRequirements {
        return new AccessPackageAssignmentRequestRequirements();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the existingAnswers property value. Answers that have already been provided.
     * @return array<AccessPackageAnswer>|null
    */
    public function getExistingAnswers(): ?array {
        return $this->existingAnswers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'existingAnswers' => function (self $o, ParseNode $n) { $o->setExistingAnswers($n->getCollectionOfObjectValues(AccessPackageAnswer::class)); },
            'isApprovalRequired' => function (self $o, ParseNode $n) { $o->setIsApprovalRequired($n->getBooleanValue()); },
            'isApprovalRequiredForExtension' => function (self $o, ParseNode $n) { $o->setIsApprovalRequiredForExtension($n->getBooleanValue()); },
            'isCustomAssignmentScheduleAllowed' => function (self $o, ParseNode $n) { $o->setIsCustomAssignmentScheduleAllowed($n->getBooleanValue()); },
            'isRequestorJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsRequestorJustificationRequired($n->getBooleanValue()); },
            'policyDescription' => function (self $o, ParseNode $n) { $o->setPolicyDescription($n->getStringValue()); },
            'policyDisplayName' => function (self $o, ParseNode $n) { $o->setPolicyDisplayName($n->getStringValue()); },
            'policyId' => function (self $o, ParseNode $n) { $o->setPolicyId($n->getStringValue()); },
            'questions' => function (self $o, ParseNode $n) { $o->setQuestions($n->getCollectionOfObjectValues(AccessPackageQuestion::class)); },
            'schedule' => function (self $o, ParseNode $n) { $o->setSchedule($n->getObjectValue(RequestSchedule::class)); },
        ];
    }

    /**
     * Gets the isApprovalRequired property value. Indicates whether a request must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequired(): ?bool {
        return $this->isApprovalRequired;
    }

    /**
     * Gets the isApprovalRequiredForExtension property value. Indicates whether approval is required when a user tries to extend their access.
     * @return bool|null
    */
    public function getIsApprovalRequiredForExtension(): ?bool {
        return $this->isApprovalRequiredForExtension;
    }

    /**
     * Gets the isCustomAssignmentScheduleAllowed property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @return bool|null
    */
    public function getIsCustomAssignmentScheduleAllowed(): ?bool {
        return $this->isCustomAssignmentScheduleAllowed;
    }

    /**
     * Gets the isRequestorJustificationRequired property value. Indicates whether a requestor must supply justification when submitting an assignment request.
     * @return bool|null
    */
    public function getIsRequestorJustificationRequired(): ?bool {
        return $this->isRequestorJustificationRequired;
    }

    /**
     * Gets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDescription(): ?string {
        return $this->policyDescription;
    }

    /**
     * Gets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDisplayName(): ?string {
        return $this->policyDisplayName;
    }

    /**
     * Gets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the questions property value. Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        return $this->questions;
    }

    /**
     * Gets the schedule property value. Schedule restrictions enforced, if any.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        return $this->schedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('existingAnswers', $this->existingAnswers);
        $writer->writeBooleanValue('isApprovalRequired', $this->isApprovalRequired);
        $writer->writeBooleanValue('isApprovalRequiredForExtension', $this->isApprovalRequiredForExtension);
        $writer->writeBooleanValue('isCustomAssignmentScheduleAllowed', $this->isCustomAssignmentScheduleAllowed);
        $writer->writeBooleanValue('isRequestorJustificationRequired', $this->isRequestorJustificationRequired);
        $writer->writeStringValue('policyDescription', $this->policyDescription);
        $writer->writeStringValue('policyDisplayName', $this->policyDisplayName);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeCollectionOfObjectValues('questions', $this->questions);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the existingAnswers property value. Answers that have already been provided.
     *  @param array<AccessPackageAnswer>|null $value Value to set for the existingAnswers property.
    */
    public function setExistingAnswers(?array $value ): void {
        $this->existingAnswers = $value;
    }

    /**
     * Sets the isApprovalRequired property value. Indicates whether a request must be approved by an approver.
     *  @param bool|null $value Value to set for the isApprovalRequired property.
    */
    public function setIsApprovalRequired(?bool $value ): void {
        $this->isApprovalRequired = $value;
    }

    /**
     * Sets the isApprovalRequiredForExtension property value. Indicates whether approval is required when a user tries to extend their access.
     *  @param bool|null $value Value to set for the isApprovalRequiredForExtension property.
    */
    public function setIsApprovalRequiredForExtension(?bool $value ): void {
        $this->isApprovalRequiredForExtension = $value;
    }

    /**
     * Sets the isCustomAssignmentScheduleAllowed property value. Indicates whether the requestor is allowed to set a custom schedule.
     *  @param bool|null $value Value to set for the isCustomAssignmentScheduleAllowed property.
    */
    public function setIsCustomAssignmentScheduleAllowed(?bool $value ): void {
        $this->isCustomAssignmentScheduleAllowed = $value;
    }

    /**
     * Sets the isRequestorJustificationRequired property value. Indicates whether a requestor must supply justification when submitting an assignment request.
     *  @param bool|null $value Value to set for the isRequestorJustificationRequired property.
    */
    public function setIsRequestorJustificationRequired(?bool $value ): void {
        $this->isRequestorJustificationRequired = $value;
    }

    /**
     * Sets the policyDescription property value. The description of the policy that the user is trying to request access using.
     *  @param string|null $value Value to set for the policyDescription property.
    */
    public function setPolicyDescription(?string $value ): void {
        $this->policyDescription = $value;
    }

    /**
     * Sets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     *  @param string|null $value Value to set for the policyDisplayName property.
    */
    public function setPolicyDisplayName(?string $value ): void {
        $this->policyDisplayName = $value;
    }

    /**
     * Sets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the questions property value. Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
     *  @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value ): void {
        $this->questions = $value;
    }

    /**
     * Sets the schedule property value. Schedule restrictions enforced, if any.
     *  @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value ): void {
        $this->schedule = $value;
    }

}
