<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BackupPolicyActivityLog extends ActivityLogBase implements Parsable 
{
    /**
     * Instantiates a new BackupPolicyActivityLog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.backupPolicyActivityLog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BackupPolicyActivityLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BackupPolicyActivityLog {
        return new BackupPolicyActivityLog();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'oldPolicyName' => fn(ParseNode $n) => $o->setOldPolicyName($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'policyStatus' => fn(ParseNode $n) => $o->setPolicyStatus($n->getEnumValue(ProtectionPolicyStatus::class)),
            'protectionUnitDetails' => fn(ParseNode $n) => $o->setProtectionUnitDetails($n->getObjectValue([ProtectionUnitDetails::class, 'createFromDiscriminatorValue'])),
            'retentionPeriod' => fn(ParseNode $n) => $o->setRetentionPeriod($n->getStringValue()),
        ]);
    }

    /**
     * Gets the oldPolicyName property value. The oldPolicyName property
     * @return string|null
    */
    public function getOldPolicyName(): ?string {
        $val = $this->getBackingStore()->get('oldPolicyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldPolicyName'");
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
     * Gets the retentionPeriod property value. The retentionPeriod property
     * @return string|null
    */
    public function getRetentionPeriod(): ?string {
        $val = $this->getBackingStore()->get('retentionPeriod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionPeriod'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('oldPolicyName', $this->getOldPolicyName());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeEnumValue('policyStatus', $this->getPolicyStatus());
        $writer->writeObjectValue('protectionUnitDetails', $this->getProtectionUnitDetails());
        $writer->writeStringValue('retentionPeriod', $this->getRetentionPeriod());
    }

    /**
     * Sets the oldPolicyName property value. The oldPolicyName property
     * @param string|null $value Value to set for the oldPolicyName property.
    */
    public function setOldPolicyName(?string $value): void {
        $this->getBackingStore()->set('oldPolicyName', $value);
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

    /**
     * Sets the protectionUnitDetails property value. The protectionUnitDetails property
     * @param ProtectionUnitDetails|null $value Value to set for the protectionUnitDetails property.
    */
    public function setProtectionUnitDetails(?ProtectionUnitDetails $value): void {
        $this->getBackingStore()->set('protectionUnitDetails', $value);
    }

    /**
     * Sets the retentionPeriod property value. The retentionPeriod property
     * @param string|null $value Value to set for the retentionPeriod property.
    */
    public function setRetentionPeriod(?string $value): void {
        $this->getBackingStore()->set('retentionPeriod', $value);
    }

}
