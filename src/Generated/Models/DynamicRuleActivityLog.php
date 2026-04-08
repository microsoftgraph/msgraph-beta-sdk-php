<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DynamicRuleActivityLog extends ActivityLogBase implements Parsable 
{
    /**
     * Instantiates a new DynamicRuleActivityLog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.dynamicRuleActivityLog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DynamicRuleActivityLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DynamicRuleActivityLog {
        return new DynamicRuleActivityLog();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'protectionUnitDetails' => fn(ParseNode $n) => $o->setProtectionUnitDetails($n->getObjectValue([ProtectionUnitDetails::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Gets the protectionUnitDetails property value. The protectionUnitDetails property
     * @return ProtectionUnitDetails|null
    */
    public function getProtectionUnitDetails(): ?ProtectionUnitDetails {
        $val = $this->getBackingStore()->get('protectionUnitDetails');
        if (is_null($val) || $val instanceof ProtectionUnitDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnitDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeObjectValue('protectionUnitDetails', $this->getProtectionUnitDetails());
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The policyName property
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the protectionUnitDetails property value. The protectionUnitDetails property
     * @param ProtectionUnitDetails|null $value Value to set for the protectionUnitDetails property.
    */
    public function setProtectionUnitDetails(?ProtectionUnitDetails $value): void {
        $this->getBackingStore()->set('protectionUnitDetails', $value);
    }

}
