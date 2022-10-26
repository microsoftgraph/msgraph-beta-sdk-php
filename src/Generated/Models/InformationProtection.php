<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtection extends Entity implements Parsable 
{
    /**
     * @var Bitlocker|null $bitlocker The bitlocker property
    */
    private ?Bitlocker $bitlocker = null;
    
    /**
     * @var array<DataLossPreventionPolicy>|null $dataLossPreventionPolicies The dataLossPreventionPolicies property
    */
    private ?array $dataLossPreventionPolicies = null;
    
    /**
     * @var InformationProtectionPolicy|null $policy The policy property
    */
    private ?InformationProtectionPolicy $policy = null;
    
    /**
     * @var array<SensitivityLabel>|null $sensitivityLabels The sensitivityLabels property
    */
    private ?array $sensitivityLabels = null;
    
    /**
     * @var SensitivityPolicySettings|null $sensitivityPolicySettings The sensitivityPolicySettings property
    */
    private ?SensitivityPolicySettings $sensitivityPolicySettings = null;
    
    /**
     * @var array<ThreatAssessmentRequest>|null $threatAssessmentRequests The threatAssessmentRequests property
    */
    private ?array $threatAssessmentRequests = null;
    
    /**
     * Instantiates a new informationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.informationProtection');
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
        return $this->bitlocker;
    }

    /**
     * Gets the dataLossPreventionPolicies property value. The dataLossPreventionPolicies property
     * @return array<DataLossPreventionPolicy>|null
    */
    public function getDataLossPreventionPolicies(): ?array {
        return $this->dataLossPreventionPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->policy;
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        return $this->sensitivityLabels;
    }

    /**
     * Gets the sensitivityPolicySettings property value. The sensitivityPolicySettings property
     * @return SensitivityPolicySettings|null
    */
    public function getSensitivityPolicySettings(): ?SensitivityPolicySettings {
        return $this->sensitivityPolicySettings;
    }

    /**
     * Gets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @return array<ThreatAssessmentRequest>|null
    */
    public function getThreatAssessmentRequests(): ?array {
        return $this->threatAssessmentRequests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bitlocker', $this->bitlocker);
        $writer->writeCollectionOfObjectValues('dataLossPreventionPolicies', $this->dataLossPreventionPolicies);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->sensitivityLabels);
        $writer->writeObjectValue('sensitivityPolicySettings', $this->sensitivityPolicySettings);
        $writer->writeCollectionOfObjectValues('threatAssessmentRequests', $this->threatAssessmentRequests);
    }

    /**
     * Sets the bitlocker property value. The bitlocker property
     *  @param Bitlocker|null $value Value to set for the bitlocker property.
    */
    public function setBitlocker(?Bitlocker $value ): void {
        $this->bitlocker = $value;
    }

    /**
     * Sets the dataLossPreventionPolicies property value. The dataLossPreventionPolicies property
     *  @param array<DataLossPreventionPolicy>|null $value Value to set for the dataLossPreventionPolicies property.
    */
    public function setDataLossPreventionPolicies(?array $value ): void {
        $this->dataLossPreventionPolicies = $value;
    }

    /**
     * Sets the policy property value. The policy property
     *  @param InformationProtectionPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?InformationProtectionPolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     *  @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value ): void {
        $this->sensitivityLabels = $value;
    }

    /**
     * Sets the sensitivityPolicySettings property value. The sensitivityPolicySettings property
     *  @param SensitivityPolicySettings|null $value Value to set for the sensitivityPolicySettings property.
    */
    public function setSensitivityPolicySettings(?SensitivityPolicySettings $value ): void {
        $this->sensitivityPolicySettings = $value;
    }

    /**
     * Sets the threatAssessmentRequests property value. The threatAssessmentRequests property
     *  @param array<ThreatAssessmentRequest>|null $value Value to set for the threatAssessmentRequests property.
    */
    public function setThreatAssessmentRequests(?array $value ): void {
        $this->threatAssessmentRequests = $value;
    }

}
