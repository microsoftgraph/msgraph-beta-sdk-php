<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InformationProtection extends Entity implements Parsable 
{
    /**
     * Instantiates a new InformationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtection {
        return new InformationProtection();
    }

    /**
     * Gets the bitlocker property value. The bitlocker property
     * @return Bitlocker|null
    */
    public function getBitlocker(): ?Bitlocker {
        $val = $this->getBackingStore()->get('bitlocker');
        if (is_null($val) || $val instanceof Bitlocker) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitlocker'");
    }

    /**
     * Gets the dataLossPreventionPolicies property value. The dataLossPreventionPolicies property
     * @return array<DataLossPreventionPolicy>|null
    */
    public function getDataLossPreventionPolicies(): ?array {
        $val = $this->getBackingStore()->get('dataLossPreventionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataLossPreventionPolicy::class);
            /** @var array<DataLossPreventionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataLossPreventionPolicies'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bitlocker' => fn(ParseNode $n) => $o->setBitlocker($n->getObjectValue([Bitlocker::class, 'createFromDiscriminatorValue'])),
            'dataLossPreventionPolicies' => fn(ParseNode $n) => $o->setDataLossPreventionPolicies($n->getCollectionOfObjectValues([DataLossPreventionPolicy::class, 'createFromDiscriminatorValue'])),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([InformationProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'sensitivityPolicySettings' => fn(ParseNode $n) => $o->setSensitivityPolicySettings($n->getObjectValue([SensitivityPolicySettings::class, 'createFromDiscriminatorValue'])),
            'threatAssessmentRequests' => fn(ParseNode $n) => $o->setThreatAssessmentRequests($n->getCollectionOfObjectValues([ThreatAssessmentRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policy property value. The policy property
     * @return InformationProtectionPolicy|null
    */
    public function getPolicy(): ?InformationProtectionPolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof InformationProtectionPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitivityLabel::class);
            /** @var array<SensitivityLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabels'");
    }

    /**
     * Gets the sensitivityPolicySettings property value. The sensitivityPolicySettings property
     * @return SensitivityPolicySettings|null
    */
    public function getSensitivityPolicySettings(): ?SensitivityPolicySettings {
        $val = $this->getBackingStore()->get('sensitivityPolicySettings');
        if (is_null($val) || $val instanceof SensitivityPolicySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityPolicySettings'");
    }

    /**
     * Gets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @return array<ThreatAssessmentRequest>|null
    */
    public function getThreatAssessmentRequests(): ?array {
        $val = $this->getBackingStore()->get('threatAssessmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatAssessmentRequest::class);
            /** @var array<ThreatAssessmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatAssessmentRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bitlocker', $this->getBitlocker());
        $writer->writeCollectionOfObjectValues('dataLossPreventionPolicies', $this->getDataLossPreventionPolicies());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->getSensitivityLabels());
        $writer->writeObjectValue('sensitivityPolicySettings', $this->getSensitivityPolicySettings());
        $writer->writeCollectionOfObjectValues('threatAssessmentRequests', $this->getThreatAssessmentRequests());
    }

    /**
     * Sets the bitlocker property value. The bitlocker property
     * @param Bitlocker|null $value Value to set for the bitlocker property.
    */
    public function setBitlocker(?Bitlocker $value): void {
        $this->getBackingStore()->set('bitlocker', $value);
    }

    /**
     * Sets the dataLossPreventionPolicies property value. The dataLossPreventionPolicies property
     * @param array<DataLossPreventionPolicy>|null $value Value to set for the dataLossPreventionPolicies property.
    */
    public function setDataLossPreventionPolicies(?array $value): void {
        $this->getBackingStore()->set('dataLossPreventionPolicies', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param InformationProtectionPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?InformationProtectionPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     * @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabels', $value);
    }

    /**
     * Sets the sensitivityPolicySettings property value. The sensitivityPolicySettings property
     * @param SensitivityPolicySettings|null $value Value to set for the sensitivityPolicySettings property.
    */
    public function setSensitivityPolicySettings(?SensitivityPolicySettings $value): void {
        $this->getBackingStore()->set('sensitivityPolicySettings', $value);
    }

    /**
     * Sets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @param array<ThreatAssessmentRequest>|null $value Value to set for the threatAssessmentRequests property.
    */
    public function setThreatAssessmentRequests(?array $value): void {
        $this->getBackingStore()->set('threatAssessmentRequests', $value);
    }

}
