<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPolicyCoverage extends Entity 
{
    /** @var string|null $conditionalAccessPolicyState The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only. */
    private ?string $conditionalAccessPolicyState = null;
    
    /** @var DateTime|null $latestPolicyModifiedDateTime The date and time the conditional access policy was last modified. Required. Read-only. */
    private ?DateTime $latestPolicyModifiedDateTime = null;
    
    /** @var bool|null $requiresDeviceCompliance A flag indicating whether the conditional access policy requires device compliance. Required. Read-only. */
    private ?bool $requiresDeviceCompliance = null;
    
    /** @var string|null $tenantDisplayName The display name for the managed tenant. Required. Read-only. */
    private ?string $tenantDisplayName = null;
    
    /**
     * Instantiates a new conditionalAccessPolicyCoverage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPolicyCoverage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPolicyCoverage {
        return new ConditionalAccessPolicyCoverage();
    }

    /**
     * Gets the conditionalAccessPolicyState property value. The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
     * @return string|null
    */
    public function getConditionalAccessPolicyState(): ?string {
        return $this->conditionalAccessPolicyState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'conditionalAccessPolicyState' => function (self $o, ParseNode $n) { $o->setConditionalAccessPolicyState($n->getStringValue()); },
            'latestPolicyModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLatestPolicyModifiedDateTime($n->getDateTimeValue()); },
            'requiresDeviceCompliance' => function (self $o, ParseNode $n) { $o->setRequiresDeviceCompliance($n->getBooleanValue()); },
            'tenantDisplayName' => function (self $o, ParseNode $n) { $o->setTenantDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the latestPolicyModifiedDateTime property value. The date and time the conditional access policy was last modified. Required. Read-only.
     * @return DateTime|null
    */
    public function getLatestPolicyModifiedDateTime(): ?DateTime {
        return $this->latestPolicyModifiedDateTime;
    }

    /**
     * Gets the requiresDeviceCompliance property value. A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
     * @return bool|null
    */
    public function getRequiresDeviceCompliance(): ?bool {
        return $this->requiresDeviceCompliance;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('conditionalAccessPolicyState', $this->conditionalAccessPolicyState);
        $writer->writeDateTimeValue('latestPolicyModifiedDateTime', $this->latestPolicyModifiedDateTime);
        $writer->writeBooleanValue('requiresDeviceCompliance', $this->requiresDeviceCompliance);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
    }

    /**
     * Sets the conditionalAccessPolicyState property value. The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
     *  @param string|null $value Value to set for the conditionalAccessPolicyState property.
    */
    public function setConditionalAccessPolicyState(?string $value ): void {
        $this->conditionalAccessPolicyState = $value;
    }

    /**
     * Sets the latestPolicyModifiedDateTime property value. The date and time the conditional access policy was last modified. Required. Read-only.
     *  @param DateTime|null $value Value to set for the latestPolicyModifiedDateTime property.
    */
    public function setLatestPolicyModifiedDateTime(?DateTime $value ): void {
        $this->latestPolicyModifiedDateTime = $value;
    }

    /**
     * Sets the requiresDeviceCompliance property value. A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
     *  @param bool|null $value Value to set for the requiresDeviceCompliance property.
    */
    public function setRequiresDeviceCompliance(?bool $value ): void {
        $this->requiresDeviceCompliance = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

}
