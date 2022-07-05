<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesAgent extends Entity implements Parsable 
{
    /**
     * @var array<OnPremisesAgentGroup>|null $agentGroups List of onPremisesAgentGroups that an onPremisesAgent is assigned to. Read-only. Nullable.
    */
    private ?array $agentGroups = null;
    
    /**
     * @var string|null $externalIp The external IP address as detected by the service for the agent machine. Read-only
    */
    private ?string $externalIp = null;
    
    /**
     * @var string|null $machineName The name of the machine that the aggent is running on. Read-only
    */
    private ?string $machineName = null;
    
    /**
     * @var AgentStatus|null $status Possible values are: active, inactive.
    */
    private ?AgentStatus $status = null;
    
    /**
     * @var array<string>|null $supportedPublishingTypes The supportedPublishingTypes property
    */
    private ?array $supportedPublishingTypes = null;
    
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
        return $this->agentGroups;
    }

    /**
     * Gets the externalIp property value. The external IP address as detected by the service for the agent machine. Read-only
     * @return string|null
    */
    public function getExternalIp(): ?string {
        return $this->externalIp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentGroups' => function (ParseNode $n) use ($o) { $o->setAgentGroups($n->getCollectionOfObjectValues(array(OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'))); },
            'externalIp' => function (ParseNode $n) use ($o) { $o->setExternalIp($n->getStringValue()); },
            'machineName' => function (ParseNode $n) use ($o) { $o->setMachineName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AgentStatus::class)); },
            'supportedPublishingTypes' => function (ParseNode $n) use ($o) { $o->setSupportedPublishingTypes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the machineName property value. The name of the machine that the aggent is running on. Read-only
     * @return string|null
    */
    public function getMachineName(): ?string {
        return $this->machineName;
    }

    /**
     * Gets the status property value. Possible values are: active, inactive.
     * @return AgentStatus|null
    */
    public function getStatus(): ?AgentStatus {
        return $this->status;
    }

    /**
     * Gets the supportedPublishingTypes property value. The supportedPublishingTypes property
     * @return array<string>|null
    */
    public function getSupportedPublishingTypes(): ?array {
        return $this->supportedPublishingTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->agentGroups);
        $writer->writeStringValue('externalIp', $this->externalIp);
        $writer->writeStringValue('machineName', $this->machineName);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeCollectionOfPrimitiveValues('supportedPublishingTypes', $this->supportedPublishingTypes);
    }

    /**
     * Sets the agentGroups property value. List of onPremisesAgentGroups that an onPremisesAgent is assigned to. Read-only. Nullable.
     *  @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value ): void {
        $this->agentGroups = $value;
    }

    /**
     * Sets the externalIp property value. The external IP address as detected by the service for the agent machine. Read-only
     *  @param string|null $value Value to set for the externalIp property.
    */
    public function setExternalIp(?string $value ): void {
        $this->externalIp = $value;
    }

    /**
     * Sets the machineName property value. The name of the machine that the aggent is running on. Read-only
     *  @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value ): void {
        $this->machineName = $value;
    }

    /**
     * Sets the status property value. Possible values are: active, inactive.
     *  @param AgentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AgentStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the supportedPublishingTypes property value. The supportedPublishingTypes property
     *  @param array<string>|null $value Value to set for the supportedPublishingTypes property.
    */
    public function setSupportedPublishingTypes(?array $value ): void {
        $this->supportedPublishingTypes = $value;
    }

}
