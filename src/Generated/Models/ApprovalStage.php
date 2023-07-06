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

class ApprovalStage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new approvalStage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalStage {
        return new ApprovalStage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return int|null
    */
    public function getApprovalStageTimeOutInDays(): ?int {
        $val = $this->getBackingStore()->get('approvalStageTimeOutInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalStageTimeOutInDays'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. This can be a collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors.  When creating or updating a policy, if there are no escalation approvers, or escalation approvers are not required for the stage, the value of this property should be an empty collection.
     * @return array<UserSet>|null
    */
    public function getEscalationApprovers(): ?array {
        $val = $this->getBackingStore()->get('escalationApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSet::class);
            /** @var array<UserSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escalationApprovers'");
    }

    /**
     * Gets the escalationTimeInMinutes property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @return int|null
    */
    public function getEscalationTimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('escalationTimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escalationTimeInMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalStageTimeOutInDays' => fn(ParseNode $n) => $o->setApprovalStageTimeOutInDays($n->getIntegerValue()),
            'escalationApprovers' => fn(ParseNode $n) => $o->setEscalationApprovers($n->getCollectionOfObjectValues([UserSet::class, 'createFromDiscriminatorValue'])),
            'escalationTimeInMinutes' => fn(ParseNode $n) => $o->setEscalationTimeInMinutes($n->getIntegerValue()),
            'isApproverJustificationRequired' => fn(ParseNode $n) => $o->setIsApproverJustificationRequired($n->getBooleanValue()),
            'isEscalationEnabled' => fn(ParseNode $n) => $o->setIsEscalationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryApprovers' => fn(ParseNode $n) => $o->setPrimaryApprovers($n->getCollectionOfObjectValues([UserSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApproverJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApproverJustificationRequired'");
    }

    /**
     * Gets the isEscalationEnabled property value. If true, then one or more escalation approvers are configured in this approval stage.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEscalationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEscalationEnabled'");
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
     * Gets the primaryApprovers property value. The users who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors. When creating or updating a policy, include at least one userSet in this collection.
     * @return array<UserSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        $val = $this->getBackingStore()->get('primaryApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSet::class);
            /** @var array<UserSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryApprovers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('approvalStageTimeOutInDays', $this->getApprovalStageTimeOutInDays());
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->getEscalationApprovers());
        $writer->writeIntegerValue('escalationTimeInMinutes', $this->getEscalationTimeInMinutes());
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->getIsApproverJustificationRequired());
        $writer->writeBooleanValue('isEscalationEnabled', $this->getIsEscalationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->getPrimaryApprovers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the approvalStageTimeOutInDays property value. The number of days that a request can be pending a response before it is automatically denied.
     * @param int|null $value Value to set for the approvalStageTimeOutInDays property.
    */
    public function setApprovalStageTimeOutInDays(?int $value): void {
        $this->getBackingStore()->set('approvalStageTimeOutInDays', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. This can be a collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors.  When creating or updating a policy, if there are no escalation approvers, or escalation approvers are not required for the stage, the value of this property should be an empty collection.
     * @param array<UserSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('escalationApprovers', $value);
    }

    /**
     * Sets the escalationTimeInMinutes property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @param int|null $value Value to set for the escalationTimeInMinutes property.
    */
    public function setEscalationTimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('escalationTimeInMinutes', $value);
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isApproverJustificationRequired', $value);
    }

    /**
     * Sets the isEscalationEnabled property value. If true, then one or more escalation approvers are configured in this approval stage.
     * @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEscalationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryApprovers property value. The users who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors and externalSponsors. When creating or updating a policy, include at least one userSet in this collection.
     * @param array<UserSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('primaryApprovers', $value);
    }

}
