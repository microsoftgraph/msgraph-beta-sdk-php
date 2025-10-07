<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatIntelligenceRule extends PolicyRule implements Parsable 
{
    /**
     * Instantiates a new ThreatIntelligenceRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.threatIntelligenceRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatIntelligenceRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatIntelligenceRule {
        return new ThreatIntelligenceRule();
    }

    /**
     * Gets the action property value. The action property
     * @return ThreatIntelligenceAction|null
    */
    public function getAction(): ?ThreatIntelligenceAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof ThreatIntelligenceAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the description property value. A description of the threat intelligence rule. Supports $filter (eq).
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(ThreatIntelligenceAction::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'matchingConditions' => fn(ParseNode $n) => $o->setMatchingConditions($n->getObjectValue([ThreatIntelligenceMatchingConditions::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([ThreatIntelligenceRuleSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the matchingConditions property value. The matchingConditions property
     * @return ThreatIntelligenceMatchingConditions|null
    */
    public function getMatchingConditions(): ?ThreatIntelligenceMatchingConditions {
        $val = $this->getBackingStore()->get('matchingConditions');
        if (is_null($val) || $val instanceof ThreatIntelligenceMatchingConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingConditions'");
    }

    /**
     * Gets the priority property value. The priority of the rule which determines the order of rule evaluation. Lower values indicate higher priority. Supports $filter (eq).
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
     * @return ThreatIntelligenceRuleSettings|null
    */
    public function getSettings(): ?ThreatIntelligenceRuleSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof ThreatIntelligenceRuleSettings) {
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
     * @param ThreatIntelligenceAction|null $value Value to set for the action property.
    */
    public function setAction(?ThreatIntelligenceAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the description property value. A description of the threat intelligence rule. Supports $filter (eq).
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the matchingConditions property value. The matchingConditions property
     * @param ThreatIntelligenceMatchingConditions|null $value Value to set for the matchingConditions property.
    */
    public function setMatchingConditions(?ThreatIntelligenceMatchingConditions $value): void {
        $this->getBackingStore()->set('matchingConditions', $value);
    }

    /**
     * Sets the priority property value. The priority of the rule which determines the order of rule evaluation. Lower values indicate higher priority. Supports $filter (eq).
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param ThreatIntelligenceRuleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?ThreatIntelligenceRuleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
