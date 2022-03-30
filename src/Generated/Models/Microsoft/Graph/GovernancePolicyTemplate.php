<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernancePolicyTemplate extends Entity 
{
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var GovernancePolicy|null $policy  */
    private ?GovernancePolicy $policy = null;
    
    /** @var BusinessFlowSettings|null $settings  */
    private ?BusinessFlowSettings $settings = null;
    
    /**
     * Instantiates a new governancePolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernancePolicyTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernancePolicyTemplate {
        return new GovernancePolicyTemplate();
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'policy' => function (self $o, ParseNode $n) { $o->setPolicy($n->getObjectValue(GovernancePolicy::class)); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(BusinessFlowSettings::class)); },
        ]);
    }

    /**
     * Gets the policy property value. 
     * @return GovernancePolicy|null
    */
    public function getPolicy(): ?GovernancePolicy {
        return $this->policy;
    }

    /**
     * Gets the settings property value. 
     * @return BusinessFlowSettings|null
    */
    public function getSettings(): ?BusinessFlowSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the policy property value. 
     *  @param GovernancePolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?GovernancePolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the settings property value. 
     *  @param BusinessFlowSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?BusinessFlowSettings $value ): void {
        $this->settings = $value;
    }

}
