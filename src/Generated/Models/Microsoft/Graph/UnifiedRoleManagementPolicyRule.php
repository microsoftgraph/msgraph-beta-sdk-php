<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyRule extends Entity 
{
    /** @var UnifiedRoleManagementPolicyRuleTarget|null $target The target for the policy rule. */
    private ?UnifiedRoleManagementPolicyRuleTarget $target = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyRule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyRule {
        return new UnifiedRoleManagementPolicyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(UnifiedRoleManagementPolicyRuleTarget::class)); },
        ]);
    }

    /**
     * Gets the target property value. The target for the policy rule.
     * @return UnifiedRoleManagementPolicyRuleTarget|null
    */
    public function getTarget(): ?UnifiedRoleManagementPolicyRuleTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the target property value. The target for the policy rule.
     *  @param UnifiedRoleManagementPolicyRuleTarget|null $value Value to set for the target property.
    */
    public function setTarget(?UnifiedRoleManagementPolicyRuleTarget $value ): void {
        $this->target = $value;
    }

}
