<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LifecyclePolicyReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecyclePolicyReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicyReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicyReport {
        return new LifecyclePolicyReport();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyVersion' => fn(ParseNode $n) => $o->setPolicyVersion($n->getIntegerValue()),
            'scopeProcessing' => fn(ParseNode $n) => $o->setScopeProcessing($n->getObjectValue([LifecyclePolicyScopeProcessing::class, 'createFromDiscriminatorValue'])),
            'subjects' => fn(ParseNode $n) => $o->setSubjects($n->getCollectionOfObjectValues([LifecyclePolicySubjectReport::class, 'createFromDiscriminatorValue'])),
            'subjectsInScopeCount' => fn(ParseNode $n) => $o->setSubjectsInScopeCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the policyVersion property value. The version of the lifecycle policy represented by the report.
     * @return int|null
    */
    public function getPolicyVersion(): ?int {
        $val = $this->getBackingStore()->get('policyVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyVersion'");
    }

    /**
     * Gets the scopeProcessing property value. The scopeProcessing property
     * @return LifecyclePolicyScopeProcessing|null
    */
    public function getScopeProcessing(): ?LifecyclePolicyScopeProcessing {
        $val = $this->getBackingStore()->get('scopeProcessing');
        if (is_null($val) || $val instanceof LifecyclePolicyScopeProcessing) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeProcessing'");
    }

    /**
     * Gets the subjects property value. The processing results for subjects included in the report.
     * @return array<LifecyclePolicySubjectReport>|null
    */
    public function getSubjects(): ?array {
        $val = $this->getBackingStore()->get('subjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LifecyclePolicySubjectReport::class);
            /** @var array<LifecyclePolicySubjectReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjects'");
    }

    /**
     * Gets the subjectsInScopeCount property value. The number of subjects currently in scope for the policy.
     * @return int|null
    */
    public function getSubjectsInScopeCount(): ?int {
        $val = $this->getBackingStore()->get('subjectsInScopeCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectsInScopeCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('policyVersion', $this->getPolicyVersion());
        $writer->writeObjectValue('scopeProcessing', $this->getScopeProcessing());
        $writer->writeCollectionOfObjectValues('subjects', $this->getSubjects());
        $writer->writeIntegerValue('subjectsInScopeCount', $this->getSubjectsInScopeCount());
    }

    /**
     * Sets the policyVersion property value. The version of the lifecycle policy represented by the report.
     * @param int|null $value Value to set for the policyVersion property.
    */
    public function setPolicyVersion(?int $value): void {
        $this->getBackingStore()->set('policyVersion', $value);
    }

    /**
     * Sets the scopeProcessing property value. The scopeProcessing property
     * @param LifecyclePolicyScopeProcessing|null $value Value to set for the scopeProcessing property.
    */
    public function setScopeProcessing(?LifecyclePolicyScopeProcessing $value): void {
        $this->getBackingStore()->set('scopeProcessing', $value);
    }

    /**
     * Sets the subjects property value. The processing results for subjects included in the report.
     * @param array<LifecyclePolicySubjectReport>|null $value Value to set for the subjects property.
    */
    public function setSubjects(?array $value): void {
        $this->getBackingStore()->set('subjects', $value);
    }

    /**
     * Sets the subjectsInScopeCount property value. The number of subjects currently in scope for the policy.
     * @param int|null $value Value to set for the subjectsInScopeCount property.
    */
    public function setSubjectsInScopeCount(?int $value): void {
        $this->getBackingStore()->set('subjectsInScopeCount', $value);
    }

}
