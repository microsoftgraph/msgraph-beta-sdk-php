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

class PoliciesEvaluationDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PoliciesEvaluationDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PoliciesEvaluationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PoliciesEvaluationDetail {
        return new PoliciesEvaluationDetail();
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
     * Gets the appliedPolicyEffects property value. The appliedPolicyEffects property
     * @return PolicyEffects|null
    */
    public function getAppliedPolicyEffects(): ?PolicyEffects {
        $val = $this->getBackingStore()->get('appliedPolicyEffects');
        if (is_null($val) || $val instanceof PolicyEffects) {
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
     * Gets the enforcementMode property value. The enforcementMode property
     * @return EnforcementMode|null
    */
    public function getEnforcementMode(): ?EnforcementMode {
        $val = $this->getBackingStore()->get('enforcementMode');
        if (is_null($val) || $val instanceof EnforcementMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementMode'");
    }

    /**
     * Gets the errorDetails property value. The errorDetails property
     * @return PolicyEvaluationErrorDetail|null
    */
    public function getErrorDetails(): ?PolicyEvaluationErrorDetail {
        $val = $this->getBackingStore()->get('errorDetails');
        if (is_null($val) || $val instanceof PolicyEvaluationErrorDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliedPolicyEffects' => fn(ParseNode $n) => $o->setAppliedPolicyEffects($n->getEnumValue(PolicyEffects::class)),
            'assignedPolicyDisplayName' => fn(ParseNode $n) => $o->setAssignedPolicyDisplayName($n->getStringValue()),
            'assignmentUniqueName' => fn(ParseNode $n) => $o->setAssignmentUniqueName($n->getStringValue()),
            'enforcementMode' => fn(ParseNode $n) => $o->setEnforcementMode($n->getEnumValue(EnforcementMode::class)),
            'errorDetails' => fn(ParseNode $n) => $o->setErrorDetails($n->getObjectValue([PolicyEvaluationErrorDetail::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reasons' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReasons($val);
            },
        ];
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
     * Gets the reasons property value. The reasons property
     * @return array<string>|null
    */
    public function getReasons(): ?array {
        $val = $this->getBackingStore()->get('reasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reasons'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliedPolicyEffects', $this->getAppliedPolicyEffects());
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
     * Sets the appliedPolicyEffects property value. The appliedPolicyEffects property
     * @param PolicyEffects|null $value Value to set for the appliedPolicyEffects property.
    */
    public function setAppliedPolicyEffects(?PolicyEffects $value): void {
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
     * Sets the enforcementMode property value. The enforcementMode property
     * @param EnforcementMode|null $value Value to set for the enforcementMode property.
    */
    public function setEnforcementMode(?EnforcementMode $value): void {
        $this->getBackingStore()->set('enforcementMode', $value);
    }

    /**
     * Sets the errorDetails property value. The errorDetails property
     * @param PolicyEvaluationErrorDetail|null $value Value to set for the errorDetails property.
    */
    public function setErrorDetails(?PolicyEvaluationErrorDetail $value): void {
        $this->getBackingStore()->set('errorDetails', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reasons property value. The reasons property
     * @param array<string>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value): void {
        $this->getBackingStore()->set('reasons', $value);
    }

}
