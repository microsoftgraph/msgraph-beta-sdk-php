<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernancePolicyTemplate extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernancePolicyTemplate {
        return new GovernancePolicyTemplate();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof GovernancePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return BusinessFlowSettings|null
    */
    public function getSettings(): ?BusinessFlowSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof BusinessFlowSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param GovernancePolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?GovernancePolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param BusinessFlowSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?BusinessFlowSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
