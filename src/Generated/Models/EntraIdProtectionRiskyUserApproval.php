<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntraIdProtectionRiskyUserApproval extends ControlConfiguration implements Parsable 
{
    /**
     * Instantiates a new EntraIdProtectionRiskyUserApproval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entraIdProtectionRiskyUserApproval');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntraIdProtectionRiskyUserApproval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntraIdProtectionRiskyUserApproval {
        return new EntraIdProtectionRiskyUserApproval();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isApprovalRequired' => fn(ParseNode $n) => $o->setIsApprovalRequired($n->getBooleanValue()),
            'minimumRiskLevel' => fn(ParseNode $n) => $o->setMinimumRiskLevel($n->getEnumValue(RiskLevel::class)),
        ]);
    }

    /**
     * Gets the isApprovalRequired property value. Indicates whether approval is required for risky users.
     * @return bool|null
    */
    public function getIsApprovalRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequired'");
    }

    /**
     * Gets the minimumRiskLevel property value. The minimumRiskLevel property
     * @return RiskLevel|null
    */
    public function getMinimumRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('minimumRiskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRiskLevel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isApprovalRequired', $this->getIsApprovalRequired());
        $writer->writeEnumValue('minimumRiskLevel', $this->getMinimumRiskLevel());
    }

    /**
     * Sets the isApprovalRequired property value. Indicates whether approval is required for risky users.
     * @param bool|null $value Value to set for the isApprovalRequired property.
    */
    public function setIsApprovalRequired(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequired', $value);
    }

    /**
     * Sets the minimumRiskLevel property value. The minimumRiskLevel property
     * @param RiskLevel|null $value Value to set for the minimumRiskLevel property.
    */
    public function setMinimumRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('minimumRiskLevel', $value);
    }

}
