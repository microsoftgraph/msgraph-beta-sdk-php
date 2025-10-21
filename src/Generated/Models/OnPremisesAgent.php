<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnPremisesAgent extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnPremisesAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesAgent {
        return new OnPremisesAgent();
    }

    /**
     * Gets the agentGroups property value. List of onPremisesAgentGroups that an onPremisesAgent is assigned to. Read-only. Nullable.
     * @return array<OnPremisesAgentGroup>|null
    */
    public function getAgentGroups(): ?array {
        $val = $this->getBackingStore()->get('agentGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesAgentGroup::class);
            /** @var array<OnPremisesAgentGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentGroups'");
    }

    /**
     * Gets the externalIp property value. The external IP address as detected by the service for the agent machine. Read-only
     * @return string|null
    */
    public function getExternalIp(): ?string {
        $val = $this->getBackingStore()->get('externalIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalIp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentGroups' => fn(ParseNode $n) => $o->setAgentGroups($n->getCollectionOfObjectValues([OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'])),
            'externalIp' => fn(ParseNode $n) => $o->setExternalIp($n->getStringValue()),
            'machineName' => fn(ParseNode $n) => $o->setMachineName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AgentStatus::class)),
            'supportedPublishingTypes' => fn(ParseNode $n) => $o->setSupportedPublishingTypes($n->getCollectionOfEnumValues(OnPremisesPublishingType::class)),
        ]);
    }

    /**
     * Gets the machineName property value. The name of the machine that the agent is running on. Read-only
     * @return string|null
    */
    public function getMachineName(): ?string {
        $val = $this->getBackingStore()->get('machineName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineName'");
    }

    /**
     * Gets the status property value. The status property
     * @return AgentStatus|null
    */
    public function getStatus(): ?AgentStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AgentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the supportedPublishingTypes property value. Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
     * @return array<OnPremisesPublishingType>|null
    */
    public function getSupportedPublishingTypes(): ?array {
        $val = $this->getBackingStore()->get('supportedPublishingTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesPublishingType::class);
            /** @var array<OnPremisesPublishingType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedPublishingTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->getAgentGroups());
        $writer->writeStringValue('externalIp', $this->getExternalIp());
        $writer->writeStringValue('machineName', $this->getMachineName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfEnumValues('supportedPublishingTypes', $this->getSupportedPublishingTypes());
    }

    /**
     * Sets the agentGroups property value. List of onPremisesAgentGroups that an onPremisesAgent is assigned to. Read-only. Nullable.
     * @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value): void {
        $this->getBackingStore()->set('agentGroups', $value);
    }

    /**
     * Sets the externalIp property value. The external IP address as detected by the service for the agent machine. Read-only
     * @param string|null $value Value to set for the externalIp property.
    */
    public function setExternalIp(?string $value): void {
        $this->getBackingStore()->set('externalIp', $value);
    }

    /**
     * Sets the machineName property value. The name of the machine that the agent is running on. Read-only
     * @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value): void {
        $this->getBackingStore()->set('machineName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param AgentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AgentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the supportedPublishingTypes property value. Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
     * @param array<OnPremisesPublishingType>|null $value Value to set for the supportedPublishingTypes property.
    */
    public function setSupportedPublishingTypes(?array $value): void {
        $this->getBackingStore()->set('supportedPublishingTypes', $value);
    }

}
