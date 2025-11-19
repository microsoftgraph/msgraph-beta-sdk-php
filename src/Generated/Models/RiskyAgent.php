<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyAgent extends Entity implements Parsable 
{
    /**
     * Instantiates a new RiskyAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyAgent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.riskyAgentIdentity': return new RiskyAgentIdentity();
                case '#microsoft.graph.riskyAgentIdentityBlueprintPrincipal': return new RiskyAgentIdentityBlueprintPrincipal();
                case '#microsoft.graph.riskyAgentUser': return new RiskyAgentUser();
            }
        }
        return new RiskyAgent();
    }

    /**
     * Gets the agentDisplayName property value. Name of the agent.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getAgentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('agentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentDisplayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentDisplayName' => fn(ParseNode $n) => $o->setAgentDisplayName($n->getStringValue()),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'isProcessing' => fn(ParseNode $n) => $o->setIsProcessing($n->getBooleanValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskLastModifiedDateTime' => fn(ParseNode $n) => $o->setRiskLastModifiedDateTime($n->getDateTimeValue()),
            'riskLevel' => fn(ParseNode $n) => $o->setRiskLevel($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
        ]);
    }

    /**
     * Gets the isDeleted property value. Indicates whether the agent is deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        $val = $this->getBackingStore()->get('isDeleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleted'");
    }

    /**
     * Gets the isEnabled property value. Indicates whether the agent is enabled.
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
     * Gets the isProcessing property value. Indicates whether an agent's risky state is processing in the backend.
     * @return bool|null
    */
    public function getIsProcessing(): ?bool {
        $val = $this->getBackingStore()->get('isProcessing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isProcessing'");
    }

    /**
     * Gets the riskDetail property value. The riskDetail property
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        $val = $this->getBackingStore()->get('riskDetail');
        if (is_null($val) || $val instanceof RiskDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskDetail'");
    }

    /**
     * Gets the riskLastModifiedDateTime property value. The date and time that the risky agent was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getRiskLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('riskLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLastModifiedDateTime'");
    }

    /**
     * Gets the riskLevel property value. The riskLevel property
     * @return RiskLevel|null
    */
    public function getRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevel'");
    }

    /**
     * Gets the riskState property value. The riskState property
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        $val = $this->getBackingStore()->get('riskState');
        if (is_null($val) || $val instanceof RiskState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentDisplayName', $this->getAgentDisplayName());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeBooleanValue('isProcessing', $this->getIsProcessing());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeDateTimeValue('riskLastModifiedDateTime', $this->getRiskLastModifiedDateTime());
        $writer->writeEnumValue('riskLevel', $this->getRiskLevel());
        $writer->writeEnumValue('riskState', $this->getRiskState());
    }

    /**
     * Sets the agentDisplayName property value. Name of the agent.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the agentDisplayName property.
    */
    public function setAgentDisplayName(?string $value): void {
        $this->getBackingStore()->set('agentDisplayName', $value);
    }

    /**
     * Sets the isDeleted property value. Indicates whether the agent is deleted.
     * @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the agent is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the isProcessing property value. Indicates whether an agent's risky state is processing in the backend.
     * @param bool|null $value Value to set for the isProcessing property.
    */
    public function setIsProcessing(?bool $value): void {
        $this->getBackingStore()->set('isProcessing', $value);
    }

    /**
     * Sets the riskDetail property value. The riskDetail property
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskLastModifiedDateTime property value. The date and time that the risky agent was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the riskLastModifiedDateTime property.
    */
    public function setRiskLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('riskLastModifiedDateTime', $value);
    }

    /**
     * Sets the riskLevel property value. The riskLevel property
     * @param RiskLevel|null $value Value to set for the riskLevel property.
    */
    public function setRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevel', $value);
    }

    /**
     * Sets the riskState property value. The riskState property
     * @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value): void {
        $this->getBackingStore()->set('riskState', $value);
    }

}
