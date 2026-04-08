<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OffboardingActivityLog extends ActivityLogBase implements Parsable 
{
    /**
     * Instantiates a new OffboardingActivityLog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.offboardingActivityLog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OffboardingActivityLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OffboardingActivityLog {
        return new OffboardingActivityLog();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'offboardingDetails' => fn(ParseNode $n) => $o->setOffboardingDetails($n->getObjectValue([OffboardingDetails::class, 'createFromDiscriminatorValue'])),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'policyStatus' => fn(ParseNode $n) => $o->setPolicyStatus($n->getEnumValue(ProtectionPolicyStatus::class)),
        ]);
    }

    /**
     * Gets the offboardingDetails property value. The offboardingDetails property
     * @return OffboardingDetails|null
    */
    public function getOffboardingDetails(): ?OffboardingDetails {
        $val = $this->getBackingStore()->get('offboardingDetails');
        if (is_null($val) || $val instanceof OffboardingDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardingDetails'");
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
     * Gets the policyStatus property value. The policyStatus property
     * @return ProtectionPolicyStatus|null
    */
    public function getPolicyStatus(): ?ProtectionPolicyStatus {
        $val = $this->getBackingStore()->get('policyStatus');
        if (is_null($val) || $val instanceof ProtectionPolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('offboardingDetails', $this->getOffboardingDetails());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeEnumValue('policyStatus', $this->getPolicyStatus());
    }

    /**
     * Sets the offboardingDetails property value. The offboardingDetails property
     * @param OffboardingDetails|null $value Value to set for the offboardingDetails property.
    */
    public function setOffboardingDetails(?OffboardingDetails $value): void {
        $this->getBackingStore()->set('offboardingDetails', $value);
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
     * Sets the policyStatus property value. The policyStatus property
     * @param ProtectionPolicyStatus|null $value Value to set for the policyStatus property.
    */
    public function setPolicyStatus(?ProtectionPolicyStatus $value): void {
        $this->getBackingStore()->set('policyStatus', $value);
    }

}
