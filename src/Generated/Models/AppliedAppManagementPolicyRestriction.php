<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppliedAppManagementPolicyRestriction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppliedAppManagementPolicyRestriction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedAppManagementPolicyRestriction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedAppManagementPolicyRestriction {
        return new AppliedAppManagementPolicyRestriction();
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
     * Gets the attemptedChanges property value. The attemptedChanges property
     * @return Dictionary|null
    */
    public function getAttemptedChanges(): ?Dictionary {
        $val = $this->getBackingStore()->get('attemptedChanges');
        if (is_null($val) || $val instanceof Dictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attemptedChanges'");
    }

    /**
     * Gets the auditResult property value. The auditResult property
     * @return AppManagementAuditLogAuditResult|null
    */
    public function getAuditResult(): ?AppManagementAuditLogAuditResult {
        $val = $this->getBackingStore()->get('auditResult');
        if (is_null($val) || $val instanceof AppManagementAuditLogAuditResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditResult'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attemptedChanges' => fn(ParseNode $n) => $o->setAttemptedChanges($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'auditResult' => fn(ParseNode $n) => $o->setAuditResult($n->getEnumValue(AppManagementAuditLogAuditResult::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(AppManagementAuditLogPolicyType::class)),
            'restrictionDetails' => fn(ParseNode $n) => $o->setRestrictionDetails($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'restrictionResult' => fn(ParseNode $n) => $o->setRestrictionResult($n->getEnumValue(AppManagementAuditLogRestrictionResult::class)),
            'restrictionState' => fn(ParseNode $n) => $o->setRestrictionState($n->getEnumValue(AppManagementAuditLogRestrictionState::class)),
            'restrictionType' => fn(ParseNode $n) => $o->setRestrictionType($n->getStringValue()),
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
     * Gets the policyId property value. The policyId property
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
     * Gets the policyType property value. The policyType property
     * @return AppManagementAuditLogPolicyType|null
    */
    public function getPolicyType(): ?AppManagementAuditLogPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof AppManagementAuditLogPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the restrictionDetails property value. The restrictionDetails property
     * @return Dictionary|null
    */
    public function getRestrictionDetails(): ?Dictionary {
        $val = $this->getBackingStore()->get('restrictionDetails');
        if (is_null($val) || $val instanceof Dictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionDetails'");
    }

    /**
     * Gets the restrictionResult property value. The restrictionResult property
     * @return AppManagementAuditLogRestrictionResult|null
    */
    public function getRestrictionResult(): ?AppManagementAuditLogRestrictionResult {
        $val = $this->getBackingStore()->get('restrictionResult');
        if (is_null($val) || $val instanceof AppManagementAuditLogRestrictionResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionResult'");
    }

    /**
     * Gets the restrictionState property value. The restrictionState property
     * @return AppManagementAuditLogRestrictionState|null
    */
    public function getRestrictionState(): ?AppManagementAuditLogRestrictionState {
        $val = $this->getBackingStore()->get('restrictionState');
        if (is_null($val) || $val instanceof AppManagementAuditLogRestrictionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionState'");
    }

    /**
     * Gets the restrictionType property value. The restrictionType property
     * @return string|null
    */
    public function getRestrictionType(): ?string {
        $val = $this->getBackingStore()->get('restrictionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attemptedChanges', $this->getAttemptedChanges());
        $writer->writeEnumValue('auditResult', $this->getAuditResult());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
        $writer->writeObjectValue('restrictionDetails', $this->getRestrictionDetails());
        $writer->writeEnumValue('restrictionResult', $this->getRestrictionResult());
        $writer->writeEnumValue('restrictionState', $this->getRestrictionState());
        $writer->writeStringValue('restrictionType', $this->getRestrictionType());
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
     * Sets the attemptedChanges property value. The attemptedChanges property
     * @param Dictionary|null $value Value to set for the attemptedChanges property.
    */
    public function setAttemptedChanges(?Dictionary $value): void {
        $this->getBackingStore()->set('attemptedChanges', $value);
    }

    /**
     * Sets the auditResult property value. The auditResult property
     * @param AppManagementAuditLogAuditResult|null $value Value to set for the auditResult property.
    */
    public function setAuditResult(?AppManagementAuditLogAuditResult $value): void {
        $this->getBackingStore()->set('auditResult', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyType property value. The policyType property
     * @param AppManagementAuditLogPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?AppManagementAuditLogPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the restrictionDetails property value. The restrictionDetails property
     * @param Dictionary|null $value Value to set for the restrictionDetails property.
    */
    public function setRestrictionDetails(?Dictionary $value): void {
        $this->getBackingStore()->set('restrictionDetails', $value);
    }

    /**
     * Sets the restrictionResult property value. The restrictionResult property
     * @param AppManagementAuditLogRestrictionResult|null $value Value to set for the restrictionResult property.
    */
    public function setRestrictionResult(?AppManagementAuditLogRestrictionResult $value): void {
        $this->getBackingStore()->set('restrictionResult', $value);
    }

    /**
     * Sets the restrictionState property value. The restrictionState property
     * @param AppManagementAuditLogRestrictionState|null $value Value to set for the restrictionState property.
    */
    public function setRestrictionState(?AppManagementAuditLogRestrictionState $value): void {
        $this->getBackingStore()->set('restrictionState', $value);
    }

    /**
     * Sets the restrictionType property value. The restrictionType property
     * @param string|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?string $value): void {
        $this->getBackingStore()->set('restrictionType', $value);
    }

}
