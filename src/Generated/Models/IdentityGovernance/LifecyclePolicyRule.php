<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LifecyclePolicyRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecyclePolicyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicyRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.accessPackageAssignmentRequiredRule': return new AccessPackageAssignmentRequiredRule();
                case '#microsoft.graph.identityGovernance.inactivityRule': return new InactivityRule();
                case '#microsoft.graph.identityGovernance.invitationRedemptionRule': return new InvitationRedemptionRule();
                case '#microsoft.graph.identityGovernance.periodicAttestationRule': return new PeriodicAttestationRule();
                case '#microsoft.graph.identityGovernance.sponsorPresenceRule': return new SponsorPresenceRule();
            }
        }
        return new LifecyclePolicyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'gracePeriodInDays' => fn(ParseNode $n) => $o->setGracePeriodInDays($n->getIntegerValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the gracePeriodInDays property value. The optional grace period, in days, that starts when the rule violation is first detected. The allowed range is 0 through 30. If omitted or set to null, the gracePeriodInDays value of the containing lifecycle policy applies. A value of 0 means no additional grace period. If multiple rules remain violated, the earliest rule grace-period expiry starts the policy action sequence; the policy-level grace period isn't added again.
     * @return int|null
    */
    public function getGracePeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('gracePeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodInDays'");
    }

    /**
     * Gets the isEnabled property value. Indicates whether the rule is enabled and evaluated as part of its policy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('gracePeriodInDays', $this->getGracePeriodInDays());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
    }

    /**
     * Sets the gracePeriodInDays property value. The optional grace period, in days, that starts when the rule violation is first detected. The allowed range is 0 through 30. If omitted or set to null, the gracePeriodInDays value of the containing lifecycle policy applies. A value of 0 means no additional grace period. If multiple rules remain violated, the earliest rule grace-period expiry starts the policy action sequence; the policy-level grace period isn't added again.
     * @param int|null $value Value to set for the gracePeriodInDays property.
    */
    public function setGracePeriodInDays(?int $value): void {
        $this->getBackingStore()->set('gracePeriodInDays', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the rule is enabled and evaluated as part of its policy.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

}
