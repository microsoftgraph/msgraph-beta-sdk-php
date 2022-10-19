<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernancePolicyTemplate extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var GovernancePolicy|null $policy The policy property
    */
    private ?GovernancePolicy $policy = null;
    
    /**
     * @var BusinessFlowSettings|null $settings The settings property
    */
    private ?BusinessFlowSettings $settings = null;
    
    /**
     * Instantiates a new governancePolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.governancePolicyTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernancePolicyTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernancePolicyTemplate {
        return new GovernancePolicyTemplate();
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([GovernancePolicy::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([BusinessFlowSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policy property value. The policy property
     * @return GovernancePolicy|null
    */
    public function getPolicy(): ?GovernancePolicy {
        return $this->policy;
    }

    /**
     * Gets the settings property value. The settings property
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
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the policy property value. The policy property
     *  @param GovernancePolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?GovernancePolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the settings property value. The settings property
     *  @param BusinessFlowSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?BusinessFlowSettings $value ): void {
        $this->settings = $value;
    }

}
