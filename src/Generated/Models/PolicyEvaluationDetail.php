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

class PolicyEvaluationDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PolicyEvaluationDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyEvaluationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyEvaluationDetail {
        return new PolicyEvaluationDetail();
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
     * Gets the applicabilityEvaluationError property value. The applicabilityEvaluationError property
     * @return string|null
    */
    public function getApplicabilityEvaluationError(): ?string {
        $val = $this->getBackingStore()->get('applicabilityEvaluationError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicabilityEvaluationError'");
    }

    /**
     * Gets the appliedPolicyEffects property value. The appliedPolicyEffects property
     * @return PolicyEffect|null
    */
    public function getAppliedPolicyEffects(): ?PolicyEffect {
        $val = $this->getBackingStore()->get('appliedPolicyEffects');
        if (is_null($val) || $val instanceof PolicyEffect) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedPolicyEffects'");
    }

    /**
     * Gets the assignedPolicyDisplayName property value. The assignedPolicyDisplayName property
     * @return string|null
    */
    public function getAssignedPolicyDisplayName(): ?string {
        $val = $this->getBackingStore()->get('assignedPolicyDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedPolicyDisplayName'");
    }

    /**
     * Gets the assignmentUniqueName property value. The assignmentUniqueName property
     * @return string|null
    */
    public function getAssignmentUniqueName(): ?string {
        $val = $this->getBackingStore()->get('assignmentUniqueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentUniqueName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the evaluationError property value. The evaluationError property
     * @return string|null
    */
    public function getEvaluationError(): ?string {
        $val = $this->getBackingStore()->get('evaluationError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationError'");
    }

    /**
     * Gets the fetchDetails property value. The fetchDetails property
     * @return array<FetchDetail>|null
    */
    public function getFetchDetails(): ?array {
        $val = $this->getBackingStore()->get('fetchDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FetchDetail::class);
            /** @var array<FetchDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fetchDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicabilityEvaluationError' => fn(ParseNode $n) => $o->setApplicabilityEvaluationError($n->getStringValue()),
            'appliedPolicyEffects' => fn(ParseNode $n) => $o->setAppliedPolicyEffects($n->getEnumValue(PolicyEffect::class)),
            'assignedPolicyDisplayName' => fn(ParseNode $n) => $o->setAssignedPolicyDisplayName($n->getStringValue()),
            'assignmentUniqueName' => fn(ParseNode $n) => $o->setAssignmentUniqueName($n->getStringValue()),
            'evaluationError' => fn(ParseNode $n) => $o->setEvaluationError($n->getStringValue()),
            'fetchDetails' => fn(ParseNode $n) => $o->setFetchDetails($n->getCollectionOfObjectValues([FetchDetail::class, 'createFromDiscriminatorValue'])),
            'isApplicable' => fn(ParseNode $n) => $o->setIsApplicable($n->getBooleanValue()),
            'isCompliant' => fn(ParseNode $n) => $o->setIsCompliant($n->getBooleanValue()),
            'isEnforced' => fn(ParseNode $n) => $o->setIsEnforced($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyLoadingError' => fn(ParseNode $n) => $o->setPolicyLoadingError($n->getStringValue()),
            'policyMessage' => fn(ParseNode $n) => $o->setPolicyMessage($n->getStringValue()),
            'policyVersion' => fn(ParseNode $n) => $o->setPolicyVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the isApplicable property value. The isApplicable property
     * @return bool|null
    */
    public function getIsApplicable(): ?bool {
        $val = $this->getBackingStore()->get('isApplicable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApplicable'");
    }

    /**
     * Gets the isCompliant property value. The isCompliant property
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        $val = $this->getBackingStore()->get('isCompliant');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompliant'");
    }

    /**
     * Gets the isEnforced property value. The isEnforced property
     * @return bool|null
    */
    public function getIsEnforced(): ?bool {
        $val = $this->getBackingStore()->get('isEnforced');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnforced'");
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
     * Gets the policyLoadingError property value. The policyLoadingError property
     * @return string|null
    */
    public function getPolicyLoadingError(): ?string {
        $val = $this->getBackingStore()->get('policyLoadingError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyLoadingError'");
    }

    /**
     * Gets the policyMessage property value. The policyMessage property
     * @return string|null
    */
    public function getPolicyMessage(): ?string {
        $val = $this->getBackingStore()->get('policyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyMessage'");
    }

    /**
     * Gets the policyVersion property value. The policyVersion property
     * @return string|null
    */
    public function getPolicyVersion(): ?string {
        $val = $this->getBackingStore()->get('policyVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicabilityEvaluationError', $this->getApplicabilityEvaluationError());
        $writer->writeEnumValue('appliedPolicyEffects', $this->getAppliedPolicyEffects());
        $writer->writeStringValue('assignedPolicyDisplayName', $this->getAssignedPolicyDisplayName());
        $writer->writeStringValue('assignmentUniqueName', $this->getAssignmentUniqueName());
        $writer->writeStringValue('evaluationError', $this->getEvaluationError());
        $writer->writeCollectionOfObjectValues('fetchDetails', $this->getFetchDetails());
        $writer->writeBooleanValue('isApplicable', $this->getIsApplicable());
        $writer->writeBooleanValue('isCompliant', $this->getIsCompliant());
        $writer->writeBooleanValue('isEnforced', $this->getIsEnforced());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyLoadingError', $this->getPolicyLoadingError());
        $writer->writeStringValue('policyMessage', $this->getPolicyMessage());
        $writer->writeStringValue('policyVersion', $this->getPolicyVersion());
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
     * Sets the applicabilityEvaluationError property value. The applicabilityEvaluationError property
     * @param string|null $value Value to set for the applicabilityEvaluationError property.
    */
    public function setApplicabilityEvaluationError(?string $value): void {
        $this->getBackingStore()->set('applicabilityEvaluationError', $value);
    }

    /**
     * Sets the appliedPolicyEffects property value. The appliedPolicyEffects property
     * @param PolicyEffect|null $value Value to set for the appliedPolicyEffects property.
    */
    public function setAppliedPolicyEffects(?PolicyEffect $value): void {
        $this->getBackingStore()->set('appliedPolicyEffects', $value);
    }

    /**
     * Sets the assignedPolicyDisplayName property value. The assignedPolicyDisplayName property
     * @param string|null $value Value to set for the assignedPolicyDisplayName property.
    */
    public function setAssignedPolicyDisplayName(?string $value): void {
        $this->getBackingStore()->set('assignedPolicyDisplayName', $value);
    }

    /**
     * Sets the assignmentUniqueName property value. The assignmentUniqueName property
     * @param string|null $value Value to set for the assignmentUniqueName property.
    */
    public function setAssignmentUniqueName(?string $value): void {
        $this->getBackingStore()->set('assignmentUniqueName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the evaluationError property value. The evaluationError property
     * @param string|null $value Value to set for the evaluationError property.
    */
    public function setEvaluationError(?string $value): void {
        $this->getBackingStore()->set('evaluationError', $value);
    }

    /**
     * Sets the fetchDetails property value. The fetchDetails property
     * @param array<FetchDetail>|null $value Value to set for the fetchDetails property.
    */
    public function setFetchDetails(?array $value): void {
        $this->getBackingStore()->set('fetchDetails', $value);
    }

    /**
     * Sets the isApplicable property value. The isApplicable property
     * @param bool|null $value Value to set for the isApplicable property.
    */
    public function setIsApplicable(?bool $value): void {
        $this->getBackingStore()->set('isApplicable', $value);
    }

    /**
     * Sets the isCompliant property value. The isCompliant property
     * @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value): void {
        $this->getBackingStore()->set('isCompliant', $value);
    }

    /**
     * Sets the isEnforced property value. The isEnforced property
     * @param bool|null $value Value to set for the isEnforced property.
    */
    public function setIsEnforced(?bool $value): void {
        $this->getBackingStore()->set('isEnforced', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyLoadingError property value. The policyLoadingError property
     * @param string|null $value Value to set for the policyLoadingError property.
    */
    public function setPolicyLoadingError(?string $value): void {
        $this->getBackingStore()->set('policyLoadingError', $value);
    }

    /**
     * Sets the policyMessage property value. The policyMessage property
     * @param string|null $value Value to set for the policyMessage property.
    */
    public function setPolicyMessage(?string $value): void {
        $this->getBackingStore()->set('policyMessage', $value);
    }

    /**
     * Sets the policyVersion property value. The policyVersion property
     * @param string|null $value Value to set for the policyVersion property.
    */
    public function setPolicyVersion(?string $value): void {
        $this->getBackingStore()->set('policyVersion', $value);
    }

}
