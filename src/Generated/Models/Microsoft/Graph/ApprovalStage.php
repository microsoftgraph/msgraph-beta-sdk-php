<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalStage implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $approvalStageTimeOutInDays The number of days that a request can be pending a response before it is automatically denied. */
    private ?int $approvalStageTimeOutInDays = null;
    
    /** @var array<UserSet>|null $escalationApprovers If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. This can be a collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors.  When creating or updating a policy, if there are no escalation approvers, or escalation approvers are not required for the stage, the value of this property should be an empty collection. */
    private ?array $escalationApprovers = null;
    
    /** @var int|null $escalationTimeInMinutes If escalation is required, the time a request can be pending a response from a primary approver. */
    private ?int $escalationTimeInMinutes = null;
    
    /** @var bool|null $isApproverJustificationRequired Indicates whether the approver is required to provide a justification for approving a request. */
    private ?bool $isApproverJustificationRequired = null;
    
    /** @var bool|null $isEscalationEnabled If true, then one or more escalation approvers are configured in this approval stage. */
    private ?bool $isEscalationEnabled = null;
    
    /** @var array<UserSet>|null $primaryApprovers The users who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors. When creating or updating a policy, include at least one userSet in this collection. */
    private ?array $primaryApprovers = null;
    
    /**
     * Instantiates a new approvalStage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalStage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalStage {
        return new ApprovalStage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return int|null
    */
    public function getApprovalStageTimeOutInDays(): ?int {
        return $this->approvalStageTimeOutInDays;
    }

    /**
     * Gets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. This can be a collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors.  When creating or updating a policy, if there are no escalation approvers, or escalation approvers are not required for the stage, the value of this property should be an empty collection.
     * @return array<UserSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->escalationApprovers;
    }

    /**
     * Gets the escalationTimeInMinutes property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @return int|null
    */
    public function getEscalationTimeInMinutes(): ?int {
        return $this->escalationTimeInMinutes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'approvalStageTimeOutInDays' => function (self $o, ParseNode $n) { $o->setApprovalStageTimeOutInDays($n->getIntegerValue()); },
            'escalationApprovers' => function (self $o, ParseNode $n) { $o->setEscalationApprovers($n->getCollectionOfObjectValues(UserSet::class)); },
            'escalationTimeInMinutes' => function (self $o, ParseNode $n) { $o->setEscalationTimeInMinutes($n->getIntegerValue()); },
            'isApproverJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsApproverJustificationRequired($n->getBooleanValue()); },
            'isEscalationEnabled' => function (self $o, ParseNode $n) { $o->setIsEscalationEnabled($n->getBooleanValue()); },
            'primaryApprovers' => function (self $o, ParseNode $n) { $o->setPrimaryApprovers($n->getCollectionOfObjectValues(UserSet::class)); },
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->isApproverJustificationRequired;
    }

    /**
     * Gets the isEscalationEnabled property value. If true, then one or more escalation approvers are configured in this approval stage.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->isEscalationEnabled;
    }

    /**
     * Gets the primaryApprovers property value. The users who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors. When creating or updating a policy, include at least one userSet in this collection.
     * @return array<UserSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        return $this->primaryApprovers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('approvalStageTimeOutInDays', $this->approvalStageTimeOutInDays);
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->escalationApprovers);
        $writer->writeIntegerValue('escalationTimeInMinutes', $this->escalationTimeInMinutes);
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->isApproverJustificationRequired);
        $writer->writeBooleanValue('isEscalationEnabled', $this->isEscalationEnabled);
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->primaryApprovers);
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
     * Sets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     *  @param int|null $value Value to set for the approvalStageTimeOutInDays property.
    */
    public function setApprovalStageTimeOutInDays(?int $value ): void {
        $this->approvalStageTimeOutInDays = $value;
    }

    /**
     * Sets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. This can be a collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors.  When creating or updating a policy, if there are no escalation approvers, or escalation approvers are not required for the stage, the value of this property should be an empty collection.
     *  @param array<UserSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value ): void {
        $this->escalationApprovers = $value;
    }

    /**
     * Sets the escalationTimeInMinutes property value. If escalation is required, the time a request can be pending a response from a primary approver.
     *  @param int|null $value Value to set for the escalationTimeInMinutes property.
    */
    public function setEscalationTimeInMinutes(?int $value ): void {
        $this->escalationTimeInMinutes = $value;
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     *  @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value ): void {
        $this->isApproverJustificationRequired = $value;
    }

    /**
     * Sets the isEscalationEnabled property value. If true, then one or more escalation approvers are configured in this approval stage.
     *  @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value ): void {
        $this->isEscalationEnabled = $value;
    }

    /**
     * Sets the primaryApprovers property value. The users who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors. When creating or updating a policy, include at least one userSet in this collection.
     *  @param array<UserSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value ): void {
        $this->primaryApprovers = $value;
    }

}
