<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceIssue extends Entity implements Parsable 
{
    /**
     * Instantiates a new ComplianceIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceIssue {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.attestationComplianceIssue': return new AttestationComplianceIssue();
            }
        }
        return new ComplianceIssue();
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'governingPolicyReferenceId' => fn(ParseNode $n) => $o->setGoverningPolicyReferenceId($n->getStringValue()),
            'issueCode' => fn(ParseNode $n) => $o->setIssueCode($n->getStringValue()),
            'ruleType' => fn(ParseNode $n) => $o->setRuleType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the governingPolicyReferenceId property value. The governingPolicyReferenceId property
     * @return string|null
    */
    public function getGoverningPolicyReferenceId(): ?string {
        $val = $this->getBackingStore()->get('governingPolicyReferenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingPolicyReferenceId'");
    }

    /**
     * Gets the issueCode property value. The issueCode property
     * @return string|null
    */
    public function getIssueCode(): ?string {
        $val = $this->getBackingStore()->get('issueCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issueCode'");
    }

    /**
     * Gets the ruleType property value. The ruleType property
     * @return string|null
    */
    public function getRuleType(): ?string {
        $val = $this->getBackingStore()->get('ruleType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('governingPolicyReferenceId', $this->getGoverningPolicyReferenceId());
        $writer->writeStringValue('issueCode', $this->getIssueCode());
        $writer->writeStringValue('ruleType', $this->getRuleType());
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the governingPolicyReferenceId property value. The governingPolicyReferenceId property
     * @param string|null $value Value to set for the governingPolicyReferenceId property.
    */
    public function setGoverningPolicyReferenceId(?string $value): void {
        $this->getBackingStore()->set('governingPolicyReferenceId', $value);
    }

    /**
     * Sets the issueCode property value. The issueCode property
     * @param string|null $value Value to set for the issueCode property.
    */
    public function setIssueCode(?string $value): void {
        $this->getBackingStore()->set('issueCode', $value);
    }

    /**
     * Sets the ruleType property value. The ruleType property
     * @param string|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?string $value): void {
        $this->getBackingStore()->set('ruleType', $value);
    }

}
