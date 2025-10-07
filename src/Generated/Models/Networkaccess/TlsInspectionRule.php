<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TlsInspectionRule extends PolicyRule implements Parsable 
{
    /**
     * Instantiates a new TlsInspectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.tlsInspectionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TlsInspectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TlsInspectionRule {
        return new TlsInspectionRule();
    }

    /**
     * Gets the description property value. Optional description explaining the purpose of the rule.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'matchingConditions' => fn(ParseNode $n) => $o->setMatchingConditions($n->getObjectValue([TlsInspectionMatchingConditions::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([TlsInspectionRuleSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the matchingConditions property value. The conditions that determine when this rule should be applied to traffic.
     * @return TlsInspectionMatchingConditions|null
    */
    public function getMatchingConditions(): ?TlsInspectionMatchingConditions {
        $val = $this->getBackingStore()->get('matchingConditions');
        if (is_null($val) || $val instanceof TlsInspectionMatchingConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingConditions'");
    }

    /**
     * Gets the priority property value. The priority of the rule. Rules are evaluated in ascending order of priority. Lower numbers indicate higher priority. Supports $filter (eq, ne, not, ge, le, in) and $orderby.
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
     * @return TlsInspectionRuleSettings|null
    */
    public function getSettings(): ?TlsInspectionRuleSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof TlsInspectionRuleSettings) {
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('matchingConditions', $this->getMatchingConditions());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the description property value. Optional description explaining the purpose of the rule.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the matchingConditions property value. The conditions that determine when this rule should be applied to traffic.
     * @param TlsInspectionMatchingConditions|null $value Value to set for the matchingConditions property.
    */
    public function setMatchingConditions(?TlsInspectionMatchingConditions $value): void {
        $this->getBackingStore()->set('matchingConditions', $value);
    }

    /**
     * Sets the priority property value. The priority of the rule. Rules are evaluated in ascending order of priority. Lower numbers indicate higher priority. Supports $filter (eq, ne, not, ge, le, in) and $orderby.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param TlsInspectionRuleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?TlsInspectionRuleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
