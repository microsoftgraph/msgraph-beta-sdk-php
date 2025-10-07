<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Partner\Security;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityRequirement extends Entity implements Parsable 
{
    /**
     * Instantiates a new SecurityRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityRequirement {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.partner.security.adminsMfaEnforcedSecurityRequirement': return new AdminsMfaEnforcedSecurityRequirement();
                case '#microsoft.graph.partner.security.customersMfaEnforcedSecurityRequirement': return new CustomersMfaEnforcedSecurityRequirement();
                case '#microsoft.graph.partner.security.customersSpendingBudgetSecurityRequirement': return new CustomersSpendingBudgetSecurityRequirement();
                case '#microsoft.graph.partner.security.responseTimeSecurityRequirement': return new ResponseTimeSecurityRequirement();
            }
        }
        return new SecurityRequirement();
    }

    /**
     * Gets the actionUrl property value. The link to the site where the admin can take action on the requirement.
     * @return string|null
    */
    public function getActionUrl(): ?string {
        $val = $this->getBackingStore()->get('actionUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionUrl'");
    }

    /**
     * Gets the complianceStatus property value. The complianceStatus property
     * @return ComplianceStatus|null
    */
    public function getComplianceStatus(): ?ComplianceStatus {
        $val = $this->getBackingStore()->get('complianceStatus');
        if (is_null($val) || $val instanceof ComplianceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionUrl' => fn(ParseNode $n) => $o->setActionUrl($n->getStringValue()),
            'complianceStatus' => fn(ParseNode $n) => $o->setComplianceStatus($n->getEnumValue(ComplianceStatus::class)),
            'helpUrl' => fn(ParseNode $n) => $o->setHelpUrl($n->getStringValue()),
            'maxScore' => fn(ParseNode $n) => $o->setMaxScore($n->getIntegerValue()),
            'requirementType' => fn(ParseNode $n) => $o->setRequirementType($n->getEnumValue(SecurityRequirementType::class)),
            'score' => fn(ParseNode $n) => $o->setScore($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SecurityRequirementState::class)),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the helpUrl property value. The link to documentation for the requirement.
     * @return string|null
    */
    public function getHelpUrl(): ?string {
        $val = $this->getBackingStore()->get('helpUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'helpUrl'");
    }

    /**
     * Gets the maxScore property value. The maximum score possible for the requirement.
     * @return int|null
    */
    public function getMaxScore(): ?int {
        $val = $this->getBackingStore()->get('maxScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxScore'");
    }

    /**
     * Gets the requirementType property value. The requirementType property
     * @return SecurityRequirementType|null
    */
    public function getRequirementType(): ?SecurityRequirementType {
        $val = $this->getBackingStore()->get('requirementType');
        if (is_null($val) || $val instanceof SecurityRequirementType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirementType'");
    }

    /**
     * Gets the score property value. The score received for this requirement.
     * @return int|null
    */
    public function getScore(): ?int {
        $val = $this->getBackingStore()->get('score');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'score'");
    }

    /**
     * Gets the state property value. The state property
     * @return SecurityRequirementState|null
    */
    public function getState(): ?SecurityRequirementState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof SecurityRequirementState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the updatedDateTime property value. The date the requirement properties were last updated.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionUrl', $this->getActionUrl());
        $writer->writeEnumValue('complianceStatus', $this->getComplianceStatus());
        $writer->writeStringValue('helpUrl', $this->getHelpUrl());
        $writer->writeIntegerValue('maxScore', $this->getMaxScore());
        $writer->writeEnumValue('requirementType', $this->getRequirementType());
        $writer->writeIntegerValue('score', $this->getScore());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
    }

    /**
     * Sets the actionUrl property value. The link to the site where the admin can take action on the requirement.
     * @param string|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?string $value): void {
        $this->getBackingStore()->set('actionUrl', $value);
    }

    /**
     * Sets the complianceStatus property value. The complianceStatus property
     * @param ComplianceStatus|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('complianceStatus', $value);
    }

    /**
     * Sets the helpUrl property value. The link to documentation for the requirement.
     * @param string|null $value Value to set for the helpUrl property.
    */
    public function setHelpUrl(?string $value): void {
        $this->getBackingStore()->set('helpUrl', $value);
    }

    /**
     * Sets the maxScore property value. The maximum score possible for the requirement.
     * @param int|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?int $value): void {
        $this->getBackingStore()->set('maxScore', $value);
    }

    /**
     * Sets the requirementType property value. The requirementType property
     * @param SecurityRequirementType|null $value Value to set for the requirementType property.
    */
    public function setRequirementType(?SecurityRequirementType $value): void {
        $this->getBackingStore()->set('requirementType', $value);
    }

    /**
     * Sets the score property value. The score received for this requirement.
     * @param int|null $value Value to set for the score property.
    */
    public function setScore(?int $value): void {
        $this->getBackingStore()->set('score', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param SecurityRequirementState|null $value Value to set for the state property.
    */
    public function setState(?SecurityRequirementState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the updatedDateTime property value. The date the requirement properties were last updated.
     * @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

}
