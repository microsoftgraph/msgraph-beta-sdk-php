<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AggregatedPolicyCompliance extends Entity implements Parsable 
{
    /**
     * Instantiates a new AggregatedPolicyCompliance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AggregatedPolicyCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AggregatedPolicyCompliance {
        return new AggregatedPolicyCompliance();
    }

    /**
     * Gets the compliancePolicyId property value. Identifier for the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyId(): ?string {
        $val = $this->getBackingStore()->get('compliancePolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicyId'");
    }

    /**
     * Gets the compliancePolicyName property value. Name of the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyName(): ?string {
        $val = $this->getBackingStore()->get('compliancePolicyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicyName'");
    }

    /**
     * Gets the compliancePolicyPlatform property value. Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyPlatform(): ?string {
        $val = $this->getBackingStore()->get('compliancePolicyPlatform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicyPlatform'");
    }

    /**
     * Gets the compliancePolicyType property value. The type of compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyType(): ?string {
        $val = $this->getBackingStore()->get('compliancePolicyType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicyType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliancePolicyId' => fn(ParseNode $n) => $o->setCompliancePolicyId($n->getStringValue()),
            'compliancePolicyName' => fn(ParseNode $n) => $o->setCompliancePolicyName($n->getStringValue()),
            'compliancePolicyPlatform' => fn(ParseNode $n) => $o->setCompliancePolicyPlatform($n->getStringValue()),
            'compliancePolicyType' => fn(ParseNode $n) => $o->setCompliancePolicyType($n->getStringValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'numberOfCompliantDevices' => fn(ParseNode $n) => $o->setNumberOfCompliantDevices($n->getIntegerValue()),
            'numberOfErrorDevices' => fn(ParseNode $n) => $o->setNumberOfErrorDevices($n->getIntegerValue()),
            'numberOfNonCompliantDevices' => fn(ParseNode $n) => $o->setNumberOfNonCompliantDevices($n->getIntegerValue()),
            'policyModifiedDateTime' => fn(ParseNode $n) => $o->setPolicyModifiedDateTime($n->getDateTimeValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRefreshedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRefreshedDateTime'");
    }

    /**
     * Gets the numberOfCompliantDevices property value. The number of devices that are in a compliant status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCompliantDevices(): ?int {
        $val = $this->getBackingStore()->get('numberOfCompliantDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCompliantDevices'");
    }

    /**
     * Gets the numberOfErrorDevices property value. The number of devices that are in an error status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfErrorDevices(): ?int {
        $val = $this->getBackingStore()->get('numberOfErrorDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfErrorDevices'");
    }

    /**
     * Gets the numberOfNonCompliantDevices property value. The number of device that are in a non-compliant status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfNonCompliantDevices(): ?int {
        $val = $this->getBackingStore()->get('numberOfNonCompliantDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfNonCompliantDevices'");
    }

    /**
     * Gets the policyModifiedDateTime property value. The date and time the device policy was last modified. Optional. Read-only.
     * @return DateTime|null
    */
    public function getPolicyModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('policyModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyModifiedDateTime'");
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('tenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDisplayName'");
    }

    /**
     * Gets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('compliancePolicyId', $this->getCompliancePolicyId());
        $writer->writeStringValue('compliancePolicyName', $this->getCompliancePolicyName());
        $writer->writeStringValue('compliancePolicyPlatform', $this->getCompliancePolicyPlatform());
        $writer->writeStringValue('compliancePolicyType', $this->getCompliancePolicyType());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeIntegerValue('numberOfCompliantDevices', $this->getNumberOfCompliantDevices());
        $writer->writeIntegerValue('numberOfErrorDevices', $this->getNumberOfErrorDevices());
        $writer->writeIntegerValue('numberOfNonCompliantDevices', $this->getNumberOfNonCompliantDevices());
        $writer->writeDateTimeValue('policyModifiedDateTime', $this->getPolicyModifiedDateTime());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the compliancePolicyId property value. Identifier for the device compliance policy. Optional. Read-only.
     * @param string|null $value Value to set for the compliancePolicyId property.
    */
    public function setCompliancePolicyId(?string $value): void {
        $this->getBackingStore()->set('compliancePolicyId', $value);
    }

    /**
     * Sets the compliancePolicyName property value. Name of the device compliance policy. Optional. Read-only.
     * @param string|null $value Value to set for the compliancePolicyName property.
    */
    public function setCompliancePolicyName(?string $value): void {
        $this->getBackingStore()->set('compliancePolicyName', $value);
    }

    /**
     * Sets the compliancePolicyPlatform property value. Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
     * @param string|null $value Value to set for the compliancePolicyPlatform property.
    */
    public function setCompliancePolicyPlatform(?string $value): void {
        $this->getBackingStore()->set('compliancePolicyPlatform', $value);
    }

    /**
     * Sets the compliancePolicyType property value. The type of compliance policy. Optional. Read-only.
     * @param string|null $value Value to set for the compliancePolicyType property.
    */
    public function setCompliancePolicyType(?string $value): void {
        $this->getBackingStore()->set('compliancePolicyType', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the numberOfCompliantDevices property value. The number of devices that are in a compliant status. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCompliantDevices property.
    */
    public function setNumberOfCompliantDevices(?int $value): void {
        $this->getBackingStore()->set('numberOfCompliantDevices', $value);
    }

    /**
     * Sets the numberOfErrorDevices property value. The number of devices that are in an error status. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfErrorDevices property.
    */
    public function setNumberOfErrorDevices(?int $value): void {
        $this->getBackingStore()->set('numberOfErrorDevices', $value);
    }

    /**
     * Sets the numberOfNonCompliantDevices property value. The number of device that are in a non-compliant status. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfNonCompliantDevices property.
    */
    public function setNumberOfNonCompliantDevices(?int $value): void {
        $this->getBackingStore()->set('numberOfNonCompliantDevices', $value);
    }

    /**
     * Sets the policyModifiedDateTime property value. The date and time the device policy was last modified. Optional. Read-only.
     * @param DateTime|null $value Value to set for the policyModifiedDateTime property.
    */
    public function setPolicyModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('policyModifiedDateTime', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
