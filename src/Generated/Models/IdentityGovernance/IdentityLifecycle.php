<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityLifecycle extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityLifecycle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityLifecycle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityLifecycle {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.agentIdentityLifecycle': return new AgentIdentityLifecycle();
            }
        }
        return new IdentityLifecycle();
    }

    /**
     * Gets the complianceIssues property value. The complianceIssues property
     * @return array<ComplianceIssue>|null
    */
    public function getComplianceIssues(): ?array {
        $val = $this->getBackingStore()->get('complianceIssues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceIssue::class);
            /** @var array<ComplianceIssue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceIssues'");
    }

    /**
     * Gets the effectiveGoverningPolicy property value. The effectiveGoverningPolicy property
     * @return LifecyclePolicy|null
    */
    public function getEffectiveGoverningPolicy(): ?LifecyclePolicy {
        $val = $this->getBackingStore()->get('effectiveGoverningPolicy');
        if (is_null($val) || $val instanceof LifecyclePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveGoverningPolicy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceIssues' => fn(ParseNode $n) => $o->setComplianceIssues($n->getCollectionOfObjectValues([ComplianceIssue::class, 'createFromDiscriminatorValue'])),
            'effectiveGoverningPolicy' => fn(ParseNode $n) => $o->setEffectiveGoverningPolicy($n->getObjectValue([LifecyclePolicy::class, 'createFromDiscriminatorValue'])),
            'lastAttestationDateTime' => fn(ParseNode $n) => $o->setLastAttestationDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastAttestationDateTime property value. The lastAttestationDateTime property
     * @return DateTime|null
    */
    public function getLastAttestationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAttestationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAttestationDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('complianceIssues', $this->getComplianceIssues());
        $writer->writeObjectValue('effectiveGoverningPolicy', $this->getEffectiveGoverningPolicy());
        $writer->writeDateTimeValue('lastAttestationDateTime', $this->getLastAttestationDateTime());
    }

    /**
     * Sets the complianceIssues property value. The complianceIssues property
     * @param array<ComplianceIssue>|null $value Value to set for the complianceIssues property.
    */
    public function setComplianceIssues(?array $value): void {
        $this->getBackingStore()->set('complianceIssues', $value);
    }

    /**
     * Sets the effectiveGoverningPolicy property value. The effectiveGoverningPolicy property
     * @param LifecyclePolicy|null $value Value to set for the effectiveGoverningPolicy property.
    */
    public function setEffectiveGoverningPolicy(?LifecyclePolicy $value): void {
        $this->getBackingStore()->set('effectiveGoverningPolicy', $value);
    }

    /**
     * Sets the lastAttestationDateTime property value. The lastAttestationDateTime property
     * @param DateTime|null $value Value to set for the lastAttestationDateTime property.
    */
    public function setLastAttestationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAttestationDateTime', $value);
    }

}
