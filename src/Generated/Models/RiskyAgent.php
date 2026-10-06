<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
                case '#microsoft.graph.riskyAgentDiscoveredAgentIdentity': return new RiskyAgentDiscoveredAgentIdentity();
                case '#microsoft.graph.riskyAgentIdentity': return new RiskyAgentIdentity();
                case '#microsoft.graph.riskyAgentIdentityBlueprintPrincipal': return new RiskyAgentIdentityBlueprintPrincipal();
                case '#microsoft.graph.riskyAgentUser': return new RiskyAgentUser();
            }
        }
        return new RiskyAgent();
    }

    /**
     * Gets the additionalInfo property value. The additionalInfo property
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
     * Gets the agentPlatform property value. The agentPlatform property
     * @return string|null
    */
    public function getAgentPlatform(): ?string {
        $val = $this->getBackingStore()->get('agentPlatform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentPlatform'");
    }

    /**
     * Gets the associatedUserId property value. The associatedUserId property
     * @return string|null
    */
    public function getAssociatedUserId(): ?string {
        $val = $this->getBackingStore()->get('associatedUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedUserId'");
    }

    /**
     * Gets the blastRadiusRisk property value. The blastRadiusRisk property
     * @return BlastRadiusRisk|null
    */
    public function getBlastRadiusRisk(): ?BlastRadiusRisk {
        $val = $this->getBackingStore()->get('blastRadiusRisk');
        if (is_null($val) || $val instanceof BlastRadiusRisk) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blastRadiusRisk'");
    }

    /**
     * Gets the blueprintId property value. The identifier of the blueprint associated with the agent. Nullable.
     * @return string|null
    */
    public function getBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('blueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blueprintId'");
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the exposureRisk property value. The exposureRisk property
     * @return ExposureRisk|null
    */
    public function getExposureRisk(): ?ExposureRisk {
        $val = $this->getBackingStore()->get('exposureRisk');
        if (is_null($val) || $val instanceof ExposureRisk) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exposureRisk'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getStringValue()),
            'agentDisplayName' => fn(ParseNode $n) => $o->setAgentDisplayName($n->getStringValue()),
            'agentPlatform' => fn(ParseNode $n) => $o->setAgentPlatform($n->getStringValue()),
            'associatedUserId' => fn(ParseNode $n) => $o->setAssociatedUserId($n->getStringValue()),
            'blastRadiusRisk' => fn(ParseNode $n) => $o->setBlastRadiusRisk($n->getObjectValue([BlastRadiusRisk::class, 'createFromDiscriminatorValue'])),
            'blueprintId' => fn(ParseNode $n) => $o->setBlueprintId($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'exposureRisk' => fn(ParseNode $n) => $o->setExposureRisk($n->getObjectValue([ExposureRisk::class, 'createFromDiscriminatorValue'])),
            'identityType' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(AgentIdentityType::class)),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'isProcessing' => fn(ParseNode $n) => $o->setIsProcessing($n->getBooleanValue()),
            'machineId' => fn(ParseNode $n) => $o->setMachineId($n->getStringValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskLastModifiedDateTime' => fn(ParseNode $n) => $o->setRiskLastModifiedDateTime($n->getDateTimeValue()),
            'riskLevel' => fn(ParseNode $n) => $o->setRiskLevel($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
            'runtimeRisk' => fn(ParseNode $n) => $o->setRuntimeRisk($n->getObjectValue([RuntimeRisk::class, 'createFromDiscriminatorValue'])),
            'sources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSources($val);
            },
        ]);
    }

    /**
     * Gets the identityType property value. The identityType property
     * @return AgentIdentityType|null
    */
    public function getIdentityType(): ?AgentIdentityType {
        $val = $this->getBackingStore()->get('identityType');
        if (is_null($val) || $val instanceof AgentIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityType'");
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
     * Gets the machineId property value. The machineId property
     * @return string|null
    */
    public function getMachineId(): ?string {
        $val = $this->getBackingStore()->get('machineId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineId'");
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
     * Gets the runtimeRisk property value. The runtimeRisk property
     * @return RuntimeRisk|null
    */
    public function getRuntimeRisk(): ?RuntimeRisk {
        $val = $this->getBackingStore()->get('runtimeRisk');
        if (is_null($val) || $val instanceof RuntimeRisk) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runtimeRisk'");
    }

    /**
     * Gets the sources property value. The sources property
     * @return array<string>|null
    */
    public function getSources(): ?array {
        $val = $this->getBackingStore()->get('sources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInfo', $this->getAdditionalInfo());
        $writer->writeStringValue('agentDisplayName', $this->getAgentDisplayName());
        $writer->writeStringValue('agentPlatform', $this->getAgentPlatform());
        $writer->writeStringValue('associatedUserId', $this->getAssociatedUserId());
        $writer->writeObjectValue('blastRadiusRisk', $this->getBlastRadiusRisk());
        $writer->writeStringValue('blueprintId', $this->getBlueprintId());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeObjectValue('exposureRisk', $this->getExposureRisk());
        $writer->writeEnumValue('identityType', $this->getIdentityType());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeBooleanValue('isProcessing', $this->getIsProcessing());
        $writer->writeStringValue('machineId', $this->getMachineId());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeDateTimeValue('riskLastModifiedDateTime', $this->getRiskLastModifiedDateTime());
        $writer->writeEnumValue('riskLevel', $this->getRiskLevel());
        $writer->writeEnumValue('riskState', $this->getRiskState());
        $writer->writeObjectValue('runtimeRisk', $this->getRuntimeRisk());
        $writer->writeCollectionOfPrimitiveValues('sources', $this->getSources());
    }

    /**
     * Sets the additionalInfo property value. The additionalInfo property
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
     * Sets the agentPlatform property value. The agentPlatform property
     * @param string|null $value Value to set for the agentPlatform property.
    */
    public function setAgentPlatform(?string $value): void {
        $this->getBackingStore()->set('agentPlatform', $value);
    }

    /**
     * Sets the associatedUserId property value. The associatedUserId property
     * @param string|null $value Value to set for the associatedUserId property.
    */
    public function setAssociatedUserId(?string $value): void {
        $this->getBackingStore()->set('associatedUserId', $value);
    }

    /**
     * Sets the blastRadiusRisk property value. The blastRadiusRisk property
     * @param BlastRadiusRisk|null $value Value to set for the blastRadiusRisk property.
    */
    public function setBlastRadiusRisk(?BlastRadiusRisk $value): void {
        $this->getBackingStore()->set('blastRadiusRisk', $value);
    }

    /**
     * Sets the blueprintId property value. The identifier of the blueprint associated with the agent. Nullable.
     * @param string|null $value Value to set for the blueprintId property.
    */
    public function setBlueprintId(?string $value): void {
        $this->getBackingStore()->set('blueprintId', $value);
    }

    /**
     * Sets the deviceId property value. The deviceId property
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the exposureRisk property value. The exposureRisk property
     * @param ExposureRisk|null $value Value to set for the exposureRisk property.
    */
    public function setExposureRisk(?ExposureRisk $value): void {
        $this->getBackingStore()->set('exposureRisk', $value);
    }

    /**
     * Sets the identityType property value. The identityType property
     * @param AgentIdentityType|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?AgentIdentityType $value): void {
        $this->getBackingStore()->set('identityType', $value);
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
     * Sets the machineId property value. The machineId property
     * @param string|null $value Value to set for the machineId property.
    */
    public function setMachineId(?string $value): void {
        $this->getBackingStore()->set('machineId', $value);
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

    /**
     * Sets the runtimeRisk property value. The runtimeRisk property
     * @param RuntimeRisk|null $value Value to set for the runtimeRisk property.
    */
    public function setRuntimeRisk(?RuntimeRisk $value): void {
        $this->getBackingStore()->set('runtimeRisk', $value);
    }

    /**
     * Sets the sources property value. The sources property
     * @param array<string>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

}
