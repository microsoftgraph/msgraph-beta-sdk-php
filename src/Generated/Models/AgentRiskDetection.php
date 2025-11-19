<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgentRiskDetection extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentRiskDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentRiskDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentRiskDetection {
        return new AgentRiskDetection();
    }

    /**
     * Gets the activityDateTime property value. Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the additionalInfo property value. Additional information associated with the risk detection.
     * @return string|null
    */
    public function getAdditionalInfo(): ?string {
        $val = $this->getBackingStore()->get('additionalInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInfo'");
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
     * Gets the agentId property value. The unique identifier for the agent. This is equivalent to 'id' to the specific agent type. See riskyAgentIdentity, riskyAgentIdentityBlueprintPrincipal, and riskyAgentUser.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getAgentId(): ?string {
        $val = $this->getBackingStore()->get('agentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentId'");
    }

    /**
     * Gets the detectedDateTime property value. Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('detectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedDateTime'");
    }

    /**
     * Gets the detectionTimingType property value. The detectionTimingType property
     * @return RiskDetectionTimingType|null
    */
    public function getDetectionTimingType(): ?RiskDetectionTimingType {
        $val = $this->getBackingStore()->get('detectionTimingType');
        if (is_null($val) || $val instanceof RiskDetectionTimingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionTimingType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getStringValue()),
            'agentDisplayName' => fn(ParseNode $n) => $o->setAgentDisplayName($n->getStringValue()),
            'agentId' => fn(ParseNode $n) => $o->setAgentId($n->getStringValue()),
            'detectedDateTime' => fn(ParseNode $n) => $o->setDetectedDateTime($n->getDateTimeValue()),
            'detectionTimingType' => fn(ParseNode $n) => $o->setDetectionTimingType($n->getEnumValue(RiskDetectionTimingType::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskEventType' => fn(ParseNode $n) => $o->setRiskEventType($n->getStringValue()),
            'riskEvidence' => fn(ParseNode $n) => $o->setRiskEvidence($n->getStringValue()),
            'riskLevel' => fn(ParseNode $n) => $o->setRiskLevel($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time that the risk detection was last updated.  Supports $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the riskEventType property value. The type of risk event detected.  Supports $filter (eq).
     * @return string|null
    */
    public function getRiskEventType(): ?string {
        $val = $this->getBackingStore()->get('riskEventType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEventType'");
    }

    /**
     * Gets the riskEvidence property value. Evidence on the risky activity occurred.  Supports $filter (eq).
     * @return string|null
    */
    public function getRiskEvidence(): ?string {
        $val = $this->getBackingStore()->get('riskEvidence');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEvidence'");
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
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('additionalInfo', $this->getAdditionalInfo());
        $writer->writeStringValue('agentDisplayName', $this->getAgentDisplayName());
        $writer->writeStringValue('agentId', $this->getAgentId());
        $writer->writeDateTimeValue('detectedDateTime', $this->getDetectedDateTime());
        $writer->writeEnumValue('detectionTimingType', $this->getDetectionTimingType());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeStringValue('riskEventType', $this->getRiskEventType());
        $writer->writeStringValue('riskEvidence', $this->getRiskEvidence());
        $writer->writeEnumValue('riskLevel', $this->getRiskLevel());
        $writer->writeEnumValue('riskState', $this->getRiskState());
    }

    /**
     * Sets the activityDateTime property value. Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the additionalInfo property value. Additional information associated with the risk detection.
     * @param string|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?string $value): void {
        $this->getBackingStore()->set('additionalInfo', $value);
    }

    /**
     * Sets the agentDisplayName property value. Name of the agent.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the agentDisplayName property.
    */
    public function setAgentDisplayName(?string $value): void {
        $this->getBackingStore()->set('agentDisplayName', $value);
    }

    /**
     * Sets the agentId property value. The unique identifier for the agent. This is equivalent to 'id' to the specific agent type. See riskyAgentIdentity, riskyAgentIdentityBlueprintPrincipal, and riskyAgentUser.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the agentId property.
    */
    public function setAgentId(?string $value): void {
        $this->getBackingStore()->set('agentId', $value);
    }

    /**
     * Sets the detectedDateTime property value. Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('detectedDateTime', $value);
    }

    /**
     * Sets the detectionTimingType property value. The detectionTimingType property
     * @param RiskDetectionTimingType|null $value Value to set for the detectionTimingType property.
    */
    public function setDetectionTimingType(?RiskDetectionTimingType $value): void {
        $this->getBackingStore()->set('detectionTimingType', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time that the risk detection was last updated.  Supports $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the riskDetail property value. The riskDetail property
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskEventType property value. The type of risk event detected.  Supports $filter (eq).
     * @param string|null $value Value to set for the riskEventType property.
    */
    public function setRiskEventType(?string $value): void {
        $this->getBackingStore()->set('riskEventType', $value);
    }

    /**
     * Sets the riskEvidence property value. Evidence on the risky activity occurred.  Supports $filter (eq).
     * @param string|null $value Value to set for the riskEvidence property.
    */
    public function setRiskEvidence(?string $value): void {
        $this->getBackingStore()->set('riskEvidence', $value);
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
