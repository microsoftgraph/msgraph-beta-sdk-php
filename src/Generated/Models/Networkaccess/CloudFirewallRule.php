<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudFirewallRule extends PolicyRule implements Parsable 
{
    /**
     * Instantiates a new CloudFirewallRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.cloudFirewallRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudFirewallRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudFirewallRule {
        return new CloudFirewallRule();
    }

    /**
     * Gets the action property value. The action property
     * @return CloudFirewallAction|null
    */
    public function getAction(): ?CloudFirewallAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof CloudFirewallAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the description property value. A human-readable description of the rule's purpose. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(CloudFirewallAction::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'matchingConditions' => fn(ParseNode $n) => $o->setMatchingConditions($n->getObjectValue([CloudFirewallMatchingConditions::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([CloudFirewallRuleSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the matchingConditions property value. The matchingConditions property
     * @return CloudFirewallMatchingConditions|null
    */
    public function getMatchingConditions(): ?CloudFirewallMatchingConditions {
        $val = $this->getBackingStore()->get('matchingConditions');
        if (is_null($val) || $val instanceof CloudFirewallMatchingConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingConditions'");
    }

    /**
     * Gets the priority property value. A unique priority value that determines the rule evaluation order; lower values are evaluated first. Required.
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return CloudFirewallRuleSettings|null
    */
    public function getSettings(): ?CloudFirewallRuleSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof CloudFirewallRuleSettings) {
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
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('matchingConditions', $this->getMatchingConditions());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the action property value. The action property
     * @param CloudFirewallAction|null $value Value to set for the action property.
    */
    public function setAction(?CloudFirewallAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the description property value. A human-readable description of the rule's purpose. Optional.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the matchingConditions property value. The matchingConditions property
     * @param CloudFirewallMatchingConditions|null $value Value to set for the matchingConditions property.
    */
    public function setMatchingConditions(?CloudFirewallMatchingConditions $value): void {
        $this->getBackingStore()->set('matchingConditions', $value);
    }

    /**
     * Sets the priority property value. A unique priority value that determines the rule evaluation order; lower values are evaluated first. Required.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param CloudFirewallRuleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?CloudFirewallRuleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
