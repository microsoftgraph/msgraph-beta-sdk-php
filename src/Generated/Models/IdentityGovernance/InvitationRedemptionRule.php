<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Requires a pending guest invitation to be redeemed within a threshold period. Guest lifecycle policies only; adding this rule to a non-guest lifecycle policy returns HTTP 400.
*/
class InvitationRedemptionRule extends LifecyclePolicyRule implements Parsable 
{
    /**
     * Instantiates a new InvitationRedemptionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.invitationRedemptionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationRedemptionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitationRedemptionRule {
        return new InvitationRedemptionRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'invitationRedemptionThresholdInDays' => fn(ParseNode $n) => $o->setInvitationRedemptionThresholdInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the invitationRedemptionThresholdInDays property value. The number of days in which the guest user must redeem their invitation.
     * @return int|null
    */
    public function getInvitationRedemptionThresholdInDays(): ?int {
        $val = $this->getBackingStore()->get('invitationRedemptionThresholdInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitationRedemptionThresholdInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('invitationRedemptionThresholdInDays', $this->getInvitationRedemptionThresholdInDays());
    }

    /**
     * Sets the invitationRedemptionThresholdInDays property value. The number of days in which the guest user must redeem their invitation.
     * @param int|null $value Value to set for the invitationRedemptionThresholdInDays property.
    */
    public function setInvitationRedemptionThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('invitationRedemptionThresholdInDays', $value);
    }

}
