<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPolicyCoverage extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConditionalAccessPolicyCoverage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPolicyCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPolicyCoverage {
        return new ConditionalAccessPolicyCoverage();
    }

    /**
     * Gets the conditionalAccessPolicyState property value. The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
     * @return string|null
    */
    public function getConditionalAccessPolicyState(): ?string {
        $val = $this->getBackingStore()->get('conditionalAccessPolicyState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessPolicyState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditionalAccessPolicyState' => fn(ParseNode $n) => $o->setConditionalAccessPolicyState($n->getStringValue()),
            'latestPolicyModifiedDateTime' => fn(ParseNode $n) => $o->setLatestPolicyModifiedDateTime($n->getDateTimeValue()),
            'requiresDeviceCompliance' => fn(ParseNode $n) => $o->setRequiresDeviceCompliance($n->getBooleanValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the latestPolicyModifiedDateTime property value. The date and time the conditional access policy was last modified. Required. Read-only.
     * @return DateTime|null
    */
    public function getLatestPolicyModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('latestPolicyModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestPolicyModifiedDateTime'");
    }

    /**
     * Gets the requiresDeviceCompliance property value. A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
     * @return bool|null
    */
    public function getRequiresDeviceCompliance(): ?bool {
        $val = $this->getBackingStore()->get('requiresDeviceCompliance');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiresDeviceCompliance'");
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('conditionalAccessPolicyState', $this->getConditionalAccessPolicyState());
        $writer->writeDateTimeValue('latestPolicyModifiedDateTime', $this->getLatestPolicyModifiedDateTime());
        $writer->writeBooleanValue('requiresDeviceCompliance', $this->getRequiresDeviceCompliance());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
    }

    /**
     * Sets the conditionalAccessPolicyState property value. The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
     * @param string|null $value Value to set for the conditionalAccessPolicyState property.
    */
    public function setConditionalAccessPolicyState(?string $value): void {
        $this->getBackingStore()->set('conditionalAccessPolicyState', $value);
    }

    /**
     * Sets the latestPolicyModifiedDateTime property value. The date and time the conditional access policy was last modified. Required. Read-only.
     * @param DateTime|null $value Value to set for the latestPolicyModifiedDateTime property.
    */
    public function setLatestPolicyModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('latestPolicyModifiedDateTime', $value);
    }

    /**
     * Sets the requiresDeviceCompliance property value. A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
     * @param bool|null $value Value to set for the requiresDeviceCompliance property.
    */
    public function setRequiresDeviceCompliance(?bool $value): void {
        $this->getBackingStore()->set('requiresDeviceCompliance', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

}
